<?php 
	
	$id=$_GET['id'];
	$SQL ="SELECT * FROM tb_bukutamu WHERE id = $id";
			$data=mysqli_query($MySQli,$SQL);
			$d = mysqli_fetch_array($data);
 
 ?>
<form method="POST" action="">
<div>
	<table>
		<thead>
			<tr>
				<th>EDIT DATA</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Nama</td>
			</tr>
			<tr>
				<td><input type="text" value="<?= $d['nama'] ?>" name="nama"></td>
			</tr>
			<tr>
				<td>Email</td>
			</tr>
			<tr>
				<td><input type="text" value="<?= $d['email'] ?>" name="email"></td>
			</tr>
			<tr>
				<td>Website</td>
			</tr>
			<tr>
				<td><input type="text" value="<?= $d['website'] ?>" name="website"></td>
			</tr>
			<tr>
				<td>Pesan</td>
			</tr>
			<tr>
				<td>
					<textarea class="pesan"  name="pesan"><?= $d['pesan'] ?></textarea>
				</td>
			</tr>			
		</tbody>
		<tfoot>
			<tr>
				<td>
					<input  type="submit" value="SIMPAN" name="">
				</td>
			</tr>			
		</tfoot>
	</table>
</div>
</form>
<center>
<?php 
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$nama = $_POST['nama'];
		$email = $_POST['email'];
		$website = $_POST['website'];
		$pesan = $_POST['pesan'];
		$SQL = "UPDATE tb_bukutamu SET nama = '$nama',email='$email',website='$website',pesan='$pesan' WHERE id =$id";
		if (mysqli_query($MySQli,$SQL)) {
			header("location:?page=list");
		} else {
			echo "Gagal edit data buku tamu !!";
		}
		
	}
 ?>
 </center>