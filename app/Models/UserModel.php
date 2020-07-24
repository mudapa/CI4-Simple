<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
  protected $table      = 'user';
  protected $useTimestamps = true;

  public function getLogin($email)
  {
    return $this->db->table($this->table)
      ->where(['email' => $email])
      ->get()
      ->getRowArray();
  }
}
