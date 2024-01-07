<?php
session_start();
include "connection.php";

if(isset($_SESSION['username'])) {
  header('location: ./');
} 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
      <link rel="stylesheet" href="css/bootstrap.min.css" />
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
      <link rel="preconnect" href="https://fonts.googleapis.com" />
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
      <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet" />
      <link rel="stylesheet" href="css/style.css" />
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <title>PCPlanner</title>
    <style>
        
    </style>
  </head>
  <body onload="hideLoader()">
    <div id="loader-page">
      <div class="position-absolute top-50 start-50 translate-middle">
        <span class="loader"></span>
      </div>
    </div>
    <!-- Navbar new -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-rgb shadow-lg fixed-top">
      <div class="container">
        <a class="navbar-brand h2 text-warning fw-bold" href="./"
          ><span class="h4 fw-bold"><i class="fa-solid fa-backward-step"></i></span
        ></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="row justify-content-end">
          <div class="col-12">
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="#" style="color: transparent">Advenced</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </nav>

    
    <section class="login-admin">
        <div class="my-5"><br><br></div>
        <div class="container">
            <div class="row justify-content-start">
                <div class="col-md-5">
                    <div class="box-login px-4 py-5 shadow">
                        <h1 class="text-rgb fw-bold pb-1"><i class="fa-solid fa-computer text-warning"></i>Register</h1>
                        <form action="admin_register_process.php" method="post">
                            <div class="form-floating mb-3">
                                <input type="text" name="username" placeholder="Input username" class="form-control login mt-3" autofocus required id="floatingInput">
                                <label for="floatingInput" class="text-rgb">Username</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" name="password" placeholder="Input password" class="form-control login" required id="floatingInput">
                                <label for="floatingInput" class="text-rgb">Password</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" name="password2" placeholder="Konfirmasi password" class="form-control login" required id="floatingInput">
                                <label for="floatingInput" class="text-rgb">Confirm Password</label>
                            </div>
                            <div class="d-grid">
                                <button type="submit" name="submit" class="btn btn-rgb fw-bold text-warning mt-3" name="submit">Register <i class="fa-solid fa-right-to-bracket ms-1"></i></button>
                            </div>
                        </form>
                        <hr>
                        <div class="text-center">
                          Already have an Account? <a href="admin_login.php">Login here</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://kit.fontawesome.com/910e994c98.js" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
  </body>
</html>