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
    public function documentacionIndex(){
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
}
