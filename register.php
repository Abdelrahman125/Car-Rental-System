<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add log in</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
   <div class="img">
        
        <div class="content">
            <h2>Registration of new members</h2>
              <form action="RegisterController.php" method="post">
                <div class="falid">
                <input type="text" name="name" required placeholder="Enter Full Name">       
            
               </div>

                    <div class="falid space">
                    <input type="Password" name="pass" class="pass-key" required placeholder="Password">       
                       <span class="show">Show</span>

                   </div>
                   <br>
                      <div class="falid">
                      <input type="text" name="tle" required placeholder="Phone number">       
                
                    </div>
                    <br>
                    <div class="falid">
                      <input type="text" name="email" required placeholder="Email">       
                
                    </div>

                   <div class="falid1">
                    <input type="Submit" value="Submit">  

                   </div> 
    
        
            </form>   
              
       </div>
    </div>

    <script type="text/javascript" src="js/login.js"></script>

</body>
</html>
