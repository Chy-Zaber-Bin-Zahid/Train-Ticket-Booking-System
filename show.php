<?php
require_once('DBconnect.php');
session_start();

$email = $_SESSION['email'];

if(isset($_POST['from']) && isset($_POST['date']) && isset($_POST['train_name']) && isset($_POST['to']) && isset($_POST['num']) && isset($_POST['payment'])){
    $from = $_POST['from'];
    $to = $_POST['to'];
    $num = $_POST['num'];
    $date = $_POST['date'];
    $train_name = $_POST['train_name'];
    $payment = $_POST['payment'];
  
    $sql_check = "SELECT seat from available_train WHERE `from` = '$from' AND `to` = '$to' AND `date` = '$date'";

    $result_check = mysqli_query($conn, $sql_check);

    if (mysqli_num_rows($result_check) != 0) {
        while($row_check = mysqli_fetch_assoc($result_check) ){
            $train_seat_check = $row_check['seat']-1;
        }
      }

    if($train_seat_check<0){
      header("Location: buy.php");
    } else{
      $sql_check = "SELECT train_id, train_name, `from`, `to`, `date`, `time`, cost, seat from available_train WHERE `from` = '$from' AND `to` = '$to' AND `date` = '$date'";

      $result_check = mysqli_query($conn, $sql_check);
  
      if (mysqli_num_rows($result_check) != 0) {
          while($row_check = mysqli_fetch_assoc($result_check) ){
              $train_id = $row_check['train_id'];
              $train_name = $row_check['train_name'];
              $train_time = $row_check['time'];
              $train_cost = $row_check['cost'];
              $train_seat = $row_check['seat']-1;
          }
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
    <link rel="stylesheet" href="show.css" />

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

<!-- section one -->
<section class="sec-1">
              <form class="form" action="">
                <div class="border">
                  <h1 class= "ticket-up">Ticket</h1>
                  <div class= "ticket-bottom">
                    <div class = "ticket-left class="ticket-both"">
                        <?php
                    $sql_add = "INSERT INTO ticket VALUES ('$from', '$to', '$date', '$payment', '$train_cost', '$num', '$email')";

                    mysqli_query($conn, $sql_add);


                    $sql1 = "SELECT user.name, ticket.f, ticket.t, ticket.p, ticket.d, ticket.c from user inner join ticket on user.email = ticket.e";
                    $result1 = mysqli_query($conn, $sql1);
                    $rows = mysqli_num_rows($result1);
                    if($rows>0){
                    while($row = mysqli_fetch_assoc($result1) ){
                        $from = $row['f'];
                        $to = $row['t'];
                        $date = $row['d'];
                        $payment = $row['p'];
        
        
        ?>
                      <h5  class="ticket-both">Name: <span><?php echo $row['name']?></span> </h5>
                      <h5  class="ticket-both">From: <span><?php echo $from?></span></h5>
                      <h5  class="ticket-both">Starting Date: <span><?php echo $date?></span></h5>
                      <h5  class="ticket-both">Payment: <span><?php echo $payment?></span></h5>
                      <h5  class="ticket-both">To: <span><?php echo $to?></span></h5>
                      <h5  class="ticket-both">Train Name: <span><?php echo $train_name?></span></h5>
                      <h5  class="ticket-both">Time: <span><?php echo $train_time?></span></h5>
                      <h5  class="ticket-both">Cost: <span><?php echo $train_cost?></span></h5>
                      <?php }}?>
                  </div>
                  </div>
                </div>
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

<?php
        $sql_history = "INSERT INTO admin_history VALUES ('$from', '$to', '$date', '$payment', '$train_name', '$train_time', '$train_cost', '$email')";

        mysqli_query($conn, $sql_history);

        $sql_available = "UPDATE available_train set seat = $train_seat where train_id = '$train_id'";

        mysqli_query($conn, $sql_available);

        $sql_delete_info = "DELETE from ticket where e = '$email'";

        mysqli_query($conn, $sql_delete_info);

         
    }
   else{

    header("Location: buy.php");
  }
  }
}



?>