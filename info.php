<?php
    error_reporting(0);
    session_start();
    include("connection.php");
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
                <li class="nav-item">
                  <a class="nav-link" href="index.php">Home</a>
                </li>
                <!-- <li class="nav-item">
                  <a class="nav-link" href="#tentang-kami">About Us</a>
                </li> -->
                <?php
                if(!isset($_SESSION['login'])) {
                  ?>
                  <li class="nav-item h6">
                    <a class="nav-link text-warning fw-bold" href="admin_login.php">Login <i class="fa-solid fa-right-to-bracket ms-1"></i></a>
                  </li>
                  <?php
                } else {
                  ?>
                  <li class="nav-item active">
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

    <section class="car-info">
      <div class="container">
        <div class="text-warning fw-bold mb-0 pb-0 page-title">
          <span class="text-rgb"><i class="fa-solid fa-computer"></i>PC</span> Info
        </div>
        <div class="mt-5">
          <a href="#search" class="btn btn-rgb py-2 px-5 fw-bold text-light">Find your calculated PC! <i class="fa-solid fa-magnifying-glass ms-1"></i></a>
        </div>
      </div>
    </section>

    <section id="search">
        <div class="container mt-5">
            <!--  -->
            <div class="row justify-content-start mt-4">
                <?php
                    $query = mysqli_query($connect, "SELECT * FROM history WHERE id_admin='$_SESSION[id]' ORDER BY id DESC");
                    while($row = mysqli_fetch_array($query)){
                    ?>
                <div class="col-3">
                    <div class="card card-car m-0 p-0 mb-0">
                        <div class="card-body m-0 p-0">
                            <?php
                            if($row['foto'] == '') {
                              ?> <img src="pc-image/default.jpeg" alt="Image eror"> <?php
                            }
                            ?>
                            <div class="pt-2 pb-2 px-3">
                                <div class="car-name fw-semibold text-rgb m-0 p-0 sebaris"><?=$row['nama']?></div>
                                <div class="car-capacity text-rgb mt-1"><i class="fa-solid fa-heart-pulse"></i> Condition : <?= $row['kondisiAkhir'] ?> %</div>
                                <div class="car-cc text-secondary sebaris mt-1"><?=$row['deskripsi']?></div>
                                <div class="row justify-content-end">
                                    <div class="col-12 text-end">
                                        <div class="car-price text-success"><?= "Rp. " . number_format($row['harga']) ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                        <div class="col-9 text-end d-grid">
                            <button type="button" class="btn btn-rgb py-2 px-5 text-warning fw-bold button-detail-info" data-bs-toggle="modal" data-bs-target="#modal-<?=$row['id']?>">Detail</button>
                        </div>
                        <div class="col-3 d-grid ps-0">
                          <a href="hapus_history.php?id=<?=$row['id']?>" class="btn btn-danger p-2 text-light button-detail-info" onclick="return confirm('Are you sure to delete this item?')"><i class="fa-regular fa-trash-can"></i></a>
                        </div>
                    </div>
                    </div>
                </div>

                <!-- modals -->
                <div class="modal fade" id="modal-<?=$row['id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header bg-rgb text-light">
                      <h1 class="modal-title fs-5 fw-bold" id="exampleModalLabel"><?=$row['nama']?></h1>
                    </div>
                    <div class="modal-body">
                      <div class="row justify-between">
                        <div class="col-md-12">
                          <img src="pc-image/default.jpeg" alt="" class="w-100">
                        </div>
                        <div class="col-md-12 text-start text-secondary mt-2">
                            <div class="row justify-content-center fs-6">
                              <div class="col-5">Condition</div>
                              <div class="col-1">:</div>
                              <div class="col-6"><?=$row['kondisiAkhir']?>%</div>
                              <!--  -->
                              <div class="my-1"></div>
                              <!--  -->
                              <div class="col-12 text-start"><a data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" class="btn btn-warning text-light">View Detail Condition</a></div>
                              <!--  -->
                              <div class="collapse border-top border-bottom m-2" id="collapseExample">
                                <?php
                                $detailKondisi = json_decode($row['detail_kondisi']);
                                foreach($detailKondisi as $part => $value) {
                                  if($part == 'mobo') {
                                    $part = '- Motherboard';
                                  } else if ($part == 'pcr') {
                                    $part = '- Processor';
                                  } else if ($part == 'psu') {
                                    $part = '- Power Supply';
                                  } else if ($part == 'ram') {
                                    $part = '- RAM';
                                  } else if ($part == 'ssd') {
                                    $part = '- SSD';
                                  } else if ($part == 'fan') {
                                    $part = '- Fan Processor';
                                  } else if ($part == 'hdd') {
                                    $part = '- HDD';
                                  } else if ($part == 'vga') {
                                    $part = '- VGA';
                                  } else if ($part == 'kabelP') {
                                    $part = '- Power Cable';
                                  } else if ($part == 'case') {
                                    $part = '- Casing';
                                  } else if ($part == 'kabelS') {
                                    $part = '- SATA Cable';
                                  } else if ($part == 'fanC') {
                                    $part = '- Fan Casing';
                                  } else if ($part == 'keyMo') {
                                    $part = '- Keyboard & Mouse';
                                  } else if ($part == 'moni') {
                                    $part = '- Monitor';
                                  } else if ($part == 'kvga') {
                                    $part = '- VGA Cable';
                                  }

                                  if($value == 10) {
                                    $value = 'Terrible';
                                  } else if ($value == 25) {
                                    $value = 'Bad';
                                  } else if ($value == 50) {
                                    $value = 'Normal';
                                  } else if ($value == 70) {
                                    $value = 'Good';
                                  } else if ($value == 90) {
                                    $value = 'Very Good';
                                  } else {
                                    $value = '-';
                                  }

                                  ?>
                                  <div class="my-1"></div>
                                    <div class="row justify-content-center">
                                      <div class="col-5">
                                        <?=$part?>
                                      </div>
                                      <div class="col-1">:</div>
                                      <div class="col-6">
                                        <?=$value?>
                                      </div>
                                    </div>
                                    <div class="my-1"></div>
                                  <?php
                                }
                              ?>
                              </div>
                              <!--  -->
                              <div class="my-1"></div>
                              <!--  -->
                              <div class="col-5">COGS</div>
                              <div class="col-1">:</div>
                              <div class="col-6 sebaris">Rp. <?=number_format($row['hppAkhir'])?></div>
                              <!--  -->
                              <div class="my-1"></div>
                              <!--  -->
                              <div class="col-5">Age</div>
                              <div class="col-1">:</div>
                              <div class="col-6 sebaris"><?=$row['usia']?> Months</div>
                              <!--  -->
                              <div class="my-1"></div>
                              <!--  -->
                              <div class="col-5 sebaris">Date input</div>
                              <div class="col-1">:</div>
                              <div class="col-6 sebaris"><?=$row['tanggal']?></div>
                              <!--  -->
                              <div class="my-1"></div>
                              <!--  -->
                              <div class="col-5 sebaris">Sale Price</div>
                              <div class="col-1">:</div>
                              <div class="col-6 sebaris">Rp. <?=number_format($row['harga'])?></div>
                              <!--  -->
                              <div class="my-1"></div>
                              <!--  -->
                              <div class="col-5 sebaris">Descriptions</div>
                              <div class="col-1">:</div>
                              <div class="col-6"></div>
                              <div class="my-1"></div>  
                              <div class="col-12 ">"<?=$row['deskripsi']?>"</div>
                            </div>
                        </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-rgb text-light" data-bs-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
                <!-- end of modals -->
                <?php } ?>
            </div>
            <!--  -->
        </div>
    </section>
    <script src="https://kit.fontawesome.com/910e994c98.js" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
  </body>
</html>

