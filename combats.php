<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!--script-->
	<script src="../script/rotomgif.js"></script>
    <!---->
	<link rel="stylesheet" href="stylesheet/combatstyle.css">
	<link rel="stylesheet" href="stylesheet/nav.css">
	<link rel="icon" href="img/pokeball.png" type="image/x-icon">
    <title>MOTISMADEX - L'ANNEXE DES DRESSEURS</title>
</head>

<?php
	session_start();
	// Vérifie si l'utilisateur est connecté
	if (isset($_SESSION['user_id'])) {
		require 'inc/con_bdd.php';
		require 'inc/function.php';
		
		$idDresseur = $_SESSION['dresseur_id'];
		if(isset($_SESSION['role']))
		{
			$role = $_SESSION['role'];
		}
		else
		{
			$role = FALSE;
		}

		if(isset($_SESSION['id_pokemonA']))
		{
			$idPokemonA = $_SESSION['id_pokemonA'];
			
			
		}
		else
		{
			$idPokemonA = 1;
			$_SESSION['id_pokemonA'] = $idPokemonA ;
		}

		if(isset($_SESSION['id_pokemonB']))
		{
			$idPokemonB = $_SESSION['id_pokemonB'];
		}
		else
		{
			$idPokemonB = 3;
			$_SESSION['id_pokemonB'] = $idPokemonB;
		}
	
		
		if (isset($_POST['message'])) {
			$texteCombat = $_POST['message'];
		
			$sqlCheckCombat = "SELECT * FROM combat WHERE pokemonA = '$idPokemonA' AND pokemonB = '$idPokemonB' AND post = '$texteCombat' AND id_dresseur = '$idDresseur'";
			$resultCheckCombat = mysqli_query($conn, $sqlCheckCombat);

			$sqlStatDresseur = "SELECT fight FROM dresseur WHERE  id = '$idDresseur'";
			$resultStatDresseur = mysqli_query($conn, $sqlStatDresseur);

			if ($resultCheckCombat && mysqli_num_rows($resultCheckCombat) == 0) {
				// Le combat n'existe pas encore, on peut l'insérer
				$sqlInsertCombat = "INSERT INTO combat (pokemonA, pokemonB, post, id_dresseur) VALUES ('$idPokemonA', '$idPokemonB', '$texteCombat', '$idDresseur')";
				$resultCombat = mysqli_query($conn, $sqlInsertCombat);
				
				$fights = (int)$resultStatDresseur + 1;
				$sqlInsertStatDresseur = "UPDATE dresseur SET fight = '$fights' WHERE id = '$idDresseur";
				$resultInsertStatDresseur = mysqli_query($conn, $sqlInsertStatDresseur);

				// Exécute la requête d'insertion
				if ($resultCombat) {
					echo "Nouveau combat créé avec succès.";
				} else {
					echo "Erreur lors de la création du combat : " . mysqli_error($conn);
				}
			} else {
				// Le combat existe déjà, redirection
				header("Location: spec.php?id=" . $row["id"] . '">Combat #' . $row["id"]);
				exit();
			}
		}
	} else {
		header("Location: portail/connexion.php");
	}
?>

<body>
<?php include 'inc/nav.php';

	$sqlPhotoA = "SELECT * FROM pokedex WHERE id = '$idPokemonA'"; 
	$resultPhotoA = mysqli_query($conn, $sqlPhotoA);
	$rowPhotoA = mysqli_fetch_assoc($resultPhotoA);

	$sqlPhotoB = "SELECT * FROM pokedex WHERE id = '$idPokemonB'"; 
	$resultPhotoB = mysqli_query($conn, $sqlPhotoB);
	$rowPhotoB = mysqli_fetch_assoc($resultPhotoB);

?>
	<div id="blockpage">
		<div id="pokemonRequest">
			<a class="pokemonChosenForBattle" href="pokedex.php">
				<img id="pokemonAchosen" src="<?php echo $rowPhotoA['lien_img']; ?>"/>
			</a>
			<h2><?php echo $rowPhotoA['nom']; ?></h2>
			<label id="versusLabel">VS</label>
			<h2><?php echo $rowPhotoB['nom']; ?></h2>
			<a class="pokemonChosenForBattle" href="pokedex.php">

				<img id="pokemonBchosen" src="<?php echo $rowPhotoB['lien_img']; ?>"/>
				
			</a>
		</div>
		<form action="combats.php" method="post" id="debuteBattle">
			<textarea placeholder="Qu'avez-vous à dire sur ce duel ?" id="messageInput" name="message" required></textarea>
			<button id="addNewBattle" type="submit">+</button>
		</form>

	
		<section>
			<!-- Liste des post par la balise article -->
			<?php
					// Requête SQL pour récupérer tous les combats
					if ($idPokemonB === null) {
						// Pas de Pokemon B, alors afficher tous les combats du Pokemon A
						$sql = "SELECT * FROM combat WHERE pokemonA = '$idPokemonA'";
					} else {
						// Il y a un Pokemon B, afficher tous les combats entre le Pokemon A et le Pokemon B
						$sql = "SELECT * FROM combat WHERE (pokemonA = '$idPokemonA' AND pokemonB = '$idPokemonB') OR (pokemonA = '$idPokemonB' AND pokemonB = '$idPokemonA')";
					}
					$result = mysqli_query($conn, $sql);
					// Afficher les combats
					if ($result && mysqli_num_rows($result) > 0) {
						while ($row = mysqli_fetch_assoc($result)) {
							// Vérifier si le combat est masqué
							if (!$row["hide"]) {
								$idDresseurAutorCombat = $row["id_dresseur"];
								$sqlNameDresseur = "SELECT * FROM dresseur WHERE id = $idDresseurAutorCombat ";
									$resultNameDresseur = mysqli_query($conn, $sqlNameDresseur);
									$rowNameDresseur = mysqli_fetch_assoc($resultNameDresseur);
									$picture = afficherImageDresseur($rowNameDresseur['picture']);
					?>
			<article>
				<div class="imgProfilePictureDresseur">

					<img src="<?php echo $picture;?>"/>
				</div>
				<div class="descriptionArticle">
					<!-- Quel Pokemon se fight ? -->
					<div class="flexboxLabel">
						<div>
							<label class="pokemonA"><?php echo $row["pokemonA"];?></label>
							<?php 
								if (isset($idPokemonB)) {
							?>
			
							<label > vs</label>
							<label class="pokemonB"><?php echo $row["pokemonB"];  ?></label>
							<?php 
								}
							?>
							<label class="date"><?php echo $row["date_creation"]; ?></label>
						</div>
						<div>
							<?php	
								if($role === TRUE)
								{
							?>
							<label class="bannir">bannir</label>
							<label class="masquer">masquer</label>
							<?php 
								}

								if($role === TRUE || $row["id_dresseur"] == $idDresseur )
								{
							?>
							<label class="supprimer">supprimer</label>
							<?php 
								}
							?>
						</div>
					</div>
					<p class="nomDresseur"><?php echo $rowNameDresseur['name_dresseur']; ?></p>
					<div class="descriptionAndSeeMoreButton"> 
						<p class="message"><?php echo $row["post"]; ?></p>
						<a class="seeMoreArticle" href="spec.php?id=<?php echo $row["id"]; ?>">Combat #<?php echo $row["id"]; ?></a>
					</div>
				</div>
			</article>
			<?php
				}
			}
		} else {
			echo "Aucun combat trouvé.";
		}
		?>
		</section>
		<a href="#pokemonRequest" id="toTheTop">
			<img id="arrowToTheTop" src="img/flechegauche.png"/>
		</a>
	</div>
	
</body>
</html>
