<?php

    include 'dbconnect.php';

    if($_POST["action"]=="add_note"){
        try {
            $name = $_POST["data"]["name"];
            $description = $_POST["data"]["description"];

            $pdo->beginTransaction();
            $prepared_statement = $pdo->prepare("INSERT INTO notes(name, description, user_id, status) VALUES (?,?,?,?)");
            $prepared_statement->execute(array($name, $description, 1, 1));
            $pdo->commit();

            echo "Success!";

        } catch(Exception $e) {
            echo "error!";
        }
    }
    else if($_POST["action"]=="get_notes"){
        $user_id = $_POST['user_id'];

        try {

            $sql = "SELECT * FROM notes WHERE user_id = $user_id AND status = 1";
            $stm = $pdo->query($sql);
            $rows = $stm->fetchAll(PDO::FETCH_ASSOC);
            echo json_encode($rows);

        } catch(Exception $err) {
            throw $err;
        }
    }

?>