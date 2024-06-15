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

      <p class="logo">Update Profile</p>

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

<form action="updateDB.php" method="post" enctype="multipart/form-data">
   <h3>Update Fields</h3>
   <p>Update Name</p>
   <input type="text" name="name" maxlength="50" class="box" value="<?php echo $_SESSION['name'];?>">   
   <p>Update Gender</p>
   <input type="text" name="gender" maxlength="1" class="box" value="<?php echo $_SESSION['gender'];?>">   
   <p>Update DOB (YYYY-MM-DD)</p>
   <input type="text" name="dob" maxlength="50" class="box" value="<?php echo $_SESSION['dob'];?>">   
   <p>Update Phone Number</p>
   <input type="text" name="phone" maxlength="10" class="box" value="<?php echo $_SESSION['phone'];?>">   
   <p>Update Email</p>
   <input type="email" name="email" maxlength="50" class="box" value="<?php echo $_SESSION['email'];?>">   
   <p>Update Year (Ex: 2)</p>
   <input type="text" name="year" maxlength="1" class="box" value="<?php echo $_SESSION['year'];?>">   
   <p>Update Section (Ex: C)</p>
   <input type="text" name="section" maxlength="1" class="box" value="<?php echo $_SESSION['section'];?>">   
   <input type="submit" value="Update Profile" name="submit" class="btn">
</form>


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
