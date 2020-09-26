<?php
require 'common.php';
if (isset($_SESSION['email'])) {
echo'You are logged in!';}
include 'header.php';
?>                            
<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Ranchers&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
    <title> MuZikape </title>
   
    <?php
    include 'header.php';
    ?>
    
    
</head>

<body>
    <style text='text/css'>
        body{
            background-image: url(https://images.unsplash.com/photo-1507245921392-e902673ca772?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80);
            background-repeat: no-repeat;
            background-position: center;
            background-size: 100%;
            background-attachment: scroll;
        }
#border {
	background: rgba(84,81,81,0.8);
	border: 1px solid #bdc3c7;
	margin-top: 30px;
	margin-bottom: 0px;
}

h4 {
        color: rgba(255,255,255);
	font-family: Rancher;
	font-weight: 300;
	font-size: 50px;
        font-family: comic Sans MS;
}

h2 {
	color: rgba(255,255,255);
        text-align: center;
	margin-left: 20px;
	font-family: comic Sans MS;
	font-size: 75px;
}

p {
	margin-left: 20px;
	margin-right: 20px;
	font-weight: 300;
        color:rgba(255,255,255);
        font-family: comic Sans MS;
        text-align: center;
        font-size: 30px;
}

#borderleft {
	margin-left: 20px;
}

#borderbottom {
	border-bottom: 1px solid #f1f2f2;
	padding-bottom: 15px;
}

#borderright {
	border-right: 1px solid #f1f2f2;
	margin-left: 40px;
	margin-left: 40px;
}
#info {
	text-align: center;
	font-size: 30px;
	padding: 20px;
}
#border, #info {
	margin-left: 20px;
	margin-right: 20px;
}
#border, #register {
	margin-bottom: 20px;
	margin-top: 20px;
}
#register {
	font-size: 30px;
	padding: 20px;
}
#button {
	margin-left: 20px;
}

    </style>
    <div class="container">
		<div id="cover">
		<div id="border">
                    <br>
                    <h2>Muzikape</h2>
                        
                        <h4 id="borderleft"> One-stop destination for all your music! </h4> <br>
                        
                        <p>
                            Welcome to Muzikape! <br>
                            You got a mood, we have music for one. <br>
                            Choose from a wide range of music that expands over various moods.
                        </p>
                        
                        <div class="row">
				<div class="col-lg-6">
					<div id="border">
					<div id="info">
						<p>
                                                    Life is too short for bad music!<br>
                                                    Log In to change your World.
                                                <div><button class="btn btn-default btn-lg" id="button"><i class="fas fa-user"></i><a href="#"> Log In </a></button></div>
						</p>
					</div>
					</div>
				</div>

				<div class="col-lg-5" id="borderleft">
					<div id="border">
					<div id="register">
						
					
						<p>
                                                    New to the experience? Don't worry! <br>
                                                    register now to enter the world of music.
                                                <div><button class="btn btn-default btn-lg" id="button"><i class="fas fa-user-plus"></i><a href="signup.php">Register</a></button></div>
						</p>
                                                
					</div>
					</div>
				</div>				
			</div>
			</div>
		</div>
    
</body>
</html>