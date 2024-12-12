<?php
    $servername = "localhost";
    $username = "root";
    $password = ""; 
    $dbname = "if0_37067887_crs"; 
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST['email'];
        $pass = $_POST['password'];
    
        $stmt = $conn->prepare("SELECT Customer_ID, password FROM customer WHERE Email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();
    
        if ($stmt->num_rows > 0) {
            $stmt->bind_result($id, $passdb);
            $stmt->fetch();
            if (password_verify($pass, $passdb)) {
                session_start();
                $_SESSION['CID'] = $id;
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