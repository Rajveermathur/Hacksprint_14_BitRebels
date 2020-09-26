<?php
require 'common.php';
include'header.php';
$id = $_SESSION['email'];
if ($id!='rajveer.mathur25@gmail.com') { 
header("location: index.php");  }
else {
?>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>  
        <style type="text/css">
       body{
  background: url(https://images.unsplash.com/photo-1511735111819-9a3f7709049c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1267&q=80);
 
 background-size:70%;   
       }
    </style>
        </head>
    <body>
        
        <div class="container" style="height: 100%; color: red ">
                <br><br><br><br><div style="font-size: 60px; "><strong>Upload your Melody</strong></div>
            <div class="row">
                <div class="col-xs-6" >
            <form method="post" action="upload_script.php" >
            <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="Name of Song" required="true"><br>
                        </div>
        <div class="form-group">
           <input type="text" class="form-control" name="URL" placeholder="URL"
                  required="true"><br>
                        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="artist" placeholder="Artist" required="true"><br>
                        </div>
            <div class="form-group">
            <input type="text" class="form-control" name="mood" placeholder="Mood" required="true"><br>
                        </div>
                       
                <button class="btn btn-primary" style="background-color: #008b00">Submit</button></form>
            </div>
                
            </div></div>
        
         <?php
} 
         ?>
    </body>
</html>