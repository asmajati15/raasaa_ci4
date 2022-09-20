<?php

namespace App\Models;

use CodeIgniter\Model;

class MinumanModel extends Model
{
    protected $table = 'tbl_minuman';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;
    protected $allowedFields = ['jenis', 'slug_minuman'];

    public function getMinuman($slug_minuman = false)
    {
        if ($slug_minuman == false) {
            return $this->findAll();
        }

        return $this->where(['slug_minuman' => $slug_minuman])->first();
    }
}
