<?php
    include('conn.php');
    $plate_id = $_POST['pltid'];
    $model = $_POST['model'];
    $price = $_POST['price'];
    $type = $_POST['type'];
    $name = $_POST['name'];
    $year = $_POST['year'];
    $target_dir = '../img/';
    $target_file = $target_dir . basename($_FILES["customeFile"][$plate_id]);
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

?>