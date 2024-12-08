<?php
    include('../templates/head.html');
?>

<style>
    body{
        margin: auto 100px;
    }
    .container{
        margin-top: 20px;
        width: 40%;
    }
</style>
<div class="container">
<h1>Login for Admins</h1>
<br>
<form action="loginController.php" method="post">
  <div class="mb-3">
    <label for="userinp" class="form-label">Username</label>
    <input class="form-control" id="userinp"  name="user">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="pass">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
<?php
    include('../templates/tail.html');
?>