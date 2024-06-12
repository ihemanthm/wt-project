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

      <p class="logo">Academics Section</p>


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
	<h1 class="heading">Section-Wise Data</h1>
	<div class="box-container">
		  <div class="box">
		     <h3 class="title">AY2023-2024 E2 SEM2 StudentsInfo-1</h3>
		     <a href="data/AY2023-2024_E2CSE_SEM2_StudentsInfo-1_UPDATED.xlsx" class="inline-btn" download>Download</a>
        </div>
		  <div class="box">
		     <h3 class="title">AY2023-2024 E2 SEM1 Branchwise Classroom</h3>
		     <a href="data/branch_wise_e1_classroom.pdf" class="inline-btn" download>Download</a>
		  </div>
		  <div class="box">
		     <h3 class="title">AY2023-2024 E1 SEM1 Branchwise Classroom</h3>
		     <a href="data/branch_wise_e1_classroom.pdf" class="inline-btn" download>Download</a>
		  </div>
      </div>
</section>

<section class="courses">

   <h1 class="heading">Marks & grades</h1>

   <div class="box-container">
      <div class="box">
		  <h3 class="title">WT WAT3 Results</h3>
		  <a href="data/WT_AT3.xlsx" class="inline-btn" download>Download</a>
	  </div>
      <div class="box">
		  <h3 class="title">WT WAT4 Results</h3>
		  <a href="data/WT_AT4.xlsx" class="inline-btn" download>Download</a>
	  </div>
	  <div class="box">
		  <h3 class="title">DSP WAT1 Results</h3>
		  <a href="data/DSP_AT1.xlsx" class="inline-btn" download>Download</a>
	  </div>
	  <div class="box">
		  <h3 class="title">DSP WAT2 Results</h3>
		  <a href="data/DSP_AT1.xlsx" class="inline-btn" download>Download</a>
	  </div>
	  <div class="box">
		  <h3 class="title">DSP WAT3 Results</h3>
		  <a href="data/DSP_AT1.xlsx" class="inline-btn" download>Download</a>
	  </div>
	  <div class="box">
		  <h3 class="title">DSP WAT4 Results</h3>
		  <a href="data/DSP_AT1.xlsx" class="inline-btn" download>Download</a>
	  </div>	
      
	</div>

</section>

<section class="courses">
	<h1 class="heading">Course Content</h1>
	
   <div class="box-container">
   		<div class="box">
         <div class="tutor">
            <div class="info">
               <h3>Web Technologies</h3>
               <span>Core Subject</span>
            </div>
         </div>
         <div class="thumb">
            <img src="images/wt.jpeg" alt="">
            <span>ZIP File</span>
         </div>
         <a href="data/WT.zip" class="inline-btn" download>Access File</a>
      </div>
      <div class="box">
         <div class="tutor">
            <div class="info">
               <h3>Data Science with Python</h3>
               <span>Core Subject</span>
            </div>
         </div>
         <div class="thumb">
            <img src="images/dsp.jpeg" alt="">
            <span>ZIP File</span>
         </div>
         <a href="data/DSP.zip" class="inline-btn" download>Access File</a>
      </div>
      <div class="box">
         <div class="tutor">
            <div class="info">
               <h3>Computer Organisation & Architecture</h3>
               <span>Core Subject</span>
            </div>
         </div>
         <div class="thumb">
            <img src="images/coa.jpeg" alt="">
            <span>ZIP File</span>
         </div>
         <a href="data/COA.zip" class="inline-btn" download>Access File</a>
      </div>
      <div class="box">
         <div class="tutor">
            <div class="info">
               <h3>Compiler Design</h3>
               <span>Core Subject</span>
            </div>
         </div>
         <div class="thumb">
            <img src="images/cd.jpeg" alt="">
            <span>ZIP File</span>
         </div>
         <a href="data/CD.zip" class="inline-btn" download>Access File</a>
      </div>
      <div class="box">
         <div class="tutor">
            <div class="info">
               <h3>Operations Research</h3>
               <span>Non-Core Subject</span>
            </div>
         </div>
         <div class="thumb">
            <img src="images/or.jpeg" alt="">
            <span>ZIP File</span>
         </div>
         <a href="data/OR.zip" class="inline-btn" download>Access File</a>
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
