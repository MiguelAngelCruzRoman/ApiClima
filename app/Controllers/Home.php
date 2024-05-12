<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('index');
    }

    public function documentacion()
    {
        return view('documentacion');
    }
}
