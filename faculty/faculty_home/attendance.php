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
   <title>Attendance</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/scroll.css">

</head>
<body>

<header class="header">
   
   <section class="flex">

     <p class="logo">Attendance</p>

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
      <h3 class="name"><?php echo $_SESSION['id']?></h3>
      <p class="role"> Faculty</p>
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

<section id="attendance" class="courses">

   <h1 class="heading">Section Wise Attendance</h1>

   <div class="box-container">
		  <div class="box">
		     <h3 class="title">AY2023-2024 E2 SEM2 <br>Section A</h3>
		     <a href="https://docs.google.com/spreadsheets/d/1JH0n3PIcdpc_-R7HFTbnJpuJEJ66vlTrce1jAGnkFPI/edit#gid=0" class="inline-btn" target="_blank" >Edit</a>
        </div>
		  <div class="box">
		     <h3 class="title">AY2023-2024 E2 SEM2 <br>Section B</h3>
		     <a href="https://docs.google.com/spreadsheets/d/1JH0n3PIcdpc_-R7HFTbnJpuJEJ66vlTrce1jAGnkFPI/edit#gid=520818600" class="inline-btn" target="_blank">Edit</a>
		  </div>
		  <div class="box">
		     <h3 class="title">AY2023-2024 E2 SEM2 <br>Section C</h3>
		     <a href="https://docs.google.com/spreadsheets/d/1JH0n3PIcdpc_-R7HFTbnJpuJEJ66vlTrce1jAGnkFPI/edit#gid=1752609918" class="inline-btn" target="_blank">Edit</a>
		  </div>
          <div class="box">
		     <h3 class="title">AY2023-2024 E2 SEM2 <br>Section D</h3>
		     <a href="https://docs.google.com/spreadsheets/d/1JH0n3PIcdpc_-R7HFTbnJpuJEJ66vlTrce1jAGnkFPI/edit#gid=1176952577" class="inline-btn" target="_blank">Edit</a>
        </div>
		  <div class="box">
		     <h3 class="title">AY2023-2024 E2 SEM2 <br>Section E</h3>
		     <a href="https://docs.google.com/spreadsheets/d/1JH0n3PIcdpc_-R7HFTbnJpuJEJ66vlTrce1jAGnkFPI/edit#gid=458152969" class="inline-btn" target="_blank">Edit</a>
		  </div>
		  <div class="box">
		     <h3 class="title">AY2023-2024 E2 SEM2 <br>Section F</h3>
		     <a href="https://docs.google.com/spreadsheets/d/1JH0n3PIcdpc_-R7HFTbnJpuJEJ66vlTrce1jAGnkFPI/edit#gid=115140278" class="inline-btn" target="_blank">Edit</a>
		  </div>
      </div>
</section>




 

<!-- custom js file link  -->
<script>
        // Wait until the DOM is fully loaded
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
<script src="js/script.js"></script>
<script src="js/scroll.js"></script>
   
</body>
</html>