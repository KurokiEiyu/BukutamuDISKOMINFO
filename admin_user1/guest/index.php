<?php include('akses.php'); ?>
<html>
<head>
	<title>Guest Area | tutorialweb.net</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<div style="text-align:center">
		<h2>Guest Area</h2>
		<p><a href="index.php">Home</a> / <a href="../logout.php">Logout</a></p>

		<p>Selamat datang di Guest Area, Anda Login dengan username <?php echo $_SESSION['guest']; ?></p>
	</div>

</body>
</html>