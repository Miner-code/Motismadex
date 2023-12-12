<?php	
	function afficherImagePokemon($type) {
		// Chemin vers le dossier contenant les images
		// En fonction du type, inclut l'image correspondante
		switch ($type) {
		case 'Insecte':
			include $class = '';
			break;
		case 'Ténèbre':
		 	include $class = '';
			break;
		case 'Dragon':
			include $class = '';
			break;
		case 'Feu':
			include $class = '';
			break;
		case 'Eau':
			include $class = '';
			break;
		case 'Plante':
			include $class = '';
			break;
		case 'Elek':
			include $class = '';
			break;
		case 'Fée':
			include $class = '';
			break;
		case 'Combat':
			include $class = '';
			break;
		case 'Vol':
			include $class = '';
			break;
		case 'Spectre':
			include $class = '';
			break;
		case 'Sol':
			include $class = '';
			break;
		case 'Glace':
			include $class = '';
			break;
		case 'Normal':
			include $class = '';
			break;
		case 'Poison':
			include $class = '';
			break;
		case 'Psy':
			include $class = '';
			break;
		case 'Roche':
			include $class = '';
			break;
		case 'Acier':
			include $class = '';
			break;
	 	default:
		 // Si le type n'est pas reconnu, inclut une image par défaut
		 include $class = '';
		 break;
 		}
		return $class;
	}
	
	function afficherImageDresseur($imgDresseur) {
		// Chemin vers le dossier contenant les images
		// En fonction du type, inclut l'image correspondante
		switch ($imgDresseur) {
		case 1:
		 	 $cheminImages = 'https://www.pokepedia.fr/images/f/f5/Luth-HGSS.png';
			break;
		case 2:
			 $cheminImages = 'https://www.pokepedia.fr/images/thumb/2/23/Ludwig-NB.png/200px-Ludwig-NB.png';
			break;
		case 3:
			 $cheminImages = 'https://www.pokepedia.fr/images/thumb/7/7d/M%C3%A9lis-NB2.png/200px-M%C3%A9lis-NB2.png';
			break;
		case 4:
			 $cheminImages = 'https://www.pokepedia.fr/images/thumb/1/19/Carolina-NB.png/200px-Carolina-NB.png';
			break;
		case 5:
			 $cheminImages = 'https://www.pokepedia.fr/images/thumb/7/70/Ludvina-NB.png/300px-Ludvina-NB.png';
			break;
		case 6:
			 $cheminImages = 'https://www.pokepedia.fr/images/thumb/6/6a/Red-PO.png/200px-Red-PO.png';
			break;
		case 7:
			 $cheminImages = 'https://www.pokepedia.fr/images/4/42/Blue-PO.png';
			break;
	 	default:
		 // Si le type n'est pas reconnu, inclut une image par défaut
		  $cheminImages = '';
		 break;
 		}
		return $cheminImages;
	}

?>