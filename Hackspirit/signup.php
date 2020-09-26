<?php
require 'common.php';
//if (isset($_SESSION['email'])) {
    //header('location: index.php');}
include'header.php';
    ?>
<html>
    <head>
        <title>Sign Up</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>  
    <style type="text/css">
       body{
  background: url(https://images.unsplash.com/photo-1511379938547-c1f69419868d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80);
  background-repeat: no-repeat;
  background-size: cover;
  
  }
    </style>
    </head>
    <body>
        <?php
        //include 'header.php';
        ?>
        
        <div class="container" style="height: 100%; color: red ">
                <br><br><br><br><div style="font-size: 60px; "><strong>Join Up</strong></div>
            <div class="row">
                <div class="col-xs-6" >
            <form method="post" action="signup_script.php" >
            <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="Name" required="true"><br>
                        </div>
        <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="Email"
                   required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"><br>
                        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password"
                   required="true" pattern=".{6,}"><br>
                        </div>
       <div class="form-group">
           <input type="text" class="form-control" name="contact" placeholder="Contact"
                  required="true" pattern=".{6,}"><br>
                        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="city" placeholder="City" required="true"><br>
                        </div>
            
                       
                <button class="btn btn-primary" style="background-color: #008b00">Submit</button></form>
            </div>
                
            </div></div>
        
         <?php
        // include 'footer.php';
         ?>
    </body>
</html>