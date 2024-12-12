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
    <a href="#" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
      <span class="fs-4">Admin Dashboard</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item">
        <a href="#" class="nav-link active" aria-current="page">
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
  <div style="width:100%;">
  <form action="uploadController.php" style="margin-left:  38%; margin-top:10%;" id="carform" method="post">  
    <div class="custom-file">
      <input type="text" placeholder="Plate ID" name="pltid">
      <br>
      <br>
      <input type="text" placeholder="Model" name="model">
      <br>
      <br>
      <input type="text" placeholder="price" name="price">
      <br>
      <br>
      <input type="text" placeholder="type" name="type">
      <br>
      <br>
      <input type="text" placeholder="name" name="name">
      <br>
      <br>
      <input type="text" placeholder="Year" name="year">
      <br>
      <br>
      <select form="carform" name>
        <option>Office</option>
        <option>test</option>
        <option>test</option>
        <option>test</option>
        <option>test</option>
      </select>
      <br>
      <br>
      <label class="custom-file-label" for="customFile">Upload car image</label>
      <input type="file" class="custom-file-input" id="customFile" name="customeFile">
      <br>
      <input type="submit" value="submit">
    </div>
  </form>
  </div>
</main>
<?php include('../templates/tail.html'); ?>