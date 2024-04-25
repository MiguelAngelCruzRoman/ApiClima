<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\HTTP\Response;
use CodeIgniter\API\ResponseTrait;

class Clima extends BaseController
{   
    public function getUbicaciones()
{
    $data['datos'] = model('ClimaModel')->getUbicaciones();
    
    $response = response();
    $response->setStatusCode(Response::HTTP_OK);
    $response->setBody(json_encode($data));
    $response->setHeader('Content-Type', 'application/json');
    $response->noCache();

    $response->send();
}



    public function getClimaByCP()
    {
        $model = model('ClimaModel');
        $data['datos'] = $model->getClimaByCP();

        $response = response();
        $response->setStatusCode(Response::HTTP_OK);
        $response->setBody(json_encode($data));
        $response->setHeader('Content-Type', 'application/json');
        $response->noCache();

        $response->send();
    }

    public function getClimaByFechas()
    {
        $model = model('ClimaModel');
        $data['datos'] = $model->getClimaByFechas();

        $response = response();
        $response->setStatusCode(Response::HTTP_OK);
        $response->setBody(json_encode($data));
        $response->setHeader('Content-Type', 'application/json');
        $response->noCache();

        $response->send();
    }

    public function getClimaByUbicacion()
    {
        $model = model('ClimaModel');
        $data['datos'] = $model->getClimaByUbicacion();

        $response = response();
        $response->setStatusCode(Response::HTTP_OK);
        $response->setBody(json_encode($data));
        $response->setHeader('Content-Type', 'application/json');
        $response->noCache();

        $response->send();
    }


    public function getClimaByUbicacionDia()
    {
        $model = model('ClimaModel');
        $data['datos'] = $model->getClimaByUbicacionDia();

        $response = response();
        $response->setStatusCode(Response::HTTP_OK);
        $response->setBody(json_encode($data));
        $response->setHeader('Content-Type', 'application/json');
        $response->noCache();

        $response->send();
    }

    public function getClimaByUbicacionHora()
    {
        $model = model('ClimaModel');
        $data['datos'] = $model->getClimaByUbicacionHora();

        $response = response();
        $response->setStatusCode(Response::HTTP_OK);
        $response->setBody(json_encode($data));
        $response->setHeader('Content-Type', 'application/json');
        $response->noCache();

        $response->send();
    }

    public function getClimaByTemperatura()
    {
        $model = model('ClimaModel');
        $data['datos'] = $model->getClimaByTemperatura();

        $response = response();
        $response->setStatusCode(Response::HTTP_OK);
        $response->setBody(json_encode($data));
        $response->setHeader('Content-Type', 'application/json');
        $response->noCache();

        $response->send();
    }

    public function getClimaByTemperaturaSensacionTermica()
    {
        $model = model('ClimaModel');
        $data['datos'] = $model->getClimaByTemperaturaSensacionTermica();

        $response = response();
        $response->setStatusCode(Response::HTTP_OK);
        $response->setBody(json_encode($data));
        $response->setHeader('Content-Type', 'application/json');
        $response->noCache();

        $response->send();
    }

    public function getClimaByTipoClima()
    {
        $model = model('ClimaModel');
        $data['datos'] = $model->getClimaByTipoClima();

        $response = response();
        $response->setStatusCode(Response::HTTP_OK);
        $response->setBody(json_encode($data));
        $response->setHeader('Content-Type', 'application/json');
        $response->noCache();

        $response->send();
    }

    public function getClimaByTipoClimaUbicacion()
    {
        $model = model('ClimaModel');
        $data['datos'] = $model->getClimaByTipoClimaUbicacion();

        $response = response();
        $response->setStatusCode(Response::HTTP_OK);
        $response->setBody(json_encode($data));
        $response->setHeader('Content-Type', 'application/json');
        $response->noCache();

        $response->send();
    }

    public function getClimaByTipoClimaUbicacionTemperatura()
    {
        $model = model('ClimaModel');
        $data['datos'] = $model->getClimaByTipoClimaUbicacionTemperatura();

        $response = response();
        $response->setStatusCode(Response::HTTP_OK);
        $response->setBody(json_encode($data));
        $response->setHeader('Content-Type', 'application/json');
        $response->noCache();

        $response->send();
    }

    public function getClimaByTipoClimaAltitudHora()
    {
        $model = model('ClimaModel');
        $data['datos'] = $model->getClimaByTipoClimaAltitudHora();

        $response = response();
        $response->setStatusCode(Response::HTTP_OK);
        $response->setBody(json_encode($data));
        $response->setHeader('Content-Type', 'application/json');
        $response->noCache();

        $response->send();
    }

    public function getClimaByHumedadSensacionTermica()
    {
        $model = model('ClimaModel');
        $data['datos'] = $model->getClimaByHumedadSensacionTermica();

        $response = response();
        $response->setStatusCode(Response::HTTP_OK);
        $response->setBody(json_encode($data));
        $response->setHeader('Content-Type', 'application/json');
        $response->noCache();

        $response->send();
    }

}
