<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MenuDaftar extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama'        => [
                'type'          => 'VARCHAR',
                'constraint'    => '255',
            ],
            'slug'        => [
                'type'          => 'VARCHAR',
                'constraint'    => '255',
            ],
            'deskripsi'       => [
                'type'          => 'VARCHAR',
                'constraint'    => '255',
            ],
            'harga'        => [
                'type'          => 'VARCHAR',
                'constraint'    => '255',
            ],
            'tersedia'       => [
                'type'          => 'VARCHAR',
                'constraint'    => '255',
            ],
            'gambar'       => [
                'type'          => 'VARCHAR',
                'constraint'    => '255',
            ],
            'id_makanan'   => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ],
            'id_minuman'   => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ],
            'created_at'   => [
                'type'           => 'DATETIME',
                'null'           => true,
            ],
            'updated_at'   => [
                'type'           => 'DATETIME',
                'null'           => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('id_makanan', 'tbl_makanan', 'id_makanan');
        $this->forge->addForeignKey('id_minuman', 'tbl_minuman', 'id_minuman');
        $this->forge->createTable('tbl_menu');
    }

    public function down()
    {
        $this->forge->dropTable('tbl_menu');
    }
}
