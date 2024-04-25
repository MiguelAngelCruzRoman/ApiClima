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
        return view ('Query/Query1');
    }
    public function query2()
    {
        return view ('Query/Query2');
    }
    public function query3()
    {
        return view ('Query/Query3');
    }

    public function query4()
    {
        return view ('Query/Query4');
    }
    public function query5()
    {
        return view ('Query/Query5');
    }
    public function query6()
    {
        return view ('Query/Query6');
    }

    public function query7()
    {
        return view ('Query/Query7');
    }
    public function query8()
    {
        return view ('Query/Query8');
    }
    public function query9()
    {
        return view ('Query/Query9');
    }

    public function query10()
    {
        return view ('Query/Query10');
    }
}