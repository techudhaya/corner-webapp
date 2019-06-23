<?php

  session_start();

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
   <link rel="stylesheet" type="text/css" href="w3mystery.css">

   

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
						        
						          
						        <li><a href="w3demo-useraccount.php"> <span class="glyphicon glyphicon-user"> <?php echo $_SESSION['user']; ?> </span></a></li>
						      </ul>
						    </div>
						  </div>
						</nav>





							<div class="containter">
									<div class="shadow">
										<p>MYSTERY</p>
							</div>


</body>
</html>