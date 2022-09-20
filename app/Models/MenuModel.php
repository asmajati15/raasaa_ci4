<?php

namespace App\Models;

use CodeIgniter\Model;

class MenuModel extends Model
{
    protected $table = 'tbl_menu';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama', 'slug', 'deskripsi', 'harga', 'tersedia', 'id_makanan', 'gambar'];
    // protected $allowedFields = ['nama', 'slug', 'deskripsi', 'harga', 'tersedia', 'gambar', 'jenis'];

    public function getMenu($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
}
