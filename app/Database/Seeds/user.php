<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\Debug\Timer;

class User extends Seeder
{
	public function run()
	{
		$data = [
			0 => [
				'id' => 1,
				'username' => 'Admin',
				'role' => '1',
				'email' => 'admin@admin.com',
				'password' => password_hash('1234', PASSWORD_DEFAULT)
			],
			1 => [
				'id' => 2,
				'username' => 'Dosen',
				'role' => '2',
				'email' => 'dosen@dosen.com',
				'password' => password_hash('1234', PASSWORD_DEFAULT)
			],
			2 => [
				'id' => 3,
				'username' => 'Mahasiswa',
				'role' => '3',
				'email' => 'mhs@mhs.com',
				'password' => password_hash('1234', PASSWORD_DEFAULT)
			]
		];
		foreach ($data as $r) {
			$this->db->table('user')->insert($r);
		}
	}
}
