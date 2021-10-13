<?php

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    

    if($_POST["pass_login"])
    {
        header("Location: passenger_login_signup/passenger_login.php");
    }
    else if($_POST["admin_login"])
   {
    header("Location: admin_login/admin_login.php");
   }
    
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Login/Signup | Airline Management System</title>
  <meta content="" name="description">
  <meta content="" name="keywords">



  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets_welcome_page/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets_welcome_page/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets_welcome_page/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets_welcome_page/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets_welcome_page/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets_welcome_page/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets_welcome_page/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrapper{
            font: 14px sans-serif
            width: 360px; padding: 20px; }

    </style>

  <!-- Template Main CSS File -->
  <link href="assets_welcome_page/css/style.css" rel="stylesheet">

  <style>

#header .logo {
  font-size: 20px;
  margin: 0;
  padding: 0;
  line-height: 1;
  font-weight: 450;
  letter-spacing: 2px;
  text-transform: uppercase;
}

#header .logo img {
  max-height: 40px;
}

</style>

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center">
  
    <a href="index.php" class="logo me-auto"><img src="assets_welcome_page/img/iitdh_logo.png" alt="" class="img-fluid"></a>
      <h1 class="logo me-auto"><a href="index.php">Airline Mgmt System</a></h1>

     

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="index.php">Home</a></li>
          <li><a class="nav-link scrollto" href="index.php#about">About Us</a></li>
          <li><a class="nav-link scrollto" href="process_login_signup.php">Book now</a></li>
          <li><a class="nav-link   scrollto" href="search_flights.html">Search flights</a></li>
          <li><a class="nav-link scrollto" href="index.php#contact">Contact Us</a></li>
          <li><a class="nav-link scrollto" href="index.php#faq">FAQ</a></li>
          <li><a class="getstarted scrollto" href="process_login_signup.php">Login/Signup</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index.php">Home</a></li>
          <li>Login/Signup</li>
        </ol>
        <h2>Login/Signup details</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
      <div class="container">
        <p>

        </p>


        <div class="container-fluid h-100">
          <div class="row h-100 align-items-center justify-content-center text-center">
            <div class="col-lg-10 align-self-end mb-4 page-title">
            <div class="wrapper">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <h2>For Passenger login/signup, click below.</h2>
                <br>
                <input type="submit" class="btn btn-danger" value="Passenger Login" name="pass_login">
                <br>
                <br>
               <h2>For Administrator login, click below.</h2>
               <br>
                <input type="submit" class="btn btn-warning" value="Admin Login" name="admin_login" ><br>
            </div>
        </form>
    </div>

            </div>


          </div>
        </div>

      </div>



    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">


    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Airline Management System</h3>
            <p>
              XYZ Road <br>
              Dharwad, Karnataka 1100XX<br>
              India <br><br>
              <strong>Phone:</strong> +91-99999999<br>
              <strong>Email:</strong> infoxyz@iitdh.ac.in<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Important Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php#hero">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="process_login_signup.php">Login/Signup</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php#about">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="process_login_signup.php">Book Now</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="search_flights.html">Search flights</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php#faq">FAQ</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php#contact">Contact Us</a></li>
            </ul>
          </div>


          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p>Connect with us through any of them</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>Airline Management system</span></strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets_welcome_page/vendor/aos/aos.js"></script>
  <script src="assets_welcome_page/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets_welcome_page/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets_welcome_page/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets_welcome_page/vendor/php-email-form/validate.js"></script>
  <script src="assets_welcome_page/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets_welcome_page/vendor/waypoints/noframework.waypoints.js"></script>

  <!-- Template Main JS File -->
  <script src="assets_welcome_page/js/main.js"></script>

</body>

</html>