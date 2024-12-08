<?php
    if(isset($_SESSION['user'])){
        // will add some stuff here later
    }else{
        header('Location: login.php');
    }
?>
<h1>admin panel</h1>