
<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/documentacion', 'Clima::index');
$routes->get('/documentacion/getUbicaciones', 'Clima::getUbicaciones');

