<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Role extends Seeder
{
	public function run()
	{
		$data = [
			0 => [
				'role' => 1,
				'nama_role' => 'Admin'
			],
			1 => [
				'role' => 2,
				'nama_role' => 'Dosen'
			],
			2 => [
				'role' => 3,
				'nama_role' => 'Mahasiswa'
			]
		];
		foreach ($data as $r) {
			$this->db->table('role')->insert($r);
		}
	}
}
