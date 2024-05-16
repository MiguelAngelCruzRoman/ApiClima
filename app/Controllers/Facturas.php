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

        $content = [
            'datos' => $allFacturas,
        ];

        $response = service('response');
        $response->setStatusCode(Response::HTTP_OK);
        $response->setJSON($content);
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

        $content = [
            'datos' => $allFacturas,
        ];

        $response = service('response');
        $response->setStatusCode(Response::HTTP_OK);
        $response->setJSON($content);
        return $response;
    }

    public function getByRangoFechasEmision($fechaInicio, $fechaFin)
    {
        $facturas = new FacturasModel();
        $allFacturas = $facturas->getByRangoFechasEmision($fechaInicio, $fechaFin);

        $content = [
            'datos' => $allFacturas,
        ];

        $response = service('response');
        $response->setStatusCode(Response::HTTP_OK);
        $response->setJSON($content);
        return $response;
    }

    public function getByEstatusProximoVencimiento($estatus)
    {
        $facturas = new FacturasModel();
        $allFacturas = $facturas->getByEstatusProximoVencimiento($estatus);

        $content = [
            'datos' => $allFacturas,
        ];

        $response = service('response');
        $response->setStatusCode(Response::HTTP_OK);
        $response->setJSON($content);
        return $response;
    }

    public function getByFechaReservacion($fecha)
    {
        $facturas = new FacturasModel();
        $allFacturas = $facturas->getByFechaReservacion($fecha);

        $content = [
            'datos' => $allFacturas,
        ];

        $response = service('response');
        $response->setStatusCode(Response::HTTP_OK);
        $response->setJSON($content);
        return $response;
    }
}
