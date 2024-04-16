<?php
	include "../controller/eventC.php";
	include_once '../model/event.php';
  session_start();
	$eventC = new eventC();
	$error = "";
	
	if (
		isset($_POST["titreoffre"]) && 
        isset($_POST["datelimit"]) &&
        isset($_POST["typecontrat"]) && 
        isset($_POST["salaire"])&&
        isset($_POST["image"]) &&
        isset($_POST["idfk"]) // Adding check for idfk


	){
		if (
            !empty($_POST["titreoffre"]) && 
            !empty($_POST["datelimit"]) && 
            !empty($_POST["typecontrat"]) && 
            !empty($_POST["salaire"])  &&
            !empty($_POST["idfk"]) // Adding check for idfk



        ) {
            $evt = new Event(
                $_POST['titreoffre'],
                $_POST['datelimit'], 
                $_POST['typecontrat'],
                $_POST['salaire'],
                $_POST['image'] ,
                $_POST['idfk'] 


			);
			
            $eventC->modifierevent($evt, $_GET['IDoffre']);
            header('refresh:2;url=afficherevents.php');
        }
        else
            $error = "Missing information";
	}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Modifier l'offre d'emploi</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../BackAssets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../BackAssets/vendors/iconfonts/ionicons/dist/css/ionicons.css">
    <link rel="stylesheet" href="../BackAssets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../BackAssets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="../BackAssets/vendors/css/vendor.bundle.addons.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="../BackAssets/css/shared/style.css">
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../BackAssets/css/demo_1/style.css">
    <!-- End Layout styles -->
    <link rel="shortcut icon" href="../BackAssets/images/favicon.ico" />
  </head>
  <body>
  <div id="error">
            <?php echo $error; ?>
   </div>

        <?php
			if (isset($_GET['IDoffre'])){
				$evt = $eventC->recupererevent($_GET['IDoffre']);
				
        ?>
        
    <div class="container-scroller">
      <!-- partial:../../partials/_navbar.html -->
      <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
          <a class="navbar-brand brand-logo" href="index.html">
            <img src="../BackAssets/images/" alt="logo" /> </a>
          <a class="navbar-brand brand-logo-mini" href="index.html">
            <img src="../BackAssets/images/" alt="logo" /> </a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center">
          <ul class="navbar-nav">
            <li class="nav-item font-weight-semibold d-none d-lg-block">Help :+21655660743</li>
            <li class="nav-item dropdown language-dropdown">
              <a class="nav-link dropdown-toggle px-2 d-flex align-items-center" id="LanguageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <div class="d-inline-flex mr-0 mr-md-3">
                  <div class="flag-icon-holder">
                    <i class="flag-icon flag-icon-us"></i>
                  </div>
                </div>
                <span class="profile-text font-weight-medium d-none d-md-block">English</span>
              </a>
              <div class="dropdown-menu dropdown-menu-left navbar-dropdown py-2" aria-labelledby="LanguageDropdown">
                <a class="dropdown-item">
                  <div class="flag-icon-holder">
                    <i class="flag-icon flag-icon-us"></i>
                  </div>English
                </a>
                <a class="dropdown-item">
                  <div class="flag-icon-holder">
                    <i class="flag-icon flag-icon-fr"></i>
                  </div>French
                </a>
                <a class="dropdown-item">
                  <div class="flag-icon-holder">
                    <i class="flag-icon flag-icon-ae"></i>
                  </div>Arabic
                </a>
                <a class="dropdown-item">
                  <div class="flag-icon-holder">
                    <i class="flag-icon flag-icon-ru"></i>
                  </div>Russian
                </a>
              </div>
            </li>
          </ul>
          <form class="ml-auto search-form d-none d-md-block" action="#">
            <div class="form-group">
              <input type="search" class="form-control" placeholder="Search Here">
            </div>
          </form>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
              <a class="nav-link count-indicator" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <i class="mdi mdi-bell-outline"></i>
                <span class="count">7</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="messageDropdown">
                <a class="dropdown-item py-3">
                  <p class="mb-0 font-weight-medium float-left">You have 7 unread mails </p>
                  <span class="badge badge-pill badge-primary float-right">View all</span>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="../BackAssets/images/faces/face10.jpg" alt="image" class="img-sm profile-pic">
                  </div>
                  <div class="preview-item-content flex-grow py-2">
                    <p class="preview-subject ellipsis font-weight-medium text-dark">oussema </p>
                    <p class="font-weight-light small-text"> The meeting is cancelled </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="../BackAssets/images/faces/face12.jpg" alt="image" class="img-sm profile-pic">
                  </div>
                  <div class="preview-item-content flex-grow py-2">
                    <p class="preview-subject ellipsis font-weight-medium text-dark">skander </p>
                    <p class="font-weight-light small-text"> The meeting is cancelled </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="../BackAssets/images/faces/face1.jpg" alt="image" class="img-sm profile-pic">
                  </div>
                  <div class="preview-item-content flex-grow py-2">
                    <p class="preview-subject ellipsis font-weight-medium text-dark">douja </p>
                    <p class="font-weight-light small-text"> The meeting is cancelled </p>
                  </div>
                </a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link count-indicator" id="notificationDropdown" href="#" data-toggle="dropdown">
                <i class="mdi mdi-email-outline"></i>
                <span class="count bg-success">3</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="notificationDropdown">
                <a class="dropdown-item py-3 border-bottom">
                  <p class="mb-0 font-weight-medium float-left">You have 4 new notifications </p>
                  <span class="badge badge-pill badge-primary float-right">View all</span>
                </a>
                <a class="dropdown-item preview-item py-3">
                  <div class="preview-thumbnail">
                    <i class="mdi mdi-alert m-auto text-primary"></i>
                  </div>
                  <div class="preview-item-content">
                    <h6 class="preview-subject font-weight-normal text-dark mb-1">Application Error</h6>
                    <p class="font-weight-light small-text mb-0"> Just now </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item py-3">
                  <div class="preview-thumbnail">
                    <i class="mdi mdi-settings m-auto text-primary"></i>
                  </div>
                  <div class="preview-item-content">
                    <h6 class="preview-subject font-weight-normal text-dark mb-1">Settings</h6>
                    <p class="font-weight-light small-text mb-0"> Private message </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item py-3">
                  <div class="preview-thumbnail">
                    <i class="mdi mdi-airballoon m-auto text-primary"></i>
                  </div>
                  <div class="preview-item-content">
                    <h6 class="preview-subject font-weight-normal text-dark mb-1">New user registration</h6>
                    <p class="font-weight-light small-text mb-0"> 2 days ago </p>
                  </div>
                </a>
              </div>
            </li>
            <li class="nav-item dropdown d-none d-xl-inline-block user-dropdown">
              <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <img class="img-xs rounded-circle" src="../BackAssets/images/faces/a.jpg" alt="Profile image"> </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                <div class="dropdown-header text-center">
                  <img class="img-md rounded-circle" src="../BackAssets/images/faces/a.jpg" alt="Profile image">
                  <p class="mb-1 mt-3 font-weight-semibold">Mohamed Cherif</p>
                  <p class="font-weight-light text-muted mb-0">mohamed.aziz.cherif1@esprit.tn</p>
                </div>
                <a class="dropdown-item">My Profile <span class="badge badge-pill badge-danger">1</span><i class="dropdown-item-icon ti-dashboard"></i></a>
                <a class="dropdown-item">Messages<i class="dropdown-item-icon ti-comment-alt"></i></a>
                <a class="dropdown-item">Activity<i class="dropdown-item-icon ti-location-arrow"></i></a>
                <a class="dropdown-item">FAQ<i class="dropdown-item-icon ti-help-alt"></i></a>
                <a class="dropdown-item">Sign Out<i class="dropdown-item-icon ti-power-off"></i></a>
              </div>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="profile-image">
                  <img class="img-xs rounded-circle" src="../BackAssets/images/faces/a.jpg" alt="profile image">
                  <div class="dot-indicator bg-success"></div>
                </div>
                <div class="text-wrapper">
                  <p class="profile-name"><?php echo $_SESSION['nom']. " " . $_SESSION['prenom']   ?></p>
                </div>
              </a>
            </li>
            <li class="nav-item nav-category">Main Menu</li>
            <li class="nav-item">
              <a class="nav-link" href="afficherclients.php" >
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Afficher condidats</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="afficherevents.php">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Afficher les offres</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="ajouterEvent.php">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Ajouter offre</span>
              </a>
            </li>
          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper"> 
          <!-- chnektbou hna ,yatik 3aasbaaaaaaaaaaa -->
          <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Modifier condidat</h4>
                    <form action="" method="POST" class="form-sample">

                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">ID Offre</label>
                            <div class="col-sm-9">
                            <input type="text" class="form-control" name="IDoffre" id="IDoffre"  value = "<?php echo $evt['IDoffre']; ?>" disabled>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Titre de l'offre</label>
                            <div class="col-sm-9">
                            <input type="text" class="form-control" name="titreoffre" id="titreoffre" maxlength="20" value = "<?php echo $evt['titreoffre']; ?>" required>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                       <div class="col-md-6">
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Date limite</label>
        <div class="col-sm-9">
            <!-- Change input type to date and set the value to current date -->
            <input type="date" class="form-control" name="datelimit" id="datelimit" value="<?php echo date('Y-m-d'); ?>"required>
        </div>
    </div>
</div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">salaire</label>
                            <div class="col-sm-9">
                            <input type="number" class="form-control" name="salaire" id="salaire" maxlength="20" value = "<?php echo $evt['salaire']; ?>"required>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                      <div class="col-md-6">
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Type de contrat</label>
        <div class="col-sm-9">
            <!-- Change input type to text -->
            <input type="text" class="form-control" name="typecontrat" id="typecontrat" value="<?php echo $evt['typecontrat']; ?>"required>
        </div>
    </div>
</div>

<div class="col-md-6">
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">ID de l'utilisateur</label>
        <div class="col-sm-9">
            <!-- Change input type to text -->
            <input type="text" class="form-control" name="idfk" id="idfk" value="<?php echo $evt['idfk']; ?>"required>
        </div>
    </div>
</div>

<div class="col-md-6">
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">PDF</label>
        <div class="col-sm-9">
            <input id="image" name="image" type="file" class="form-control"required>
        </div>
    </div>
</div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group row">
                            <div class="col-sm-9">                          
                            <input type="submit" value="Modifier" name = "modifer" class="btn btn-success btn-fw"> 

                            <input type="reset" value="Annuler" class="btn btn-warning btn-fw" onclick="window.location.href='afficherevents.php';">

                            </div>
                          </div>
                        </div>
                    </form>
                  </div>
                </div>
              </div>

		<?php
		}
        ?>
            </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <footer class="footer">
            <div class="container-fluid clearfix">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin templates</a> from Bootstrapdash.com</span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../BackAssets/vendors/js/vendor.bundle.base.js"></script>
    <script src="../BackAssets/vendors/js/vendor.bundle.addons.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="../BackAssets/js/shared/off-canvas.js"></script>
    <script src="../BackAssets/js/shared/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="../BackAssets/js/shared/jquery.cookie.js" type="text/javascript"></script>
    <!-- End custom js for this page-->
    
  </body>
</html>


