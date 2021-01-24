<?php

  session_start();

  include 'dbconnect.php';

  if($_POST['action']=='login_user'){
    $username = $_POST['data']['username'];
    $query = "SELECT id,password FROM `user` WHERE `username`=:username";
    $statement = $pdo->prepare($query);
    $statement->bindParam('username', $username, PDO::PARAM_STR);
    $statement->execute();

    $user = $statement->fetch(PDO::FETCH_ASSOC);

    if($user === false){
      echo 'username not found!';
      exit();
    }
    else {
      $validPassword = password_verify($_POST['data']['password'], $user['password']);

      if($validPassword) {
        session_regenerate_id();
        $_SESSION['authenticated'] = TRUE;
        $_SESSION['username'] = $_POST['data']['username'];
        $_SESSION['id'] = $user['id'];
        echo "Success!";
      }
      else {
        echo "password did not match!";
        exit();
      }
    }
  }
?>