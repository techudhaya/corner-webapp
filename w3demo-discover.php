
<?php

session_start();

  $username=$_SESSION['user'];
  

  if(isset($_POST['submit']))
  {
          $search=$_POST['search'];

          $selector=$_POST['sorty'];


        


          $conn=mysqli_connect('localhost','root','','first_db') or die("cannot connect");
        

          $q=mysqli_query($conn,"select * from xbasic_details where $selector='$search'; ") or die("failed query");

         //$row=mysqli_fetch_array($q);

  }


  ?>

  









<!DOCTYPE html>
<html>
<head>
  <title>discover </title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
  
  <link rel="stylesheet" type="text/css" href="w3demo-discover.css">

  
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



<body>



<div class="container">
    <form method="POST" action="">
          <div class="searchflex">
            <input type="text" name="search" placeholder="search" class="form-control">
            <button class="btn bt-default" type="submit" name="submit"><i class="glyphicon glyphicon-search"></i></button>
          </div>
          <br>
          <div id="sorty">
                  <select name="sorty">
                            <option value="username" selected>username</option>
                            <option value="gender">gender</option>
                            <option value="firstname">firstname</option>
                            <option value="secondname">secondname</option>
                            <option value="contact">contact</option>
                            <option value="birthday">birthday</option>
                            <option value="address">address</option>

                </select>
        </div>
     </form> 
 </div> 



<br><br><br>

<div class="container">
      <?php

       
          if(isset($_POST['submit']))
            { 
              echo "<table>";
              echo "<tr id='infohead'> 
                            <th>username</th>   
                            <th> Name</th>    
                            <th> contact</th>    
                            <th> email</th>      
                            <th> $selector</th>  
                    </tr> ";

             // echo "<br><br>";



              while($row=mysqli_fetch_assoc($q)){

                echo '<tr class="disp" >';   

                echo "<td id='userr'>".$row['username']."</td>".
                "<td>".$row['firstname']."</td>".
                "<td>".$row['contact']."</td>".
                "<td>".$row['email']."</td>".
                "<td>".$search."</td>";

                echo '</tr>';


               // echo "<br>";
              }
              echo "</table>";
         

            //echo mysqli_num_rows($q);
          }

        ?>
   
</div>



</body>
</html>