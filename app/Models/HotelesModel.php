<?php

namespace App\Models;

use CodeIgniter\Model;
use MongoDB\Client as MongoDBClient;

class HotelesModel extends Model
{
    protected $collection;
    
    public function __construct()
    {
        parent::__construct();
        $this->collection = (new MongoDBClient)->apiHotel->hoteles;
    }

    public function index()
    {
        $hoteles = $this->collection->find();
        return $hoteles->toArray();
    }

}
