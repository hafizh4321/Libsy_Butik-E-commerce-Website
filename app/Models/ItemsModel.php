<?php

namespace App\Models;

use CodeIgniter\Model;

class ItemsModel extends Model
{
    protected $table      = 'items';
    protected $primaryKey = 'id_barang';
    protected $allowedFields = ['nama_barang', 'harga_barang', 'stok_barang', 'deskripsi_barang', 'gambar_barang', 'size_barang', 'warna_barang'];

    protected $useTimestamps = true;

    public function getItem($id_barang = false)
    {
        if ($id_barang == false) {
            return $this->findAll();
        }

        return $this->where(['id_barang' => $id_barang])->first();
    }

    public function search($keyword)
    {
        return $this->table('items')->like('nama_barang', $keyword)->orLike('harga_barang', $keyword)->orLike('stok_barang', $keyword)->orLike('deskripsi_barang', $keyword)->orLike('id_barang', $keyword)->orLike('size_barang', $keyword)->orLike('warna_barang', $keyword);
    }
}
