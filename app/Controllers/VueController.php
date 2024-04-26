<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class VueController extends BaseController
{
    public function formPrueba()
    {
        return view ('VueForm/prueba');
    }

    public function ejemploProfe()
    {
        return view ('VueForm/ejemploProfe');
    }

}