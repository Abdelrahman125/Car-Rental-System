
<?php
session_start();
    require_once "db.php";
    $email = $_SESSION["email"];
    $result = mysqli_query($sql_connection, "SELECT * FROM registerinfo WHERE email = '$email' ");
    $row = mysqli_fetch_assoc($result);
    $_SESSION["firstname"] = $row["firstname"];
    $_SESSION["lastname"] = $row["lastname"];
    //echo "<h1>Welcome ".$_SESSION["firstname"]." ".$_SESSION["lastname"]."!! </hr>";
    ?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Website page</title>
</head>
<body>
    <div class="container">
    <h1>Welcome <?php echo $_SESSION["firstname"]." ".$_SESSION["lastname"] ?>!!</h1>
    <a href="login.php">Logout</a>
    </div>
</body>
</html>