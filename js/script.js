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
	  container.load(target + '.php');

	  //pour charger une classe spécifique au well actuel, pour la couleur
	  if(target == "parcours"){
	  	document.getElementById("randomDiv").classList.add('well_parcours');
	  }
	  else {
	  	document.getElementById("randomDiv").classList.remove('well_parcours');
	  }
  	  if(target == "competences"){
	  	document.getElementById("randomDiv").classList.add('well_competences');
	  }
	  else {
	  	document.getElementById("randomDiv").classList.remove('well_competences');
	  }
  	  if(target == "etudes"){
	  	document.getElementById("randomDiv").classList.add('well_etudes');
	  }
	  else {
	  	document.getElementById("randomDiv").classList.remove('well_etudes');
	  }
  	  if(target == "outils"){
	  	document.getElementById("randomDiv").classList.add('well_outils');
	  }
	  else {
	  	document.getElementById("randomDiv").classList.remove('well_outils');
	  }
	  
	  //pour montrer quel est le menu actif
  	  if(target == "parcours"){
	  	document.getElementById("navkeyblue").classList.add('navactiveblue');
	  	document.getElementById("navkeyred").classList.remove('navactivered');
	  	document.getElementById("navkeygreen").classList.remove('navactivegreen');
	  	document.getElementById("navkeybrown").classList.remove('navactivebrown');
	  }
	  else if(target == "competences")  {
	  	document.getElementById("navkeygreen").classList.add('navactivegreen');
	  	document.getElementById("navkeyred").classList.remove('navactivered');
	  	document.getElementById("navkeybrown").classList.remove('navactivebrown');
	  	document.getElementById("navkeyblue").classList.remove('navactiveblue');
	  }
  	  else if(target == "etudes"){
	  	document.getElementById("navkeyred").classList.add('navactivered');
	  	document.getElementById("navkeygreen").classList.remove('navactivegreen');
	  	document.getElementById("navkeybrown").classList.remove('navactivebrown');
	  	document.getElementById("navkeyblue").classList.remove('navactiveblue');
	  }
	  else {
	  	document.getElementById("navkeybrown").classList.add('navactivebrown');
	  	document.getElementById("navkeyred").classList.remove('navactivered');
	  	document.getElementById("navkeygreen").classList.remove('navactivegreen');
	  	document.getElementById("navkeyblue").classList.remove('navactiveblue');
	  }

	  // Stop normal link behavior
	  return false;
	});
});


/* Animation apparition des pages */
$(document).ready(function(){
       $("#contenu").fadeIn(1200);
});


