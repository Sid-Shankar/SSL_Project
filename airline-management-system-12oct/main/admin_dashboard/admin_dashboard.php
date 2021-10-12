<?php
session_start();
if (isset($_SESSION["admin_id"])) {
    $admin_id = $_SESSION["admin_id"];
    session_write_close();
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



<html>
<head>
<title>Welcome to admin dashboard</title>
<link href="assets/css/style.css" type="text/css"
	rel="stylesheet" />
<link href="assets/css/admin_login_signup.css" type="text/css"
	rel="stylesheet" />
</head>
<body>
	<div class="ams-container">
		<div class="page-header">
			<span class="login-signup"><a href="../admin_login/admin_logout.php">Click here to Logout</a></span>
		</div>
		<div class="page-content">Welcome <?php echo $admin_id;?></div>
        <br><br>
        <div class="page-content">Note:1) Please use Admin dashboard page instead of this page.</div>
        <br> <br>
        <div class="page-content">2)Please use admin_logout.php for sign out option in admin_dashboard</div>
        <br><br>
        <div class="page-content"><b>3)Work in Progress ...<b>  </div>
	</div>
</body>
</html>
