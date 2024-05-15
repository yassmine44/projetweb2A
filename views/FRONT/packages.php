

<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();

// Include necessary files
include_once '../../model/client.php';
include_once '../../controller/clientC.php';
include_once '../../controller/eventC.php';

$error = "";

// create an instance of the controller
$clientC = new clientC();
$eventC = new eventC();

// Handle form submission for adding a candidate
// Handle form submission for adding a candidate
if (
    isset($_POST["nom"]) &&
    isset($_POST["prenom"]) &&
    isset($_POST["email"]) &&
    isset($_POST["login"]) &&
    isset($_POST["password"]) &&
    isset($_POST["cv"]) &&
    isset($_POST["exp"]) &&
    isset($_POST["selected_offer_id"]) // Added this line to check if the selected offer ID is set
) {
    if (
        !empty($_POST["nom"]) &&
        !empty($_POST["prenom"]) &&
        !empty($_POST["email"]) &&
        !empty($_POST["login"]) &&
        !empty($_POST["password"]) &&
        !empty($_POST["cv"]) &&
        !empty($_POST["exp"]) &&
        !empty($_POST["selected_offer_id"]) // Added this line to check if the selected offer ID is not empty
    ) {
        // Retrieve client information
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $email = $_POST['email'];
        $login = $_POST['login'];
        $password = $_POST['password'];
        $cv = $_POST['cv'];
        $exp = $_POST['exp'];

        // Retrieve the selected offer ID
        $selected_offer_id = $_POST['selected_offer_id'];

        // Create a new client object
        $client = new client(
            $nom,
            $prenom,
            $email,
            $login,
            $password,
            $cv,
            $exp
        );
// Establish a PDO connection using XAMPP default credentials
$host = 'localhost';
$dbname = 'sunandfun'; // Replace 'your_database_name' with the name of your database
$username = 'root'; // Default username for XAMPP
$password = ''; // Default password is usually blank for XAMPP

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
    die();
}

// Call the ajouterclientWithOffer method with the established PDO connection
$clientC->ajouterclientWithOffer($client, $selected_offer_id, $pdo);

        // Add the client and the selected offer ID to the databas
        // Redirect after successful submission
        echo "<script>alert('A candidate added successfully'); window.location.href = 'packages.php';</script>";
        exit;
    } else {
        $error = "Missing information";
    }
}


// Retrieve events data
$listeEvent = $eventC->affichereventsFront();
$direction = isset($_GET['direction']) ? $_GET['direction'] : 'ASC';
$listeEvent = $eventC->triByExpr($direction);

// Handle event search
if (isset($_GET['recherche'])) {
    $listeEvent = $eventC->recherchepr($_GET['recherche']);
}

?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>JOB FLEX -Recruitment Website </title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600&family=Roboto&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>

        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Topbar Start -->
        <div class="container-fluid bg-primary px-5 d-none d-lg-block">
            <div class="row gx-0">
                <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center" style="height: 45px;">
                        <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-twitter fw-normal"></i></a>
                        <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                        <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                        <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-instagram fw-normal"></i></a>
                        <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href=""><i class="fab fa-youtube fw-normal"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 text-center text-lg-end">
                    <div class="d-inline-flex align-items-center" style="height: 45px;">
                        <a href="#"><small class="me-3 text-light"><i class="fa fa-user me-2"></i>Register</small></a>
                        <a href="#"><small class="me-3 text-light"><i class="fa fa-sign-in-alt me-2"></i>Login</small></a>
                        <div class="dropdown">
                            <a href="#" class="dropdown-toggle text-light" data-bs-toggle="dropdown"><small><i class="fa fa-home me-2"></i> My Dashboard</small></a>
                            <div class="dropdown-menu rounded">
                                <a href="/INTEGRATIONWEB/VIEWS/BACK/index.php" class="dropdown-item"><i class="fas fa-user-alt me-2"></i> My Profile</a>
                                <a href="#" class="dropdown-item"><i class="fas fa-comment-alt me-2"></i> Inbox</a>
                                <a href="#" class="dropdown-item"><i class="fas fa-bell me-2"></i> Notifications</a>
                                <a href="#" class="dropdown-item"><i class="fas fa-cog me-2"></i> Account Settings</a>
                                <a href="#" class="dropdown-item"><i class="fas fa-power-off me-2"></i> Log Out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Topbar End -->

        <!-- Navbar & Hero Start -->
        <div class="container-fluid position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="m-0"><i class="fa fa-map-marker-alt me-3"></i>JOB FLEX</h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="../index.php" class="nav-item nav-link">Home</a>
                        <a href="#" class="nav-item nav-link">Entretien</a>
                        <a href="#" class="nav-item nav-link">Forum</a>
                        <a href="packages.php" class="nav-item nav-link active">Les Offres D'Emploi</a>
                        <a href="../blog.php" class="nav-item nav-link">Blog</a>
                    
                        <a href="../reclamationA.php" class="nav-item nav-link">Reclamation</a>
                    </div>
                    <a href="" class="btn btn-primary rounded-pill py-2 px-4 ms-lg-4">Candidater</a>
                </div>
            </nav>
        </div>
        <!-- Navbar & Hero End -->

        <!-- Header Start -->
        <div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h3 class="text-white display-3 mb-4">JOB OFFERS</h1>
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active text-white">Offers</li>
                </ol>    
            </div>
        </div>
        <!-- Header End -->

        <!-- Packages Start -->
        
        <div class="container-fluid packages py-5">
            <div class="container py-5">
                <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                </div>
                <div class="row">
                <div class="container-fluid packages py-5">
  <div class="container py-5">
    <div class="mx-auto text-center mb-5" style="max-width: 900px;">
      <h5 class="section-title px-3">OFFRES</h5>
      <h1 class="mb-0">LES OFFRE D'EMPLOI</h1>
      <div class="container text-center py-5">
    <div class="mx-auto text-center" style="max-width: 900px;">
        <h5 class="subscribe-title px-3">Search</h5>
        <h1 class="text-white mb-4">Job Offers</h1>
        <form action="" class="position-relative mx-auto" style="max-width: 600px;">
            <div class="input-group mb-3">
                <input type="text" class="form-control border-primary rounded-pill py-3 ps-4 pe-5" name="recherche" placeholder="Search By Titre De L'offre" aria-label="Search">
                <button class="btn btn-primary rounded-pill" type="submit">Search</button>
            </div>
        </form>
    </div>
</div>
<div class="container text-center py-3"> <!-- Reduce py-5 to py-3 for smaller height -->
    <div class="mx-auto text-center" style="max-width: 400px;"> <!-- Reduce max-width for smaller width -->
        <h4 class="subscribe-title px-3">Sort</h4>
        <form action="" method="GET" class="position-relative mx-auto">
            <div class="input-group mb-2"> <!-- Reduce mb-3 to mb-2 for smaller margin -->
                <select name="direction" id="sortDirection" class="form-control border-primary rounded-pill py-2 ps-3 pe-4"> <!-- Adjust py, ps, and pe for smaller padding -->
                    <option value="ASC">Asc Salaire</option> <!-- Use abbreviations -->
                    <option value="DESC">Desc Salaire</option> <!-- Use abbreviations -->
                </select>
                <button class="btn btn-primary rounded-pill" type="submit">trier</button>
            </div>
        </form>
    </div>
</div>

    </div>
    <div class="packages-carousel owl-carousel">
    <?php foreach($listeEvent as $event): ?>
        <div class="event-card">
            <div class="event-image">
                <img src="/5555c/FrontAssets/images/<?php echo $event['image']; ?>" class="img-fluid rounded-top" alt="<?php echo $event['titreoffre']; ?>">
            </div>
            <div class="event-details">
                <!-- Job Title -->
                <h3 class="event-title">Titre d'emploi: <?php echo $event['titreoffre']; ?></h3>
                <!-- Date -->
                <div class="event-date">Date limite: <?php echo $event['datelimit']; ?></div>
                <!-- Type of Contract -->
                <p class="event-type">Le Type De Contrat: <?php echo $event['typecontrat']; ?></p>
                <!-- Salary -->
                <p class="event-salary">le Salaire: <?php echo $event['salaire']; ?> DT</p>
                <!-- Apply Form -->
                <div class="apply-form" style="display: none;">
                    <form class="form-sample" action="" method="POST" onsubmit="return verif(this)">
                        <input type="hidden" name="selected_offer_id" value="<?php echo $event['IDoffre']; ?>">
                        <!-- Phone Number -->
                        <input type="text" class="form-control mb-3" id="nom" name="nom" placeholder="Phone Number">
                        <!-- Skills -->
                        <input type="text" class="form-control mb-3" id="prenom" name="prenom" placeholder="Skills">
                        <!-- Education -->
                        <input type="text" class="form-control mb-3" id="email" name="email" placeholder="Education">
                        <!-- Country -->
                        <select class="form-select mb-3" id="login" name="login">
                            <option value="">Select Country</option>
                            <option value="USA">United States</option>
                            <option value="CAN">Canada</option>
                            <option value="UK">United Kingdom</option>
                            <option value="TUN">Tunisia</option>
                            <!-- Add more countries below -->
                            <option value="AFG">Afghanistan</option>
                            <option value="ALA">Åland Islands</option>
                            <option value="ALB">Albania</option>
                            <option value="DZA">Algeria</option>
                            <option value="ASM">American Samoa</option>
                            <!-- Add more countries as needed -->
                        </select>
                        <!-- Career Objective -->
                        <input type="text" class="form-control mb-3" id="password" name="password" placeholder="Career Objective">
                        <!-- CV Upload -->
                        <input type="file" class="form-control mb-3" id="cv" name="cv" >
                        <!-- Experience -->
                        <input type="number" class="form-control mb-3" id="exp" name="exp" placeholder="Experience">
                        <!-- Submit Button -->
                        <button class="btn btn-primary w-100" type="submit">Envoyer la demande</button>
                    </form>
                </div>
                <!-- Toggle Apply Form Button -->
                <button class="btn btn-secondary toggle-form-btn" onclick="toggleForm(this)">Postuler a Ce Offre</button>
            </div>
        </div>
    <?php endforeach; ?> 
</div>


<script>
    function toggleForm(btn) {
        var form = btn.parentNode.querySelector('.apply-form');
        form.style.display = form.style.display === 'none' ? 'block' : 'none';
    }
</script>





                </div>
            </div>
        </div>
        <!-- Tour Booking End -->
        
        <!-- Subscribe Start -->
        

        <!-- Subscribe End -->

         <!-- Footer Start -->
         <div class="container-fluid footer py-5">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="mb-4 text-white">Get In Touch</h4>
                            <a href=""><i class="fas fa-home me-2"></i> 123 ARIANA SOGHRA ,ESPRIT</a>
                            <a href=""><i class="fas fa-envelope me-2"></i>JOBFLEX@ESPRIT.TN</a>
                            <a href=""><i class="fas fa-phone me-2"></i> +216 710 711</a>
                            <a href="" class="mb-3"><i class="fas fa-print me-2"></i> +216 710 713</a>
                            <div class="d-flex align-items-center">
                                <i class="fas fa-share fa-2x text-white me-2"></i>
                                <a class="btn-square btn btn-primary rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn-square btn btn-primary rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn-square btn btn-primary rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                                <a class="btn-square btn btn-primary rounded-circle mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="mb-4 text-white">JOBFLEX</h4>
                            <a href="../index.php"><i class="fas fa-angle-right me-2"></i> HOME</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> entretien</a>
                            <a href="../blog.php"><i class="fas fa-angle-right me-2"></i> Blog</a>
                            <a href="packages.php"><i class="fas fa-angle-right me-2"></i>Offre d'emploi</a>
                            <a href="../reclamationA.php"><i class="fas fa-angle-right me-2"></i>Reclamation</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Forum</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="mb-4 text-white">Support</h4>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Contact</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Legal Notice</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Privacy Policy</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Terms and Conditions</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Sitemap</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Cookie policy</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item">
                            <div class="row gy-3 gx-2 mb-4">
                                <div class="col-xl-6">
                                    <form>
                                        <div class="form-floating">
                                            <select class="form-select bg-dark border" id="select1">
                                                <option value="1">Arabic</option>
                                                <option value="2">German</option>
                                                <option value="3">Greek</option>
                                                <option value="3">New York</option>
                                            </select>
                                            <label for="select1">English</label>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-xl-6">
                                    <form>
                                        <div class="form-floating">
                                            <select class="form-select bg-dark border" id="select1">
                                                <option value="1">USD</option>
                                                <option value="2">EUR</option>
                                                <option value="3">INR</option>
                                                <option value="3">GBP</option>
                                            </select>
                                            <label for="select1">$</label>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <h4 class="text-white mb-3">Payments</h4>
                            <div class="footer-bank-card">
                                <a href="#" class="text-white me-2"><i class="fab fa-cc-amex fa-2x"></i></a>
                                <a href="#" class="text-white me-2"><i class="fab fa-cc-visa fa-2x"></i></a>
                                <a href="#" class="text-white me-2"><i class="fas fa-credit-card fa-2x"></i></a>
                                <a href="#" class="text-white me-2"><i class="fab fa-cc-mastercard fa-2x"></i></a>
                                <a href="#" class="text-white me-2"><i class="fab fa-cc-paypal fa-2x"></i></a>
                                <a href="#" class="text-white"><i class="fab fa-cc-discover fa-2x"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->
        
        <!-- Copyright Start -->
        <div class="container-fluid copyright text-body py-4">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-md-6 text-center text-md-end mb-md-0">
                        <i class="fas fa-copyright me-2"></i><a class="text-white" href="#">Job Flex</a>, All right reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-start">
                        <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                        <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                        <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                        Designed By <a class="text-white" href="https://htmlcodex.com">HTML Codex</a> Distributed By <a href="https://themewagon.com">ThemeWagon</a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-primary btn-primary-outline-0 btn-md-square back-to-top"><i class="fa fa-arrow-up"></i></a>   

        
        <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/lightbox/js/lightbox.min.js"></script>
        

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
        
        
        <script>
    function verif(form) {
    let nom = form.querySelector('[name="nom"]').value.trim();
    let prenom = form.querySelector('[name="prenom"]').value.trim();
    let login = form.querySelector('[name="login"]').value.trim();
    let password = form.querySelector('[name="password"]').value.trim();
    let cv = form.querySelector('[name="cv"]').value.trim();
    let exp = form.querySelector('[name="exp"]').value.trim();
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
<script>
    function refreshPage() {
        // Refresh the page
        location.reload();
    }
</script>
</script>

</script>

    </body>

</html>