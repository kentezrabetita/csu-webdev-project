<?php

    include 'dbconnect.php';

    if($_POST['action']==='log_user'){
        try {
            /* $username = $_POST["data"]["uname"];
            $password = $_POST["data"]["pwd"];

            $pdo->beginTransaction(); */

        }
        catch (Exception $err){
            echo $err;
        }
    }

?>