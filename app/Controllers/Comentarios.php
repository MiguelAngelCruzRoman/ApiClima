<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ComentariosModel;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\HTTP\Response;
use CodeIgniter\API\ResponseTrait;

class Comentarios extends BaseController
{
    public function index()
    {
        $comentarios = new ComentariosModel();
        $allComentarios = $comentarios->index();

        $response = service('response');
        $response->setStatusCode(Response::HTTP_OK);
        $response->setJSON($allComentarios);
        return $response;
    }
    public function documentacionIndex()
    {
        return view('comentarios/index');
    }

    public function getByCalificacion($calificacion)
    {
        $comentarios = new ComentariosModel();
        $allComentarios = $comentarios->getByCalificacion($calificacion);

        $response = service('response');
        $response->setStatusCode(Response::HTTP_OK);
        $response->setJSON($allComentarios);
        return $response;
    }


    public function getByCliente($nombreCliente)
    {
        $comentarios = new ComentariosModel();
        $allComentarios = $comentarios->getByCliente($nombreCliente);

        $response = service('response');
        $response->setStatusCode(Response::HTTP_OK);
        $response->setJSON($allComentarios);
        return $response;
    }

    public function getByRangoFechas($fechaInicio, $fechaFin)
    {
        $comentarios = new ComentariosModel();
        $allComentarios = $comentarios->getByRangoFechas($fechaInicio, $fechaFin);

        $response = service('response');
        $response->setStatusCode(Response::HTTP_OK);
        $response->setJSON($allComentarios);
        return $response;
    }

    public function getByHotelCalificacion($nombreHotel, $calificacion)
    {
        $comentarios = new ComentariosModel();
        $allComentarios = $comentarios->getByHotelCalificacion($nombreHotel, $calificacion);

        $response = service('response');
        $response->setStatusCode(Response::HTTP_OK);
        $response->setJSON($allComentarios);
        return $response;
    }
}
