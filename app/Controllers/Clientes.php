<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ClientesModel;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\HTTP\Response;
use CodeIgniter\API\ResponseTrait;

class Clientes extends BaseController
{
    public function index()
    {
        $clientes = new ClientesModel();
        $allClientes = $clientes->index();

        $response = service('response');
        $response->setStatusCode(Response::HTTP_OK);
        $response->setJSON($allClientes);
        return $response;
    }

    public function documentacionIndex(){
        return view('clientes/index'); 
    }

    public function getByNombre($nombre)
    {
        $clientes = new ClientesModel();
        $allClientes = $clientes->getByNombre($nombre);

        $response = service('response');
        $response->setStatusCode(Response::HTTP_OK);
        $response->setJSON($allClientes);
        return $response;
    }

    public function getByNacionalidad($nacionalidad)
    {
        $clientes = new ClientesModel();
        $allClientes = $clientes->getByNacionalidad($nacionalidad);

        $response = service('response');
        $response->setStatusCode(Response::HTTP_OK);
        $response->setJSON($allClientes);
        return $response;
    }
    
    public function getByDocumentoIdentidadValido($documento)
    {
        $clientes = new ClientesModel();
        $allClientes = $clientes->getByDocumentoIdentidadValido($documento);

        $response = service('response');
        $response->setStatusCode(Response::HTTP_OK);
        $response->setJSON($allClientes);
        return $response;
    }

    public function getByTipoTarjetaBanco($tipoTarjeta, $banco)
    {
        $clientes = new ClientesModel();
        $allClientes = $clientes->getByTipoTarjetaBanco($tipoTarjeta,$banco);

        $response = service('response');
        $response->setStatusCode(Response::HTTP_OK);
        $response->setJSON($allClientes);
        return $response;
    }
}
