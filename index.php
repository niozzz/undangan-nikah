

<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>Wedding Invitation</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
	
    <b:if cond='data:view.isHomepage'>
    <meta content='https://undangannikahcitra.000webhostapp.com/assets/images/slider1.jpg' property='og:image'/>
    </b:if>
	
	<!-- Font -->
	<link href="https://fonts.googleapis.com/css?family=Playball%7CBitter" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
	<!-- Stylesheets -->
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/testimonial1.css" rel="stylesheet">
	<link href="assets/css/fluidbox.min.css" rel="stylesheet">
	<link href="assets/css/font-icon.css" rel="stylesheet">
	<link href="assets/css/styles.css" rel="stylesheet">
	<link href="assets/css/responsive.css" rel="stylesheet">
	<!-- <link rel="icon" type="image/png" href="assets/images/logo-black.png"> -->
	<link rel="icon" type="image/png" sizes="16x16" href="assets/images/logo-black.png">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"/>
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css"> -->

	<style>
	/* smooth scroll */
	html {
		scroll-behavior: smooth;
	}

	/* menghilangkan scroll bar */
	
	@media screen and (max-width:640px){ 
		.element,html{scrollbar-width:none}html::-webkit-scrollbar,.element::-webkit-scrollbar{display:none}
	}
	
	/*menghilangkan watermark webhost000*/
	img[alt="www.000webhost.com"]{display:none;}
	
	/* body {
  display:grid;
  place-content:center;
  min-height:100vh;
  overflow:hidden;
} */

.w {
  width:70%;
  height:80vmin;
}

.ts {
  width:100%; height:100%;
  position:relative;
  --barH:20%;/*active zone height = 100% - barH*/
}

.t {
  --w:20%;
  display:block; width:var(--w); height:var(--barH);
  position:absolute; bottom:0; left:var(--l);
  transform-origin:top left;
}

.t img {
  dislay:block; width:100%; height:100%;
  -o-object-fit:cover;
     object-fit:cover;
  transform:scale(0.8);
}

.ts [type="radio"] { 
  display:none; 
}

:checked + label.t {
  left:0; bottom:var(--barH);
  height:calc(100% - var(--barH));
}

:checked + label.t img {
  -o-object-fit:contain;
     object-fit:contain;
}

/* 
optional
*/

.ts {/*thumbnails bar*/
  perspective:100px;
  perspective-origin:center center;
  transform-style:preserve-3d;
  pointer-events:none;
}

.ts:after {/*the plate*/
  content:"";
  display:block; width:100%; height:15px;
  position:absolute; bottom:0;
  background:linear-gradient(transparent 20%, rgba(0,0,0,0.1));
  transform:rotateX(90deg)scaleX(1.2);
  transform-origin:bottom center;
}

:not(:checked) + .t {/*inactive labels*/
  transform:translate3d(0, 0, -5px);
  pointer-events:auto;
}

:not(:checked) + .t:hover {
  transform:translate3d(0, -7px, -5px);
  box-shadow:0 30px 30px -25px rgba(0,0,0,0.3);
  cursor:pointer;
}

:not(:checked) + .t img {
  transform:scale(0.9);/*create gaps*/
}

:checked + .t {/*active label*/
  box-shadow:0 0 0 transparent;
  -webkit-animation:anim 2s 1;
          animation:anim 2s 1;
} @-webkit-keyframes anim {
  from { transform:rotateY(6deg)rotateX(3deg) }
} @keyframes anim {
  from { transform:rotateY(6deg)rotateX(3deg) }
}

/* 
transitions
*/
.t {/*active->inactive & hover->rest*/
  transition:transform 0.5s, bottom 0.6s, left 0.6s, width 0.3s, box-shadow 1s;
}
.t:hover, :checked + .t {
  transition:transform 0.5s, bottom 0.6s, left 0.6s, width 0.3s, box-shadow 0s;
}
	
.gambar-gedung 
{
	width: 100%;
	height: 100%;
	min-height: 200px;
	object-fit: cover;
}

	</style>
	

</head>
<body>
	<?php require_once('Admin/Api/koneksi.php'); ?>
	<!-- start = Menu -->
	<header>
		<div class="container">
			<a class="logo" href="#"><img src="assets/images/logo-white.png" alt="Logo"></a>
			<div class="menu-nav-icon" data-nav-menu="#main-menu"><i class="icon icon-bars"></i></div>
			<ul class="main-menu visible-on-click" id="main-menu">
				<li><a href="index.php">BERANDA</a></li>
				<li><a href="#mempelai">MEMPELAI</a></li>
				<li><a href="#prokes">PROKES</a></li>
				<li><a href="#kapan">KAPAN ?</a></li>
				<li><a href="#galeri">GALERI</a></li>
				<li><a href="#kirim-pesan">KIRIM SESUATU</a></li>
				<li><a href="#lokasi">LOKASI</a></li>
				<!-- <li><a href="listTamu.php">TAMU UNDANGAN</a></li> -->
				<li><a href="aboutApps.php" target="_blank">TENTANG APLIKASI</a></li>
				<!-- <li><a href="Login.php" target="_blank">MASUK</a></li> -->
			</ul>
		</div>
	</header>
	<!-- end = menu -->


	<!-- start = konten save the date -->
	<?php
		$resepsi = mysqli_query($conn,"SELECT * FROM resepsi");
		while ($infoResepsi = mysqli_fetch_array($resepsi)) {
	?>
	<!-- <div class="main-slider" style="background:url(Admin/fileUpload/<?php echo $infoResepsi['fileGambar'];?>); background-size:cover;"  > -->
	<div class="main-slider" style="background:url(assets/images/slider1.jpg); background-size:cover;"  >
		<div class="display-table center-text">
			<div class="display-table-cell">
				<div class="slider-content">

					<i class="small-icon icon icon-tie"></i>
					<?php
						$getTanggal = $infoResepsi['tglResepsi'];
						$pecahTanggal = explode("-", $getTanggal);
						$tahun = $pecahTanggal[0];
						$bulan = $pecahTanggal[1];
						$tanggal = $pecahTanggal[2];

						if ($bulan == "01") {
							echo "<h5 = class'date'>Sabtu, ".$tanggal." Januari ".$tahun."</h5>";
						} else if ($bulan == "02"){
							echo "<h5 = class'date'>Sabtu, ".$tanggal." Februari ".$tahun."</h5>";
						}else if ($bulan == "03"){
							echo "<h5 = class'date'>Sabtu, ".$tanggal." Maret".$tahun."</h5>";
						} else if($bulan == "04"){
							echo "<h5 = class'date'>Sabtu, ".$tanggal." April ".$tahun."</h5>";
						} else if ($bulan == "05"){
							echo "<h5 class='date'>Sabtu, ".$tanggal." Mei ".$tahun."</h5>";
						} else if ($bulan == "06"){
							echo "<h5 class='date'>Sabtu, ".$tanggal." Juni ".$tahun."</h5>";
						} else if ($bulan == "07"){
							echo "<h5 = class'date'>Sabtu, ".$tanggal." Juli ".$tahun."</h5>";
						} else if ($bulan == "08"){
							echo "<h5 = class'date'>Sabtu, ".$tanggal." Agustus ".$tahun."</h5>";
						}else if ($bulan == "09"){
							echo "<h5 = class'date'>Sabtu, ".$tanggal." September ".$tahun."</h5>";
						}else if ($bulan == "10"){
							echo "<h5 = class'date'>Sabtu, ".$tanggal." Oktober ".$tahun."</h5>";
						}else if ($bulan == "11"){
							echo "<h5 = class'date'>Sabtu, ".$tanggal." November ".$tahun."</h5>";
						}else if ($bulan == "12"){
							echo "<h5 = class'date'>Sabtu, ".$tanggal." Desember ".$tahun."</h5>";
						}

					?>
					<h3 class="pre-title">Save The Date</h3>
					<h1 class="title"><?php echo $infoResepsi['namaPria'];?> <i class="icon icon-heart"></i> <?php echo $infoResepsi['namaWanita'];?></h1>
					<?php
						}
					?>
				</div>
			</div>
		</div>
	</div>
	<!-- end = konten save the date -->

	<!-- start = konten sambutan -->
	<section class="section story-area center-text" id="mempelai">
		<div class="container">
			<div class="row">
				<div class="col-sm-1"></div>
				<div class="col-sm-10" >

					<div class="heading" style="margin:auto; width:80%;" data-aos='zoom-in'>

							<h3 class="title">بِسْمِ اللَّهِ الرَّحْمَنِ الرَّحِيْم</h3>
							<span class="heading-bottom"><i class="icon icon-star"></i></span>
							<p>Dengan memohon rahmat dan ridho Allah Subhanahu wa Ta'ala, kami bermaksud menyelenggarakan pernikahan putra dan putri kami :</p>

					</div>
					<!-- statrt = untuk menampilkan sambutan -->
					<?php
						$sambutan = mysqli_query($conn,"SELECT * FROM sambutan");
						while ($tampilSambutan=mysqli_fetch_array($sambutan)) {
					?>
					<!-- bagian pembuka sambutan-->
					<!-- <p  class="desc" style="text-align:justify; margin-bottom:5px;"><?php echo $tampilSambutan['pembukaSambutan'];?></p>  -->

					<!-- satart = lokasi prewed -->
					<section class="contact-area">

						

						<!-- start alamat -->
						<div class="contact-wrapper section float-left">
							<div class="container">
								<div class="row" data-aos='zoom-in'>

									<div class="col-sm-12">
										<div class="heading">
											<h3 style="font-size: 30px;" class="title">Citra Nisadhona Aldarajat S.Hum</h3>

										<img src="assets/images/siluet-wanita.png" alt="foto mempelai pria" style="height: 300px; width:60%;">
										</div>
										<div class="margin-bottom">
											<p>Putri pertama dari <br>
											Bapak Suyatno<br>
											& <br>
											Ibu Maryani</p>

										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- end alamat -->

						<!-- start alamat -->
						<div class="contact-wrapper section float-right">
							<div class="container">
								<div class="row" data-aos='zoom-in'>

									<div class="col-sm-12">
										<div class="heading" >
											<h3 style="font-size: 30px;" class="title">Wahyu Surya Timur S.Pd</h3>

										<img src="assets/images/siluet-pria.png" alt="foto mempelai pria" style="height: 300px; width:60%;">
										</div>
										<div class="margin-bottom">
											<p>Putra pertama dari <br>
											Bapak Drs. P Supangkat <br>
											& <br>
											Ibu Munifah</p>

										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- end alamat -->


					</section>
					<!-- end = lokasi prewed -->


					<!-- <p class="desc" style="text-align:justify;margin-bottom:5px;"> -->
					<!-- bagian isi sambutan -->
					<!-- <?php echo $tampilSambutan['isiSambutan'];?> </p> -->
					<!-- <img style="border:1px solid black; height:50px; width:50px;" src="assets/images/siluet1.png" alt=""> -->
					<!-- <img src="assets/images/siluet2.png" height="50" width="50" alt=""> -->

					<!-- <p class="desc" style="text-align:justify;margin-bottom:1em;"> -->
					<!-- bagian penutup sambutan -->
					<!-- <?php echo $tampilSambutan['penutupSambutan'];?> -->
					<!-- </p> -->
					<?php } ?>
					<!-- end = untuk menampilkan sambutan -->

				</div>
			</div>
		</div>
	</section>
	<!-- end =konten sambutan -->


	<!-- start = wedding ceremoni -->
	<section class="section ceremony-area center-text" id="wedding">
		<div class="container">
			<div class="row">
				<div class="col-sm-12" data-aos='flip-right'>

					<div class="heading" style="width:80%; margin:auto;">
						<h2 class="title">Quotes</h2>
						<span class="heading-bottom"><i class="color-white icon icon-star"></i></span><br>
						<h4 style="text-align: right; margin-bottom:10px;">وَمِنْ ءَايَٰتِهِۦٓ أَنْ خَلَقَ لَكُم مِّنْ أَنفُسِكُمْ أَزْوَٰجًا لِّتَسْكُنُوٓا۟ إِلَيْهَا وَجَعَلَ بَيْنَكُم مَّوَدَّةً وَرَحْمَةً ۚ إِنَّ فِى ذَٰلِكَ لَءَايَٰتٍ لِّقَوْمٍ يَتَفَكَّرُونَ</h4>
						<span style="text-align: left; margin-bottom:10px; font-weight:bold; text-align:justify;">Wa min āyātihī an khalaqa lakum min anfusikum azwājal litaskunū ilaihā wa ja'ala bainakum mawaddataw wa raḥmah, inna fī żālika la`āyātil liqaumiy yatafakkarụn</span>
						<span style="text-align: left; margin-bottom:10px; text-align:justify;">Dan di antara tanda-tanda kekuasaan-Nya lah Dia menciptakan untukmu istri-istri dari jenismu sendiri, supaya kamu cenderung dan merasa tenteram kepadanya, dan dijadikan-Nya diantaramu rasa kasih dan sayang. Sesungguhnya pada yang demikian itu benar-benar terdapat tanda-tanda bagi kaum yang berfikir.</span>
						<span style="text-align: center;">(Q.S Ar-Rum : 21)</span>
					</div>

					<!-- <div class="ceremony margin-bottom">
						<?php
							$adat = mysqli_query($conn,"SELECT * FROM adat");
							while ($infoAdat = mysqli_fetch_array($adat)) {
								echo "<p class='desc'>".$infoAdat['penjelasan']."</p>";
							}
						?>


					</div> -->

				</div>
			</div>
		</div>
	</section>
	<!-- end = wedding ceremoni -->


	<!-- start = konten cerita -->
	<section class="section w-details-area center-text" id="prokes">
		<div class="container">
			<div class="row">
				<div class="col-sm-1"></div>
				<div class="col-sm-10">

					<div class="heading" style="margin:auto; width:80%;" data-aos='zoom-in'>
						<h2 class="title">Protokol Kesehatan</h2>
						<span class="heading-bottom"><i class="icon icon-star"></i></span>
						<p>Tanpa mengurangi rasa hormat, demi mengurangi penyebaran pandemi, mohon untuk menjaga protokol kesehatan yang berlaku sebagai berikut :</p>
					</div>

					<!-- start = konten bagian cerita  -->
					<div class="wedding-details margin-bottom">
						<?php
							// $cerita = mysqli_query($conn,"SELECT * FROM cerita");
							// while ($infoCerita = mysqli_fetch_array($cerita)) {
						?>
						<?php
							// $id=$infoCerita['idCerita'];
							// if ($id%2 == 0 ) {
						?>
						<div class="w-detail right" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">
							 <!-- <img src="Admin/fileUpload/<?php echo $infoCerita['gambarCerita'];?>">  -->
							 <img src="assets/images/prokes1.png" style="width:30%; height:30%;">
							<!-- <h4 class="title"><?php echo $infoCerita['judulCerita'];?></h4> -->
							<h4 class="title">Mencuci Tangan</h4>
							<!-- <p><?php echo $infoCerita['isiCerita'];?></p> -->
							<p>Cucilah tangan Anda menggunakan sabun dan air yang bersih</p>
						</div>
						<div class="w-detail left" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">
							 <!-- <img src="Admin/fileUpload/<?php echo $infoCerita['gambarCerita'];?>">  -->
							 <img src="assets/images/prokes2.png" style="width:30%; height:30%;">
							<!-- <h4 class="title"><?php echo $infoCerita['judulCerita'];?></h4> -->
							<h4 class="title">Menggunakan Masker</h4>
							<!-- <p><?php echo $infoCerita['isiCerita'];?></p> -->
							<p>Gunakanlah masker medis berstandar SNI</p>
						</div>
						<div class="w-detail right" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">
							 <!-- <img src="Admin/fileUpload/<?php echo $infoCerita['gambarCerita'];?>">  -->
							 <img src="assets/images/prokes3.png" style="width:30%; height:30%;">
							<!-- <h4 class="title"><?php echo $infoCerita['judulCerita'];?></h4> -->
							<h4 class="title">Hindari Bersalaman</h4>
							<!-- <p><?php echo $infoCerita['isiCerita'];?></p> -->
							<p>Hindarilah bersentuhan tangan dengan orang lain</p>
						</div>
						<div class="w-detail left" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">
							 <!-- <img src="Admin/fileUpload/<?php echo $infoCerita['gambarCerita'];?>">  -->
							 <img src="assets/images/prokes4.png" style="width:30%; height:30%;">
							<!-- <h4 class="title"><?php echo $infoCerita['judulCerita'];?></h4> -->
							<h4 class="title">Pakai Hand Sanitizer</h4>
							<!-- <p><?php echo $infoCerita['isiCerita'];?></p> -->
							<p>Gunakanlah Hand Sanitizer yang sudah disediakan ataupun milik Anda</p>
						</div>

						<?php
						// }
						?>

						<?php
							// }
						?>
						<!-- end = konten bagain cerita -->

					</div>

				</div>
			</div>
		</div>
	</section>
	<!-- end = konten cerita -->

	<!-- start = Coutdown acara dimulai resepsi -->
	<section class="section counter-area center-text" id="kapan">
		<div class="container">
			<div class="row" data-aos="zoom-in">

				<div class="col-sm-12">
					<div class="heading">
						<h2 class="title">Jangan Lupa</h2>
						<?php
							$hitungTgl = mysqli_query($conn,"SELECT * FROM resepsi");
							while ($hTgl = mysqli_fetch_array($hitungTgl)) {
								$tgl = $hTgl['tglResepsi'];
								$pTgl = explode("-", $tgl);
								$hYears=$pTgl[0];
								$hMounth = $pTgl[1];
								$hDay = $pTgl[2];
								$jam =  (int)((mktime(0,0,0,$hMounth,$hDay,$hYears)-time())/86400);
						?>
						<span class="heading-bottom"><i class="color-white icon icon-star"></i></span>
					</div>
				</div>

				<div class="col-sm-2"></div>
				<div class="col-sm-8">

					<div class="remaining-time">
						<?php
							echo "Masih ada waktu ".$jam." hari lagi, sampai tanggal $hDay-$hMounth-$hYears";
							echo "<br>";
							echo "<br>";


						?>


					</div>

				</div>
				<div class="col-sm-2"></div>
				<div class="col-md-2"></div>
				<div class="col-md-4 col-sm-12">
						<img src="assets/images/ring1.png" style="width:15%; height:50%; " alt="">
						<div class="remaining-time">
						<?php

							// echo "Acara resepsi Kami akan dilaksanakan pada tanggal $hDay-$hMounth-$hYears pukul ".$hTgl['jamResepsi'];
				// 			$waktuResepsi = (int) $hTgl['jamResepsi'];
				// 			$waktuAkad = $waktuResepsi - 4;
				// 			$strWaktuResepsi = "0" . "$waktuResepsi" . ":00 WIB" ;
				// 			$strWaktuAkad = "0" . "$waktuAkad" . ":00 WIB" ;
				// 			echo "Acara Akad akan dilaksanakan pada pukul ".$strWaktuAkad;
				// 			echo "<br>";
				// 			echo "<br>";
							
						?>
						Acara Akad akan dilaksanakan pada pukul 08.00 - 10.00 WIB
						<br><br>
					</div>
				</div>
				<div class="col-md-4 col-sm-12">
						<img src="assets/images/cake2fix.png" style="width:15%; height:50%;" alt="">
						<div class="remaining-time">
						<?php

				// 			echo "Acara Resepsi akan dilaksanakan pada pukul ".$strWaktuResepsi;
				// 			echo "<br>";
				// 			echo "<br>";
							}
						?>
						Acara Resepsi akan dilaksanakan pada pukul 10.30 - 13.00 WIB
						<br><br>
					</div>
				</div>
				<div class="col-md-2"></div>

			</div>
		</div>
	</section>
	<!-- end = Coutdown acara dimulai resepsi -->

	<!-- start = gallery prewedding -->
	<section class="section galery-area center-text" >
		<div class="container" id="galeri">
			<div class="row" data-aos="zoom-in" >
				
				<div class="col-sm-12">
					
					<div class="heading pb-0" >
						<h2 class="title">Our Engagement</h2>
						<span class="heading-bottom"><i class="icon icon-star"></i></span>
					</div>
					
					<div class="image-gallery">
						
						<!-- start = untuk menampilkan foto -->
						<!-- nanti setting ukuran 600x400 -->
						<div class="row d-flex justify-content-center">
						<div class="w">
							<div class="ts">
								<input type="radio" id="c1" name="ts" checked="checked"/>
								<label class="t" for="c1"><img src="./assets/images/lamaran4-min.JPG"/></label>
								<input type="radio" id="c2" name="ts"/>
								<label class="t" for="c2"><img src="./assets/images/lamaran1-min.JPG"/></label>
								<input type="radio" id="c3" name="ts"/>
								<label class="t" for="c3"><img src="./assets/images/lamaran2-min.JPG"/></label>
								<input type="radio" id="c4" name="ts"/>
								<label class="t" for="c4"><img src="./assets/images/lamaran3-min.JPG"/></label>
								<input type="radio" id="c5" name="ts"/>
								<label class="t" for="c5"><img src="./assets/images/lamaran5-min.JPG"/></label>
							</div>
						</div>
							
							
						</div>
						<!-- end = untuk tampilkan foto -->
						
					</div>
					
				</div>
			</div>
		</div>
	</section>
	<!-- end = galery prewedding -->

	


	<!-- start = gallery prewedding -->
	<section class="section galery-area center-text " id="kirim-pesan">
		<div class="container">
			<div class="row">

				<div class="col-sm-12">

					<!-- <div class="heading">
						<h2 class="title">Kode Digital</h2>
						<span class="heading-bottom"><i class="icon icon-star"></i></span>
					</div> -->

					<div class="image-gallery"  >

						<!-- start = untuk menampilkan foto -->
						<!-- nanti setting ukuran 600x400 -->
						<!-- <div class="row">
							<?php
								$galeri = mysqli_query($conn,"SELECT * FROM galery LIMIT 6");
								while ($infoGaleri = mysqli_fetch_array($galeri)) {


							?>
							<div class="col-md-6 col-sm-12">
								<a href="Admin/fileUpload/<?php echo $infoGaleri['namaFile'];?>" data-fluidbox><img class="margin-bottom" src="Admin/fileUpload/<?php echo $infoGaleri['namaFile'];?>" style="width:350px; height:200px;" ></a>
							</div>
							<?php
								}
							?>


						</div> -->
						<!-- end = untuk tampilkan foto -->

						<div class="row">
							<div class="col-md-6 col-sm-12" data-aos="zoom-in">
								<div class="heading">
									<h2 class="title">Kode Digital</h2>
									<span class="heading-bottom"><i class="icon icon-star"></i></span>
									<div>

										<img  src="assets/images/qrcode1.jpg" style="width: 60%; height:70%; margin-bottom:10px;" alt="">
									</div>
									<button class="js-copy-bob-btn btn-danger btn-sm margin-bottom">Salin Nomor Rekening</button>
								</div>






							</div>
							<div class="row" ></div>
							<div class="col-md-6 col-sm-12" data-aos="zoom-in">
								<div class="contact-form margin-bottom" >
									<div class="heading" style="width: 60%; margin:auto;">
										<h2 class="title" >Kirim Pesan</h2>
										<span class="heading-bottom"><i class="icon icon-star"></i></span>
										<p style="text-align: center;">Kirim pesan untuk mempelai</p>
									</div>
									<form method="post">
										<div class="row">
												<div class="col-sm-12 margin-bottom">
													<label>Nama</label>
													<input class="name-input" type="text" name="nama" 
													<?php
													if (isset($_POST['nama']))
													{
														$nama = $_POST['nama'];
														echo "values='$nama'";
													}
													?>
													required>
													<br>

													<label>Pesan</label>
													<input type="text" class="name-input" name="isi"  
													<?php
													if (isset($_POST['isi']))
													{
														$isi = $_POST['isi'];
														echo "values='$isi'";
													}
													?>

													required>
													<br>

													<input type="checkbox" class="mt-1" name="kehadiran" id="kehadiran1" value="ya" checked>
													<label for="kehadiran1">Saya akan hadir</label>
												</div>
												<div class="col-sm-12 center-text">
													<button class="btn" name="kirim"><b>Kirim</b></button>
												</div>
											


										</div><!-- row -->
									</form>
									<?php
											if (isset($_POST['kirim'])) {
												$namaPengirim = htmlspecialchars( $_POST['nama']);
												$isi =htmlspecialchars ($_POST['isi']);
												$kehadiran = 'tidak';
												if ($_POST['kehadiran'])
												{
												    
												$kehadiran = htmlspecialchars ($_POST['kehadiran']);
												}
												$action = mysqli_query($conn, "INSERT INTO pesan VALUES (NULL,'$namaPengirim','$isi', '$kehadiran')");
												if ($action)
												{

													echo " <script>
													alert('Pesan berhasil terkirim');
													document.location.href='index.php?#tampil-pesan';
													</script>
													";
												}else
												{
													$notifikasi = mysqli_error($conn);
													echo " <script>
													alert('Pesan tidak berhasil terkirim : $notifikasi');
													document.location.href='index.php?#tampil-pesan';
													</script>
													";
												}
												// if (!$action)
												// {
												//     echo mysqli_error($conn);
												// }
												
											}

											?>
								</div><!-- contact-form -->
							</div><!-- col-sm-6 -->
						</div>

						<!-- <a class="btn-2 margin-bottom gallery-btn" href="gallery.php">VIEW ALL GALLERY</a> -->

					</div>

				</div>
			</div>
		</div>
	</section>
	<!-- end = galery prewedding -->

	
	
	<section class="testimonial1-body counter-area" id="tampil-pesan">
	<div class="container" style="padding-top: 50px;padding-bottom:50px;" data-aos="zoom-in">
    <div id="demo1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
		<?php
		$pesanUntukmu = mysqli_query($conn,"SELECT * FROM pesan ORDER BY idPesan DESC");
		$no =1;
		while ($infoPesan = mysqli_fetch_array($pesanUntukmu)) {
		?>

		<?php
		if ($no == 1)
		{
			?>

		<div class="carousel-item active">
			<?php
		}else
		{
			?>
			<div class="carousel-item">

			<?php
		}
		?>
                <div class="carousel-caption">
                    <p style="margin: 0px 20px;"><?= $infoPesan['isi'] ?></p> 
                    <div id="image-caption"><?= $infoPesan['namaPengirim'] ?></div>
					<?php
					if ($infoPesan['status_kehadiran'] == 'ya')
					{
						?>
						<p class="status-kehadiran">
								(Saya akan hadir)
							</p>
					<?php
					}else
					{
						?>
						
							<p class="status-kehadiran">
								(Insyā Allah, Saya akan hadir)
							</p>
						
						<?php
					}
					?>
                </div>
            </div>
		<?php
		$no = 0;
		}
		?>
        </div> <a class="carousel-control-prev" href="#demo1" data-slide="prev"> <i class='fas fa-arrow-left'></i> </a> <a class="carousel-control-next" href="#demo1" data-slide="next"> <i class='fas fa-arrow-right'></i> </a>
    </div>
</div>
	</section>


	<!-- satart = lokasi prewed -->
	<section class="contact-area" id="lokasi">

		<div class="contact-wrapper section float-left" data-aos="zoom-in">
			<div class="container">
				<div class="row">
					<div class="col-sm-2"></div>
					<div class="col-sm-10">
						<div class="heading">
							<h3 class="title">Lokasi Acara</h3>
							<i class="icon icon-star"></i>
						</div>

						<div class="margin-bottom">
							<p>Alamat :</p>
							<?php
							$lokasi = mysqli_query($conn,"SELECT * FROM resepsi");
							while ($infoLokasi = mysqli_fetch_array($lokasi)) {
								 echo $infoLokasi['alamatResepsi'];
								 echo "<h4>".$infoLokasi['namaGedung']."</h4>";

							?>
							<br>
							

							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.062668950298!2d106.6176400141379!3d-6.255474562986139!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fc7a8facbe19%3A0x16699d670e8909b1!2sGraha%20Anabatic!5e0!3m2!1sid!2sid!4v1631531257347!5m2!1sid!2sid" width="100%" height="220" style="border:0;" allowfullscreen loading="lazy"></iframe>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- start = foto gedung -->
		<div class="contact-wrapper section float-right" data-aos="zoom-in">
			<div class="container">
				<div class="row d-flex justify-content-center">
					<!-- <div class="col-sm-1"></div> -->
					<div class="col-sm-11 ">
						
							<!-- <img src="Admin/fileUpload/<?php echo $infoLokasi['gambarGedung']; } ?>" style="width :535px; height :550px;"> -->
							<img class="rounded gambar-gedung" src="assets/images/graha-anabatic.jpg" >
						
					</div>
					<div class="col-sm-2"></div>
				</div>
			</div>
		</div>
		<!-- end foto gedung -->


	</section>
	<!-- end = lokasi prewed -->


	<!-- start = footer  -->
	<footer>
		<div class="container center-text" id="sosmed">

			<div class="logo-wrapper">
				<a class="logo" href="#"><img src="assets/images/logo-black.png" alt="Logo Image"></a>
				<i class="icon icon-star"></i>
			</div>
			<ul class="social-icons">
				<?php
					$sosmed = mysqli_query($conn,"SELECT * FROM sosmed");
					while ($infoSosmed = mysqli_fetch_array($sosmed)) {


				?>
				<li><a href="#"><i class="icon icon-heart"></i></a></li>
				<li><a href="<?php echo $infoSosmed['twitter'];?>" target="_blank"><i class="icon icon-twitter"></i></a></li>
				<li><a href="<?php echo $infoSosmed['ig'];?>" target="_blank"><i class="icon icon-instagram"></i></a></li>
				<li><a href="<?php echo $infoSosmed['fb'];?>" target="_blank"><i class="icon icon-facebook"></i></a></li>
				<?php
					}
				?>
			</ul>
			<ul class="footer-links">
				<li><a href="index.php">BERANDA</a></li>
				<li><a href="#mempelai">MEMPELAI</a></li>
				<li><a href="#prokes">PROKES</a></li>
				<li><a href="#kapan">KAPAN ?</a></li>
				<li><a href="#galeri">GALERI</a></li>
				<li><a href="#kirim-pesan">KIRIM SESUATU</a></li>
				<li><a href="#lokasi">LOKASI</a></li>
				<!-- <li><a href="listTamu.php">TAMU UNDANGAN</a></li> -->
			</ul>
			<p class="copyright"> Copyright &copy;<script>document.write(new Date().getFullYear());</script>
			 -  Dibuat dengan <i class="icon-heart" aria-hidden="true"></i> oleh Millenio</p>
		</div>
	</footer>
	<!-- end = footer -->
	
	<audio src="assets/music/backsound4.mp3" autoplay="autoplay" id="playAudio" loop="true"></audio>
    
    

	


	<!-- <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script> -->
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
	<script src="assets/js/tether.min.js"></script>
	<script src="assets/js/bootstrap.js"></script>
	<script src="assets/js/jquery.countdown.min.js"></script>
	<script src="assets/js/jquery.fluidbox.min.js"></script>
	<script src="assets/js/scripts.js"></script>
	<script src='assets/js/sakura.js'></script>


	<script type="text/javascript">
    function copyTextToClipboard(text) {
		var textArea = document.createElement("textarea");

		//
		// *** This styling is an extra step which is likely not required. ***
		//
		// Why is it here? To ensure:
		// 1. the element is able to have focus and selection.
		// 2. if the element was to flash render it has minimal visual impact.
		// 3. less flakyness with selection and copying which **might** occur if
		//    the textarea element is not visible.
		//
		// The likelihood is the element won't even render, not even a
		// flash, so some of these are just precautions. However in
		// Internet Explorer the element is visible whilst the popup
		// box asking the user for permission for the web page to
		// copy to the clipboard.
		//

		// Place in the top-left corner of screen regardless of scroll position.
		textArea.style.position = 'fixed';
		textArea.style.top = 0;
		textArea.style.left = 0;

		// Ensure it has a small width and height. Setting to 1px / 1em
		// doesn't work as this gives a negative w/h on some browsers.
		textArea.style.width = '2em';
		textArea.style.height = '2em';

		// We don't need padding, reducing the size if it does flash render.
		textArea.style.padding = 0;

		// Clean up any borders.
		textArea.style.border = 'none';
		textArea.style.outline = 'none';
		textArea.style.boxShadow = 'none';

		// Avoid flash of the white box if rendered for any reason.
		textArea.style.background = 'transparent';


		textArea.value = text;

		document.body.appendChild(textArea);
		textArea.focus();
		textArea.select();

		try {
			var successful = document.execCommand('copy');
			var msg = successful ? 'successful' : 'unsuccessful';
			console.log('Copying text command was ' + msg);
		} catch (err) {
			console.log('Oops, unable to copy');
		}

		document.body.removeChild(textArea);
		}


		var copyBobBtn = document.querySelector('.js-copy-bob-btn'),
		copyJaneBtn = document.querySelector('.js-copy-jane-btn');

		copyBobBtn.addEventListener('click', function(event) {
		copyTextToClipboard('8831228423');
		alert('Nomor rekening berhasil dicopy!');
		});


		copyJaneBtn.addEventListener('click', function(event) {
		copyTextToClipboard('Jane');
		});
	</script>
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

	<!-- animasi AOS -->
	<script>
	AOS.init({
	easing:'ease-out-back',
	duration:1500 //Atur Durasi Sesuai Keinginan
	});
	</script>
	<script>
	var myAudio = document.getElementById('playAudio');
	// playAudio.currentTime = 177;
	playAudio.loop = true;
	playAudio.play();
	vid.preload = "auto";
    
	

	</script>

	<script>
	const els = document.querySelectorAll("[type='radio']");
	for (const el of els)
	el.addEventListener("input", e => reorder(e.target, els));
	reorder(els[0], els);

	function reorder(targetEl, els) {
	const nItems = els.length;
	let processedUncheck = 0;
	for (const el of els) {
		const containerEl = el.nextElementSibling;
		if (el === targetEl) {//checked radio
		containerEl.style.setProperty("--w", "100%");
		containerEl.style.setProperty("--l", "0");
		}
		else {//unchecked radios
		containerEl.style.setProperty("--w", `${100/(nItems-1)}%`);
		containerEl.style.setProperty("--l", `${processedUncheck * 100/(nItems-1)}%`);
		processedUncheck += 1;
		}
	}
	}
	</script>
	
</body>
</html>