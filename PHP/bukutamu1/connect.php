<?php
$hostmysql = "localhost";
$username = "root";
$password = "";
$database = "bukutamu1";
$conn = mysqli_connect ($hostmysql, $username, $password, $database);
if ($conn){
 echo "<b> Koneksi Berhasil </b>";
}
else{
 die ("<b> Koneksi Gagal </b>");
}
?>