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
    <title>C language</title>
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

            <strong>Udemy(C++ Tutorial for Complete Beginners)</strong>
            <br>
            <span class="level">Intermediate</span>
            <br>
            <span class="duration"><i class="fas fa-clock"></i> 17 hours </span>
            <br>
            Rating: <span class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i>(4.4)</span>
            <br>
            <span class="description">This course teaches you the powerful, fast and popular C++ programming language from scratch, assuming only basic computer knowledge.</span>
            <br>
            <span class="website"><a href="https://www.udemy.com/course/free-learn-c-tutorial-beginners/?ranMID=39197&ranEAID=PGgEE4IBqrs&ranSiteID=PGgEE4IBqrs-YspX1vC6JKHvmeBRUskv7Q&LSNPUBID=PGgEE4IBqrs&utm_source=aff-campaign&utm_medium=udemyads" target="_blank">Learn more</a></span>
</div>
</div>
        </li>




        <li>
<div class = "cour">
		<div class="c1">
			<img src = "./corsera.jpg" width = "140px" heigth = "140px"/></div>
		<div>

            <strong>Coursera</strong>
            <br>
            <span class="level">Beginner</span>
            <br>
            <span class="duration"><i class="fas fa-clock"></i> 1 month</span>
            <br>
            Rating: <span class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i>(4.4)</span>
            <br>
            <span class="description">Beginner to Programmer — Learn to Code in C & C++. Gain a deep understanding of computer programming by learning to code, debug, and solve complex problems with C and C++.</span>
            <br>
            <span class="website"><a href="https://www.coursera.org/specializations/coding-for-everyone" target="_blank">Learn more</a></span>
</div>
</div>
        </li>

<li>
<div class = "cour">
		<div class="c1">
			<img src = "./codecademy.jpeg" width = "140px" heigth = "140px"/></div>
		<div>

            <strong>Codeacademy</strong>
            <br>
            <span class="level">Beginner</span>
            <br>
            <span class="duration"><i class="fas fa-clock"></i> 11 hours</span>
            <br>
Rating: <span class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i>(4.4)</span>
            <br>

            <span class="description">Learn C++ — a versatile programming language that’s important for developing software, games, databases, and more.
</span>
            <br>
            <span class="website"><a href="https://www.codecademy.com/learn/learn-c-plus-plus" target="_blank">Learn more</a></span>
</div>
</div>
        </li>


<li>
<div class = "cour">
		<div class="c1">
			<img src = "./udacity.jpeg" width = "140px" heigth = "140px"/></div>
		<div>

            <strong>Udacity</strong>
            <br>
            <span class="level">Intermediate</span>
            <br>
            <span class="duration"><i class="fas fa-clock"></i> 3 months</span>
            <br>
            <span class="description">
Learn C++, a high-performance programming language used in the world's most exciting engineering jobs -- from self-driving cars and robotics to web browsers, media platforms, servers, and video games.

</span>
            <br>
            <span class="website"><a href="https://www.udacity.com/course/c-plus-plus-nanodegree--nd213?irclickid=TISSssTLWxyPU31wIuUY-yPHUkHyHDU9dQxHyQ0&irgwc=1&utm_source=affiliate&utm_medium=&aff=1962309&utm_term=&utm_campaign=__&utm_content=&adid=786224" target="_blank">Learn more</a></span>
        </div>
</div>
</li>

        <li>
<div class = "cour">
		<div class="c1">
			<img src = "./geeksforgeeks.jpg" width = "140px" heigth = "140px"/></div>
		<div>

<strong>Geeks for Geeks</strong>
            <br>
            <span class="level">Beginner</span>
            <br>
            <span class="duration"><i class="fas fa-clock"></i> 6 weeks</span>
           
            <br>
            <span class="description">Master the basics of the C++ foundation and kickstart your learning journey for FREE! Learn about structures, arrays, pointers, vectors, stacks, queues & more and brush up on these subjects with practice contests.</span>
            <br>
            <span class="website"><a href="https://www.geeksforgeeks.org/courses/fork-cpp?utm_source=geeksforgeeks&utm_medium=gblog+best_cpp_courses&utm_campaign=fork_cpp_self_paced+promotion" target="_blank">Learn more</a></span>
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
