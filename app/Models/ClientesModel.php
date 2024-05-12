<?php

namespace App\Models;

use CodeIgniter\Model;
use MongoDB\Client as MongoDBClient;

class ClientesModel extends Model
{
    protected $collection;

    public function __construct()
    {
        parent::__construct();
        $this->collection = (new MongoDBClient('mongodb+srv://YoMero:Contrasenia.Segura.123@yomerocluster.eit2hnw.mongodb.net/?retryWrites=true&w=majority&appName=YoMeroCluster'))->apiHotel->clientes;
    }

    public function index()
    {
        $clientes = $this->collection->find();
        return $clientes->toArray();
    }

    public function getByNombre($nombre)
    {
        $clientes = $this->collection->find([
            '$or' => [
                ['primerNombre' => $nombre],
                ['segundoNombre' => $nombre],
                ['apellidoPaterno' => $nombre],
                ['apellidoMaterno' => $nombre]
            ]
        ]);

        return $clientes->toArray();
    }

    public function getByNacionalidad($nacionalidad)
    {
        $clientes = $this->collection->find(['nacionalidad' => $nacionalidad]);
        return $clientes->toArray();
    }

    public function getByDocumentoIdentidadValido($documento)
    {
        $clientes = $this->collection->find(['documentoIdentidad.tipoDocumento' => $documento, 'documentoIdentidad.fechaValidez' => ['$gte' => date("Y-m-d")]]);
        return $clientes->toArray();
    }

    public function getByTipoTarjetaBanco($tipoTarjeta, $banco)
    {
        $clientes = $this->collection->find(['tarjetaCredito.tipo' => $tipoTarjeta, 'tarjetaCredito.banco' => $banco, 'tarjetaCredito.fechaCaducidad' => ['$gte' => date("Y-m-d")]]);
        return $clientes->toArray();
    }

}
