<!doctype html public "-//W3C//DTD HTML 4.0 //EN"> 
<html>
<head>
       <title>Simpan Data</title>
	   <style type="text/css">
	body { font-family:tahoma; font-size:12px; }
	#container { width:450px; padding:20px 40px; margin:50px auto; border:0px solid #555; box-shadow:0px 0px 2px #555; }
	input[type="text"] { width:200px; }
	input[type="text"], textarea { padding:5px; margin:2px 0px; border: 1px solid #777; }
	input[type="submit"], input[type="reset"] { padding: 5px 20px; margin:2px 0px; font-weight:bold; cursor:pointer; }
	#error { border:1px solid red; background:#ffc0c0; padding:5px; }
</style>
</head>
<body>
<?php
$nama=$_POST['nama'];
$instansi=$_POST['instansi'];
$alamat=$_POST['alamat'];
$nomortelepon=$_POST['nomortelepon'];
$msg=$_POST['msg'];

$koneksi=mysqli_connect("localhost","root","");
mysqli_select_db("buku_tamu","tamu");
$proses="INSERT INTO tamu(nama,instansi,alamat,nomortelepon,msg)
VALUES('$nama','$instansi','$alamat','$nomortelepon','$msg')";
$hasil=mysqli_query($proses,$koneksi);
echo "<font color=red size=5>Buku Tamu BERHASIL Diisi</font>";

?>
<br>

<a href="tampil.php"><h3>Lihat Buku Tamu</h3></a>


</body>
</html>
