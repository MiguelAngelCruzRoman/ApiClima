<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\HotelesModel;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\HTTP\Response;
use CodeIgniter\API\ResponseTrait;

class Hoteles extends BaseController
{
    public function index()
    {
        $hoteles = new HotelesModel();
        $allHoteles = $hoteles->index();

        $response = service('response');
        $response->setStatusCode(Response::HTTP_OK);
        $response->setJSON($allHoteles);
        return $response;
    }
    public function documentacionIndex()
    {
        return view('hoteles/index');
    }

    public function getByCiudad($ciudad)
    {
        $hoteles = new HotelesModel();
        $allHoteles = $hoteles->getByCiudad($ciudad);

        $response = service('response');
        $response->setStatusCode(Response::HTTP_OK);
        $response->setJSON($allHoteles);
        return $response;
    }

    public function getByTipoCategoria($tipo, $categoria)
    {
        $hoteles = new HotelesModel();
        $allHoteles = $hoteles->getByTipoCategoria($tipo, $categoria);

        $response = service('response');
        $response->setStatusCode(Response::HTTP_OK);
        $response->setJSON($allHoteles);
        return $response;
    }

    public function getByAmenidades($servicios)
    {
        $hoteles = new HotelesModel();
        $allHoteles = $hoteles->getByAmenidades($servicios);

        $response = service('response');
        $response->setStatusCode(Response::HTTP_OK);
        $response->setJSON($allHoteles);
        return $response;
    }

    public function getByRangoHoraCheck($tipo, $horaInicio, $horaFin)
    {
        $hoteles = new HotelesModel();
        $allHoteles = $hoteles->getByRangoHoraCheck($tipo, $horaInicio, $horaFin);

        $response = service('response');
        $response->setStatusCode(Response::HTTP_OK);
        $response->setJSON($allHoteles);
        return $response;
    }
}
