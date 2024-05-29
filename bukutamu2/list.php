<head>
<nav class="menu">
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
		</nav>
</head>		
<center>
<div style="width: 800px;">
	<table style="width: 800px; border : solid blue 5px;">
	<thead>
		<tr>
			<th align="left">NO</th>
			<th align="left">Nama</th>
			<th align="left">Email</th>
			<th align="left">Website</th>
			<th >AKSI</th>		
		</tr>
	</thead>
	<tbody>
		<?php 
			$no = 1;
			$SQL ="SELECT id,nama,email,website FROM tb_bukutamu";
			$data=mysqli_query($MySQli,$SQL);
 
			while ($d = mysqli_fetch_array($data)) {
				?>
				<tr>
			<td><?= $no++ ?></td>
			<td><a href="?page=detail&id=<?= $d['id'] ?>"><?= $d['nama'] ?></a></td>
			<td><?= $d['email'] ?></td>
			<td><?= $d['website'] ?></td>
			<td align="center"> <a href="?page=edit&id=<?= $d['id'] ?>">Edit</a> - <a class="hapus" href="?page=hapus&id=<?= $d['id'] ?>">Hapus</a></td>
			</tr>
			<?php
			}
		 ?>
		
	</tbody>
</table>
</div>
</center>

