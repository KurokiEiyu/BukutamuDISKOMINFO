<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<head>
<div class="menu">
			<ul>
				<li>
					<a href="index.php">Home</a>
				</li>
				<li>
					<a href="list.php">Lihat Data</a>
				</li>
				<li>
					<a href="bukutamu.php">Tambah Data</a>
				</li>
			</ul>
			
		</div>
</head>
<body>
<?php 
	require_once 'koneksi.php';
?>
<center><h1>Isi Data</h1></center>
<hr>
<?php 
	$page = (isset($_GET['page'])) ? $_GET['page'] : 'add' ;
 
	switch ($page) {
		case 'index':
			require_once 'index.php';
			break;	
		case 'bukutamu':
			require_once 'bukutamu.php';
			break;	
		case 'add':
			require_once 'add.php';
			break;
		case 'list':
			require_once 'list.php';
			break;
		case 'edit':
			require_once 'edit.php';
			break;
		case 'hapus':
			require_once 'delete.php';
			break;
		case 'detail':
			require_once 'detail.php';
			break;
		default:
			require_once 'add.php';
			break;	
	}
 ?>
</body>
</html>