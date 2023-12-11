<?php	
	// Connexion à la base de données
	$conn = mysqli_connect("localhost", "root", "", "motismadex_db");
	// Vérifie la connexion
	if (!$conn) {
		die("Connexion échouée : " . $conn->connect_error);
	}

?>