    <?php $this->extend('Layout/TemplateAdmin'); ?>

    <?php $this->section('content'); ?>

    <div class="container">
        <center>
            <h1>TAMBAH BARANG</h1><br />
            <a href="/Pages/items"><button class="btn btn-dark">DATA BARANG</button></a><br /><br />
        </center>
        <form action="/Pages/itemssave" method="post">
            <?= csrf_field(); ?>
            <label for="nama_barang">Nama : </label><br />
            <input class="form-control" type="text" name="nama_barang" id="nama_barang" placeholder="NAMA" required autofocus><br />
            <label for="harga_barang">Harga : </label><br />
            <input class="form-control" type="number" name="harga_barang" id="harga_barang" placeholder="Harga Barang" required><br />
            <label for="warna_barang">Warna : </label><br />
            <input class="form-control" type="text" name="warna_barang" id="warna_barang" placeholder="warna Barang" required><br />
            <label for="size_barang">SIZE </label>
            <input class="form-control" type="text" name="size_barang" id="size_barang" placeholder="size Barang" required><br />
            <label for="stok_barang">Stok : </label><br />
            <input class="form-control" type="number" name="stok_barang" id="stok_barang" placeholder="Stok Barang" required><br />
            <label for="deskripsi_barang">Dekripsi : </label><br />
            <input class="form-control" type="textarea" name="deskripsi_barang" id="deskripsi_barang" placeholder="Dekripsi Barang" required><br />
            <label for="gambar_barang">Gambar : </label><br />
            <textarea class="form-control" type="text" name="gambar_barang" id="gambar_barang" placeholder="Gambar Barang" required></textarea><br />
            <input type="submit" class="btn btn-success float-right color-black" value="Submit"><br><br><br><br><br><br><br>
        </form>
    </div>

    <?php $this->endsection(); ?>