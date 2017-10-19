<?php

include_once 'includes/register.inc.php';
include_once 'includes/functions.php';
?>
<!Doctype HTML>
<html>
<head>
<meta charset = "UTF-8">
<title> Registration </title>
<!-- the scripting files here -->
<script src = "js/jquery/jquery-3.1.1.js"></script>
<!-- the js files here -->
<script src = "js/validate.js"></script>
<script type = "text/javascript" src = "js/sha512.js"> </script>
</head>
<body>
<h1> Smart Home Registration Page </h1>
<p> fill out the fields below </p>
  <?php
        if (!empty($error_msg)) {
            echo $error_msg;
        }
        ?>
<form method = "post" name = "registration_form" action = "<?php echo esc_url($_SERVER['PHP_SELF']); ?>">
      Username: <input type='text' name='username' id='username' placeholder = "Username here" pattern ="[a-zA-Z]+" /><br>
            Email: <input type="email" name="email" id="email" placeholder = "Enter Email" /><br>
            Password: <input type="password"
                             name="password" 
                             id="password"
							 placeholder = "Enter Password"/><br>
            Confirm password: <input type="password" 
                                     name="confirmpwd" 
                                     id="confirmpwd" 
									 placeholder = "confirm Password"/><br>
            <input type="button" 
                   value="Register" 
                   onclick="return regformhash(this.form,
                                   this.form.username,
                                   this.form.email,
                                   this.form.password,
                                   this.form.confirmpwd);" /> 
        </form>
        <p>Return to the <a href="index.php">login page</a>.</p>
		<p> click to hide me </p>
<p id = "pa"> am to be hidden</p>
</body>
</html>