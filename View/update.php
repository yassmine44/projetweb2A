<?php
require_once 'C:\xampp\htdocs\Test\us\Controller\user.php';
require_once 'C:\xampp\htdocs\Test\us\config.php';
session_start();
if (isset($_SESSION['id'])) {
  $utilisateur = new user();
  $donnee = $utilisateur->getUserById($_SESSION['id']);
  if($donnee['etat']=='ban'){
  header('Location: 404.php');
  exit;
  }
}
if (!isset($_SESSION['id'])) {
  // L'utilisateur n'est pas connecté, vous pouvez rediriger l'utilisateur vers une page de connexion ou afficher un message d'erreur.
  header('Location: login.php');
  exit;
}
// Inclure les fichiers nécessaires // Assurez-vous que config.php est correctement inclus et défini

// Initialisez la variable d'erreur
$errors = [];
$fonction="user";
// Vérifie si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérifie si les valeurs sont définies dans $_POST
    if (
        isset($_POST['uprenom']) && 
        isset($_POST['unom']) && 
        isset($_POST['uage']) && 
        isset($_POST['umdp'])
    ) {
        // Vérifie si tous les champs sont remplis
        if (
            !empty($_POST['uprenom']) &&
            !empty($_POST["unom"]) &&
            !empty($_POST["uage"]) &&
            !empty($_POST["umdp"])
        ) {
                // Crée un nouvel utilisateur
                $user = new user();
                $user->updateusera($_SESSION['id'],$_POST['uprenom'],$_POST['unom'],$_POST['uage'],$_POST['uemail'],$_POST['umdp'],$_POST['ufonction'],$_POST['uetat']);
                header('Location: login.php');
                echo ' <script>alert("MISE A JOUR EFFECTUEE")</script> ';
                exit; // Assurez-vous de terminer le script après la redirection
        } else {
            $errors['all'] = "Tous les champs du formulaire doivent être remplis.";
        }
    } else {
        $errors['fields'] = "Certains champs sont manquants dans le formulaire.";
    }
}
if (isset($_POST['deleteAccount'])) {
  // Appelez la méthode pour supprimer l'utilisateur
  $user = new user();

  $user->supprimeruser($_SESSION['id']);

  // Déconnectez l'utilisateur et redirigez-le vers la page de connexion
  session_destroy();
  header('Location: login.php');
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">
  <!-- Mirrored from themeim.com/demo/sword/register.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Mar 2024 14:45:37 GMT -->
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

<header class="header-section header-section-two header-section-three">
      <div class="header">
        <div class="header-bottom-area">
          <div class="container-fluid">
            <div class="header-menu-content">
              <nav class="navbar navbar-expand-xl p-0">
                <a class="site-logo site-title" href="index.php"
                  ><img src="assets/images/logo-2.png" alt="site-logo"
                /></a>
                <button
                  class="navbar-toggler ml-auto"
                  type="button"
                  data-toggle="collapse"
                  data-target="#navbarSupportedContent"
                  aria-controls="navbarSupportedContent"
                  aria-expanded="false"
                  aria-label="Toggle navigation"
                >
                  <span class="fas fa-bars"></span>
                </button>
                <div
                  class="collapse navbar-collapse"
                  id="navbarSupportedContent"
                >
                  <ul class="navbar-nav main-menu">
                    <li class="menu_has_children">
                      <a href="#0">HOME</a>
                      <ul class="sub-menu">
                        <li><a href="index.php">HOME ONE</a></li>
                        <li><a href="index-two.php">HOME TWO</a></li>
                      </ul>
                    </li>
                    <li><a href="about.php">ABOUT US</a></li>
                    <li class="menu_has_children">
                      <a href="#0">TRAINING</a>
                      <ul class="sub-menu">
                        <li><a href="training.php">TRAINING</a></li>
                        <li>
                          <a href="training-details.php">TRAINING DETAILS</a>
                        </li>
                      </ul>
                    </li>
                    <li class="menu_has_children">
                      <a href="#0">PAGES</a>
                      <ul class="sub-menu">
                        <li><a href="event.php">EVENTS</a></li>
                        <li><a href="event-details.php">EVENT DETAILS</a></li>
                        <li><a href="plan.php">PRICING PLAN</a></li>
                        <li><a href="faq.php">FAQ</a></li>
                        <li><a href="gallery.php">GALLERY</a></li>
                        <li><a href="apply.php">APPLY</a></li>
                        <li><a href="register.php">SIGN UP</a></li>
                        <li><a href="login.php">SIGN IN</a></li>
                        <li><a href="404.php">404 PAGE</a></li>
                      </ul>
                    </li>
                    <li class="menu_has_children">
                      <a href="#0">MASTERS</a>
                      <ul class="sub-menu">
                        <li><a href="master.php">MASTERS</a></li>
                        <li>
                          <a href="master-details.php">MASTERS DETAILS</a>
                        </li>
                      </ul>
                    </li>
                    <li class="menu_has_children">
                      <a href="#0">NEWS</a>
                      <ul class="sub-menu">
                        <li><a href="blog.php">NEWS</a></li>
                        <li><a href="blog-classic.php">NEWS CLASSIC</a></li>
                        <li><a href="blog-details.php">NEWS DETAILS</a></li>
                      </ul>
                    </li>
                    <li><a href="contact.php">CONTACT US</a></li>
                  </ul>
                  <div class="header-right">
                    <div class="header-action-area">
                      <div class="header-action">
                        <a href="apply.php" class="btn--base"
                          >APPLY NOW <i class="fas fa-arrow-right ml-2"></i
                        ></a>
                        <?php
                          if (isset($_SESSION['nom'])) {
                            echo '<a href="update.php" class="welcome-link">';
                            if (is_array($_SESSION['nom'])) {
                                foreach ($_SESSION['nom'] as $nom) {
                                    echo "Bienvenue, $nom";
                                }
                            } else {
                                echo "Bienvenue, {$_SESSION['nom']}";
                            }
                            echo '</a>';
                          }
                        ?>
                      </div>
                    </div>
                  </div>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    End Header
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Start Banner
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section
      class="banner-section banner-section-two inner-banner-section bg-overlay-red bg_img"
      data-background="assets/images/bg/bg-12.png"
    >
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
              <h1 class="title">UPDATE</h1>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="breadcrumb-area">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">UPDATE</li>
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
              <h3 class="title">UPDATE YOUR ACCOUNT</h3>
              <form class="account-form"  method="post">
                <div class="row justify-content-center mb-20-none">
                  <div class="col-xl-12 form-group">
                    <label>First Name</label>
                    <input
                      type="text"
                      class="form--control"
                      placeholder="joe"
                      name="uprenom" id="uprenom"
                      required 
                      pattern="[a-zA-Z]{2,12}"
                    />
                    <span id="prenom-error" class="error-message"></span>
                  </div>
                  <div class="col-xl-12 form-group">
                    <label>Last Name</label>
                    <input
                      type="text"
                      class="form--control"
                      placeholder="Doe"
                      name="unom" id="unom"
                      required 
                      pattern="[a-zA-Z]{2,12}"
                    />
                    <span id="nom-error" class="error-message"></span>
                  </div>

                  <div class="col-xl-12 form-group">
                    <label>Age</label>
                    <input
                      type="number"
                      class="form--control"
                      placeholder="0"
                      name="uage" id="uage"
                      required 
                      min="0" max="150"
                    />
                    <span id="age-error" class="error-message"></span>
                  </div>

                  <div class="col-xl-12 form-group">
                    <label>Password</label>
                    <input
                      type="password"
                      class="form--control"
                      placeholder="****************"
                      name="umdp" id="umdp"
                      required
                    />
                    <span id="mdp-error" class="error-message"></span>
                  </div>

                  <div class="col-xl-12 form-group text-center">
                    <button type="submit" class="btn--base">
                      Update<i class="fas fa-arrow-right ml-2"></i>
                    </button>
                  </div>
                </div>
              </form>
                <div class="col-xl-12 form-group text-center">
                  <form action="update.php" method="post">
                    <input type="hidden" name="deleteAccount" value="true">
                      <button type="submit" class="btn--danger" onclick="return confirm('Are you sure you want to delete your account?')">
                      Delete Account<i class="fas fa-trash ml-2"></i>
                      </button>
                  </form>
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
    <footer class="footer-section pt-120">
      <div class="footer-bg">
      <img src="assets/images/bg/bg-4.png" alt="bg" />
      </div>
      <div class="footer-element">
        <img src="assets/images/element/element-6.png" alt="element" />
      </div>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-12">
            <div class="footer-top">
              <div class="footer-logo">
                <a href="index.php" class="site-logo"
                  ><img src="assets/images/logo-white.png" alt="logo"
                /></a>
              </div>
              <ul class="footer-social">
                <li>
                  <a href="#0"><i class="fab fa-facebook-f"></i></a>
                </li>
                <li>
                  <a href="#0"><i class="fab fa-twitter"></i></a>
                </li>
                <li>
                  <a href="#0"><i class="fab fa-google-plus-g"></i></a>
                </li>
                <li>
                  <a href="#0"><i class="fab fa-instagram"></i></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xl-12">
            <div class="footer-widget">
              <form class="subscribe-form">
                <label class="subscribe-icon"
                  ><i class="las la-envelope"></i
                ></label>
                <input
                  type="text"
                  class="form--control"
                  placeholder="Enter Your Email Address"
                />
                <button type="submit" class="btn--base">GET ALART</button>
              </form>
              <ul class="footer-list">
                <li><a href="index.php">HOME</a></li>
                <li><a href="about.php">ABOUT US</a></li>
                <li><a href="training.php">TRAINING</a></li>
                <li><a href="master.php">MASTER</a></li>
                <li><a href="blog.php">NEWS</a></li>
                <li><a href="event.php">EVENT</a></li>
                <li><a href="contact.php">CONTACT US</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-xl-8 text-center">
            <div class="copyright-area">
              <p>JOBFLEX</p>
            </div>
          </div>
        </div>
      </div>
    </footer>
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

  <!-- Mirrored from themeim.com/demo/sword/register.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Mar 2024 14:45:37 GMT -->
</html>
