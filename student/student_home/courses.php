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
   <title>courses</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<header class="header">
   
   <section class="flex">

      <p class="logo">Courses Section</p>

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
         <a href="https://enterprise.edx.org/APSCHE/course/IBM+CAD0210EN" target="_blank" class="inline-btn">Enroll</a>
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
         <a href="https://enterprise.edx.org/APSCHE/course/UC3Mx+IT.1.3x" target="_blank" class="inline-btn">Enroll</a>
      </div>

      <div class="box">
         <div class="tutor">
            <img src="images/ibm.webp" alt="">
            <div class="info">
               <h3>IBM</h3>
               <span>course</span>
            </div>
         </div>
         <div class="thumb">
            <img src="images/cloud.webp" alt="">
            <span>EdX</span>
         </div>
         <h3 class="title">Introduction to Cloud Computing</h3>
         <a href="https://enterprise.edx.org/APSCHE/course/IBM+CC0101EN" target="_blank" class="inline-btn">Enroll</a>
      </div>

      <div class="box">
         <div class="tutor">
            <img src="images/ibm.webp" alt="">
            <div class="info">
               <h3>IBM</h3>
               <span>Course</span>
            </div>
         </div>
         <div class="thumb">
            <img src="images/ai.webp" alt="">
            <span>EdX</span>
         </div>
         <h3 class="title">AI Chatbots without Programming</h3>
         <a href="https://enterprise.edx.org/APSCHE/course/IBM+CB0103EN" target="_blank" class="inline-btn">Enroll</a>
      </div>

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
         <a href="https://enterprise.edx.org/APSCHE/course/IBM+CAD0210EN" target="_blank" class="inline-btn">Enroll</a>
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
         <a href="https://enterprise.edx.org/APSCHE/course/UC3Mx+IT.1.3x" target="_blank" class="inline-btn">Enroll</a>
      </div>

      <div class="box">
         <div class="tutor">
            <img src="images/ibm.webp" alt="">
            <div class="info">
               <h3>IBM</h3>
               <span>course</span>
            </div>
         </div>
         <div class="thumb">
            <img src="images/cloud.webp" alt="">
            <span>EdX</span>
         </div>
         <h3 class="title">Introduction to Cloud Computing</h3>
         <a href="https://enterprise.edx.org/APSCHE/course/IBM+CC0101EN" target="_blank" class="inline-btn">Enroll</a>
      </div>

      <div class="box">
         <div class="tutor">
            <img src="images/ibm.webp" alt="">
            <div class="info">
               <h3>IBM</h3>
               <span>Course</span>
            </div>
         </div>
         <div class="thumb">
            <img src="images/ai.webp" alt="">
            <span>EdX</span>
         </div>
         <h3 class="title">AI Chatbots without Programming</h3>
         <a href="https://enterprise.edx.org/APSCHE/course/IBM+CB0103EN" target="_blank" class="inline-btn">Enroll</a>
      </div>
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
         <a href="https://enterprise.edx.org/APSCHE/course/IBM+CAD0210EN" target="_blank" class="inline-btn">Enroll</a>
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
         <a href="https://enterprise.edx.org/APSCHE/course/UC3Mx+IT.1.3x" target="_blank" class="inline-btn">Enroll</a>
      </div>

      <div class="box">
         <div class="tutor">
            <img src="images/ibm.webp" alt="">
            <div class="info">
               <h3>IBM</h3>
               <span>course</span>
            </div>
         </div>
         <div class="thumb">
            <img src="images/cloud.webp" alt="">
            <span>EdX</span>
         </div>
         <h3 class="title">Introduction to Cloud Computing</h3>
         <a href="https://enterprise.edx.org/APSCHE/course/IBM+CC0101EN" target="_blank" class="inline-btn">Enroll</a>
      </div>

      <div class="box">
         <div class="tutor">
            <img src="images/ibm.webp" alt="">
            <div class="info">
               <h3>IBM</h3>
               <span>Course</span>
            </div>
         </div>
         <div class="thumb">
            <img src="images/ai.webp" alt="">
            <span>EdX</span>
         </div>
         <h3 class="title">AI Chatbots without Programming</h3>
         <a href="https://enterprise.edx.org/APSCHE/course/IBM+CB0103EN" target="_blank" class="inline-btn">Enroll</a>
      </div>

   </div>

</section>

<section class="courses">
	<h1 class="heading">useful Programs</h1>
	
   <div class="box-container">
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
         <a href="https://enterprise.edx.org/APSCHE/program/98b7344e-cd44-4a99-9542-09dfdb11d31b" target="_blank" class="inline-btn">Enroll</a>
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
         <a href="https://enterprise.edx.org/APSCHE/program/98b7344e-cd44-4a99-9542-09dfdb11d31b" target="_blank" class="inline-btn">Enroll</a>
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
         <a href="https://enterprise.edx.org/APSCHE/program/98b7344e-cd44-4a99-9542-09dfdb11d31b" target="_blank" class="inline-btn">Enroll</a>
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
