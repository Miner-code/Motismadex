<?php 
	session_start();																														
    // Détruit toutes les données associées à la session
    session_destroy();

    // Redirige vers la page de connexion
    header("Location: connexion.php");
    exit();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<link rel="stylesheet" href="../stylesheet/style.css">
    <link rel="stylesheet" href="../stylesheet/navbar.css">
    <title>MOTISMADEX - L'ANNEXE DES DRESSEURS</title>
	 <link rel="icon" href="../img/pokeball.png" type="image/x-icon">
</head>
</html>
