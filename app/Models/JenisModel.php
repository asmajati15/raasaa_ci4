<?php

namespace App\Models;

use CodeIgniter\Model;

class JenisModel extends Model
{
    protected $table = 'jenis_menu';
    protected $primaryKey = 'id_jenis';
    protected $useTimestamps = true;
    protected $allowedFields = ['tipe', 'jenis'];


    public function getAll()
    {
        $builder = $this->db->table('jenis_menu');
        $builder->join('daftar_menu', 'daftar_menu.id_jenis = jenis_menu.id_jenis');
        $query = $builder->get();
        return $query->getResult();
    }

    // public function getJenis($id = false)
    // {
    //     if ($id == false) {
    //         return $this->findAll();
    //     }

    //     return $this->where(['id' => $id])->first();
    // }
}
