<?php

namespace App\Models;

use CodeIgniter\Model;
use DateTime;
use MongoDB\Client as MongoDBClient;

class ReservacionesModel extends Model
{
    protected $collection;

    public function __construct()
    {
        parent::__construct();
        $this->collection = (new MongoDBClient('mongodb+srv://YoMero:Contrasenia.Segura.123@yomerocluster.eit2hnw.mongodb.net/?retryWrites=true&w=majority&appName=YoMeroCluster'))->apiHotel->reservaciones;
    }

    public function index()
    {
        $reservaciones = $this->collection->find();
        return $reservaciones->toArray();
    }

    public function getByEstatus($estatus)
    {
        $reservaciones = $this->collection->find(['estatus' => $estatus]);
        return $reservaciones->toArray();
    }

    public function getByRangoFechasEstadia($fechaInicio, $fechaFin)
    {
        $reservaciones = $this->collection->find(['fechaEntrada' => ['$gte' => $fechaInicio, '$lte' => $fechaFin]]);
        return $reservaciones->toArray();
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

        $reservaciones = $this->collection->find(['id_Cliente' => ['$in' => $idsClientes]]);

        return $reservaciones->toArray();
    }

    public function getByTipoHabitacion($tipoHabitacion)
    {

        $habitacionesCollection = (new MongoDBClient('mongodb+srv://YoMero:Contrasenia.Segura.123@yomerocluster.eit2hnw.mongodb.net/?retryWrites=true&w=majority&appName=YoMeroCluster'))->apiHotel->habitaciones;

        $habitaciones = $habitacionesCollection->find(['tipo' => "Doble"]);

        $idsHabitaciones = [];

        foreach ($habitaciones as $habitacion) {
            $idsHabitaciones[] = $habitacion['_id'];
        }

        $reservaciones = $this->collection->find(['id_Habitacion' => ['$in' => $idsHabitaciones]]);

        return $reservaciones->toArray();
    }
}
