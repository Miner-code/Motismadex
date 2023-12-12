<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

	<script src="../script/jquery-3.5.1.min.js"></script>
	<script src="../script/scriptExplication.js"></script>

	<link rel="stylesheet" href="../stylesheet/connexionRegister.css">
	<link rel="stylesheet" href="../stylesheet/navbar.css">
	<link rel="icon" href="../img/pokeball.png" type="image/x-icon">
	<title>MOTISMADEX - L'ANNEXE DES DRESSEURS</title>
</head>
<?php
	if (isset($_SESSION['user_id'])) {
?>
	<body>
		<?php include '../inc/navPortail.php'; ?>

		<aside>
			<img src="../img/profOak.png"/>
		</aside>
		<footer>
			<h2>
					
			</h2>
		</footer>
	</body>
<?php
	} else {	
		header("Location: connexion.php");
	}
?>
</html>