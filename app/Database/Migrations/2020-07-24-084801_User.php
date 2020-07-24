<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\I18n\Time;
use DateTime;

class User extends Migration
{
	public function up()
	{
		$user = [
			'id' => [
				'type' => 'INT',
				'constraint' => 1,
				'auto_increment' => TRUE,
				'null' => FALSE
			],
			'username' =>
			[
				'type' => 'VARCHAR',
				'constraint' => 255,
				'null' => FALSE
			],
			'role' =>
			[
				'type' => 'TINYINT',
				'constraint' => 1,
				'null' => FALSE
			],
			'email' =>
			[
				'type' => 'VARCHAR',
				'constraint' => 255,
				'null' => FALSE
			],
			'password' =>
			[
				'type' => 'VARCHAR',
				'constraint' => 255,
				'null' => FALSE
			],
			'created_at' =>
			[
				'type' => 'DATETIME',
				'null' => FALSE
			],
			'updated_at' =>
			[
				'type' => 'DATETIME',
				'null' => FALSE
			],
		];
		$this->forge->addField($user)
			->addKey('id', true)
			->addKey('role')
			->createTable('user');
	}

	public function down()
	{
		$this->forge->dropTable('user');
	}
}
