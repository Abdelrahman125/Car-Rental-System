<?php
    include('conn.php');
    $plate_id = $_POST['pltid'];
    $model = $_POST['model'];
    $price = $_POST['price'];
    $type = $_POST['type'];
    $name = $_POST['name'];
    $year = $_POST['year'];
    $sql = "INSERT INTO car (plate_id, model, price, type, name, year) VALUES (?, ?, ?, ?, ?, ?)";
        
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssdsss", $plate_id, $model, $price, $type, $name, $year);
    
    if ($stmt->execute()) {
        echo "Car added successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
?>