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
--			>- Une page d'inscription avancée afin de créer un personnage
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
	<script src="../script/scriptCreateDresseur.js"></script>
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
					header("Location: redirectionAfterCreateAccount.php");
			} else {
				// Informations du nouvel utilisateur par la méthode $_POST
				if(isset($_POST['createDresseur'])){	
					$nomDresseur = $_POST['pseudoDresseur'];
					$picture = $_POST['dresseur'];
					$numAccount = $_SESSION['user_id'];
			
					
					$sql = "INSERT INTO dresseur (name_dresseur, picture, num_account)
						VALUES ('$nomDresseur', $picture, $numAccount)";
					$result = mysqli_query($conn, $sql);
					if (!$result) {
						echo "Erreur MySQLi : " . mysqli_error($conn);
					} else {
						
					// Récupère l'ID du nouvel utilisateur
						$newDresserId = $conn->insert_id;
						$_SESSION['dresseur_id'] = $newDresserId;
						echo "Nouveau Dresseur créé avec succès.";
						header("Location: redirectionAfterCreateAccount.php");
					}
				} else {
						echo "Erreur lors de la création de l'utilisateur : " . mysqli_error($conn);
				}
			
					
			}
		} else {
				header("Location: connexion.php");
			}	
		

?>
<body>
	<?php include '../inc/navPortail.php'; ?>
	<div id="idUser">	<?php 	
					$numAccount = $_SESSION['user_id'];	
					$sqlNomCompte = "SELECT name_account FROM account WHERE id = '$numAccount'";
					$resultNomCompte = mysqli_query($conn, $sqlNomCompte);
					$nomDresseur = mysqli_fetch_assoc($resultNomCompte);
					if (!$resultNomCompte) {
    					die("Erreur de requête : " . mysqli_error($conn));
					}	
					echo $nomDresseur['name_account']; 
					?> 
	</div>
	<!-- section N°1 -->
	<section id="creationDresseurSection1">
		<h1>CHOISIS UN DRESSEUR</h1>
		<div id="allDresseurPicture">
			<div class="ChoiceDresseurPicture" >
				<img class="pictureDresseur" id="dresseur1" src="https://www.pokepedia.fr/images/f/f5/Luth-HGSS.png"/>
			</div>
			<div class="ChoiceDresseurPicture" >
				<img class="pictureDresseur" id="dresseur2" src="https://www.pokepedia.fr/images/thumb/2/23/Ludwig-NB.png/200px-Ludwig-NB.png"/>
			</div>
			<div class="ChoiceDresseurPicture" >
				<img class="pictureDresseur" id="dresseur3" src="https://www.pokepedia.fr/images/thumb/7/7d/M%C3%A9lis-NB2.png/200px-M%C3%A9lis-NB2.png"/>
			</div>
			<div class="ChoiceDresseurPicture" >
				<img class="pictureDresseur" id="dresseur4" src="https://www.pokepedia.fr/images/thumb/1/19/Carolina-NB.png/200px-Carolina-NB.png"/>
			</div>
			<div class="ChoiceDresseurPicture" >
				<img class="pictureDresseur" id="dresseur5" src="https://www.pokepedia.fr/images/thumb/7/70/Ludvina-NB.png/300px-Ludvina-NB.png"/>
			</div>
			<div class="ChoiceDresseurPicture" >
				<img class="pictureDresseur" id="dresseur6" src="https://www.pokepedia.fr/images/thumb/6/6a/Red-PO.png/200px-Red-PO.png"/>
			</div>
			<div class="ChoiceDresseurPicture" >
				<img class="pictureDresseur" id="dresseur7" src="https://www.pokepedia.fr/images/4/42/Blue-PO.png"/>
			</div>
		</div>
    </section>
	<!-- DIALOGUE N°2 -->
	<section id="creationDresseurSection2">
		<h5>Comment tes amis te surnomment-ils?</h5>
		<form action="creationDresseur.php" method="post">
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
		</form>
    </section>

	<aside>
		<img src="../img/profOak.png"/>
	</aside>

	<!-- DIALOGUE N°1 -->
	<footer>
		<h2>
		</h2>
	</footer>

	<!-- DIALOGUE N°2 -->
	<!--
	<footer>
		<h2>
			
			</br>
			 ↓
		</h2>
	</footer>
	-->
	
</body>
</html>