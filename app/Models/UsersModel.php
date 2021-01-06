<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table      = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = ['username', 'email', 'user_image'];

    protected $useTimestamps = true;

    public function getItem($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }

    public function getusers($username = false)
    {
        if ($username == false) {
            return $this->findAll();
        }

        return $this->where(['username' => $username])->first();
    }


    public function search($keyword)
    {
        return $this->table('users')->like('username', $keyword)->orLike('email', $keyword);
    }
}
