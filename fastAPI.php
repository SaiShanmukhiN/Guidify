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


    <h1>FastAPI</h1>

    <ul>
        <li>
            <div class = "cour">
		<div class="c1">
			<img src = "./udemy.jpg" width = "140px" heigth = "140px"/></div>
		<div>

            <strong>Udemy</strong>
            <br>
            <span class="level">Beginner+Advanced</span>
            <br>
            <span class="duration"><i class="fas fa-clock"></i>17h 9m</span>
            <br>
            Rating: <span class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></span>
            <br>
            Amount: ₹3487.55
            <br>
            <span class="description">FastAPI and Python are two of the hottest technologies in the market for building high performing APIs.</span>
            <br>
            <span class="website"><a href="https://www.udemy.com/course/fastapi-the-complete-course/">Learn more</a></span>
        </li>

       
        <li>
<div class = "cour">
		<div class="c1">
			<img src = "./codedamn.jpeg" width = "140px" heigth = "140px"/></div>
		<div>


<strong>codedamn</strong>
            <br>
            <span class="level">Beginner</span>
            <br>
            <span class="duration"><i class="fas fa-clock"></i> 4h 46m</span>
            <br>
            Rating: <span class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star-half-alt"></i></span>
            <br>
            Amount: ₹ 995.97
            <br>
            <span class="description">This course is not organized in a conventional way; instead, it adopts the Test-Driven Development (TDD) principle, which means we think through the code before writing it - a valuable skill on its own.</span>
            <br>
            <span class="website"><a href="https://codedamn.com/learn/fastapi-tutorial">Learn more</a></span>
        </li>

<li>
    <div class = "cour">
		<div class="c1">
			<img src = "./classcentral.jpg" width = "140px" heigth = "140px"/></div>
		<div>

            <strong>class central</strong>
            <br>
            <span class="level">Beginner</span>
            <br>
            <span class="duration"><i class="fas fa-clock"></i>17h 10m</span>
            <br>
            Rating: <span class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="fas fa-star-half-alt"></i></span>
            <br>
            Amount:₹ 1145.12
            <br>
            <span class="description">FastAPIand Python are two of the hottest technologies in the market for building high performing APIs.
By the end of this course, you will have built production ready RESTful APIs, a production ready Full Stack application, full authentication/ authorization, setup production ready databases, and deployed your FastAPIapplication so the world can use YOURapp..</span>
            <br>
            <span class="website"><a href="https://www.classcentral.com/course/udemy-fastapi-the-complete-course-105810">Learn more</a></span>
        </li>


<li>
 <div class = "cour">
		<div class="c1">
			<img src = "./noble.jpg" width = "140px" heigth = "140px"/></div>
		<div>

            <strong>NobleProg</strong>
            <br>
            <span class="level">Beginner</span>
            <br>
            <span class="duration"><i class="fas fa-clock"></i>14hrs</span>
            <br>
            Rating: <span class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
            <br>
            Amount: ₹447.44
            <br>
            <span class="description">FastAPI training is available as "online live training" or "onsite live training". Online live training (aka "remote live training") is carried out by way of an interactive, remote desktop. Onsite live FastAPI training can be carried out locally on customer premises in India or in NobleProg corporate training centers in India.

</span>
            <br>
            <span class="website"><a href="https://www.nobleprog.in/fastapi-training">Learn more</a></span>
        </li>


<li> 
    <div class = "cour">
		<div class="c1">
			<img src = "./udemy.jpg" width = "140px" heigth = "140px"/></div>
		<div>

            <strong>Udemy(Complete FastAPI masterclass from scratch)</strong>
            <br>
            <span class="level">Beginner</span>
            <br>
            <span class="duration"><i class="fas fa-clock"></i>21 hours</span>
            <br>
            Rating: <span class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></span>
            <br>
            Amount: ₹447.44
            <br>
            <span class="description">FastAPI is one of the fastest growing API development frameworks available. It is easy to use and lightweight. In addition it provides some unique benefits such as automatic Swagger docs generation and modern, open standards of development.</span>
            <br>
            <span class="website"><a href="https://www.udemy.com/course/completefastapi/">Learn more</a></span>
        </li>

<li>
<div class = "cour">
		<div class="c1">
			<img src = "./realdsicount.jpg" width = "140px" heigth = "140px"/></div>
		<div>

            <strong>real.discount</strong>
            <br>
            <span class="level">Intermediate</span>
            <br>
            <span class="duration"><i class="fas fa-clock"></i>2hours</span>
            <br>
            Rating: <span class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></span>
            <br>
            Amount: ₹1657.19
            <br>
            <span class="description">FastAPI is one of the fastest growing API development frameworks available. It is easy to use and lightweight. In addition it provides some unique benefits such as automatic Swagger docs generation and modern, open standards of development.</span>
            <br>
            <span class="website"><a href="https://www.real.discount/offer/fastapi-course-30789/">Learn more</a></span>
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