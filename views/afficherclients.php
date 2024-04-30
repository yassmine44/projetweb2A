<?php
session_start(); 
include "../controller/clientC.php";

$clientC = new clientC();
$listeUsers = $clientC->afficherclients();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Liste des condidats</title>
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
      <!-- Add your navbar code here -->
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_sidebar.html -->
        <!-- Add your sidebar code here -->
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper"> 
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">condidat</h4>
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>contact information</th>
                      <th>skills</th>
                      <th>education</th>
                      <th>career</th>
                      <th>CV</th> <!-- Added CV column header -->
                      <th>Exp</th> <!-- Added Exp column header -->
                      <th>Supprimer</th>
                      <th>Modifier</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach($listeUsers as $user): ?>
                      <tr>
                        <td><?php echo $user['id']; ?></td>
                        <td><?php echo $user['nom']; ?></td>
                        <td><?php echo $user['prenom']; ?></td>
                        <td><?php echo $user['email']; ?></td>
                        <td><?php echo $user['login']; ?></td>
                        <td>
                            <?php
                            // Check if CV value exists
                            if (!empty($user['cv'])) {
                                // Display the CV
                                echo '<img src="/5555c/FrontAssets/images/' . $user['cv'] . '" style="max-width: 100px; max-height: 100px;" />';
                            } else {
                                echo 'No CV';
                            }
                            ?>
                        </td>
                        <td><?php echo $user['exp']; ?></td> <!-- Display Exp value -->
                        <td>
                          <form method="POST" action="supprimerclient.php">
                            <input type="submit" class="btn btn-danger btn-fw" name="supprimer" value="Supprimer">
                            <input type="hidden" value="<?php echo $user['id']; ?>" name="id">
                          </form>
                        </td>
                        <td>
                        <a class="btn btn-primary btn-fw" href="/thisis/views/modifierclient.php?id=<?php echo $user['id']; ?>">Modifier</a>
                        </td>
                      </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <!-- Add your footer code here -->
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
    <script  src="../BackAssets/js/shared/jquery.cookie.js" type="text/javascript"></script>
    <!-- End custom js for this page-->
  </body>
</html>
