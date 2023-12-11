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
--			>- Une page d'inscription
--			- Une page d'inscription avancée afin de créer un personnage
--			- Une page de deconnexion
--			- Une page d'entracte de dialogue avant de passer de connexion vers le site
--			- Une page d'entracte de dialogue avant de passer de l'inscription vers le site
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
	<script src="../script/scriptTextRegister.js"></script>
	<script src="../script/rotomgif.js"></script>
	<!---->
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
				// a-t-il déjà son joueur ?
				if (isset($_SESSION['dresseur_id'])) {
						header("Location: redirectionAfterConnexion.php");
				} else {
						header("Location: creationDresseur.php");
				}
			} else {
				// Informations du nouvel utilisateur par la méthode $_POST
				if(isset($_POST['register'])){	
					$nomCompte = $_POST['nameCompte'];
					$prenomCompte = $_POST['firstNameCompte'];
					$mail = $_POST['mailCompte'];
					$passwordHash = password_hash($_POST['mdpCompte'], PASSWORD_DEFAULT);  // Assure-toi de hasher le mot de passe

					$sql = "INSERT INTO account (name_account, firstname_account, mail, wordpass)
							VALUES ('$nomCompte', '$prenomCompte', '$mail', '$passwordHash')";
					$result = mysqli_query($conn, $sql);
					
					if (!$result) {
						echo "Erreur MySQLi : " . mysqli_error($conn);
					} else {
						// Récupère l'ID du nouvel utilisateur
						$newUserId = $conn->insert_id;
						$_SESSION['user_id'] = $newUserId;
						echo "Nouvel utilisateur créé avec succès.";
						header("Location: creationDresseur.php");
					}
				
				} else {
						echo "Erreur lors de la création de l'utilisateur : ". mysqli_error($conn);
					}
				}	
			mysqli_close($conn);
?>
<body>
	<?php include '../inc/navPortail.php'; ?>
	
    <section id="inscriptionSection">
			
			<h5>Présente-toi au Prof. Chen :</h5>
			<form action="register.php" method="post">
					<input class="inputRegister" type="text" placeholder="Nom" id="nameCompte" name="nameCompte" required/>
					<input class="inputRegister" type="text" placeholder="Prénom" id="firstNameCompte" name="firstNameCompte" required/>
					<input class="inputRegister" type="text" placeholder="Adresse e-Mail" id="mailCompte" name="mailCompte" required/>
					<input class="inputRegister" type="password" placeholder="Mot de Passe" id="mdpCompte" name="mdpCompte" required/>
				<input class="buttonSubmit" type="submit" name="register" value="Je viens d'emménager.">
			</form>
			<p>
				<?php 	
					if(isset($_POST['register'])){
						echo $result;
					}
				?>
			</p>
			<a href="connexion.php"><h5>Pardon, </br> Tu me connais ! </h5></a>
    </section>
	
	<aside>
		<img src="../img/profOak.png"/>
	</aside>
	<footer>
		<h2>
		</h2>
	</footer>

</body>
</html>