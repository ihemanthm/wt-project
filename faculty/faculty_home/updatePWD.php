<?php
	session_start();
	
	// Including the configuration file
    require_once '/opt/lampp/htdocs/wt-project/config.php';

    // Connect to MySQL database
    $conn = new mysqli(HOSTNAME,USERNAME,PASSWORD, DATABASE);

	// Retrieve old password hash from the database
	$id =$_SESSION['id'];
	$query ="SELECT password FROM faculty WHERE id =?";
	$stmt =$conn->prepare($query);
	$stmt->bind_param("s", $id);
	$stmt->execute();
	$stmt->bind_result($old_password_hash);
	$stmt->fetch();
	$stmt->close();

	// Get the old password entered by the user from the form
	$old_password_entered = $_POST['oldpwd'];

	if (password_verify($old_password_entered, $old_password_hash)) {
  	// Old password matches, allow the user to change the password
	  	$new_password = $_POST['newpwd']; // Get the new password from the form

	//  	// Hash the new password
	  	$new_password_hash = password_hash($new_password,PASSWORD_DEFAULT);

	 // Update the password in the database
	  	$update_query = "UPDATE faculty SET password = ? WHERE id = ?";
	  	$update_stmt = $conn->prepare($update_query);
	  	$update_stmt->bind_param("ss", $new_password_hash, $id);
	  	$update_stmt->execute();
	  	$update_stmt->close();

	  	header("Location:profile.php");
		exit;
	} else {
	  	// Old password does not match
	  	echo "Incorrect old password!";
	  	echo "<a href='password.php'>Click here</a> to try again";
	 }
?>
