<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\FacturasModel;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\HTTP\Response;
use CodeIgniter\API\ResponseTrait;

class Facturas extends BaseController
{
    public function index()
    {
        $facturas = new FacturasModel();
        $allFacturas = $facturas->index();

        $response = service('response');
        $response->setStatusCode(Response::HTTP_OK);
        $response->setJSON($allFacturas);
        return $response;
    }
    public function documentacionIndex()
    {
        return view('facturas/index');
    }

    public function getByMetodoPago($metodoPago)
    {
        $facturas = new FacturasModel();
        $allFacturas = $facturas->getByMetodoPago($metodoPago);

        $response = service('response');
        $response->setStatusCode(Response::HTTP_OK);
        $response->setJSON($allFacturas);
        return $response;
    }

    public function getByRangoFechasEmision($fechaInicio, $fechaFin)
    {
        $facturas = new FacturasModel();
        $allFacturas = $facturas->getByRangoFechasEmision($fechaInicio, $fechaFin);

        $response = service('response');
        $response->setStatusCode(Response::HTTP_OK);
        $response->setJSON($allFacturas);
        return $response;
    }

    public function getByEstatusProximoVencimiento($estatus)
    {
        $facturas = new FacturasModel();
        $allFacturas = $facturas->getByEstatusProximoVencimiento($estatus);

        $response = service('response');
        $response->setStatusCode(Response::HTTP_OK);
        $response->setJSON($allFacturas);
        return $response;
    }

    public function getByFechaReservacion($fecha)
    {
        $facturas = new FacturasModel();
        $allFacturas = $facturas->getByFechaReservacion($fecha);

        $response = service('response');
        $response->setStatusCode(Response::HTTP_OK);
        $response->setJSON($allFacturas);
        return $response;
    }
}
