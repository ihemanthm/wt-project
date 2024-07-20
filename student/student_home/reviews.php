<?php
   session_start();
	
   // Including the configuration file
   require_once '/opt/lampp/htdocs/wt-project/config.php';

   // Connect to MySQL database
   $conn = new mysqli(HOSTNAME,USERNAME,PASSWORD, DATABASE);

   $id=$_SESSION['id'];
   $name=$conn->real_escape_string($_POST['name']);
   $email=$conn->real_escape_string($_POST['email']);
   $phone=$conn->real_escape_string($_POST['phone']);
   $content=$conn->real_escape_string($_POST['content']);
   $currentTime = date('Y-m-d H:i:s');

   $sql="INSERT INTO reviews(id,name,email,phone,content,time_stamp) VALUES(?,?,?,?,?,?)";
   $stmt=$conn->prepare($sql);
   $stmt->bind_param('sssiss',$id,$name,$email,$phone,$content,$currentTime);
   if($stmt->execute()){
      $stmt->close();
      header("Location:contact.php?msg=1");
      exit();
   }
?>