<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Role extends Migration
{
	public function up()
	{
		$role = [
			'role' => [
				'type' => 'TINYINT',
				'constraint' => 1,
				'auto_increment' => TRUE,
				'null' => FALSE
			],
			'nama_role' =>
			[
				'type' => 'VARCHAR',
				'constraint' => 255,
				'null' => FALSE
			],
		];
		$this->forge->addField($role)
			->addKey('role', true)
			->createTable('role');
	}

	public function down()
	{
		$this->forge->dropTable('role');
	}
}
