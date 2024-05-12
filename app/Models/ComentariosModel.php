<?php

namespace App\Models;

use CodeIgniter\Model;
use MongoDB\Client as MongoDBClient;

class ComentariosModel extends Model
{
    protected $collection;

    public function __construct()
    {
        parent::__construct();
        $this->collection = (new MongoDBClient('mongodb+srv://YoMero:Contrasenia.Segura.123@yomerocluster.eit2hnw.mongodb.net/?retryWrites=true&w=majority&appName=YoMeroCluster'))->apiHotel->comentarios;
    }

    public function index()
    {
        $comentarios = $this->collection->find();
        return $comentarios->toArray();
    }

    public function getByCalificacion($calificacion)
    {
        $comentarios = $this->collection->find(['calificacion' => intval($calificacion)]);
        return $comentarios->toArray();
    }

    public function getByCliente($nombreCliente)
    {

        $clientesCollection = (new MongoDBClient('mongodb+srv://YoMero:Contrasenia.Segura.123@yomerocluster.eit2hnw.mongodb.net/?retryWrites=true&w=majority&appName=YoMeroCluster'))->apiHotel->clientes;

        $clientes = $clientesCollection->find([
            '$or' => [
                ['primerNombre' => $nombreCliente],
                ['segundoNombre' => $nombreCliente],
                ['apellidoPaterno' => $nombreCliente],
                ['apellidoMaterno' => $nombreCliente]
            ]
        ]);

        $idsClientes = [];

        foreach ($clientes as $cliente) {
            $idsClientes[] = $cliente['_id'];
        }

        $comentarios = $this->collection->find(['id_Cliente' => ['$in' => $idsClientes]]);

        return $comentarios->toArray();
    }


    public function getByRangoFechas($fechaInicio,$fechaFin)
    {
        $comentarios = $this->collection->find(['fecha' => ['$gte' => $fechaInicio,'$lte' => $fechaFin]]);        
        return $comentarios->toArray();
    }

    public function getByHotelCalificacion($nombreHotel, $calificacion)
{
    $hotelesCollection = (new MongoDBClient('mongodb+srv://YoMero:Contrasenia.Segura.123@yomerocluster.eit2hnw.mongodb.net/?retryWrites=true&w=majority&appName=YoMeroCluster'))->apiHotel->hoteles;

    $hoteles = $hotelesCollection->find(['nombre' => $nombreHotel]);

    $idsHoteles = [];

    foreach ($hoteles as $hotel) {
        $idsHoteles[] = $hotel['_id'];
    }

    $comentarios = $this->collection->find([
        'id_Hotel' => ['$in' => $idsHoteles],
        'calificacion' => (int)$calificacion
    ]);

    return $comentarios->toArray();
}

}
