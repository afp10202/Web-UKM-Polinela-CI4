<?php

namespace App\Models;
use CodeIgniter\Model;

class ContactModel extends Model{

    protected $table = "tb_kontak";
    protected $primaryKey = "id_kontak";
    protected $useAutoIncrement = true;
    protected $allowedFields = ['id_ukm','email','link_ig','link_yt'];
    
    public function getAllContact()
    {
        return $this->findAll();
    }
}
