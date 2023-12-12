<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<!--script-->
	<script src="script/jquery-3.5.1.min.js"></script>
	<!---->
	<link rel="stylesheet" href="stylesheet/spec.css">
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
			if (isset($_SESSION['role'])) {
				$role = $_SESSION['role'];
			} else {
				$role = FALSE;
			}

			
			if (isset($_GET['id'])) {
				$combatId = $_GET['id'];

				if (isset($_POST['commentaire'])) {
					$commentaireCombat = $_POST['commentaire'];

					$sqlCheckComment = "SELECT * FROM commentaire_combat WHERE commentaire = '$commentaireCombat' AND id_dresseur = '$idDresseur'";
					$resultCheckComment = mysqli_query($conn, $sqlCheckComment);

					if ($resultCheckComment && mysqli_num_rows($resultCheckComment) == 0) {
						// Le commentaire n'existe pas encore, on peut l'insérer
						$sqlInsertComment = "INSERT INTO commentaire_combat (id_dresseur, id_combat, commentaire) VALUES ('$idDresseur', '$combatId', '$commentaireCombat')";
						$resultComment = mysqli_query($conn, $sqlInsertComment);

						// Exécute la requête d'insertion
						if ($resultComment) {
							echo "Nouveau commentaire ajouté avec succès.";
						} else {
							echo "Erreur lors de l'ajout du commentaire : " . mysqli_error($conn);
						}
					}
				}

				if (isset($_POST['voteButton'])) {
					// Vérifier si l'utilisateur a déjà voté pour ce combat
					$sqlCheckVote = "SELECT * FROM vote WHERE id_dresseur = $idDresseur AND id_combat = $combatId";
					$resultCheckVote = mysqli_query($conn, $sqlCheckVote);

					if ($resultCheckVote && mysqli_num_rows($resultCheckVote) == 0) {
						// L'utilisateur n'a pas encore voté, enregistre le vote
						$votePokemonA = isset($_POST['vote_pokemonA']) ? 1 : 0;
						$votePokemonB = isset($_POST['vote_pokemonB']) ? 1 : 0;

						// Requête SQL pour insérer un nouveau vote dans la table
						$sqlInsertVote = "INSERT INTO vote (id_dresseur, id_combat, vote_pokemonA, vote_pokemonB) VALUES ('$idDresseur', '$combatId', '$votePokemonA', '$votePokemonB')";
						$resultVote = mysqli_query($conn, $sqlInsertVote);

						// Exécute la requête d'insertion
						if ($resultVote) {
							echo "Vote enregistré avec succès.";
						} else {
							echo "Erreur lors de l'enregistrement du vote : " . mysqli_error($conn);
						}
					} else {
						echo "Vous avez déjà voté pour ce combat.";
					}
				}
			} else {
				header("Location: portail/connexion.php");
			}
		} else {
			header("Location: portail/connexion.php");
		}
?>
<body>
<?php include 'inc/nav.php'; ?>
<div id="blockpage">
		<div id="pokemonRequest">
			<div class="pokemonChosenForBattle">
				<img id="pokemonAchosen" src="https://www.pokepedia.fr/images/thumb/2/23/Ludwig-NB.png/200px-Ludwig-NB.png"/>
			</div>
			<label id="versusLabel">VS</label>
			<div class="pokemonChosenForBattle">
				<img id="pokemonBchosen" src="https://www.pokepedia.fr/images/thumb/f/f0/Tortipouss-DEPS.png/800px-Tortipouss-DEPS.png"/>
			</div>
		</div>
		

		<!-- Liste des commentaires par la balise article -->
		<div id="articleChosenDivStyle">
			<div id="articleChosen">
				<div class="imgProfilePictureDresseur">
					<img src="https://www.pokepedia.fr/images/thumb/2/23/Ludwig-NB.png/200px-Ludwig-NB.png"/>
				</div>
				<div class="descriptionArticle">
					<!-- Quel Pokemon se fight ? -->
					<div class="flexboxLabel">
						<div>
							<label class="pokemonA">#pokemonA</label>
							<label > vs</label>
							<label class="pokemonB">#pokemonB</label>
							<label class="date">date</label>
						</div>
						<div>
							<a><label class="bannir">bannir</label></a>
							<a><label class="masquer">masquer</label></a>
							<a><label class="supprimer">supprimer</label></a>
						</div>
					</div>	
					<p class="nomDresseur">Aera</p>
					<div class="descriptionAndSeeMoreButton"> 
						<p class="message">Message principal sur le combat entre Pokémon B et A.Message principal sur le combat entre Pokémon B et A.Message principal sur le combat entre Pokémon B et A. JE me deamnde</p>
                        <div id="statistics">
                            <a class="likeButton">
                                <p>nbrLike</p>
                                <img src="img/likeButtonFalse.png"/>
                                <img src="img/likeButtonTrue.png"/>
                            </a>
							<?php 
								if (isset($_POST['voteButton'])) {
									// Vérifier si l'utilisateur a déjà voté pour ce combat
									$sqlCheckVote = "SELECT * FROM vote WHERE id_dresseur = $idDresseur AND id_combat = $combatId";
									$resultCheckVote = mysqli_query($conn, $sqlCheckVote);

									if ($resultCheckComment && mysqli_num_rows($resultCheckComment) == 0) {
										// L'utilisateur n'a pas encore voté, enregistre le vote
										$votePokemonA = isset($_POST['vote_pokemonA']) ? 1 : 0;
										$votePokemonB = isset($_POST['vote_pokemonB']) ? 1 : 0;

										// Requête SQL pour insérer un nouveau vote dans la table
										$sqlInsertVote = "INSERT INTO vote (id_dresseur, id_combat, vote_pokemonA, vote_pokemonB) VALUES ('$idDresseur', '$combatId', '$votePokemonA', '$votePokemonB')";
										$resultVote = mysqli_query($conn, $sqlInsertVote );
										// Exécute la requête d'insertion
										if ($conn->query($sqlInsertVote) === TRUE) {
											echo "Vote enregistré avec succès.";
										} else {
											echo "Erreur lors de l'enregistrement du vote : " . $conn->error;
										}

										?>
										<form id="vote">
											<h3>Votez pour votre pokemon préféré :</h3>
											<label>$Pokemon A</label>
											<input id="voteAButton" name="vote" type="radio" value="A">
										</br>
											<label>$Pokemon B</label>
											<input id="voteBButton" name="vote" type="radio" value="B">
										</br>
											<button id="voteButton" name="voteButton" type="submit">Donner son vote.</button>
										</form>
										<?php

									} else {
										$sqlCheckVote = "SELECT * FROM combat WHERE id = $combatId";
										$resultCheckVote = mysqli_query($conn, $sqlCheckVote);
										$votesA = $resultCheckVote['vote_pokemonA'];
											$votesB = $resultCheckVote['vote_pokemonB'];
											// Calcule le pourcentage du vainqueur
											$totalVotes = $votesA + $votesB;
											// Vérifie le vainqueur
											if ($votesA > $votesB) {
												$pourcentageVainqueur = ($votesA / $totalVotes) * 100;
												$vainqueur = $resultCheckVote['pokemonA'];
											} elseif ($votesB > $votesA) {
												$pourcentageVainqueur = ($votesB / $totalVotes) * 100;
												$vainqueur = $resultCheckVote['pokemonB'];
											} else {
												// En cas d'égalité, tu peux gérer cela comme tu le souhaites
												$pourcentageVainqueur = 0;
												$vainqueur = 'Aucun, c\'est une égalité';
											}
										?>
										<h4>Tu as déjà voté.</h4>
                          
										<h4><span> <?php echo $vainqueur; ?></span> mène avec <span><?php echo $pourcentageVainqueur; ?></span> des votes</h4>
									<?php
									}
									?>
                        </div>
                    </div>
				</div>
			</div>
		</div>

        <form id="commentForm">
            <textarea placeholder="Commentez ce duel..." id="commentInput" name="commentaire" required></textarea>
            <button id="addNewComment" type="submit">+</button>
        </form>
		<section>
		<?php
					// Requête SQL pour récupérer tous les commentaires
					$sqlComments = "SELECT * FROM commentaire_combat WHERE id_combat = $combatId";
					$result = mysqli_query($conn, $sqlComments);
					// Afficher les commentaires
					if ($result && mysqli_num_rows($result) > 0) {
						while ($row = mysqli_fetch_assoc($result)) {
							// Vérifier si le combat est masqué
							if (!$row["hide"]) {
								$idDresseurAutorComment= $row["id_dresseur"];
								$sqlNameDresseur = "SELECT * FROM dresseur WHERE id = $idDresseurAutorComment ";
									$resultNameDresseur = mysqli_query($conn, $sqlNameDresseur);
									$rowNameDresseur = mysqli_fetch_assoc($resultNameDresseur);
									$picture = afficherImageDresseur($rowNameDresseur['picture']);
					?>
			<article>
				<div class="imgProfilePictureDresseurComment">
					<img src="<?php echo $picture ?>"/>
				</div>
				<div class="descriptionArticle">
					<!-- Commentaire de quel combat ? -->
					<div class="flexboxLabel">
						<div>
							<a><label class="commentIdCombat">#<?php echo $combatId ?></label></a>
							<label class="date"><?php echo $row["date_creation"]; ?></label>
						</div>
						<div>
							<a><label class="bannir">bannir</label></a>
							<a><label class="masquer">masquer</label></a>
							<a><label class="supprimer">supprimer</label></a>
						</div>
					</div>	
					<p class="nomDresseur"><?php echo $rowNameDresseur; ?></p>
					<div class="descriptionAndSeeMoreButton"> 
						<p class="comment"><?php echo $row["commentaire"]; ?> </p>
					</div>
				</div>
			</article>
		</section>
		
	</div>
	<a href="#pokemonRequest" id="toTheTop">
			<img id="arrowToTheTop" src="img/flechegauche.png"/>
	</a>
</body>
</html>
<?php
}
	} else {
		header("Location: portail/connexion.php");
	}
?>