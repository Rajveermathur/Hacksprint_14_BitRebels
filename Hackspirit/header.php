<html lang="en">
<head>
  <title>HackSpiritv2</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php"><img src="img/1.png" style="height: 35px; padding-top: 0px;" alt="MUZIKAPE"></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
            <?php
            if(isset($_SESSION['email'])){
                ?>
                <li><a href="upload.php"><span class="glyphicon glyphicon-open"></span> Upload</a></li>
                <li><a href="list.php"><span class="glyphicon glyphicon-user"></span> List</a></li>
            <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
            <?php
            }else{
             ?>
            <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
            <li><a href=""  data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            
           <?php
            }
            ?>
            </ul>
            

        </div>
    </div>
    
</div>
    <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><strong>Login</strong></h4>
        </div>
        <div class="modal-body">
          <p>Don't have a account?
                    <a href="signup.php">Register</a></p>
          <form method="post" action="login_submit.php">
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="Email"
                                   required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Password"
                                   required="true" pattern=".{6,}">
                        </div>    
                
              <button class="btn btn-primary">Login</button></form>  <br> <a href="password.php">Forgot Password?</a>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
</body>
</html>