<?php

	$dsn = "mysql:host=localhost;dbname=notes_db";
	$user = "root";
	$password = "";

	$pdo = new PDO($dsn, $user, $password);

	if(!$pdo){
		echo "Database Connection Failed!";
		exit();
	}

?>