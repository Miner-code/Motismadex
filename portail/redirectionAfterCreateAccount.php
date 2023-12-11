<!--
--
--	Naration et Code écrit par EL-BOUCHIKHI YOUNES-AMINE
--	Site Web à but éducatif: Devoir de l'institut G-4 à rendre en Décembre 2023.
--
--	Le site Motismadex présente 4 branches :
--
--	1 index
--
--	4 vues:
--			- Le pokedex national (9 tables pokedex + 1 table pokemons)
--			- Passe-dresseurs "passedress.php" (comment on me voit)
--			- Liste des Combats "combats.php" (un pokemon vs un autre)
--			- Le combat "spec.php" (forum : spec un combat en particulier, avec un système de vote et un espace commentaire)
--			
--	1 portail :
--			- Une page de connexion
--			- Une page d'inscription
--			- Une page d'inscription avancée afin de créer un personnage
--			- Une page de deconnexion
--			- Une page d'entracte de dialogue avant de passer de connexion vers le site
--			>- Une page d'entracte de dialogue avant de passer de l'inscription vers le site
--
--	1 back office:
--			- administrateur avec gestion des comptes bannir déban, suppression de messages
--
--	pokemon glitch image link: https://64.media.tumblr.com/6270c3cf8eabecc004d75d58a9f6a9a3/e60bda742dcbecf3-8f/s1280x1920/cc8191e21c810e295db215a351cd0b85706749a4.png
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<!--script-->
	<script src="../script/jquery-3.5.1.min.js"></script>
	<script src="../script/scriptExplication.js"></script>
	<!---->
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