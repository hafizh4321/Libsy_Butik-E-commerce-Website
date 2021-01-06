<?php $this->extend('Layout/Template'); ?>

<?php $this->Section('content'); ?>

<div class="container">
    <center>
        <h1>HISTORY</h1><br />
        <br><br><br>
        <form action="" method="post">
            <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping">Search</span>
                <input type="text" name="keyword" class="form-control" placeholder="Search Item">
            </div>
        </form>
        <table class="table"><br>
            <thead>
                <tr>
                    <th scope="col">NO</th>
                    <th scope="col">Nama Barang</th>
                    <!-- <th scope="col">Warna</th> -->
                    <!-- <th scope="col">Size</th> -->
                    <th scope="col">Qty</th>
                    <th scope="col">total harga</th>
                    <th scope="col">status</th>
                    <th scope="col">tanggal</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1 + (5 * ($currentpage - 1)); ?>
                <?php foreach ($transaksis as $transaksi) : ?>
                    <tr>
                        <td><?= $i++; ?></td>
                        <td><?= $transaksi['nama_barang']; ?></td>
                        <td><?= $transaksi['qty']; ?></td>
                        <td><?= number_to_currency($transaksi['total_harga'], 'IDR'); ?></td>
                        <td><?= $transaksi['status']; ?></td>
                        <td><?= $transaksi['updated_at']; ?></td>
                        <?php if($transaksi['status'] == 'lunas'): ?>
                            <td style="color: green;"><i class="fas fa-check-circle"></i>
                        </td>
                            <?php else: ?>
                        <td>
                                <a href="/Pages/transaksidelete/<?= $transaksi['id_transaksi']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Batal Pembelian <?= $transaksi['nama_barang']; ?>?')"><i class="fa fa-trash"></i></a>
                                <a href="/Pages/cartpay " class="btn btn-primary btn-sm mr-1"><i class="fa fa-edit"></i></a>
                            </div>
                        </td>
                    <?php endif; ?>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table><br>
        <?= $pager->links('transaksis', 'transaksis_pagination');  ?>
        <br><br><br><br>
    </center>
</div><br><br><br>
<?php $this->endsection(); ?>