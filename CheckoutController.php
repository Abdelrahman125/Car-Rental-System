<?php
    $connect =new PDO("mysql:host=localhost;dbname=if0_37067887_crs",'root','');
    $rid = $_POST['pltid'] . $_POST['cid']; 
    $stmt = $connect->prepare("INSERT INTO reservation (Reservation_ID, Customer_ID, Plate_ID, Reservation_Date, Pickup_Date, Return_Date, Status) VALUES (:rid,:cid,:pltid,:rsvdate,:picdate,:retdate,'')");
    $stmt->bindParam(':rid', $rid);
    $stmt->bindParam(':cid', $_POST['cid'], PDO::PARAM_INT);
    $stmt->bindParam(':pltid', $_POST['pltid']);
    $stmt->bindParam(':rsvdate', date_default_timezone_get());
    $stmt->bindParam(':picdate', $_POST['pickup']);
    $stmt->bindParam(':retdate', $_POST['return']);
    $stmt->execute();
    $pid = $_POST['cid'] . "000"; 
    $sql2 = $connect->prepare("INSERT INTO payment (Payment_ID, Reservation_ID, PaymentMethod, Amount) VALUES (:pid,:rid,:pymnt,:amount)");
    $sql2->bindParam(':pid', $pid);
    $sql2->bindParam(':rid', $rid);
    $sql2->bindParam(':pymnt', $_POST['pymntmthd']);
    $sql2->bindParam(':amount', $_POST['amount']);
    $sql2->execute();
    echo "Payment Success";
?>