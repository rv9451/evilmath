<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Math extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'link' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'title' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'teacher' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'timer' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'category' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            // Add more fields as needed
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('math');

    }

    public function down()
    {
        //
    }
}
