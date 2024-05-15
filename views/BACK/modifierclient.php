<?php
    include "../../controller/clientC.php";
    include_once '../../model/client.php';
  
    session_start();
    $clientC = new clientC();
    $error = "";
    
    if (
        isset($_POST["nom"]) && 
        isset($_POST["prenom"]) &&
        isset($_POST["email"]) && 
        isset($_POST["login"])&&
        isset($_POST["password"]) &&
        isset($_POST["cv"]) &&
        isset($_POST["exp"])
    ){
        if (
            !empty($_POST["nom"]) && 
            !empty($_POST["prenom"]) && 
            !empty($_POST["email"]) && 
            !empty($_POST["login"]) &&
            !empty($_POST["password"]) &&
            !empty($_POST["cv"]) &&
            !empty($_POST["exp"])
        ) {
            $user = new client(
                $_POST['nom'],
                $_POST['prenom'], 
                $_POST['email'],
                $_POST['login'],
                $_POST['password'],
                $_POST['cv'],
                $_POST['exp']
            );
            
            $clientC->modifierclient($user, $_GET['id']);
            echo "<script>alert('A candidate modified successfully'); window.location.href = '../BACK/affichercl.php';</script>";
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
            if (isset($_GET['id'])){
                $user = $clientC->recupererclient($_GET['id']);
        ?>
        
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Modifier condidat</h4>
                    <form class="form-sample" action="" method="POST" onsubmit="return verif()">
                        <!-- Form fields here -->
                        <p class="card-description"> Fiche Personnelle : </p>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">ID</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="id" id="id" value="<?php echo $user['id']; ?>" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Contact Information (Phone Number):
</label>
                                    <div class="col-sm-9">
                                        <input type="tel" class="form-control" name="nom" id="nom" maxlength="20" value="<?php echo $user['nom']; ?>"placeholder="+216" >
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">skills</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="prenom" id="prenom" maxlength="20" value="<?php echo $user['prenom']; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Education level</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="email" id="email"  value="<?php echo $user['email']; ?>">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">country</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="login" id="login" value="<?php echo $user['login']; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Creer Objective</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="password" id="password" value="<?php echo $user['password']; ?>">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">CV</label>
                                    <div class="col-sm-9">
                                        <input type="file" class="form-control" name="cv" id="cv" value="<?php echo $user['cv']; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Exp</label>
                                    <div class="col-sm-9">
                                        <input type="number" class="form-control" name="exp" id="exp" value="<?php echo $user['exp']; ?>">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                               <input type="submit" value="Modifier" name="modifier" >
<input type="reset" value="Annuler" class="btn btn-warning btn-fw" onclick="window.location.href='../BACK/affichercl.php';">
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
        let nom = document.getElementById("nom").value.trim();
        let prenom = document.getElementById("prenom").value.trim();
        let login = document.getElementById("login").value.trim();
        let password = document.getElementById("password").value.trim();
        let cv = document.getElementById("cv").value.trim();
        let exp = document.getElementById("exp").value.trim();

        // Regular expression for phone number (starts with +216 followed by 8 digits)
        let phoneRegex = /^\+216[0-9]{8}$/;

        // Regular expression for letters only
        let lettersRegex = /^[a-zA-Z\s]{15,}$/;

        // Check if nom is a valid phone number
        if (!phoneRegex.test(nom)) {
            alert("Veuillez saisir un numéro de téléphone valide (format: +216XXXXXXXX).");
            return false;
        }

        // Check if prenom contains only letters and has at least 15 characters
        if (!lettersRegex.test(prenom)) {
            alert("Les skills doit contenir uniquement des lettres et avoir au moins 15 caractères.");
            return false;
        }

        // Check if login contains only letters and has at least 15 characters


        // Check if password is not empty
        if (password === "") {
            alert("Veuillez saisir votre objectif de carrière.");
            return false;
        }

        // Check if cv is not empty and is a PDF file
        let fileExtension = cv.split('.').pop().toLowerCase();
        if (fileExtension !== 'pdf') {
            alert("Veuillez sélectionner un fichier PDF pour votre CV.");
            return false;
        }

        // Check if exp is not empty and is a positive number less than or equal to 99
        if (exp === "" || isNaN(parseInt(exp)) || parseInt(exp) < 0 || parseInt(exp) > 99) {
            alert("Veuillez saisir un nombre positif et inférieur ou égal à 99 pour l'expérience.");
            return false;
        }

        // Add more validation rules as needed for other fields

        return true;
    }
</script>
  </body>

</html>
