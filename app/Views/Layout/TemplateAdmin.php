<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title> <?= $title ?> </title>
	<link rel="stylesheet" href="/css/style1.css">
	<link href="https://font.googleapis.com/css2?
	family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" href="<?= base_url('assets/css/font-awesome.css') ?>">
</head>

<body>

	<nav class="navbar navbar-expand-lg navbar-light bg-light mb-2 ">
		<div class="container-fluid">
			<a class="navbar-brand" href="/Pages/profile"><img src="/img/lb.png" width="90px"></a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" href="/Pages/items">Items</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/Pages/user">User</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/Pages/transaksi">Transaksi</a>
					</li>
				</ul>
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a href="/Pages/profile" class="nav-link">
							<i class="fas fa-user"></i> Welcome <?= user()->username; ?>
						</a>
					</li>
					<li class="nav-item">
						<a href="/logout" class="nav-link">
							Logout <i class="fas fa-sign-out-alt"></i>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<?= $this->rendersection('content'); ?>



	<div class="footer">
		<div class="container">
			<div class="row">
				<div class="footer-col-1">
					<h3>Download Our App</h3>
					<p>Download App for Android and Ios mobile phone</p>
					<div class="app-logo">
						<img src="/img/playstore.png">
						<img src="/img/appstore.png">
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