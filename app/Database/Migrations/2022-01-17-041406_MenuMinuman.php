<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MenuMinuman extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_minuman'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama'       => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'slug'       => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'created_at'       => [
                'type'       => 'DATETIME',
                'null' => true,
            ],
            'updated_at'       => [
                'type'       => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id_minuman', true);
        // $this->forge->addForeignKey('id_minuman');
        $this->forge->createTable('tbl_minuman');
    }

    public function down()
    {
        $this->forge->dropTable('tbl_minuman');
    }
}
