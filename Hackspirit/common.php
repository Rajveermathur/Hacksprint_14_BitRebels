<?php
$con= mysqli_connect("localhost","root","","HS","3308") or die(mysqli_error($con));
if(!isset($_SESSION['email'])){
session_start();}

?>