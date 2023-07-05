<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class UKMController extends BaseController
{

    protected $ukm;


    public function index()
    {
        return view('beranda');
    }
}
