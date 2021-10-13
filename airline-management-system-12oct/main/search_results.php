<?php
error_reporting(0);
//session_start();

//**** UPDATE (1 oct ) This php file is working fine 

//styling of the table and head line needs to be change

$con = new mysqli("localhost","root","","airline_system");
{

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Search Results | Airline Management System</title>
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

  <!-- search flights css files and scripts -->

  <link href="assets_searchflights/css/bootstrap.css" rel="stylesheet" />
    <link href="assets_search_results/css/font-awesome.css" rel="stylesheet" />
    <link href="assets_search_results/css/style.css" rel="stylesheet" />

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
      
    <a href="index.html" class="logo me-auto"><img src="assets_welcome_page/img/iitdh_logo.png" alt="" class="img-fluid"></a>
      <h1 class="logo me-auto"><a href="index.html">Airline Mgmt System</a></h1>
      

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto " href="index.html">Home</a></li>
          <li><a class="nav-link scrollto" href="index.html#about">About Us</a></li>
          <li><a class="nav-link scrollto" href="process_login_signup.php">Book now</a></li>
          <li><a class="nav-link  scrollto active" href="search_flights.html">Search flights</a></li>
          <li><a class="nav-link scrollto" href="index.html#contact">Contact Us</a></li>
          <li><a class="nav-link scrollto" href="index.html#faq">FAQ</a></li>
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
          <li><a href="index.html">Home</a></li>
          <li>Search results</li>
        </ol>
        <h2>Search results ( Work in progress....) </h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
      <div class="container">
        <p>

        </p>


        <div class="container-fluid h-100">
          <div class="row h-100 align-items-center justify-content-center text-center">
            <div class="col-lg-10 align-self-end mb-4 page-title">
              <h3> </h3>
              <br>
              


<div class="content-wrapper">
        <div class="container">
              <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line" style="font-weight: 900;
    padding-bottom: 20px;
    text-align:center;
    text-transform: uppercase;
    border-bottom: 1px solid #e7510c;
    padding-bottom: 3px;
    color: #e7510c;
    font-size: 30px;
    margin-bottom: 40px;
    padding-right: 10px;">List of available flights</h1>
                        <br>
                    </div>
                </div>
                <div class="row" >
            
                <div class="col-md-12">
                    <!--    Bordered Table  -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive table-bordered">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Flight no. </th>
                                            <th>Flight type </th>
                                            <th>Source</th>
                                             <th>Desination</th>
                                             <th>D.O.J</th>
                                             <th>Departure time</th>
                                             <th>Arrival time</th>
                                             <th>Class</th>
                                             <th>Meal</th>
                                            <th>intermediate_stops</th>
                                             <th>Flight status</th>
                                             <th>Amount</th>
                                             <th>Discount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
<?php


$get_source=$_POST["departure_airport_id"];
$get_destination=$_POST["arrival_airport_id"];
$get_doj=$_POST["date"];



$sql=mysqli_query($con,"select * from flights where source= '$get_source' and destination= '$get_destination' and date_of_journey= '$get_doj' ");

if(mysqli_num_rows($sql) > 0)
{

$cnt=1;
while($row=mysqli_fetch_array($sql))
 {
  
?>


                                        <tr>
                                            <td><?php echo $cnt;?></td>
                                              <td><?php echo htmlentities($row['flight_no']);?></td>
                                            <td><?php echo htmlentities($row['type_of_flight']);?></td>
                                            <td><?php echo htmlentities($row['source']);?></td>
                                            <td><?php echo htmlentities($row['destination']);?></td>
                                             <td><?php echo htmlentities($row['date_of_journey']);?></td>
                                             <td><?php echo htmlentities($row['departure_time']);?></td>
                                             <td><?php echo htmlentities($row['arrival_time']);?></td>
                                             <td><?php echo htmlentities($row['type_of_class']);?></td>
                                             <td><?php echo htmlentities($row['meal']);?></td>
                                             <td><?php echo htmlentities($row['intermediate_stops']);?></td>
                                             <td><?php echo htmlentities($row['flight_status']);?></td>
                                             
                                             <td><?php echo htmlentities($row['amount']);?></td>
                                             <td><?php echo htmlentities($row['discount']);?></td>
                                             <td>
                                      
                                      <a href="process_login_signup.php" onClick="return confirm('Please login/signup first in order to make booking .')">
                                                                                  <button class="btn btn-danger">Book</button>
                                      </a>
                                    </td>

                                        </tr>
<?php 
$cnt++;
 } 

}
else
{
   echo"<h2>Sorry ! No flights are available as per your search . <h2><br>" ;

}?>

                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                     <!--  End  Bordered Table  -->
                </div>
            </div>





        </div>
    </div>
 
    <!-- JAVASCRIPT AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY SCRIPTS -->
    <script src="assets_search_results/js/jquery-1.11.1.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets_search_results/js/bootstrap.js"></script>



              
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
              <li><i class="bx bx-chevron-right"></i> <a href="#hero">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="process_login_signup.php">Login/Signup</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="process_login_signup.php">Book Now</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="search_flights.html">Search flights</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#faq">FAQ</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#contact">Contact Us</a></li>
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
<?php } ?>