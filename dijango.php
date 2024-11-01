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
    <title>Web Development In Python</title>
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


    <h1>Django</h1>

    <ul>
        <li>
           <div class = "cour">
		<div class="c1">
			<img src = "./pluralsight.jpg" width = "140px" heigth = "140px"/></div>
		<div>

            <strong>pluralsight</strong>
            <br>
            <span class="level">Intermediate</span>
            <br>
            <span class="duration"><i class="fas fa-clock"></i> 3h 43m</span>
            <br>
            Rating: <span class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></span>
            <br>
            Amount: ₹ 746.56
            <br>
            <span class="description">This course teaches the basics of web development with the Django framework. You will learn everything you need to become a productive Python web developer.</span>
            <br>
            <span class="website"><a href="https://www.pluralsight.com/courses/django-fundamentals-update">Learn more</a></span>
        </li>

        <li>
       <div class = "cour">
		<div class="c1">
			<img src = "./linkedin.jpg" width = "140px" heigth = "140px"/></div>
		<div>


<strong>Linkedin</strong>
            <br>
            <span class="level">Intermediate</span>
            <br>
            <span class="duration"><i class="fas fa-clock"></i> 2h 6m</span>
            <br>
            Rating: <span class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star-half-alt"></i></span>
            <br>
            Amount: ₹1146.77
            <br>
            <span class="description">Django is a robust and powerful framework with a lot of moving parts. Although starting a new project can be quite easy, there is a lot to uncover. This course teaches fundamentals, such as what a framework is, what an HTTP request is, and how Django replies to HTTP requests.</span>
            <br>
            <span class="website"><a href="https://www.linkedin.com/learning/django-essential-training">Learn more</a></span>
        </li>


           

        <li>
<div class = "cour">
		<div class="c1">
			<img src = "./classcentral.jpg" width = "140px" heigth = "140px"/></div>
		<div>

            <strong>Class Central</strong>
            <br>
            <span class="level">All levels</span>
            <br>
            <span class="duration"><i class="fas fa-clock"></i> 2-3 hours</span>
            <br>
            Rating: <span class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star-half-alt"></i></span>
            <br>
            Amount: ₹997.63
            <br>
            <span class="description">Django essentials hands-on, as this course walks you through building a working system that can create, edit, and list notes per user with an authentication system.</span>
            <br>
            <span class="website"><a href="https://www.classcentral.com/course/linkedin-learning-django-essential-training-100038">Learn more</a></span>
        </li>


	<li>
          <div class = "cour">
		<div class="c1">
			<img src = "./kvch.jpeg" width = "140px" heigth = "140px"/></div>
		<div>

            <strong>KVCH</strong>
            <br>
            <span class="All Levels">Beginner to Advance</span>
            <br>
            <span class="duration"><i class="fas fa-clock"></i> 35+ hours</span>
            <br>
            Rating: <span class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></span>
            <br>
            Amount: ₹1992.77
            <br>
            <span class="description">In the Django course at KVCH, you will learn everything there is to know about the Django framework, including how to use the Django RESTful API, Django models, Django AJAX, Django jQuery, and more. You'll gain practical experience working on real-world projects while learning Python Django in this top-rated course.

</span>
            <br>
            <span class="website"><a href="https://kvch.in/python-django-certification-training">Learn more</a></span>
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
            <span class="duration"><i class="fas fa-clock"></i> 18+hours </span>
            <br>
            Rating: <span class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></span>
            <br>
            Amount: ₹ 447.44
            <br>
            <span class="description">Python is one of the worlds top programming languages, Django is the top framework for python, I think that says it all. While I can see the appeal to a more lightweight framework such as flask I think Django will be the right choice for you in most every case. </span>
            <br>
            <span class="website"><a href="https://www.udemy.com/course/python-django-2021-complete-course/?utm_source=adwords-pmax&utm_medium=udemyads&utm_campaign=PMax_la.EN_cc.INDIA&utm_content=deal4584&utm_term=._ag._kw._ad._de_c.dm._pl._ti._li_9147224.pd.&gad_source=1&gclid=Cj0KCQiAqsitBhDlARIsAGMR1Rg8G5gk_RV3-gIwYDXSDWOYMcpFiYarJVFjClYtANG371SGdJQHuJUaAiU5EALw_wcB">Learn more</a></span>
        </li>


<li>
	<div class = "cour">
		<div class="c1">
			<img src = "./edx.jpg" width = "140px" heigth = "140px"/></div>
		<div>


            <strong>edX(Develop deep knowledge)</strong>
            <br>
            <span class="level">Beginner to Advance</span>
            <br>
            <span class="duration"><i class="fas fa-clock"></i> 5 months
2 - 4 hours per week</span>
            <br>
            Rating: <span class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></span>
            <br>
            Amount: ₹ 17603.46
            <br>
            <span class="description">This series introduces Python programmers to building websites using the Django library. Across the four courses, you will learn HTML, CSS, SQL, Django, JavaScript, jQuery, and JSON Web Services. During the course, you will build online websites using Django and those working websites are graded throughout the course.</span>
            <br>
            <span class="website"><a href="https://www.edx.org/xseries/michiganx-django-for-everybody">Learn more</a></span>
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
            <span class="duration"><i class="fas fa-clock"></i> 10hour 23min</span>
            <br>
            Rating: <span class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></span>
            <br>
            Amount: ₹ 1395.35
            <br>
            <span class="description">Build & deploy rich web applications using Django. Learn the fundamentals of building a full-featured web site using Django.</span>
            <br>
            <span class="website"><a href="https://www.coursera.org/specializations/django?action=enroll">Learn more</a></span>
        </li>



<li>
<div class = "cour">
		<div class="c1">
			<img src = "./flexiple.jpeg" width = "140px" heigth = "140px"/></div>
		<div>

<strong>flexiple</strong>
            <br>
            <span class="level">Beginner</span>
            <br>
            <span class="duration"><i class="fas fa-clock"></i> 23+ hours</span>
            <br>
            Rating: <span class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star-half-alt"></i></span>
            <br>
            Amount: ₹ 7870.80
            <br>
            <span class="description">The course, Django: Getting Started, provides learners with the necessary skills to develop basic web applications using Django. The course starts with developing a simple web page to teach advanced topics such as creating an HTML page using a Django template, creating a database model to store and retrieve data, and using CSS styling and forms to enhance webpages.
</span>
            <br>
            <span class="website"><a href="https://flexiple.com/django/certifications">Learn more</a></span>
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