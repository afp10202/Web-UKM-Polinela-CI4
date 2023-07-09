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
        $data["errors"] = session('errors');
        return view('add', $data);
    }

    public function insert()
    {
        $validation = $this->validate([
            'nama_ukm' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom Nama UKM harus diisi'
                ]
            ],
            'logo_ukm' => [
                'rules' => 'mime_in[logo_ukm,image/jpg,image/jpeg,image/png]|max_size[logo_ukm,2048]',
                'errors' => [
                    'mime_in' => 'Tipe file pada Kolom Logo harus berupa JPG, JPEG, atau PNG',
                    'max_size' => 'Ukuran file pada Kolom Logo melebihi batas maksimum'
                ]
            ],
            'foto_satu' => [
                'rules' => 'mime_in[foto_satu,image/jpg,image/jpeg,image/png]|max_size[foto_satu,2048]',
                'errors' => [
                    'mime_in' => 'Tipe file pada Kolom Foto 1 harus berupa JPG, JPEG, atau PNG',
                    'max_size' => 'Ukuran file pada Kolom Foto 1 melebihi batas maksimum'
                ]
            ],
            'foto_dua' => [
                'rules' => 'mime_in[foto_dua,image/jpg,image/jpeg,image/png]|max_size[foto_dua,2048]',
                'errors' => [
                    'mime_in' => 'Tipe file pada Kolom Foto 2 harus berupa JPG, JPEG, atau PNG',
                    'max_size' => 'Ukuran file pada Kolom Foto 2 melebihi batas maksimum'
                ]
            ]
        ]);

        if (!$validation) {
            $errors = \Config\Services::validation()->getErrors();
            return redirect()->back()->withInput()->with('errors', $errors);
        }

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
        session()->setFlashdata('success', 'Data berhasil ditambahkan.');
        return redirect()->to('ukm');
    }


    public function about()
    {
        return view('about');
    }

}
