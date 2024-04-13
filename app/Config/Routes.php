
<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/documentacion', 'Clima::index');
$routes->get('/documentacion/getUbicaciones', 'Clima::getUbicaciones');
$routes->get('/documentacion/getClimaByCP', 'Clima::getClimaByCP');
$routes->get('/documentacion/getClimaByFechas', 'Clima::getClimaByFechas');

$routes->get('/documentacion/getClimaByUbicacion', 'Clima::getClimaByUbicacion');
$routes->get('/documentacion/getClimaByUbicacionDia', 'Clima::getClimaByUbicacionDia');
$routes->get('/documentacion/getClimaByUbicacionHora', 'Clima::getClimaByUbicacionHora');
$routes->get('/documentacion/getClimaByTemperatura', 'Clima::getClimaByTemperatura');
$routes->get('/documentacion/getClimaByTemperaturaSensacionTermica', 'Clima::getClimaByTemperaturaSensacionTermica');
$routes->get('/documentacion/getClimaByTipoClima', 'Clima::getClimaByTipoClima');
$routes->get('/documentacion/getClimaByTipoClimaUbicacion', 'Clima::getClimaByTipoClimaUbicacion');
$routes->get('/documentacion/getClimaByTipoClimaUbicacionTemperatura', 'Clima::getClimaByTipoClimaUbicacionTemperatura');
$routes->get('/documentacion/getClimaByTipoClimaAltitudHora', 'Clima::getClimaByTipoClimaAltitudHora');
$routes->get('/documentacion/getClimaByHumedadSensacionTermica', 'Clima::getClimaByHumedadSensacionTermica');

