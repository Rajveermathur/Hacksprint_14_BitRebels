<?php
require 'common.php';
include 'header.php';

if(isset($_POST['search'])){
    $search=$_POST['search'];
    $query="SELECT * FROM `songdata` WHERE name='$search'OR mood='$search' OR artist='$search'";
    $result=mysqli_query($con, $query) or die(mysqli_error($con));
}
else{
$query="SELECT * FROM `songdata`";
$result=mysqli_query($con,$query) or die(mysqli_error($con));
}
$n=mysqli_num_rows($result);
if($n==0){
    echo 'Add items to cart First!';
} else{
?>

<html>
    <head>
        <title>List</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    </head>
    <body>
        <style type="text/css">
       body{
  background-image: url(https://images.unsplash.com/photo-1524230659092-07f99a75c013?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80);
 

  
  height: 500px; /* You must set a specified height */
  background-position: center; /* Center the image */
  background-repeat: repeat-y; /* Do not repeat the image */
  background-size: cover; /* Resize the background image to cover the entire container */
       }   
             #yo{
      color: white;
  
  }
  th, td{
      background-color: black;
  }
    </style>
        <form method="post" action="list.php" >
        <div class="form-group " style="padding-top:55px; padding-left: 1245px; padding-right: 380px; ">
            <button class="btn btn-primary" style="margin-bottom: 25px;"><a href="index.php" style="text-decoration: none;" id="yo">Home</a></button><input type="text" class="form-control" name="search" placeholder="Search.."><br>
                        </div></form>
        
        <div class="container" style="height: 100%;padding-left: 300px; padding-right: 300px; text-decoration: activeborder;"> 
            <table class="table" style="color:  aliceblue">
                <tbody>
                    <tr><th>Name</th><th>URL</th><th>Artist Name</th><th>Mood</th><td></td><th id="yo">Modify</th></tr> 
                    <?php
       
                    while($n--){
        $row= mysqli_fetch_array($result);  
        if($_SESSION['email']=='rajveer.mathur25@gmail.com'){
        echo "<tr><td>".$row['name']."</td><td>".$row['URL']."</td><td>".$row['artist']."</td><td>".$row['mood'].
                "</td><td><a href='list-remove.php?id={$row['id']}' class='remove_item_link'><span class='glyphicon glyphicon-remove'>"
                . "</span></a></td><td><a href='mood_modify.php?id=".$row["id"]."' alt='edit'></a>"?> <a href=""  data-toggle="modal" data-target="#allModal" id="yo">Modify Mood</a></td></tr> 
       <?php }else{
           echo "<tr><td>".$row['name']."</td><td>".$row['URL']."</td><td>".$row['artist']."</td><td>".$row['mood']."</td><td></td>"
                   ."</span></a></td><td><a href='mood_modify.php?id={$row['id']}'></a>"?> <a href=""  data-toggle="modal" data-target="#moodModal" id="yo">Modify Mood</a></td></tr>
    <?php   }
        
        } }?> 
       <div class="modal fade" id="moodModal" role="dialog">
    <div class="modal-dialog">
    
      
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><strong>Modify Mood of The Song</strong></h4>
        </div>
        <div class="modal-body">
          <p>Want to Upload your Personal Collection? 
                    <a href="signup.php">Sign Up</a></p>
          <form method="post" action="mood_modify.php">
                        <div class="form-group">
                            <input type="text" class="form-control" name="mod" placeholder="What's your mood for this!"
                                   required="true">
                        </div>
                                     
              <button class="btn btn-primary">Change It</button></form>  <br> 
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div> 
        
     
            </body> </html>