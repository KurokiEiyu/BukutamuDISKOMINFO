<html>
<head>
	<title>Aplikasi Buku Tamu</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>Data Tamu</h1>
	<a href="form_simpan.php">Tambah Data</a><br><br>
	<table border="1" width="75%">
	<tr>
		<th>Nama</th>
		<th>Asal Instansi</th>
		<th>Jenis Kelamin</th>
		<th>Telepon</th>
		<th>Alamat</th>
		<th>Foto</th>
		<th colspan="2">Aksi</th>
	</tr>
	<?php
	// Load file koneksi.php
	include "koneksi.php";
	
	$query = "SELECT * FROM tamu"; // Query untuk menampilkan semua data siswa
	$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
	
	while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
		echo "<tr>";
		echo "<td>".$data['nama']."</td>";
		echo "<td>".$data['asal_instansi']."</td>";
		echo "<td>".$data['jenis_kelamin']."</td>";
		echo "<td>".$data['telp']."</td>";
		echo "<td>".$data['alamat']."</td>";
		echo "<td><img src='images/".$data['foto']."' width='150' height='125'></td>";
		echo "<td><a href='form_ubah.php?id=".$data['id']."'>Ubah</a></td>";
		echo "<td><a href='proses_hapus.php?id=".$data['id']."'>Hapus</a></td>";
		echo "</tr>";
	}
	?>
	</table>
</body>
</html>
