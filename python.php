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
    <title>Python</title>
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


    <h1>Python</h1>

    <ul>
        <li>


<div class = "cour">
		<div class="c1">
			<img src = "./linkedin.jpg" width = "140px" heigth = "140px"/></div>
		<div>



            <strong>Linkedin(Learning Python)</strong>
            <br>
            <span class="level">Beginner</span>
            <br>
            <span class="duration"><i class="fas fa-clock"></i> 3+ hours</span>
            <br>
            Rating: <span class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></span>
            <br>
            Amount: &#x20B9; 1144.97
            <br>
            <span class="description">Python—the popular and highly-readable object-oriented language—is both powerful and relatively easy to learn. Whether you're new to programming or an experienced developer, this course can help you get started with Python. Joe Marini provides an overview of the installation process, basic Python syntax, and an example of how to construct and run a simple Python program.</span>
            <br>
            <span class="website"><a href="https://www.linkedin.com/learning/learning-python-14393370" target="_blank">Learn more</a></span>

</div> 
		
	
	</div>  


        </li>


        <li>
<div class = "cour">
		<div class="c1">
			<img src = "./udemy.jpg" width = "140px" heigth = "140px"/></div>
		<div>


<strong>Udemy(100 Days of Code: The Complete Python Pro Bootcamp)</strong>
            <br>
            <span class="level">Intermediate</span>
            <br>
            <span class="duration"><i class="fas fa-clock"></i> 58 hours</span>
            <br>
            Rating: <span class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star-half-alt"></i></span>
            <br>
            Amount: &#x20B9; 447.28
            <br>
            <span class="description">Welcome to the 100 Days of Code - The Complete Python Pro Bootcamp, the only course you need to learn to code with Python. With over 500,000 5 STAR reviews and a 4.8 average, my courses are some of the HIGHEST RATED courses in the history of Udemy!  </span>
            <br>
            <span class="website"><a href="https://www.udemy.com/course/100-days-of-code/" target="_blank">Learn more</a></span>
        </li>


           

        <li><div class = "cour">
		<div class="c1">
			<img src = "./corsera.jpg" width = "140px" heigth = "140px"/></div>
		<div>
            <strong>coursera(Python for Everybody Specialization)</strong>
            <br>
            <span class="level">Beginner</span>
            <br>
            <span class="duration"><i class="fas fa-clock"></i> 2 months at 10 hours a week</span>
            <br>
            Rating: <span class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star-half-alt"></i></span>
            <br>
            Amount: &#x20B9; 4071.12
            <br>
            <span class="description">This Specialization builds on the success of the Python for Everybody course and will introduce fundamental programming concepts including data structures, networked application program interfaces, and databases, using the Python programming language. In the Capstone Project, you’ll use the technologies learned throughout the Specialization to design and create your own  applications for data retrieval, processing, and visualization.</span>
            <br>
            <span class="website"><a href="https://www.coursera.org/specializations/python" target="_blank">Learn more</a></span>
        </li>


	<li><div class = "cour">
		<div class="c1">
			<img src = "./corsera.jpg" width = "140px" heigth = "140px"/></div>
		<div>
            <strong>coursera(Get Started with Python)</strong>
            <br>
            <span class="level">Advanced</span>
            <br>
            <span class="duration"><i class="fas fa-clock"></i> 3 months</span>
            <br>
            Rating: <span class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>(4.8)</span>
            <br>
            Amount: &#x20B9; 2325.88            <br>
            <span class="description">This is the second of seven courses in the Google Advanced Data Analytics Certificate. The Python programming language is a powerful tool for data analysis. In this course, you’ll learn the basic concepts of Python programming and how data professionals use Python on the job. You'll explore concepts such as object-oriented programming, variables, data types, functions, conditional statements, loops, and data structures. Google employees who currently work in the field will guide you through this course by providing hands-on activities that simulate relevant tasks, sharing examples from their day-to-day work, and helping you enhance your data analytics skills to prepare for your career. 
</span>
            <br>
            <span class="website"><a href="https://www.coursera.org/learn/get-started-with-python" target="_blank">Learn more</a></span>
        </li>


<li><div class = "cour">
		<div class="c1">
			<img src = "./edx.jpg" width = "140px" heigth = "140px"/></div>
		<div>

            <strong>edX(GTx: Computing in Python I: Fundamentals and Procedural Programming)</strong>
            <br>
            <span class="level">Introductory</span>
            <br>
            <span class="duration"><i class="fas fa-clock"></i> 5 weeks
9–10 hours per week </span>
            <br>
            Rating: <span class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>(4.6)</span>
            <br>
            Amount: &#x20B9; 12341.75
            <br>
            <span class="description">Learn the fundamentals of computing in Python, including variables, operators, and writing and debugging your own programs.</span>
            <br>
            <span class="website"><a href="https://www.edx.org/learn/python/the-georgia-institute-of-technology-computing-in-python-i-fundamentals-and-procedural-programming" target="_blank">Learn more</a></span>
        </li>


<li><div class = "cour">
		<div class="c1">
			<img src = "./pluralsight.jpg" width = "140px" heigth = "140px"/></div>
		<div>

            <strong>PLURALSIGHT(Core Python 3: Getting Started)</strong>
            <br>
            <span class="level">Beginner</span>
            <br>
            <span class="duration"><i class="fas fa-clock"></i> 4 hours</span>
            <br>
            Rating: <span class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star">(3.8)</i></span>
            <br>
            Amount: &#x20B9; 746.30
            <br>
            <span class="description">In this course we'll introduce you to the essentials of the Python language, development culture, and important parts of the Python standard library. This course will help you develop the foundation you need to work on any Python project.</span>
            <br>
            <span class="website"><a href="https://www.pluralsight.com/courses/getting-started-python-core" target="_blank">Learn more</a></span>
        </li>


<li><div class = "cour">
		<div class="c1">
			<img src = "./codecademy.jpeg" width = "140px" heigth = "140px"/></div>
		<div>

            <strong>Codecademy(Learn Python 3)</strong>
            <br>
            <span class="level">Beginner</span>
            <br>
            <span class="duration"><i class="fas fa-clock"></i> 25 hours</span>
            <br>
            Rating: <span class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>(4.6)</span>
            <br>
            Amount: &#x20B9; 1573.78/month
            <br>
            <span class="description">If you’re looking for a programming language that’s flexible and easy to read, try learning Python. It’s one of the most popular languages today, and programming in Python is used for everything from web and software development to data science and analytics to quality assurance.</span>
            <br>
            <span class="website"><a href="https://www.codecademy.com/learn/learn-python-3" target="_blank">Learn more</a></span>
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
