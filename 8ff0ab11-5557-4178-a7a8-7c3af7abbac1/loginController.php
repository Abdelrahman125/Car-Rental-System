<?php
    session_start();
    
    $servername = "localhost";
    $username = "root";
    $password = ""; 
    $dbname = "if0_37067887_crs"; 
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $user = $_POST['user'];
        $pass = MD5($_POST['pass']);
    
        $stmt = $conn->prepare("SELECT id, password FROM admin WHERE username = ?");
        $stmt->bind_param("s", $user);
        $stmt->execute();
        $stmt->store_result();
    
        if ($stmt->num_rows > 0) {
            $stmt->bind_result($id, $passdb);
            $stmt->fetch();
    
            if ($pass == MD5($passdb)) {
                $_SESSION['user'] = $username;
                header('Location: index.php');
            } else {
                echo "Invalid password.";
            }
        } else {
            echo "No user found with that username.";
        }
    
        $stmt->close();
    }
    
    $conn->close();
    ?>