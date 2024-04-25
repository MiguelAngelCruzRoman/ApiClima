
<?php

use CodeIgniter\Router\RouteCollection;


$routes->get('/', 'Home::index');

//Rutas base
$routes->get('/documentacion', 'VistasController::documentacion');
$routes->get('/documentacion/getUbicaciones', 'Clima::getUbicaciones');
$routes->get('/documentacion/getClimaByCP', 'Clima::getClimaByCP');
$routes->get('/documentacion/getClimaByFechas', 'Clima::getClimaByFechas');

///Rutas que funcionan para hacer los consumibles
$routes->get('/documentacion/getClimaByUbicacion', 'Clima::getClimaByUbicacion');
//http://localhost:8080/documentacion/getClimaByUbicacion?ubicacion=San%20V%C3%ADctor%20de%20la%20Monta%C3%B1a

$routes->get('/documentacion/getClimaByUbicacionDia', 'Clima::getClimaByUbicacionDia');
//http://localhost:8080/documentacion/getClimaByUbicacionDia?ubicacion=San%20V%C3%ADctor%20de%20la%20Monta%C3%B1a&fecha=2024-02-03

$routes->get('/documentacion/getClimaByUbicacionHora', 'Clima::getClimaByUbicacionHora');
//http://localhost:8080/documentacion/getClimaByUbicacionHora?ubicacion=San%20V%C3%ADctor%20de%20la%20Monta%C3%B1a&horaInicio=05:00:00&horaFin=08:00:00

$routes->get('/documentacion/getClimaByTemperatura', 'Clima::getClimaByTemperatura');
//http://localhost:8080/documentacion/getClimaByTemperatura?temperaturaMaxima=13.2&temperaturaMinima=13

$routes->get('/documentacion/getClimaByTemperaturaSensacionTermica', 'Clima::getClimaByTemperaturaSensacionTermica');
//http://localhost:8080/documentacion/getClimaByTemperaturaSensacionTermica?sensacionTermicaMinima=20&temperaturaMinima=13

$routes->get('/documentacion/getClimaByTipoClima', 'Clima::getClimaByTipoClima');
//http://localhost:8080/documentacion/getClimaByTipoClima?tipoClima=Nublado

$routes->get('/documentacion/getClimaByTipoClimaUbicacion', 'Clima::getClimaByTipoClimaUbicacion');
//http://localhost:8080/documentacion/getClimaByTipoClimaUbicacion?tipoClima=Nublado&ubicacion=San%20V%C3%ADctor%20de%20la%20Monta%C3%B1a

$routes->get('/documentacion/getClimaByTipoClimaUbicacionTemperatura', 'Clima::getClimaByTipoClimaUbicacionTemperatura');
//http://localhost:8080/documentacion/getClimaByTipoClimaUbicacionTemperatura?tipoClima=Soleado&ubicacion=San%20V%C3%ADctor%20de%20la%20Monta%C3%B1a&temperaturaMinima=0

$routes->get('/documentacion/getClimaByTipoClimaAltitudHora', 'Clima::getClimaByTipoClimaAltitudHora');
//http://localhost:8080/documentacion/getClimaByTipoClimaAltitudHora?tipoClima=Soleado&altitudMinima=1000&altitudMaxima=1200&horaInicio=08:00:00&horaFin=20:00:00

$routes->get('/documentacion/getClimaByHumedadSensacionTermica', 'Clima::getClimaByHumedadSensacionTermica');
//http://localhost:8080/documentacion/getClimaByHumedadSensacionTermica?humedadMinima=10&humedadMaxima=20&sensacionTermicaMinima=10&sensacionTermicaMaxima=20






///Rutas para consumir los querys
$routes->get('/query1', 'VistasController::query1');
$routes->get('/query2', 'VistasController::query2');
$routes->get('/query3', 'VistasController::query3');
$routes->get('/query4', 'VistasController::query4');
$routes->get('/query5', 'VistasController::query5');
$routes->get('/query6', 'VistasController::query6');
$routes->get('/query7', 'VistasController::query7');
$routes->get('/query8', 'VistasController::query8');
$routes->get('/query9', 'VistasController::query9');
$routes->get('/query10', 'VistasController::query10');




///Rutas para formularios vue
$routes->get('/formVuePrueba', 'VueController::formPrueba');
