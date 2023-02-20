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
    <link rel="stylesheet" href="buy_two.css" />

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

    <section class="sec-2">
        <div class="ticket-select">
                <form class="form" action="show.php" method = "post">
                    <div>
                        <h5>Departure</h5>
                        <select class = "sel" name="from">
                          <?php
                          $sql1 = "SELECT DISTINCT `from` FROM available_train";
                          $result1 = mysqli_query($conn, $sql1);
                          $rows = mysqli_num_rows($result1);
                          if($rows>0){
                            while($row = mysqli_fetch_assoc($result1) ){
                          ?>
                            
                            <option name="from" value="<?php echo $row['from'] ?>"><?php echo $row['from'] ?></option>
                            
                            <?php } } 
                        
                        ?>
                        </select>

                        <h5>Arrival</h5>
                        <select class = "sel" name="to">
                        <?php
                        $sql1 = "SELECT DISTINCT `to` FROM available_train";
                        $result1 = mysqli_query($conn, $sql1);
                        $rows = mysqli_num_rows($result1);
                        if($rows>0){
                        while($row = mysqli_fetch_assoc($result1) ){
                          
                        ?>
                              <option name="to" value = "<?php echo $row['to']?>">

                              <?php echo $row['to']?>
                              </option>

                              <?php } }  ?>
                        </select>
                        
                        <h5>Buying Date</h5>
                        <select class = "sel" name="date" id="">
                        <?php
                                $sql1 = "SELECT DISTINCT `date` FROM available_train";
                                $result1 = mysqli_query($conn, $sql1);
                                $rows = mysqli_num_rows($result1);
                                if($rows>0){
                                while($row = mysqli_fetch_assoc($result1) ){
                        ?>

                            <option name="date" value="<?php echo $row['date']?>">

                              <?php echo $row['date'] ?>
                              </option>

                              <?php } }  ?>
                        </select>
                       
                        
                    </div>
                    <div class="buy">
                    <h5>Train</h5>
                        <select class = "sel" name="train_name">
                        <?php
                        $sql1 = "SELECT DISTINCT `train_name` FROM available_train";
                        $result1 = mysqli_query($conn, $sql1);
                        $rows = mysqli_num_rows($result1);
                        if($rows>0){
                        while($row = mysqli_fetch_assoc($result1) ){
                          
                        ?>
                              <option name="train_name" value = "<?php echo $row['train_name']?>">

                              <?php echo $row['train_name']?>
                              </option>

                              <?php } }  ?>
                        </select>


                        
                        <h5>Phone Number</h5>
                        <input class="above-input" type="tel" required placeholder = "Phone Number" name="num">
                        <h5>Payment Method</h5>
                        <select class = "sel" name="payment">
                            <option name="payment" value="Bkash">Bkash</option>
                            <option name="payment" value="Nagad">Nagad</option>
                            <option name="payment" value="Nagad">Rocket</option>
                            <option name="payment" value="Debit card">Debit card</option>
                        </select>
                        <br>
                        <input style="margin: .7em 0em 0em 0em;" id="submit" class="btn btn-success" type="submit" value = "Buy">
                    </div>
                </form>
        </div>
    </section>

    <!-- Bootstrap JavaScript -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
      crossorigin="anonymous"
    ></script>

    </body>
</html>