
<?php

use CodeIgniter\Router\RouteCollection;


$routes->get('/', 'Home::index');
$routes->get('/documentacion', 'Home::documentacion');

$routes->get('/clientes', 'Clientes::index');
$routes->get('/clientes/documentacion', 'Clientes::documentacionIndex');
$routes->get('/clientes/getByNombre/(:any)', 'Clientes::getByNombre/$1');


$routes->get('/comentarios', 'Comentarios::index');
$routes->get('/comentarios/documentacion', 'Comentarios::documentacionIndex');
$routes->get('/comentarios/getByCalificacion/(:num)', 'Comentarios::getByCalificacion/$1');

$routes->get('/facturas', 'Facturas::index');
$routes->get('/facturas/documentacion', 'Facturas::documentacionIndex');
$routes->get('/facturas/getByMetodoPago/(:any)', 'Facturas::getByMetodoPago/$1');

$routes->get('/habitaciones', 'Habitaciones::index');
$routes->get('/habitaciones/documentacion', 'Habitaciones::documentacionIndex');
$routes->get('/habitaciones/getByPrecio/(:num)', 'Habitaciones::getByPrecio/$1');

$routes->get('/hoteles', 'Hoteles::index');
$routes->get('/hoteles/documentacion', 'Hoteles::documentacionIndex');
$routes->get('/hoteles/getByCiudad/(:any)', 'Hoteles::getByCiudad/$1');

$routes->get('/reservaciones', 'Reservaciones::index');
$routes->get('/reservaciones/documentacion', 'Reservaciones::documentacionIndex');
$routes->get('/reservaciones/getByEstatus/(:any)', 'Reservaciones::getByEstatus/$1');
