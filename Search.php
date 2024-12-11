<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="StyleS.css" rel="stylesheet">
    <title>Car Rental System</title>
</head>
<body>
    <form method="post" action="search.php">
        <label>Search</label>
        <input type="text" name="search">
        <input type="submit" name="submit"><br>
        <label>pricing</label>
        <input type="number" min='0' name="price">
        <input type="submit" name="submit2"><br>
        <label for="offices">Select an office: </label>
        <select id="offices" name="office">
            <option value="1">Moharam Bek</option>
            <option value="0">London</option>
            <option value="2">Kobry El-namos</option>
        </select>
        <button type="submit" name="submit3">Submit</button>
    </form>
</body>
</html>
<?php
$connect =new PDO("mysql:host=localhost;dbname=car_rental",'root','');
if(isset($_POST["submit"])){
    $srchnm = $_POST["search"];
    $sqll = $connect->prepare("SELECT * FROM `car` WHERE model LIKE '%$srchnm%'");
    $sqll->setFetchMode(PDO:: FETCH_OBJ);
    $sqll->execute();
    $cars = $sqll->fetchAll(PDO:: FETCH_OBJ);
    if($cars){
       foreach($cars as $car){ 
        echo"Car found";
        echo"<br><br><br>";
        echo"Car model: "; 
        echo$car->Model.'<br>';
        echo"Car status: ";
        echo$car->Status.'<br>';
        echo"Car date: ";
        echo$car->Year.'<br>';
        echo"Car price: ";
        echo$car->price.' EGP'.'<br>';
       }
    }else{
        echo"Car not found";
    }
}
  if(isset($_POST["submit2"])){ 
    $srchpr = $_POST["price"];
    $srchpr_r = $srchpr+1000;
    $srchpr_l = $srchpr-1000;
    $sqll2 = $connect->prepare("SELECT * FROM `car` WHERE price between '$srchpr_l' and '$srchpr_r'");
    $sqll2->setFetchMode(PDO:: FETCH_OBJ);
    $sqll2->execute();
    $prices = $sqll2->fetchAll(PDO:: FETCH_OBJ);
    if($prices){
       foreach($prices as $price){ 
        echo"Car found";
        echo"<br><br><br>";
        echo"Car model: "; 
        echo$price->Model.'<br>';
        echo"Car status: ";
        echo$price->Status.'<br>';
        echo"Car date: ";
        echo$price->Year.'<br>';
        echo"Car price: ";
        echo$price->price.' EGP'.'<br>';
       }

    }else{
        echo"Car not found";
    }


    }    
    if(isset($_POST["submit3"])){
        $srchoff = $_POST["office"];
        $sqll3 = $connect->prepare("SELECT car.Model, car.Status, car.Year, car.price FROM `car` 
    JOIN `office` ON car.Office_ID = office.Office_ID WHERE office.Office_ID = '$srchoff'");
        //$sqll3 = $connect->prepare("SELECT * FROM `office` where Office_ID = '$srchoff'");
        $sqll3->setFetchMode(PDO:: FETCH_OBJ);
        $sqll3->execute();
        $offices = $sqll3->fetchAll(PDO:: FETCH_OBJ);
        if($offices){
        foreach($offices as $office){    
           echo"Office found";
           echo"<br><br><br>";
           //echo$row->Office_ID.'<br>';
           //echo$row->Location;
           echo"Car model: "; 
           echo$office->Model.'<br>';
           echo"Car status: ";
           echo$office->Status.'<br>';
           echo"Car date: ";
           echo$office->Year.'<br>';
           echo"Car price: ";
           echo$office->price.' EGP'.'<br>';
        }
        }else{
            echo"Office not found";
        }
    }
?>

