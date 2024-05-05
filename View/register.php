<?php
// Inclure les fichiers nécessaires
require_once 'C:\xampp\htdocs\Test\us\Controller\user.php';
require_once 'C:\xampp\htdocs\Test\us\config.php'; // Assurez-vous que config.php est correctement inclus et défini

// Initialisez la variable d'erreur
$errors = [];
$fonction="user";
$etat="actif";
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
        isset($_POST['prenom']) && 
        isset($_POST['nom']) && 
        isset($_POST['age']) && 
        isset($_POST['email']) && 
        isset($_POST['mdp'])
    ) {
        // Vérifie si tous les champs sont remplis
        if (
            !empty($_POST['prenom']) &&
            !empty($_POST["nom"]) &&
            !empty($_POST["age"]) &&
            !empty($_POST["email"]) &&
            !empty($_POST["mdp"])
        ) {
                // Crée un nouvel utilisateur
                $user = new user();
                if($user->addUser(new users($_POST['prenom'], $_POST['nom'], $_POST['age'], $_POST['email'], $_POST['mdp'],$fonction,$etat))==1){
                header('Location: login.php');
                exit; // Assurez-vous de terminer le script après la redirection
                }
                else{
                  echo '<script>alert("MAIL DEJA EXISTANT")</script>';
                
                  
                }
        } else {
            $errors['all'] = "Tous les champs du formulaire doivent être remplis.";
        }
    } else {
        $errors['fields'] = "Certains champs sont manquants dans le formulaire.";
    }
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
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Start Preloader
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
              <h1 class="title">SIGN-UP</h1>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="breadcrumb-area">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Sign-up</li>
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
              <h3 class="title">CREATE YOUR ACCOUNT</h3>
              <form class="account-form" action="" method="post" onsubmit="return validateForm()">
                <div class="row justify-content-center mb-20-none">
                  <div class="col-xl-12 form-group">
                    <label>First Name</label>
                    <input
                      type="text"
                      class="form--control"
                      placeholder="joe"
                      name="prenom" id="prenom"
                      
                      
                    />
                    <span id="prenom-error" class="error-message"></span>
                  </div>
                  <div class="col-xl-12 form-group">
                    <label>Last Name</label>
                    <input
                      type="text"
                      class="form--control"
                      placeholder="Doe"
                      name="nom" id="nom"
                    
                      
                      
                    />
                    <span id="nom-error" class="error-message"></span>
                  </div>

                  <div class="col-xl-12 form-group">
                    <label>Age</label>
                    <input
                      type="number"
                      class="form--control"
                      placeholder="0"
                      name="age" id="age"
                      
                      
                    />
                    <span id="age-error" class="error-message"></span>
                  </div>

                  <div class="col-xl-12 form-group">
                    <label>Email</label>
                    <input
                      type="email"
                      class="form--control"
                      placeholder="example@email.com"
                      name="email" id="email"
                      
                    />
                    <span id="email-error" class="error-message"></span>
                  </div>

                  <div class="col-xl-12 form-group">
                    <label>Password</label>
                    <input
                      type="password"
                      class="form--control"
                      placeholder="****************"
                      name="mdp" id="mdp"
                      
                    />
                    <span id="mdp-error" class="error-message"></span>
                  </div>

                  <div class="col-xl-12 form-group text-center">
                    <button type="submit" class="btn--base">
                      Sign-up <i class="fas fa-arrow-right ml-2"></i>
                    </button>
                  </div>
                </div>
              </form>
              <script>
  // Fonction pour vérifier la saisie du formulaire
  function validateForm() {
    // Récupérer les valeurs des champs
    var firstName = document.getElementById('prenom').value;
    var lastName = document.getElementById('nom').value;
    var age = document.getElementById('age').value;
    var email = document.getElementById('email').value;
    var password = document.getElementById('mdp').value;

    // Réinitialiser les messages d'erreur
    document.getElementById('prenom-error').innerHTML = '';
    document.getElementById('nom-error').innerHTML = '';
    document.getElementById('age-error').innerHTML = '';
    document.getElementById('email-error').innerHTML = '';
    document.getElementById('mdp-error').innerHTML = '';

    // Vérifier chaque champ
    var isValid = true;

    if (firstName === '') {
    document.getElementById('prenom').placeholder = 'First Name is required';
    isValid = false;
    } else if (!isValidName(firstName)) {
    document.getElementById('prenom').placeholder = 'Enter a valid first name';
    isValid = false;
    } else if (!/^[a-zA-Z]+$/.test(firstName)) {
    document.getElementById('prenom').placeholder = 'First Name must contain only letters';
    isValid = false;
    }

    if (lastName === '') {
      document.getElementById('nom').placeholder = 'Last Name is required';
      isValid = false;
    } else if (!isValidName(lastName)) {
      document.getElementById('nom').placeholder = 'Enter a valid last name';
      isValid = false;
    }else if (!/^[a-zA-Z]+$/.test(lastName)) {
    document.getElementById('nom').placeholder = 'last Name must contain only letters';
    isValid = false;
    }

    if (age === '') {
      document.getElementById('age').placeholder = 'Age is required';
      isValid = false;
    } else if (isNaN(age)) {
      document.getElementById('age').placeholder = 'Age must be a number';
      isValid = false;
    }

    if (email === '') {
      document.getElementById('email').placeholder = 'Email is required';
      isValid = false;
    } else if (!isValidEmail(email)) {
      document.getElementById('email').placeholder = 'Enter a valid email address';
      isValid = false;
    }

    if (password === '') {
      document.getElementById('mdp').placeholder = 'Password is required';
      isValid = false;
    }

    return isValid;
  }

  // Fonction pour vérifier le format de l'email
  function isValidEmail(email) {
    // Expression régulière pour vérifier le format de l'email
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
  }

  // Fonction pour vérifier le format du nom/prénom
  function isValidName(name) {
    // Expression régulière pour vérifier que le nom/prénom contient uniquement des lettres
    var nameRegex = /^[a-zA-Z]+$/;
    return nameRegex.test(name);
  }
  

</script>

            </div>
            <div class="account-change-area">
              <p>Already have an account? <a href="login.php">Sign-In</a></p>
            </div>
          </div>
        </div>
      </div>
    </section>



    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    End Account
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

  <!-- Mirrored from themeim.com/demo/sword/register.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Mar 2024 14:45:37 GMT -->
</html>
