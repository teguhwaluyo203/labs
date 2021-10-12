<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class HakAkses extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_akses'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_akses'       => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'created_at'       => [
                'type'       => 'DATETIME',
            ],
            'updated_at'       => [
                'type'       => 'DATETIME',
            ],
            'deleted_at'       => [
                'type'       => 'DATETIME',
                'null' => true
            ],

        ]);
        $this->forge->addKey('id_akses', true);
        $this->forge->createTable('hak_akses');
    }

    public function down()
    {
        $this->forge->dropTable('hak_akses');
    }
}
