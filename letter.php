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
          <a href="harshi.php" class="profile-circle"><?php echo $firstLetter; ?></a>
          <div class="user-buttons">
            <!-- Add your user-related buttons or links here -->
            <span><?php echo $_SESSION['username']; ?></span>
            <a href="logout.php">Logout</a>
          </div>
        </div>
      <?php else: ?>
        <div class="user-buttons">
          <button id="login-btn">Login</button>
          <button id="register-btn">Register</button>
        </div>
      <?php endif; ?>
    </div>
    <nav>
      <ul align="left">
        <li class="active" style="font-size:20px"><a href="home1.php">Home</a></li>
        <li style="font-size:20px"><a href="#">Courses</a></li>
        <li style="font-size:20px"><a href="#">About Us</a></li>
        <li style="font-size:20px"><a href="#">Contact</a></li>
      </ul>
    </nav>
  </div>
</header>

<!-- The rest of your HTML content -->
<!-- ... -->

<footer>
  <div class="container">
    <p>&copy; 2024 Guidify. All rights reserved.</p>
  </div>
</footer>

</body>
</html>
 
</body>
</html>
