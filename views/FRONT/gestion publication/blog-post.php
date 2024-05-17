<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <title>Jobflex</title>
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

<?php
include_once '../../../Controller/blog_con.php';
include_once '../../../Controller/publication_con.php';

// Création d'une instance du contrôleur des événements
$publicationC = new publicationCon("publication");

// Création d'une instance du contrôleur des événements
$blogC = new blogCon("blog");

if (isset($_GET['id'])) {
    $current_id = $_GET['id'];
    $blog = $blogC->getBlog($current_id);

	$publications = $publicationC->getPublicationsByBlogId($blog['id_blog']);
	$publications_nb = $publicationC->countPublications($blog['id_blog']);

}
?>


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
			<h1 class="m-0">jobflex</h1>
			<!-- <img src="img/logo.png" alt="Logo"> -->
		</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
			<span class="fa fa-bars"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarCollapse">
			<div class="navbar-nav ms-auto py-0">
				<a href="index.html" class="nav-item nav-link">Home</a>
				<a href="about.html" class="nav-item nav-link">About</a>
				<a href="services.html" class="nav-item nav-link">Services</a>
				<a href="packages.html" class="nav-item nav-link">Packages</a>
				<a href="blog.html" class="nav-item nav-link">Blog</a>
				<div class="nav-item dropdown">
					<a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Pages</a>
					<div class="dropdown-menu m-0">
						<a href="destination.html" class="dropdown-item">Destination</a>
						<a href="tour.html" class="dropdown-item">Explore Tour</a>
						<a href="booking.html" class="dropdown-item active">Forum</a>
						<a href="gallery.html" class="dropdown-item">Our Gallery</a>
						<a href="guides.html" class="dropdown-item">Travel Guides</a>
						<a href="testimonial.html" class="dropdown-item">Testimonial</a>
						<a href="404.html" class="dropdown-item">404 Page</a>
					</div>
				</div>
				<a href="contact.html" class="nav-item nav-link">Contact</a>
			</div>
		</div>
	</nav>
</div>
<!-- Navbar & Hero End -->

<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
	<div class="container text-center py-5" style="max-width: 900px;">
		<h3 class="text-white display-3 mb-4">Forum</h1>
		<ol class="breadcrumb justify-content-center mb-0">
			<li class="breadcrumb-item"><a href="index.html">Home</a></li>
			<li class="breadcrumb-item"><a href="#">Pages</a></li>
			<li class="breadcrumb-item active text-white">Forum</li>
		</ol>    
	</div>
</div>
<!-- Header End -->
		<!-- Blog -->
		<div id="blog" class="section">

			<!-- addd form -->
			<div id="id01" class="modal">
			
				<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
				
				<form class="modal-content" role="form text-left" action="add_publication_front.php?id_blog=<?= $blog['id_blog']; ?>" method="post" enctype="multipart/form-data">
						
						<div class="container">
							
							<h1>Ajout</h1>
							<p>Formulaire d'ajout de message</p>
							<hr>

									

									<label for="title_publication"><b>nom </b></label>
										<input type="text" id="title_publication" name="title_publication" placeholder="Enter votre nom" required />
										<div id="title_publicationError" style="color: red;"></div>

									<label for="contenu_publication"><b>Contenu</b></label>
									<textarea placeholder="Enter contenu" name="contenu_publication" id="contenu_publication" cols="30" rows="10" required></textarea>
									<div id="contenu_publicationError" style="color: red;"></div>
									<hr>

							<div class="clearfix">
								<input type="submit" class="cancelbtn" name="addbtn" id="addbtn" value="Add" onclick="return verif_publication_add_front()">
								<button type="button" class="deletebtn" onclick="document.getElementById('id01').style.display='none'">Cancel</button>
							</div>

						</div>

					</div>

				</form>
		
			</div>

			<!-- container -->
			<div class="container">

				<input onclick="document.getElementById('id01').style.display='block'" type="button" class="btn bg-gradient-dark w-100 my-4 mb-2" name="addbtn" id="addbtn" value="Ajout +" onclick="return verif_blog_update()" style="background-color: orange; color: white; margine: 15px;">


				<!-- row -->
				<div class="row">

					<!-- main blog -->
					<div id="main" class="col-md-9">

						<!-- blog post -->

						<?php $publicationC->generatePublication($publications);?>

						<!-- /blog post -->

						
							
						</div>
						<!-- /blog comments -->
					</div>
					<!-- /main blog -->

					<!-- aside blog -->
					<div id="aside" class="col-md-3">

						<!-- search widget -->
						<div class="widget search-widget">
							<form>
								<input class="input" type="text" name="search">
								<button><i class="fa fa-search"></i></button>
							</form>
						</div>
						<!-- /search widget -->

						</div>
						<!-- /posts widget -->

					</div>
					<!-- /aside blog -->

				</div>
				<!-- row -->

			</div>
			<!-- container -->

		</div>
		<!-- /Blog -->

		<!-- Footer Start -->
        <div class="container-fluid footer py-5">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="mb-4 text-white">Get In Touch</h4>
                            <a href=""><i class="fas fa-home me-2"></i> 123 Street, New York, USA</a>
                            <a href=""><i class="fas fa-envelope me-2"></i> info@example.com</a>
                            <a href=""><i class="fas fa-phone me-2"></i> +012 345 67890</a>
                            <a href="" class="mb-3"><i class="fas fa-print me-2"></i> +012 345 67890</a>
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
                            <h4 class="mb-4 text-white">Company</h4>
                            <a href=""><i class="fas fa-angle-right me-2"></i> About</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Careers</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Blog</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Press</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Gift Cards</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Magazine</a>
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
                        <i class="fas fa-copyright me-2"></i><a class="text-white" href="#">Your Site Name</a>, All right reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-start">
                        <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                        <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                        <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                        Designed By <a class="text-white" href="https://htmlcodex.com">HTML Codex</a>
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
    </body>

</html>