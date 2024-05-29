<?php 
$sumber = $_FILES['userfile']['tmp_name'];
$target = 'upload/'.$_FILES['userfile']['name'];

if(move_uploaded_file($sumber, $target))
{
 echo "File Uploaded Successfully";
 echo "Uploaded File : 
 ";
 echo "<img src='$target'>";
}
else 
	echo"Can't Upload Selected File ";
?>