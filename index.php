<?php
 
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';

sec_session_start();
?>
<!DOCTYPE html>
<html>
    <head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta http-equiv = "refresh" content = "60">
	<title>Welcome to smart home</title>
	<!-- Font Awesome -->
    <link rel = "stylesheet" href = "font-awesome-4.6.3/css/font-awesome.css">
    <!-- Bootstrap core CSS -->
    <link href="MDB/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="MDB/css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="style.css" rel="stylesheet">
	<!--<link href = "sb-admin.css" rel="stylesheet"> -->
    </head>
<body onload = "startTime()">
<header>
 <!--Navbar-->
<nav class="navbar navbar-toggleable-md scrolling-navbar navbar-dark elegant-color-dark fixed-top">
    <div class="container">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav1" aria-controls="navbarNav1" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="login.php">
            Smart<span class = "home"> Home </span>
        </a>
		
        <div class="collapse navbar-collapse" id="navbarNav1">
            <div class="navbar-nav ml-auto">
			<li class="nav-item nav-link">
                    <div id = "date"> </div>
                </li>
                <li class="nav-item">
                    <a  href = "logout.php" class="nav-link"><i class="fa fa-lock log login" aria-hidden="true"></i> log out</a>
                </li>           
        </div>
    </div>
</nav>
<!-- Navbar -->
</header>
<!-- main -->
<main>
<div class = "container">
<!--<div class = "col-sm-2">
<div id="mySidenav" class="sidenav side">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#"> <i class="fa fa-home waves-effect" aria-hidden="true"></i>  Dashboard</a>
  <a href="#" class = "home-drop"><i class="fa fa-hotel waves-effect" aria-hidden="true"></i>  Rooms <i class="fa fa-angle-down"></i></a>
  <div class = "home-dropdown">
  <a href="#"><i class="fa fa-hand-pointer-o"></i>  Security lights</a>
  <a href="#"><i class="fa fa-hand-pointer-o"></i>  Security lights</a>
  <a href="#"><i class="fa fa-hand-pointer-o"></i>  Security lights</a>
  </div>
  <a href="#"><i class="fa fa-hand-pointer-o"></i>  Security lights</a>
  <a href="#"><i class="fa fa-gears" aria-hidden="true"></i>  Settings</a>
  <a href="#"><i class="fa fa-futbol-o" aria-hidden="true"></i>  History</a> 
</div>
</div>
<div class = "col-xs-12 col-sm-10 main2"> </div>
<span class = "bars" onclick="openNav()">More  <i class="fa fa-bars" aria-hidden="true"></i> </span> -->
<div class='card card-danger text-center mt-6'>
	<div class='card-block'>
		<p class='white-text'> This web application is strictly for registered users in the home to control thier home aplliances!</p>
	</div>
</div>		
<hr class="mt-3 mb-2">
<?php  
if (login_check($mysqli) == true){
        echo "<h2 class = 'h2-responsive name'>Welcome "."<span class = 'login'>".htmlentities($_SESSION['username'])."!"."</span>"."</h2>";
		
}
       else{
            header("Location:login.php");
        exit();  
	   }
	   ?>
	   <hr class="mt-2 mb-2 after">

<div class="divider-new mt-2 mb-4">
        <h2 class="h2-responsive">Sitting room</h2>
</div>
<section id="Sitting-room">
    <div class="row">
<!--First columnn-->
		<div class="col-md-4">
			
<!--Panel-->
<div class="card mb-2">
    <h3 class="card-header  indigo darken-3 white-text"><i class="fa fa-empire fa-lg" aria-hidden="true"></i><span class = "float-right">Light</span></h3>
    <div class="card-block">
        <h4 class="card-text">Status:<span class = "float-right room1-light">OFF</span></h4>
    
    </div>
	<div class="card-footer text-muted  indigo darken-3 white-text">
      <a href="#" value = "off" class = "view-light room1-click"> click to on light</a> <span class = "float-right"><i class="fa fa-arrow-circle-right " aria-hidden="true"></i><span>
    </div>
</div>
<!--/.Panel-->

        </div>
		<!--First columnn-->
				<!--Second column-->
        <div class="col-md-4">
			
<!--Panel-->
<div class="view overlay hm-white-slight mb-2">
    <img src="images/sitting-room.jpeg" class="img-fluid " alt="">
  <div class="mask waves-effect waves-light"></div>
</div>
        <!--Second columnn-->
	</div>

		<!--Third columnn-->
        <div class="col-md-4">
			
<!--Panel-->
<div class="card">
    <h3 class="card-header pink accent-3 white-text"><i class="fa fa-recycle fa-lg" aria-hidden="true"></i><span class = "float-right">Fan</span></h3>
    <div class="card-block">
        <h4 class="card-text">Status:<span class = "float-right room1-fan"> OFF </span></h4>
		<hr class="my-2">
		<p>choose your preferred control for the fan </p>
		<p class = "manual"></p>
		<div class = "md-radio md-radio-inline">
			<input class= "select" type = "radio" name = "fan_select" value = "0"> 
			<label for="0">Manual</label>
			<input class= "select" type = "radio" name = "fan_select" value = "0"> 
			<label for="1">Automatic</label>
			
    </div>
    </div>
<div class="card-footer text-muted pink accent-3 white-text">
      <a href="#" value = "off" class = "view-light room1-fanClick"> click to on fan</a> <span class = "float-right"><i class="fa fa-arrow-circle-right " aria-hidden="true"></i><span>
    </div>
</div>
<!--/.Panel-->

        </div>
        <!--Third columnn-->
		</div>
</section>

<div class="divider-new mt-2 mb-4">
        <h2 class="h2-responsive">Bedroom 1</h2>
</div>
<section id="Bedroom 1">
    <div class="row">
<!--First columnn-->
		<div class="col-md-4">
			
<!--Panel-->
<div class="card mb-2">
    <h3 class="card-header purple darken-3 white-text"><i class="fa fa-empire fa-lg" aria-hidden="true"></i><span class = "float-right">Light</span></h3>
    <div class="card-block">
        <h4 class="card-text">Status:<span class = "float-right room2-light">OFF</span></h4>
    
    </div>
	<div class="card-footer text-muted purple darken-3 white-text">
      <a href="#" value = "off" class = "view-light room2-click"> click to on light</a> <span class = "float-right"><i class="fa fa-arrow-circle-right " aria-hidden="true"></i><span>
    </div>
</div>
<!--/.Panel-->
		</div>
				<!--Third columnn-->
        <div class="col-md-4">
			
<!--Panel-->
<div class="view overlay hm-white-slight mb-2">
    <img src="images/bedroom1.jpeg" class="img-fluid " alt="">
  <div class="mask waves-effect waves-light"></div>
</div>
        <!--Third columnn-->
	</div>

		<!--Second columnn-->
        <div class="col-md-4">
			
<!--Panel-->
<div class="card">
    <h3 class="card-header orange darken-3 white-text"><i class="fa fa-recycle fa-lg" aria-hidden="true"></i><span class = "float-right">Fan</span></h3>
    <div class="card-block">
        <h4 class="card-text">Status:<span class = "float-right room2-fan"> OFF </span></h4>
		<hr class="my-2">
		<p>choose your preferred control for the fan </p>
		<div class = "md-radio md-radio-inline">
			<input class= "select" type = "radio" name = "fan_select" value = "0"> 
			<label for="0">Manual</label>
			<input class= "select" type = "radio" name = "fan_select" value = "1"> 
			<label for="1">Automatic</label>
			
    </div>
    
    </div>
<div class="card-footer text-muted orange darken-3 white-text">
      <a href="#" value = "off" class = "view-light room2-fanClick"> click to on fan</a> <span class = "float-right"><i class="fa fa-arrow-circle-right " aria-hidden="true"></i><span>
    </div>
</div>
<!--/.Panel-->

        </div>
        <!--Second columnn-->
		</div>
</section>

<div class="divider-new mt-2 mb-4">
        <h2 class="h2-responsive">Bedroom 2</h2>
</div>
<section id="Bedroom 2">
    <div class="row">
<!--First columnn-->
		<div class="col-md-4">
			
<!--Panel-->
<div class="card mb-2">
    <h3 class="card-header  orange darken-3 white-text"><i class="fa fa-empire fa-lg" aria-hidden="true"></i><span class = "float-right">Light</span></h3>
    <div class="card-block">
        <h4 class="card-text">Status:<span class = "float-right room3-light">OFF</span></h4>
    </div>
	<div class="card-footer text-muted  orange darken-3 white-text">
      <a href="#" value = "off" class = "view-light room3-click"> click to on light</a> <span class = "float-right"><i class="fa fa-arrow-circle-right " aria-hidden="true"></i><span>
    </div>
</div>
<!--/.Panel-->
		</div>
				<!--Third columnn-->
        <div class="col-md-4">
			
<!--Panel-->
<div class="view overlay hm-white-slight mb-2">
    <img src="images/bedroom2.jpeg" class="img-fluid " alt="">
  <div class="mask waves-effect waves-light"></div>
</div>
        <!--Third columnn-->
	</div>

		<!--Second columnn-->
        <div class="col-md-4">
			
<!--Panel-->
<div class="card">
    <h3 class="card-header cyan darken-3 white-text"><i class="fa fa-recycle fa-lg" aria-hidden="true"></i><span class = "float-right">Fan</span></h3>
    <div class="card-block">
        <h4 class="card-text">Status:<span class = "float-right room3-fan"> OFF </span></h4>
		<hr class="my-2">
		<p>choose your preferred control for the fan </p>
		<div class = "md-radio md-radio-inline">
			<input class= "select" type = "radio" name = "fan_select" value = "0"> 
			<label for="0">Manual</label>
			<input class= "select" type = "radio" name = "fan_select" value = "1"> 
			<label for="1">Automatic</label>
			
    </div>
    </div>
<div class="card-footer text-muted cyan darken-3 white-text">
      <a href="#" value = "off" class = "view-light room3-fanClick"> click to on fan</a> <span class = "float-right"><i class="fa fa-arrow-circle-right " aria-hidden="true"></i><span>
    </div>
</div>
<!--/.Panel-->

        </div>
        <!--Second columnn-->
		</div>
</section>
<div class="divider-new mt-2 mb-4">
        <h2 class="h2-responsive">Water Level Control</h2>
</div>
<section id="water control">
<!-- the jumbotron starts here -->
<div class = "jumbotron">
<h2 class = "h2-responsive"> Tank Control </h2>
<p class = "lead"> This frequently indicates the amount of water present in the tank and allows the user to control it </P>
<hr class="my-2">
<div class = "row">
<div class = "col-md-8">
<p class = "water-read"> </p>
<button type="button" class="btn btn-pink water-1">30% Full</button>
<button type="button" class="btn btn-purple water-2">50% Full</button>
<button type="button" class="btn btn-yellow water-3">70% Full</button>
<button type="button" class="btn btn-amber water-full">Full Tank</button>
</div>
<div class = "col-md-4">
<!--Card Danger-->
    <div class="card card-success z-depth-2">
        <div class="card-block">
            <p class="white-text">Water Sensor Reading.</p>
			<p class = " white-text Sensor"><i class="fa fa-flask" aria-hidden="true"></i><span class = "float-right sensor"> 10% </span></p>
        </div>
    </div>
    <!--/.Card Danger-->
</div>
</div>
</div>
<!-- end of jumbotron -->
</section>
<div class="divider-new mt-2 mb-4">
        <h2 class="h2-responsive">Status bar</h2>
</div>
<section id="Status bar">
    <div class="row">
<!--First columnn-->
		<div class="col-md-4">
			
<!--Panel-->
<div class="card mb-2">
    <h3 class="card-header secondary-color-dark white-text"><i class="fa fa-empire fa-lg" aria-hidden="true"></i><span class = "float-right">Temperature</span></h3>
    <div class="card-block">
	<p class = "automatic"> </p>
        <h4 class="card-text">Reading:<span class = "float-right temperature">34.5C</span></h4>
    
    </div>
	<div class="card-footer text-muted secondary-color-dark white-text">
      <a href="#" value = "0" class = "view-light"> Click to view history</a> <span class = "float-right"><i class="fa fa-arrow-circle-right " aria-hidden="true"></i><span>
    </div>
</div>
<!--/.Panel-->

        </div>
		<!--First columnn-->
		<!--Second columnn-->
		<div class="col-md-4">
			
<!--Panel-->
<div class="card mb-2">
    <h3 class="card-header default-color-dark white-text"><i class="fa fa-empire fa-lg" aria-hidden="true"></i><span class = "float-right">Humidity</span></h3>
    <div class="card-block">
        <h4 class="card-text">Reading:<span class = "float-right humidity">22%</span></h4>
    
    </div>
	<div class="card-footer text-muted default-color-dark white-text">
      <a href="#" value = "0" class = "view-light"> Click to view history</a> <span class = "float-right"><i class="fa fa-arrow-circle-right " aria-hidden="true"></i><span>
    </div>
</div>
<!--/.Panel-->

        </div>
		<!--Second column columnn-->
<!--Third columnn-->
		<div class="col-md-4">
			
<!--Panel-->
<div class="card">
    <h3 class="card-header primary-color-dark white-text"><i class="fa fa-empire fa-lg" aria-hidden="true"></i><span class = "float-right">Security Lights</span></h3>
    <div class="card-block">
        <h4 class="card-text">Status:<span class = "float-right security">OFF</span></h4>
    
    </div>
	<div class="card-footer text-muted primary-color-dark white-text">
      <a href="#" value = "0" class = "view-light "> Click to view history</a> <span class = "float-right"><i class="fa fa-arrow-circle-right " aria-hidden="true"></i><span>
    </div>
</div>
<!--/.Panel-->

        </div>
		<!--First columnn-->
	</div>
</section>
<!-- end of container-fluid-->
                            
</main>


<!--Footer-->
<footer class="page-footer elegant-color-dark center-on-small-only">

    <!--Footer Links-->
    <div class="container-fluid">
        <div class="row">

            <!--First column-->
            <div class="col-md-6">
                <h5 class="title">Smart Home quick links</h5>
                <ul>
                    <li><a href="index.php#Sitting-room">Sitting room</a></li>
                    <li><a href="index.php#Bedroom 1">Bedroom 1</a></li>
                    <li><a href="index.php#Bedroom 2">Bedroom 2</a></li>
                </ul>
            </div>
            <!--/.First column-->

            <!--Second column-->
            <div class="col-md-6">
                <h5 class="title"> useful links</h5>
                <ul>
                    <li><a href="logout.php">log out</a></li>
                    <li><a href="settings">Settings</a></li>
                    <li><a href="history.php">history</a></li>
                </ul>
            </div>
            <!--/.Second column-->
        </div>
    </div>
    <!--/.Footer Links-->

    <!--Copyright-->
    <div class="footer-copyright">
        <div class="container-fluid">
            © 2017 Copyright: <a href="https://www.MDBootstrap.com">Khadijat Yusuf </a>

        </div>
    </div>
    <!--/.Copyright-->

</footer>
<!--/.Footer-->


		<!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="MDB/js/jquery-3.1.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="MDB/js/tether.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="MDB/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="MDB/js/mdb.min.js"></script>
	   <script type="text/JavaScript" src="js/sha512.js"></script> 
     <script type="text/JavaScript" src="js/validate.js"></script> 
	 <script type="text/JavaScript" src="js/status.js"></script>
	 </div>
    </body>
	
</html>
