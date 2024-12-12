<?php
    
    $servername = "localhost";
    $username = "root";
    $password = ""; 
    $dbname = "if0_37067887_crs"; 
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error)  die("Connection failed: " . $conn->connect_error);
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $name = $_POST['name'];
        $pass = $_POST['pass'];
        $phoneno = $_POST['tle'];
        $email = $_POST['email'];
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Invalid email format.";
        } else {
            $hashed_password = password_hash($pass, PASSWORD_DEFAULT);
            $stmt = $conn->prepare("INSERT INTO customer (Name, PhoneNO, Email, password) VALUES (?, ?, ?, ?)");
        if ($stmt === false) {
            die("Error preparing statement: " . $conn->error);
        }

        $stmt->bind_param("ssss", $name, $phoneno, $email, $hashed_password);
            if ($stmt->execute()) {
                header('Location: login.php');
            } else {
                echo "Error: " . $stmt->error;
            }
    
            $stmt->close();
        }     
    }
    $conn.close();    
?>