<?php 
    $connect =new PDO("mysql:host=localhost;dbname=if0_37067887_crs",'root','');
    $sql = $connect->prepare("SELECT * FROM car WHERE Plate_ID = :id");
    $sql-> bindParam(':id',$_GET['id']);
    $sql->execute();
    $car = $sql->fetch(PDO::FETCH_ASSOC);
    include('templates/head.html');
?>
    <section class="cart container my-5 py-5" >
        <div class="container mt-5 " >
            <h2 class="font-weight-bolde">Your Cart</h2>
            <hr>
        </div>
        <table class="mt-5 pt-5" >
            <tr>
                <th>Car</th>
                <th></th>
                <th>Total</th>
            </tr>
            <tr>
                <td>
                    <div class="car-info" >
                        <img src="img/f.jpg">
                        <div>
                            <h1>Model: <?php echo $car['Model']; ?></h1>
                            <h2>Type: <?php echo $car['type']; ?></h2>
                            <h2>Car Name: <?php echo $car['name']; ?></h2>
                            <h4>Status: <?php echo $car['Status']; ?></h2>
                        </div>
                    </div>
                </td>
                <td>
                </td>
                <td>
                    <span>$</span>
                    <span class="car-price" ><?php echo $car['price']; ?></span>
                </td>
            </tr>
        </table>
        <div class="cart-total">
            <table>
                <tr>
                    <td></td>
                    <td></td>
                </tr>
            </table>
        </div>
        <div class="checkout-container">
            <form method="POST" action="checkout.php" >
                <input type="hidden" name="pltid" value="<?php echo $_GET['id'] ?>">
                <input type="submit" class="btn primary bg-primary checkout-btn" value="Checkout" name="checkout" >
            </form>
        </div>
    </section>
   <?php
    include('templates/tail.html');
   ?>