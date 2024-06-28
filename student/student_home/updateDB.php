<?php
	session_start();
	#header("Location:profile.php");
	
   // Including the configuration file
   require_once '/opt/lampp/htdocs/wt-project/config.php';

   // Connect to MySQL database
   $conn = new mysqli(HOSTNAME,USERNAME,PASSWORD, DATABASE);

    // Check connection
    if ($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);
    }
    else{
    	echo "Connection set successfully";
    }
    
    	if (!isset($_SESSION['id'])) {
    		// Handle the case where 'id' is not set
    		echo "Session ID is not set.";
    		exit(); // Stop further execution
	}
	else{
		echo "Session Id is set and it is ".$_SESSION['id'];
	}
    $newname = isset($_POST['name']) ? $conn->real_escape_string($_POST['name']) : $_SESSION['name'];
	$newgender = isset($_POST['gender']) ? $conn->real_escape_string($_POST['gender']) : $_SESSION['gender'];
	$newdob = isset($_POST['dob']) ? $conn->real_escape_string($_POST['dob']) : $_SESSION['dob'];
	$newphone = isset($_POST['phone']) ? $conn->real_escape_string($_POST['phone']) : $_SESSION['phone'];
	$newemail = isset($_POST['email']) ? $conn->real_escape_string($_POST['email']) : $_SESSION['email'];
	$newyear = isset($_POST['year']) ? $conn->real_escape_string($_POST['year']) : $_SESSION['year'];
	$newsection = isset($_POST['section']) ? $conn->real_escape_string($_POST['section']) : $_SESSION['section'];
    
    $sql = "UPDATE students SET name=?, gender=?, dob=?, phone=?, email=?, year=?, section=? WHERE id=?";
    $stmt = $conn->prepare($sql);
    
    if (!$stmt) {
    // Handle the case where preparation failed
    	echo "Prepare failed: (" . $conn->errno . ") " . $conn->error;
    	exit(); // Stop further execution
    }
    else{
    	echo "Prepare Successfull";
    }
    
    $stmt->bind_param("sssissss", $newname, $newgender, $newdob, $newphone, $newemail, $newyear, $newsection, $_SESSION['id']);
    echo "binding successful";
    if ($stmt->execute()) {
	    // If execution is successful
	    echo "Details recorded successfully<br><br>";
	    // Update session variables with new values
	    $_SESSION['name'] = $newname;
	    $_SESSION['gender'] = $newgender;
	    $_SESSION['dob'] = $newdob;
	    $_SESSION['phone'] = $newphone;
	    $_SESSION['email'] = $newemail;
	    $_SESSION['year'] = $newyear;
	    $_SESSION['section'] = $newsection;
	    // Redirect to the profile page
	    header("Location: profile.php");
	    exit(); // Stop further execution
    }else {
	    // If execution failed
	    echo "Error: " . $sql . "<br>" . $conn->error;
    }
	// Close the statement
	$stmt->close();
    echo "ending";
?>
