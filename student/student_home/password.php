<!DOCTYPE html>
<?php
	session_start();

   // Check if the user is not logged in
   if (!isset($_SESSION['id'])) {
       // Redirect the user to the login page
       header("Location: http://localhost/wt-project/index.html");
       exit();
   }
?>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>update</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<header class="header">
   
   <section class="flex">

      <p class="logo">Update Password</p>


      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <div id="search-btn" class="fas fa-search"></div>
         <div id="toggle-btn" class="fas fa-sun"></div>
         <div id="user-btn" class="fa fa-sign-out"></div>
      </div>

   </section>

</header>   

<div class="side-bar">

   <div id="close-btn">
      <i class="fas fa-times"></i>
   </div>

   <div class="profile">
      <img src="images/pic-1.jpg" class="image" alt="">
      <h3 class="name"><?php echo $_SESSION['id'];?></h3>
      <p class="role">student</p>
      <a href="profile.php" class="btn">view profile</a>
   </div>

   <nav class="navbar">
      <a href="home.php"><i class="fas fa-home"></i><span>Home</span></a>
      <a href="academics.php"><i class="fas fa-book"></i><span>Academics</span></a>
      <a href="courses.php"><i class="fas fa-graduation-cap"></i><span>Courses</span></a>
      <a href="teachers.php"><i class="fas fa-chalkboard-user"></i><span>Faculty</span></a>
      <a href="contact.php"><i class="fas fa-headset"></i><span>Contact Us</span></a>
   </nav>

</div>

<section class="form-container">

   <form action="updatePWD.php" method="post" enctype="multipart/form-data">
      <h3>Change password</h3>
      <p>Old Password</p>
      <input type="text" id="oldpwd" name="oldpwd" placeholder="Enter your old password" maxlength="20" class="box" required>
      <p>New Password</p>
      <input type="text" name="newpwd" id="newpwd" placeholder="Enter your new password" maxlength="20" class="box" required>
      <p>Confirm Password</p>
      <input type="password" name="confirmpwd" id="confirmpwd" placeholder="Confirm your old password" maxlength="20" class="box" required>
      <input type="submit" id="changeButton" value="Change Password" name="submit" class="btn">
   </form>
</section>


<!-- custom js file link  -->
<script src="js/script.js"></script>
<script>
document.getElementById("changeButton").addEventListener("click",function(event){		 
   const passwordInp=document.getElementById("newpwd");
   let pwd=passwordInp.value;
   if(!checkPassword(pwd)){
      event.preventDefault();
      return;
   }
   else{
      if(pwd!=document.getElementById('confirmpwd').value){
         alert("Confirm password should be same as New password");
         event.preventDefault();
         return;
      }
   }   
});
function checkPassword(password){
	if(!/[A-Z]/.test(password)){
		alert("Password must contain atleast one uppercase letter")
		return false;
	}
	if(!/[a-z]/.test(password)){
		alert("Password must contain atleast one lowercase leetter")
		return false;
	}
	if(!/\d/.test(password)){
		alert("Password must contain atleast one digit")
		return false;
	}
	return true;
}
</script>
<script>
   document.addEventListener('DOMContentLoaded', () => {
        // Select the element with ID 'user-btn'
        const userBtn = document.getElementById('user-btn');
        // Attach an onclick event listener to the element
        userBtn.onclick = () => {
            // Redirect to 'logout.php' when the element is clicked
            window.location.href = 'logout.php';
        }
    });
</script>
</body>
</html>
