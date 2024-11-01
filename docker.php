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
    <title>Docker</title>
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



    <h1>Docker</h1>

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
            <span class="duration"><i class="fas fa-clock"></i> 7hours</span>
            <br>
            Rating: <span class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star-half-alt"></i></span>
            <br>
            Amount: $5.40
            <br>
            <span class="description">The Docker for DevOps course isn't just your run of the mill introduction to Docker course, you can get that info by skimming Docker's website.
This course shows you WHAT you can build with Docker and HOW to do it -- of course you'll learn the Docker basics along the way!</span>
            <br>
            <span class="website"><a href="https://www.udemy.com/course/the-docker-for-devops-course-from-development-to-production/?utm_source=adwords-pmax&utm_medium=udemyads&utm_campaign=PMax_la.EN_cc.INDIA&utm_content=deal4584&utm_term=_._ag__._kw__._ad__._de_c_._dm__._pl__._ti__._li_9147260_._pd__._&gad_source=1&gclid=Cj0KCQiA2eKtBhDcARIsAEGTG41yQdH-vlUhEGMzKwxGpCUbxcl6oNkR_rcfSo_Sd6sE4iPj0LJDisYaAvZeEALw_wcB">Learn more</a></span>
        </li>

<li><div class = "cour">
		<div class="c1">
			<img src = "./simplilearn.jpg" width = "140px" heigth = "140px"/></div>
		<div>

            <strong>simplilearn</strong>
            <br>
            <span class="level">Beginner</span>
            <br>
            <span class="duration"><i class="fas fa-clock"></i>4hrs</span>
            <br>
            Rating: <span class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="fas fa-star-half-alt"></i></span>
            <br>
            Amount: $5.90
            <br>
            <span class="description"> Docker is considered as the world’s leading platform when it comes to containerisation. 
Most of the Dockerized apps don’t require their own operating system to work on
Your Docker Containers can be fully automated
Most Importantly it’s easy to learn and implement.</span>
            <br>
            <span class="website"><a href="https://www.simplilearn.com/docker-certification-training-course-pune-city#why-do-you-need-to-learn-docker">Learn more</a></span>
        </li>


<li><div class = "cour">
		<div class="c1">
			<img src = "./corsera.jpg" width = "140px" heigth = "140px"/></div>
		<div>

            <strong>Coursera</strong>
            <br>
            <span class="level">Beginner</span>
            <br>
            <span class="duration"><i class="fas fa-clock"></i>2hours</span>
            <br>
            Rating: <span class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></span>
            <br>
            Amount: $5.90
            <br>
            <span class="description">Docker accelerates how you build, share, and run modern applications.
Docker is a tool designed to make it easier to create, deploy, and run applications by using containers.
</span>
            <br>
            <span class="website"><a href="https://www.coursera.org/projects/docker-for-absolute-beginners">Learn more</a></span>
        </li>


<li><div class = "cour">
		<div class="c1">
			<img src = "./classcentral.jpg" width = "140px" heigth = "140px"/></div>
		<div>

            <strong>class central</strong>
            <br>
            <span class="level">Intermediate</span>
            <br>
            <span class="duration"><i class="fas fa-clock"></i>5-25hours</span>
            <br>
            Rating: <span class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></span>
            <br>
            Amount: $399
            <br>
            <span class="description">The course will also look into what different parts web services consist of, such as reverse proxies, databases, etc.</span>
            <br>
            <span class="website"><a href="https://www.classcentral.com/course/helsinki-devops-with-docker-98598">Learn more</a></span>
        </li>

<li>
<div class = "cour">
		<div class="c1">
			<img src = "./cromacampus.jpeg" width = "140px" heigth = "140px"/></div>
		<div>

            <strong>CROMAcampus</strong>
            <br>
            <span class="level">Intermediate</span>
            <br>
            <span class="duration"><i class="fas fa-clock"></i>30hrs</span>
            <br>
            Rating: <span class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></span>
            <br>
            Amount: $195
            <br>
            <span class="description">"The course has a perfect balance between theory and practical material. At the end of the course, you have a working and secured web app with fully automated deployment along with an understanding of how it works. This is exactly what I wanted from the course".</span>
            <br>
            <span class="website"><a href="https://www.cromacampus.com/courses/docker-online-training-in-india/">Learn more</a></span>
        </li>

<li><div class = "cour">
		<div class="c1">
			<img src = "./staragile.png" width = "140px" heigth = "140px"/></div>
		<div>

            <strong>stargile</strong>
            <br>
            <span class="level">Intermediate</span>
            <br>
            <span class="duration"><i class="fas fa-clock"></i>36hours</span>
            <br>
            Rating: <span class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
            <br>
            Amount: $5.91
            <br>
            <span class="description">Docker is the latest standard used for building and sharing containerized applications from personal computers to the cloud. It is an open source project and written on the go. Dotcloud has developed docker which is a container engine using Linux kernel features for creating containers on the OS.</span>
            <br>
            <span class="website"><a href="https://staragile.com/in/devops/docker-certification-training">Learn more</a></span>
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




