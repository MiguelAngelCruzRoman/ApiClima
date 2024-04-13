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

    public function getClimaByFechas(){
        $model = model('ClimaModel');
        $data['datos'] = $model->getClimaByFechas();
        return view('datos',$data);
    }

    public function getClimaByUbicacion(){
        $model = model('ClimaModel');
        $data['datos'] = $model->getClimaByUbicacion();
        return view('datos',$data);
    }
    

    public function getClimaByUbicacionDia(){
        $model = model('ClimaModel');
        $data['datos'] = $model->getClimaByUbicacionDia();
        return view('datos',$data);
    }

    public function getClimaByUbicacionHora(){
        $model = model('ClimaModel');
        $data['datos'] = $model->getClimaByUbicacionHora();
        return view('datos',$data);
    }

    public function getClimaByTemperatura(){
        $model = model('ClimaModel');
        $data['datos'] = $model->getClimaByTemperatura();
        return view('datos',$data);
    }

    public function getClimaByTemperaturaSensacionTermica(){
        $model = model('ClimaModel');
        $data['datos'] = $model->getClimaByTemperaturaSensacionTermica();
        return view('datos',$data);
    }

    public function getClimaByTipoClima(){
        $model = model('ClimaModel');
        $data['datos'] = $model->getClimaByTipoClima();
        return view('datos',$data);
    }

    public function getClimaByTipoClimaUbicacion(){
        $model = model('ClimaModel');
        $data['datos'] = $model->getClimaByTipoClimaUbicacion();
        return view('datos',$data);
    }

    public function getClimaByTipoClimaUbicacionTemperatura(){
        $model = model('ClimaModel');
        $data['datos'] = $model->getClimaByTipoClimaUbicacionTemperatura();
        return view('datos',$data);
    }

    public function getClimaByTipoClimaAltitudHora(){
        $model = model('ClimaModel');
        $data['datos'] = $model->getClimaByTipoClimaAltitudHora();
        return view('datos',$data);
    }

    public function getClimaByHumedadSensacionTermica(){
        $model = model('ClimaModel');
        $data['datos'] = $model->getClimaByHumedadSensacionTermica();
        return view('datos',$data);
    }
    
}
