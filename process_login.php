<?php

include_once 'includes/db_connect.php';
include_once 'includes/functions.php';

sec_session_start(); // Our custom secure way of starting a PHP session.

if (isset($_POST['email'], $_POST['p'])) {
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $password = $_POST['p']; // The hashed password.
    
    if (login($email, $password, $mysqli) == true) {
        // Login success 
        header("Location:index.php");
        exit();
    } else {
		// Login failed 
		//check if the email is at least correct to in other to allow the user to reset the password
		$prep_stmts = "SELECT id FROM user WHERE email = ? LIMIT 1";
        $stmts = $mysqli->prepare($prep_stmts);
    
		if ($stmts) {
			$stmts->bind_param('s', $email);
			$stmts->execute();
			$stmts->store_result();
			
				if ($stmts->num_rows == 1) {
					$_SESSION['email'] = $email;
					// A user with this email address already exists
					$_SESSION['reset'] = "invalid login details <a href = 'resetpass.php'> click here </a> to reset password";
					header('Location:login.php');
				}
        // Login failed
		else{
		$_SESSION['error_msg'] = "username or password is Invalid!";
		header('Location:login.php');
			}
		}
        
        exit();
	}//end of else
    
} else {
    // The correct POST variables were not sent to this page. 
    header('Location:error.php?err=Could not process login');
    exit();
}