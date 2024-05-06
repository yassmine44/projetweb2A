<?php

include '../Controller/entrepriseE.php';
include '../Model/entreprise.php';

$error = "";

// create client
$entreprise = null;

// create an instance of the controller
$entrepriseE = new entrepriseE();
if (
    isset($_POST["identreprise"]) &&
    isset($_POST["nom"]) &&
    isset($_POST["domaine"]) 
   
) {
    if (
        !empty($_POST['identreprise']) &&
        !empty($_POST["nom"]) &&
        !empty($_POST["domaine"]) 
    
    ) {
        $entreprise = new entreprise(
            
            $_POST['identreprise'],
            $_POST['nom'],
            $_POST['domaine']
            
        );
        $entrepriseE->addentreprise($entreprise);
        header('Location:listentreprise.php');
    } else
        $error = "Missing information";
}
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Jobflex </title>
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
        <style>
            body {
                background: url(""); 
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
   
            }
            
            
            .container {
                max-width: 600px;
                margin: 50px auto;
                background-color: hsla(238, 92%, 15%, 0.953);
                border-radius: 10px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                padding: 20px;
            }
            h1 {
                color: #fff;
                text-align: center;
            }
            label {
                font-weight: bold;
            }
            
            input[type="text"], input[type="email"], input[type="tel"], input[type="datetime-local"] {
                width: calc(100% - 40px);
                padding: 10px;
                margin: 5px 0 20px;
                border: 1px solid #ccc;
                border-radius: 5px;
                box-sizing: border-box;
            }
            select {
                width: calc(100% - 40px);
                padding: 10px;
                margin: 5px 0 20px;
                border: 1px solid #ccc;
                border-radius: 5px;
                box-sizing: border-box;
            }
            .messageBox {
                position: relative;
                margin-bottom: 20px;
            }
            label {
                display: block;
            }

            #messageInput {
                width: calc(100% - 80px);
                padding: 10px;
                margin-right: 10px;
                border: 1px solid #ccc;
                border-radius: 5px;
                box-sizing: border-box;
            }
            #sendButton {
                background-color: #007bff;
                color: #1e0606;
                border: none;
                border-radius: 5px;
                padding: 10px 20px;
                cursor: pointer;
            }
            #sendButton svg {
                width: 20px;
                height: 20px;
                vertical-align: middle;
                fill: #fff;
            }
            .fileUploadWrapper {
                position: relative;
                overflow: hidden;
                display: inline-block;
                margin-right: 10px;
            }
            .fileUploadWrapper input[type="file"] {
                position: absolute;
                top: 0;
                left: 0;
                opacity: 0;
                width: 100%;
                height: 100%;
                cursor: pointer;
            }
            .tooltip {
                position: absolute;
                top: -30px;
                left: 50%;
                transform: translateX(-50%);
                background-color: #007bff;
                color: #e7dbdb;
                padding: 5px 10px;
                border-radius: 5px;
                font-size: 12px;
                white-space: nowrap;
                visibility: hidden;
                opacity: 0;
                transition: visibility 0s, opacity 0.2s linear;
            }
            .fileUploadWrapper:hover .tooltip {
                visibility: visible;
                opacity: 1;
            }
        </style>
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
                        <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-instagram fw-normal"></i></a>
                        <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href=""><i class="fab fa-youtube fw-normal"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 text-center text-lg-end">
                    <div class="d-inline-flex align-items-center" style="height: 45px;">
                        <a href="#"><small class="me-3 text-light"><i class="fa fa-user me-2"></i>Register</small></a>
                        <a href="#"><small class="me-3 text-light"><i class="fa fa-sign-in-alt me-2"></i>Login</small></a>
                        <div class="dropdown">
                            <a href="#" class="dropdown-toggle text-light" data-bs-toggle="dropdown"><small><i class="fa fa-home me-2"></i> My Space</small></a>
                            <div class="dropdown-menu rounded">
                                <a href="#" class="dropdown-item"><i class="fas fa-user-alt me-2"></i> My Profile</a>
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
                    <h1 class="m-0"> <img src="img/logojob.png" alt="logo"  width="110"  height="190"></i></h1>
                   <img src="" alt="" srcset="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="index.html" class="nav-item nav-link">Home</a>
                        <a href="about.html" class="nav-item nav-link">Offre d’emploi</a>
                        <a href="services.html" class="nav-item nav-link">Entretien</a>
                        <a href="packages.html" class="nav-item nav-link">Communauté</a>
                        <a href="blog.html" class="nav-item nav-link">Blog</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Autre</a>
                            <div class="dropdown-menu m-0">
                                <a href="destination.html" class="dropdown-item">JOBFLEX LEARNING</a>
                                <a href="tour.html" class="dropdown-item">SEARCH FOR WORK</a>
                                <a href="booking.html" class="dropdown-item">PEOPLE</a>
                              
                             
                            </div>
                        </div>
                        <a href="reclamation.html" class="nav-item nav-link active">Reclamation</a>
                        <a href="entretien.html" class="nav-item nav-link active">Entretien</a>
                   
            </nav>
        </div>
        <!-- Navbar & Hero End -->

        <!-- Header Start -->
        <div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h3 class="text-white display-3 mb-4">Entretien</h1>
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    
                    <li class="breadcrumb-item active text-white">Entretien</li>
                </ol>    
            </div>
        </div>
        <!-- Header End -->

        <!-- entretien Start -->
        <div class="container">
            <h1>Entreprise</h1>
            <form action="" method="POST">
                <table>
                     <tr>
                        <td><label for="identreprise">identreprise :</label></td>
                        <td>
                            <input type="text" id="identreprise" name="identreprise" />
                            <span id="erreuridentreprise" style="color: red"></span>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="nom">Nom :</label></td>
                        <td>
                            <input type="text" id="nom" name="nom" />
                            <span id="erreurNom" style="color: red"></span>
                        </td>
                    </tr>
                   
                    <tr>
                        <td><label for="domaine">domaine :</label></td>
                        <td>
                            <input type="text" id="domaine" name="domaine" />
                            <span id="erreurdomaine" style="color: red"></span>
                        </td>
                    </tr>
                   
        
                    <td>
                        <input type="submit" value="Save">
                    </td>
                    <td>
                        <input type="reset" value="Reset">
                    </td>
                </table>
        
            </form>

        

        <!-- Subscribe Start -->
        <div class="container-fluid subscribe py-5">
            <div class="container text-center py-5">
                <div class="mx-auto text-center" style="max-width: 900px;">
                    <h5 class="subscribe-title px-3">FEEL FREE</h5>
                    <h1 class="text-white mb-4">WHAT DO YOU THINK ABOUT US</h1>
                    <p class="text-white mb-5">Your satisfaction is our priority.
                        <br> Let us know your concerns and we will do everything we can to resolve them quickly</p>
                    <div class="position-relative mx-auto">
                        <input class="form-control border-primary rounded-pill w-100 py-3 ps-4 pe-5" type="text" placeholder="we are looking forward to seeing you happy ...">
                        <button type="button" class="btn btn-primary rounded-pill position-absolute top-0 end-0 py-2 px-4 mt-2 me-2">Send </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Subscribe End -->

        <!-- Footer Start -->
        <div class="container-fluid footer py-5">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="mb-4 text-white">Get In Touch</h4>
                            <a href=""><i class="fas fa-home me-2"></i> 123 Street, Tunis ,Ariana</a>
                            <a href=""><i class="fas fa-envelope me-2"></i> Jobflex@gmail.com</a>
                            <a href=""><i class="fas fa-phone me-2"></i> +216 123 580</a>
                            <a href="" class="mb-3"><i class="fas fa-print me-2"></i> +216 470 580</a>
                            <div class="d-flex align-items-center">
                                <i class="fas fa-share fa-2x text-white me-2"></i>
                                <a class="btn-square btn btn-primary rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn-square btn btn-primary rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn-square btn btn-primary rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="mb-4 text-white">Company</h4>
                            <a href=""><i class="fas fa-angle-right me-2"></i> why choose us </a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> offre d'emploi</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Blog</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> communauté</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> reclamation</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Entretien</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="mb-4 text-white">Support</h4>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Legal Notice</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Privacy Policy</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Terms and Conditions</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i>  Give us your opinion</a>
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
                                            
                                                <option value="3">New York</option>
                                            </select>
                                           
                                        </div>
                                    </form>
                                </div>
                                
                            </div>
                           
                              
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
                        <i class="fas fa-copyright me-2"></i><a class="text-white" href="#">JOBFLEX</a>, All right reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-start">
                        <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                        <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                        <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                     
                    </div>
                </div>
            </div>
        </div>
      

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
    </body>

</html>