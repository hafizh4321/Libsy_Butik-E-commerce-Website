<?php $this->extend('Layout/TemplateAdmin'); ?>

<?php $this->section('content'); ?>

<div class="container">
    <center>
        <h1>DATA TRANSAKSI</h1><br />
        <form action="" method="post">
            <div class="input-group flex-nowrap">
                <!-- <button class="input group text" type="submit" name="submit">Search</button> -->
                <span class="input-group-text" id="addon-wrapping">Search</span>
                <input type="text" name="keyword" class="form-control" placeholder="Search Item">
            </div>
        </form>
        <table class="table"><br>
            <thead class="thead-dark">
                <tr>
                    <th scope="col">NO</th>
                    <th scope="col">Username</th>
                    <th scope="col">id Barang</th>
                    <th scope="col">Qty</th>
                    <th scope="col">total harga</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1 + (5 * ($currentpage - 1)); ?>
                <?php foreach ($transaksis as $transaksi) : ?>
                    <tr>
                        <th><?= $i++; ?></th>
                        <td><?= $transaksi['username']; ?></td>
                        <td><?= $transaksi['id_barang']; ?></td>
                        <td><?= $transaksi['qty']; ?></td>
                        <td><?= number_to_currency($transaksi['total_harga'], 'IDR'); ?></td>
                        <td><?= $transaksi['created_at']; ?></td>
                        <td><?= $transaksi['status']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <?= $pager->links('transaksis', 'transaksis_pagination');  ?>
    </center>
</div><br><br><br>

<?php $this->endsection(); ?>