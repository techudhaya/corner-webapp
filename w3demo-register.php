<?php

  session_start();
  $_SESSION['msg']='';
   $_SESSION['success_msg']='';
  if(isset($_POST['submit']))
  {

              $conn=mysqli_connect('localhost','root','','first_db') or die("cannot connect");


              $username=mysqli_real_escape_string($conn,$_POST['username']);
              $email=mysqli_real_escape_string($conn,$_POST['email']);
              $password=mysqli_real_escape_string($conn,$_POST['password']);
              $confirmpassword=mysqli_real_escape_string($conn,$_POST['confirmpassword']);


              

            $result=mysqli_query($conn,"select * from xregister where username='$username'; ");


           

            if(mysqli_num_rows($result)>0){
                
                 $_SESSION['msg']='User name already taken';
            }
            else
            {
            

                    if($password==$confirmpassword){
                  


                        $sql=mysqli_query($conn,"INSERT INTO `xregister`(`username`, `email`, `password`) VALUES ('$username','$email','$password'); ") or die("failed query");
                         $_SESSION['success_msg']='Account created';
                        
                  }
                  else
                  {

                    $_SESSION['msg']='enter same password';
     
                  }
            }

      }

  ?>





<!DOCTYPE html>
<html>
<head>
  <title>w3register page</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
  
  <link rel="stylesheet" type="text/css" href="w3demo-register.css">

  
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</head>

<body>
  <nav class="navbar">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle " data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar" style="background-color: white"></span>
            <span class="icon-bar" style="background-color: white"></span>
            <span class="icon-bar" style="background-color: white"></span>                        
          </button>

          <a class="navbar-brand" href="w3demo.php">KIDS CORNER</a>
        </div>
        <!--navigation option next to the brand name-->
          <div class="collapse navbar-collapse" id="myNavbar">
            
            <!--navigtion bar to the right-->
              <ul class="nav navbar-nav navbar-right">
                <li><a href="w3demo-login.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="w3demo-register.php"><span class="glyphicon glyphicon-edit"></span>register</a></li>
              </ul>
          </div>

    </div>
</nav>

                    <!--LOGIN PAGE BOX-->
    <div >
      <div class="container" style="background-color: white;">
        <form action="w3demo-register.php" method="POST" class="form-group">
          
          <div class="form-group">
                <label>User name</label>
                <input type="text" class="form-control"  placeholder="User name" name="username" required>
            </div>  

      

          <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
            </div>



             <div class="form-group">
                <label >password</label>
                <input type="password" class="form-control"  placeholder="password" name="password" required>
            </div>  

              <div class="form-group">
                <label >Confirm password</label>
                <input type="password" class="form-control"  placeholder="Confirm password" name="confirmpassword" required>
            </div>  




            <button type="submit" name="submit" class="btn btn-primary">register</button>
            
             <p id="errmsg" style="color:green; margin:10px;"><?php echo $_SESSION['success_msg']; ?></p>
            <p id="errmsg" style="color:red; margin:10px;"><?php echo $_SESSION['msg']; ?></p>
        </form> 
      </div>
  </div>

                    <!--END OF LOGIN PAGE BOX-->


</body>
</html>