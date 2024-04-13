<?php

namespace App\Models;

use CodeIgniter\Model;

class ClimaModel extends Model
{
    protected $table            = 'clima';
    protected $primaryKey       = 'idClima';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = true;
    protected $protectFields    = true;
    protected $allowedFields    = ['latitud','longitud','ubicacion','fecha','hora','temperatura','humedad','altitud','sensacionTermica','tipo','CP'];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    protected array $casts = [];
    protected array $castHandlers = [];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function getUbicaciones(){
        $db = db_connect();
        $builder = $db->table('clima')->select('ubicacion')->groupBy('ubicacion');
        $query = $builder->get();
        return $query->getResult();
    }

    public function getClimaByCP(){
        $request = request();
        $cp = $request->getGet('cp'); //Con esto se accede a variables con get/post

        $db = db_connect();
        $sql = $db->table('clima')->select('latitud, longitud, fecha, hora, temperatura')->where('CP',$cp);
        $query = $sql->get();
        return $query->getResult();
    }

    public function getClimaByFechas(){
        $request = request();
        $fechaInicial = $request->getGet('fechaInicial');
        $fechaFinal = $request->getGet('fechaFinal');

        $db = db_connect();
        $sql = $db->table('clima')->select('latitud , longitud, fecha, hora, temperatura')->where('fecha>=',$fechaInicial)->where('fecha<=',$fechaFinal);
        $query = $sql->get();
        return $query->getResult();
    }

    public function getClimaByUbicacion(){
        $request = request();
        $ubicacion = $request->getGet('ubicacion');

        $db = db_connect();
        $sql = $db->table('clima')->select('altitud, fecha, hora, temperatura')->where('ubicacion',$ubicacion);
        $query = $sql->get();
        return $query->getResult();
    }

    public function getClimaByUbicacionDia(){
        $request = request();
        $ubicacion = $request->getGet('ubicacion');
        $fecha = $request->getGet('fecha');

        $db = db_connect();
        $sql = $db->table('clima')->select('altitud, fecha, hora, temperatura')->where('ubicacion',$ubicacion)->where('fecha',$fecha);
        $query = $sql->get();
        return $query->getResult();
    }

    public function getClimaByUbicacionHora(){
        $request = request();
        $ubicacion = $request->getGet('ubicacion');
        $horaInicio = $request->getGet('horaInicio');
        $horaFin = $request->getGet('horaFin');

        $db = db_connect();
        $sql = $db->table('clima')->select('altitud, fecha, temperatura, sensacionTermica')->where('ubicacion',$ubicacion)->where('hora>=',$horaInicio)->where('hora<=',$horaFin);
        $query = $sql->get();
        return $query->getResult();
    }
    public function getClimaByTemperatura(){
        $request = request();
        $temperaturaMaxima = $request->getGet('temperaturaMaxima');
        $temperaturaMinima = $request->getGet('temperaturaMinima');

        $db = db_connect();
        $sql = $db->table('clima')->select('ubicacion, latitud, longitud, altitud, fecha, hora, sensacionTermica')->where('temperatura<=',$temperaturaMaxima)->where('temperatura>=',$temperaturaMinima);
        $query = $sql->get();
        return $query->getResult();
    }

    public function getClimaByTemperaturaSensacionTermica(){
        $request = request();
        $temperaturaMinima = $request->getGet('temperaturaMinima');
        $sensacionTermicaMinima = $request->getGet('sensacionTermicaMinima');

        $db = db_connect();
        $sql = $db->table('clima')->select('ubicacion, latitud, longitud, altitud, fecha, hora')->where('sensacionTermica>=',$sensacionTermicaMinima)->where('temperatura>=',$temperaturaMinima);
        $query = $sql->get();
        return $query->getResult();
    }

    public function getClimaByTipoClima(){
        $request = request();
        $tipoClima = $request->getGet('tipoClima');

        $db = db_connect();
        $sql = $db->table('clima')->select('latitud, longitud, altitud, fecha, hora, temperatura')->join('tipoclima','clima.tipo = tipoclima.idTipo')->where('tipoclima.tipo',$tipoClima);
        $query = $sql->get();
        return $query->getResult();
    }

    public function getClimaByTipoClimaUbicacion(){
        $request = request();
        $tipoClima = $request->getGet('tipoClima');
        $ubicacion = $request->getGet('ubicacion');

        $db = db_connect();
        $sql = $db->table('clima')->select('latitud, longitud, altitud, fecha, hora, temperatura')->join('tipoclima','clima.tipo = tipoclima.idTipo')->where('tipoclima.tipo',$tipoClima)->where('ubicacion',$ubicacion);
        $query = $sql->get();
        return $query->getResult();
    }


    public function getClimaByTipoClimaUbicacionTemperatura(){
        $request = request();
        $tipoClima = $request->getGet('tipoClima');
        $ubicacion = $request->getGet('ubicacion');
        $temperaturaMinima = $request->getGet('temperaturaMinima');

        $db = db_connect();
        $sql = $db->table('clima')->select('latitud, longitud, altitud, fecha, hora, temperatura')->join('tipoclima','clima.tipo = tipoclima.idTipo')->where('tipoclima.tipo',$tipoClima)->where('ubicacion',$ubicacion)->where('temperatura>=',$temperaturaMinima);
        $query = $sql->get();
        return $query->getResult();
    }

    public function getClimaByTipoClimaAltitudHora(){
        $request = request();
        $tipoClima = $request->getGet('tipoClima');
        $altitudMinima = $request->getGet('altitudMinima');
        $altitudMaxima = $request->getGet('altitudMaxima');
        $horaInicio = $request->getGet('horaInicio');
        $horaFin = $request->getGet('horaFin');

        $db = db_connect();
        $sql = $db->table('clima')->select('ubicacion, fecha, temperatura, sensacionTermica')->join('tipoclima','clima.tipo = tipoclima.idTipo')->where('tipoclima.tipo',$tipoClima)->where('altitud>=',$altitudMinima)->where('altitud<=',$altitudMaxima)->where('hora>=',$horaInicio)->where('hora<=',$horaFin);
        $query = $sql->get();
        return $query->getResult();
    }

    public function getClimaByHumedadSensacionTermica(){
        $request = request();
        $humedadMinima = $request->getGet('humedadMinima');
        $humedadMaxima = $request->getGet('humedadMaxima');
        $sensacionTermicaMinima = $request->getGet('humedadMinima');
        $sensacionTermicaMaxima = $request->getGet('humedadMaxima');

        $db = db_connect();
        $sql = $db->table('clima')->select('latitud, longitud, altitud, fecha, hora, temperatura')->where('humedad>=',$humedadMinima)->where('humedad<=',$humedadMaxima)->where('sensacionTermica>=',$sensacionTermicaMinima)->where('sensacionTermica<=',$sensacionTermicaMaxima);
        $query = $sql->get();
        return $query->getResult();
    }

    
}

