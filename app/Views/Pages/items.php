<?php $this->extend('Layout/TemplateAdmin'); ?>

<?php $this->section('content'); ?>

<div class="container">
    <center>
        <h1>DATA BARANG</h1><br />
        <?php if (session()->getFlashdata('pesan')) : ?>
            <div class="alert alert-success" role="alert">
                <?= session()->getFlashdata('pesan'); ?>
            </div>
        <?php endif; ?>
        <a href="/Pages/itemscreate"><button class="btn btn-success">+</button></a><br /><br />
        <form action="" method="post">
            <div class="input-group flex-nowrap">
                <!-- <button class="input group text" type="submit" name="submit">Search</button> -->
                <span class="input-group-text" id="addon-wrapping">Search</span>
                <input type="text" name="keyword" class="form-control" placeholder="Search Item">
            </div>
        </form>
        <table class="table">
            <thead class="thead-dark"><br>
                <tr>
                    <!-- <th scope="col">NO</th> -->
                    <th scope="col">ID</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Warna</th>
                    <th scope="col">Size</th>
                    <th scope="col">Stok</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">AKSI</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1 + (4 * ($currentpage - 1)); ?>
                <?php foreach ($items as $item) : ?>
                    <tr>
                        <td><?= $item['id_barang']; ?></td>
                        <td><img src="/img/<?= $item['gambar_barang']; ?>" width=200px;></td>
                        <td><?= $item['nama_barang']; ?></td>
                        <td><?= $item['harga_barang']; ?></td>
                        <td><?= $item['warna_barang']; ?></td>
                        <td><?= $item['size_barang']; ?></td>
                        <td><?= $item['stok_barang']; ?></td>
                        <td><?= $item['deskripsi_barang']; ?></td>
                        <td>
                            <div class="btn-group">
                                <a href="/Pages/itemsedit/<?= $item['id_barang'];  ?> " class="btn btn-primary btn-sm mr-1"><i class="fa fa-edit"></i></a>
                                <a href="/Pages/itemsdelete/<?= $item['id_barang']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Delete <?= $item['nama_barang']; ?>')"><i class="fa fa-trash"></i></a>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <?= $pager->links('items', 'items_pagination');  ?>
    </center>
</div><br><br><br>

<?php $this->endsection(); ?>