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
   <title>contact us</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<header class="header">
   
   <section class="flex">

      <p class="logo">Reach Us...</p>

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
      <p class="role">Faculty</p>
      <a href="profile.php" class="btn">view profile</a>
   </div>

   <nav class="navbar">
      <a href="home.php"><i class="fas fa-home"></i><span>Home</span></a>
      <a href="data/course_structure.pdf" target="_blank"><i class="fas fa-graduation-cap"></i><span>Courses</span></a>
      <a href="results.php"><i class="fas fa-chalkboard-user"></i><span>Results</span></a>
      <a href="attendance.php"><i class="fa-solid fa-people-group"></i><span>Attendance</span></a>
      <a href="contact.php"><i class="fas fa-headset"></i><span>contact us</span></a>
   </nav>

</div>

<section class="contact">

   <div class="row">

      <div class="image">
         <img src="images/contact-img.svg" alt="">
      </div>

      <form action="reviews.php" method="post">
         <h3>Review Us</h3>
         <input type="text" placeholder="enter your name" name="name" required maxlength="50" class="box">
         <input type="email" placeholder="enter your email" name="email" required maxlength="50" class="box">
         <input type="number" placeholder="enter your number" name="phone" required maxlength="50" class="box">
         <textarea name="content" class="box" placeholder="enter your review" required maxlength="1000" cols="30" rows="10"></textarea>
         <input type="submit" value="Send Review" class="inline-btn" name="submit">
      </form>

   </div>

   <div class="box-container">

      <div class="box">
         <i class="fas fa-phone"></i>
         <h3>Call Us</h3>
         <a href="tel:08588283603"> 08588-283603</a>
         <a href="tel:08588283602">Fax :  08588-283602</a>
      </div>
      
      <div class="box">
         <i class="fas fa-envelope"></i>
         <h3>Email Us</h3>
         <a href="mailto:shaikhanas@gmail.com">director@rguktrkv.ac.in</a>
         <a href="mailto:anasbhai@gmail.com">patodirector@rguktrkv.ac.in</a>
      </div>

      <div class="box">
         <i class="fas fa-map-marker-alt"></i>
         <h3>Visit Us</h3>
         <a href="">The Director, RK Valley, RGUKT-RK Valley,AP</a>
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
   window.onload = function() {
      // Get the value of the msg parameter from the URL
      var urlParams = new URLSearchParams(window.location.search);
      var msg = urlParams.get('msg');

      // Check if msg parameter exists and is not empty
      if (msg) {
         // Display an alert message with the retrieved message
         alert("Thank You for your response");
      }
   }
</script>

   
</body>
</html>
