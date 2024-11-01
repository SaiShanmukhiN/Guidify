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
    <title>PostgreSQL</title>
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


    <h1>PostgreSQL</h1>

    <ul>
        <li>
            <strong>Coursera</strong>
            <br>
            <span class="level">Intermediate</span>
            <br>
            <span class="duration"><i class="fas fa-clock"></i>10+hours</span>
            <br>
            Rating: <span class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></span>
            <br>
            Amount: $42.09
            <br>
            <span class="description">This course series utilizes a custom autograding environment for an authentic set of graded and practice assignments, including: creating and manipulating tables, designing data models, constructing advanced queries, techniques for working with text in databases, including regular expressions, and more.</span>
            <br>
            <span class="website"><a href="https://www.coursera.org/specializations/postgresql-for-everybody?action=enroll">Learn more</a></span>
        </li>

       
        <li>

<strong>Aiven</strong>
            <br>
            <span class="level">Beginner</span>
            <br>
            <span class="duration"><i class="fas fa-clock"></i> 4h 46m</span>
            <br>
            Rating: <span class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></span>
            <br>
            Amount: $12.02
            <br>
            <span class="description">Aiven’s hosted and managed-for-you PostgreSQL®, you can spin up your clusters with a couple of clicks — so you can stop burning hours managing DBs and get back to focusing on your code.</span>
            <br>
            <span class="website"><a href="https://aiven.io/postgresql?utm_source=google&utm_medium=cpc&utm_campaign=postgresql_apac-india_en_phrase&utm_content=postgresql_service_rsa&utm_prog=alw&utm_cmp=h35kk1&creative=682807800237&keyword=postgresql%20service&matchtype=p&network=g&device=c&gad_source=1&gclid=CjwKCAjw17qvBhBrEiwA1rU9w30rgzYmH9EETB1JqyGP2-iQni8a7cIHmlc0uIaX5MM5UxfSc7MsMhoCeAEQAvD_BwE">Learn more</a></span>
        </li>

<li>
            <strong>udemy</strong>
            <br>
            <span class="level">Beginner</span>
            <br>
            <span class="duration"><i class="fas fa-clock"></i>17h 10m</span>
            <br>
            Rating: <span class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="fas fa-star-half-alt"></i></span>
            <br>
            Amount: $6.63
            <br>
            <span class="description">In this course you will learn more about the historical design of databases and the use of SQL in the PostgreSQL environment. Using SQL techniques and common commands (INSERT INTO, WHERE, ORDER BY, ON DELETE CASCADE, etc) will enable you to create tables, column types and define the schema of your data in PostgreSQL.</span>
            <br>
            <span class="website"><a href="https://www.udemy.com/course/learn-sql-for-beginners/?couponCode=ST15MT31224">Learn more</a></span>
        </li>


<li>
            <strong>Besant Technologies</strong>
            <br>
            <span class="level">Beginner</span>
            <br>
            <span class="duration"><i class="fas fa-clock"></i>14hrs</span>
            <br>
            Rating: <span class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></span>
            <br>
            Amount: $5.40
            <br>
            <span class="description">You will learn about data modeling and how to represent one-to-many and many-to-many relationships in PostgreSQL and  will enable you to create tables, column types and define the schema of your data in PostgreSQL.
</span>
            <br>
            <span class="website"><a href="https://www.classcentral.com/course/databases-the-university-of-michigan-database-des-58329">Learn more</a></span>
        </li>


<li>
            <strong>Mindmajix</strong>
            <br>
            <span class="level">Beginner</span>
            <br>
            <span class="duration"><i class="fas fa-clock"></i>28hours</span>
            <br>
            Rating: <span class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></span>
            <br>
            Amount: $5.40
            <br>
            <span class="description">PostgreSQL Online training program comprises a combination of basic theory, discussions over complex DBA Administration scenarios, and three Real-Time use cases</span>
            <br>
            <span class="website"><a href="https://mindmajix.com/postgresql-training">Learn more</a></span>
        </li>

<li>
            <strong>ACTE</strong>
            <br>
            <span class="level">Beginner & Advanced</span>
            <br>
            <span class="duration"><i class="fas fa-clock"></i>40+hours</span>
            <br>
            Rating: <span class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></span>
            <br>
            Amount: $20.2
            <br>
            <span class="description">PostgreSQL Training will enable you to gain in-depth knowledge on all the core fundamentals of PostgreSQL.you will learn about the basics and advanced features of PostgreSQL and how to develop applications with PostgreSQL as the back-end.
</span>
            <br>
            <span class="website"><a href="https://www.acte.in/postgresql-online-training/">Learn more</a></span>
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




