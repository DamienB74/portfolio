<!-- Fichier PHP index du portfolio 
Réalisé par Damien Bauduin -->

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
      <div class="site-wrapper">
        <div class="site-wrapper-inner">

          <div class="container">

            <div class="masthead clearfix">
              <div class="container inner">
                <h3 class="masthead-brand">Portfolio de Damien Bauduin</h3>
                <nav>
                  <ul class="nav masthead-nav">
                    <li><a href="home.php"><span class="glyphicon glyphicon-home"></span> Accueil</a></li>
                    <li class="active"><a href="aboutme.php"><span class="glyphicon glyphicon-book"></span> A mon propos</a></li>
                  </ul>
                </nav>
              </div>
            </div>

            <div class="inner cover">
              <div class="row">
                  <nav id="nav">                
                    <a href="#" class="navlink " data-target="parcours">
                      <div class="navkey col-lg-3 col-md-3 col-sm-3 col-xs-12 navactive" id="navkeyparcours">
                        Ma présentation
                      </div>
                    </a>
                    
                  <a href="#" class="navlink " data-target="etudes">
                    <div class="navkey col-lg-3 col-md-3 col-sm-3 col-xs-12" id="navkeyetudes">
                        Mes études
                      </div>  
                  </a>

                  <a href="#" class="navlink " data-target="competences">
                      <div class="navkey col-lg-3 col-md-3 col-sm-3 col-xs-12" id="navkeycompetences">
                        Mes compétences
                      </div>
                  </a>

                  <a href="#" class="navlink " data-target="outils">
                      <div class="navkey col-lg-3 col-md-3 col-sm-3 col-xs-12" id="navkeyoutils">
                        Mes outils
                      </div>  
                    </a>                                    
                  </nav>
              </div>

              <div id="randomDiv"> <!-- well pour l'encadré -->
                <?php include('parcours.php'); ?>
              </div>
            </div>

          </div>

        </div>

      </div>
      
      <!-- footer -->
      <div class="footer navbar-inverse ">
          <div class="container">
              <div class="row">
                  <div class="navbar-header">
                    <div class="navbar-brand navbar-brand-footer">
                      <a href="https://www.linkedin.com/in/damien-bauduin-245159106/"><i class="fa fa-linkedin-square fa-2x" aria-hidden="true"></i></a> 
                      <a href="https://github.com/DamienB74"><i class="fa fa-github fa-2x" aria-hidden="true"></i></a> <!-- font awesome css -->
                    </div>
                  </div>
                  <div class="navbar-header" style="float:right;">
                      <div class="navbar-brand navbar-brand-footer" style="color:#fff;">
                          Damien Bauduin - 2017
                      </div>
                  </div>
              </div>
          </div>
        </div>
  </body>
</html>