
<?php
session_start();
//$_SESSION['user']='varsha';
$username=$_SESSION['user'];

  $conn=mysqli_connect('localhost','root','','first_db') or die("cannot connect");

 $checkq=mysqli_query($conn,"select * from xbasic_details where username='$username';");

if(mysqli_num_rows($checkq)==0){

$_P['firstname']="";
$_P['secondname']="";
$_P['contact']="";
$_P['address']="";

$_P['email']="";
$_P['birthday']="";

$_P['gender']="";

}else{

  $rows=mysqli_fetch_array($checkq);

  $_P['firstname']=$rows['firstname'];
  $_P['secondname']=$rows['secondname'];
  $_P['contact']=$rows['contact'];
  $_P['address']= $rows['address'];

  $_P['email']=$rows['email'];
  $_P['birthday']= $rows['birthday'];

  $_P['gender']= $rows['gender'];



}



  if(isset($_POST['submit']))
  {
          $username=$_SESSION['user'];
          $firstname=$_POST['firstname'];
          $secondname=$_POST['secondname'];

          $contact=$_POST['contact'];
          $address=$_POST['address'];

          $email=$_POST['email'];
          $birthday=$_POST['birthday'];

          $gender=$_POST['gender'];

        
          $checkq=mysqli_query($conn,"select * from xbasic_details where username='$username';");


          //update or detail to the account of the username

          if(mysqli_num_rows($checkq)>0){
            $updateq=mysqli_query($conn,"UPDATE `xbasic_details` SET firstname='$firstname', secondname='$secondname', contact='$contact',address='$address', email='$email', birthday='$birthday', gender='$gender' where username='$username';");
          
          }else{

    
          $q=mysqli_query($conn,"INSERT INTO `xbasic_details` (`username`,`firstname`, `secondname`, `contact`,`address`, `email`, `birthday`, `gender`) VALUES ('$username','$firstname','$secondname','$contact','$address','$email','$birthday','$gender'); ") or die("failed query");

         //$row=mysqli_fetch_array($q);

        }


  }
  ?>

  

<?php ?>




<!DOCTYPE html>
<html>
<head>
  <title>useraccount</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
  
  <link rel="stylesheet" type="text/css" href="w3demo-useraccount.css">

  
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>


<body>

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




    <form action="w3demo-useraccount.php" method="POST" class="form-group" >
                    <!--LOGIN PAGE BOX 1-->
    <h3> Basic Details</h3>
    <div >
      <div class="container" style="background-color: white;">
    
          
          <div class="form-group">
                <label>First name</label>
                <input type="text" class="form-control"  placeholder="first name" name="firstname" value="<?php echo $_P['firstname']; ?>">
            </div>  

            <div class="form-group">
                <label >Second name</label>
                <input type="text" class="form-control"  placeholder="second name" name="secondname" value="<?php echo $_P['secondname']; ?>">
            </div>  


            <div class="form-group">
                <label >Contact No</label>
                <input type="text" class="form-control"  placeholder="Contact No" name="contact" value="<?php echo $_P['contact']; ?>">
            </div>  


            <div class="form-group">
                <label >Address</label>
                <input type="text" class="form-control"  placeholder="Address" name="address" value="<?php echo $_P['address']; ?>">
            </div> 

          <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="<?php echo $_P['email']; ?>">
            </div>

            <div class="form-group">
                <label >Birthday [DD-MM-YYYY]</label>
                <input type="text" class="form-control"  pattern="[0-9]{2}-[0-9]{2}-[0-9]{4}" placeholder="birthday" name="birthday" value="<?php echo $_P['birthday']; ?>" required>
            </div>   

            <div class="form-group">
                <label >Gender</label>
                <input type="text" class="form-control"  placeholder="Gender" name="gender" value="<?php echo $_P['gender']; ?>">
            </div> 

    
      </div>
  </div>
</div>
              


                  <!--LOGIN PAGE BOX 2-->
    <h3> Favourite</h3>
    <div >
      <div class="container" style="background-color: grey;">
          <div class="form-group">
                <label>Color</label>
                <input type="text" class="form-control"  placeholder="Color" name="color">
            </div>  

            <div class="form-group">
                <label >Food</label>
                <input type="text" class="form-control"  placeholder="Food" name="food">
            </div> 

             <div class="form-group">
                <label >Place</label>
                <input type="text" class="form-control"  placeholder="Place" name="place">
            </div>

             <div class="form-group">
                <label >Music</label>
                <input type="text" class="form-control"  placeholder="Music" name="music">
            </div>  



      </div>
  </div>
</div>





                  <!--LOGIN PAGE BOX 3-->
    <h3> Education</h3>
    <div >
      <div class="container" style="background-color: white;">
          <div class="form-group">
                <label>School</label>
                <input type="text" class="form-control"  placeholder="School" name="school">
            </div>  

            <div class="form-group">
                <label >College</label>
                <input type="text" class="form-control"  placeholder="College" name="college">
            </div> 

             <div class="form-group">
                <label >Degree</label>
                <input type="text" class="form-control"  placeholder="Degree" name="degree">
            </div>

             <div class="form-group">
                <label >mark%</label>
                <input type="text" class="form-control"  placeholder="mark" name="mark">
            </div>  

      </div>
  </div>
</div>



                  <!--LOGIN PAGE BOX 4-->
    <h3>Job info</h3>
    <div >
      <div class="container" style="background-color: grey;">
          <div class="form-group">
                <label>Job title</label>
                <input type="text" class="form-control"  placeholder="Job title" name="job_title">
            </div>  

            <div class="form-group">
                <label >Job location</label>
                <input type="text" class="form-control"  placeholder="Job location" name="job_location">
            </div> 

             <div class="form-group">
                <label >Job experience</label>
                <input type="text" class="form-control"  placeholder="Job experience" name="job_experience">
            </div>

             <div class="form-group">
                <label >Job pay</label>
                <input type="text" class="form-control"  placeholder="Job pay" name="job_pay">
            </div>  

      </div>
  </div>
</div>



   <!--LOGIN PAGE BOX 5-->
    <h3>Status</h3>
    <div >
      <div class="container" style="background-color: white;">
          <div class="form-group">
                <label>Current location</label>
                <input type="text" class="form-control"  placeholder="Current location" name="current_location">
            </div>  

            <div class="form-group">
                <label >weather</label>
                <input type="text" class="form-control"  placeholder="weather" name="weather">
            </div> 

             <div class="form-group">
                <label >Current activity</label>
                <input type="text" class="form-control"  placeholder="Current activity" name="current_activity">
            </div>
  

      </div>
  </div>
</div>




                 
    <br><br>
            <button type="submit" class="btn btn-primary" name="submit" style="width: 50%;
  text-align: center;
  position: center; margin-left: 25%;">Update</button>


    </form> 


<?php
/*  if(isset($_POST['submit']))
  {
          $name=$_POST['firstname'];
          $s_name=$_POST['secondname'];
          echo "hello ".$name." your secondname is ".$gender;

  }
  */

?>




</body>
</html>



