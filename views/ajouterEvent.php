<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>dashboard gestion des offres</title>
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
<div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <!-- Your navbar code -->
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_sidebar.html -->
        <!-- Your sidebar code -->
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                <?php
                include_once '../model/event.php';
                include_once '../controller/eventC.php';

                $error = "";

                // create an instance of the controller
                $eventC = new eventC();
                if (
                    isset($_POST["titreoffre"])  &&
                    isset($_POST["datelimit"]) &&
                    isset($_POST["typecontrat"]) &&
                    isset($_POST["salaire"]) &&
                    isset($_POST["image"]) &&
                    isset($_POST["idfk"])
                ) {

                    if (
                        !empty($_POST["titreoffre"]) &&
                        !empty($_POST["datelimit"]) &&
                        !empty($_POST["typecontrat"]) &&
                        !empty($_POST["salaire"]) &&
                        !empty($_POST["image"]) &&
                        !empty($_POST["idfk"])

                    ) {
                        $event = new Event(
                            $_POST['titreoffre'],
                            $_POST['datelimit'],
                            $_POST['typecontrat'],
                            $_POST['salaire'],
                            $_POST['image'],
                            $_POST['idfk']

                        );
                        $eventC->ajouterevent($event);
                    } else
                        $error = "Missing information";
                }
                ?>
                <div class="col-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Ajout d'un offre</h4>
                            <div id="error">
                                <?php echo $error; ?>
                            </div>
                            <form class="form-sample" action="" method="POST" onsubmit="return verif()">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Titre De L'offre</label>
                                            <div class="col-sm-9">
                                                <input id="titreoffre" name="titreoffre" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Date De L'offre</label>
                                            <div class="col-sm-9">
                                                <input id="datelimit" name="datelimit" type="date" placeholder="yyyy/mm/dd" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label"> Type De Contrat</label>
                                            <div class="col-sm-9">
                                                <select id="typecontrat" name="typecontrat" class="form-control">
                                                    <option value="">Select Type De Contrat</option>
                                                    <option value="CDI">Contrat à durée indéterminée</option>
                                                    <option value="CDD">Contrat à durée déterminée</option>
                                                    <option value="Stage">Stage</option>
                                                    <option value="Alternance">Alternance</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Salaire</label>
                                            <div class="col-sm-9">
                                                <input id="salaire" name="salaire" type="number" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">IDUser</label>
                                            <div class="col-sm-9">
                                                <input id="idfk" name="idfk" type="number" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Pdf De L'offre</label>
                                            <div class="col-sm-9">
                                                <input id="image" name="image" type="file" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-success btn-fw">ADD</button>
                                <button type="reset" class="btn btn-danger btn-fw">Reset</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
            <!-- partial:../../partials/_footer.html -->
            <footer class="footer">
                <div class="container-fluid clearfix">
                    <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © JOBLEX 2024</span>
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

<!-- End custom js for this page-->
</body>
</html>
