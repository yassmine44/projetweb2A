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
            echo "<script>alert('A JOB OFFER modified successfully'); window.location.href = '/thisis/views/BACK/afficherof.php';</script>";
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
    <title>Modifier le condidat</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../BackAssets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../BackAssets/vendors/iconfonts/ionicons/dist/css/ionicons.css">
    <link rel="stylesheet" href="../BackAssets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../BackAssets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="../BackAssets/vendors/css/vendor.bundle.addons.css">
    <!-- endinject -->
    <!-- inject:css -->
    <link rel="stylesheet" href="../BackAssets/css/shared/style.css">
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../BackAssets/css/demo_1/style.css">
    <!-- End Layout styles -->
    <link rel="shortcut icon" href="../BackAssets/images/favicon.ico" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:../../partials/_navbar.html -->
      <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <!-- Navbar content -->
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_sidebar.html -->
        <!-- Sidebar content -->
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper"> 
              
          <!-- Your HTML code goes here -->

          <div id="error">
            <?php echo $error; ?>
          </div>
        
          <?php
			if (isset($_GET['IDoffre'])){
				$evt = $eventC->recupererevent($_GET['IDoffre']);
				
        ?>
        
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <form class="form-sample" action="" method="POST" onsubmit="return verif()">
                        <!-- Form fields here -->
                        <p class="card-description"> l'offre a Modif : </p>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">IDOFFRE</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="IDoffre" id="IDoffre" value="<?php echo $evt['IDoffre']; ?>" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Titre De l'Offre:</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" name="titreoffre" id="titreoffre"  value="<?php echo $evt['titreoffre']; ?>">
        </div>
    </div>
</div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Date Limite d'offre</label>
                                    <div class="col-sm-9">
                                        <input type="date" class="form-control" name="datelimit" id="datelimit"  value="<?php echo $evt['datelimit']; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Type De Contrat</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="typecontrat" id="typecontrat"  value="<?php echo $evt['typecontrat']; ?>">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Salaire d'offre</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="salaire" id="salaire" value="<?php echo $evt['salaire']; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">IDuser</label>
                                    <div class="col-sm-9">
                                        <input type="number" class="form-control" name="idfk" id="idfk" value="<?php echo $evt['idfk']; ?>">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">image d'offre</label>
                                    <div class="col-sm-9">
                                        <input type="file" class="form-control" name="image" id="image" value="<?php echo $evt['image']; ?>">
                                    </div>
                                </div>
                            </div>
                          
                        <div class="row">
                            <div class="col-md-6">
                               <input type="submit" value="Modifier" name="modifier" >
<input type="reset" value="Annuler" class="btn btn-warning btn-fw" onclick="window.location.href='/Applications/XAMPP/xamppfiles/htdocs/thisis/BACK/afficherof.php';">
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
            <!-- Footer content -->
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
    <script>
    function verif() {
        let titreoffre = document.getElementById("titreoffre").value.trim();
        let datelimit = document.getElementById("datelimit").value.trim();
        let typecontrat = document.getElementById("typecontrat").value.trim();
        let salaire = document.getElementById("salaire").value.trim();
        let idfk = document.getElementById("idfk").value.trim();
        let image = document.getElementById("image").value.trim();

        // Regular expression to match only uppercase letters
        let uppercaseRegex = /^[A-Z\s]+$/;

        // Current date
        let currentDate = new Date();
        if (titreoffre === "") {
            alert("Veuillez saisir le titre de l'offre.");
            return false;
        }

        // Check if titreoffre contains only uppercase letters
        if (!uppercaseRegex.test(titreoffre)) {
            alert("Votre titre de l'offre doit contenir uniquement des lettres majuscules.");
            return false;
        }

        // Check if datelimit is greater than the current date
        if (new Date(datelimit) <= currentDate) {
            alert("La date limite doit être supérieure à la date actuelle.");
            return false;
        }

        // Check if salaire is positive
        if (parseFloat(salaire) <= 0 || isNaN(parseFloat(salaire))) {
            alert("Le salaire doit être un nombre positif.");
            return false;
        }

        // Check if idfk is a valid user ID
        if (parseInt(idfk) < 0 || isNaN(parseInt(idfk))) {
            alert("L'ID de l'utilisateur doit être un entier positif supérieur à 10.");
            return false;
        }

        // Check if the image file extension is valid
        let validExtensions = ['png', 'jpg', 'jpeg'];
        let extension = image.split('.').pop().toLowerCase();
        if (!validExtensions.includes(extension)) {
            alert("L'image doit être au format PNG, JPG ou JPEG.");
            return false;
        }
        if (typecontrat === "") {
            alert("Veuillez sélectionner un type de contrat.");
            return false;
          }

        // Add more validation rules as needed for other fields

        return true;
    }
</script>

  </body>
</html>


