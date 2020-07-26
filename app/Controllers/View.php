<?php

namespace App\Controllers;

class View extends BaseController
{
	public function index()
	{
		return view('auth/login');
	}

	public function admin()
	{
		$data = [
			'role' => $this->userModel->role()
		];
		return view('admin/dashboard/dashboard_v', $data);
	}
	public function dosen()
	{
		return view('dosen/dashboard/dashboard_v');
	}
	public function mahasiswa()
	{
		return view('mahasiswa/dashboard/dashboard_v');
	}
}
