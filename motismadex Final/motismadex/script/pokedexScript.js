/*	$("#blockpage").removeClass("bleueDecor").addClass("orangeDecor"); 
*	$("header").removeClass("headerColorBLEUE").addClass("headerColorORANGE"); 	
*/
$(document).ready(function(){ 


	$('#pokemonChosenFromPokedex').click(function() {
		var position = $(this).offset();
		var topPosition = position.top + $(this).outerHeight();
		var leftPosition = position.left;

		$('#selectPokedex').toggle().offset({ top: topPosition, left: leftPosition });
	});

	$('#regionPokemonChosenFromPokedex').click(function() {
		var iWindowsSize = $(window).width();
		if (iWindowsSize  < 750)
		{
			$('section').show('slow', function(){});
			$('aside').hide('slow', function(){});
		}
		else if(iWindowsSize  > 750)
		{
			$('#pokedexGen1').hide('slow', function(){}).css({"dispaly":"flex"});
		}
	});

	$('#fullAsideWidthHeight').hover(function() {
		const randomVariable = Math.random() < 0.5;
		if (randomVariable) {
			$('#fullAsideWidthHeight').removeClass("fullAsideWidthHeightMotismadex");
			$('#fullAsideWidthHeight').removeClass("fullAsideWidthHeightBisous");
			$('#fullAsideWidthHeight').addClass("fullAsideWidthHeightSashaEtc");
		} else {
			$('#fullAsideWidthHeight').removeClass("fullAsideWidthHeightMotismadex");
			$('#fullAsideWidthHeight').removeClass("fullAsideWidthHeightSashaEtc");
			$('#fullAsideWidthHeight').addClass("fullAsideWidthHeightBisous");
		}
	}, function() {
		// Cette fonction sera appelée lorsque l'événement hover se termine
		$('#fullAsideWidthHeight').removeClass("fullAsideWidthHeightSashaEtc");
		$('#fullAsideWidthHeight').removeClass("fullAsideWidthHeightBisous");
		$('#fullAsideWidthHeight').addClass("fullAsideWidthHeightMotismadex");
	});

	$('#fullAsideWidthHeight').click(function() {
		$('#pokedexGen').show();
		$('#fullAsideWidthHeight').hide
		ajaxPokedex('Kanto');
	});
	
	
	
	$("article").click(function() {
		var regionChosen = this.id;
		$('#selectPokedex').hide();
		ajaxPokedex(regionChosen);
	});	
	
	function ajaxPokedex(regionChosen)
	{
		$.ajax({
			url: 'pokedex.php',
			type: 'GET',
			data: { region: regionChosen },  // Send only the ID as data
			success: function(data) {
				// Replace the content of the list with the new Pokémon
				$('body').html(data);
						$('#fullAsideWidthHeight').css({"position":"fixed"});
						$('#fullAsideWidthHeight').hide().css({"display":"none"});
						$('#pokedexGen').show().css({"display":"flex"});
			},
			error: function() {
				alert('Une erreur s\'est produite lors du chargement des Pokémon.');
			}
		});
	}
	
	$(".pokemonClassPokedex").click(function(){
		var identifiant = this.id;
		// Utilise Ajax pour charger les détails du Pokémon sélectionné depuis le script PHP
		$.ajax({
			url: 'pokedex.php', type: 'GET', data:{ pokemonId : identifiant }, 
			success: function(data){
				// Remplace le contenu des détails avec les nouveaux détails du Pokémon
				$('body').html(data);
				$('#fullAsideWidthHeight').hide().css({"display":"none"});
				$('#selectPokedex').hide();
				$('#pokedexGen').show().css({"display":"flex"});
			},
			error: function(){
				alert('Une erreur s\'est produite lors du chargement des détails du Pokémon.');
			}
		});
		
	});	

	  
});


