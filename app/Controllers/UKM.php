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
    public function update($id) //tambah data
    { 
        $data['semuaukm'] = $this->ukm->getDataById($id);
        $data["errors"] = session('errors');
        return view('update', $data);
    }
    public function destory($id)
    {
        $data['ukm'] = $this->ukm->delete($id);
        session()->setFlashdata('success', 'Data berhasil dihapus');
        return redirect()->to('ukm/ukm');
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
            ],
            'informasi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom Informasi harus diisi'
                ]
            ],
            'visi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom Visi harus diisi'
                ]
            ],
            'misi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom Misi harus diisi'
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
    public function edit()
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
            ],
            'informasi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom Informasi harus diisi'
                ]
            ],
            'visi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom Visi harus diisi'
                ]
            ],
            'misi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom Misi harus diisi'
                ]
            ]
        ]);
        

        if (!$validation) {
            $errors = \Config\Services::validation()->getErrors();
            return redirect()->back()->withInput()->with('errors', $errors);
        }

        // ambil data lama
        $ukm = $this->ukm->find($this->request->getPost('id_ukm'));

        // tambahkan request id
        $data = [
            'id_ukm' => $this->request->getPost('id_ukm'),
            'nama_ukm' => $this->request->getPost('nama_ukm'),
            'visi' => $this->request->getPost('visi'),
            'misi' => $this->request->getPost('misi'),
            'informasi' => $this->request->getPost('informasi')
        ];

        // cek logo apakah ada logo yang diupload
        $logo = $this->request->getFile('logo_ukm');

        if ($logo->isValid() && !$logo->hasMoved()) {
            // generate nama file yang unik
            $logoName = $logo->getRandomName();
            // pindahkan file ke direktori penyimpanan
            $logo->move(ROOTPATH . 'public/assets/logo/', $logoName);
            // hapus file lama jika ada
            if ($ukm['logo_ukm']) {
                unlink(ROOTPATH . 'public/assets/logo/' . $ukm['logo_ukm']);
            }
            // jika ada, tambahkan array logo_ukm pada variabel $data
            $data['logo_ukm'] = $logoName;
        } else {
            // jika tidak ada logo yang diupload, gunakan data lama
            $data['logo_ukm'] = $ukm['logo_ukm'];
        }

        // cek foto_satu apakah ada foto yang diupload
        $fotoSatu = $this->request->getFile('foto_satu');

        if ($fotoSatu->isValid() && !$fotoSatu->hasMoved()) {
            // generate nama file yang unik
            $fotoSatuName = $fotoSatu->getRandomName();
            // pindahkan file ke direktori penyimpanan
            $fotoSatu->move(ROOTPATH . 'public/assets/foto/', $fotoSatuName);
            // hapus file lama jika ada
            if ($ukm['foto_satu']) {
                unlink(ROOTPATH . 'public/assets/foto/' . $ukm['foto_satu']);
            }
            // jika ada, tambahkan array foto_satu pada variabel $data
            $data['foto_satu'] = $fotoSatuName;
        } else {
            // jika tidak ada foto satu yang diupload, gunakan data lama
            $data['foto_satu'] = $ukm['foto_satu'];
        }

        // cek foto_dua apakah ada foto yang diupload
        $fotoDua = $this->request->getFile('foto_dua');

        if ($fotoDua->isValid() && !$fotoDua->hasMoved()) {
            // generate nama file yang unik
            $fotoDuaName = $fotoDua->getRandomName();
            // pindahkan file ke direktori penyimpanan
            $fotoDua->move(ROOTPATH . 'public/assets/foto/', $fotoDuaName);
            // hapus file lama jika ada
            if ($ukm['foto_dua']) {
                unlink(ROOTPATH . 'public/assets/foto/' . $ukm['foto_dua']);
            }
            // jika ada, tambahkan array foto_dua pada variabel $data
            $data['foto_dua'] = $fotoDuaName;
        } else {
            // jika tidak ada foto dua yang diupload, gunakan data lama
            $data['foto_dua'] = $ukm['foto_dua'];
        }

        $this->ukm->save($data);

        session()->setFlashdata('success', 'Data berhasil diperbarui.'); //tambahkan ini

        return redirect()->to('/ukm');
    }
}
