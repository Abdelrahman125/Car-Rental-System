<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Login page</h1><br>
    <form action="login.php" method="POST">
        <input type="email" placeholder="Enter your email: " name="email"><br><br>
        <input type="password" placeholder="Enter your password: " name="password"><br><br>
        <input type="submit" value="Enter" onclick="validateEmail()">
        <a href="Register.php">Register</a>
    </form>
    </div>
</body>
</html>
<?php
session_start();
$error_count = 0;
$Emaill = $_POST["email"];
$Passwword = $_POST["password"];
 if(empty($Emaill) OR empty($Passwword)){
    echo"Please fill all the fields";
    $error_count++;
 }
 if($error_count==0){
    require_once "db.php";
    $sql_attributess = "SELECT * FROM registerinfo WHERE email = '$Emaill' ";
    $valuee = mysqli_query($sql_connection, $sql_attributess);
    $user = mysqli_fetch_array($valuee, MYSQLI_ASSOC);
    if($user){
        if($Passwword == $user["password"]){
            $_SESSION["email"] =$Emaill; 
            header("location: index.php");
        }else{
            echo"You entered a wrong password";
        }
    }else{
        echo"This email does not exist";
    }
    
    
}

    ?>