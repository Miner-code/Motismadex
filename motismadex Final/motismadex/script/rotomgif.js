/*	$("#blockpage").removeClass("bleueDecor").addClass("orangeDecor"); 
*	$("header").removeClass("headerColorBLEUE").addClass("headerColorORANGE"); 	
*/
$(document).ready(function(){ 
		
	$("#zoneImgAnimation img").click(function() {
		$(".rotomdexhappygif").show("fast", function() {
			$(".rotomdexhappygif").css({"display":"flex"});
			$("#zoneImgAnimation img").hide();
		});
	});

	$(".rotomdexhappygif img").click(function() {
		$(".rotomdexhappygif").hide("fast", function() {
			$("#zoneImgAnimation img").show();
		});
	}); 
	
	  
});


