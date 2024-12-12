<?php 
    $connect =new PDO("mysql:host=localhost;dbname=if0_37067887_crs",'root','');
    $sql = $connect->prepare("SELECT * FROM car WHERE Plate_ID = :id");
    $sql-> bindParam(':id',$_GET['id']);
    $sql->execute();
    $car = $sql->fetch(PDO::FETCH_OBJ);
    include('templates/head.html');
    session_start();
?>

    <section class="my-5 py-5" >
        <div class="container text-center mt-3 pt-5" >
            <h2 class="form-weight-bold" >Checkout</h2>
            <hr class="mx-auto" >
        </div>
        <div class="mx-auto container">
            <form id="checkout-form" method="POST" action="place_order.php">
                <?php echo $_SESSION['CID']; ?>
                <div class="form-group checkout-small-element" >
                    <label>Pickup Date</label>
                    <input type="text" class="form-control" id="checkout-name" name="name" placeholder="name" required>
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