/*	$("#blockpage").removeClass("bleueDecor").addClass("orangeDecor"); 
*	$("header").removeClass("headerColorBLEUE").addClass("headerColorORANGE"); 	
*/
$(document).ready(function(){ 

	$("#editDresseur").click(function() {
		$("#changerDresseur").show("fast", function() {
		});
	});

	$("#editAccount").click(function() {
		$("#changerAccount").show("fast", function() {
		});
	});

	$(".exit").click(function() {
		$(".fullWindow").hide("fast", function() {
		});
	}); 

});


