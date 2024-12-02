<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registeration page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class = "container">
        <h1>Registeration page</h1><br>
    <form action="Register.php" method="POST">
        <div class="Form">
        <input type="email" class="L" placeholder="Enter email: " name="email" id="email"><br><br>
        </div>
        <div class ="Form">
        <input type="text" class="L" placeholder="Enter firstname: " name="firstname"><br><br>
        </div>
        <div class ="Form">
        <input type="text" class="L" placeholder="Enter lastname: " name="lastname"><br><br>
        </div>
        <div class ="Form">
        <input type="password" placeholder="Enter password: " class="L" name="password"><br><br>
        </div>
        <div class ="Form">
        <input type="password" class="L" placeholder="Confirm password" name="confirm-password"><br><br>
        </div>
        <div class ="Form">
        <input type="Submit" class="L" value="Register" onclick="validateEmail()">
        <a href="login.php">Login</a>
        </div>
    </form>
    </div>
</body>
</html>

<?php
    $Email = $_POST["email"];
    $First_Name = $_POST["firstname"];
    $Last_Name = $_POST["lastname"];
    $Password = $_POST["password"];
    $Confirm_Password = $_POST["confirm-password"];
    $Error_count = 0;
    if(empty($Email) OR empty($First_Name) OR empty($Last_Name) OR empty($Password) OR empty($Confirm_Password)){
        echo"You must fill all fields. <br>";
        $Error_count++;
    }
    if(strlen($Password)<8){
        echo"Your password must contain more than 8 characters. <br>";
        $Error_count++;
    }
    if($Password != $Confirm_Password){
        echo"There is a mistake within your password confirmation. <br>";
        $Error_count++;
    }
    if(ctype_alnum($Password)){
        echo"Your password must contain special characters. <br>";
        $Error_count++;
    }
    require_once "db.php";
    $sql_attributes = "SELECT * FROM registerinfo WHERE email = '$Email' ";
    $value = mysqli_query($sql_connection, $sql_attributes);
    $count = mysqli_num_rows($value);
    if($count>0){
        echo"This email already exists. <br>";
    }
    if($Error_count==0){

        $sql_attributes  = "INSERT INTO registerinfo(email, firstname, lastname, password) VALUES (?, ?, ?, ?)";
        $stmt = mysqli_stmt_init($sql_connection);
        $stmt_Prepare = mysqli_stmt_prepare($stmt, $sql_attributes);
        if($stmt_Prepare){
            mysqli_stmt_bind_param($stmt,"ssss",$Email, $First_Name, $Last_Name, $Password);
            mysqli_stmt_execute($stmt);
            echo"Registered successfully, now login.";
        }

    }
    ?>