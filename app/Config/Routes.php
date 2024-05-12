
<?php

use CodeIgniter\Router\RouteCollection;


$routes->get('/', 'Home::index');
$routes->get('/documentacion', 'Home::documentacion');

$routes->get('/clientes', 'Clientes::index');
$routes->get('/clientes/documentacion', 'Clientes::documentacionIndex');
$routes->get('/clientes/getByNombre/(:any)', 'Clientes::getByNombre/$1');
$routes->get('/clientes/getByNacionalidad/(:any)', 'Clientes::getByNacionalidad/$1'); 
$routes->get('/clientes/getByDocumentoIdentidadValido/(:any)', 'Clientes::getByDocumentoIdentidadValido/$1'); 
$routes->get('/clientes/getByTipoTarjetaBanco/(:any)/(:any)', 'Clientes::getByTipoTarjetaBanco/$1/$2');

$routes->get('/comentarios', 'Comentarios::index');
$routes->get('/comentarios/documentacion', 'Comentarios::documentacionIndex');
$routes->get('/comentarios/getByCalificacion/(:num)', 'Comentarios::getByCalificacion/$1');
$routes->get('/comentarios/getByRangoFechas/(:any)/(:any)', 'Comentarios::getByRangoFechas/$1/$2');
$routes->get('/comentarios/getByCliente/(:any)', 'Comentarios::getByCliente/$1'); 
$routes->get('/comentarios/getByHotelCalificacion/(:any)/(:num)', 'Comentarios::getByHotelCalificacion/$1/$2'); 

$routes->get('/facturas', 'Facturas::index');
$routes->get('/facturas/documentacion', 'Facturas::documentacionIndex');
$routes->get('/facturas/getByMetodoPago/(:any)', 'Facturas::getByMetodoPago/$1');
$routes->get('/facturas/getByRangoFechasEmision/(:any)/(:any)', 'Facturas::getByRangoFechasEmision/$1/$2');
$routes->get('/facturas/getByEstatusProximoVencimiento/(:any)', 'Facturas::getByEstatusProximoVencimiento/$1');
$routes->get('/facturas/getByFechaReservacion/(:any)', 'Facturas::getByFechaReservacion/$1');

$routes->get('/habitaciones', 'Habitaciones::index');
$routes->get('/habitaciones/documentacion', 'Habitaciones::documentacionIndex');
$routes->get('/habitaciones/getByPrecio/(:num)', 'Habitaciones::getByPrecio/$1');
$routes->get('/habitaciones/getByServiciosExactos/(:any)', 'Habitaciones::getByServiciosExactos/$1');
$routes->get('/habitaciones/getByServiciosSimilares/(:any)', 'Habitaciones::getByServiciosSimilares/$1'); 
$routes->get('/habitaciones/getByDisponibilidadHotel/(:any)/(:any)', 'Habitaciones::getByDisponibilidadHotel/$1/$2'); 

$routes->get('/hoteles', 'Hoteles::index');
$routes->get('/hoteles/documentacion', 'Hoteles::documentacionIndex');
$routes->get('/hoteles/getByCiudad/(:any)', 'Hoteles::getByCiudad/$1');

$routes->get('/reservaciones', 'Reservaciones::index');
$routes->get('/reservaciones/documentacion', 'Reservaciones::documentacionIndex');
$routes->get('/reservaciones/getByEstatus/(:any)', 'Reservaciones::getByEstatus/$1');
