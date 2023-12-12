<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<script src="../script/jquery-3.5.1.min.js"></script>
	<script src="../script/scriptTextConnexion.js"></script>
	<script src="../script/rotomgif.js"></script>
	<link rel="stylesheet" href="../stylesheet/connexionRegister.css">
	<link rel="stylesheet" href="../stylesheet/navbar.css">
	<link rel="icon" href="../img/pokeball.png" type="image/x-icon">
	<title>MOTISMADEX - L'ANNEXE DES DRESSEURS</title>
</head>
<?php 
	session_start();
	// est-ce que l'utilisateur est déjà connecté ?
	if (isset($_SESSION['user_id'])) {
		// a-t-il déjà son joueur ?
		if (isset($_SESSION['dresseur_id'])) {
			header("Location: redirectionAfterConnexion.php");
		} else {
			header("Location: creationDresseur.php");
		}
	} else {
	
			include '../inc/con_bdd.php';
			if(isset($_POST['connexion'])){
				$mail = $_POST['mail'];
				$password = $_POST['mdp'];
				echo $mail;
				
				$sql = "SELECT * FROM account WHERE mail = '$mail'";
				$result = mysqli_query($conn, $sql);
				if ($result) {
					// Utilisateur trouvé, vérifie le mot de passe
					$row = mysqli_fetch_assoc($result);
					if (password_verify($password, $row['wordpass'])) {
						// Stocke des informations de l'utilisateur dans la session
						if($row['is_banned'] == 1)
						{
							echo "Utilisateur bannis";
						}
						else{
							$_SESSION['user_id'] = $row['id'];
							$_SESSION['role'] = $row['role'];
							$identifiant = $row['id'];
							
							// Requête SQL pour récupérer l'ID du dresseur associé à l'utilisateur
							$sqlDresseur = "SELECT id FROM dresseur WHERE num_account = '$identifiant'";
							$resultDresseur = mysqli_query($conn, $sqlDresseur);
							$rowDresseur = mysqli_fetch_assoc($resultDresseur);
							if ($rowDresseur) {
								$dresseurId = $rowDresseur['id'];
								// Stocke l'ID du dresseur dans la session
								$_SESSION['dresseur_id'] = $dresseurId;
								header("Location: redirectionAfterConnexion.php");
							} else {
								header("Location: creationDresseur.php");
							}
						}				
					} else {
						echo "Mot de passe incorrect";
					}
				} else {
					echo "Utilisateur non trouvé";
				}	
			}
		}
?>

<body>
	<?php include '../inc/navPortail.php'; ?>

    <section id="connexionSection">
		<h5>Le Prof. Chen te connait ?</h5>
		<form action="connexion.php" method="POST">
				<input class="inputConnexion" type="text" placeholder="Adresse email" id="mail" name="mail" required>
				<input class="inputConnexion" type="password" placeholder="MOT DE PASSE" id="mdp" name="mdp" required>
			<input type="submit" name='connexion' class="buttonSubmit" value="C'EST MOI !">
		</form>
		<a href="register.php"><h5>NON, </br>Rejoins le monde des dresseurs</h5></a>
    </section>

	<aside>
		<img src="../img/profOak.png"/>
	</aside>

	<footer>
		<h2 id="h2A">
			
		</h2>
	</footer>

</body>
</html>