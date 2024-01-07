<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet" />
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <title>PCPlanner</title>
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
        <a class="navbar-brand h2 text-warning fw-bold" href="index.html"
          ><span class="h4 fw-bold"><i class="fa-solid fa-computer"></i>PC<span class="text-light"> C</span></span
          ><span class="text-light">alculator</span></a
        >
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="row justify-content-end">
          <div class="col-12">
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link" href="index.php">Home</a>
                </li>
                <!-- <li class="nav-item">
                  <a class="nav-link" href="#tentang-kami">About Us</a>
                </li> -->
                <?php
                if(!isset($_SESSION['login'])) {
                  ?>
                  <li class="nav-item">
                    <a class="nav-link text-warning fw-bold" href="admin_login.php">Login <i class="fa-solid fa-right-to-bracket ms-1"></i></a>
                  </li>
                  <?php
                } else {
                  ?>
                  <li class="nav-item">
                    <a class="nav-link" href="info.php">History</a>
                  </li>
                  <li class="nav-item">
                    <a onclick="return confirm('Are you sure to logout?')" class="nav-link text-warning fw-bold" href="admin_logout.php">logout <i class="fa-solid fa-right-to-bracket ms-1"></i></a>
                  </li>
                  <?php
                }
                ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </nav>

    <section class="bg-img-index">
      <div class="container">
        <div class="text-warning fw-bold mb-0 pb-0 page-title">
          <span class="text-rgb"><i class="fa-solid fa-computer"></i>PC</span> Calculator
        </div>
        <div class="text-secondary mt-0 pt-0">Calculate PC accurately</div>
        <div class="mt-5">
          <a href="input_beginner.html" class="btn btn-rgb fw-bold text-light py-2 px-5">Get Started <i class="fa-solid fa-arrow-up-right-from-square ms-2"></i></a>
        </div>
      </div>
    </section>

    <section id="tentang-kami">
      <div class="container">
        <h1 class="fw-bold mt-5 text-warning"><span class="text-rgb">About</span></h1>
        <hr />
        <div class="row justify-content-between mb-5">
          <div class="col-md-8 text-secondary mt-5">
            <div class="desc">This application is made to fulfill one of the bachelor degree requirements <span>using Fuzzy Logic</span></div>
            <i class="address">Ziddan Muhamad Faizun (2019150072) | Universitas Sains Al-Quran - Teknik Informatika</i>
          </div>
          <div class="col-md-4 h6 mt-5">
            <div class="img">
              <img src="logopu.jpg" class="img-thumbnail" width="200" height="200" />
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
