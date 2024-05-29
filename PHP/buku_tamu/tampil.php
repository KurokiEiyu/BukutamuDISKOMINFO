<!doctype html public "-//W3C//DTD HTML 4.0 //EN"> 
<html>
<head>
       <title>BUKU TAMU</title>
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
<pre>
<h1>BUKU TAMU</h1>
<a href="index.php"> <-- Kembali ke Form Buku Tamu</a>
<hr size=1>
<?php

$koneksi=mysqli_connect("localhost","root","127.0.0.1:3307");
mysqli_select_db("buku_tamu");
$sql=mysqli_query("SELECT * FROM tamu", $koneksi);
while($data=mysqli_fetch_array($sql))
{
 $id=$data['id'];
 $nama=$data['nama'];
 $instansi=$data['instansi'];
 $alamat=$data['alamat'];
 $nomortelepon=$data['nomortelepon'];
 $msg=$data['msg'];
 
 echo "id     : $id<br>";
 echo "Nama   : $nama<br>";
 echo "Agency : $instansi<br>";
 echo "Alamat : $alamat, $instansi<br>";
 echo "Pesan  : $msg<br><hr size=1>";
      }
 ?>


</body>
</html>
