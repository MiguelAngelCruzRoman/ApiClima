<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class VueController extends BaseController
{
    public function formPrueba()
    {
        return view ('VueForm/prueba');
    }

}