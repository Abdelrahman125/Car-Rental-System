<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
   <div class="img">
        
        <div class="content">
            <h2>Log in</h2>
            <form action="loginController.php" method="post">
                <div class="falid">
                <input type="email" name="email" required placeholder="email">       
            
               </div>

                    <div class="falid space">
                    <input type="Password" name="password"  class="pass-key" required placeholder="password">       
                       <span class="show">Show</span>

                   </div>

                   <div class="falid1">
                    <input type="Submit" value="Submit">  

                   </div> 
    
        
            </form>  
            <div class="signup" > You don't have an account
             <a href="register.php" > New registration</a>  
            </div>
       </div>
    </div>

    <script type="text/javascript" src="js/login.js"></script>

</body>
</html>