<?PHP session_start();
	include "../controller/eventC.php";

	$eventC=new eventC();
	$listeEvent=$eventC->affichereventsFront();

?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../FrontAssets/images/favicon.ico">

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">



    <!-- Bootstrap core CSS -->
    <link href="../FrontAssets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="../FrontAssets/css/fontawesome.css">
    <link rel="stylesheet" href="../FrontAssets/css/style.css">
    <link rel="stylesheet" href="../FrontAssets/css/owl.css">

  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.html"><h2>JOB <em>FLEX</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="FrontLayout.php">Home
                      <span class="sr-only">(current)</span>
                    </a>
                </li> 
                <li class="nav-item active"><a class="nav-link" href="afficherParticipations.php">les offres d'emploi</a></li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">les offres</a>
                    
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="affichereventsFront.php">Technologie de l'information (TI)</a>
                      <a class="dropdown-item" href="affichereventsFront.php">Santé </a>
                      <a class="dropdown-item" href="affichereventsFront.php">Vente et service à la clientèle</a>
                    </div>
                </li>
                <li class="nav-item active"><a class="nav-link" href="./logout.php">logout</a></li>

            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <div class="page-heading about-heading header-text" style="background-image: url(../FrontAssets/images/J.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4><i class="fa fa-user"></i>Bienvenue MR <?php echo $_SESSION['nom']. " " . $_SESSION['prenom']   ?></h4>
              <h2>voici les offres d'emploi disponible</h2>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="products">
      <div class="container">
        <div class="row">
            <!-- ekteb hna --> 
    <div class="products">
      <div class="container">
        <div class="row">

        <?PHP
			foreach($listeEvent as $event){
		?>
          <div class="col-md-4">
            <div class="product-item">
              <a href="package-details.html"><image  src="<?PHP echo "/5555c/FrontAssets/images/" . $event['image']; ?>"/></a>
              <div class="down-content">
                <a href="package-details.html"><h4><?PHP echo $event['titreoffre']; ?></h4></a>
                <h6><?PHP echo $event['typecontrat']; ?> </h6>
                <p>Zid </p>
                <small>
                     <strong title="Available"><i class="fa fa-calendar"></i> <?PHP echo $event['datelimit']; ?> </strong> &nbsp;&nbsp;&nbsp;&nbsp;
                     <strong title="salaire de travail"><i class="fa fa-dollar-sign"></i> <?PHP echo $event['salaire']; ?> DT</h6> </strong>
                     <form method="POST" action="ajoutercondidat.php">
                    <input type="submit" class="btn btn-warning btn-fw" name="candidater" value="candidater">
                    <input type="hidden" value=<?PHP echo $event['IDoffre']; ?> 
                    <input type="hidden" value=<?PHP echo  $_SESSION['idfk']; ?> name="idfk">
                   
                    </form>
                </small>
              </div>
            </div>
          </div>
        <?PHP
			}
		?>

          <div class="col-md-12">
            <ul class="pages">
              <li class="active"><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
                <!-- 7abbes 7abbes -->
        </div>

        <br>
        
        <div>
        </div>
      </div>
    </div>
    
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <p>Template by: <a href="https://www.phpjabbers.com/">PHPJ.com</a></p>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Book Now</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="contact-form">
              <form action="#" id="contact">
                  <div class="row">
                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Pick-up location" required="">
                          </fieldset>
                       </div>

                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Return location" required="">
                          </fieldset>
                       </div>
                  </div>

                  <div class="row">
                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Pick-up date/time" required="">
                          </fieldset>
                       </div>

                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Return date/time" required="">
                          </fieldset>
                       </div>
                  </div>
                  <input type="text" class="form-control" placeholder="Enter full name" required="">

                  <div class="row">
                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Enter email address" required="">
                          </fieldset>
                       </div>

                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Enter phone" required="">
                          </fieldset>
                       </div>
                  </div>
              </form>
           </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-primary">Book Now</button>
          </div>
        </div>
      </div>
    </div>


    <!-- Bootstrap core JavaScript -->
    <script src="../FrontAssets/vendor/jquery/jquery.min.js"></script>
    <script src="../FrontAssets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="../FrontAssets/js/custom.js"></script>
    <script src="../FrontAssets/js/owl.js"></script>
  </body>

</html>


rrrrrrrr