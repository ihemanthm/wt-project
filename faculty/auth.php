<?php
    // Database connection parameters
    // Including the configuration file
    require_once '/opt/lampp/htdocs/wt-project/config.php';

    // Connect to MySQL database
    $conn = new mysqli(HOSTNAME,USERNAME,PASSWORD, DATABASE);

    // Check connection
    if ($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);
    }
    // Sanitize user input
    $usr = $conn->real_escape_string($_POST['username']);
    $pwd = $conn->real_escape_string($_POST['password']);

    // Prepare and bind SQL statement
    $sql = "SELECT password FROM faculty WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $usr);
    $stmt->execute();
    $stmt->bind_result($old_password_hash);
    $stmt->fetch();
    $stmt->close();

    if (password_verify($pwd,$old_password_hash)){
        $sql="SELECT id,name,gender,phone,email,subject FROM faculty WHERE id=?";
        $stmt=$conn->prepare($sql);
        $stmt->bind_param("s",$usr);
        $stmt->execute();
        $stmt->bind_result($id,$name,$gender,$phone,$email,$subject);
        $stmt->fetch();
        $stmt->close();
        session_start();
        $_SESSION['id']=$id;
        $_SESSION['name']=$name;
        $_SESSION['gender']=$gender;
        $_SESSION['phone']=$phone;
        $_SESSION['email']=$email;
        $_SESSION['subject']=$subject;
        header("Location:faculty_home/home.php");
        exit();
}else {
    echo "Invalid Credentials Provided.<br>"; // Set your message here
    // Redirect to index.html with the message as a query parameter
    echo "To Try again <a href='index.html'>Click here...</a>";
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
?>

