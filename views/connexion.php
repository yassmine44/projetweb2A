<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../FrontAssets/images/favicon.ico">

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>PHPJobflex.com </title>

    <!-- Bootstrap core CSS -->
    <link href="../FrontAssets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="../FrontAssets/css/fontawesome.css">
    <link rel="stylesheet" href="../FrontAssets/css/style.css">
    <link rel="stylesheet" href="../FrontAssets/css/owl.css">

  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.html"><h2>SUN <em>AND FUN</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="FrontLayout.php">Home
                      <span class="sr-only">(current)</span>
                    </a>
                </li> 

                <li class="nav-item"><a class="nav-link" href="connexion.php">Registre</a></li>

                <li class="nav-item active"><a class="nav-link" href="login.php">se connecter</a></li>

            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <div class="page-heading about-heading header-text" style="background-image: url(../FrontAssets/images/heading-6-1920x500.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
                          <h2>S'inscrire <br> C'est rapide et facile </h2>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="products">
      <div class="container">
        <div class="row">
            <!-- ekteb hna --> 
                    <?php
                    include_once '../model/client.php';
                    include_once '../controller/clientC.php';
                    use PHPMailer\PHPMailer\PHPMailer;
                    use PHPMailer\PHPMailer\SMTP;
                    use PHPMailer\PHPMailer\Exception;


                    require 'PHPMailer/src/Exception.php';
                    require 'PHPMailer/src/PHPMailer.php';
                    require 'PHPMailer/src/SMTP.php';

                    $error = "";

                    // create user
                    $user = null;

                    // create an instance of the controller
                    $userC = new clientC();
                    if (
                        isset($_POST["nom"]) && 
                        isset($_POST["prenom"]) &&
                        isset($_POST["email"]) && 
                        isset($_POST["login"]) && 
                        isset($_POST["pass"])
                    ) {
                        if (
                            !empty($_POST["nom"]) && 
                            !empty($_POST["prenom"]) && 
                            !empty($_POST["email"]) && 
                            !empty($_POST["login"]) && 
                            !empty($_POST["pass"])
                        ) {
                            $user = new client(
                                $_POST['nom'],
                                $_POST['prenom'], 
                                $_POST['email'],
                                $_POST['login'],
                                $_POST['pass']
                            );
                            $mail = new PHPMailer(true);
                            try {
                                //Server settings                    // Enable verbose debug output
                                $mail->isSMTP();                                            // Send using SMTP
                                $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
                                $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
                                $mail->Username   = 'andfunsun@gmail.com';                     // SMTP username
                                $mail->Password   = 'sunandfun123';                               // SMTP password
                                $mail->SMTPSecure = 'tls';                                     // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
                                $mail->Port       = 25;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
                            
                                //Recipients
                                $mail->setFrom('fnakai007@gmail.com', 'Admin');
                                $mail->addAddress($_POST['email']);     // Add a recipient
                            
                                // Content
                                $mail->isHTML(true);                                  // Set email format to HTML
                                $mail->Subject = 'Mar7ba Bik';
                                $mail->Body    = 'San & Fun <br> tefra7 bik!</br> <br> login : '.$_POST['login'].'</br>';
                            
                                $mail->send();
                                echo 'Message has been sent';
                            } catch (Exception $e) {
                                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                            }
                            $userC->ajouterclient($user);
                            header('Location:afficherclients.php');
                        }
                        else
                            $error = "Missing information";
                    }

                    
                ?>
                <!DOCTYPE html>
                <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>User Display</title>
                </head>
                    <body>

                        <div class="container">
                                <div class="row">
                                <div class="col-md-12">
                                    <div class="section-heading">
                                    <h2>Registre</h2>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="contact-form">
                                    <form id="contact" action="" method="post">
                                        <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                        <form action="" method="POST">  
                                        Fiche Personnelle : <hr>
                                            <fieldset>                                              
                                            <input id="nom" name="nom" type="text" class="form-control" placeholder="Nom" required="">
                                            </fieldset>
                                            <fieldset>                                              
                                            <input id="prenom" name="prenom" type="text" class="form-control" placeholder="Prenom" required="">
                                            </fieldset>
                                            <fieldset>                                              
                                            <input id="email" name="email" type="text" class="form-control" placeholder="Email" required="" pattern=".+@gmail.com|.+@esprit.tn">
                                            </fieldset>
                                            Information de Connexion : <hr>
                                            <fieldset>                                              
                                            <input id="login" name="login" type="text" class="form-control" placeholder="Login" required="">
                                            </fieldset>
                                            <fieldset>                                              
                                            <input id="pass" name="pass" type="password" class="form-control" placeholder="Password" required="">
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-12">
                                            <fieldset>
                                            <button type="submit" id="form-submit" class="filled-button">Submit</button>
                                            <button type="reset" id="form-submit" class="filled-button">Reset</button>
                                            </fieldset>
                                        </div>
                                        </div>
                                    </form>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="left-content">
                            
                                        <br> 
                                    </div>
                                    </div>
                                </div>
                            </div>
                        <div id="error">
                            <?php echo $error; ?>
                        </div>
                    </body>
                </html>
                <!-- 7abbes 7abbes -->
        </div>

        <br>
        
        <div>
        </div>
      </div>
    </div>
    
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <p>Copyright © jobflex company <a href="https://www.phpjabbers.com/">PHPJabbers.com</a></p>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Book Now</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="contact-form">
              <form action="#" id="contact">
                  <div class="row">
                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Pick-up location" required="">
                          </fieldset>
                       </div>

                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Return location" required="">
                          </fieldset>
                       </div>
                  </div>

                  <div class="row">
                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Pick-up date/time" required="">
                          </fieldset>
                       </div>

                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Return date/time" required="">
                          </fieldset>
                       </div>
                  </div>
                  <input type="text" class="form-control" placeholder="Enter full name" required="">

                  <div class="row">
                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Enter email address" required="">
                          </fieldset>
                       </div>

                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Enter phone" required="">
                          </fieldset>
                       </div>
                  </div>
              </form>
           </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-primary">Book Now</button>
          </div>
        </div>
      </div>
    </div>


    <!-- Bootstrap core JavaScript -->
    <script src="../FrontAssets/vendor/jquery/jquery.min.js"></script>
    <script src="../FrontAssets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="../FrontAssets/js/custom.js"></script>
    <script src="../FrontAssets/js/owl.js"></script>
  </body>

</html>
