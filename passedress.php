<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<script src="../script/jquery-3.5.1.min.js"></script>
	<script src="../script/passedressScript.js"></script>
	<link rel="stylesheet" href="stylesheet/passdress.css">
	<link rel="icon" href="img/pokeball.png" type="image/x-icon">
	<title>PASSE-DRESSEUR - L'ANNEXE DES DRESSEURS</title>
</head>

<?php
	session_start();
		// Vérifie si l'utilisateur est connecté
		if (isset($_SESSION['user_id'])) {
			require 'inc/con_bdd.php';
			require 'inc/function.php';

			$userId = $_SESSION['user_id'];
			// Requête SQL pour récupérer les informations du dresseur associé à l'utilisateur
			$sql = "SELECT * FROM dresseur WHERE num_account = $userId";
			$result = mysqli_query($conn, $sql);
			$sqlDate = "SELECT date_creation FROM account WHERE id = $userId";
			$resultDate = mysqli_query($conn, $sqlDate);
			$date = mysqli_fetch_assoc($resultDate);
			
			if ($result) {
				// Récupère les informations du dresseur
				$dresseurData = mysqli_fetch_assoc($result);
				$nameAccount = $dresseurData['name_dresseur'];
				$picture = afficherImageDresseur($dresseurData['picture']);
				$NbrCbt = $dresseurData['fight'];
				$NbrCptr = $dresseurData['captured'];
				$NbrRctr = $NbrCbt - $NbrCptr;
			} else {
				echo "Dresseur non trouvé.";
			}
			$conn->close();
		} else {
			header("Location: portail/connexion.php");
		}
	?>


<body>
<?php include 'inc/nav.php'; ?>

	<div>
		<section>
			<img src="<?php echo $picture; ?>"/>
			<div id="passDress">
				<article id="article1">
					<h2><?php 
						echo $nameAccount;
					?></h2>
					<p><?php 
						echo $date['date_creation'];
					?></p>
				</article>
				<article id="article2">
					<div id="editDresseur">MODIFIER DRESSEUR</div>
					<div id="editAccount">MODIFIER COMPTE</div>
					<?php 
						if($_SESSION['role'] == 1)
						{
							
					?>
					<div><a href="backoffice/backofficeAccount.php">ADMIN</a></div>
					<?php 
						}
					?>
				</article>
				<article id="article3">
					<div>
						<h5>Combats :</h5>
						<h4><?php 
						echo $NbrCbt;
						?></h4>
					</div>
					<div>
						<h5>Victoires :</h5>
						<h4><?php 
						echo $NbrCptr;
						?></h4>
					</div>
					<div>
						<h5>Défaites :</h5>
						<h4><?php 
						echo $NbrRctr;
					?></h4>
					</div>
				</article>
			</div>
		</section>
	</div>
	<footer>
		<p></p>
		<p>VERSION DE TEST</p>
	</footer>

	<div class="fullWindow" id="changerDresseur">
		<form action="passedress.php" method="post">
			<input class="inputCreationDresseur" type="text" placeholder="pseudo" id="pseudo" name="pseudoDresseur" required>
			<div id="radioChoiceDresseur">
				<input name="dresseur" type="radio" value="1">
				<input name="dresseur" type="radio" value="2">
				<input name="dresseur" type="radio" value="3"> 
				<input name="dresseur" type="radio" value="4">
				<input name="dresseur" type="radio" value="5">
				<input name="dresseur" type="radio" value="6">
				<input name="dresseur" type="radio" value="7"> 
			</div>
			<input class="buttonSubmit" name="createDresseur" type="submit" value="Comme ça.">
			<div class="exit">EXIT</div>
		</form>
	</div>
	<div class="fullWindow" id="changerAccount">
		<form action="passedress.php" method="post">
			<input class="inputRegister" type="text" placeholder="Nom" id="nameCompte" name="nameCompte" required/>
			<input class="inputRegister" type="text" placeholder="Prénom" id="firstNameCompte" name="firstNameCompte" required/>
			<input class="inputRegister" type="text" placeholder="Adresse e-Mail" id="mailCompte" name="mailCompte" required/>
			<input class="inputRegister" type="password" placeholder="Mot de Passe" id="mdpCompte" name="mdpCompte" required/>
			<input class="buttonSubmit" type="submit" name="register" value="Je viens d'emménager.">
			<div class="exit">EXIT</div>
		</form>
	</div>

</body>
</html>