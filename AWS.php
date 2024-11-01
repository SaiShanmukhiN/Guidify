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
    }.cour{
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



    <h1>AWS</h1>

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

<li>
<div class = "cour">
		<div class="c1">
			<img src = "./udemy.jpg" width = "140px" heigth = "140px"/></div>
		<div>

            <strong>Udemy</strong>
            <br>
            <span class="level">Beginner</span>
            <br>
            <span class="duration"><i class="fas fa-clock"></i>18hrs</span>
            <br>
            Rating: <span class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="fas fa-star-half-alt"></i></span>
            <br>
            Amount: $5.40
            <br>
            <span class="description"> AWS becoming the centerpiece of today's modern IT architectures, I have decided it is time for students to learn how to be an AWS DevOps Engineer Professional.</span>
            <br>
            <span class="website"><a href="https://www.udemy.com/course/aws-certified-devops-engineer-professional-hands-on/?utm_source=adwords-pmax&utm_medium=udemyads&utm_campaign=PMax_la.EN_cc.INDIA&utm_content=deal4584&utm_term=_._ag__._kw__._ad__._de_c_._dm__._pl__._ti__._li_9147224_._pd__._&gad_source=1&gclid=CjwKCAiAk9itBhASEiwA1my_67VMRBgauBV-BG1rKwS7pUMKcXjVsJHoEZFXAGCqDPCjK4yS5pDLqhoCu54QAvD_BwE">Learn more</a></span>
        </li>


<li><div class = "cour">
		<div class="c1">
			<img src = "./edureka.jpg" width = "140px" heigth = "140px"/></div>
		<div>

            <strong>edureka</strong>
            <br>
            <span class="level">All Levels</span>
            <br>
            <span class="duration"><i class="fas fa-clock"></i>3+hrs(4.2 weeks)</span>
            <br>
            Rating: <span class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
            <br>
            Amount: $85.20
            <br>
            <span class="description">AWS DevOps is an effective solution that offers unmatched technical potential for growth, and its implementation is one of the best ways to oversee teams working on a variety of projects.

</span>
            <br>
            <span class="website"><a href="https://www.edureka.co/aws-certified-devops-training">Learn more</a></span>
        </li>


<li><div class = "cour">
		<div class="c1">
			<img src = "./intellipaat.jpeg" width = "140px" heigth = "140px"/></div>
		<div>

            <strong>intellipaat</strong>
            <br>
            <span class="level">Advanced</span>
            <br>
            <span class="duration"><i class="fas fa-clock"></i>2months</span>
            <br>
            Rating: <span class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
            <br>
            Amount: $399
            <br>
            <span class="description">DevOps Certification by Tutorials Point provides you with the required expertise and skills to excel in the DevOps field. The curriculum is designed to give in-depth knowledge of crucial DevOps tools.</span>
            <br>
            <span class="website"><a href="https://intellipaat.com/devops-certification-training/">Learn more</a></span>
        </li>

<li><div class = "cour">
		<div class="c1">
			<img src = "./udemy.jpg" width = "140px" heigth = "140px"/></div>
		<div>

            <strong>Udemy(Mastering AWS DevOps)</strong>
            <br>
            <span class="level">Intermediate</span>
            <br>
            <span class="duration"><i class="fas fa-clock"></i>16h 5m</span>
            <br>
            Rating: <span class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></span>
            <br>
            Amount: $5.40
            <br>
            <span class="description">Mastering AWS DevOps - For Cloud Engineers is an extensive and practical guide that unravels the complexities of Amazon Web Services (AWS) and its suite of Developer Tools.</span>
            <br>
            <span class="website"><a href="https://www.udemy.com/course/mastering-aws-devops-for-cloud-engineers/">Learn more</a></span>
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





