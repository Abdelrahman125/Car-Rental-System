<?php
    session_start();
    if(isset($_SESSION['user'])){
        include('../templates/head.html');
        include('conn.php');
        $sql = "SELECT * FROM Reservation";
        $result = $conn->query($sql);
    }else{
        header('Location: login.php');
    }
?>
<style>
    .sidebar{
        height:1000px;
    }
    .report{
        margin-left: 20px;
    }
    .table-responsive{
        margin-left:50px;
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
        <a href="index.php" class="nav-link text-white" aria-current="page">
          Home
        </a>
      </li>
      <li>
        <a href="reservations.php" class="nav-link text-white active">
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
  <div class="report">
  <h2>Reservations</h2>
  <div class="table-responsive small">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">Reservation_ID</th>
              <th scope="col">Customer_ID</th>
              <th scope="col">Plate_ID</th>
              <th scope="col">Reservation_Date</th>
              <th scope="col">Pickup_Date</th>
              <th scope="col">Return_Date</th>
              <th scope="col">Status</th>
            </tr>
          </thead>
          <tbody>
            <?php
              if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                  echo "<tr>
                    <td>".$row['Reservation_ID']."</td>
                    <td>".$row['Customer_ID']."</td>
                    <td>".$row['Plate_ID']."</td>
                    <td>".$row['Reservation_Date']."</td>
                    <td>".$row['Pickup_Date']."</td>
                    <td>".$row['Return_Date']."</td>
                    <td>".$row['Status']."</td>
                  </tr>";
                }
              }
            ?>
          </tbody>
        </table>
      </div>
</div>
</main>
<?php 
  include('../templates/tail.html'); 
  $conn->close();
?>