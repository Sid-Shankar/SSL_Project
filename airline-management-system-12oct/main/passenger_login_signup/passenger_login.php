<?php
use AMS\Member;

if (! empty($_POST["login-btn"])) {
    require_once __DIR__ . '/Model/Member.php';
    $member = new Member();
    $loginResult = $member->loginMember();
}
?>


<html>
<head>
<title>Login</title>
<link href="assets/css/style.css" type="text/css"
	rel="stylesheet" />
<link href="assets/css/passenger_login_signup.css" type="text/css"
	rel="stylesheet" />
<script src="vendor/jquery/jquery-3.3.1.js" type="text/javascript"></script>

<style>
        body{ 
            font: 14px sans-serif;
            background-image: url('assets/img/slide4.jpg');
           background-repeat: no-repeat;
           background-attachment: fixed;
           background-size: cover; 
        }
      
 </style>

	</head>

<body>
	<div class="ams-container">
		<div class="sign-up-container">
			<div class="signup-align">
				<form name="login" action="" method="post"
					onsubmit="return loginValidation()">
					<div class="signup-heading">Passenger Login</div>
				<?php if(!empty($loginResult)){?>
				<div class="error-msg"><?php echo $loginResult;?></div>
				<?php }?>
				<div class="row">
						<div class="inline-block">
							<div class="form-label">
								Passenger ID<span class="required error" id="passenger_id_info"></span>
							</div>
							<input class="input-box-330" type="text" name="passenger_id"
								id="passenger_id">
						</div>
					</div>
					<div class="row">
						<div class="inline-block">
							<div class="form-label">
								Password<span class="required error" id="login-password-info"></span>
							</div>
							<input class="input-box-330" type="password"
								name="login-password" id="login-password">
						</div>
					</div>
					<div class="row">
						<input class="btn" type="submit" name="login-btn"
							id="login-btn" value="Login">	
					</div>
					<div class="row">
					<p>Don't have an account? <a href="passenger_signup.php">Sign up now</a>.</p>
					</div>
					<div class="row">
					<button onclick="location.href = '../index.html';" id="myButton" class="btn" >Go Home</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<script>
function loginValidation() {
	var valid = true;
	$("#passenger_id").removeClass("error-field");
	$("#password").removeClass("error-field");

	var Passenger_id = $("#passenger_id").val();
	var Password = $('#login-password').val();

	$("#passenger_id_info").html("").hide();

	if (Passenger_id.trim() == "") {
		$("#passenger_id_info").html("required.").css("color", "#ee0000").show();
		$("#passenger_id").addClass("error-field");
		valid = false;
	}
	if (Password.trim() == "") {
		$("#login-password-info").html("required.").css("color", "#ee0000").show();
		$("#login-password").addClass("error-field");
		valid = false;
	}
	if (valid == false) {
		$('.error-field').first().focus();
		valid = false;
	}
	return valid;
}


</script>
</body>
</html>
