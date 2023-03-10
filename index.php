<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pe-Resto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  </head>
  <body style="height: 3000px;">
    <!-- Header --> 
    <?php include "header.php"; ?>
    <!-- End Header -->
<div class="container-lg">
  <div class="row">
    <!-- Sidebar -->
    <div class="col-lg-3">
      <nav class="navbar navbar-expand-lg bg-light rounded border mt-2">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel" style="width: 250px;">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav nav-pills flex-column justify-content-end flex-grow-1">
          <li class="nav-item">
            <a class="nav-link active link-light" aria-current="page" href="index.php"><i class="bi bi-house-door"></i> Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link link-dark" href="order.php"><i class="bi bi-cart4"></i> Order</a>
          </li>
          <li class="nav-item">
            <a class="nav-link link-dark" href="customer.php"><i class="bi bi-person-fill"></i> Customer</a>
          </li>
          <li class="nav-item">
            <a class="nav-link link-dark" href="product.php"><i class="bi bi-grid-3x2"></i> Product</a>
          </li>
          <li class="nav-item">
            <a class="nav-link link-dark" href="laporan.php"> Laporan</a>
          </li>
          
        </ul>
      </div>
    </div>
  </div>
</nav>
    </div>
    <!-- End Sidebar -->

    <!-- Content -->
    <?php
    if (isset($_GET['x']) && $_GET['x']=='home') {
      include "home.php";
    }elseif(isset($_GET['x']) && $_GET['x']=='order') {
      include "order.php" ;
    }elseif(isset($_GET['x']) && $_GET['x']=='customer') {
      include "customer.php" ;
    }elseif(isset($_GET['x']) && $_GET['x']=='product') {
      include "product.php" ;
    }elseif(isset($_GET['x']) && $_GET['x']=='laporan') {
      include "laporan.php" ;
    }
    ?>
    <!-- End Content -->
  </div>
  <div class="fixed-bottom text-center mb-2">
    Copyright By Apee
  </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>