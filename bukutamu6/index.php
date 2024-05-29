<!DOCTYPE html>
<html>
<head>
	<title>Buku Tamu Dinas Kominfo</title>
	<!-- menghubungkan dengan file css -->
	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- menghubungkan dengan file jquery -->
	<script type="text/javascript" src="jquery.js"></script>
</head>
<body>
<div class="content">
	<header>
		<h1 class="judul">DINAS KOMUNIKASI DAN INFORMATIKA</h1>
		<h3 class="deskripsi">Pusat Layanan Informasi dan Pusat Pelaporan Pengaduan Layanan Publik</h3>
	</header>

	<div class="menu">
		<ul>
			<li><a href="index.php?page=home1">HOME</a></li>
			<li><a href="index.php?page=lihat_data">LIHAT DATA</a></li>
			<li><a href="login.php">LOGIN FOR ADMIN</a></li>
		</ul>
	</div>

	<div class="badan">


	<?php 
	if(isset($_GET['page'])){
		$page = $_GET['page'];

		switch ($page) {
			case 'home1':
				include "halaman/home1.php";
				break;
			case 'lihat_data':
				include "halaman/lihat_data.php";
				break;
			default:
				echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
				break;
		}
	}else{
		include "halaman/home1.php";
	}

	 ?>

	</div>
</div>
</body>
<footer>
<center>
<div class="footer-shadow container">
		<div class="row">
			<div class="col-md-12">
				<img src="http://diskominfo.sukabumikota.go.id/wp-content/themes/codilight-lite/assets/images/footer-shadow.png" alt="">
			</div>
		</div>
	</div>
	<footer id="colophon" class="site-footer">
		<div class="container">

			
			<div class="site-info">
				<p>
					Copyright © 2020 Buku Tamu Dinas Kominfo Kota Sukabumi.				</p>
		
			</div><!-- .site-info -->
			
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15391.90703393656!2d106.9328982727105!3d-6.922719006241396!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6849822563dc3d%3A0x7fb3afd976910f79!2sDinas%20Komunikasi%20dan%20Informatika!5e0!3m2!1sid!2sid!4v1577679699304!5m2!1sid!2sid" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
<ul class="sxc-follow-buttons"><a href="">
		</div>
	</footer>
</ul>
</center>	
</footer>
</html>