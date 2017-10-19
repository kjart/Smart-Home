<?php

include_once 'db_connect.php';
include_once 'psl_config.php';
include_once 'functions.php';
sec_session_start(); // Our custom secure way of starting a PHP session.

$error_msg = "";
$register = "";
//check if the email is set and is not a hack
$email = $_SESSION['email'];
if(isset($email)){
//check if the password is entered
if (isset($_POST['p'])) {
    // Sanitize and validate the data passed in
    
    $password = filter_input(INPUT_POST, 'p', FILTER_SANITIZE_STRING);
    if (strlen($password) != 128) {
        // The hashed pwd should be 128 characters long.
        // If it's not, something really odd has happened
        $error_msg .= '<p class="error">Invalid password configuration.</p>';
    }

    // Username validity and password validity have been checked client side.
    // This should should be adequate as nobody gains any advantage from
    // breaking these rules.
	if (empty($error_msg)) {
        // Create a random salt
        $random_salt = hash('sha512', uniqid(openssl_random_pseudo_bytes(16), TRUE));

        // Create salted password 
        $password = hash('sha512', $password . $random_salt);
		//update the database with the user's new password
		if($update = $mysqli -> prepare("UPDATE user SET password = ?, salt = ?")){
			$update->bind_param('ss', $password, $random_salt);
		//execute the prepared query
			if (!$update->execute()){
				header('Location:../error.php?err=Password Reset Failure: UPDATE');
				exit();
			}
		}
			$_SESSION['register'] = 'Password successfully changed!..you can now <a href = "login.php">proceed to login</a>';
			header('Location: resetpass.php');
        exit();
    }
}
}
else{
	header('Location: login.php');
	exit();
}
	
	
	?>