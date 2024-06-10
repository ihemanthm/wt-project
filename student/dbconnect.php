<?php
	// Including the configuration file
    require_once '/opt/lampp/htdocs/wt-project/config.php';

    // Connect to MySQL database
    $conn = mysqli_connect(HOSTNAME,USERNAME,PASSWORD, DATABASE);

	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}else{
		echo "Server connection set successfully<br>";
	}
	
	#checking user existence
	$usrcheck = $conn->real_escape_string($_POST['username']);
	$sqlcheck = "SELECT * FROM students WHERE id=?";
    $stmt = $conn->prepare($sqlcheck);
    $stmt->bind_param("s", $usrcheck);

    $stmt->execute();

    $result = $stmt->get_result();
   
    if ($result->num_rows >0) {
    	$message="This user already existed.Try Logging in";
    	echo $message."<br>";
        echo "<script>alert('$message');</script>";
		echo "<a href='index.html'>Click here</a> to Login.";
        $stmt->close();
    	$conn->close();
    } else {
		#inserting values into the database
		$usr=$_POST["username"];
		$pwd=$_POST["password"];
		$gen=$_POST["gender"];
		$year=$_POST["year"];
		$sec=$_POST["section"];
		$hashed=password_hash($pwd,PASSWORD_DEFAULT);
		$sql="INSERT INTO students(id,gender,password,year,section) VALUES('$usr','$gen','$hashed','$year','$sec')";

		if(mysqli_query($conn,$sql)){
			echo "Details recorded successfully<br><br>";
			session_start();
			$_SESSION['id']=$usr;
			$_SESSION['name']='';
			$_SESSION['gender']=$gen;
			$_SESSION['dob']='';
            $_SESSION['phone']='';
            $_SESSION['email']='';
			$_SESSION['year']=$year;
			$_SESSION['section']=$sec;
			header("Location:student_home/home.php");
		}
		else{
			echo "Error".$sql."<br>".mysqli_error($conn);
		}
		echo $usr."<br>";
		echo $gen."<br>";
		echo $year."<br>";
		echo $sec."<br>";
		$stmt->close();
    	$conn->close();
	}
?>
