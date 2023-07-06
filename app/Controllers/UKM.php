<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\UKMModel;

class UKM extends BaseController
{

    protected $ukm;

    public function __construct()
    {
        $this->ukm = new UKMModel();
    }

    public function home()
    {
        $data['semuaukm'] = $this->ukm->getAllData();
        return view('beranda', $data);
    }

    public function ukm() //data UKM
    {
        $data['semuaukm'] = $this->ukm->getAllData();
        return view('ukm', $data);
    }
    public function add(){ //tambah data
       
        return view('add');
    }
}
