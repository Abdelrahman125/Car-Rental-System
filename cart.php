
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="https//pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEc3Yw5cVb3zcuHt0A93w35dYTsvhLPVnYs9eStHfGJvOvkxVfELGroGkvsg+p" crossorigin="anonymous" >

    <link rel="stylesheet" href="assets/css/style.css">
    
</head>
<body>

    <!--Cart-->
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
                        <img src="assets/imgs/BMW.jpeg">
                        <div>
                        <h1><?php echo $_GET['id']; ?></h1>
                            <small><span></span></small>
                            <br>
                            <form method="POST" action="cart.php" >
                                <input type="hidden" name="Plate_ID" value="<?php echo $row['Plate_ID'];  ?>" />
                                <input type="submit" name="remove_car" class="remove-btn" value="remove" >
                            </form>
                            
                        </div>
                    </div>
                </td>
                
                <td>
                
                </td>

                <td>
                    <span>$</span>
                    <span class="car-price" >155</span>
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
                <input type="submit" class="btn checkout-btn" value="Checkout" name="checkout" >
            </form>
            
        </div>

    </section>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>