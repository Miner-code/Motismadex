/*	$("#blockpage").removeClass("bleueDecor").addClass("orangeDecor"); 
*	$("header").removeClass("headerColorBLEUE").addClass("headerColorORANGE"); 	
*/
$(document).ready(function(){ 	
	/*	MOBILE FRIENDLY */

	$("#retourMenu").click(function() {
		$("#headerPetitEcran").show();
	});

	$("#retourTextWithoutButton").click(function() {
		$("#headerPetitEcran").hide();
		
	}); 
	  
	$( window ).resize(function() {
		menuChange();	
	});	

	var CP = getOS();
	if(CP == true)  // TRUE
	{
		//petit();	
	}
	else{
		//grand();
	}

	/*
	function menuChange()
	{

	var CPbis = getOS();
	if(CPbis == true)  // TRUE
	{
		petitNav();			
	}
	else{
		var iWindowsSize = $(window).width();
		if (iWindowsSize  < 750)
		{
			petitNav();
		}
		else if(iWindowsSize  > 750)
		{
			grandeNav();
		}
	}

	}


	$("#buttonActionMenuToggle").click(function(){
	$( ".navigationSecondaire" ).toggle( "slow", function() {
		
	});
	});

	

	function petit(){
	}
	function grand(){
	}

	function getOS() {
	var userAgent = window.navigator.userAgent,
	platform = window.navigator.platform,
	macosPlatforms = ['Macintosh', 'MacIntel', 'MacPPC', 'Mac68K'],
	windowsPlatforms = ['Win32', 'Win64', 'Windows', 'WinCE'],
	iosPlatforms = ['iPhone', 'iPad', 'iPod'],
	os = null;
	var CPtf = false;
	if (macosPlatforms.indexOf(platform) !== -1) {
		os = 'Mac OS';
	} else if (iosPlatforms.indexOf(platform) !== -1) {
		os = 'iOS';
	} else if (windowsPlatforms.indexOf(platform) !== -1) {
		os = 'Windows';
	} else if (/Android/.test(userAgent)) {
		os = 'Android';
	} else if (!os && /Linux/.test(platform)) {
		os = 'Linux';
	}
	
	if(os == 'Android'|| os == 'iOS')
	{
		CPtf = true;
	}
	else
	{
		CPtf = false;
	}
	return CPtf;
	}*/
});


