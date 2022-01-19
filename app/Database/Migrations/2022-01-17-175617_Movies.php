<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Movies extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'  => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'movie_title' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'slug' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'movie_thumbnail' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'movie_desc' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'movie_genre' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'movie_rating' => [
                'type' => 'FLOAT',
                'constraint' => 5,
            ],
            'movie_price' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP',
            'update_at DATETIME',
        ]);
        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('movies',TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('movies');
    }
}
