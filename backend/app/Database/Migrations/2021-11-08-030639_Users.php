<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'=>[
                'type'=>'INT',
                'constraint'=>11,
                'unsigned'=>TRUE,
                'auto_increment'=>TRUE
            ],
            'role_id'=>[
                'type'=>'INT',
                'constraint'=>2,
                'default'=>1
            ],
            'username'=>[
                'type'=>'VARCHAR',
                'constraint'=>32
            ],
            'email'=>[
                'type'=>'VARCHAR',
                'constraint'=>64
            ],
            'password'=>[
                'type'=>'TEXT'
            ],
            'salt'=>[
                'type'=>'TEXT'
            ],
            'img'=>[
                'type'=>'TEXT',
                'null'=>TRUE
            ],
            'created_date'=>[
                'type'=>'VARCHAR',
                'constraint'=>32

            ],
            'update_date'=>[
                'type'=>'VARCHAR',
                'constraint'=>32
            ]
        ]);

        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('users');
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}
