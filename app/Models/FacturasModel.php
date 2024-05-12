<?php

namespace App\Models;

use CodeIgniter\Model;
use MongoDB\Client as MongoDBClient;

class FacturasModel extends Model
{
    protected $collection;

    public function __construct()
    {
        parent::__construct();
        $this->collection = (new MongoDBClient('mongodb+srv://YoMero:Contrasenia.Segura.123@yomerocluster.eit2hnw.mongodb.net/?retryWrites=true&w=majority&appName=YoMeroCluster'))->apiHotel->facturas;
    }

    public function index()
    {
        $facturas = $this->collection->find();
        return $facturas->toArray();
    }

    public function getByMetodoPago($metodoPago)
    {
        $facturas = $this->collection->find(['metodoPago' => $metodoPago]);
        return $facturas->toArray();
    }

    public function getByRangoFechasEmision($fechaInicio, $fechaFin)
    {
        $facturas = $this->collection->find(['fechaEmision' => ['$gte' => $fechaInicio, '$lte' => $fechaFin]]);
        return $facturas->toArray();
    }

    public function getByEstatusProximoVencimiento($estatus)
    {
        $facturas = $this->collection->find(['estatus' => $estatus, 'fechaVencimiento' => ['$gte' => date("Y-m-d")]]);
        return $facturas->toArray();
    }

    public function getByFechaReservacion($fecha)
    {
        $reservacionesCollection = (new MongoDBClient('mongodb+srv://YoMero:Contrasenia.Segura.123@yomerocluster.eit2hnw.mongodb.net/?retryWrites=true&w=majority&appName=YoMeroCluster'))->apiHotel->reservaciones;

        $reservaciones = $reservacionesCollection->find(['fechaReservacion' => $fecha]);

        $idsReservaciones = [];

        foreach ($reservaciones as $reservacion) {
            $idsReservaciones[] = $reservacion['_id'];
        }

        $facturas = $this->collection->find([
            'id_Reservacion' => ['$in' => $idsReservaciones],
        ]);

        return $facturas->toArray();
    }
}
