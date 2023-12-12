/*	$("#blockpage").removeClass("bleueDecor").addClass("orangeDecor"); 
*	$("header").removeClass("headerColorBLEUE").addClass("headerColorORANGE"); 	
*/
$(document).ready(function(){ 
	
	showText("footer h2", " Tiens, un nouveau dresseur ! Mais... Je te connais ? ↓", 0, 30);
	function showText (target, message, index, interval) {    
		if (index < message.length) { 
		  $(target).append(message[index++]); 

		  setTimeout(function () { showText(target, message, index, interval); }, interval); 
		} 
	  }  
});


