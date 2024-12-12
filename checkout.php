<?php

session_start();


if(!empty($_SESSION['cart']))

?>


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
    <section class="my-5 py-5" >
        <div class="container text-center mt-3 pt-5" >
            <h2 class="form-weight-bold" >Checkout</h2>
            <hr class="mx-auto" >
        </div>
        <div class="mx-auto container">
            <form id="checkout-form" method="POST" action="place_order.php">
                <div class="form-group checkout-small-element" >
                    <label>Name</label>
                    <input type="text" class="form-control" id="checkout-name" name="name" placeholder="name" required>
                </div>
                <div class="form-group checkout-small-element">
                    <label>Email</label>
                    <input type="text" class="form-control" id="checkout-email" name="email" placeholder="Email" required>
                </div>
                <div class="form-group checkout-small-element">
                    <label>Phone</label>
                    <input type="tel" class="form-control" id="checkout-password" name="phone" placeholder="Phone" required>
                </div>
                <div class="form-group checkout-small-element">
                    <label>City</label>
                    <input type="text" class="form-control" id="checkout-city" name="city" placeholder="City" required>
                </div>
                <div class="form-group checkout-large-element">
                    <label>Address</label>
                    <input type="text" class="form-control" id="checkout-address" name="address" placeholder="Address" required>
                </div>
                <div class="form-group checkout-btn-container">
                    <input type="submit" class="btn" id="checkout-btn" name="Place_order" value="Place Order ">
                </div>
            </form>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>