<?php 
    session_start();
    include('templates/head.html');
?>

    <section class="my-5 py-5" >
        <div class="container text-center mt-3 pt-5" >
            <h2 class="form-weight-bold" >Checkout</h2>
            <hr class="mx-auto" >
        </div>
        <div class="mx-auto container">
            <form id="checkout-form" method="POST" action="CheckoutController.php">
                <div class="form-group checkout-small-element" >
                    <label>Pickup Date</label>
                    <input type="date" class="form-control" id="checkout-name" name="pickup" placeholder="name" required>
                    <label>Return Date</label>
                    <input type="date" class="form-control" id="checkout-name" name="return" placeholder="name" required>
                    <label>Payment Method</label>
                    <select name="pymntmthd">
                        <option value="cash">cash</option>
                        <option value="credit card">credit card</option>
                    </select>
                    <input type="hidden" value="<?php echo $_POST['pltid']?>" name="pltid">
                    <input type="hidden" value="<?php echo $_SESSION['CID']?>" name="cid">
                    <input type="hidden" value="<?php echo $_POST['amount']?>" name="amount">
                </div>
                    <div class="form-group checkout-btn-container">
                        <input type="submit" class="btn text-white bg-primary" id="checkout-btn" name="Place_order" value="Place Order ">
                    </div>
            </form>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>