<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class VistasController extends BaseController
{
    public function documentacion()
    {
        return view ('documentacion');
    }


    public function query1()
    {
        return view ('Query/query1');
    }
    public function query2()
    {
        return view ('Query/query2');
    }
    public function query3()
    {
        return view ('Query/query3');
    }

    public function query4()
    {
        return view ('Query/query4');
    }
    public function query5()
    {
        return view ('Query/query5');
    }
    public function query6()
    {
        return view ('Query/query6');
    }

    public function query7()
    {
        return view ('Query/query7');
    }
    public function query8()
    {
        return view ('Query/query8');
    }
    public function query9()
    {
        return view ('Query/query9');
    }
}