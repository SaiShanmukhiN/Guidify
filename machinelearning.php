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
    <title>Machine learning</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"> <!-- Font Awesome for icons -->
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 20px;
            background-color:#f9f9f9;
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




    <h1>Machine Learning</h1>

    <ul>
        <li>
<div class = "cour">
		<div class="c1">
			<img src = "./corsera.jpg" width = "140px" heigth = "140px"/></div>
		<div>

            <strong>coursera</strong>
            <br>
            <span class="level">Beginner</span>
            <br>
            <span class="duration"><i class="fas fa-clock"></i>2months 10hrs</span>
            <br>
            Rating: <span class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></span>
            <br>
            Amount: ₹ 3554.66
            <br>
            <span class="description">The Machine Learning Specialization is a foundational online program created in collaboration between DeepLearning.AI and Stanford Online.</span>
            <br>
            <span class="website"><a href="https://www.coursera.org/specializations/machine-learning-introduction">Learn more</a></span>
        </li>

       
        <li><div class = "cour">
		<div class="c1">
			<img src = "./amity.png" width = "140px" heigth = "140px"/></div>
		<div>


<strong>Amity Online</strong>
            <br>
            <span class="level">Beginner</span>
            <br>
            <span class="duration"><i class="fas fa-clock"></i>8months</span>
            <br>
            Rating: <span class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></span>
            <br>
            Amount: ₹995.97
            <br>
            <span class="description"> This specialization is designed for those who want to gain hands-on experience in solving real-life problems using machine learning and deep learning.</span>
            <br>
            <span class="website"><a href="https://amityonline.com/lp/certificate-in-ml-with-gai/?utm_source=CERT-G&utm_campaign=Generic-Search-Phrase-Cert-AUO-111223&utm_medium=ML-AI&utm_adgroup=155261723966&utm_keyword=ai%20courses%20online&campaignid=20848047495&adgroupid=155261723966&creative=684301750001&matchtype=p&network=g&device=c&gad_source=1&gclid=Cj0KCQjw-r-vBhC-ARIsAGgUO2B3Dxtr51WCHrf664k--OmIll0chUDIi7ra3-hwp3m9Sg_T5Y_lbegaAv_MEALw_wcB">Learn more</a></span>
        </li>

<li><div class = "cour">
		<div class="c1">
			<img src = "./cloudxlab.jpeg" width = "140px" heigth = "140px"/></div>
		<div>

            <strong>cloudxlab</strong>
            <br>
            <span class="level">Beginner</span>
            <br>
            <span class="duration"><i class="fas fa-clock"></i>170+hrs</span>
            <br>
            Rating: <span class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="fas fa-star-half-alt"></i></span>
            <br>
            Amount: ₹498.81
            <br>
            <span class="description">Machine Learning is designed for those who want to gain hands-on experience in solving real-life problems using machine learning and deep learning. After finishing this specialization, you will find creative ways to apply your learnings to your work.</span>
            <br>
            <span class="website"><a href="https://cloudxlab.com/course/specialization/1/machine-learning-specialization?utm_source=google&utm_campaign=17600962042&utm_medium=g&utm_content=&utm_term=141214320387&utm_creative=675307797056&gad_source=1&gclid=Cj0KCQjw-r-vBhC-ARIsAGgUO2DwkP2AYShrKcuiFfIbN2_F1BWVJlHmeA8Pfvo3mZ9XKYRz92LUVBAaAjupEALw_wcB">Learn more</a></span>
        </li>


<li><div class = "cour">
		<div class="c1">
			<img src = "./corsera.jpg" width = "140px" heigth = "140px"/></div>
		<div>

            <strong>Coursera(ML With Python)</strong>
            <br>
            <span class="level">Intermediate</span>
            <br>
            <span class="duration"><i class="fas fa-clock"></i>12hrs</span>
            <br>
            Rating: <span class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></span>
            <br>
            Amount: ₹452.41
            <br>
            <span class="description">Machine Learning (ML) by using Python! This course is for you whether you want to advance your Data Science career or get started in Machine Learning and Deep Learning.  

</span>
            <br>
            <span class="website"><a href="https://www.coursera.org/learn/machine-learning-with-python">Learn more</a></span>
        </li>



<li>
<div class = "cour">
		<div class="c1">
			<img src = "./udemy.jpg" width = "140px" heigth = "140px"/></div>
		<div>

            <strong>udemy</strong>
            <br>
            <span class="level">Intermediate</span>
            <br>
            <span class="duration"><i class="fas fa-clock"></i>44hours</span>
            <br>
            Rating: <span class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></span>
            <br>
            Amount: ₹599.07
            <br>
            <span class="description">This course is designed for the student who already knows some Python and is ready to dive deeper into using those Python skills for Data Science and Machine Learning.</span>
            <br>
            <span class="website"><a href="https://www.udemy.com/course/python-for-machine-learning-data-science-masterclass/?couponCode=ST15MT31224">Learn more</a></span>
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





