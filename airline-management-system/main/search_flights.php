<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Search flights | Airline Management System</title>
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

  <!-- Template Main CSS File -->
  <link href="assets_welcome_page/css/style.css" rel="stylesheet">


  <style>

#preloader {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  z-index: 9999;
  overflow: hidden;
  background: rgba(17, 88, 209, 0.9);
}

#preloader:before {
  content: "";
  position: fixed;
  top: calc(50% - 30px);
  left: calc(50% - 30px);
  border: 6px solid rgba(17, 88, 209, 0.9);
  border-top-color: #fff;
  border-bottom-color: #fff;
  border-radius: 50%;
  width: 60px;
  height: 60px;
  -webkit-animation: animate-preloader 1s linear infinite;
  animation: animate-preloader 1s linear infinite;
}

@-webkit-keyframes animate-preloader {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}

@keyframes animate-preloader {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}

#header .logo {
      font-size: 20px;
      margin: 0;
      padding: 0;
      line-height: 1;
      font-weight: 450;
      letter-spacing: 1px;
      text-transform: uppercase;
    }
    
    #header .logo img {
      max-height: 40px;
    }
    

    .col-sm-3 {
    width: 20%;
    text-align:left;
  }


  .cards
{
    display:grid;
    grid-template-columns: repeat(4,1fr);
    grid-gap: 2rem;
    margin-top: 1rem;
}

.card-single
{
    display: flex;
    justify-content: space-between;
    background: #fff;
    padding: 2rem;
    border-radius: 2px;
    box-shadow:4px 4px 10px rgba(0,0,0,0.3);
}
.card-single div:last-child span
{
 font-size:3rem;
 color: var(--main-color);
}
.card-single div:first-child span
{
    color: var(--text-grey);
}

label {
    float: left
}
span {
    display: block;
    overflow: visible;
    padding: 0 4px 0 6px
}
input {
    width: 100%;
}
    </style>

  
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center">

     
      <a href="index.php" class="logo me-auto"><img src="assets_welcome_page/img/iitdh_logo.png" alt="" class="img-fluid"></a>
      <h1 class="logo me-auto"><a href="index.php">Airline Management System</a></h1>
    

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto " href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About Us</a></li>
          <li><a class="nav-link scrollto" href="process_login_signup.php">Book now</a></li>
          <li><a class="nav-link   scrollto active" href="search_flights.php">Search flights</a></li>
          <li><a class="nav-link scrollto" href="https://github.com/Sid-Shankar/SSL_Project" target="_blank">Github repo</a></li>
          <li><a class="nav-link scrollto" href="#faq">FAQ</a></li>
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
          <li>Search flights</li>
        </ol>
        <h2>Search flights</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
      <div class="container">
        <p>

        </p>


        <div class="container-fluid h-100">
          <div class="row h-100 align-items-center justify-content-center text-center">
            <div class="col-lg-10 align-self-end mb-4 page-title">
              <h3 style="color: orangered;font-family: Verdana, Geneva, Tahoma, sans-serif ;font-weight: bold;border-bottom: 1px solid #e7510c;padding-bottom: 10px;">SEARCH FLIGHTS HERE </h3>
              <br>

              <div class="card-single">
          <form action="search_results.php" method="post" onsubmit="return formValidation()">
            <div class="form-row">   
                <div class="form-group col-md-6" style="text-align:left;">
                <label for="exampleInputPassword1">From: <span class="required error" id="from_info"></span></label>
                <span><input style="width: 600px;" type="text" class="form-control" pattern="[a-zA-Z]+" maxlength="50" title="Max 50 aphabets without digits are required." name="start" aria-describedby="emailHelp" placeholder="Enter Starting Location" required ></span>
                </div>
                
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <div class="form-group col-md-6" style="text-align:left;">
                <label for="exampleInputPassword1">To: <span class="required error" id="to_info"></span></label>
                <input style="width: 600px;" type="text" class="form-control" pattern="[a-zA-Z]+" maxlength="50" title="Max 50 alphabets without digits are required." name="destination" aria-describedby="emailHelp" placeholder="Enter Destination" required >
                </div>
                &nbsp;&nbsp;&nbsp;&nbsp;
                <div class="form-group col-md-6" style="text-align:left;">
                <label for="exampleInputPassword1">Departure Date:<span class="required error" id="doj_info"></span></label>
                <input style="width: 600px;" type="date" class="form-control" name="date" aria-describedby="emailHelp" required >
                </div>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </div>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <button  type="submit" class="btn btn-primary">Search Flights</button>
          </form>
         </div> 

            </div>


          </div>
        </div>

      </div>



    </section>


    <script>
function formValidation() {
	var valid = true;


	$("#start").removeClass("error-field");
	$("#destination").removeClass("error-field");
	$("#date").removeClass("error-field");
	


	var Start = $("#start").val();
	var Destination = $("#destination").val();
	var Doj =$("#date").val();
	


   if(Start.trim() == "")
   {
	     $("#from_info").html("required.").css("color", "#ee0000").show();
		$("#start").addClass("error-field");
		valid = false;
   }

    if(Destination.trim() == "")
	{
		$("#to_info").html("required.").css("color", "#ee0000").show();
		$("#destination").addClass("error-field");
		valid = false;
	}


	if(Doj.trim() == "")
	{
		$("#doj_info").html("required.").css("color", "#ee0000").show();
		$("#date").addClass("error-field");
		valid = false;
	}

	if (valid == false) {
		$('.error-field').first().focus();
		valid = false;
	}
	return valid;
}

</script>



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
              <li><i class="bx bx-chevron-right"></i> <a href="search_flights.php">Search flights</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php#faq">FAQ</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="https://github.com/Sid-Shankar/SSL_Project" target="_blank">Github repo</a></li>
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
        &copy; Copyright <strong><span>Airline Management system | CS213: SSL Course Project</span></strong>
      </div>
    </div>
  </footer><!-- End Footer -->

  

 
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