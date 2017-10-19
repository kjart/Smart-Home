
<!DOCTYPE html>
<html>
    <head>
        <title>verify email: Log In</title>
	<!-- JQuery -->
    <script type="text/javascript" src="MDB/js/jquery-3.1.1.min.js"></script>
    <!-- Bootstrap tooltips -->
	    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="MDB/js/tether.min.js"></script>
	 <!-- Bootstrap core JavaScript -->
	
    <script type="text/javascript" src="MDB/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
        <script type="text/JavaScript" src="js/sha512.js"></script> 
        <script type="text/JavaScript" src="js/validate.js"></script>
		<script type="text/JavaScript" src="js/verify.js"></script> 
		 
    </head>
    <body>
	
       <p> please enter your email below to verify your account with us
        <form action = "verify_email.php" method = "post">			
            Email: <input type="text" name="email" id = "email"/>
         
            <input type="submit" 
                   class="submit"
				   name = "submit"
				   value = "login"
                    />
        </form>
		<p class = "verify">i will change </p>
        
    </body>
</html>
