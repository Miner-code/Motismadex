
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	

	<script src="script/jquery-3.5.1.min.js"></script>
	<script src="script/pokedexScript.js"></script>

	
	<link rel="stylesheet" href="stylesheet/pokedex.css">
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
			$userId = $_SESSION['user_id'];		 
?>

<body>

<?php include 'inc/nav.php'; ?>

<aside>
	 
	<div id="fullAsideWidthHeight" class="fullAsideWidthHeightMotismadex">
	</div>


	<!-- POKEDEX -->
	<div id="selectorPokedex">
			<?php 
				$regionChoice = isset($_GET['region']) ? $_GET['region'] : '';
				$pokemonId = isset($_GET['pokemonId']) ? $_GET['pokemonId'] : '';
			?>
			</div>
			<div id="pokedexGen">
			<?php 
			$sqlRegionPokemon = "SELECT * FROM pokedex WHERE num_pokemon = '1' AND region = '$regionChoice'";
			$resultRegionPokemon = mysqli_query($conn, $sqlRegionPokemon);
			
			if ($resultRegionPokemon) {
				$infoPokemon = mysqli_fetch_assoc($resultRegionPokemon);
				// Vérifier si $pokemonId est différent de l'ID du Pokémon trouvé précédemment et n'est pas vide
				if (!empty($pokemonId) && $pokemonId != $infoPokemon['id']) {
					$sql = "SELECT * FROM pokedex WHERE id = '$pokemonId'";
					$resultPokemon = mysqli_query($conn, $sql);
				
					if ($resultPokemon) {
						$infoPokemon = mysqli_fetch_assoc($resultPokemon);
						$_SESSION['pokemonId'] = $infoPokemon['id'];
						
					} else {
						echo "Aucun Pokémon trouvé avec l'ID spécifié.";
					}
				}
					
			} else {
				echo "Aucun Pokémon trouvé pour la région spécifiée.";
			}
			
		?>
		<div id="searchPokedex">
			<div id="pokemonChosenFromPokedex">
				<p><?php echo  $infoPokemon["numero_pokedex"]; ?></p>
				<h3><?php echo  $infoPokemon["nom"]; ?></h3>
			</div>
			<h3 id="regionPokemonChosenFromPokedex">
				<?php echo  $infoPokemon["region"]; ?>
			</h3>
			<div id="typePokemonChosenFromPokedex">
				<!-- à changer -->
				<?php 
					echo  $infoPokemon["typeA"];
					echo  $infoPokemon["typeB"];
				?>

			</div>
			<div id="infoTaillePoidsPokemonChosenPokedex">
				<p><?php echo  $infoPokemon["poids"]; ?>kg</p>
				<p><?php echo  $infoPokemon["taille"];?>m</p>
			</div>
			<div id="descriptionPokemonChosenFromPokedex">
			<p><?php echo  $infoPokemon["description"];?></p>
			</div>
		</div>
		<div id="infoPokemonChosenFromPokedex">
			<div id="spritePokemonChosenFromPokedex">
				<img src="<?php echo  $infoPokemon["lien_img"]; ?>">
			</div>
		</div>
		<?php 
			if (isset($_POST['voteButton'])) {
				$selectedValue = isset($_POST['demo2']) ? $_POST['demo2'] : '';

				// S'assurer que $_SESSION['pokemonId'] est défini
				if (isset($_SESSION['pokemonId'])) {
					// Mettre l'id du pokemon dans le choix A ou B pour la page combats.php
					if ($selectedValue == 'choiceA') {
						$_SESSION['id_pokemonA'] = $_SESSION['pokemonId'];	
					} elseif ($selectedValue == 'choiceB') {
						$_SESSION['id_pokemonB'] = $_SESSION['pokemonId'];	
					}
				}
			}
			?>

			<div id="choicePokemonAtWhatPlace">
				<form id="formChoicePokemon" method="post">
					<input type="radio" name="demo2" class="demo2 demoyes" id="demo2-a" value="choiceA" checked>
					<label for="demo2-a">Équipe</label>
					</br>
					<input type="radio" name="demo2" class="demo2 demono" id="demo2-b" value="choiceB">
					<label for="demo2-b">Adversaire</label>
					</br>
					<button id="voteButton" name="voteButton" type="submit">Placer le <?php echo $infoPokemon["nom"]; ?></button>
				</form>
			</div>
	</div>
</aside>

    <section>
		<article id="Kanto">
			<div class="GENbackgroundOpacity">
				<h2>Kanto</h2>
				<h3>GENERATION-1<h3>
				
			</div>
		</article>
		<article id="Johto">
			<div class="GENbackgroundOpacity">
				<h2>Johto</h2>
				<h3>GENERATION-2<h3>
			</div>
		</article>
		<article id="Hoenn">
			<div class="GENbackgroundOpacity">
				
				<h2>Hoenn</h2>
				<h3>GENERATION-3<h3>
			</div>
		</article>
		<article id="Sinnoh">
			<div class="GENbackgroundOpacity">
				<h2>Sinnoh</h2>
				<h3>GENERATION-4<h3>
			</div>
		</article>
		<article id="Unys">
			<div class="GENbackgroundOpacity">
				<h2>Unova</h2>
				<h3>GENERATION-5<h3>
			</div>
		</article>
		<article id="Kalos">
			<div class="GENbackgroundOpacity">
				<h2>Kalos</h2>
				<h3>GENERATION-6<h3>
			</div>
		</article>
		<article id="Alola">
			<div class="GENbackgroundOpacity">
				<h2>Alola</h2>
				<h3>GENERATION-7<h3>
			</div>
		</article>
		<article id="Galar">
			<div class="GENbackgroundOpacity">
				<h2>Galar</h2>
				<h3>GENERATION-8<h3>
			</div>
		</article>
		<article id="Paldea">
			<div class="GENbackgroundOpacity">
				<h2>Paldea</h2>
				<h3>GENERATION-9<h3>
			</div>
		</article>
    </section>
	<div id="selectPokedex">
		<?php
		// Sélection des Pokémon du Pokédex
		$sqlRegionFromRegion = "SELECT * FROM pokedex WHERE region = '$regionChoice'";
		$resultRegionFromRegion = mysqli_query($conn, $sqlRegionFromRegion);

		if ($resultRegionFromRegion && mysqli_num_rows($resultRegionFromRegion) > 0) {
			while ($row = mysqli_fetch_assoc($resultRegionFromRegion)) {
				?>
				<div class="pokemonClassPokedex" id="<?php echo $row["id"]; ?>">
					<p>N°<span><?php echo $row["numero_pokedex"]; ?></span></p>
					<h3> <?php echo $row["nom"]; ?></h3>
				</div>
				<?php
			}
		} else {
			// Aucun résultat pour la région choisie, afficher les Pokémon de la même région que $infoPokemon["region"]
			$pokemonSameRegion = $infoPokemon["region"];
			$sqlRegionFromRegion = "SELECT * FROM pokedex WHERE region = '$pokemonSameRegion'";
			$resultRegionFromRegion = mysqli_query($conn, $sqlRegionFromRegion);

			if ($resultRegionFromRegion && mysqli_num_rows($resultRegionFromRegion) > 0) {
				while ($row = mysqli_fetch_assoc($resultRegionFromRegion)) {
					?>
					<div class="pokemonClassPokedex" id="<?php echo $row["id"]; ?>">
						<p>N°<span><?php echo $row["numero_pokedex"]; ?></span></p>
						<h3> <?php echo $row["nom"]; ?></h3>
					</div>
					<?php
				}
			} else {
				echo "Aucun Pokémon trouvé pour cette région.";
			}
		}
		?>
	</div>
		<footer>
		
		</footer>

</body>
</html>
<?php 
		
	} else {
		header("Location: portail/connexion.php");
	}
?>