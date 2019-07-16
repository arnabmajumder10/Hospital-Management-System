<?php
include('login.php');
if (isset($_SESSION['sess_userid']) && $_SESSION['sess_role'] == "admin") {
  header("Location: adminDashboard.php");
}
elseif (isset($_SESSION['sess_userid']) && $_SESSION['sess_role'] == "doctor") {
  header("Location: doctorDashboard.php");
}
elseif (isset($_SESSION['sess_userid']) && $_SESSION['sess_role'] == "reception") {
  header("Location: receptionDashboard.php");
}
elseif (isset($_SESSION['sess_userid']) && $_SESSION['sess_role'] == "accountant") {
  header("Location: accountantDashboard.php");
}
elseif (isset($_SESSION['sess_userid']) && $_SESSION['sess_role'] == "laboratorist") {
  header("Location: laboratoristDashboard.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=1,initial-scale=1,user-scalable=1" />
	<link rel="icon" type="image/png" href="./assets/img/logo.png" />
	<title>eHospital Login</title>

	<link href="./loginAssets/css/fonts.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="./loginAssets/bootstrap/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="./loginAssets/css/styles.css" />
</head>
<body>

	<section class="container login-form">
		<section>
			<form method="post" action="" role="login">
				<!--<img src="assets/images/logo.png" alt="" class="img-responsive" />-->

				<h1 style="margin-bottom: 30px">eHospital</h1>

				<div class="form-group">
					<select name="role" required class="form-control">
						<option value="" disabled selected hidden>Please select your role</option>
						<option value="admin">Admin</option>
						<option value="reception">Receptionist</option>
						<option value="doctor">Doctor</option>
						<option value="accountant">Accountant</option>
						<option value="laboratorist">Laboratorist</option>
					</select>
				</div>

				<div class="form-group">
					<input type="text" name="userid" required class="form-control" placeholder="UserID" />
				</div>

				<div class="form-group">
					<input type="password" name="password" required class="form-control" placeholder="Password" />
				</div>

				<button type="submit" name="submit" class="btn btn-primary btn-block">Login Now</button>
			</form>
		</section>
	</section>

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>

	<script>
	$( document ).ready(function() {
	    $('#tooltip').tooltip();
	});
	</script>

</body>
</html>
