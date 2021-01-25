<?php

  session_start();

  if(isset($_SESSION['authenticated'])){
    header('location: ../index.php');
	}

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Login Page</title>
		<link rel="stylesheet" type="text/css" href="../css/style.css">

		<!-- CSS -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<!-- jQuery and JS bundle w/ Popper.js -->
		<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
			
		<script type="text/javascript" src="../js/login.js"></script>

	</head>
	
	<body style="background-color: #e0e0d1;">

		<div class="container vh-100">
			<div class="row justify-content-center h-100">
				<div class="card w-25 my-auto shadow-lg bg-white rounded">
					<div class="card-header bg-primary text-white text-center">
						<h2 class="mt-2">NOTES APP</h2>
					</div>
					<!-- FORM -->
					<div class="card-body">
						<div class="form-group">
							<label for="">Username</label>
							<input class="form-control" type="text" name="username" id="username" required>
						</div>
						<div class="form-group">
							<label for="">Password</label>
							<input class="form-control" type="password" name="password" id="password" required>
						</div>
						<input class="btn btn-primary w-100" type="submit" value="SIGN IN" name="login" id="login">
						<?php
							if(isset($_SESSION["error"])){
									$error = $_SESSION["error"];
									echo "<button class=\"btn btn-danger mt-2 text-align-center w-100\">$error</button>";
							}
            ?>  
					</div>
					<div class="card-footer text-center">
						<small><a href="register.php">Create an account here!</a></small>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>