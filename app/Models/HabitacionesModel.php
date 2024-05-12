<?php

namespace App\Models;

use CodeIgniter\Model;
use MongoDB\Client as MongoDBClient;

class HabitacionesModel extends Model
{
    protected $collection;

    public function __construct()
    {
        parent::__construct();
        $this->collection = (new MongoDBClient('mongodb+srv://YoMero:Contrasenia.Segura.123@yomerocluster.eit2hnw.mongodb.net/?retryWrites=true&w=majority&appName=YoMeroCluster'))->apiHotel->habitaciones;
    }

    public function index()
    {
        $habitaciones = $this->collection->find();
        return $habitaciones->toArray();
    }

    public function getByPrecio($precio)
    {
        $habitaciones = $this->collection->find(['precioNoche' => intval($precio)]);
        return $habitaciones->toArray();
    }

    public function getByServiciosExactos($servicios)
    {
        $serviciosArray = explode(',', $servicios);
        $filtro = ['serviciosIncluidos' => ['$all' => $serviciosArray]];
        $habitaciones = $this->collection->find($filtro);

        return $habitaciones->toArray();
    }

    public function getByServiciosSimilares($servicios)
    {
        $serviciosArray = explode(',', $servicios);
        $filtroServicios = ['serviciosIncluidos' => ['$in' => $serviciosArray]];
        $habitaciones = $this->collection->find($filtroServicios);

        return $habitaciones->toArray();
    }

    public function getByDisponibilidadHotel($disponibilidad, $nombreHotel)
    {
        $hotelesCollection = (new MongoDBClient('mongodb+srv://YoMero:Contrasenia.Segura.123@yomerocluster.eit2hnw.mongodb.net/?retryWrites=true&w=majority&appName=YoMeroCluster'))->apiHotel->hoteles;

        $hoteles = $hotelesCollection->find(['nombre' => $nombreHotel]);

        $idsHoteles = [];

        foreach ($hoteles as $hotel) {
            $idsHoteles[] = $hotel['_id'];
        }


        $habitaciones = $this->collection->find([
            'id_Hotel' => ['$in' => $idsHoteles],
            'disponible' => (bool) $disponibilidad
        ]);

        return $habitaciones->toArray();
    }
}
