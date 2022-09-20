<?php

namespace App\Models;

use CodeIgniter\Model;

class MakananModel extends Model
{
    protected $table = 'tbl_makanan';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;
    protected $allowedFields = ['jenis', 'slug_makanan'];

    // public function getAll()
    // {
    //     $builder = $this->db->table('tbl_makanan');
    //     $builder->join('tbl_menu', 'tbl_menu.id_makanan = tbl_makanan.id');
    //     $query = $builder->get();
    //     return $query->getResult();
    // }

    public function getMakanan($slug_makanan = false)
    {
        if ($slug_makanan == false) {
            return $this->findAll();
        }

        return $this->where(['slug_makanan' => $slug_makanan])->first();
    }
}
