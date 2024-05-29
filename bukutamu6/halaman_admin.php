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
<?php 
	session_start();

	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:index.php?pesan=gagal");
	}

	?>
<div class="content">
	<header>
		<h1 class="judul">DINAS KOMUNIKASI DAN INFORMATIKA</h1>
		<h3 class="deskripsi">Pusat Layanan Informasi dan Pusat Pelaporan Pengaduan Layanan Publik</h3>
	</header>

	<div class="menu">
		<ul>
			<li><a href="halaman_admin.php?page=home">HOME</a></li>
			<li><a href="halaman_admin.php?page=lihat_data">EDIT DATA</a></li>
			<li><a href="logout.php">LOGOUT</a></li>
		</ul>
	</div>

	<div class="badan">


	<?php 
	if(isset($_GET['page'])){
		$page = $_GET['page'];

		switch ($page) {
			case 'home':
				include "halaman/home.php";
				break;
			case 'lihat_data':
				include "halaman/edit_data.php";
				break;
			default:
				echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
				break;
		}
	}else{
		include "halaman/home.php";
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
	</footer>
</ul>
</center>	
</footer>
</html>