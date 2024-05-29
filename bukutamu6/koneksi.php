<?php
$host = "localhost"; // Nama hostnya
$username = "root"; // Username
$password = ""; // Password (Isi jika menggunakan password)
$database = "bukutamu5"; // Nama databasenya

$connect = mysqli_connect($host, $username, $password, $database); // Koneksi ke MySQL
?>

<?php 
$koneksi = mysqli_connect("localhost","root","","bukutamu5");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
?>