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
        $data['datos'] = $model->getUbicaciones();
        return view ('datos',$data);
    }

    public function getClimaByCP(){
        $model = model('ClimaModel');
        $data['datos'] = $model->getClimaByCP();
        return view('datos',$data);
    }
}
