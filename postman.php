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
    <title>Postman</title>
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
        .cour{
            display: flex;
        }
        .c1{
            padding: 20px;
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


    <h1>Postman</h1>

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
            <span class="duration"><i class="fas fa-clock"></i>3h 3m</span>
            <br>
            Rating: <span class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="fas fa-star-half-alt"></i></span>
            <br>
            Amount: ₹1493.95
            <br>
            <span class="description">Postman is a tool used by millions of developers around the world to document, test and interact with APIs. This course will show you the basics of postman and take you from making simple requests all the way to advanced topics such as scripting and mocking out an API.</span>
            <br>
            <span class="website"><a href="https://www.udemy.com/course/fundamentals-of-postman/?utm_source=adwords-pmax&utm_medium=udemyads&utm_campaign=PMax_la.EN_cc.INDIA&utm_content=deal4584&utm_term=_._ag__._kw__._ad__._de_c_._dm__._pl__._ti__._li_9147260_._pd__._&gad_source=1&gclid=CjwKCAiA8NKtBhBtEiwAq5aX2O-hkkmjXCUQE9s9BOfsf_tEbnPtRn7VvjXPZOI2sUv-IdDcq_JhuhoCS9IQAvD_BwE">Learn more</a></span>
        </li>


<li><div class = "cour">
		<div class="c1">
			<img src = "classcentral.jpg" width = "140px" heigth = "140px"/></div>
		<div>

            <strong>Class Central</strong>
            <br>
            <span class="level">Beginner</span>
            <br>
            <span class="duration"><i class="fas fa-clock"></i>1-2 hours</span>
            <br>
            Rating: <span class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></span>
            <br>
            Amount: ₹ 995.97
            <br>
            <span class="description">Postman's features simplify each step of building an API and streamline collaboration so you can create better APIs faster

</span>
            <br>
            <span class="website"><a href="https://www.classcentral.com/course/start-your-api-testing-journey-with-postman-tool-25371">Learn more</a></span>
        </li>



<li>
<div class = "cour">
		<div class="c1">
			<img src = "uplatz.jpeg" width = "140px" heigth = "140px"/></div>
		<div>

            <strong>Uplatz</strong>
            <br>
            <span class="level">Beginner</span>
            <br>
            <span class="duration"><i class="fas fa-clock"></i>10hours</span>
            <br>
            Rating: <span class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="fas fa-star"></i></span>
            <br>
            Amount: ₹1196.49
            <br>
            <span class="description">This course will show you the fundamentals of Postman, how you can issue requests, create automated API tests, and even document your API with Postman.</span>
            <br>
            <span class="website"><a href="https://training.uplatz.com/online-it-course.php?id=postman-api-377">Learn more</a></span>
        </li>

 <li>
<div class = "cour">
		<div class="c1">
			<img src = "./udemy.jpg" width = "140px" heigth = "140px"/></div>
		<div>


<strong>Udemy(Postman:The Complete Guide)</strong>
            <br>
            <span class="level">Beginner</span>
            <br>
            <span class="duration"><i class="fas fa-clock"></i>21.5hours</span>
            <br>
            Rating: <span class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star-half-alt"></i></span>
            <br>
            Amount: ₹447.44
            <br>
            <span class="description">This is where the Postman App comes in! Postman allows you very quickly to create a request with the required HTTP method and parameters, submit the request and easily inspect the results.</span>
            <br>
            <span class="website"><a href="https://www.udemy.com/course/postman-the-complete-guide/?gad_source=1&gclid=CjwKCAiA8NKtBhBtEiwAq5aX2AicHlhkdTXgz_geoG9zp2ywlOs7BDFwQFgikn22My3mPfl8B2j86hoCdGwQAvD_BwE&matchtype=b&utm_campaign=LongTail_la.EN_cc.INDIA&utm_content=deal4584&utm_medium=udemyads&utm_source=adwords&utm_term=_._ag_78279331359_._ad_670113498405_._kw_postman+tutorial_._de_c_._dm__._pl__._ti_aud-1738475842996%3Akwd-1934757245687_._li_9147260_._pd__._">Learn more</a></span>
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
			<img src = "#" width = "140px" heigth = "140px"/></div>
		<div>

            <strong>CromaCampus</strong>
            <br>
            <span class="level">All levels</span>
            <br>
            <span class="duration"><i class="fas fa-clock"></i>30hours</span>
            <br>
            Rating: <span class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></span>
            <br>
            Amount: ₹ 1658.84
            <br>
            <span class="description">Postman is an API platform for building and using APIs. Postman simplifies each step of the API lifecycle and streamlines collaboration so you can create better APIs—faster.

</span>
            <br>
            <span class="website"><a href="https://www.cromacampus.com/courses/postman-api-certification-training/">Learn more</a></span>
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





