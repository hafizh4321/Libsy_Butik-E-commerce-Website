<?php

namespace App\Models;

use CodeIgniter\Database\ConnectionInterface;

class HistorysModel
{
    protected $db;

    public function __construct(ConnectionInterface &$db)
    {
        $this->db = &$db;
    }

    public function all()
    {
        return $this->db->table('transaksis')->get()->getResult();
    }

    public function where()
    {
        return $this->db->table('transaksis')
            ->where(['username' => user()->username])
            ->get()
            ->getResultArray();
    }
}
