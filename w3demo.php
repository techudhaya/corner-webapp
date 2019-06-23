
<?php
  session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>w3homepage</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="w3demo.css">

</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

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
        
          
        <li><a href="w3demo-useraccount.php"><span class="glyphicon glyphicon-user"> <?php echo $_SESSION['user']; ?> </span></a></li>
      </ul>
    </div>
  </div>
</nav>





                                           <!---------------------sliding image------------------------------------>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="https://pre00.deviantart.net/4aee/th/pre/f/2015/155/f/9/sunset_sketch___time_lapse_video_by_arcipello-d8vzg09.jpg" alt="New York" width="1200" height="700">
        <div class="carousel-caption">
          <h3>Memories</h3>
          <p>Memories are something which should be preserved in our lifes</p>
        </div>      
      </div>

      <div class="item">
        <img src="https://images.pexels.com/photos/206359/pexels-photo-206359.jpeg?auto=compress&cs=tinysrgb&h=350" alt="Chicago" width="1200" height="700">
        <div class="carousel-caption">
          <h3>Reminisce</h3>
          <p>Indulge in enjoyable recollection of past events.</p>
        </div>      
      </div>
    
      <div class="item">
        <img src="https://www.houseandtech.com/wp-content/uploads/2015/02/Tahiti-French-Polynesie-Sunset.jpg" alt="Los Angeles" width="1200" height="700">
        <div class="carousel-caption">
          <h3>Events</h3>
          <p>Great minds discuss ideas; average minds discuss events; small minds discuss people.</p>
        </div>      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>

<br>











                              <!---------------------static image with description------------------------------------>


<!-- Container (The Band Section) -->

  <div class="row">
    <div class="col-sm-4">
      <p class="text-center"><strong>LIFE</strong></p><br>
      <a href="#demo" data-toggle="collapse">
        <img src="http://www.kinyu-z.net/data/wallpapers/108/1082874.jpg" class=" person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo" class="collapse">
        <p>life is the start of everthing</p>
        <p>      It is a change to do something</p>
        <p>     Life if beautiful</p>
      </div>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><strong>DREAM</strong></p><br>
      <a href="#demo2" data-toggle="collapse">
        <img src="http://cdn.desktopwallpapers4.me/wallpapers/typography/1920x1200/2/16675-dream-1920x1200-typography-wallpaper.jpg" class=" person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo2" class="collapse">
        <p>dream is wonderful</p>
        <p>Does something which is not possible</p>
        <p>say what we need</p>
      </div>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><strong>MUSIC</strong></p><br>
      <a href="#demo3" data-toggle="collapse">
        <img src="http://99px.ru/sstorage/53/2011/08/tmb_19246_7303.jpg" class=" person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo3" class="collapse">
        <p>music is life</p>
        <p>melody of the nature</p>
        <p>Brings Harmony</p>
      </div>
    </div>
  </div>
</div>















<!-- Footer -->
<footer class="text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p>COPYRIGHT &copy; 2018</p> 
</footer>



</body>
</html>
