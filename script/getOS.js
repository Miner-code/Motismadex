// 0,0,28 couleur bleu racoon
// .offset($offset)
// .css("position","absolute")
// .rotate({count:5, duration:0.6, easing:'ease-out'}); 
$(document).ready(function(){
	
	var CP = getOS();
	if(CP == true)  // TRUE
	{
		document.location.href="portail/connexion.html";
	}
	else{
		alert('good');
		document.location.href="portail/connexion.html";
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
	}
}
	
