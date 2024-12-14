<?php
    $connect =new PDO("mysql:host=localhost;dbname=if0_37067887_crs",'root','');
    $stmt = $connect->prepare("INSERT INTO reservation (Reservation_ID, Customer_ID, Plate_ID, Reservation_Date, Pickup_Date, Return_Date, Status) VALUES (NULL,:cid,:pltid,:rsvdate,:picdate,:retdate,'')");
    $stmt->bindParam(':cid', $_POST['cid'], PDO::PARAM_INT);
    $stmt->bindParam(':pltid', $_POST['pltid'], PDO::PARAM_INT);
    $stmt->bindParam(':rsvdate', date_default_timezone_get());
    $stmt->bindParam(':picdate', $_POST['pickup']);
    $stmt->bindParam(':retdate', $_POST['return']);
    $stmt->execute();
    $sql2 = $connect->prepare("INSERT INTO payment");
    
?>