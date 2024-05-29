<form action="" method="POST">
<center>
<div>
	<table>
		<thead>
			<tr>
				<th>TAMBAH DATA BARU</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Nama</td>
			</tr>
			<tr>
				<td><input required type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Email</td>
			</tr>
			<tr>
				<td><input required type="text" name="email"></td>
			</tr>
			<tr>
				<td>Website</td>
			</tr>
			<tr>
				<td><input required type="text" name="website"></td>
			</tr>
			<tr>
				<td>Pesan</td>
			</tr>
			<tr>
				<td>
					<textarea required class="pesan"  name="pesan"> </textarea>
				</td>
			</tr>			
		</tbody>
		<tfoot>
			<tr>
				<td>
					<input  type="submit" value="SIMPAN" name="">
					<input  type="reset" value="RESET" name="">
				</td>
			</tr>			
		</tfoot>
	</table>
</div>
</form>
</center>
<?php 
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$nama = $_POST['nama'];
		$email = $_POST['email'];
		$website = $_POST['website'];
		$pesan = $_POST['pesan'];
		$SQL = "INSERT INTO tb_bukutamu(nama,email,website,pesan) VALUES('$nama','$email','$website','$pesan')";
		if (mysqli_query($MySQli,$SQL)) {
			header("location:?page=list");
		} else {
			echo "Gagal menambahkan data buku tamu !!";
		}
		
	}
 ?>