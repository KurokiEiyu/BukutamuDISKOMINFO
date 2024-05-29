<?php
include('koneksi.php');
$query = mysqli_query($koneksi,"SELECT * FROM tb_gambar");
?>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <a href="form_upload.php">Upload Gambar</a>
        <table border="1">
            <tr>
                <th>Gambar</th>
                <th>Keterangan</th>
            </tr>
            <?php 
            $no = 1;
            while($row = mysqli_fetch_array($query))
            {
                ?>
                <tr>
                    <td><img src="image_view.php?id_gambar=<?php echo $row['id_gambar']; ?>" width="200"/></td>
                    <td><?php echo $row['keterangan']; ?></td>
                    <td><a href="delete_gambar.php?id_gambar=<?php echo $row['id_gambar']; ?>">Delete</a></td>
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>