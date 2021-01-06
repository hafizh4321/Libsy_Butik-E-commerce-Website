<?php

namespace App\Models;

use CodeIgniter\Model;

class TransaksisModel extends Model
{
    protected $table      = 'transaksis';
    protected $primaryKey = 'id_transaksi';
    protected $allowedFields = ['username', 'id_barang', 'qty', 'total_harga', 'nama_barang', 'size_barang', 'warna_barang'];

    protected $useTimestamps = true;

    public function getTransaksi($id_transaksi = false)
    {
        if ($id_transaksi == false) {
            return $this->findAll();
        }

        return $this->where(['id_transaksi' => $id_transaksi])->first();
    }

    public function where()
    {
        // return $this->findAll();
        // return $this->find('1', '2');
        // return $this->table('transaksis')->where(['username' => '1'])->getResult;
        // return $this->where(['username' => user()->username])
        //     ->findAll();
    }

    public function search($keyword)
    {
        return $this->table('transaksis')->like('username', $keyword)->orLike('id_barang', $keyword)->orLike('qty', $keyword)->orLike('total_harga', $keyword)->orLike('nama_barang', $keyword);
    }
}
