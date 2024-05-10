<?php

namespace App\Models;

use CodeIgniter\Model;
use MongoDB\Client as MongoDBClient;

class ClientesModel extends Model
{
    protected $collection;
    
    public function __construct()
    {
        parent::__construct();
        $this->collection = (new MongoDBClient)->apiHotel->clientes;
    }

    public function index()
    {
        $clientes = $this->collection->find();
        return $clientes->toArray();
    }

}
