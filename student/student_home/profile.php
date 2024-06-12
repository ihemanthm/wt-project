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
   <title>profile</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<header class="header">
   
   <section class="flex">

      <p class="logo">Profile Section</p>


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
      <h3 class="name"><?php echo $_SESSION["id"]?></h3>
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

<section class="user-profile">

   <h1 class="heading">your profile</h1>

   <div class="info">

      <div class="user">
         <img src="images/pic-1.jpg" alt="">
         <h3><?php echo $_SESSION["id"]?></h3>
         <p>student</p>
         <a href="update.php" class="inline-btn">update profile</a>
      </div>
   
      <div class="box-container">
   
         <div class="box">
            <div class="flex" style="flex-direction:column;">
            	<div style="display:flex;flex-direction:row;">
            	<span>Name :</span>
            	<p style="margin-top:7px;margin-left:16px;"><?php echo $_SESSION['name'];?></p>
            	</div>
            	<div style="display:flex;flex-direction:row;">
            	<span>Gender :</span>
            	<p style="margin-top:7px;margin-left:16px;"><?php echo $_SESSION['gender'];?></p>
            	</div>
            	<div style="display:flex;flex-direction:row;">
            	<span>DOB :</span>
            	<p style="margin-top:7px;margin-left:16px;"><?php echo $_SESSION['dob'];?></p>
            	</div>
            </div>
         </div>
   
         <div class="box">
            <div class="flex" style="flex-direction:column;">
            	<div style="display:flex;flex-direction:row;">
            	<span>ID :</span>
            	<p style="margin-top:7px;margin-left:16px;"><?php echo $_SESSION['id'];?></p>
            	</div>
            	<div style="display:flex;flex-direction:row;">
            	<span>Phone :</span>
            	<p style="margin-top:7px;margin-left:16px;"><?php echo $_SESSION['phone'];?></p>
            	</div>
            	<div style="display:flex;flex-direction:row;">
            	<span>mail :</span>
            	<p style="margin-top:7px;margin-left:16px;"><?php echo $_SESSION['email'];?></p>
            	</div>
            </div>
         </div>
   		
   		<div class="box">
            <div class="flex" style="flex-direction:column;">
            	<div style="display:flex;flex-direction:row;">
            	<span>Branch :</span>
            	<p style="margin-top:7px;margin-left:16px;">CSE</p>
            	</div>
            	<div style="display:flex;flex-direction:row;">
            	<span>Year :</span>
            	<p style="margin-top:7px;margin-left:16px;"><?php echo $_SESSION['year'];?></p>
            	</div>
            	<div style="display:flex;flex-direction:row;">
            	<span>Section :</span>
            	<p style="margin-top:7px;margin-left:16px;"><?php echo $_SESSION['section'];?></p>
            	</div>
            </div>
         </div>		
   		
   		<div class="box">
            <div class="flex">
               <i class="fas fa-comment"></i>
               <div>
                  <span>How are we looking?</span>
                  <p>Every Point of View Matters!</p>
               </div>
            </div>
            <a href="contact.php" class="inline-btn">Review Us</a>
         </div>	
   		
      </div>
      <div class="box-container">
      	<div class="box">
            <div class="flex">
               <i class="fas fa-question"></i>
               <div>
                  <span>Got tricked by friends?</span>
                  <p>Hackers Are Everywhere!</p>
               </div>
            </div>
            <a href="password.php" class="inline-btn">Change Password</a>
         </div>
      </div>
   </div>

</section>


<!-- custom js file link  -->
<script src="js/script.js"></script>

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
