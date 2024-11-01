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
    <link rel="stylesheet" href="style2.css" />
    <title>Online Course catalog</title>
    <style>
      body {
        font-family: Arial, sans-serif;
        background-color: #e8f0fe;
        margin: 0;
        padding: 0;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        min-height: 100vh;
      }

      header {
        background-color: #333;
        color: #fff;
        text-align: center;
        padding: 20px;
        width: 100%;
      }

      .container {
        max-width: 100%;
        overflow-x: auto;
        text-align: center;
      }

      .course {
      margin: 10px 0;
      padding: 10px;
      border: 1px solid #ddd;
      border-radius: 5px;
      width: 900px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      background-color: #fff8e7;
      display: inline-block;
    }

   
    .free {
      color: #007BFF;
    }

    .courseButton {
      background-color: #007BFF;
      color: #fff;
      padding: 10px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      display: block;
      margin-top: 40px;
      text-align: center;
    }

    .courseButton:hover {
      background-color: #0056b3;
    }

.course h2 {
    font-size: 25px; /* You can adjust the font size as needed */
  }
 header {
    font-size: 27px; /* You can adjust the font size as needed */
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
              <a href="index.php">Logout</a>
            </div>
          </div>
        </div>
        <?php else: ?>
                
              <?php endif; ?>
            </div>
        <nav>
          <ul align="left">
            <li class="active" style="font-size:20px"><a href="#">Home</a></li>
            <li style="font-size:20px"><a href="#">About Us</a></li>
            <li style="font-size:20px"><a href="#">Contact</a></li>
          </ul>
        </nav>
      </div>
    </header>
    <!-- More sections for testimonials, upcoming courses, etc. -->
    <header>
    <h1 style="font-size:38px">Online Courses Catalog</h1>
  </header>

  <div class="container" id="coursesContainer">
    <!-- Courses will be dynamically added here using JavaScript -->
  </div>

  <script>
    // Sample course data (you can replace this with real data fetched from a server)
    const courses = [
      { title: ' Programming Languages', link: 'scpl.php' },
      { title: 'Web Development', link: 'scwd.php' },
      { title: 'Web Development In Python', link: 'scwdp.php' },
      { title: 'Data Structures & Algorithms', link: 'scdsa.php' },
      { title: 'ML & Data Science', link: 'scmids.php' },
      { title: 'DevOps', link: 'scde.php' },
      { title: 'Databases', link: 'scdb.php' },
      { title: 'Software Testing', link: 'scst.php' },
    ];

    // Function to display courses in the container
    function displayCourses() {
      const coursesContainer = document.getElementById('coursesContainer');

      courses.forEach(course => {
        const courseElement = document.createElement('div');
        courseElement.classList.add('course');
        courseElement.innerHTML = `
          <h2>${course.title}</h2>
          <a href="${course.link}" class="courseButton">View Details</a>
        `;
        coursesContainer.appendChild(courseElement);
      });
    }

    // Display courses when the page loads
    document.addEventListener('DOMContentLoaded', displayCourses);
  </script>
    <footer>
      <div class="container">
        <p>&copy; 2024 Guidify. All rights reserved.</p>
      </div>
    </footer>
<script>
  function toggleProfileDropdown() {
    var dropdown = document.getElementById('profileDropdown');
    dropdown.classList.toggle('active');
  }
</script>

  </body>
</html>
