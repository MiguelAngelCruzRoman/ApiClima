<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ClientesModel;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\HTTP\Response;
use CodeIgniter\API\ResponseTrait;
use GuzzleHttp\Client;

class Clientes extends BaseController
{
    use ResponseTrait;

    public function index()
    {
        $clientes = new ClientesModel();

        $allClientes = $clientes->index();

        $content = [
            'datos' => $allClientes,
        ];

        $response = service('response');
        $response->setStatusCode(Response::HTTP_OK);
        $response->setJSON($content);

        return $response;
    }


    public function documentacionIndex()
    {
        $client = new Client();
        $response = $client->get('https://severely-massive-gannet.ngrok-free.app/getAviones');

        $statusCode = $response->getStatusCode();
        $content = $response->getBody()->getContents();

        if ($statusCode == 200) {
            $datos['clientes'] = json_decode($content);
            return view('clientes/index', $datos);
        } else {
            return $this->fail("Error al obtener clientes de la API remota", $statusCode);
        }
    }



    public function getByNombre($nombre)
    {
        $clientes = new ClientesModel();
        $allClientes = $clientes->getByNombre($nombre);

        $content = [
            'datos' => $allClientes,
        ];

        $response = service('response');
        $response->setStatusCode(Response::HTTP_OK);
        $response->setJSON($content);
        return $response;
    }

    public function getByNacionalidad($nacionalidad)
    {
        $clientes = new ClientesModel();
        $allClientes = $clientes->getByNacionalidad($nacionalidad);

        $content = [
            'datos' => $allClientes,
        ];

        $response = service('response');
        $response->setStatusCode(Response::HTTP_OK);
        $response->setJSON($content);
        return $response;
    }

    public function getByDocumentoIdentidadValido($documento)
    {
        $clientes = new ClientesModel();
        $allClientes = $clientes->getByDocumentoIdentidadValido($documento);

        $content = [
            'datos' => $allClientes,
        ];

        $response = service('response');
        $response->setStatusCode(Response::HTTP_OK);
        $response->setJSON($content);
        return $response;
    }

    public function getByTipoTarjetaBanco($tipoTarjeta, $banco)
    {
        $clientes = new ClientesModel();
        $allClientes = $clientes->getByTipoTarjetaBanco($tipoTarjeta, $banco);

        $content = [
            'datos' => $allClientes,
        ];

        $response = service('response');
        $response->setStatusCode(Response::HTTP_OK);
        $response->setJSON($content);
        return $response;
    }
}
