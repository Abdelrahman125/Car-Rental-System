<?php
    $connect =new PDO("mysql:host=localhost;dbname=if0_37067887_crs",'root','');
    $sql = $connect->prepare("SELECT * FROM office");
    $sql->setFetchMode(PDO:: FETCH_OBJ);
    $sql->execute();
    $offices = $sql->fetchAll(PDO:: FETCH_OBJ);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="css/StyleS.css" rel="stylesheet">
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
            <?php 
                foreach ($offices as $office) { 
                    echo "<option value='".$office->Office_ID."'>".$office->Location."</option>";
                }      
            ?>
        </select>
        <button type="submit" name="submit3">Submit</button>
    </form>
</body>
</html>
<?php
if(isset($_POST["submit"])){
    $srchnm = $_POST["search"];
    $sqll = $connect->prepare("SELECT * FROM `car` WHERE model LIKE '%$srchnm%'");
    $sqll->setFetchMode(PDO:: FETCH_OBJ);
    $sqll->execute();
    $cars = $sqll->fetchAll(PDO:: FETCH_OBJ);
    
    if($cars){
       foreach($cars as $car){ 
        echo"<br><br><br>"
        ."Car model: " 
        .$car->Model.'<br>'
        ."Car status: "
        .$car->Status.'<br>'
        ."Car date: "
        .$car->Year.'<br>'
        ."Car price: "
        .$car->price.' EGP'.'<br>'
        ."<a href='cart.php?id=".$car->Plate_ID."'><button>Rent Now</button></a>";
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
    $cars = $sqll2->fetchAll(PDO:: FETCH_OBJ);
    if($cars){
       foreach($cars as $car){ 
        echo"<br><br><br>"
        ."Car model: " 
        .$car->Model.'<br>'
        ."Car status: "
        .$car->Status.'<br>'
        ."Car date: "
        .$car->Year.'<br>'
        ."Car price: "
        .$car->price.' EGP'.'<br>'
        ."<a href='cart.php?id=".$car->Plate_ID."'><button>Rent Now</button></a>";
       }

    }else{
        echo"Car not found";
    }


    }    
    if(isset($_POST["submit3"])){
        $srchoff = $_POST["office"];
        $sqll3 = $connect->prepare("SELECT * FROM `car` 
    JOIN `office` ON car.Office_ID = office.Office_ID WHERE office.Office_ID = '$srchoff'");
        //$sqll3 = $connect->prepare("SELECT * FROM `office` where Office_ID = '$srchoff'");
        $sqll3->setFetchMode(PDO:: FETCH_OBJ);
        $sqll3->execute();
        $cars = $sqll3->fetchAll(PDO:: FETCH_OBJ);
        if($cars){
        foreach($cars as $car){    
            echo"<br><br><br>"
            ."Car model: " 
            .$car->Model.'<br>'
            ."Car status: "
            .$car->Status.'<br>'
            ."Car date: "
            .$car->Year.'<br>'
            ."Car price: "
            .$car->price.' EGP'.'<br>'
            ."<a href='cart.php?id=".$car->Plate_ID."'><button>Rent Now</button></a>";
        }
        }else{
            echo"Office not found";
        }
    }
?>

