<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateResumeTable extends Migration
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
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'phone' => [
                'type' => 'VARCHAR', 
                'constraint' => 20,
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'github' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'address' => [
                'type' => 'TEXT',
            ],
            'profile' => [
                'type' => 'TEXT',
            ],
            'expertise' => [
                'type' => 'TEXT',
            ],
            'languages' => [
                'type' => 'TEXT',
            ]
        ]);
        
        $this->forge->addKey('id', true);
        $this->forge->createTable('resume');
    }

    public function down()
    {
        $this->forge->dropTable('resume');
    }
}
