<?php

  include 'dbconnect.php';

  if(isset($_POST['register'])){
    $s_username = $_POST['username'];
    $query = "SELECT username FROM user WHERE `username`=:username";
    $statement = $pdo->prepare($query);
    $statement->bindParam('username', $s_username, PDO::PARAM_STR);
    $statement->execute();

    $user = $statement->fetch(PDO::FETCH_ASSOC);

    if($user === false){
      if($_POST['password'] != $_POST['r_password']){
        echo "Password did not match.";
        exit();
      }
      else {
        $fullname = $_POST['fullname'];
        $username = $_POST['username'];
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        
        $query = "INSERT INTO user (fullname, username, password) VALUES (:fullname,:username,:password)";
        $statement = $pdo->prepare($query);

        $statement->bindValue(':fullname', $fullname);
        $statement->bindValue(':username', $username);
        $statement->bindValue(':password', $password);

        $res = $statement->execute();

        if($res) {
          echo "User Registered.";
        }
      }
    }
    else {
      echo "Username is taken.";
      exit();
    }
  }

?>