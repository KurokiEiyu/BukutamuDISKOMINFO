<!doctype html public "-//W3C//DTD HTML 4.0 //EN"> 
<html>
<head>
       <title>Guest Book</title>
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
<h2>Signup Guestbook </h2>
<hr size=1>
<form name="tamu" method="post" action="simpan.php">
Name          : <input type="text" name="nama"><br>
Agency        : <input type="text" name="instansi"><br>
Address       : <input type="text" name="alamat"><br>
Phone Number  : <input type="text" name="nomortelepon"><br>
Message       : <br><textarea name="msg"></textarea><br>
<input type="submit" name="submit" value="Send"><input type="reset" name="reset" value="Reset">
</form>
</body>
</html>
