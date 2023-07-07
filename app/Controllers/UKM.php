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
    
    public function add()
    { //tambah data
        $data['semuaukm'] = $this->ukm->getAllData();
        return view('add', $data);
    }

    public function insert()
    {
        $logoUkm = $this->request->getFile('logo_ukm');
        $fotoSatu = $this->request->getFile('foto_satu');
        $fotoDua = $this->request->getFile('foto_dua');

        if ($logoUkm && $logoUkm->isValid() && !$logoUkm->hasMoved()) {
            $logoName = $logoUkm->getRandomName();
            $logoUkm->move(ROOTPATH . 'public/assets/logo/', $logoName);
        }

        if ($fotoSatu && $fotoSatu->isValid() && !$fotoSatu->hasMoved()) {
            $fotoSatuName = $fotoSatu->getRandomName();
            $fotoSatu->move(ROOTPATH . 'public/assets/foto/', $fotoSatuName);
        }

        if ($fotoDua && $fotoDua->isValid() && !$fotoDua->hasMoved()) {
            $fotoDuaName = $fotoDua->getRandomName();
            $fotoDua->move(ROOTPATH . 'public/assets/foto/', $fotoDuaName);
        }

        $data = [
            'logo_ukm' => $logoName ?? null,
            'nama_ukm' => $this->request->getPost('nama_ukm'),
            'informasi' => $this->request->getPost('informasi'),
            'visi' => $this->request->getPost('visi'),
            'misi' => $this->request->getPost('misi'),
            'foto_satu' => $fotoSatuName ?? null,
            'foto_dua' => $fotoDuaName ?? null,
        ];

        $this->ukm->save($data);
        return redirect()->to('ukm');
    }

    public function about()
    {
        return view('about');
    }

}
