<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatebluseTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_produk' =>[
                'type' => 'INT',
                'constrain' => 10,
                'auto_increment' => true,
            ],
            'ukuran' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'warna' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'harga' => [
                'type' => 'INT',
                'constraint' => 10,
            ],
            'katalog' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'stok' => [
                'type' => 'INT',
                'constraint' => 10,
            ],
        ]);

        $this->forge->addKey('id_produk', true);
        $this->forge->createTable('bluse', true);

    }

    public function down()
    {
        $this->forge->dropTable('bluse');
    }
}
