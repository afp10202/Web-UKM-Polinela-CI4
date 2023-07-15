<?php

namespace App\Models;
use CodeIgniter\Model;

class UKMModel extends Model{

    protected $table = "tb_ukm";
    protected $primaryKey = "id_ukm";
    protected $useAutoIncrement = true;
    protected $allowedFields = ['nama_ukm', 'logo_ukm', 'informasi', 'visi','misi','foto_satu','foto_dua']; 
    
    public function getAllData()
    {
        return $this->join('tb_kontak', 'tb_ukm.id_ukm = tb_kontak.id_ukm')->findAll();
    }
    
    public function getDataById($id)
    {
        return $this->join('tb_kontak', 'tb_ukm.id_ukm = tb_kontak.id_ukm')->find($id);
    }
    
}

?>
