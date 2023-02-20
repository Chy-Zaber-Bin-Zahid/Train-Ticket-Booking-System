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
    <link rel="stylesheet" href="signup.css" />
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
        <form class="sign-up-main" action="sign_up_info.php" method = "post" id="login-area">

            <div class="two-part">
                <div class="all right-first right-back">
                    <h5>Name</h5>
                    <input type="text" placeholder="name" name = "name">
                    <h5>Birth Date</h5>
                    <input type="date" placeholder="Birth Date" name = "date">
                    <h5>Gender</h5>
                    <select class="gender" name="gender" id="">
                      <option name="gender" value="Male">Male</option>
                      <option name="gender" value="Female">Female</option>
                      <option name="gender" value="Other">Other</option>
                    </select>
                    <h5>Address</h5>
                    <input type="text" placeholder="address" name = "address">
                    <h5>Mobile Number</h5>
                    <input type="tel" placeholder="Mobile Number" name = "num">
                    <div class="signup-button">
                        <input style = "color: black; background-color: dodgerblue;" class="btn btn-dark" type="submit" value = "Create Account">
                    </div>
                </div>
                <div class="all right-last right-back">
                    <h5>Email</h5>
                    <input type="text" placeholder="Email" name = "email">
                    <h5>Password</h5>
                    <input type="password" placeholder="Password" name = "pass">
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
