
<?php



require_once __DIR__ . '/../Controller/user.php'; // Chemin relatif vers user.php
require_once __DIR__ . '/../Model/users.php'; // Chemin relatif vers users.php
require_once __DIR__ . '/../config.php'; // Chemin relatif vers config.php

require_once __DIR__ . '/../vendor/autoload.php'; // Assurez-vous que config.php est correctement inclus et défini

// Initialisez la variable d'erreur
$errors = [];

// Vérifie si le formulaire a été soumis



session_start();
if (isset($_SESSION['id'])) {
  $utilisateur = new user();
  $donnee = $utilisateur->getUserById($_SESSION['id']);
  if($donnee['etat']=='ban'){
  header('Location: 404.php');
  exit;
  }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérifie si les valeurs sont définies dans $_POST
    if (
        isset($_POST['emailo'])
    ) {
        // Vérifie si tous les champs sont remplis
        if (
            !empty($_POST['emailo'])
        ) {

            $user=new user();
            if($user->iduser($_POST['emailo'])){
              echo '<script>alert("Please check your inbox.")</script>';
                $token=$user->generateToken();
                $user->sendPasswordResetEmail($_POST['emailo'], $token);
                $user->updateTokenByEmail($_POST['emailo'], $token);
            }
            else
            echo '<script>alert("Invalid email.")</script>';



            
        } else {
            $errors['all'] = "Tous les champs doivent être remplis.";
        }
    } else {
        $errors['fields'] = "Certains champs sont manquants.";
    }
}
?>





<!DOCTYPE html>
<html lang="en">
  <!-- Mirrored from themeim.com/demo/sword/login.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Mar 2024 14:45:37 GMT -->
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>JOBFLEX</title>
    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap"
      rel="stylesheet"
    />
    <!-- fontawesome css link -->
    <link rel="stylesheet" href="assets/css1/fontawesome-all.min.css" />
    <!-- bootstrap css link -->
    <link rel="stylesheet" href="assets/css1/bootstrap.min.css" />
    <!-- favicon -->
    <link
      rel="shortcut icon"
      href="assets/images/fav.png"
      type="image/x-icon"
    />
    <!-- swipper css link -->
    <link rel="stylesheet" href="assets/css1/swiper.min.css" />
    <!-- lightcase css links -->
    <link rel="stylesheet" href="assets/css1/lightcase.css" />
    <!-- odometer css link -->
    <link rel="stylesheet" href="assets/css1/odometer.css" />
    <!-- line-awesome-icon css -->
    <link rel="stylesheet" href="assets/css1/icomoon.css" />
    <!-- line-awesome-icon css -->
    <link rel="stylesheet" href="assets/css1/line-awesome.min.css" />
    <!-- animate.css -->
    <link rel="stylesheet" href="assets/css1/animate.css" />
    <!-- aos.css -->
    <link rel="stylesheet" href="assets/css1/aos.css" />
    <!-- nice select css -->
    <link rel="stylesheet" href="assets/css1/nice-select.css" />
    <!-- flipclock css -->
    <link rel="stylesheet" href="assets/css1/flipclock.css" />
    <!-- main style css link -->
    <link rel="stylesheet" href="assets/css1/style.css" />
  </head>
  <body>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Start Preloader
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    


    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Start Banner
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
  
      <div class="section-logo-text">
        <span class="title">JOBFLEX</span>
      </div>
      <div class="container-fluid">
        <div class="row justify-content-center align-items-end mb-30-none">
          <div class="col-xl-12 col-lg-12 text-center mb-30">
            <div
              class="banner-content"
              data-aos="fade-up"
              data-aos-duration="1800"
            >
              <h1 class="title">Password change</h1>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="breadcrumb-area">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">password change</li>
        </ol>
      </nav>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    End Banner
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Start Scroll-To-Top
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <a href="#" class="scrollToTop">
      <img src="assets/images/element/top.png" alt="element" />
      <div class="scrollToTop-icon">
        <i class="fas fa-arrow-up"></i>
      </div>
    </a>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    End Scroll-To-Top
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Start Account
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    
      <div class="container">
        <div class="row justify-content-center mb-10-none">
          <div class="col-xl-5 col-lg-6 col-md-8">
            <div class="account-form-area">
              <h3 class="title">Forgot your password?</h3>
              <form class="account-form" action="" method="post">
                <div class="row justify-content-center mb-20-none">
                  <div class="col-xl-12 form-group">
                    <label>Mail adress</label>
                    <input
                      type="email"
                      class="form--control"
                      placeholder="example@email.com"
                      name="emailo"
                      id="emailo"
                      required
                    />
                  </div>
                  <div class="col-xl-12 form-group text-center">
                    <button type="submit" class="btn--base">
                      Send <i class="fas fa-arrow-right ml-2"></i>
                    </button>
                  </div>
                </div>
              </form>
              <div class="forgot-password-area">
                <p><a href="http://localhost/Test/us/View/login.php">Log-in</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    End Account
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Start Footer
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
   
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    End Footer
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!-- jquery -->
    <script src="assets/js/jquery.js"></script>
    <!-- bootstrap js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- swipper js -->
    <script src="assets/js/swiper.min.js"></script>
    <!-- lightcase js-->
    <script src="assets/js/lightcase.js"></script>
    <!-- odometer js -->
    <script src="assets/js/odometer.min.js"></script>
    <!-- viewport js -->
    <script src="assets/js/viewport.jquery.js"></script>
    <!-- progress js -->
    <script src="assets/js/circle-progress.min.js"></script>
    <!-- aos js file -->
    <script src="assets/js/aos.js"></script>
    <!-- nice select js -->
    <script src="assets/js/jquery.nice-select.js"></script>
    <!-- paroller js -->
    <script src="assets/js/jquery.paroller.min.js"></script>
    <!-- flipclock js -->
    <script src="assets/js/flipclock.min.js"></script>
    <!-- countdown js -->
    <script src="assets/js/jquery.countdown.min.js"></script>
    <!-- easypiechart js -->
    <script src="assets/js/jquery.easypiechart.js"></script>
    <!-- isotope js -->
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <!-- preloader js -->
    <script src="assets/js/preloader.js"></script>
    <!-- main -->
    <script src="assets/js/main.js"></script>
  </body>

  <!-- Mirrored from themeim.com/demo/sword/login.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Mar 2024 14:45:37 GMT -->
</html>
