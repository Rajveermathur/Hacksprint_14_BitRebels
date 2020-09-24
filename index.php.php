<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="Index.css">
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
            background-image: url(https://images.unsplash.com/photo-1511379938547-c1f69419868d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80);
            background-repeat: no-repeat;
            background-position: center;
            background-size: 100%;
            background-attachment: scroll;
        }
#border {
	background: rgba(255,255,255,0.6);
	border: 5px solid #bdc3c7;
	margin-top: 30px;
	margin-bottom: 0px;
}

h4 {
	font-family: Rancher;
	font-weight: 300;
	font-size: 65px;
}

h2 {
	color: #2c3e50;
	margin-left: 20px;
	font-family: Source Sans Pro;
	font-size: 75px;
}

p {
	margin-left: 20px;
	margin-right: 20px;
	font-weight: 300;
}

#borderleft {
	margin-left: 20px;
}

#borderbottom {
	border-bottom: 3px solid #f1f2f2;
	padding-bottom: 15px;
}

#borderright {
	border-right: 3px solid #f1f2f2;
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
#cover {
	background: rgba(255,255,255,0.3);
	border: 5px solid #bdc3c7;
	margin-top: 30px;
	margin-bottom: 30px;
}
    </style>
    <div class="container">
		<div id="cover">
		<div id="border">
			<h2>Muzikape</h2>
			<h4 id="borderleft">A One-stop destination for all your music! </h4>
		</div>
			<div class="row">
				<div class="col-lg-6">
					<div id="border">
					<div id="info">
						<p>
							Welcome to Muzikape! Your one-stop destination for all new hot,trendy,latest as well as old,soulful and evergreen music. You got a mood, we have music for one. Choose from a wide range of music that expands over various moods. 
						</p>
					</div>
					</div>
				</div>

				<div class="col-lg-5" id="borderleft">
					<div id="border">
					<div id="register">
						<p>
							Already a member, sign-in!
							<div><button class="btn btn-default btn-lg" id="button"><i class="fas fa-user"></i> Sign-In!</button></div>
						</p>
						<hr>
						<p>
							New to the experience! Don't worry register now to enter the world of music.
							<div><button class="btn btn-default btn-lg" id="button"><i class="fas fa-user-plus"></i> Register</button></div>
						</p>
					</div>
					</div>
				</div>				
			</div>
			</div>
		</div>
    
</body>
</html>