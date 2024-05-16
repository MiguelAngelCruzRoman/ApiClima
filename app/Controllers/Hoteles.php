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

        $content = [
            'datos' => $allHoteles,
        ];

        $response = service('response');
        $response->setStatusCode(Response::HTTP_OK);
        $response->setJSON($content);
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
 $content = [
            'datos' => $allHoteles,
        ];

        $response = service('response');
        $response->setStatusCode(Response::HTTP_OK);
        $response->setJSON($content);
        return $response;
    }

    public function getByTipoCategoria($tipo, $categoria)
    {
        $hoteles = new HotelesModel();
        $allHoteles = $hoteles->getByTipoCategoria($tipo, $categoria);

        $content = [
            'datos' => $allHoteles,
        ];

        $response = service('response');
        $response->setStatusCode(Response::HTTP_OK);
        $response->setJSON($content);
        return $response;
    }

    public function getByAmenidades($servicios)
    {
        $hoteles = new HotelesModel();
        $allHoteles = $hoteles->getByAmenidades($servicios);

        $content = [
            'datos' => $allHoteles,
        ];

        $response = service('response');
        $response->setStatusCode(Response::HTTP_OK);
        $response->setJSON($content);
        return $response;
    }

    public function getByRangoHoraCheck($tipo, $horaInicio, $horaFin)
    {
        $hoteles = new HotelesModel();
        $allHoteles = $hoteles->getByRangoHoraCheck($tipo, $horaInicio, $horaFin);

        $content = [
            'datos' => $allHoteles,
        ];

        $response = service('response');
        $response->setStatusCode(Response::HTTP_OK);
        $response->setJSON($content);
        return $response;
    }
}
