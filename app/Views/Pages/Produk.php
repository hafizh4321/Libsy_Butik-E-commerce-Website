	<?php $this->extend('Layout/Template'); ?>

	<?php $this->Section('content'); ?>

	<div class="small-container">
		<div class="row row-2">
			<h2>All products</h2>
			<form action="" method="post">
				<div class="input-group flex-nowrap">
					<!-- <button class="input group text" type="submit" name="submit">Search</button> -->
					<span class="input-group-text" id="addon-wrapping">Search</span>
					<input type="text" name="keyword" class="form-control" placeholder="Search Item">
				</div>
			</form>
			<!-- <select>
				<option>Default</option>
				<option>Price</option>
				<option>Popularity</option>
				<option>Rating</option>
				<option>Sale</option>
			</select> -->
		</div>


		<div class="row">
			<?php foreach ($items as $item) : ?>
				<div class="col-4">
					<a href="/Pages/Detailproduk/<?= $item['id_barang'];  ?>"><img src="/img/<?= $item['gambar_barang']; ?>"></a>
					<h4><?= $item['nama_barang']; ?></h4>
					<div class="rating">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
					</div>
					<p><?= number_to_currency($item['harga_barang'], 'IDR'); ?></p>
				</div>
			<?php endforeach; ?>
		</div>

		<span><?= $pager->links('items', 'items_pagination');  ?></span>
		<div class="page-btn">
			<!-- <span>1</span>
			<span>2</span>
			<span>3</span>
			<span>&#8594;</span> -->
		</div>
		<!-- comment -->
		
	<div class="fb-comments" data-href="http://localhost:8080/Pages/Produk/commentsave.php" data-width="100%" data-numposts="10"></div>
	<!-- <div class="fb-comments" data-href="http://localhost:8080/Pages/Produk.php" data-width="100%" data-numposts="10"></div> -->
	</div>

	</div><br><br><br><br>

	<?php $this->endsection(); ?>