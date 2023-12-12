/*	$("#blockpage").removeClass("bleueDecor").addClass("orangeDecor"); 
*	$("header").removeClass("headerColorBLEUE").addClass("headerColorORANGE"); 	
*/
$(document).ready(function(){ 

	$(".hideButton").click(function(){
		hidenId = this.id;
		alert(hidenId);
		// Utilise Ajax pour charger les détails du Pokémon sélectionné depuis le script PHP
		$.ajax({
			url: 'backofficeFights.php', type: 'GET', data:{ hidenId : hidenId }, 
			success: function(data){
				// Remplace le contenu des détails avec les nouveaux détails du Pokémon
				$('body').html(data);
			},
			error: function(){
				alert('Une erreur s\'est produite lors du chargement des détails du Pokémon.');
			}
		});
		
	});

	  
});


