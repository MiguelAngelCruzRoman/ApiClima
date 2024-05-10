<?php

namespace App\Models;

use CodeIgniter\Model;
use MongoDB\Client as MongoDBClient;

class ReservacionesModel extends Model
{
    protected $collection;
    
    public function __construct()
    {
        parent::__construct();
        $this->collection = (new MongoDBClient)->apiHotel->reservaciones;
    }

    public function index()
    {
        $reservaciones = $this->collection->find();
        return $reservaciones->toArray();
    }

}
