<div style="width: 800px;">
	<table style="width: 800px; border : solid red 1px;">
	<thead>
		<tr>
			<th align="left">NO</th>
			<th align="left">Nama</th>
			<th align="left">Email</th>
			<th align="left">Website</th>
			<th align="left">Pesan</th>
			<th >AKSI</th>		
		</tr>
	</thead>
	<tbody>
		<?php 
			$no = 1;
			$SQL ="SELECT id,nama,email,website,pesan FROM tb_bukutamu";
			$data=mysqli_query($MySQli,$SQL);
           
			while ($d = mysqli_fetch_array($data)) {
				?>
				<tr>
			<td><?= $no++ ?></td>
			<td><a href="?page=detail&id=<?= $d['id'] ?>"><?= $d['nama'] ?></a></td>
			<td><?= $d['email'] ?></td>
			<td><?= $d['website'] ?></td>
			<td><?= $d['pesan'] ?></td>
			<td align="center"> <a href="?page=edit&id=<?= $d['id'] ?>">Edit</a> - <a class="hapus" href="?page=hapus&id=<?= $d['id'] ?>">Hapus</a></td>
			</tr>
			<?php
			}
		 ?>
		
	</tbody>
</table>
</div>