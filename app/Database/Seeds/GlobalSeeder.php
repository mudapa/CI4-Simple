<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class GlobalSeeder extends Seeder
{
	public function run()
	{
		$this->call('user');
		$this->call('role');
	}
}
