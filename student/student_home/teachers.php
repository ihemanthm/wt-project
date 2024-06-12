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
   <title>teachers</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<header class="header">
   
   <section class="flex">

      <p class="logo">Faculty Section</p>

      
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

<section class="teachers">

   <h1 class="heading">our expert teachers</h1>

   <div class="box-container">

      <div class="box">
         <div class="tutor">
         	<img src="images/satya.jpg" alt="">
            <div>
               <h3>Mr. N. Satyanandaram</h3>
               <span>Lecturer</span>
            </div>
         </div>
         <p>Education : <span>MSIT (IIIT H)</span></p>
         <p>Subjects : <span>OOPS, DAA, Perl etc</span></p>
         <a href="https://www.rguktrkv.ac.in/Profile.php?id=NSatyanandaram&dep=CS" target="_blank" class="inline-btn">view profile</a>
      </div>

      <div class="box">
         <div class="tutor">
         	<img src="images/chandra_sekhar.jpg" alt="">
            <div>
               <h3>Mr. N. Chandra Shekar</h3>
               <span>Assistant Professor, IT-Infra Coordinator</span>
            </div>
         </div>
         <p>Education : <span>M.Tech (University of Hyderabad)</span></p>
         <p>Subjects : <span>DS, OS, DAA, FLAT etc</span></p>
         <a href="https://www.rguktrkv.ac.in/Profile.php?id=NChandraShekar&dep=CS" target="_blank" class="inline-btn">view profile</a>
      </div>
	</div>
	<br>
	<div class="box-container">

      <div class="box">
         <div class="tutor">
         	<img src="images/ratnakumari.jpg" alt="">
            <div>
               <h3>Dr. Ratna Kumari. Ch</h3>
               <span>Assistant Professor</span>
            </div>
         </div>
         <p>Education : <span>P.hD (JNTU H); M.Tech (University of Hyderabad)</span></p>
         <p>Subjects : <span>COA, DBMS, DS, FLAT etc</span></p>
         <a href="https://www.rguktrkv.ac.in/Profile.php?id=RatnaKumariCh&dep=CS" target="_blank" class="inline-btn">view profile</a>
      </div>

      <div class="box">
         <div class="tutor">
         	<img src="images/ravikumar.jpg" alt="">
            <div>
               <h3>Dr. Penugonda Ravi Kumar</h3>
               <span>Assistant Professor</span>
            </div>
         </div>
         <p>Education : <span>P.hD (@ AIZU,Japan), M.E (IISc Bangalore)</span></p>
         <p>Subjects : <span>DS, OS, DAA, FLAT etc</span></p>
         <a href="https://www.rguktrkv.ac.in/Profile.php?id=PenugondaRaviKumar&dep=CS" target="_blank" class="inline-btn">view profile</a>
      </div>
	</div>
	<br>
	<div class="box-container">

      <div class="box">
         <div class="tutor">
         	<img src="images/sunitha.jpg" alt="">
            <div>
               <h3>Ms. C Sunitha</h3>
               <span>Assistant Professor</span>
            </div>
         </div>
         <p>Education : <span>M.Tech (JNTU ATP), (Ph.D)</span></p>
         <p>Subjects : <span>OS, DAA, FLAT, WT, DSP etc</span></p>
         <a href="https://www.rguktrkv.ac.in/Profile.php?id=CSunitha&dep=CS" target="_blank" class="inline-btn">view profile</a>
      </div>

      <div class="box">
         <div class="tutor">
         	<img src="images/none.jpeg" alt="">
            <div>
               <h3>Mr. M Muni babu</h3>
               <span>Assistant Professor</span>
            </div>
         </div>
         <p>Education : <span>M.Tech</span></p>
         <p>Subjects : <span>DBMS, COA etc</span></p>
         <a href="#" target="_blank" class="inline-btn">view profile</a>
      </div>
	</div>
	<br>
	<div class="more-btn" align="center">
      <a href="https://www.rguktrkv.ac.in/Departments.php?view=CS&staff=TS" target="_blank" class="inline-option-btn">view all</a>
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
