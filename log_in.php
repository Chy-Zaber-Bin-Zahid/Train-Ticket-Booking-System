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
    <link rel="stylesheet" href="log_in.css" />

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

    <!-- sign in part -->
    <section class="sec-1">
        <form id="login-area" action="logIn.php" method = "post">
            <h1 style= "font-weight: bold;" class="text-center">
            Login</h1>
            <div class="submit-area">
            <input id = "name" required type="email" class="box" placeholder="Email" name="email" />
            <br />
            <input id = "password" required type="password" class="box" placeholder="Password" name="pass" />
            <br />
            <!-- <button id="login" class="btn btn-success">Enter</button> -->
            <input id="submit" class="btn btn-dark button" type="submit" value = "Login">
            <p class="dont-have"><a class = "create" href="sign_up.php">Create account</a></p>
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
