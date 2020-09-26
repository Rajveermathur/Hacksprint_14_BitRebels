<?php
require 'common.php';
$name= mysqli_real_escape_string($con, $_POST['name']);

$URL=mysqli_real_escape_string($con, $_POST['URL']);
$artist=mysqli_real_escape_string($con,$_POST['artist']);
$mood= mysqli_real_escape_string($con, $_POST['mood']);
$query="SELECT id FROM songdata WHERE URL='$URL'";
$result= mysqli_query($con, $query) or die(mysqli_error($con));
if(mysqli_num_rows($result)>0){
    echo "<center><h1>Song already Exists</h1></center>";
    header( "refresh:5;url=list.php" );
}
else{
$query2="INSERT INTO songdata(name,URL,artist,mood) VALUES('$name', '$URL', '$artist', '$mood')";  
$result2=mysqli_query($con, $query2) or die(mysqli_error($con));
header( "refresh:2;url=upload.php" );
          
}

?>