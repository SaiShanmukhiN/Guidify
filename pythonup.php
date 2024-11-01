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
    <title>Python</title>
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





    <h1>Python</h1>

    <ul>

<li>
<div class = "cour">
		<div class="c1">
			<img src = "./youtube.jpg" width = "140px" heigth = "140px"/></div>
		<div>

<strong>Programming with mosh</strong>
            <br>
            <span class="level">Beginner-Advanced</span>
            <br>
            <span class="duration"><i class="fas fa-clock"></i> Self paced</span>
            
<br>
<span class="views">37M views</span>
            <br>
            <span class="description"> Python tutorial - Python full course for beginners - Go from Zero to Hero with Python (includes machine learning & web development projects).</span>
            <br>
            <span class="website"><a href="https://www.youtube.com/watch?v=_uQrJ0TkZlc&list=PLTjRvDozrdlxj5wgH4qkvwSOdHLOCx10f" target="_blank">Learn more</a></span>
</div>
</div>
        </li>



<li>
<div class = "cour">
		<div class="c1">
			<img src = "./freecodecamp.jpg" width = "140px" heigth = "140px"/></div>
		<div>

            <strong>Freecodecamp</strong>
            <br>
            <span class="level">All levels</span>
            <br>
            <span class="duration"><i class="fas fa-clock"></i> 14 hours</span>
            <br>
            <span class="views">6.6M views</span>            <br>
            <span class="description"> This Python 3 tutorial course aims to teach everyone the basics of programming computers using Python. The course has no pre-requisites and avoids all but the simplest mathematics. </span>
            <br>
            <span class="website"><a href="https://www.youtube.com/watch?v=8DvywoWv6fI" target="_blank">Learn more</a></span>
</div>
</div>
        </li>



        <li>
<div class = "cour">
		<div class="c1">
			<img src = "./udemy.jpg" width = "140px" heigth = "140px"/></div>
		<div>

            <strong>Udemy(Learn Python for Total Beginners)</strong>
            <br>
            <span class="level">Beginner</span>
            <br>
            <span class="duration"><i class="fas fa-clock"></i> 5 hours</span>
            <br>
            Rating: <span class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>(4.5)</span>
            <br>
            <span class="description">From newbie to pro in a day with 5 brain teasing exercises and full solutions provided.
</span>
            <br>
            <span class="website"><a href="https://www.udemy.com/course/python-3-for-total-beginners/" target="_blank">Learn more</a></span>
</div>
</div>
        </li>

<li>
<div class = "cour">
		<div class="c1">
			<img src = "./python.jpg" width = "140px" heigth = "140px"/></div>
		<div>

            <strong>Learnpython</strong>
            <br>
            <span class="level">All levels</span>
            <br>
            <span class="duration"><i class="fas fa-clock"></i> 1 month</span>
            <br>
            Rating: <span class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star-half-alt"></i>(4.4)</span>
            <br>
            <span class="description">Welcome to the LearnPython.org interactive Python tutorial. Whether you are an experienced programmer or not, this website is intended for everyone who wishes to learn the Python programming language.</span>
            <br>
            <span class="website"><a href="https://www.learnpython.org/" target="_blank">Learn more</a></span>
        </div>
</div>
</li>




        
           

        


<li>
<div class = "cour">
		<div class="c1">
			<img src = "./solo.png" width = "140px" heigth = "140px"/></div>
		<div>

            <strong>Sololearn</strong>
            <br>
            <span class="level">Intermediate</span>
            <br>
            <span class="duration"><i class="fas fa-clock"></i> self paced </span>
            <br>
            Rating: <span class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>(4.6)</span>
            <br>
            <span class="description">If you already know the basics of Python and want to expand your knowledge, this is the course for you. You will learn about Python collection types, lambda functions, generators, decorators, object-oriented programming, and much more.</span>
            <br>
            <span class="website"><a href="https://www.sololearn.com/en/learn/courses/python-intermediate" target="_blank">Learn more</a></span>
</div>
</div>
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
