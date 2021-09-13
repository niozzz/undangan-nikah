

<!DOCTYPE HTML>
<html lang="en">

<head>
	<title>Tentang Aplikasi</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
	<!-- Font -->
	<link href="https://fonts.googleapis.com/css?family=Playball%7CBitter" rel="stylesheet">
	<!-- Stylesheets -->
	<link href="assets/css/bootstrap.css" rel="stylesheet">
	<link href="assets/css/fluidbox.min.css" rel="stylesheet">
	<link href="assets/css/font-icon.css" rel="stylesheet">
	<link href="assets/css/listTamu/styles.css" rel="stylesheet">
	<link href="assets/css/listTamu/responsive.css" rel="stylesheet">
	<link href="assets/css/styles.css" rel="stylesheet">
	<link href="assets/css/responsive.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="assets/css/styleAboutApps.css">
	<link rel="icon" type="image/png" sizes="16x16" href="assets/images/logo-black.png">
	
	<style>img[alt="www.000webhost.com"]{display:none;}</style>

	<?php
	require_once('Admin/Api/koneksi.php');
	?>
</head>

<body>
	<!-- start = Menu -->
	<header>
		<div class="container">
			<a class="logo" href="#"><img src="assets/images/logo-white.png" alt="Logo"></a>
			<div class="menu-nav-icon" data-nav-menu="#main-menu"><i class="icon icon-bars"></i></div>
			<ul class="main-menu visible-on-click" id="main-menu">
				<li><a href="index.php">BERANDA</a></li>
				<li><a href="index.php#mempelai">MEMPELAI</a></li>
				<li><a href="index.php#prokes">PROKES</a></li>
				<li><a href="index.php#kapan">KAPAN ?</a></li>
				<li><a href="index.php#galeri">GALERI</a></li>
				<li><a href="index.php#kirim-pesan">KIRIM SESUATU</a></li>
				<li><a href="index.php#lokasi">LOKASI</a></li>
				<!-- <li><a href="listTamu.php">TAMU UNDANGAN</a></li> -->
				<li><a href="Login.php" target="_blank">MASUK</a></li>
			</ul>
		</div>
	</header>
	<!-- end = menu -->

	<section class="section contact-area">
		<div class="container">
			<div class="row">

					<div class="col-sm-12">
					<div class="contact-form margin-bottom">
						<h2 class="center-text" style="margin-bottom: 10px;">Tentang Aplikasi</h2>
						<form method="post">
							<div class="row">

								<div class="col-md-1"></div>
								<div class="col-md-10 col-sm-12">
								<p style="text-align: justify; margin-bottom: 10px;">Aplikasi sederhana ini dibuat untuk kebutuhan undangan pernikahan online agar mudah diakses oleh siapapun melalui berbagai perangkat teknologi. Pengembang berharap, dengan dibuatnya aplikasi ini dapat membantu pihak keluarga mempelai untuk dapat menjangkau banyak tamu undangan dengan praktis. Salam.</p>
								</div>
								<div class="col-md-1"></div>
								
								
							</div><!-- row -->
							<div class="row">

								<div class="col-md-1"></div>
								<div class="col-md-10 col-sm-12">
								<p style="text-align: center; margin-bottom: 10px;">~ MILLENIO ~</p>
								</div>
								<div class="col-md-1"></div>
								
								
							</div><!-- row -->
						</form>
					</div><!-- contact-form -->
				</div><!-- col-sm-6 -->
	

			</div><!-- row -->
		</div><!-- container -->
	</section><!-- section -->


	<!-- start = footer  -->
	<footer>
		<div class="container center-text">

			<div class="logo-wrapper">
				<a class="logo" href="#"><img src="assets/images/logo-black.png" alt="Logo Image"></a>
				<i class="icon icon-star"></i>
			</div>
			<ul class="social-icons">
				<?php
				$sosmed = mysqli_query($conn, "SELECT * FROM sosmed");
				while ($infoSosmed = mysqli_fetch_array($sosmed)) {


				?>
					<li><a href="#"><i class="icon icon-heart"></i></a></li>
					<li><a href="<?php echo $infoSosmed['twitter']; ?>" target="_blank"><i class="icon icon-twitter"></i></a></li>
					<li><a href="<?php echo $infoSosmed['ig']; ?>" target="_blank"><i class="icon icon-instagram"></i></a></li>
					<li><a href="<?php echo $infoSosmed['fb']; ?>" target="_blank"><i class="icon icon-facebook"></i></a></li>
				<?php
				}
				?>
			</ul>
			<ul class="footer-links">
				<li><a href="index.php">BERANDA</a></li>
				<li><a href="index.php#mempelai">MEMPELAI</a></li>
				<li><a href="index.php#prokes">PROKES</a></li>
				<li><a href="index.php#kapan">KAPAN ?</a></li>
				<li><a href="index.php#galeri">GALERI</a></li>
				<li><a href="index.php#kirim-pesan">KIRIM SESUATU</a></li>
				<li><a href="index.php#lokasi">LOKASI</a></li>
			</ul>
			<p class="copyright"> Copyright &copy;<script>
					document.write(new Date().getFullYear());
				</script>
				-  Dibuat dengan <i class="icon-heart" aria-hidden="true"></i> oleh Millenio</p>
		</div>
	</footer>
	<!-- end = footer -->


	<script src="assets/js/jquery-3.1.1.min.js"></script>


	<script src="assets/js/tether.min.js"></script>
	<script src="assets/js/bootstrap.js"></script>
	<script src="assets/js/scripts.js"></script>
	<script src="assets/js/jquery.countdown.min.js"></script>
	<script src="assets/js/jquery.fluidbox.min.js"></script>
	<script src="assets/js/scripts.js"></script>

   

</body>

</html>