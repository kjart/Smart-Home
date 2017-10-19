<?php

include_once 'includes/db_connect.php';
include_once 'includes/functions.php';

sec_session_start();

if (login_check($mysqli) == true) {
    $logged = 'in';
} else {
    $logged = 'out';
}
?>
<!DOCTYPE html>
<html>
    <head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Smart home: Log In</title>
	<!-- Font Awesome -->
    <link rel = "stylesheet" href = "font-awesome-4.6.3/css/font-awesome.css">
    <!-- Bootstrap core CSS -->
    <link href="MDB/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="MDB/css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="style.css" rel="stylesheet">
    </head>
<body>
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
                <li class="nav-item">
                    <a class="nav-link" href = "Login.php"><i class="fa fa-lock log login" aria-hidden="true"></i> Sign in</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link">Join now</a>
                </li>
                        
        </div>
    </div>
</nav>
<!-- Navbar -->


<!--Mask-->
<div class="view views hm-black-light">
	<div class="full-bg-img flex-center">
		<div class = "container">
			<div class = "row">
				<div class = "col-md-3">
				</div>
				<div class = "col-md-6">
					<div class="card">
						<div class="card-block">
							<!--Header-->
							<div class="text-center">
								<h3><i class="fa fa-lock login"></i> Smart <span class = "home">Home </span></h3>
												<!--Card Danger-->
									<?php
									if(!empty($_SESSION['error_msg'])){
											echo "<div class='card card-danger text-center'>".
											"<div class='card-block'>".
											"<p class='white-text'>" . $_SESSION['error_msg'] . "</p>". "</div>". "</div>";
											unset($_SESSION['error_msg']);
										}
									if(!empty($_SESSION['reset'])){
											echo "<div class='card card-danger text-center'>".
											"<div class='card-block'>".
											"<p class='white-text'>" . $_SESSION['reset'] . "</p>". "</div>". "</div>";
											unset($_SESSION['reset']);
										}	
										
									?>
    <!--/.Card Danger-->
								<hr class="mt-2 mb-2">
							</div>
							<!-- header -->

							<!--Body-->
						<form action="process_login.php" method="post" name="login_form"> 
							<div class="md-form">
								<i class="fa fa-envelope prefix"></i>
								<input type="text" id="email" class="form-control" name = "email">
								<label for="form2"> Your email</label>
							</div>

							<div class="md-form">
								<i class="fa fa-lock prefix"></i>
								<input type="password" id="password" class="form-control" name = "password">
								<label for="password">Your password</label>
							</div>

							<div class="text-center">
								<button class="btn btn-pink" value = "login" onclick="formhash(this.form, this.form.password);">Login</button>
							</div>
						</form>

					</div>

					<!--Footer-->
						<div class="text-center">
							<p>Forgot pasword?<a href="email.php"> Reset now</a></p>
						</div>
					</div>
				</div>
				<div class = "col-md-3"> </div>

			</div>
		</div>
	</div>
<!--/Form without header-->
  
</div>
<!--/.Mask-->
<!-- the form elements goes here -->

<!--Footer-->
<footer class="page-footer elegant-color-dark center-on-small-only mt-0">

        <div class="container-fluid">
			<div class = "text-center">
           Smart Home © 2017 Copyright:site designed and developed by <a href="https://www.MDBootstrap.com"> Khadijat Yusuf </a>
			</div>
        </div>

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
    </body>
</html>
