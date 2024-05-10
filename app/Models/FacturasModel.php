<?php

namespace App\Models;

use CodeIgniter\Model;
use MongoDB\Client as MongoDBClient;

class FacturasModel extends Model
{
    protected $collection;
    
    public function __construct()
    {
        parent::__construct();
        $this->collection = (new MongoDBClient)->apiHotel->facturas;
    }

    public function index()
    {
        $facturas = $this->collection->find();
        return $facturas->toArray();
    }

}
