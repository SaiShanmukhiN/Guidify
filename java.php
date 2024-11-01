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
    <title>Java</title>
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



    <h1>Java</h1>

    <ul>
        <li>
<div class = "cour">
		<div class="c1">
			<img src = "./educative.jpeg" width = "140px" heigth = "140px"/></div>
		<div>
            <strong>Educative(The Complete Java Crash Course)</strong>
            <br>
            <span class="level">Intermediate</span>
            <br>
            <span class="duration"><i class="fas fa-clock"></i> 6 hours</span>
            <br>
            Rating: <span class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>(4.7)</span>
            <br>
            Amount: ₹ 868.06
            <br>
            <span class="description">Looking to jump into a new programming language? Java is an easy-to-use, highly portable and ubiquitous language that is used for a variety of development purposes such as Android applications, desktop applications, and website backend systems. Designed for programmers who are already familiar with coding in languages such as C++, Python, or other similar languages, this course articulates any Java-specific details that programmers need to know to get acquainted with the language and also highlights similarities and differences between Java and other languages through multiple coding examples.</span>
            <br>
            <span class="website"><a href="https://www.educative.io/courses/the-complete-java-crash-course" target="_blank">Learn more</a></span>
        </li>


        <li><div class = "cour">
		<div class="c1">
			<img src = "./udemy.jpg" width = "140px" heigth = "140px"/></div>
		<div>



<strong>Udemy(Java Foundations: The Complete Course with Java 21 Updates)</strong>
            <br>
            <span class="level">Beginner</span>
            <br>
            <span class="duration"><i class="fas fa-clock"></i> 89h 46m</span>
            <br>
            Rating: <span class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star-half-alt"></i>(4.7)</span>
            <br>
            Amount: ₹ 447.48
            <br>
            <span class="description">Covers Java 21 & Earlier, Streams/Lambdas, Regex, TDD/Testing, Optionals, JDBC/SQL Intro to Spring & More Using Intel </span>
            <br>
            <span class="website"><a href="https://www.udemy.com/course/neutrino-java-foundations/" target="_blank">Learn more</a></span>
        </li>


           

        <li><div class = "cour">
		<div class="c1">
			<img src = "./corsera.jpg" width = "140px" heigth = "140px"/></div>
		<div>
            <strong>coursera(Object Oriented Programming in Java Specialization)</strong>
            <br>
            <span class="level">Beginner</span>
            <br>
            <span class="duration"><i class="fas fa-clock"></i> 6 months at 10 hours a week</span>
            <br>
            Rating: <span class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star-half-alt"></i>(4.6)</span>
            <br>
            Amount: ₹ 4901.91
            <br>
            <span class="description">Grow Your Portfolio as a Software Engineer. Learn about Object Oriented Design in four project-based courses.</span>
            <br>
            <span class="website"><a href="https://www.coursera.org/specializations/object-oriented-programming?irclickid=04TUj2VkPxyIUEcVyLRCu3bZUkHzqY0RdS-WVo0&irgwc=1&utm_medium=partners&utm_source=impact&utm_campaign=2890636&utm_content=b2c" target="_blank">Learn more</a></span>
        </li>


	<li><div class = "cour">
		<div class="c1">
			<img src = "./takelessons.jpg" width = "140px" heigth = "140px"/></div>
		<div>


            <strong>Takelessons(Java programming course)</strong>
            <br>
            <span class="level">All levels</span>
            <br>
            <span class="duration"><i class="fas fa-clock"></i> 1 hour</span>
            <br>
            Rating: <span class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>(4.0)</span>
            <br>
            Amount: ₹ 695.78
            <br>
            <span class="description">Learn to develop desktop Application and Complete your Projects and Assignments using Java
</span>
            <br>
            <span class="website"><a href="https://takelessons.com/en-in/profile/shweta-b7?service=java&online=1&sort=1&utm_source=bing&utm_medium=mltint_answer&utm_campaign=mltint&utm_term=learn%20mixed-learning%20java&utm_trigger=domaingraphclassifier&utm_query=paid%20java%20courses&utm_intentType=Other&utm_content=multintnt%20title&muid=2E1F4511A4BE60972965542FA5496152&utm_region=IN&utm_position=Pole" target="_blank">Learn more</a></span>
        </li>


<li><div class = "cour">
		<div class="c1">
			<img src = "./udacity.jpeg" width = "140px" heigth = "140px"/></div>
		<div>

            <strong>UDACITY(Java Programming)</strong>
            <br>
            <span class="level">Intermediate</span>
            <br>
            <span class="duration"><i class="fas fa-clock"></i> 3 months </span>
            <br>
            Rating: <span class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>(4.4)</span>
            <br>
            Amount: ₹20427.67/month(Unlimited access to our learning catalog)
            <br>
            <span class="description">This Nanodegree program is intended to elevate your Java abilities and teach you the fundamental skills used by Java developers to design, code, test and deploy cutting-edge Java software.</span>
            <br>
            <span class="website"><a href="https://www.udacity.com/course/java-programming-nanodegree--nd079?irclickid=TISSssTLWxyPU31wIuUY-yPHUkHzqdQFdS-WVo0&irgwc=1&utm_source=affiliate&utm_medium=&aff=2890636&utm_term=&utm_campaign=&utm_content=blog%2Fbest-java-courses_amcid-zI7g6PoVrpOgQmrA2EIAl&adid=788202#plans" target="_blank">Learn more</a></span>
        </li>


<li><div class = "cour">
		<div class="c1">
			<img src = "./linkedin.jpg" width = "140px" heigth = "140px"/></div>
		<div>

            <strong>Linkedin learning(Java: Generic classes)</strong>
            <br>
            <span class="level">Intermediate</span>
            <br>
            <span class="duration"><i class="fas fa-clock"></i> 2h 38min</span>
            <br>
            Rating: <span class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt">(4.7)</i></span>
            <br>
            Amount: ₹1145.55
            <br>
            <span class="description">Generics in Java are popular and widely used in all kinds of project development—Core Java projects, web application projects, web services, and more. It’s an indispensable capability in the Java language and provides the power of eliminating errors at compile time itself instead of resulting in runtime problems. In this course, Ketkee Aryamane goes hands-on with generics in Java. She starts with the fundamental concepts, terms, and rules and naming conventions in generics, then covers generic classes and methods. Ketkee then takes a deeper dive into generics, covering topics like generic class hierarchies, wildcard arguments, and restrictions on generics. If you’re a developer looking to save time by eliminating runtime issues and making more readable code, join Ketkee in this course.</span>
            <br>
            <span class="website"><a href="https://www.linkedin.com/learning/java-generic-classes-14576260" target="_blank">Learn more</a></span>
        </li>


<li><div class = "cour">
		<div class="c1">
			<img src = "./codecademy.jpeg" width = "140px" heigth = "140px"/></div>
		<div>

            <strong>Codecademy(Build Basic Android Apps with Java)</strong>
            <br>
            <span class="level">Beginner</span>
            <br>
            <span class="duration"><i class="fas fa-clock"></i> 16 hours</span>
            <br>
            Rating: <span class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>(4.6)</span>
            <br>
            Amount: ₹1573.78/month
            <br>
            <span class="description">By the end of this Skill Path, you will have created your very own fully functional quiz game for Android Devices with Java. Includes Java, XML, Android Studio, Wireframing, Layout Editor, Material Design, and more.</span>
            <br>
            <span class="website"><a href="https://www.codecademy.com/learn/paths/introduction-to-android-with-java" target="_blank">Learn more</a></span>
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