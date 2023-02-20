<?php
require_once('DBconnect.php');
session_start();

if(isset($_POST['name']) && isset($_POST['date']) && isset($_POST['gender']) && isset($_POST['address']) && isset($_POST['num']) && isset($_POST['email']) && isset($_POST['pass'])){
    $name = $_POST['name'];
    $date = $_POST['date'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $password = $_POST['pass'];
    $address = $_POST['address'];
    $number = $_POST['num'];

    $sql = "SELECT * from user WHERE email = '$email' AND pass = '$password'";

    //Execute
    $result = mysqli_query($conn, $sql);

    $sql_add = "INSERT INTO user VALUES ('$name', '$email', '$date', '$number', '$address', '$password', '$gender')";

    //Execute
    // $result_add = ;

    //check if it returns an empty set
    if(mysqli_num_rows($result) > 0){
        header("Location: sign_up.php");
    }else{
        mysqli_query($conn, $sql_add);
        $_SESSION['email'] = $email;
        header("Location: available.php");
    }
    
}






?>