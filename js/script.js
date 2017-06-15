/* Refresh contenu */
$(document).ready(function(){
	// Set trigger and container variables
	var trigger = $('#nav a'),
	    container = $('#randomDiv');

	// Fire on click
	trigger.on('click', function(){
	  // Set $this for re-use. Set target from data attribute
	  var $this = $(this),
	    target = $this.data('target');       
	  
	  // Load target page into container
	  //container.load('pages/' + target + '.php');
	  container.load(target + '.php'); //local


	  //pour montrer quel est le menu actif
  	  if(target == "parcours"){
	  	document.getElementById("navkeyparcours").classList.add('navactive');
	  	document.getElementById("navkeyetudes").classList.remove('navactive');
	  	document.getElementById("navkeycompetences").classList.remove('navactive');
	  	document.getElementById("navkeyoutils").classList.remove('navactive');
	  }
	  else if(target == "competences")  {
	  	document.getElementById("navkeycompetences").classList.add('navactive');
	  	document.getElementById("navkeyetudes").classList.remove('navactive');
	  	document.getElementById("navkeyoutils").classList.remove('navactive');
	  	document.getElementById("navkeyparcours").classList.remove('navactive');
	  }
  	  else if(target == "etudes"){
	  	document.getElementById("navkeyetudes").classList.add('navactive');
	  	document.getElementById("navkeycompetences").classList.remove('navactive');
	  	document.getElementById("navkeyoutils").classList.remove('navactive');
	  	document.getElementById("navkeyparcours").classList.remove('navactive');
	  }
	  else {
	  	document.getElementById("navkeyoutils").classList.add('navactive');
	  	document.getElementById("navkeyetudes").classList.remove('navactive');
	  	document.getElementById("navkeycompetences").classList.remove('navactive');
	  	document.getElementById("navkeyparcours").classList.remove('navactive');
	  }

	  // Stop normal link behavior
	  return false;
	});
});


/* Animation apparition des pages */
$(document).ready(function(){
       $("#site-wrapper").fadeIn(1200);
});
