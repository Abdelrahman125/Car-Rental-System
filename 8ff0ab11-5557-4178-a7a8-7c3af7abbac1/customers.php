<?php
    session_start();
    if(isset($_SESSION['user'])){
        include('../templates/head.html');

    }else{
        header('Location: login.php');
    }
?>
<style>
  
    .sidebar{
        height:1000px;
    }
</style>
<main class="d-flex flex-nowrap">
<div class="d-flex sidebar flex-column flex-shrink-0 p-3 text-bg-dark" style="width: 280px;">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
      <span class="fs-4">Admin Dashboard</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item">
        <a href="index.php" class="nav-link active" aria-current="page">
          Home
        </a>
      </li>
      <li>
        <a href="reservations.php" class="nav-link text-white">
          Reservations
        </a>
      </li>
      <li>
        <a href="payments.php" class="nav-link text-white">
          Payments
        </a>
      </li>
      <li>
        <a href="cars.php" class="nav-link text-white">
            Cars
        </a>
      </li>
      <li>
        <a href="customers.php" class="nav-link text-white">
          Customers
        </a>
      </li>
    </ul>
  </div>
  customers
</main>
<?php include('../templates/tail.html'); ?>