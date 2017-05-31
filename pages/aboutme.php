<!-- Fichier PHP index du portfolio -->

<html lang="fr">

	<head>

	  <meta charset="utf-8">
	  <meta name="viewport" content="initial-scale=1"> <!-- responsive -->
	  
	  <!-- JQuery -->
	  <script src="../js/jquery-3.2.1.min.js"></script>
	  <script src="../js/jquery.easypiechart.js"></script>

	  <!-- Bootstrap -->
	  <link rel="stylesheet" href="../css/easypiechart.css">
	  <link href="../css/bootstrap/css/bootstrap.min.css" rel="stylesheet"> 
	  <script src="../css/bootstrap/js/bootstrap.min.js"></script>

	  <!-- CSS -->
	  <link rel="stylesheet" href="../css/style.css">
	  <link rel="stylesheet" href="../css/font-awesome-4.7.0/css/font-awesome.min.css">
	  
	  <!-- Script -->
	  <script src="../js/script.js"></script>

	  <title>Damien Bauduin - Développeur web</title>

	</head>

	<body>
		<div id="contenu" style="display: none;">
			<div class="navbar navbar-inverse navbar-fixed-top"> <!-- header -->
			      <div class="container">
			        <div class="navbar-header">
			          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">

			            <span class="sr-only">Toggle navigation</span>
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>

			          </button>


			          <a class="navbar-brand" style="color:#fff">Portfolio de Damien Bauduin</a>

			        </div>

			        <div id="navbar" class="collapse navbar-collapse">
			          <ul class="nav navbar-nav">

			            <li><a href="accueil.php" class="btn btn-info btn-lg"><span class="glyphicon glyphicon-home"></span> Accueil</a></li>
			            <li class="active"><a href="aboutme.php" class="btn btn-info btn-lg"><span class="glyphicon glyphicon-book"></span> A mon propos</a></li>
			            <!-- <li><a href="mini_jeux.php">Mini jeux</a></li> -->

			          </ul>

			        </div><!--/.nav-collapse -->
			      </div>
			    </div>

			    <div class="container container_sans_menu">
			      	<div class="contenuAbout">
				  		<div class="row">
				  			<nav id="nav">				  			
				  				<a href="#" class="navlink navlinkblue" data-target="parcours">
					  				<div class="navkey navkeyblue col-lg-3 col-md-3 col-sm-3 col-xs-12 navactiveblue" id="navkeyblue">
					  					Ma présentation
					  				</div>
				  				</a>
					  			
								<a href="#" class="navlink navlinkred" data-target="etudes">
									<div class="navkey navkeyred col-lg-3 col-md-3 col-sm-3 col-xs-12" id="navkeyred">
						  				Mes études
						  			</div>	
								</a>

								<a href="#" class="navlink navlinkgreen" data-target="competences">
						  			<div class="navkey navkeygreen col-lg-3 col-md-3 col-sm-3 col-xs-12" id="navkeygreen">
						  				Mes compétences
						  			</div>
								</a>

								<a href="#" class="navlink navlinkbrown" data-target="outils">
						  			<div class="navkey navkeybrown col-lg-3 col-md-3 col-sm-3 col-xs-12" id="navkeybrown">
						  				Mes outils
						  			</div>	
					  			</a>				  										  		
				  			</nav>
						</div>
						
						<div class="well well_parcours" id="randomDiv"> <!-- well pour l'encadré -->
							<?php include('parcours.php'); ?>
						</div>
						
				      </div>
			    </div>

				<!-- footer -->
			    <div class="footer navbar-inverse navbar-fixed-bottom">
			    	<div class="container">
			    		<div class="row">
			    			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
					    		<div class="navbar-header">
							    	<div class="navbar-brand navbar-brand-footer">
								    	<a href="https://www.linkedin.com/in/damien-bauduin-245159106/"><i class="fa fa-linkedin-square fa-2x" aria-hidden="true"></i></a>
								    	<a href="https://github.com/DamienB74"><i class="fa fa-github fa-2x" aria-hidden="true"></i></a> <!-- font awesome css -->
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
								<div class="navbar-header" style="float:right;">
							    	<div class="navbar-brand navbar-brand-footer" style="color:#fff;">
								    	Damien Bauduin - 2017
									</div>
								</div>
							</div>
						</div>
				    </div>
			    </div>
		</div>
	</body>

</html>

