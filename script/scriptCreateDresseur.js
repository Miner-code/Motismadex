/*	$("#blockpage").removeClass("bleueDecor").addClass("orangeDecor"); 
*	$("header").removeClass("headerColorBLEUE").addClass("headerColorORANGE"); 	
*/
$(document).ready(function(){ 
	i=0;
	var idUser = $('#idUser').text();
	$("#creationDresseurSection2").hide();
	$("aside").css({"width": "100%",
					"left": "0%",
					"top": "5%",
					"background-color":"rgba(255,255,255,0.6)"});
	showText("footer h2", " Oh ! C'est notre première rencontre, je comprends mieux ! ↓ ", 10);

	$("aside").click(function(){
		if(i == 0)
		{
			showText("footer h2", " Peux-tu activer ta caméra pour que je te vois ? ↓", 10);
		}
		else
		{
			showText("footer h2", " Tes amis t'appellent vraiment"+ String(idUser)+"? ↓", 10);
		}
		$("aside").hide("slow", function(){});
		i++;
	});
	/* Choix de la photo du dresseur */
	$("#dresseur1").click(function(){
		$("input:radio").val([1]);
	
		nextSlide2();
	});
	$("#dresseur2").click(function(){
		$("input:radio").val([2]);
	
		nextSlide2();
	});
	$("#dresseur3").click(function(){
		$("input:radio").val([3]);
		
		nextSlide2();
	});
	$("#dresseur4").click(function(){
		$("input:radio").val([4]);
	
		nextSlide2();
	});
	$("#dresseur5").click(function(){
		$("input:radio").val([5]);
	
		nextSlide2();
	});
	$("#dresseur6").click(function(){
		$("input:radio").val([6]);
		
		nextSlide2();
	});
	$("#dresseur7").click(function(){
		$("input:radio").val(["7"]);

		nextSlide2();
	});
	
	function nextSlide2(){
		$("#creationDresseurSection1").hide("slow", function(){
			$("#creationDresseurSection2").show("slow", function(){
				//$("input:radio").attr("disabled", true);
				//myval = $("input:radio").val();
				//alert(myval.val());
				showText("footer h2", " Ahh !! Voilà, comme ça c'est mieux! ↓", 10);
				$("aside").show();
			});
		});
	}

	function showText(target, message, interval) {
		// Efface le contenu de l'élément cible
		$(target).empty();
		function animateText(index) {
			if (index < message.length) {
				$(target).append(message[index++]);
				setTimeout(function() {
					animateText(index);
				}, interval);
			}
		}
		animateText(0);
	}


});


