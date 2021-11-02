<?php 
include "createdb.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Airline management system</title>
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
    width: 100%;
  }

    </style>

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <a href="index.php" class="logo me-auto"><img src="assets_welcome_page/img/iitdh_logo.png" alt="" class="img-fluid"></a>
      <h1 class="logo me-auto"><a href="index.php">Airline Management System</a></h1>


      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About Us</a></li>
          <li><a class="nav-link scrollto" href="process_login_signup.php">Book now</a></li>
          <li><a class="nav-link   scrollto" href="search_flights.html">Search flights</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact Us</a></li>
          <li><a class="nav-link scrollto" href="#faq">FAQ</a></li>
          <li><a class="getstarted scrollto" href="process_login_signup.php">Login/Signup</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">

        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
          data-aos="fade-up" data-aos-delay="200">
          <h1>Cheap.Secure.Fast.</h1>
          <h2>Book your flight tickets, now !</h2>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="process_login_signup.php" class="btn-get-started scrollto">Book Now</a>
            <span>
              &nbsp;&nbsp;
              <a href="search_flights.html" class="btn-get-started scrollto">Search flights</a>
            </span>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="assets_welcome_page/img/slide3.jpg" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Cliens Section ======= -->
    <section id="cliens" class="cliens section-bg">
      <div class="container">
        <div class="section-title">
          <h2>Partner Airlines</h2>
        </div>

        <div class="row" data-aos="zoom-in">

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets_welcome_page/img/clients/client-1.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets_welcome_page/img/clients/client-2.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets_welcome_page/img/clients/client-3.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets_welcome_page/img/clients/client-4.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets_welcome_page/img/clients/client-6.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets_welcome_page/img/clients/client-7.png" class="img-fluid" alt="">
          </div>

        </div>

      </div>
    </section><!-- End Cliens Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About Us</h2>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <p>
              Airline Management system offers you a wide variety of features. Some of which are listed below:
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Search and book flights from all over the world.</li>
              <li><i class="ri-check-double-line"></i> You get an online check in option when you book with us.</li>
              <li><i class="ri-check-double-line"></i> Experience a smooth, fast booking experience.</li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
              Airline Management System is a dedicated and highly configurable system for all airlines, which can
              be easily accessed by all users. It helps the users to book flights without visiting offline booking
              counters. This system can be accessible by any user from any location at any time. In such a system, a
              passenger should be able to view the availability of flights’ details, as per their requirement. They can
              book the flights online and can also cancel the reservation. The administrator manages the passenger
              booking system and updates the reservation status.
            </p>
            <a href="#" class="btn-learn-more">Read More</a>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->


    <!-- ======= Skills Section ======= -->
    <!-- By skills we are referring to our status in the market  -->

    <section id="skills" class="skills">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
            <img src="assets_welcome_page/img/survey.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
            <h3>Where do we stand when compared to others</h3>
            <p class="fst-italic">
              Below data is based XYZ Airline survey 2021 by Surveymoneky private Ltd.
            </p>

            <div class="skills-content">

              <div class="progress">
                <span class="skill">Airline Mgmt system <i class="val">90%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                  </div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">Ixigo <i class="val">90%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">
                  </div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">Expedia <i class="val">75%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                  </div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">Make my trip <i class="val">55%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                  </div>
                </div>
              </div>

            </div>

          </div>
        </div>

      </div>
    </section><!-- End Skills Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Services</h2>
          <p>These are some of the services we offer</p>
        </div>

        <div class="row">
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4><a href="">Worldwide coverage</a></h4>
              <p>Search and book flights from all over the world.</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
            data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4><a href="">Online Check in</a></h4>
              <p>You get an online check in option when you book with us.</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in"
            data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4><a href="">Fastest on the planet</a></h4>
              <p>Experience a smooth, fast booking experience.</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in"
            data-aos-delay="400">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-layer"></i></div>
              <h4><a href="">Best security</a></h4>
              <p>Your data is secure with us</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->


    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Our Team</h2>
          <p>Meet our team members who developed this website</p>
        </div>

        <div class="row">

          <div class="col-lg-6">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
              <div class="pic"><img src="assets_welcome_page/img/clients/usericon-resize.png" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Raghav Magazine</h4>
                <span>Web Developer</span>
                <p>200010042</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4 mt-lg-0">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="200">
              <div class="pic"><img src="assets_welcome_page/img/clients/usericon-resize.png" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Siddharth Shankar</h4>
                <span>Web developer</span>
                <p>200030056</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="300">
              <div class="pic"><img src="assets_welcome_page/img/clients/usericon-resize.png" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Person 3</h4>
                <span>Tarun Saini</span>
                <p>200010051</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>



        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Plans for Travellers</h2>
          <p>Choose that plan which fits your lifestyle</p>
        </div>

        <div class="row">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="box featured">
              <h3>Free Plan</h3>
              <h4>Rs.0<span>per month</span></h4>
              <ul>
                <li><i class="bx bx-check"></i> 10% Cancellation charges applicable for any booking</li>
                <li><i class="bx bx-check"></i> Customer Support 24/7</li>
                <li><i class="bx bx-check"></i>Online Check-in facility</li>
                <li class="na"><i class="bx bx-x"></i> <span>Receive priority on Customer Support </span></li>
                <li class="na"><i class="bx bx-x"></i> <span>Zero Cancellation charges</span></li>
              </ul>
              <a href="#" class="buy-btn">Get Started</a>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="box featured">
              <h3>Silver Plan</h3>
              <h4>Rs.299<span>per month</span></h4>
              <ul>
                <li><i class="bx bx-check"></i> 10% Cancellation charges applicable for any booking</li>
                <li><i class="bx bx-check"></i> Customer Support 24/7</li>
                <li><i class="bx bx-check"></i>Online Check-in facility</li>
                <li><i class="bx bx-check"></i> <span>Receive priority on Customer Support </span></li>
                <li class="na"><i class="bx bx-x"></i> <span>Zero Cancellation charges</span></li>
              </ul>
              <a href="#" class="buy-btn">Get Started</a>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="box featured">
              <h3>Diamond Plan</h3>
              <h4>Rs.999<span>per month</span></h4>
              <ul>
                <li class="na"><i class="bx bx-x"></i> 10% Cancellation charges applicable for any booking</li>
                <li><i class="bx bx-check"></i> Customer Support 24/7</li>
                <li><i class="bx bx-check"></i>Online Check-in facility</li>
                <li><i class="bx bx-check"></i> <span>Receive priority on Customer Support </span></li>
                <li><i class="bx bx-check"></i> <span>Zero Cancellation charges</span></li>
              </ul>
              <a href="#" class="buy-btn">Get Started</a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Pricing Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Frequently Asked Questions</h2>
          <p>Here you will find some of the frequently asked questions by our passengers.</p>
        </div>

        <div class="faq-list">
          <ul>
            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse"
                data-bs-target="#faq-list-1">What is Airline Management system?<i
                  class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                <p>
                  It's an online platform where you can search and book flights spanning all over the world.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2"
                class="collapsed">What are your terms of use and privacy policy? Where can I read more about it? <i
                  class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Please go to 'About Us' section on the top navigation bar.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3"
                class="collapsed">How do I cancel my ticket on Airline Mgmt system? <i
                  class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Login into your account, then on the user dashboard page, select 'cancel ticket' option to cancel your
                  ticket.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4"
                class="collapsed">How do I get a refund on a ticket booking through Airline Mgmt system? <i
                  class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Refunds will be automatically processed from our side within 24 hours of cancelling the ticket with
                  appropriate charges.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="500">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5"
                class="collapsed">Why is Airline Mgmt system different from other travel booking platforms? <i
                  class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Because it was built to be different from others !
                </p>
              </div>
            </li>

          </ul>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= Contact Section ======= -->

    <!-- UPDATE (6 oct 2021) : Contact form empty input needs to be validated       -->

    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact Us</h2>
          <p>We'd love to hear from you. Please drop us a message if you have any query.</p>
        </div>

        <div class="row">


          <center>
            <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
              <form action="" method="post" role="form" onsubmit="return formValidation()" class="php-email-form" >
                <div class="row">
                  <div class="form-group col-md-6" style="text-align: left;">
                    <label for="name" id="name_info">Name</label>
                    <input type="text" pattern="[a-zA-Z]+" maxlength="50" title="Max 50  characters without digits are required." name="name" class="form-control" id="name" required>
                  </div>
                  <div class="form-group " style="text-align: left;">
                    <label for="name">Email</label>
                    <input type="email" class="form-control" name="email" id="email" required>
                  </div>
                </div>
                <div class="form-group" style="text-align: left;">
                  <label for="name">Subject</label>
                  <input type="text" pattern="[a-zA-Z]+" maxlength="50" title="Max 50  characters without digits are required." class="form-control" name="subject" id="subject" required>
                </div>
                <div class="form-group" style="text-align: left;">
                  <label for="name">Your Message</label>
                  <textarea class="form-control" name="message" rows="10" required></textarea>
                </div>
                <div class="text-center"><input type="submit" class="btn btn-primary" value="Send Message"
                  onclick="alert('Congo! We have received your message');" ></div>

              </form>
            </div>
          </center>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->



  <script>
function formValidation() {
	var valid = true;

	$("#name").removeClass("error-field");
	$("#email").removeClass("error-field");
	$("#password").removeClass("error-field");
	$("#passport_number").removeClass("error-field");


	var Name = $("#passenger_id").val();
	var Email = $("#email_id").val();
	var Passportno=$("#passport_no").val();
	var Password = $('#signup-password').val();
	var emailRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;



	if (Name.trim() == "") {
		$("#name_info").html("required.").css("color", "#ee0000").show();
		$("#name").addClass("error-field");
		valid = false;
	}
	if (Passportno.trim() == "") {
		$("#passport_number_info").html("required.").css("color", "#ee0000").show();
		$("#passport_number").addClass("error-field");
		valid = false;
	}
	
	if (Email == "") {
		$("#email_info").html("required").css("color", "#ee0000").show();
		$("#email").addClass("error-field");
		valid = false;
	} else if (Email.trim() == "") {
		$("#email_info").html("Invalid email address.").css("color", "#ee0000").show();
		$("#email").addClass("error-field");
		valid = false;
	} else if (!emailRegex.test(Email)) {
		$("#email_info").html("Invalid email address.").css("color", "#ee0000")
				.show();
		$("#email").addClass("error-field");
		valid = false;
	}
	if (Password.trim() == "") {
		$("#password_info").html("required.").css("color", "#ee0000").show();
		$("#password").addClass("error-field");
		valid = false;
	}
	if (valid == false) {
		$('.error-field').first().focus();
		valid = false;
	}


 if(valid==true)
 {
     Alert();
    
 }

	
 return valid;
}


</script>


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