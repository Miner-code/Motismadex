<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	

	<script src="../script/jquery-3.5.1.min.js"></script>
	<script src="../script/scriptTextRegister.js"></script>
	<script src="../script/rotomgif.js"></script>

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
					$passwordHash = password_hash($_POST['mdpCompte'], PASSWORD_DEFAULT);

					$sql = "INSERT INTO account (name_account, firstname_account, mail, wordpass)
							VALUES ('$nomCompte', '$prenomCompte', '$mail', '$passwordHash')";
					$result = mysqli_query($conn, $sql);
					
					if (!$result) {
						echo "Erreur MySQLi : " . mysqli_error($conn);
					} else {
						// Récupère l'ID du nouvel utilisateur
						$newUserId = $conn->insert_id;
						$_SESSION['user_id'] = $newUserId;
						$_SESSION['role'] = 0;
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