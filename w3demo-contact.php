<?php

  session_start();
  $_SESSION['msg']='';


  if(isset($_POST['submit']))
  {

              $conn=mysqli_connect('localhost','root','','first_db') or die("cannot connect");


              $name=mysqli_real_escape_string($conn,$_POST['name']);
              $email=mysqli_real_escape_string($conn,$_POST['email']);
              $comments=mysqli_real_escape_string($conn,$_POST['comments']);
           
   


              $sql=mysqli_query($conn,"INSERT INTO `xcontact`(`name`, `email`, `comments`) VALUES ('$name','$email','$comments'); ") or die("failed query");
              $_SESSION['msg']='comments sended';
                        


      }

  ?>








<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>w3demo-contact</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <link rel="stylesheet" type="text/css" href="w3demo.css">

   

</head>

<body>

	                                             <!---------------------navigation------------------------------------>

						<nav class="navbar navbar-default navbar-fixed-top">
						  <div class="container-fluid">
						    <div class="navbar-header">
						      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						        <span class="icon-bar"></span>
						        <span class="icon-bar"></span>
						        <span class="icon-bar"></span>                        
						      </button>
						      <a class="navbar-brand" href="w3demo.php">CORNER</a>
						    </div>
						    <div class="collapse navbar-collapse" id="myNavbar">
						      <ul class="nav navbar-nav navbar-right">
						        <li><a href="w3demo.php">HOME</a></li>
						        <li><a href="w3demo-discover.php">DISCOVER</a></li>
						        <li><a href="w3mystery.php">MYSTERY</a></li>
						        <li><a href="w3demo-contact.php">CONTACT</a></li>
						      
						        <li><a href="w3demo-login.php">LOGOUT</a></li>
						        
						          
						        <li><a href="w3demo-useraccount.php"><span class="glyphicon glyphicon-user"> <?php echo $_SESSION['user']; ?></span></a></li>
						      </ul>
						    </div>
						  </div>
						</nav>

	
					<!-- Container (Contact Section) -->
					<div id="contact" class="container">
					  <h3 class="text-center">Contact</h3>
					  <p class="text-center"><em>SUPPORT!</em></p>

					  <div class="row">
					    <div class="col-md-4">
					      <p>CONTACT IF NEEDED.</p>
					      <p><span class="glyphicon glyphicon-map-marker"></span>Chennai</p>
					      <p><span class="glyphicon glyphicon-phone"></span>Phone: +9487892432</p>
					      <p><span class="glyphicon glyphicon-envelope"></span>Email: techudhay@gmail.com</p>
					    </div>

					    <form method="POST" action="w3demo-contact.php">
					    <div class="col-md-8">
					      <div class="row">
					        <div class="col-sm-6 form-group">
					          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
					        </div>
					        <div class="col-sm-6 form-group">
					          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
					        </div>
					      </div>
					      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea>
					      <br>
					      <div class="row">
					        <div class="col-md-12 form-group">
					          <button class="btn pull-right" type="submit" name="submit">Send</button>
					        </div>
					      </div>

					  	</form>

					    </div>
					  </div>
				
         <p id="errmsg" style="color:green; margin:10px; margin-left: 50%; font-size:20px;"><?php echo $_SESSION['msg']; ?></p>

</body>
</html>