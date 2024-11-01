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
    <title>Kubernetes</title>
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



    <h1>Kubernetes</h1>

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
            <span class="duration"><i class="fas fa-clock"></i>14hrs</span>
            <br>
            Rating: <span class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></span>
            <br>
            Amount: $5.40
            <br>
            <span class="description">Kubernetes is the leading orchestration platform today, making it an in-demand skill for anyone in DevOps or who wants to get into DevOps. If you’re currently learning about containerization, enterprise-grade solutions, and scalability, you need to know about Kubernetes.</span>
            <br>
            <span class="website"><a href="https://www.udemy.com/course/learn-devops-the-complete-kubernetes-course/?utm_source=adwords-pmax&utm_medium=udemyads&utm_campaign=PMax_la.EN_cc.INDIA&utm_content=deal4584&utm_term=_._ag__._kw__._ad__._de_c_._dm__._pl__._ti__._li_9147260_._pd__._&gad_source=1&gclid=Cj0KCQiA2eKtBhDcARIsAEGTG41Ovu4a6LtkESkLWJU9oa0-tKGMQZNZ6PHerxceSgtfpYNAbx3FZMcaAscQEALw_wcB">Learn more</a></span>
        </li>

       
        <li>
<div class = "cour">
		<div class="c1">
			<img src = "./corsera.jpg" width = "140px" heigth = "140px"/></div>
		<div>

<strong>coursera</strong>
            <br>
            <span class="level">Intermediate</span>
            <br>
            <span class="duration"><i class="fas fa-clock"></i> 6hours</span>
            <br>
            Rating: <span class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star-half-alt"></i></span>
            <br>
            Amount: $5.77
            <br>
            <span class="description"> Kubernetes courses aims to provide quality training for everyone—from individual learners seeking personal growth to corporate teams looking to upskill. For those pursuing professional advancement, skill acquisition, or even a new career path, these Kubernetes courses can be a valuable resource.</span>
            <br>
            <span class="website"><a href="https://www.coursera.org/learn/google-kubernetes-engine">Learn more</a></span>
        </li>

<li><div class = "cour">
		<div class="c1">
			<img src = "./pluralsight.jpg" width = "140px" heigth = "140px"/></div>
		<div>
            <strong>pluralsight</strong>
            <br>
            <span class="level">Intermediate</span>
            <br>
            <span class="duration"><i class="fas fa-clock"></i>11hours</span>
            <br>
            Rating: <span class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i></span>
            <br>
            Amount: $299
            <br>
            <span class="description">Kubernetes is very important for scaling your Microservice architecture by automatically deploying and managing containers as and when needed. Today, Microservice architecture and containers are in trend and Kubernetes is one of the best tools for orchestrating containers. Kubernetes has had one of the highest growth in job searches in recent times.</span>
            <br>
            <span class="website"><a href="https://www.pluralsight.com/courses/kubernetes-getting-started?clickid=35dQ39TsAxyPTjiVXp0rVUKSUkHz4p2uFzxeSo0&irgwc=1&mpid=2890636&?aid=7010a000001xAKZAA2&utm_medium=digital_affiliate&utm_campaign=2890636&utm_source=impactradius">Learn more</a></span>
        </li>


<li><div class = "cour">
		<div class="c1">
			<img src = "./intellipaat.jpeg" width = "140px" heigth = "140px"/></div>
		<div>


            <strong>intellipaat</strong>
            <br>
            <span class="level">Advanced</span>
            <br>
            <span class="duration"><i class="fas fa-clock"></i>40hrs</span>
            <br>
            Rating: <span class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
            <br>
            Amount: $273.63
            <br>
            <span class="description">Kubernetes has become a very popular name today in the container management community, and it’s one of the most in-demand skills and a must-learn tool for both DevOps Engineers and Developers. It is a tool written in Golang and it is created by Google.
</span>
            <br>
            <span class="website"><a href="https://intellipaat.com/devops-certification-training-india/">Learn more</a></span>
        </li>


<li>
<div class = "cour">
		<div class="c1">
			<img src = "./tutorialspoint.jpeg" width = "140px" heigth = "140px"/></div>
		<div>

            <strong>tutorialspoint</strong>
            <br>
            <span class="level">Beginner</span>
            <br>
            <span class="duration"><i class="fas fa-clock"></i>6hr 23min</span>
            <br>
            Rating: <span class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></span>
            <br>
            Amount: $28.87
            <br>
            <span class="description">Kubernetes (also known as “K8s”) is an open-source container orchestration platform that was first developed by Google in 2014. Google had always used Docker containers to help squeeze every ounce of performance out of their servers to power intensive online services like Google Search and YouTube..</span>
            <br>
            <span class="website"><a href="https://www.tutorialspoint.com/certification/devops-certification/index.asp?gad_source=1&gclid=Cj0KCQiA2eKtBhDcARIsAEGTG4328AEU-Px6DzsFItG9rsKG7cfOtALDW5IGA0OiEV_-zxA0C1R2310aApv9EALw_wcB">Learn more</a></span>
        </li>

<li><div class = "cour">
		<div class="c1">
			<img src = "./simplilearn.jpg" width = "140px" heigth = "140px"/></div>
		<div>

            <strong>simplilearn</strong>
            <br>
            <span class="level">All levels</span>
            <br>
            <span class="duration"><i class="fas fa-clock"></i>20hours</span>
            <br>
            Rating: <span class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star-half-alt"></i></span>
            <br>
            Amount: $324.86
            <br>
            <span class="description">There is a high demand for DevOps with Kubernetes and getting Kubernetes certification can distinguish you from other candidates. The certifications not only help you master Kubernetes but also increase your chance of getting a high-salary job.
</span>
            <br>
            <span class="website"><a href="https://www.simplilearn.com/certified-kubernetes-administrator-training-course-bangalore-city">Learn more</a></span>
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




