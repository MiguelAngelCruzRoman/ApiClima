<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\HabitacionesModel;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\HTTP\Response;
use CodeIgniter\API\ResponseTrait;

class Habitaciones extends BaseController
{
    public function index()
    {
        $habitaciones = new HabitacionesModel();
        $allHabitaciones = $habitaciones->index();

        $response = service('response');
        $response->setStatusCode(Response::HTTP_OK);
        $response->setJSON($allHabitaciones);
        return $response;
    }
    public function documentacionIndex()
    {
        return view('habitaciones/index');
    }

    public function getByPrecio($precio)
    {
        $habitaciones = new HabitacionesModel();
        $allHabitaciones = $habitaciones->getByPrecio($precio);

        $response = service('response');
        $response->setStatusCode(Response::HTTP_OK);
        $response->setJSON($allHabitaciones);
        return $response;
    }

    public function getByServiciosExactos($servicios)
    {
        $habitaciones = new HabitacionesModel();
        $allHabitaciones = $habitaciones->getByServiciosExactos($servicios);

        $response = service('response');
        $response->setStatusCode(Response::HTTP_OK);
        $response->setJSON($allHabitaciones);
        return $response;
    }

    public function getByServiciosSimilares($servicios)
    {
        $habitaciones = new HabitacionesModel();
        $allHabitaciones = $habitaciones->getByServiciosSimilares($servicios);

        $response = service('response');
        $response->setStatusCode(Response::HTTP_OK);
        $response->setJSON($allHabitaciones);
        return $response;
    }

    public function getByDisponibilidadHotel($disponibilidad, $nombreHotel)
    {
        $habitaciones = new HabitacionesModel();
        $allHabitaciones = $habitaciones->getByDisponibilidadHotel($disponibilidad, $nombreHotel);

        $response = service('response');
        $response->setStatusCode(Response::HTTP_OK);
        $response->setJSON($allHabitaciones);
        return $response;
    }
}
