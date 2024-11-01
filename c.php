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
    <title>C Language</title>
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



    <h1>C Language</h1>

    <ul>
        <li>
<div class = "cour">
		<div class="c1">
			<img src = "./udemy.jpg" width = "140px" heigth = "140px"/></div>
		<div>

            <strong>Udemy(2024 C Programming Bootcamp)</strong>
            <br>
            <span class="level">Beginner</span>
            <br>
            <span class="duration"><i class="fas fa-clock"></i> 11+ hours</span>
            <br>
            Rating: <span class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></span>
            <br>
            Amount:   &#x20B9;447.29
            <br>
            <span class="description">The Complete C Language Course 2024: Master the Fundamentals of C Programming Language. Join the Comprehensive C Bootcamp Masterclass!</span>
            <br>
            <span class="website"><a href="https://www.udemy.com/course/c-programming-bootcamp-for-beginners/" target="_blank">Learn more</a></span>
            
        </li>

        <li>
<div class = "cour">
		<div class="c1">
			<img src = "./linkedin.jpg" width = "140px" heigth = "140px"/></div>
		<div>


<strong>Linkedin(Code Clinic-C)</strong>
            <br>
            <span class="level">Intermediate</span>
            <br>
            <span class="duration"><i class="fas fa-clock"></i> 1 hour</span>
            <br>
            Rating: <span class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></span>
            <br>
            Amount: &#x20B9; 1145.56
            <br>
            <span class="description">Successful programmers know more than just how to code. They also know how to think about solving problems. Code Clinic is a series of courses where our instructors solve the same problems using different programming languages. Here, Dan Gookin works with C. Throughout the course, Dan introduces challenges and then provides an overview of his solutions in C.</span>
            <br>
            <span class="website"><a href="https://www.linkedin.com/learning/code-clinic-c-4" target="_blank">Learn more</a></span>
        </li>


           

        <li>
      <div class = "cour">
		<div class="c1">
			<img src = "./takelessons.jpg" width = "140px" heigth = "140px"/></div>
		<div>

            <strong>Takelessons</strong>
            <br>
            <span class="level">All levels</span>
            <br>
            <span class="duration"><i class="fas fa-clock"></i> 1 hour</span>
            <br>
            Rating: <span class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></span>
            <br>
            Amount: &#x20B9;997.29
            <br>
            <span class="description">C langauge from scratch and all practical knowledge</span>
            <br>
            <span class="website"><a href="https://takelessons.com/en-in/profile/pushplata1?service=c-programming&online=1&sort=1&utm_source=bing&utm_medium=mltint_answer&utm_campaign=mltint&utm_term=learn%20mixed-learning%20c-programming&utm_trigger=domaingraphclassifier&utm_query=best%20c%20language%20course%20online%20paid%20courses&utm_intentType=Other&utm_content=multintnt%20card%20For%20All%20Your%20Needs%E2%80%8B&muid=2E1F4511A4BE60972965542FA5496152&utm_region=IN&utm_position=Pole" target="_blank">Learn more</a></span>
        </li>


	<li><div class = "cour">
		<div class="c1">
			<img src = "./geeksforgeeks.jpg" width = "140px" heigth = "140px"/></div>
		<div>

            <strong>geeksforgeeks(Master C Programming with Data Structures)</strong>
            <br>
            <span class="level">Beginner to Advance</span>
            <br>
            <span class="duration"><i class="fas fa-clock"></i> 35+ hours</span>
            <br>
            Rating: <span class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></span>
            <br>
            Amount: &#x20B9; 1992.07
            <br>
            <span class="description">Learn C Programming Language from the best mentor of all time! This C programming course will help you master all important concepts from basic to advanced level. Master the easy to learn C Language and take your skills to the next level. Start Today!

</span>
            <br>
            <span class="website"><a href="https://www.geeksforgeeks.org/courses/c-Programming-basic-to-advanced?utm_source=geeksforgeeks&utm_medium=right_sidebar&utm_campaign=course_card" target="_blank">Learn more</a></span>
        </li>


<li>
<div class = "cour">
		<div class="c1">
			<img src = "./pluralsight.jpg" width = "140px" heigth = "140px"/></div>
		<div>

            <strong>PLURALSIGHT(C Programming Language Fundamentals)</strong>
            <br>
            <span class="level">Beginner</span>
            <br>
            <span class="duration"><i class="fas fa-clock"></i> 1h 26m </span>
            <br>
            Rating: <span class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></span>
            <br>
            Amount: &#x20B9; 2291.09
            <br>
            <span class="description">The C Programming Language course is designed to give you everything you need to become a productive C programmer.</span>
            <br>
            <span class="website"><a href="https://www.pluralsight.com/courses/c-lang-fundamentals" target="_blank">Learn more</a></span>
        </li>


<li>
<div class = "cour">
		<div class="c1">
			<img src = "./edx.jpg" width = "140px" heigth = "140px"/></div>
		<div>

            <strong>edX(DartmouthX, IMTx: C Programming: Language Foundations)</strong>
            <br>
            <span class="level">Beginner to Advance</span>
            <br>
            <span class="duration"><i class="fas fa-clock"></i> 9 months
3 - 4 hours per week</span>
            <br>
            Rating: <span class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></span>
            <br>
            Amount:&#x20B9;8201.88
            <br>
            <span class="description">Inthis course, part of the C Programming with Linux Professional Certificate program,you will learn to use logical statements and arrays in C. Logical statements are used for decision-making with follow-up instructions, based on conditions you define. Arrays are used to store, keep track of, and organize larger amounts of data. You will furthermore implement some fundamental algorithms to search and sort data.</span>
            <br>
            <span class="website"><a href="https://www.edx.org/learn/c-programming/dartmouth-college-c-programming-language-foundations?index=product&objectID=course-7ef41442-5fa3-42f3-b338-126ae68a8e2c&webview=false&campaign=C+Programming%3A+Language+Foundations&source=edX&product_category=course&placement_url=https%3A%2F%2Fwww.edx.org%2Flearn%2Fc-programming" target="_blank">Learn more</a></span>
        </li>


<li>
<div class = "cour">
		<div class="c1">
			<img src = "./linkedin.jpg" width = "140px" heigth = "140px"/></div>
		<div>
            <strong>Linkedin Learning(Advanced C Programming-Optimize Performance and Efficiency)</strong>
            <br>
            <span class="level">Advanced</span>
            <br>
            <span class="duration"><i class="fas fa-clock"></i> 1hour 23min</span>
            <br>
            Rating: <span class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></span>
            <br>
            Amount: &#x20B9; 1394.87
            <br>
            <span class="description">Once you've mastered the basics of programming in C, you can concentrate on writing more efficient, more functional code. In this course, Dan Gookin offers some tips to help you extend your C programming skills. Learn how to read and write main function arguments, build more useful variables, and work with arrays and structures. Plus, get tips on generating pointers, and take the practice challenges to test your learning along the way.</span>
            <br>
            <span class="website"><a href="https://www.linkedin.com/learning/advanced-c-programming-optimize-performance-and-efficiency" target="_blank">Learn more</a></span>
        </li>



<li>
<div class = "cour">
		<div class="c1">
			<img src = "./udemy.jpg" width = "140px" heigth = "140px"/></div>
		<div>

<strong>Udemy(C Programming Masterclass)</strong>
            <br>
            <span class="level">Intermediate</span>
            <br>
            <span class="duration"><i class="fas fa-clock"></i> 41 hours</span>
            <br>
            Rating: <span class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star-half-alt"></i></span>
            <br>
            Amount: &#x20B9; 447.28
            <br>
            <span class="description">C Programming Advanced Topics: Pointers, Memory, Low-Level C Language and Embedded C Preparation
</span>
            <br>
            <span class="website"><a href="https://www.udemy.com/course/c-programming-pointers-from-zero-to-hero/" target="_blank">Learn more</a></span>
        </li>
            



<li>
<div class = "cour">
		<div class="c1">
			<img src = "./corsera.jpg" width = "140px" heigth = "140px"/></div>
		<div>

            <strong>Coursera(Introductory C Programming Specialization)</strong>
            <br>
            <span class="level">All levels</span>
            <br>
            <span class="duration"><i class="fas fa-clock"></i> 5 months</span>
            <br>
            Rating: <span class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></span>
            <br>
            Amount: &#x20B9; 4901.91
            <br>
            <span class="description">This specialization develops strong programming fundamentals for learners who want to solve complex problems by writing computer programs. Through four courses, you will learn to develop algorithms in a systematic way and read and write the C code to implement them. This will prepare you to pursue a career in software development or other computational fields.</span>
            <br>
            <span class="website"><a href="https://www.coursera.org/specializations/c-programming?action=enroll&authMode=signup" target="_blank">Learn more</a></span>
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




