<?php

include_once 'includes/reset.php';

?>
<!DOCTYPE html>
<html>
    <head>
       	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Secure Login: Password Reset page</title>
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
                        
        </div>
    </div>
</nav>
<!-- Navbar -->
		<div class = "full-bg-img flex-center primary-color-dark">
		<div class = "container">
			<div class = "row">
				<div class = "col-md-3">
				</div>
				<div class = "col-md-6">
					<div class="card">
						<div class="card-block">
							<!--Header-->
							<div class="text-center">
								<h3><i class="fa fa-lock login"></i> Reset <span class = "home">Password</span></h3>
												<!--Card Danger-->
									<?php
									if(!empty($error_msg)){
											echo "<div class='card card-danger text-center'>".
											"<div class='card-block'>".
											"<p class='white-text'>" . $error_msg . "</p>". "</div>". "</div>";
										}
									if(!empty($_SESSION['register'])){
											echo "<div class='card card-success text-center'>".
											"<div class='card-block'>".
											"<p class='white-text'>" . $_SESSION['register'] . "</p>". "</div>". "</div>";
											unset($_SESSION['register']);
										}	
										
									?>
    <!--/.Card Danger-->
								<hr class="mt-2 mb-2">
							</div>
							<!-- header -->

							<!--Body-->
						<form method="post" name="password_reset" action="<?php echo esc_url($_SERVER['PHP_SELF']); ?>"> 
							<div class="md-form">
								<i class="fa fa-lock prefix"></i>
								<input type="password" id="password" class="form-control" name = "password">
								<label for="form2">Password(6 or more characters)</label>
							</div>

							<div class="md-form">
								<i class="fa fa-lock prefix"></i>
								<input type="password" id="confirmpwd" class="form-control" name = "confirmpwd">
								<label for="password">Confirm password</label>
							</div>

							<div class="text-center">
								<button class="btn btn-pink" value = "register" onclick="return resetPassword(this.form, this.form.password,this.form.confirmpwd);">Reset</button>
							</div>
						</form>

					</div>

					</div>
				</div>
				<div class = "col-md-3"> </div>

			</div>
		</div>
        <!-- Registration form to be output if the POST variables are not
        set or if the registration script caused an error. 
        <h1>Register with us</h1>
        if (!empty($error_msg)) {
            echo $error_msg;
        }
		 if (!empty($_SESSION['register'])) {
            echo $_SESSION['register'];
			unset($_SESSION['register']);
        }-->

       <!-- <ul>
            <li>Passwords must be at least 6 characters long</li>
            <li>Passwords must contain
                <ul>
                    <li>At least one upper case letter (A..Z)</li>
                    <li>At least one lower case letter (a..z)</li>
                    <li>At least one number (0..9)</li>
                </ul>
            </li>
            <li>Your password and confirmation must match exactly</li>
        </ul>
        <form method="post" name="password_reset" action="<?php echo esc_url($_SERVER['PHP_SELF']); ?>">
            Password: <input type="password"
                             name="password" 
                             id="password"/><br>
            Confirm password: <input type="password" 
                                     name="confirmpwd" 
                                     id="confirmpwd" /><br>
            <input type="button" 
                   value="Register" 
                   onclick="return resetPassword(this.form,
                                   this.form.password,
                                   this.form.confirmpwd);" /> 
        </form>
        <p>Return to the <a href="index.php">login page</a>.</p> -->
		<!-- scripts ->
		<!-- JQuery -->
    <script type="text/javascript" src="MDB/js/jquery-3.1.1.min.js"></script>
    <!-- Bootstrap tooltips -->
	    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="MDB/js/tether.min.js"></script>
	 <!-- Bootstrap core JavaScript -->
	<!-- MDB core JavaScript -->
    <script type="text/javascript" src="MDB/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="MDB/js/mdb.min.js"></script>
    <!-- MDB core JavaScript -->
        <script type="text/JavaScript" src="js/sha512.js"></script> 
        <script type="text/JavaScript" src="js/validate.js"></script>
    </body>
</html>
