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
    <title>C++</title>
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


    <h1>C++</h1>

    <ul>
        <li>
<div class = "cour">
		<div class="c1">
			<img src = "./udemy.jpg" width = "140px" heigth = "140px"/></div>
		<div>

            <strong>Udemy(Beginning C++ Programming - From Beginner to Beyond)</strong>
            <br>
            <span class="level">Beginner</span>
            <br>
            <span class="duration"><i class="fas fa-clock"></i> 46 hours</span>
            <br>
            Rating: <span class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>(4.6)</span>
            <br>
            Amount: ₹ 3187.32
            <br>
            <span class="description">Learn to program with one of the most powerful programming languages that exists today, C++.</span>
            <br>
            <span class="website"><a href="https://www.udemy.com/course/beginning-c-plus-plus-programming/?ranMID=39197&ranEAID=jU79Zysihs4&ranSiteID=jU79Zysihs4-goV3H8nTBPwyCqEBPja9bA&LSNPUBID=jU79Zysihs4&utm_source=aff-campaign&utm_medium=udemyads" target="_blank">Learn more</a></span>
        </li>


        <li>
<div class = "cour">
		<div class="c1">
			<img src = "./educative.jpeg" width = "140px" heigth = "140px"/></div>
		<div>


<strong>educative(Learn C++: The Complete Course for Beginners)</strong>
            <br>
            <span class="level">Beginner</span>
            <br>
            <span class="duration"><i class="fas fa-clock"></i> 10 hours</span>
            <br>
            Rating: <span class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star-half-alt"></i>(4.5)</span>
            <br>
            Amount: ₹ 745.47
            <br>
            <span class="description">If you're a beginner and want to learn C++ to start your coding journey, you're in the right place. This comprehensive course starts from the absolute basics and gradually builds up to exciting real-life coding projects.
 </span>
            <br>
            <span class="website"><a href="https://www.educative.io/courses/learn-cpp-complete-course?irclickid=S5%3AzJ1TLRxyPU31wIuUY-yPHUkHzegShdQxhQo0&aff=BXjX&impactaffid=2890636&irgwc=1" target="_blank">Learn more</a></span>
        </li>


           

        <li>
<div class = "cour">
		<div class="c1">
			<img src = "./corsera.jpg" width = "140px" heigth = "140px"/></div>
		<div>
            <strong>coursera(Coding for Everyone: C and C++ Specialization)</strong>
            <br>
            <span class="level">Beginner</span>
            <br>
            <span class="duration"><i class="fas fa-clock"></i> 1 month </span>
            <br>
            Rating: <span class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star-half-alt">(4.4)</i></span>
            <br>
            Amount: ₹ 2409.54
            <br>
            <span class="description">This Specialization is intended for all programming enthusiasts, as well as beginners, computer and other scientists, and artificial intelligence enthusiasts seeking to develop their programming skills in the foundational languages of C and C++. Through the four courses — two in C, and two in C++ — you will cover the basics of programming in C and move on to the more advanced C++ semantics and syntax, which will prepare you to apply these skills to a number of higher-level problems using AI algorithms and Monte Carlo evaluation in complex games.</span>
            <br>
            <span class="website"><a href="https://www.coursera.org/specializations/coding-for-everyone?irclickid=04TUj2VkPxyIUEcVyLRCu3bZUkHzejV5dQxhQo0&irgwc=1&utm_medium=partners&utm_source=impact&utm_campaign=2890636&utm_content=b2c" target="_blank">Learn more</a></span>
        </li>


	<li>
<div class = "cour">
		<div class="c1">
			<img src = "./udemy.jpg" width = "140px" heigth = "140px"/></div>
		<div>

            <strong>Udemy(Unreal Engine 5 C++ Developer: Learn C++ & Make Video Games)</strong>
            <br>
            <span class="level">Beginner</span>
            <br>
            <span class="duration"><i class="fas fa-clock"></i> 30 hours</span>
            <br>
            Rating: <span class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>(4.7)</span>
            <br>
            Amount: ₹5879.31
            <br>
            <span class="description">Learn C++, the powerful industry-standard language from scratch. By the end of the course, you'll be very confident in the basics of coding and game development, and hungry to learn more
</span>
            <br>
            <span class="website"><a href="https://www.udemy.com/course/unrealcourse/?ranMID=39197&ranEAID=jU79Zysihs4&ranSiteID=jU79Zysihs4-cx51vfYdO7VCIzKshDRqpw&LSNPUBID=jU79Zysihs4&utm_source=aff-campaign&utm_medium=udemyads" target="_blank">Learn more</a></span>
        </li>


<li><div class = "cour">
		<div class="c1">
			<img src = "./edx.jpg" width = "140px" heigth = "140px"/></div>
		<div>

            <strong>edX(Fundamentals of C++
)</strong>
            <br>
            <span class="level">Beginner</span>
            <br>
            <span class="duration"><i class="fas fa-clock"></i> 30 hours </span>
            <br>
            Rating: <span class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i>(3.4)</span>
            <br>
            Amount: ₹ 993.90
            <br>
            <span class="description">Launch your journey as a developer with this comprehensive course that provides an in-depth learning experience with the powerful, fast, and popular object-oriented C++ programming language from scratch. You will have access to a stack of learning activities like detailed presentations, comprehensive code demo videos, quizzes, multiple coding assignments and more.</span>
            <br>
            <span class="website"><a href="https://www.edx.org/learn/c-programming/ibm-fundamentals-of-c?irclickid=WVqVdWTZAxyPRkpXA3XJ2Rp%3AUkHzen3BdQxhQo0&utm_source=affiliate&utm_medium=Hackrio&utm_campaign=Online%20Tracking%20Link_&utm_content=ONLINE_TRACKING_LINK&irgwc=1" target="_blank">Learn more</a></span>
        </li>


<li>
<div class = "cour">
		<div class="c1">
			<img src = "./udacity.jpeg" width = "140px" heigth = "140px"/></div>
		<div>
            <strong>Udacity(C++)</strong>
            <br>
            <span class="level">Intermediate</span>
            <br>
            <span class="duration"><i class="fas fa-clock"></i> 3 months</span>
            <br>
            Rating: <span class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="fas fa-star-half-alt">(4.3)</i></span>
            <br>
            Amount: ₹19879.33
            <br>
            <span class="description">Learn C++, a high-performance programming language used in the world's most exciting engineering jobs -- from self-driving cars and robotics to web browsers, media platforms, servers, and video games.</span>
            <br>
            <span class="website"><a href="https://www.udacity.com/course/c-plus-plus-nanodegree--nd213?irclickid=TISSssTLWxyPU31wIuUY-yPHUkHzei3JdQxhQo0&irgwc=1&utm_source=affiliate&utm_medium=&aff=2890636&utm_term=&utm_campaign=__&utm_content=blog%2Fcpp-course_amcid-p2Ag3Fszpo7UqZbQYoJe7&adid=786224" target="_blank">Learn more</a></span>
        </li>


<li>
<div class = "cour">
		<div class="c1">
			<img src = "./codecademy.jpeg" width = "140px" heigth = "140px"/></div>
		<div>

            <strong>Codecademy(Learn C++)</strong>
            <br>
            <span class="level">Beginner</span>
            <br>
            <span class="duration"><i class="fas fa-clock"></i> 11 hours</span>
            <br>
            Rating: <span class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>(4.4)</span>
            <br>
            Amount: ₹1573.78/month
            <br>
            <span class="description">Learn C++ — a versatile programming language that’s important for developing software, games, databases, and more.</span>
            <br>
            <span class="website"><a href="https://www.codecademy.com/learn/learn-c-plus-plus?periods=year&plan_id=proGoldAnnualV2&utm_source=pepperjam&utm_medium=affiliate&utm_term=214552&clickId=4644462296&pj_creativeid=8-12462&pj_publisherid=214552" target="_blank">Learn more</a></span>
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
