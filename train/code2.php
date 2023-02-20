<?php
require_once('DBconnect.php');
session_start();


if(isset($_POST['id']) && isset($_POST['name']) && isset($_POST['from']) && isset($_POST['to']) && isset($_POST['date']) && isset($_POST['time']) && isset($_POST['cost']) && isset($_POST['seat'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $from = $_POST['from'];
    $to = $_POST['to'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $cost = $_POST['cost'];
    $seat = $_POST['seat'];

        $sql_add = "UPDATE available_train set train_id = '$id', train_name = '$name', `from` = '$from', `to` = '$to', `date` = '$date', `time` = '$time', cost = '$cost', seat = '$seat' where train_id = '$id'";

            mysqli_query($conn, $sql_add);
            header("Location: admin.php");
    }

    ?>