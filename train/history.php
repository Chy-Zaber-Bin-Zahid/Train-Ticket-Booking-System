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
    <title>Train Ticket Booking</title>
    <link rel="shortcut icon" href="images/train home.jpg" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx"
      crossorigin="anonymous"
    />
    
    <!-- Sign In Css file connect -->
    <link rel="stylesheet" href="history_two.css" />

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
                >Back</a
              >
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- section one table -->
    <section class="sec-1">
        <div class="whole-table">
            <div class="title">
                <h1>History</h1>
            </div>
            <div class="table main-td">
                <div class="td-element"><h5>Departure</h5></div>
                <div class="td-element"><h5>Arrival</h5></div>
                <div class="td-element"><h5>Date</h5></div>
                <div class="td-element"><h5>Payment</h5></div>
                <div class="td-element"><h5>Train</h5></div>
                <div class="td-element"><h5>Time</h5></div>
                <div class="td-element"><h5>Cost</h5></div>
                <div class="td-element"><h5>Email</h5></div>
            </div>

            <?php
            $sql_table = "SELECT * from admin_history";
            $result_table = mysqli_query($conn, $sql_table);

            if(mysqli_num_rows($result_table) != 0){
            while($row = mysqli_fetch_assoc($result_table) ){


?>
            <div class="table">
                <div class="td-element-sub"><h5><?php echo $row['start'];?></h5></div>
                <div class="td-element-sub"><h5><?php echo $row['end'];?></h5></div>
                <div class="td-element-sub"><h5><?php echo $row['date'];?></h5></div>
                <div class="td-element-sub"><h5><?php echo $row['pay'];?></h5></div>
                <div class="td-element-sub"><h5><?php echo $row['train'];?></h5></div>
                <div class="td-element-sub"><h5><?php echo $row['time'];?></h5></div>
                <div class="td-element-sub"><h5><?php echo $row['cost'];?></h5></div>
                <div class="td-element-sub"><h5><?php echo $row['email'];?></h5></div>
            </div>

<?php }} ?>

        </div>
    </section>

 </body>
</html>