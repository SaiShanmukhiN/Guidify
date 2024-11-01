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
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style2.css" />
    <title>Web Development In Python</title>
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
        height: 50px;
      }

      .container {
        max-width: 100%;
        overflow-x: auto;
        text-align: center;
      }

      .courseButton {
        color: #fff;
        padding: 70px; /* Adjusted padding */
        border: none;
        border-radius: 5px;
        cursor: pointer;
        margin: 5px;
        width: 500px;
        box-sizing: border-box;
        line-height: 1.5;
        font-size: 25px; /* Adjusted font size */
      }

      /* Assign unique background colors to each button */
      .courseButton:nth-child(1) {
        background-color: #007bff;
      }
      .courseButton:nth-child(2) {
        background-color: #6c757d;
      }
      .courseButton:nth-child(3) {
        background-color: #28a745;
      }
      .courseButton:nth-child(4) {
        background-color: #ffc107;
      }
      .courseButton:nth-child(5) {
        background-color: #e8f0fe;
      }
      .courseButton:nth-child(6) {
        background-color: #e8f0fe;
      }
      .courseButton:nth-child(7) {
        background-color: #e8f0fe;
      }
      .courseButton:nth-child(8) {
        background-color: #e8f0fe;
      }

      .courseButton:hover {
        opacity: 0.5;
      }
      footer {
      position: fixed;
      width: 100%;
      height: 50px;
      background-color: #333;
      color: white;
      text-align: center;
      padding: 10px 10px 0px 10px;
      bottom: 0;
    }

    </style>
  </head>
  <body>
    <header>
      <div class="container">
        <div style="display: flex; width: 100%; justify-content: space-between">
          <h1 style="font-size:35px">Guidify</h1>
          
        </div>
        <nav>
          <ul align="left">
            <li class="active" style="font-size:20px"><a href="home1.php">Home</a></li>
           
            <li style="font-size:20px"><a href="aboutus.php">About Us</a></li>
            <li style="font-size:20px"><a href="contact.php">Contact</a></li>
          </ul>
        </nav>
      </div>
    </header>
    <!-- More sections for testimonials, upcoming courses, etc. -->
    <header>
      <h1>Web Development In Python</h1>
    </header>

    <div class="container1" id="coursesContainer" style="text-align: center">
      <!-- Courses will be dynamically added here using JavaScript -->
    </div>

    <script>
      // Sample course data (you can replace this with real data fetched from a server)
      const courses = [
      { title: 'Django                     ', link: 'dijango.php' },
      { title: 'Flask                      ', link: 'flask.php' },
      { title: 'fastAPI                    ', link: 'fastAPI.php' },
      { title: 'Postman                    ', link: 'postman.php' },
      { title: '       ', link: '          ' },
      { title: '       ', link: '          ' },
      { title: '       ', link: '          ' },
      { title: '       ', link: '          ' },
       ];

      // Function to display courses in the container
      function displayCourses() {
        const coursesContainer = document.getElementById("coursesContainer");

        courses.forEach((course, index) => {
          const courseButton = document.createElement("button");
          courseButton.classList.add("courseButton");
          courseButton.textContent = course.title;
          courseButton.addEventListener(
            "click",
            () => (window.location.href = course.link)
          );

          coursesContainer.appendChild(courseButton);
        });
      }

      // Display courses when the page loads
      document.addEventListener("DOMContentLoaded", displayCourses);
    </script>
    <footer>
      <div class="container">
        <p>&copy; 2024 Guidify. All rights reserved.</p>
      </div>
    </footer>
  </body>
</html>
