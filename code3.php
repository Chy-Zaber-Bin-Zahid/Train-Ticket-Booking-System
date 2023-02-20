<?php
require_once('DBconnect.php');
session_start();



if(isset($_POST['id'])){
    $id = $_POST['id'];

        $sql_add = "DELETE from available_train where train_id = '$id'";

            mysqli_query($conn, $sql_add);
            header("Location: admin.php");
}

?>