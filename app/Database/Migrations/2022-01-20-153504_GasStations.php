<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class GasStations extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'label' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'address' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'latitude' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'longitude' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'ideess' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => false,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => false,
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
                'null' => false,
            ]
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('gas_station');
    }

    public function down()
    {
        $this->forge->dropTable('gas_station');
    }
}