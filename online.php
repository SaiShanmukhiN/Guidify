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
  <style>
    body {
      background-color: #e8f0fe;
      font-family: 'Arial', sans-serif;
      margin: 0;
      padding: 0;
    }

    header {
      background-color: #333;
      color: #fff;
      text-align: center;
      padding: 20px;
      width: 100%;
    }

    .button {
      display: inline-block;
      padding: 10px 20px;
      margin: 0 10px;
      font-size: 16px;
      text-align: center;
      text-decoration: none;
      cursor: pointer;
      border: 2px solid #3498db;
      color: #3498db;
      border-radius: 5px;
      transition: background-color 0.3s;
    }

    .button:hover {
      background-color: #3498db;
      color: #fff;
      text-align: center;
    }

    .button.secondary {
      border-color: #e74c3c;
      color: #e74c3c;
      text-align: center;
    }

    .button.secondary:hover {
      background-color: #e74c3c;
      color: #fff;
      text-align: center;
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
        <div class="user-buttons">
          <button id="login-btn" onclick="window.location.href='login.php'">Login</button>
          <button id="register-btn" onclick="window.location.href='register.php'">Register</button>
        </div>
      <?php endif; ?>
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

<h1 align="center">Select your preferred course type: </h1>

<!-- First Button -->
<a href="paide.php" class="button">Online</a>

<!-- Second Button -->
<a href=".php" class="button secondary">Offline</a>

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
