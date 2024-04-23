<?php
require "../controller/commentC.php";

$d = new commentC();

if (isset($_POST["aff"]) == "Tri") {
  $tab = $d->tricomment();
} else if (isset($_POST["aff"] )== "Search") {
  $tab = $d->recherchecomment($_POST["rech"]);
} else
  $tab = $d->afficher();

?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>JOBFLEX- JOB Website Template</title>
        <meta content="width=device-width, initial-scale=1.0" nom="viewport">
        <meta content="" nom="keywords">
        <meta content="" nom="description">

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
                    <h1 class="m-0"></i>JobFlex</h1>
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
                        <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">blog</a>
                            <div class="dropdown-menu m-0">
                                <a href="blog.html" class="dropdown-item">apercu du blog</a>
                                <a href="blog_detail.html" class="dropdown-item">detail du blog</a>
                             
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu m-0">
                                <a href="destination.html" class="dropdown-item">Destination</a>
                                <a href="tour.html" class="dropdown-item">Explore Tour</a>
                                <a href="booking.html" class="dropdown-item">Travel Booking</a>
                                <a href="gallery.html" class="dropdown-item">Our Gallery</a>
                                <a href="guides.html" class="dropdown-item">Travel Guides</a>
                                <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                                <a href="404.html" class="dropdown-item">404 Page</a>
                            </div>
                        </div>
                        <a href="contact.html" class="nav-item nav-link">Contact</a>
                    </div>
                    <a href="" class="btn btn-primary rounded-pill py-2 px-4 ms-lg-4">Book Now</a>
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
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active text-white">Blog</li>
                </ol>    
            </div>
        </div>
        <!-- Header End -->

        <!-- comment Start -->
        <div class="container-fluid comment bg-light py-5">
            <div class="container py-5">
                <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                    <h5 class="section-title px-3">blog</h5>
                   
                </div>
              
            
                    <section id="blog" class="p_4">
             <div class="container-xl">
               <div class="blog_1 row">
                <div class="col-md-3">
                 <div class="blog_1l">
                   <div class="blog_1l1 bg_border p-3">
                    <hr class="line_1 mt-0">
                    <h5 class="mb-4">ARCHIVES</h5>
                    <h6 class="font_14"><a href="blog_detail.html"><i class="fa fa-circle-o me-1 col_pink font_8"></i> July 2019 <span class="pull-right">(12)</span></a></h6>
                    <hr>
                    <h6 class="font_14"><a href="blog_detail.html"><i class="fa fa-circle-o me-1 col_pink font_8"></i> May 2019 <span class="pull-right">(15)</span></a></h6>
                    <hr>
                    <h6 class="font_14"><a href="blog_detail.html"><i class="fa fa-circle-o me-1 col_pink font_8"></i> Sept 2019 <span class="pull-right">(10)</span></a></h6>
                    <hr>
                    <h6 class="font_14 mb-0"><a href="blog_detail.html"><i class="fa fa-circle-o me-1 col_pink font_8"></i> Jan 2019 <span class="pull-right">(14)</span></a></h6>
                   </div>
                   <div class="blog_1l1 bg_border p-3 mt-4">
                    <hr class="line_1 mt-0">
                    <h5 class="mb-3">RECENT POSTS</h5>
                    <div class="blog_1l1i row">
                     <div class="col-md-2 pe-0 col-2">
                      <div class="blog_1l1il">
                       <span class="font_8"><i class="fa fa-circle-o me-1 col_pink"></i></span>
                      </div>
                     </div>
                     <div class="col-md-10 ps-0 col-10">
                      <div class="blog_1l1ir">
                       <p class="font_14 mb-1"><a href="blog_detail.html">Integer at diam gravida fringilla Nibh preti purus</a></p>
                       <h6 class="font_14 mb-0">June 18, 2015</h6>
                      </div>
                     </div>
                    </div><hr>
                    <div class="blog_1l1i row">
                     <div class="col-md-2 pe-0 col-2">
                      <div class="blog_1l1il">
                       <span class="font_8"><i class="fa fa-circle-o me-1 col_pink"></i></span>
                      </div>
                     </div>
                     <div class="col-md-10 ps-0 col-10">
                      <div class="blog_1l1ir">
                       <p class="font_14 mb-1"><a href="blog_detail.html">Donec quis ex vel tincidunt</a></p>
                       <h6 class="font_14 mb-0">June 18, 2015</h6>
                      </div>
                     </div>
                    </div><hr>
                    <div class="blog_1l1i row">
                     <div class="col-md-2 pe-0 col-2">
                      <div class="blog_1l1il">
                       <span class="font_8"><i class="fa fa-circle-o me-1 col_pink"></i></span>
                      </div>
                     </div>
                     <div class="col-md-10 ps-0 col-10">
                      <div class="blog_1l1ir">
                       <p class="font_14 mb-1"><a href="blog_detail.html">Integer at diam gravida fringilla Nibh preti purus</a></p>
                       <h6 class="font_14 mb-0">June 18, 2015</h6>
                      </div>
                     </div>
                    </div>
                    
                   </div>
                   <div class="blog_1l1 bg_border p-3 mt-4">
                    <hr class="line_1 mt-0">
                    <h5 class="mb-4">CATEGORIES</h5>
                    <h6 class="font_14"><a href="blog_detail.html"><i class="fa fa-circle-o me-1 col_pink font_8"></i> Audio <span class="pull-right">(12)</span></a></h6>
                    <hr>
                    <h6 class="font_14"><a href="blog_detail.html"><i class="fa fa-circle-o me-1 col_pink font_8"></i> Magazine <span class="pull-right">(03)</span></a></h6>
                    <hr>
                    <h6 class="font_14"><a href="blog_detail.html"><i class="fa fa-circle-o me-1 col_pink font_8"></i> News <span class="pull-right">(08)</span></a></h6>
                    <hr>
                    <h6 class="font_14"><a href="blog_detail.html"><i class="fa fa-circle-o me-1 col_pink font_8"></i> Photoshop <span class="pull-right">(12)</span></a></h6>
                    <hr>
                    <h6 class="font_14"><a href="blog_detail.html"><i class="fa fa-circle-o me-1 col_pink font_8"></i> Technical <span class="pull-right">(07)</span></a></h6>
                    <hr>
                    <h6 class="font_14"><a href="blog_detail.html"><i class="fa fa-circle-o me-1 col_pink font_8"></i> Uncategorized <span class="pull-right">(09)</span></a></h6>
                    <hr>
                    <h6 class="font_14 mb-0"><a href="blog_detail.html"><i class="fa fa-circle-o me-1 col_pink font_8"></i> Video <span class="pull-right">(04)</span></a></h6>
                   </div>
                   <div class="blog_1l1 bg_border p-3 mt-4">
                    <hr class="line_1 mt-0">
                    <h5 class="mb-4">Tags</h5>
                    <ul class="mb-0">
                    <li class="d-inline-block"><a class="d-block" href="blog_detail.html">Analyze</a></li>
                    <li class="d-inline-block"><a class="d-block" href="blog_detail.html">Audio</a></li>
                    <li class="d-inline-block"><a class="d-block" href="blog_detail.html">Blog</a></li>
                    <li class="d-inline-block"><a class="d-block" href="blog_detail.html">Business</a></li>
                    <li class="d-inline-block"><a class="d-block" href="blog_detail.html">Creative</a></li>
                    <li class="d-inline-block"><a class="d-block" href="blog_detail.html">Design</a></li>
                    <li class="d-inline-block"><a class="d-block" href="blog_detail.html">Experiment</a></li>
                    <li class="d-inline-block"><a class="d-block" href="blog_detail.html">News</a></li>
                    <li class="d-inline-block"><a class="d-block" href="blog_detail.html">Expertize</a></li>
                    <li class="d-inline-block"><a class="d-block" href="blog_detail.html">Express</a></li>
                    <li class="d-inline-block"><a class="d-block" href="blog_detail.html">Share</a></li>
                    <li class="d-inline-block"><a class="d-block" href="blog_detail.html">Sustain</a></li>
                    <li class="d-inline-block"><a class="d-block" href="blog_detail.html">Video</a></li>
                    <li class="d-inline-block"><a class="d-block" href="blog_detail.html">Youtube</a></li>
                   </ul>
                   </div>
                 </div>
                </div>
                <div class="col-md-9">
                 <div class="blog_1dt">
                  <div class="blog_1dt1">
                    <div class="blog_1ril clearfix position-relative">
                     <div class="blog_1ril1 clearfix">
                       <div class="grid clearfix">
                              <figure class="effect-jazz mb-0">
                                <a href="#"><img src="img/blog-1.jpg" height="480" class="w-100" alt="abc"></a>
                              </figure>
                          </div>
                     </div>
                     <div class="blog_1ril2 w-100 clearfix position-absolute top-0">
                       <span class="d-inline-block fs-2 bg-white col_dark"><i class="fa fa-edit"></i></span>
                     </div>
                    </div>
                  </div>
                  <div class="blog_1dt2 row mt-4">
                   <div class="col-md-2">
                    <div class="blog_1dt2l text-center">
                     <h4>19 <br><hr class="line m-auto mt-2 mb-2"> MAY <hr class="line m-auto mt-2"> </h4>
                    </div>
                   </div>
                   <div class="col-md-10">
                    <div class="blog_1dt2r">
                     <h5>INTEGER AT DIAM GRAVIDA FRINGILLA NIBH PRETI PURUS</h5>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin tincidunt nunc lorem, nec faucibus mi facilisis eget. Mauris laoreet, nisl id faucibus pellentesque, mi mi tempor enim, sit amet interdum felis nibh a leo. Donec efficitur velit ac nisi rutrum, eu ornare augue tristique. Vivamus accumsan nisl id massa finibus aliquet. Pellentesque blandit ut urna dignissim pulvinar. Aliquam in ultrices ante. Nam condimentum eleifend consectetur. Fusce quam nunc, bibendum eget venenatis a, volutpat at ligula. Ut interdum elit vel ante tincidunt mattis. Aenean dignissim vulputate justo, sed tincidunt sapien laoreet a. Fusce vehicula, turpis sed hendrerit gravida, ante justo accumsan nisi, non congue metus risus a lorem.</p>
                     <p>Quisque eleifend velit id metus ullamcorper tristique. Integer vel commodo ex. Pellentesque sed ultrices tellus. Integer lobortis et lorem vitae ullamcorper.</p>
                     <blockquote class="blockquote bg_gray p-4 pt-3 mt-4">
                                                <p>Provident fugiat tempora architecto mollitia quos maiores perspiciatis obcaecati placeat aunty koi thako Architecto eaque accusamus minima in earum impedit atque</p>
                                                <h6 class="fw-normal mb-0"><strong>- Dapibus Diam </strong>of Google Inc.</h6>
                                            </blockquote>
                     <p>It was popularised in the 1980s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including text are in so Ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation quis nostrud exercitation quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt iest laborum.</p>
                     <ul>
                      <li class="d-inline-block me-3"><a href="#"><i class="fa fa-tag me-1 col_pink"></i> Blog</a></li>
                      <li class="d-inline-block me-3"><a href="#"><i class="fa fa-tag me-1 col_pink"></i> Creative</a></li>
                      <li class="d-inline-block me-3"><a href="#"><i class="fa fa-tag me-1 col_pink"></i> Business</a></li>
                      <li class="d-inline-block"><a href="#"><i class="fa fa-tag me-1 col_pink"></i> News</a></li>
                     </ul>
                     <ul class="social-network social-circle mb-0 mt-3">
                                <li><a href="#" class="icoRss" title="Rss"><i class="fa fa-skype"></i></a></li>
                                <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                    </div>
                   </div>
                  </div>
				  <section class="section dashboard">
					<div class="row">
					  <div class="col-12">
						<div class="card recent-sales overflow-auto">
						  <div class="card-body">
							 
							<h5 class="card-title">comments <span>| Affichage</span></h5>
							<div class="table-responsive">
							  <table class="table">
								  
								  <tbody>
								  <?php foreach ($tab as $rec) { ?>
									  
								  <?php } ?>
								  </tbody>
							  </table>
						
						</div>
					  </div>
					</div>
        <!-- Contact End -->

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
                            <a href=""><i class="fas fa-angle-right me-2"></i> comment</a>
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
        <script src="js/jscodes.js"></script>


    </body>

</html>