<?php

	// Including the configuration file
    require_once '/opt/lampp/htdocs/wt-project/config.php';

    // Connect to MySQL database
    $conn =mysqli_connect(HOSTNAME,USERNAME,PASSWORD, DATABASE);
	echo "connection requested<br>";
	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}else{
		echo "Server connection set successfully<br>";
	}
	
	#checking user existence
	$usrcheck = $conn->real_escape_string($_POST['username']);
	$sqlcheck = "SELECT * FROM faculty WHERE id=?";
    $stmt = $conn->prepare($sqlcheck);
    $stmt->bind_param("s", $usrcheck);

    $stmt->execute();

    $result = $stmt->get_result();
   
    if ($result->num_rows >0) {
    	$message="This user already existed.Try Logging in";
    	echo $message;
        echo "<script>alert('$message');</script>";
		echo "<a href='index.html'>Click here</a> to Login.";
        $stmt->close();
    	$conn->close();
    } else {
		#inserting values into the database
		$usr=$_POST["username"];
		$pwd=$_POST["password"];
		$gen=$_POST["gender"];
		$name=$_POST["name"];
		$sub=$_POST["subject"];
		$hashed=password_hash($pwd,PASSWORD_DEFAULT);

		$sql="INSERT INTO faculty(id,name,gender,password,subject) VALUES('$usr','$name','$gen','$hashed','$sub')";

		if(mysqli_query($conn,$sql)){
			echo "Details recorded successfully<br><br>";
			session_start();
			$_SESSION['id']=$usr;
			$_SESSION['gender']=$gen;
			$_SESSION['name']=$name;
			$_SESSION['phone']='';
			$_SESSION['email']='';
			$_SESSION['subject']=$sub;

			header("Location:faculty_home/home.php");
		}
		else{
			echo "Error".$sql."<br>".mysqli_error($conn);
		}
		echo $usr."<br>";
		echo $gen."<br>";
		echo $name."<br>";
		echo $sub."<br>";
		$stmt->close();
    	$conn->close();
	}
?>
