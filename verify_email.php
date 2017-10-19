<?php

include_once 'includes/db_connect.php';
include_once 'includes/psl_config.php';

$error_msg = "";
if (isset($_POST['email'] )) {
    // Sanitize and validate the data passed in
    $verify_email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $verify_email = filter_var($verify_email, FILTER_VALIDATE_EMAIL);
    if (!filter_var($verify_email, FILTER_VALIDATE_EMAIL)) {
        // Not a valid email
        $error_msg .= '<p class="error">The email address you entered is not valid</p>';
    }
	//this checks if the email is in the database
	 $prep_stmt = "SELECT id FROM user WHERE email = ? LIMIT 1";
    $stmt = $mysqli->prepare($prep_stmt);
    
    if ($stmt) {
        $stmt->bind_param('s', $verify_email);
        $stmt->execute();
        $stmt->store_result();
        
        if ($stmt->num_rows == 1) {
            // A user with this email address already exists
			$value =  $verify_email;	
			echo $value;
			//echo $value;
            $error_msg .= '<p class="error">A user with this email address already exists.</p>';
        }
		else{
			echo "not in the database";
		}
    } else {
		echo "database is experiancing an error";
        $error_msg = '<p class="error">Database error</p>';
    }
}
else{
	echo "email is not set";
}
?>

    