<?php

namespace App\Models;

use CodeIgniter\Model;
use MongoDB\Client as MongoDBClient;

class HotelesModel extends Model
{
    protected $collection;

    public function __construct()
    {
        parent::__construct();
        $this->collection = (new MongoDBClient('mongodb+srv://YoMero:Contrasenia.Segura.123@yomerocluster.eit2hnw.mongodb.net/?retryWrites=true&w=majority&appName=YoMeroCluster'))->apiHotel->hoteles;
    }

    public function index()
    {
        $hoteles = $this->collection->find();
        return $hoteles->toArray();
    }

    public function getByCiudad($ciudad)
    {
        $hoteles = $this->collection->find(['ubicacion.ciudad' => $ciudad]);
        return $hoteles->toArray();
    }

    public function getByTipoCategoria($tipo, $categoria)
    {
        $hoteles = $this->collection->find(['tipo' => $tipo, 'categoria' => (int) $categoria]);
        return $hoteles->toArray();
    }

    public function getByAmenidades($servicios)
    {
        $serviciosArray = explode(',', $servicios);
        $filtroServicios = ['amenidades' => ['$in' => $serviciosArray]];
        $hoteles = $this->collection->find($filtroServicios);

        return $hoteles->toArray();
    }

    public function getByRangoHoraCheck($tipo, $horaInicio, $horaFin)
    {
        if ((bool) $tipo == true) {
            $facturas = $this->collection->find(['checkIn' => ['$gte' => $horaInicio, '$lte' => $horaFin]]);
        } else {
            $facturas = $this->collection->find(['checkout' => ['$gte' => $horaInicio, '$lte' => $horaFin]]);
        }
        return $facturas->toArray();
    }
}
