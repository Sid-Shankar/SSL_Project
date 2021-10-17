<?php
session_start();
if (isset($_SESSION["admin_id"])) {
    $admin_id = $_SESSION["admin_id"];
} else {

    // means the username is not set in session, the user is not-logged-in
    // he is trying to access this page unauthorized
    // so let's clear all session variables and redirect him to admin login

    session_unset();
    session_write_close();
    $url = "../admin_login/index.php";
    header("Location: $url");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Airline management system</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  
<!-- Favicons are not needed (that logo on tab name)-->
  

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets_welcome_page/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets_welcome_page/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets_welcome_page/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets_welcome_page/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets_welcome_page/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets_welcome_page/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets_welcome_page/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="../assets_welcome_page/vendor/line-awsome/line-awesome.min.css" rel="stylesheet">  
<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

  <!-- Template Main CSS File -->
  <link href="../assets_welcome_page/css/style.css" rel="stylesheet">
  <link href="../assets_welcome_page/css/style2.css" rel="stylesheet">

</head>

<body>
   <input type="checkbox" id="nav-toggle"> 
    <div class="sidebar">
        <div class="sidebar-brand">
           <h2>
               <center>
                   <br/>
                <span>Airline Management</span>
                </center>
           </h2>
        </div>
        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="" class="active"><span class="las la-home"></span>
                    <span>Dashboard</span></a>
                </li>
		<br>
                <li>
                    <a href="profile.html"><span class="las la-user-circle"></span>
                    <span>Profile</span></a>
                </li>
                <br/>
                <li>
                    <a href=""><span class="las la-sign-out-alt"></span>
                    <span>Sign Out</span></a>
                </li>
            </ul>
        </div>
    </div>
<div class="main-content">
<main>
	 <!-- ======= Header ======= -->
        <header>
           <h2>
             <label for="nav-toggle">
                 <span class="las la-bars"></span>
             </label>
             Dashboard
            </h2>
        </header>
    <!-- ======= Dashboard Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon">
		<i class="las la-plane"></i>
		</div>
              <h4><a href="">Add a new flight</a></h4>
              <p>Add a new Flights for Passengers and delight them by your services.</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
            data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="las la-redo"></i><i class="las la-plane"></i></div>
              <h4><a href="">Update an existing flight</a></h4>
              <p>Make changes to previously added flights.</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in"
            data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="las la-undo"></i><i class="las la-plane"></i></div>
              <h4><a href=""> Remove an existing flight</a></h4>
              <p>Cancel the flight scheduled.</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in"
            data-aos-delay="400">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-redo"></i><i class="bx bx-copy"></i></div>
              <h4><a href="">Update reservation status</a></h4>
              <p>make changes to reservation status</p>
            </div>
          </div>

        </div>

<br>
<br>

        <div class="row">
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="las la-eye"></i></div>
              <h4><a href="">View all flights</a></h4>
              <p>Have a look on all the added flights available.</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
            data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-book"></i></div>
              <h4><a href="">View Booked flights</a></h4>
              <p>View all the booked flights by passengers.</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in"
            data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="las la-ban"></i></div>
              <h4><a href="">Delete a passenger record</a></h4>
              <p>Remove the record of passenger with cancelled booking.</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in"
            data-aos-delay="400">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-user"></i></div>
              <h4><a href="">View all passenger record</a></h4>
              <p>Passengers who have booked the filght</p>
            </div>
          </div>

        </div>

      </div>
    </section>
</main>
</div><!--End #mainContent-->   
  <!-- Vendor JS Files -->
  <script src="../assets_welcome_page/vendor/aos/aos.js"></script>
  <script src="../assets_welcome_page/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets_welcome_page/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets_welcome_page/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets_welcome_page/vendor/php-email-form/validate.js"></script>
  <script src="../assets_welcome_page/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets_welcome_page/vendor/waypoints/noframework.waypoints.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets_welcome_page/js/main.js"></script>

</body>

</html>