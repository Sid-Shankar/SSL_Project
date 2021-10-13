<?php
session_start();
if (isset($_SESSION["passenger_id"])) {
    $passenger_id = $_SESSION["passenger_id"];
    session_write_close();
} else {

    // means the username is not set in session, the user is not-logged-in
    // he is trying to access this page unauthorized
    // so let's clear all session variables and redirect him to passenger login

    session_unset();
    session_write_close();
    $url = "../passenger_login_signup/index.php";
    header("Location: $url");
}

?>



<html>
<head>
<title>Welcome to User/Passenger dashboard</title>
<link href="assets/css/style.css" type="text/css"
	rel="stylesheet" />
<link href="assets/css/passenger_login_signup.css" type="text/css"
	rel="stylesheet" />
</head>
<body>
	<div class="ams-container">
		<div class="page-header">
			<span class="login-signup"><a href="../passenger_login_signup/passenger_logout.php">Click here to Logout</a></span>
		</div>
		<div class="page-content">Welcome <?php echo $passenger_id;?></div>
        <br><br>
        <div class="page-content">Note:1) Please use user_dashboard page instead of this page.</div>
        <br> <br>
        <div class="page-content">2)Please use passenger_logout.php for sign out option in user_dashboard</div>
        <br><br>
        <div class="page-content">3)You can use the word "passenger" instead of "user" as we have seperate dashboard for admin and passenger. </div>
	</div>
</body>
</html>
