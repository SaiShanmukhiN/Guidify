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
    <title>Flask</title>
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

    <h1>Flask</h1>

    <ul>
        <li>
  		<div class = "cour">
		<div class="c1">
			<img src = "./codingnomads.png" width = "140px" heigth = "140px"/></div>
		<div>

            <strong>CODINGNOMADS</strong>
            <br>
            <span class="level">Intermediate-Advanced</span>
            <br>
            <span class="duration"><i class="fas fa-clock"></i>120hour</span>
            <br>
            Rating: <span class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
            <br>
            Amount: ₹745.73
            <br>
            <span class="description">Flask is also one of the easiest web dev frameworks to learn, and is built on a language that developers love – Python. Become a confident, modern web developer by learning Python + Flask web development!</span>
            <br>
            <span class="website"><a href="https://codingnomads.co/courses/flask-tutorial-python-flask-apps-online-course">Learn more</a></span>
        </li>

       
        <li>
	<div class = "cour">
		<div class="c1">
			<img src = "./corsera.jpg" width = "140px" heigth = "140px"/></div>
		<div>


<strong>Coursera</strong>
            <br>
            <span class="level">Beginner</span>
            <br>
            <span class="duration"><i class="fas fa-clock"></i> 6 months at 10 hrs a week</span>
            <br>
            Rating: <span class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star-half-alt"></i></span>
            <br>
            Amount: ₹1146.77
            <br>
            <span class="description">This program builds on your IT foundations to help you take your career to the next level. It’s designed to teach you how to program with Python and how to use Python to automate common system administration tasks</span>
            <br>
            <span class="website"><a href="https://www.googleadservices.com/pagead/aclk?sa=L&ai=DChcSEwjT-ODIpPuDAxWezDwCHbzYAo0YABAAGgJzZg&ase=2&gclid=CjwKCAiAzc2tBhA6EiwArv-i6c_mjLeZ7ws-BlKaKcfyk0G_m_1puqSPxBPTTLNfBRWEffzhdPE6HhoCSKUQAvD_BwE&ohost=www.google.com&cid=CAESVuD221LMd7D6DYQOnvlk3MchyJSNoR1BZZggUkNlAfQhUOBFsRzTOGGTmykjtYB2tUs8_XE_Iq2ECGAiqf4ZarzzjND6zgQZPHCS1l_19ymx5IQ5gyCT&sig=AOD64_29fUcPsFyWa9ZQWC98WSRqGsohqQ&q&nis=4&adurl&ved=2ahUKEwiMutvIpPuDAxUtcGwGHShuCUsQ0Qx6BAgPEAE">Learn more</a></span>
        </li>

<li>
		<div class = "cour">
		<div class="c1">
			<img src = "./pluralsight.jpg" width = "140px" heigth = "140px"/></div>
		<div>

            <strong>pluralsight</strong>
            <br>
            <span class="level">Intermediate</span>
            <br>
            <span class="duration"><i class="fas fa-clock"></i>1h 57m</span>
            <br>
            Rating: <span class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i></span>
            <br>
            Amount: ₹1145.12
            <br>
            <span class="description">Flask is rapidly growing in popularity due to its ease of use. This course will teach you how to build a REST API using Flask, including how to use all the different HTTP methods, connect Flask to a database, and add authentication to your APIs.</span>
            <br>
            <span class="website"><a href="https://www.pluralsight.com/courses/python-flask-rest-api">Learn more</a></span>
        </li>


<li>
<div class = "cour">
		<div class="c1">
			<img src = "./udemy.jpg" width = "140px" heigth = "140px"/></div>
		<div>

            <strong>Udemy</strong>
            <br>
            <span class="level">Beginner</span>
            <br>
            <span class="duration"><i class="fas fa-clock"></i>5h 10m</span>
            <br>
            Rating: <span class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></span>
            <br>
            Amount: ₹447.44
            <br>
            <span class="description">This course is aimed at Python developers who want to get into full-stack web development with Flask, a micro-framework for web development using Python.</span>
            <br>
            <span class="website"><a href="https://www.udemy.com/course/full-stack-web-development-with-flask/">Learn more</a></span>
        </li>


<li><div class = "cour">
		<div class="c1">
			<img src = "./mindluster.jpeg" width = "140px" heigth = "140px"/></div>
		<div>

            <strong>Mind Luster</strong>
            <br>
            <span class="level">Beginner</span>
            <br>
            <span class="duration"><i class="fas fa-clock"></i>2+hours</span>
            <br>
            Rating: <span class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
            <br>
            Amount: ₹447.44
            <br>
            <span class="description">Flask comes with a small set of easy to learn API, and the documentation is excellent. If you are new to Python, start your web development with Flask, so that you can get the feel of backend and frontend both as well as learn the core concepts well.</span>
            <br>
            <span class="website"><a href="https://www.mindluster.com/certificate/1738">Learn more</a></span>
        </li>

<li>  
	<div class = "cour">
		<div class="c1">
			<img src = "./pluralsight.jpg" width = "140px" heigth = "140px"/></div>
		<div>

            <strong>pluralsight(Flask:Getting Started)</strong>
            <br>
            <span class="level">Intermediate</span>
            <br>
            <span class="duration"><i class="fas fa-clock"></i>2h 4m</span>
            <br>
            Rating: <span class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
            <br>
            Amount: ₹745.74
            <br>
            <span class="description"> Flask is the framework for you. It allows you to create an application with a tiny amount of code. In this course I will show you the basics of web development with Flask.</span>
            <br>
            <span class="website"><a href="https://www.pluralsight.com/courses/flask-getting-started">Learn more</a></span>
        </li>
     </ul>
<script>
  function toggleProfileDropdown() {
    var dropdown = document.getElementById('profileDropdown');
    dropdown.classList.toggle('active');
  }
</script>


</body>
</html>




