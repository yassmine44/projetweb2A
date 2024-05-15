<?php
include_once "../controller/postC.php";
include_once "../model/post.php";

$d = new postC();

if (isset($_POST["aff"]) == "Tri") {
  $tab = $d->tripost();
} else if (isset($_POST["aff"] )== "Search") {
  $tab = $d->recherchepost($_POST["rech"]);
} else
  $tab = $d->afficher();

?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>JOBFLEX- JOB Website Template</title>
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
                                <a href="back/Affichercommentback.php" class="dropdown-item"><i class="fas fa-user-alt me-2"></i> My Profile</a>
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
                    <h1 class="m-0"></i>JobFlex</h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="index.php" class="nav-item nav-link">Home</a>
                        <a href="#" class="nav-item nav-link">FORUM</a>
                        <a href="#" class="nav-item nav-link">Entretien</a>
                        <a href="FRONT/packages.php" class="nav-item nav-link">Offre d'emploi</a>
                        <div class="nav-item dropdown">
                        <a href="blog.php" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">blog</a>
                            <div class="dropdown-menu m-0">
                                <a href="blog.php" class="dropdown-item">apercu du blog</a>
                                <a href="blogdetail.php" class="dropdown-item">blog detail</a>                              
                            </div>
                        </div>
                        </div>

                        </div>
                        <a href="reclamationA.php" class="nav-item nav-link active">Reclamation</a>
                    </div>
                   
                </div>
            </nav>
        </div>
        <!-- Navbar & Hero End -->

        <!-- Header Start -->
        <div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h3 class="text-white display-3 mb-4">Our Blog</h1>
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="blog.php">blog</a></li>
                    <li class="breadcrumb-item active text-white">apercu du blog</li>
                </ol>    
            </div>
        </div>
        <!-- Header End -->

       <!-- Blog Start -->
<div class="container-fluid blog py-5">
    <div class="container py-5">
        <div class="mx-auto text-center mb-5" style="max-width: 900px;">
            <h5 class="section-title px-3">Our Blog</h5>
            <h1 class="mb-4">Apercu du Blog</h1>
            <p class="mb-0">Whatever you’re publishing. Whoever your audience is. WordPress.com makes designing, editing, and sharing your work as simple as drag, drop, and click.
                Start your blog
            </p>
        </div>
        <div class="col-md-9">
            <?php foreach ($tab as $rec) { ?>
                <div class="blog_1r">
                    <div class="blog_1ri row">
                        <div class="col-md-7">
                            <div class="blog_1ril clearfix position-relative">
                                <div class="blog_1ril1 clearfix">
                                    <div class="grid clearfix">
                                        <figure class="effect-jazz mb-0">
                                            <a href="blogdetail.php"><img src="img/blog-3.jpg" class="w-100" alt="abc"></a>
                                        </figure>
                                    </div>
                                </div>
                                <div class="blog_1ril2 w-100 clearfix position-absolute  text-end">
                                    <span class="d-inline-block fs-2 bg-white col_dark"><i class="fa fa-edit"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="blog_1rir ps-4 pe-3">
                                <h5 class="mb-4"><a href="blogdetail.php"><?= $rec['titre'] ?></a></h5>
                                <p class="font_14"><?= $rec['sujet'] ?></p>
                                <p class="font_14"><?= $rec['date'] ?></p>
                                <p class="font_14"><?= $rec['description'] ?></p>
                                <a href="blogdetail.php?id=<?php echo $rec['id_post']; ?>"><button class="btn btn-outline-danger btn-sm">read more</button></a><br><br>
                               
                
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <br>
        <div class="row g-4 justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="blog-item">
                    <!-- Rest of the code for the first blog item -->
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="blog-item">
                    <!-- Rest of the code for the second blog item -->
                </div>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="blog-item">
                        <!-- Rest of the code for the third blog item -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
        <!-- Blog End -->

        <!-- Subscribe Start -->
        <div class="container-fluid subscribe py-5">
            <div class="container text-center py-5">
                <div class="mx-auto text-center" style="max-width: 900px;">
                    <h5 class="subscribe-title px-3">Subscribe</h5>
                    <h1 class="text-white mb-4">Our Newsletter</h1>
                    <p class="text-white mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum tempore nam, architecto doloremque velit explicabo? Voluptate sunt eveniet fuga eligendi! Expedita laudantium fugiat corrupti eum cum repellat a laborum quasi.
                    </p>
                    <div class="position-relative mx-auto">
                        <input class="form-control border-primary rounded-pill w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-primary rounded-pill position-absolute top-0 end-0 py-2 px-4 mt-2 me-2">Subscribe</button>
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
                            <a href="index.php"><i class="fas fa-angle-right me-2"></i> HOME</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> entretien</a>
                            <a href="blog.php"><i class="fas fa-angle-right me-2"></i> Blog</a>
                            <a href="FRONT/packages.php"><i class="fas fa-angle-right me-2"></i>Offre d'emploi</a>
                            <a href="reclamationA.php"><i class="fas fa-angle-right me-2"></i>Reclamation</a>
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
    <script>
window.embeddedChatbotConfig = {
chatbotId: "ZSsDhSKnqw2h8D6UBFc1C",
domain: "www.chatbase.co"
}
</script>
<script
src="https://www.chatbase.co/embed.min.js"
chatbotId="ZSsDhSKnqw2h8D6UBFc1C"
domain="www.chatbase.co"
defer>
</script>

</html>