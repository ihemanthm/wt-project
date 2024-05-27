<!DOCTYPE html>
<?php
	session_start();

   // Check if the user is not logged in
   if (!isset($_SESSION['id'])) {
       // Redirect the user to the login page
       header("Location: http://localhost/project/index.html");
       exit();
   }

?>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<header class="header">
   
   <section class="flex">

      <p class="logo">Welcome <?php echo explode(" ",$_SESSION['name'])[0]?></p>


      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <div id="search-btn" class="fas fa-search"></div>
         <div id="toggle-btn" class="fas fa-sun"></div>
         <div id="user-btn" class="fas fa-right-from-bracket"></div>
      </div>

      <div class="profile">
         <form action="logout.php" method="post">
         	<button type="submit" class="btn" style="background-color:red;color:white">Log Out</button>
      	</form>
      </div>

   </section>

</header>   

<div class="side-bar">

   <div id="close-btn">
      <i class="fas fa-times"></i>
   </div>

   <div class="profile">
      <img src="images/pic-1.jpg" class="image" alt="">
      <h3 class="name"><?php echo $_SESSION["id"];?></h3>
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

<section class="home-grid">

   <h1 class="heading">basic details</h1>

   <div class="box-container">

      <div class="box">
         <h3 class="title">top categories</h3>
         <div class="flex">
            <a href="#"><i class="fab fa-css3"></i><span>Frontend</span></a>
            <a href="#"><i class="fab fa-java"></i><span>Backend</span></a>
            <a href="#"><i class="fab fa-react"></i><span>Full Stack</span></a>
            <a href="#"><i class="fas fa-cog"></i><span>Software</span></a>
            <a href="#"><i class="fas fa-vial"></i><span>Data Science</span></a>
         </div>
      </div>

      <div class="box">
         <h3 class="title">popular langauges </h3>
         <div class="flex">
            <a href="#"><i class="fab fa-html5"></i><span>HTML</span></a>
            <a href="#"><i class="fab fa-css3"></i><span>CSS</span></a>
            <a href="#"><i class="fab fa-js"></i><span>javascript</span></a>
            <a href="#"><i class="fab fa-react"></i><span>react</span></a>
            <a href="#"><i class="fab fa-php"></i><span>PHP</span></a>
            <a href="#"><i class="fab fa-bootstrap"></i><span>bootstrap</span></a>
            <a href="#"><i class="fab fa-java"></i><span>Java</span></a>
            <a href="#"><i class="fab fa-python"></i><span>Python</span></a>
         	<a href="#"><i class="fab fa-c"></i><span>C Language</span></a>
         </div>
      </div>

      <div class="box">
         <h3 class="title">become an intern</h3>
         <p class="tutor">True internships makes us come to them but never bargains us to join. You can contact our faculty, they will guide you about best internships</p>
         <a href="teachers.php" class="inline-btn">get started</a>
      </div>

   </div>

</section>



<section class="courses">

   <h1 class="heading">useful courses</h1>

   <div class="box-container">

      <div class="box">
         <div class="tutor">
            <img src="images/ibm.webp" alt="">
            <div class="info">
               <h3>IBM</h3>
               <span>Course</span>
            </div>
         </div>
         <div class="thumb">
            <img src="images/cse.webp" alt="">
            <span>EdX</span>
         </div>
         <h3 class="title">Developing Front End Apps with React</h3>
         <a href="https://enterprise.edx.org/APSCHE/course/IBM+CAD0210EN" class="inline-btn">Enroll</a>
      </div>

      <div class="box">
         <div class="tutor">
            <img src="images/codio.webp" alt="">
            <div class="info">
               <h3>Codio</h3>
               <span>Course</span>
            </div>
         </div>
         <div class="thumb">
            <img src="images/java.webp" alt="">
            <span>EdX</span>
         </div>
         <h3 class="title">Introduction to Java Programming: DSA</h3>
         <a href="https://enterprise.edx.org/APSCHE/course/UC3Mx+IT.1.3x" class="inline-btn">Enroll</a>
      </div>

      <div class="box">
         <div class="tutor">
            <img src="images/w3cx.webp" alt="">
            <div class="info">
               <h3>W3CX</h3>
               <span>Program</span>
            </div>
         </div>
         <div class="thumb">
            <img src="images/frontend.webp" alt="">
            <span>EdX | 5 courses</span>
         </div>
         <h3 class="title">Front-End Web Developer : Complete Program</h3>
         <a href="https://enterprise.edx.org/APSCHE/program/98b7344e-cd44-4a99-9542-09dfdb11d31b" class="inline-btn">Enroll</a>
      </div>

   </div>

   <div class="more-btn">
      <a href="courses.php" class="inline-option-btn">view all</a>
   </div>

</section>

<!-- custom js file link  -->
<script src="js/script.js"></script>

   
</body>
</html>
