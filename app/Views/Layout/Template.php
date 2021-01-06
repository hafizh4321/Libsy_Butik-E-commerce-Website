<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title> <?= $title ?> </title>
	<link rel="stylesheet" href="/css/style.css">
	<link href="https://font.googleapis.com/css2?
	family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
	<div id="fb-root"></div>
	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v9.0" nonce="Q2lQyoqg"></script>
</head>

<body>

	<div class="container">
		<div class="navbar">
			<div class="logo">
				<a href="/"><img src="/img/lb.png" width="100px"> </a>

			</div>
			<nav>
				<ul>
					<li> <a href="/Pages/Produk">Products</a></li>
					<li> <a href="/Pages/About">About</a></li>
					<li> <a href="/Pages/where">History</a></li>


					<?php if (logged_in()) : ?>
						<li class="nav-item dropdown mr-3">
							<a href="/Pages/profile" class="nav-link dropdown-toggle" data-toggle="dropdown">
								<img src="/img/<?= user()->user_image; ?>" style="width: 20px; height:20px; border-radius: 70%;"> <?= user()->username; ?>
							</a>
						</li>
					<?php else : ?>
						<li class="nav-item dropdown mr-3">
							<a href="/Pages/profile" class="nav-link dropdown-toggle" data-toggle="dropdown">
								<img src="/img/default.svg" style="width: 20px; height:20px; border-radius: 70%;"> user
							</a>
						</li>
					<?php endif; ?>
				</ul>
			</nav>
			<a href="/Pages/cart"><img src="/img/cart.png" width="20px" height="20px"></a>
		</div>
	</div>

	<?= $this->rendersection('content'); ?>

	<div class="footer">
		<div class="container">
			<div class="row">
				<div class="footer-col-1">
					<h3>Download Our App</h3>
					<p>Download App for Android and Ios mobile phone</p>
					<div class="app-logo">
						<img src="/img/playstore.png" height="40px">
						<img src="/img/appstore.png" height="40px">
					</div>
				</div>
				<div class="footer-col-2">
					<img src="/img/logo.png">
					<p>Our Purpose is to sustainably make the pleasure an =d beneefits of sport accessibe to the many</p>
				</div>
				<div class="footer-col-3">
					<h3>Useful Links</h3>
					<ul>
						<li>Coupons</li>
						<li>Blog Post</li>
						<li>Return Policy</li>
						<li>Join Affiliita</li>
					</ul>
				</div>
				<div class="footer-col-4">
					<h3>Follow US</h3>
					<ul>
						<li>Facebook</li>
						<li>Twitter</li>
						<li>Instagram</li>
						<li>Youtube</li>
					</ul>
				</div>
			</div>
			<hr>
			<p class="copyright">copyright 2020 - Libsy Butik </p>
		</div>
	</div>
</body>

</html>