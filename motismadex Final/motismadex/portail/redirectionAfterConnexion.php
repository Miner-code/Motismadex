<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<script src="../script/jquery-3.5.1.min.js"></script>
	<script src="../script/scriptJeTeConnais.js"></script>
	<link rel="stylesheet" href="../stylesheet/connexionRegister.css">
	<link rel="stylesheet" href="../stylesheet/navbar.css">
	<link rel="icon" href="../img/pokeball.png" type="image/x-icon">
	<title>MOTISMADEX - L'ANNEXE DES DRESSEURS</title>
</head>
<?php	
	
	session_start();
	// est-ce que l'utilisateur est déjà connecté ?
		require '../inc/con_bdd.php';
		if (isset($_SESSION['user_id'])) {
					$numAccount = $_SESSION['user_id'];	
					$sqlNomCompte = "SELECT name_account FROM account WHERE id = '$numAccount'";
					$resultNomCompte = mysqli_query($conn, $sqlNomCompte);
					$nomDresseur = mysqli_fetch_assoc($resultNomCompte);
					if (!$resultNomCompte) {
    					die("Erreur de requête : " . mysqli_error($conn));
					}
		} else {
					header("Location: connexion.php");
			   }

?>
	<body>
		<?php include '../inc/navPortail.php'; ?>
		<div id="idUser">
				<?php 		
					echo $nomDresseur['name_account']; 
				?> 
		</div>

		<aside>
			<img src="../img/profOak.png"/>
		</aside>
		<footer>
			<h2>
					
			</h2>
		</footer>
	</body>
<?php
	if (isset($_SESSION['user_id'])) {
		
		$user_id = $_SESSION['user_id'];
	} else {	
		header("Location: connexion.php");
	}
?>
</html>