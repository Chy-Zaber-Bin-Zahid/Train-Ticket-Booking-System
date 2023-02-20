<?php
require_once('DBconnect.php');
session_start();

$email = $_SESSION['email'];

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ticket Booking System</title>
    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx"
      crossorigin="anonymous"
    />
    <link rel="shortcut icon" href="images/train home.jpg" type="image/x-icon">
    <!-- Sign In Css file connect -->
    <link rel="stylesheet" href="edit.css" />
  </head>

  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-primary nav-all">
      <div class="container-fluid">
      <a class="navbar-brand" href="train_home.php"><img style = "height: 45px;" src="images/logo.png" alt=""></a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse nav-element-left" id="navbarNav">
          <ul class="navbar-nav nav-ul">
            <li class="nav-item nav-li">
              <a class="nav-link nav-right active" aria-current="page" href="train_home.php"
                >Back</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- sign up part -->
    <section class="sec-1">
        
        <form class="sign-up-main" action="code1.php" method = "post">
            <div class="two-part">
                <div class="all right-first right-back">
                    <h5>Train No.</h5>
                    <input type="text" placeholder="Train no." name = "id">
                    <h5>Name</h5>
                    <input type="text" placeholder="Name" name = "name">
                    <h5>Departure</h5>
                    <input type="text" placeholder="Departure" name = "from">
                    <h5>Arrival</h5>
                    <input type="text" placeholder="Arrival" name = "to">
                </div>
                <div class="all right-last right-back">
                    <h5>Date</h5>
                    <input type="date" placeholder="Date" name = "date">
                    <h5>Time</h5>
                    <input type="text" placeholder="Time" name = "time">
                    <h5>Cost</h5>
                    <input type="text" placeholder="Cost Tk" name = "cost">
                    <h5>Seat</h5>
                    <input type="text" placeholder="Seat" name = "seat">
                </div>
            </div>
            <div class="check">
            <input class="btn btn-dark button" type="submit" nam = "new" value = "Add New Schedule">
        </form>
    </section>

    <section class = "sec-1">
    <form class="sign-up-main" action="code2.php" method = "post">
            <div class="two-part">
                <div class="all right-first right-back">
                    <h5>Train No.</h5>
                    <input type="text" placeholder="Train no." name = "id">
                    <h5>Name</h5>
                    <input type="text" placeholder="Name" name = "name">
                    <h5>Departure</h5>
                    <input type="text" placeholder="Departure" name = "from">
                    <h5>Arrival</h5>
                    <input type="text" placeholder="Arrival" name = "to">
                </div>
                <div class="all right-last right-back">
                    <h5>Date</h5>
                    <input type="date" placeholder="Date" name = "date">
                    <h5>Time</h5>
                    <input type="text" placeholder="Time" name = "time">
                    <h5>Cost</h5>
                    <input type="text" placeholder="Cost Tk" name = "cost">
                    <h5>Seat</h5>
                    <input type="text" placeholder="Seat" name = "seat">
                </div>
            </div>
            <div class="check">
            <input class="btn btn-dark button" type="submit" nam = "change" value = "Change The Schedule">
        </form>
    </section>

    <section class= "sec-1">
    <form class="sign-up-main" action="code3.php" method = "post">
            <div class="two-part">
                <div class="all right-first right-back">
                    <h5>Train No.</h5>
                    <input type="text" placeholder="Train no." name = "id">
                </div>
            </div>
            <div class="check">
            <input style = "margin-bottom: 10em;" class="btn btn-dark button" type="submit" nam = "delete" value = "Delete">
        </form>
    </section>
     
    <!-- Bootstrap JavaScript -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
      crossorigin="anonymous"
    ></script>

  </body>
</html>
