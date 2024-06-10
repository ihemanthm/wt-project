<?php
	if (session_status() === PHP_SESSION_NONE) {
	    session_start();
	}
	//unset all session variables
	session_unset();

	// Destroy the session
	session_destroy();

	// Regenerate session ID for the next session
	session_regenerate_id(true);

	// Redirect to the login page or home page
	header("Location:http://localhost/wt-project/index.html");
	exit();
?>
