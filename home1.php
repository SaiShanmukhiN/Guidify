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
    
    <title>Guidify - Your Guided Learning Platform</title>
<style>
/* Add your styles here */
body {
    background-color: #e8f0fe;
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
}

.container {
    width: 80%;
    margin: 0 auto;
}

header {
    background-color: #333;
    color: #fff;
    padding: 15px 0;
}

header h1 {
    margin: 0;
    height: 50px;
}

nav ul {
    list-style: none;
    margin: 0;
    padding: 0;
}

nav li {
    display: inline-block;
    margin-right: 20px;
}

nav a {
    text-decoration: none;
    color: #fff;
}

.user-buttons {
    float: right;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 10px 15px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    margin-left: 10px;
}

button:hover {
    background-color: #45a049;
}

.hero {
    background-color: #f4f4f4;
    padding: 50px 0;
    text-align: left;
}

.hero h2 {
    margin-bottom: 20px;
    color: #333;
}

.hero p {
    color: #666;
    margin-bottom: 30px;
}

.cta-button {
    display: inline-block;
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s;
}

.cta-button:hover {
    background-color: #45a049;
}

.features {
    padding: 50px 0;
    text-align: center;
}

.features h2 {
    margin-bottom: 30px;
    color: #333;
}

.feature {
    margin-bottom: 30px;
}

.feature img {
    width: 80px;
    margin-bottom: 20px;
}

footer {
      width: 100%;
      position: fixed;
      height: 50px;
      background-color: #333;
      color: white;
      text-align: center;
      padding: 10px 10px 0px 10px;
      bottom: 0;
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
                <ul menu="menu">
                    <li class="active"><a href="#">Home</a></li>
                    
                    <li><a href="aboutus.php">About Us</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
                
            </nav>
        </div>
    </header>

    <section class="hero">
        <div class="container">
            <h2>Welcome to Guidify</h2>
            <p>Your guided learning platform for personal and professional development.</p>
            <a href="paide.php" class="cta-button">Explore Courses</a>
        </div>
    </section>

    <section class="features">
        <div class="container">
            <h2>Key Features</h2>
            <div class="feature">
                
                <h3>Personalized Recommendations</h3>
                <p> Recommends relevant courses based on a user’s interests.</p>
            </div>
            <div class="feature">
                
                <h3>Interactive Learning</h3>
                <p>Engage in hands-on activities and quizzes to reinforce your learning.</p>
            </div>
            <div class="feature">
                <h3>Flexible Schedule</h3>
                <p>Study at your own pace with flexible schedules that fit your lifestyle.</p>
            </div>
           <div class="feature">
                <h3>Course Search and Filtering</h3>
                <p>search feature that allows users to find specific courses based on categories, or other relevant criteria.</p>
            </div>

        </div>
    </section>

    <!-- More sections for testimonials, upcoming courses, etc. -->

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
