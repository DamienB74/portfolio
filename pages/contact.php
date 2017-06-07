<!-- Fichier PHP contact du portfolio 
Réalisé par Damien Bauduin -->

<html lang="fr">

  <head>
    <!-- meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1"> <!-- responsive -->
    
    <link rel="icon" type="image/x-icon" href="../images/favicon.ico" />
    <!--[if IE]><link rel="shortcut icon" type="image/x-icon" href="../images/favicon.ico" /><![endif]-->

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
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Pacifico" />
    
    <!-- Script -->
    <script src="../js/script.js"></script>

    <title>Damien Bauduin - Développeur web</title>
    <?php include_once("analytics.php") ?> <!-- Google Analytics -->

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
                     <li><a href="home"><span class="glyphicon glyphicon-home"></span> Accueil</a></li>
                     <li><a href="a-mon-propos"><span class="glyphicon glyphicon-book"></span> A mon propos</a></li>
                     <li class="active"><a href="contact"><span class="glyphicon glyphicon-user"></span> Contact</a></li>
                    <!-- local -->
<!--                     <li class="active"><a href="home.php"><span class="glyphicon glyphicon-home"></span> Accueil</a></li>
<li><a href="aboutme.php"><span class="glyphicon glyphicon-book"></span> A mon propos</a></li> -->
                  </ul>
                </nav>
              </div>
            </div>

            <div class="inner cover">
              <h1 class="cover-heading"><img src="../images/logoDB.gif" /></h1>
              <p class="lead">
                  <h2>Pour me contacter</h2> 
                  <h4>Compte LinkedIn : <i class="fa fa-linkedin-square fa-2x" aria-hidden="true"></i></h3> 
                  <h4>Compte GitHub : <i class="fa fa-github fa-2x" aria-hidden="true"></i></h3> 
              </p>
            </div>

          </div>

        </div>

      </div>
      
      <!-- footer -->
      <div class="footer navbar-inverse">
          <div class="container">
              <div class="row">
                  <div class="navbar-header" style="float:left; margin-left: 1%;">
                    <div class="navbar-brand navbar-brand-footer">
                      <a href="https://www.linkedin.com/in/damien-bauduin-245159106/"><i class="fa fa-linkedin-square fa-2x" aria-hidden="true"></i></a> 
                      <a href="https://github.com/DamienB74"><i class="fa fa-github fa-2x" aria-hidden="true"></i></a> <!-- font awesome css -->
                    </div>
                  </div>
                  <div class="navbar-header" style="float:right;">
                      <div class="navbar-brand navbar-brand-footer" style="color:#fff; padding-top: 4px; padding-right:9px;">
                          Damien Bauduin - 2017
                      </div>
                  </div>
              </div>
          </div>
        </div>
  </body>
</html>