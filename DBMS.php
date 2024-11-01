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
    <title>DBMS</title>
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


    <h1>DBMS</h1>

    <ul>
        <li>
<div class = "cour">
		<div class="c1">
			<img src = "./udemy.jpg" width = "140px" heigth = "140px"/></div>
		<div>

            <strong>Udemy</strong>
            <br>
            <span class="level">Beginner</span>
            <br>
            <span class="duration"><i class="fas fa-clock"></i>11h 52m</span>
            <br>
            Rating: <span class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></span>
            <br>
            Amount: $5.42
            <br>
            <span class="description">Mastering the concepts of Database Management System is very important to get started with Computer Science because Database Management System is the program which is responsible for the ease with which we are able to fetch the data from the database and that is the backbone of internet today</span>
            <br>
            <span class="website"><a href="https://www.udemy.com/course/database-management-systems/?couponCode=IND21PM">Learn more</a></span>
        </li>

       
        <li>
<div class = "cour">
		<div class="c1">
			<img src = "./corsera.jpg" width = "140px" heigth = "140px"/></div>
		<div>


<strong>coursera</strong>
            <br>
            <span class="level">Beginner</span>
            <br>
            <span class="duration"><i class="fas fa-clock"></i> 27hours</span>
            <br>
            Rating: <span class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star-half-alt"></i></span>
            <br>
            Amount: $12.02
            <br>
            <span class="description">In this course, you will be introduced to databases and explore the modern ways in which they are used. Learn to distinguish between different types of database management systems then practice basic creation and data selection with the use of Structured Query Language (SQL) commands.</span>
            <br>
            <span class="website"><a href="chttps://www.coursera.org/learn/introduction-to-databases">Learn more</a></span>
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
            <span class="duration"><i class="fas fa-clock"></i>16h</span>
            <br>
            Rating: <span class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="fas fa-star-half-alt"></i></span>
            <br>
            Amount: $13.8
            <br>
            <span class="description">The database courses offered by Intellipaat focus on the complete set of tools and technologies essential to work with popular DB systems. In a world where data is churned out and stored endlessly, databases have become increasingly functional and practical with quicker data processing.</span>
            <br>
            <span class="website"><a href="https://intellipaat.com/course-cat/database/?utm_source=google&utm_medium=display&utm_campaign=p_performance-max_generic_in_secondary_new&gad_source=1&gclid=CjwKCAiAxaCvBhBaEiwAvsLmWMksum0IDmipvaebNiGbN732i57btxAQWk930EDjiDe58OsMDUecBxoCh9wQAvD_BwE">Learn more</a></span>
        </li>


<li>
<div class = "cour">
		<div class="c1">
			<img src = "./linkedin.jpg" width = "140px" heigth = "140px"/></div>
		<div>

            <strong>LinkedIn</strong>
            <br>
            <span class="level">Beginner</span>
            <br>
            <span class="duration"><i class="fas fa-clock"></i>14hrs</span>
            <br>
            Rating: <span class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></span>
            <br>
            Amount: $14.00
            <br>
            <span class="description">Database management is the practice of extracting, organizing, storing and retrieving big data,  with the goal of enabling analysts, data scientists, machine learning specialists, and business users to glean the insights they need. 
</span>
            <br>
            <span class="website"><a href="https://www.linkedin.com/learning/database-foundations-intro-to-databases?trk=learning-path&upsellOrderOrigin=default_guest_learning">Learn more</a></span>
        </li>


<li>
            <strong>UCSanDiego</strong>
            <br>
            <span class="level">Intermediate</span>
            <br>
            <span class="duration"><i class="fas fa-clock"></i>12Months</span>
            <br>
            Rating: <span class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></span>
            <br>
            Amount: $20
            <br>
            <span class="description">Database Managers are primarily responsible for creating new databases or upgrading existing databases for large or small companies..</span>
            <br>
            <span class="website"><a href="Database Managers are primarily responsible for creating new databases or upgrading existing databases for large or small companies.">Learn more</a></span>
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




