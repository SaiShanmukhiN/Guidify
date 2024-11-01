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




    <h1>Data Science using python</h1>

    <ul>
        <li>
<div class = "cour">
		<div class="c1">
			<img src = "./geetster.png" width = "140px" heigth = "140px"/></div>
		<div>

            <strong>Geekster</strong>
            <br>
            <span class="level">Beginner</span>
            <br>
            <span class="duration"><i class="fas fa-clock"></i>17+hours</span>
            <br>
            Rating: <span class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></span>
            <br>
            Amount: ₹3554.66
            <br>
            <span class="description">Data science is an interconnected field that involves the use of statistical and computational methods to extract insightful information and knowledge from data.</span>
            <br>
            <span class="website"><a href="https://www.geekster.in/data-science-certification-program?utm_source=google&utm_medium=ads_search&utm_campaign=Lead_Generation_dec23_datascience-keywords%7Bkeywords%7D&gad_source=1&gclid=Cj0KCQjw-r-vBhC-ARIsAGgUO2AKDHYgnBXnro1HtHGfcLzCJ0JkAHvnvfpRvMUWVHCLhl5dGcTEn18aAtWAEALw_wcB#short-courses">Learn more</a></span>
        </li>

       
        <li>
<div class = "cour">
		<div class="c1">
			<img src = "./tutorialspoint.jpeg" width = "140px" heigth = "140px"/></div>
		<div>



<strong>Tutorialspoint</strong>
            <br>
            <span class="level">Beginner</span>
            <br>
            <span class="duration"><i class="fas fa-clock"></i>6+ hours</span>
            <br>
            Rating: <span class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star-half-alt"></i></span>
            <br>
            Amount: ₹377.20
            <br>
            <span class="description">This data science with Python tutorial will help you learn the basics of Python along with different steps of data science according to the need of 2023 such as data preprocessing, data visualization, statistics, making machine learning models.</span>
            <br>
            <span class="website"><a href="https://www.tutorialspoint.com/practical-data-science-using-python/index.asp">Learn more</a></span>
        </li>

<li>
<div class = "cour">
		<div class="c1">
			<img src = "./udemy.jpg" width = "140px" heigth = "140px"/></div>
		<div>

            <strong>udemy</strong>
            <br>
            <span class="level">Beginner</span>
            <br>
            <span class="duration"><i class="fas fa-clock"></i>13hours</span>
            <br>
            Rating: <span class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="fas fa-star-half-alt"></i></span>
            <br>
            Amount: ₹599.07
            <br>
            <span class="description">In this course, you will learn about core concepts of Data Science, Exploratory Data Analysis, Statistical Methods, role of Data, Python Language, challenges of Bias, Variance and Overfitting, choosing the right Performance Metrics, Model Evaluation Techniques</span>
            <br>
            <span class="website"><a href="https://www.classcentral.com/course/udemy-fastapi-the-complete-course-105810">Learn more</a></span>
        </li>


<li>
<div class = "cour">
		<div class="c1">
			<img src = "./intellipaat.jpeg" width = "140px" heigth = "140px"/></div>
		<div>

            <strong>IntelliPaat</strong>
            <br>
            <span class="level">Beginner</span>
            <br>
            <span class="duration"><i class="fas fa-clock"></i>50hrs</span>
            <br>
            Rating: <span class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></span>
            <br>
            Amount: ₹447.44
            <br>
            <span class="description">The Data Science with Python Course will help you learn Python Programming required for data science.In this Data Science with Python Course Training, you will master the technique of how this programming is deployed for data science, working with the Pandas library for data science, data visualization, machine learning,

</span>
            <br>
            <span class="website"><a href="https://intellipaat.com/python-for-data-science-training/">Learn more</a></span>
        </li>


<li>
<div class = "cour">
		<div class="c1">
			<img src = "./udemy.jpg" width = "140px" heigth = "140px"/></div>
		<div>

            <strong>Udemy(using python)</strong>
            <br>
            <span class="level">Beginner</span>
            <br>
            <span class="duration"><i class="fas fa-clock"></i>29.5hours</span>
            <br>
            Rating: <span class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></span>
            <br>
            Amount: ₹549.36
            <br>
            <span class="description">This course covers Python for Data Science and Machine Learning in great detail and is absolutely essential for the beginner in Python.</span>
            <br>
            <span class="website"><a href="https://www.udemy.com/course/practical-data-science-using-python-md/?couponCode=ST15MT31224">Learn more</a></span>
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





