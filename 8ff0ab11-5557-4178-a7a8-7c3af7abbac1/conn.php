<?php
    $servername = "localhost";
    $username = "root";
    $password = ""; 
    $dbname = "if0_37067887_crs"; 
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error)  die("Connection failed: " . $conn->connect_error);
?>