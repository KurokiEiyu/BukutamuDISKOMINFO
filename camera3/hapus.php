<?php 
 include "koneksi.php";
 // Hapus Gambar
 $query = mysql_query("select * from hasil where id = '".$_GET['id']."'"); 
  $hapus = mysql_fetch_array($query);
  $file = $hapus['gambar'].'.png';
  unlink($file);
  
 // Hapus Dari Tabel
 $sql = "DELETE FROM hasil WHERE id = '".$_GET['id']."'";
 $hapus = mysql_query($sql);
 if ($sql){
 echo "<script>alert('Data Berhasil di Hapus'); window.location = 'http://localhost/webcam';</script>";
 } else {
 echo "<script>alert('Gagal di Hapus'); window.location = 'http://localhost/webcam';</script>";
 }
?>