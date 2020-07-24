<?php

namespace App\Controllers;

class Login extends BaseController
{
  public function isloggin()
  {
    $email = htmlspecialchars($this->request->getVar('email'));
    $password = htmlspecialchars($this->request->getVar('password'));

    $cek_login = $this->userModel->getLogin($email);

    if ($cek_login == TRUE) {
      if (password_verify($password, $cek_login['password'])) {
        session()->set('id', $cek_login['id']);
        session()->set('username', $cek_login['username']);
        session()->set('email', $cek_login['email']);
        session()->set('role', $cek_login['role']);
        if (session()->get('role') == 1) {
          // login admin
          echo 'admin';
        } elseif (session()->get('role') == 2) {
          // login dosen
          echo 'dosen';
        } elseif (session()->get('role') == 3) {
          // Login mahasiswa
          echo 'mahasiswa';
        }
      } else {
        return redirect()->to('/');
      }
    } else {
      return redirect()->to('/');
    }
  }

  public function logout()
  {
    session()->remove('role');
    return redirect()->to('/');
  }
}
