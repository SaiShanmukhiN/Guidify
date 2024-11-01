 <?php
include('server.php');

// Assuming you have a logged-in user, fetch their username from the database
if (isset($_SESSION['username'])) {
    $loggedInUsername = $_SESSION['username'];
    $firstLetter = strtoupper(substr($loggedInUsername, 0, 1));
} else {
    // If the user is not logged in, set a default letter or handle it as needed
    $firstLetter = 'G'; // Change this to your desired default letter
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>C language</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"> <!-- Font Awesome for icons -->
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 20px;
            background-color: #f9f9f9;
            color: #333;
        }

        h1 {
            color: #007BFF;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin-bottom: 20px;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            background-color: #ffffff;
            transition: transform 0.3s ease-in-out;
        }

        li:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        strong {
            color: #007BFF;
            font-size: 1.2em;
        }

        .rating {
            color: #f39c12; /* Orange color for stars */
            font-size: 0.9em; /* Adjust the font size to make stars smaller */
        }

        .duration,
        .level,
        .description,
        .website {
            color: #666;
            margin-top: 8px;
        }

        .level {
            color: #28a745; /* Green color for beginner */
            font-weight: bold;
        }

        .website a {
            color: #007BFF;
            text-decoration: none;
            font-weight: bold;
        }

        .website a:hover {
            text-decoration: underline;
        }
.profile-circle {
      width: 40px;
      height: 40px;
      background-color: #3498db; /* Choose your background color */
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      color: #fff; /* Choose your text color */
      font-size: 16px; /* Choose your font size */
      font-weight: bold;
      margin-left: 10px;
      cursor: pointer;
      position: relative;
    }

    .profile-dropdown {
      position: absolute;
      top: 60px;
      right: 10px;
      background-color: #fff;
      border: 1px solid #ddd;
      border-radius: 5px;
      padding: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      display: none;
    }

    .profile-circle:hover .profile-dropdown,
    .profile-dropdown.active {
      display: block;
    }

    .profile-dropdown a {
      display: block;
      padding: 8px;
      text-decoration: none;
      color: #333;
      transition: background-color 0.3s;
    }

    .profile-dropdown a:hover {
      background-color: #f2f2f2;
    }

.cour{
            display: flex;
        }
        .c1{
            padding: 20px;
        }

    </style>
</head>
<body>
<header>
        <div class="container">
            <div style="display: flex; width: 100%; justify-content: space-between; align-items: center;">
              <h1 style="font-size:35px">Guidify</h1>
              <?php if (isset($_SESSION['username'])): ?>
                 <div style="display: flex; align-items: center;">
          <div class="profile-circle" onclick="toggleProfileDropdown()">
            <?php echo $firstLetter; ?>
            <div class="profile-dropdown" id="profileDropdown">
              <a href="profile.php">Profile</a>
              <a href="home1.php">Home</a>
              <a href="aboutus.php">About Us</a>
              <a href="contact.php">Contact</a>
              <a href="index.php">Logout</a>
            </div>
          </div>
        </div>
              <?php else: ?>
                
              <?php endif; ?>
            </div>
             </header>





    <h1>C language</h1>

    <ul>
        <li>
<div class = "cour">
		<div class="c1">
			<img src = "./edx.jpg" width = "140px" heigth = "140px"/></div>
		<div>

            <strong>edX(DartmouthX, IMTx: C Programming: Getting Started)</strong>
            <br>
            <span class="level">Introductory</span>
            <br>
            <span class="duration"><i class="fas fa-clock"></i> 5 weeks</span>
            <br>
            Rating: <span class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>(4.8)</span>
            <br>
            <span class="description">In this course, you will learn the principles of C programming and start coding hands-on in a browser tool that will provide instant feedback on your code.</span>
            <br>
            <span class="website"><a href="https://www.edx.org/learn/c-programming/dartmouth-college-c-programming-getting-started?pid=658335&awc=4032_1710311791_e6f743ea17ee681febefd0562cee26bc" target="_blank">Learn more</a></span>
</div>
</div>
        </li>

<li>
<div class = "cour">
		<div class="c1">
			<img src = "./udemy.jpg" width = "140px" heigth = "140px"/></div>
		<div>

            <strong>Udemy(Microcontrollers and the C Programming Language)</strong>
            <br>
            <span class="level">Beginner</span>
            <br>
            <span class="duration"><i class="fas fa-clock"></i> 2 hours</span>
            <br>
            Rating: <span class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star-half-alt"></i>(4.5)</span>
            <br>
            <span class="description">Create C programs for a microcontroller using inputs/outputs, timers, analog-to-digital converters, comm ports, and LCD.	</span>
            <br>
            <span class="website"><a href="https://www.udemy.com/course/mcu_msp430/?deal_code=IND21PM&locale=&ranMID=39197&ranEAID=vWFcdslQDtg&ranSiteID=vWFcdslQDtg-o7Nb8RBaQrBPKbMNUhEStw&LSNPUBID=vWFcdslQDtg&utm_source=aff-campaign&utm_medium=udemyads" target="_blank">Learn more</a></span>
        </div>
</div>
</li>
<li>
<div class = "cour">
		<div class="c1">
			<img src = "./corsera.jpg" width = "140px" heigth = "140px"/></div>
		<div>

            <strong>Coursera</strong>
            <br>
            <span class="level">Intermediate</span>
            <br>
            <span class="duration"><i class="fas fa-clock"></i> 11 hours </span>
            <br>
            Rating: <span class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>(4.9)</span>
            <br>
            <span class="description">Exploring C(This course is part of C Programming for Everybody Specialization)</span>
            <br>
            <span class="website"><a href="https://www.coursera.org/learn/exploring-c" target="_blank">Learn more</a></span>
</div>
</div>
        </li>


<li>
<div class = "cour">
		<div class="c1">
			<img src = "./programiz.jpg" width = "140px" heigth = "140px"/></div>
		<div>

            <strong>Programiz</strong>
            <br>
            <span class="level">Beginner</span>
            <br>
            <span class="duration"><i class="fas fa-clock"></i> 2 months</span>
            <br>
            <span class="description"> Learn to code in C, a general-purpose language used for building operating systems, compilers, web browsers, and other high-performance software.

</span>
            <br>
            <span class="website"><a href="https://programiz.pro/learn/master-c-programming?utm_campaign=programiz&utm_source=landing-tutorial-nav&utm_medium=referral" target="_blank">Learn more</a></span>
</div>
</div>
        </li>



        <li>
<div class = "cour">
		<div class="c1">
			<img src = "./greatlearning.jpg" width = "140px" heigth = "140px"/></div>
		<div>

<strong>Great Learning</strong>
            <br>
            <span class="level">Beginner</span>
            <br>
            <span class="duration"><i class="fas fa-clock"></i> 40 hours</span>
           
            <br>
            <span class="description">This Live course will cover all the concepts of C Programming under the common year/1st year syllabus. This course is specially designed to help you understand the concepts you need help in. This course will help you in solving numerical, answer questions, understand concepts & help you prepare for internal/exams.</span>
            <br>
            <span class="website"><a href="https://www.mygreatlearning.com/academy/learn-for-free/courses/c-programming" target="_blank">Learn more</a></span>
</div>
</div>
        </li>


         




        <!-- Add more courses as needed -->
    </ul>
<script>
  function toggleProfileDropdown() {
    var dropdown = document.getElementById('profileDropdown');
    dropdown.classList.toggle('active');
  }
</script>


</body>
</html>
