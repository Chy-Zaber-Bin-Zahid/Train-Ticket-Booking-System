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
    <link rel="stylesheet" href="profile.css" />

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

<!-- section one code -->
<section class="sec-1">
        <h1 style = "margin: 1em 0em;"><?php
          echo "Profile";
        ?></h1>
        <div class="box">

        <?php
            $sql_table = "SELECT name, email, birth, number, address, pass , gender from user where email = '$email'";
            $result_table = mysqli_query($conn, $sql_table);

            if(mysqli_num_rows($result_table) != 0){
            while($row = mysqli_fetch_assoc($result_table) ){
?>


            <div class= "box-left">
                <div><h5 class = "title-h5">Name:</h5></div>
                <div><h5 class = "title-h5">Email:</h5></div>
                <div><h5 class = "title-h5">Password:</h5></div>
                <div><h5 class = "title-h5">Birth Date:</h5></div>
                <div><h5 class = "title-h5">Number: </h5></div>
                <div><h5 class = "title-h5">Gender: </h5></div>
            </div>

            <div class="box-right">
                <div><h5><?php echo $row['name']?></h5></div>
                <div><h5><?php echo $row['email'];?></h5></div>
                <div><h5><?php echo $row['pass'];?></h5></div>
                <div><h5><?php echo $row['birth'];?></h5></div>
                <div><h5><?php echo '0', $row['number'];?></h5></div>
                <div><h5><?php echo $row['gender'];?></h5></div>
            </div>

<?php }}?>
        </div>
    </section>

</body>
</html>