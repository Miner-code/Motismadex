/*	$("#blockpage").removeClass("bleueDecor").addClass("orangeDecor"); 
*	$("header").removeClass("headerColorBLEUE").addClass("headerColorORANGE"); 	
*/
$(document).ready(function(){ 
	i=1;
	showText("footer h2", " Bienvenue à toi. ↓", 10);
	$(document).click(function(){
		switchMessage();
	});
	/* Choix de la photo du dresseur */

	function switchMessage()
	{
		switch(i){
			case 1:
				showText("footer h2", " Comme tu peux le constater, je suis le Professeur Chen. ↓", 10);
			break;
			case 2:
				showText("footer h2", " Actuellement, tu te trouves sur le site Internet du Motismadex. ↓", 10);
			break;
			case 3:
				showText("footer h2", " Ce site sert à partager tes découvertes avec d'autres dresseurs. ↓", 10);
			break;
			case 4:
				showText("footer h2", " Tu peux notamment y retrouver un Pokedex de toutes les Régions ! ↓", 10);
			break;
			case 5:
				showText("footer h2", " C'est pas génial ? ↓", 10);
			break;
			case 6:
				showText("footer h2", " Oh mince... on m'appelle ! Je dois te laisser. ↓", 10);
			break;
			case 7:
				showText("footer h2", "Amuse-toi bien avec le Motismadex, Bye ! ↓", 10);
			break;
			case 8:
				$("aside").hide('slow', function(){
					window.location.href = "../passedress.php";
				 });
			break;
		  }
		 
		i++;
	}
	function showText(target, message, interval) {
		// Efface le contenu de l'élément cible
		$(target).empty();
	
		// Démarre l'animation du nouveau texte
		function animateText(index) {
			if (index < message.length) {
				$(target).append(message[index++]);
				setTimeout(function() {
					animateText(index);
				}, interval);
			}
		}
		// Démarre l'animation du texte
		animateText(0);
	};


});


