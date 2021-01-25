<?php
	session_start();
?>


<!DOCTYPE html>
<html>
	<head>
		<title>Register Page</title>

	<link rel="stylesheet" type="text/css" href="../css/style.css">

	<!-- CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- jQuery and JS bundle w/ Popper.js -->
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
		
	<script type="text/javascript" src="../js/app.js"></script>
	</head>

	<body class="register_class" style="background-color: #e0e0d1;">

		<div class="container vh-100">
			<div class="row justify-content-center h-100">
				<div class="card w-25 my-auto shadow-lg bg-white rounded">
					<div class="card-header bg-primary text-white text-center">
						<h2 class="mt-2">REGISTER</h2>
					</div>
					<div class="card-body">
						<form action="user.php" method="POST">
							<div class="form-group">
								<label for="">Full Name</label>
								<input class="form-control" type="text" name="fullname" id="fullname">
							</div>
							<div class="form-group">
								<label for="">Username</label>
								<input class="form-control" type="text" name="username" id="username">
							</div>
							<div class="form-group">
								<label for="">Password</label>
								<input class="form-control" type="password" name="password" id="password">
							</div>
							<div class="form-group">
								<label for="">Re-enter Password</label>
								<input class="form-control" type="password" name="r_password" id="r_password">
							</div>
							<input class="btn btn-primary w-100" type="submit" value="CREATE ACCOUNT" name="register">
						</form>
						<?php
								if(isset($_SESSION["error"])){
									$error = $_SESSION["error"];
									echo "<button class=\"btn btn-danger mt-2 text-align-center w-100\">$error</button>";
								}
								else if(isset($_SESSION["message"])){
									$message = $_SESSION["message"];
									echo "<button class=\"btn btn-success mt-2 text-align-center w-100\">$message</button>";
								}
            	?>
					</div>
					<div class="card-footer text-center">
						<small>&copy; Betita Bernasol Cagampang</small>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>

<?php
	session_unset();
?>