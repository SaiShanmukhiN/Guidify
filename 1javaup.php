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
			<img src = "./simplilearn.jpg" width = "140px" heigth = "140px"/></div>
		<div>

            <strong>Simplilearn(Java course)</strong>
            <br>
            <span class="level">Beginner</span>
            <br>
            <span class="duration"><i class="fas fa-clock"></i> 9 hours</span>
            <br>
            Rating: <span class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>(4.5)</span>
            <br>
            <span class="description">This advanced Java Certification Training is designed to guide you through the concepts of Java from introductory techniques to advanced programming skills. This Java course will also provide you with the knowledge of Core Java 8, operators, arrays, loops, methods, and constructors while giving you hands-on experience in JDBC and JUnit framework.</span>
            <br>
            <span class="website"><a href="https://www.simplilearn.com/mobile-and-software-development/java-javaee-soa-development-training" target="_blank">Learn more</a></span>
</div>
</div>
        </li>

<li>
<div class = "cour">
		<div class="c1">
			<img src = "./udemy.jpg" width = "140px" heigth = "140px"/></div>
		<div>

            <strong>Udemy(Java Tutorial for Complete Beginners)</strong>
            <br>
            <span class="level">Beginner</span>
            <br>
            <span class="duration"><i class="fas fa-clock"></i> 16 hours</span>
            <br>
            Rating: <span class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star-half-alt"></i>(4.4)</span>
            <br>
            <span class="description">Learn to program in the Java programming language. This course assumes no prior programming knowledge, just a desire to learn to program.</span>
            <br>
            <span class="website"><a href="https://www.udemy.com/course/java-tutorial/" target="_blank">Learn more</a></span>
        </div>
</div>
</li>


<li>
<div class = "cour">
		<div class="c1">
			<img src = "./w3.jpg" width = "140px" heigth = "140px"/></div>
		<div>

            <strong>W3schools(Java Tutorial)</strong>
            <br>
            <span class="level">All levels</span>
            <br>
            <span class="duration"><i class="fas fa-clock"></i> Self paced</span>
            <br>
            Rating: <span class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>(4.7)</span>
            <br>
            <span class="description"> Designed for programmers who are already familiar with coding in languages such as C++, Python, or other similar languages, this course articulates any Java-specific details that programmers need to know to get acquainted with the language and also highlights similarities and differences between Java and other languages through multiple coding examples.
</span>
            <br>
            <span class="website"><a href="https://www.w3schools.com/java/default.asp" target="_blank">Learn more</a></span>
</div>
</div>
        </li>



        <li>
<div class = "cour">
		<div class="c1">
			<img src = "./freecodecamp.jpg" width = "140px" heigth = "140px"/></div>
		<div>

<strong>Youtube(freecodecamp)</strong>
            <br>
            <span class="level">Beginner</span>
            <br>
            <span class="duration"><i class="fas fa-clock"></i> 3.75 hours</span>
            
<br>
<span class="views">2.25M+ views</span>
            <br>
            <span class="description">This is one of the best Java classes online that happens to be completely free, making it a great way to get started as a total beginner. In this course, you’ll dig into various Java programming fundamentals, like variables & data types, basic operators, input and scanners, conditionals, and booleans.
You’ll also cover some more advanced Java concepts like inheritance, overloading methods, object comparisons, inner classes, and interfaces. It’s fair to say that’s a lot of content in a short span of time, and it’s all free, making this a contender for the best Java tutorial. </span>
            <br>
            <span class="website"><a href="https://www.youtube.com/watch?v=GoXwIVyNvX0" target="_blank">Learn more</a></span>
</div>
</div>
        </li>


           

        


<li>
<div class = "cour">
		<div class="c1">
			<img src = "./udemy.jpg" width = "140px" heigth = "140px"/></div>
		<div>

            <strong>Udemy(Java Multithreading)</strong>
            <br>
            <span class="level">All levels</span>
            <br>
            <span class="duration"><i class="fas fa-clock"></i> 3 hours </span>
            <br>
            Rating: <span class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>(4.6)</span>
            <br>
            <span class="description">Discover how to write effective multi-threaded code in Java; learn why problems can occur with Java multithreading and how to fix those problems.</span>
            <br>
            <span class="website"><a href="https://www.udemy.com/course/java-multithreading/" target="_blank">Learn more</a></span>
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
