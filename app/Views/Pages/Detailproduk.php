	<?php $this->extend('Layout/Template'); ?>

	<?php $this->Section('content'); ?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<!----single product details---
		-->

	<div class="small-container single-product">
		<?php echo form_open('Pages/cartadd');
		echo form_hidden('id', $items['id_barang']);
		echo form_hidden('price', $items['harga_barang']);
		echo form_hidden('name', $items['nama_barang']);

		//option
		echo form_hidden('gambar', $items['gambar_barang']);
		echo form_hidden('stok', $items['stok_barang']);
		echo form_hidden('warna', $items['warna_barang']);
		echo form_hidden('size', $items['size_barang']);

		?>
		<div class="row">
			<div class="col-2">
				<img src="/img/<?= $items['gambar_barang']; ?>" width="100%" id="ProductImg">
			</div>

			<!-- <form action="" method="post"> -->
			<div class="col-2">
				<p>Stok: <?= $items['stok_barang']; ?></p>
				<h1><?= $items['nama_barang']; ?></h1>
				<h4><?= number_to_currency($items['harga_barang'], 'IDR'); ?></h4>
				<!-- <select>
					<option value="M">select size</option>
					<option>M</option>
					<option>L</option>
				</select> -->
				<h3>Size <?= $items['size_barang']; ?></h3>
				<hr><br>
				<h3><?= $items['warna_barang']; ?></h3>
				<hr><br>
				<?php $qty = $items['stok_barang']; ?>
				<!-- <input type="number" min="1" value="1" name="qty" onchange="myFunction(this.value)">
				<script>
					function myFunction(val) {
						if (val > <?= $qty ?>) {
							alert("Stok Tidak mencukupi");
						}
					}
				</script> -->
				<?php if ($items['stok_barang'] <= 0) : ?>
					<a href="" class="btn" onclick="myFunction()"> add to cart </a>
					<script>
						function myFunction() {
							alert("Stok Habis");
						}
					</script>
				<?php else : ?>
					<button class="btn" type="submit">add to cart</button>
				<?php endif; ?>
				<h3>Product Details <i class="fa fa-indent"></i></h3>
				<br>
				<p><?= $items['deskripsi_barang']; ?></p>

			</div>
		</div>
		<?php echo form_close(); ?>
	</div><br><br><br><br><br>


	<?php $this->endsection(); ?>