/*	$("#blockpage").removeClass("bleueDecor").addClass("orangeDecor"); 
*	$("header").removeClass("headerColorBLEUE").addClass("headerColorORANGE"); 	
*/
$(document).ready(function(){ 
	var idUser = $('#idUser').text();
	showText("footer h2", "Oh !"+ String(idUser)+" ! Je m'excuse, je ne t'avais pas reconnu ! ↓", 0, 30);
	function showText (target, message, index, interval) {    
		if (index < message.length) { 
		  $(target).append(message[index++]); 

		  setTimeout(function () { showText(target, message, index, interval); }, interval); 
		} 
	  }

	$(document).click(function(){  
		window.location.href = "../passedress.php";
	});
});


