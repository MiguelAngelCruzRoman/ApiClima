<?php

namespace App\Models;

use CodeIgniter\Model;
use MongoDB\Client as MongoDBClient;

class ComentariosModel extends Model
{
    protected $collection;
    
    public function __construct()
    {
        parent::__construct();
        $this->collection = (new MongoDBClient)->apiHotel->comentarios;
    }

    public function index()
    {
        $comentarios = $this->collection->find();
        return $comentarios->toArray();
    }

}
