
<?php
  session_start();
  $_SESSION['msg']='';
  $_SESSION['user']='user';


  if(isset($_POST['submit']))
  {
          $username=$_POST['username'];
          $email=$_POST['email'];
          $password=$_POST['password'];

          $_SESSION['user']=$username;
          
          $conn=mysqli_connect('localhost','root','','first_db') or die("cannot connect");
        

          $q=mysqli_query($conn,"select * from xregister where username='$username' and password='$password';");


          if(mysqli_num_rows($q)==1){
            header('Location: w3demo.php');
          
          }else{

            $_SESSION['msg']='Invalid Username and Password';

          }


  }

  ?>





<!DOCTYPE html>
<html>
<head>
  <title>w3login page</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
  
  <link rel="stylesheet" type="text/css" href="w3demo-login.css">

  
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
                <li><a href="w3demo-register.php"><span class="glyphicon glyphicon-edit"></span> register</a></li>
              </ul>
          </div>

    </div>
</nav>

                    <!--LOGIN PAGE BOX-->
    <div >
      <div class="container" style="background-color: white;">
        <form action="w3demo-login.php" method="POST" class="form-group">
          
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


            <button type="submit" name="submit" class="btn btn-primary">Login</button>

             <p id="errmsg" style="color:red; margin:5px;"><?php echo $_SESSION['msg']; ?></p>
        </form> 
      </div>
  </div>
                    <!--END OF LOGIN PAGE BOX-->


</body>
</html>