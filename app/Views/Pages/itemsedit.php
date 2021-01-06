    <?php $this->extend('Layout/TemplateAdmin'); ?>

    <?php $this->section('content'); ?>

    <div class="container">
        <center>
            <h1>EDIT BARANG</h1><br />
            <a href="/Pages/items"><button class="btn btn-dark">DATA BARANG</button></a><br /><br />
        </center>
        <form action="/Pages/itemsupdate/<?= $items['id_barang'];  ?>" method="post">
            <?= csrf_field();  ?>
            <label for="nama_barang">Nama : </label><br />
            <input class="form-control" type="text" name="nama_barang" id="nama_barang" placeholder="NAMA" autofocus value="<?= $items['nama_barang'];  ?>"><br />
            <label for="harga_barang">Harga : </label><br />
            <input class="form-control" type="number" name="harga_barang" id="harga_barang" placeholder="Harga Barang" value="<?= $items['harga_barang'];  ?>"><br />
            <label for="warna_barang">Warna : </label><br />
            <input class="form-control" type="text" name="warna_barang" id="warna_barang" placeholder="warna Barang" value="<?= $items['warna_barang']; ?>" required><br />
            <label for="size_barang">SIZE </label>
            <input class="form-control" type="text" name="size_barang" id="size_barang" placeholder="size Barang" value="<?= $items['size_barang']; ?>" required><br />
            <label for=" stok_barang">Stok : </label><br />
            <input class="form-control" type="number" name="stok_barang" id="stok_barang" placeholder="Stok Barang" value="<?= $items['stok_barang'];  ?>"><br />
            <label for="deskripsi_barang">Dekripsi : </label><br />
            <input class="form-control" type="text" name="deskripsi_barang" id="deskripsi_barang" placeholder="Dekripsi Barang" value="<?= $items['deskripsi_barang'];  ?>"><br />
            <label for="gambar_barang">Gambar : </label><br />
            <input class="form-control" type="text" name="gambar_barang" id="gambar_barang" placeholder="Gambar Barang" value="<?= $items['gambar_barang'];  ?>"></input><br />
            <input type="submit" class="btn btn-success float-right color-black" value="Submit"><br><br><br><br><br><br><br>
        </form>
    </div>

    <?php $this->endsection(); ?>