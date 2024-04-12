<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Clima extends BaseController
{
    public function index()
    {
        return view('documentacion');
    }

    public function getUbicaciones(){
        $model = model('ClimaModel');
        $ubicaciones = $model->select('ubicacion')->groupBy('ubicacion')->findAll();
        print_r($ubicaciones);
    }
}
