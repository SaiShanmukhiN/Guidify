

<?php
session_start();

// Check if the user is logged in
if (empty($_SESSION['username'])) {
    header('location: login.php');
    exit();
}

// Check if the form is submitted for profile update
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update_profile'])) {
    // Handle profile update logic (e.g., update database, update session variables)
    // Example: Assuming you have 'gender' and 'nationality' fields
    $_SESSION['gender'] = $_POST['gender'];
    $_SESSION['qualification'] = $_POST['qualification'];
    $_SESSION['nationality'] = $_POST['nationality'];
    $_SESSION['phoneno'] = $_POST['phoneno'];
    $_SESSION['profile_updated_at'] = date('Y-m-d H:i:s');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css" />
    <title>User Profile - Guidify</title>
    <style>
    body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 20px;
            background-color: #f9f9f9;
            
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
        }

        header {
            text-align: center;
            margin-bottom: 20px;
            width: 100%;
            height: 55px;
           
        }
        

        p {
            margin-bottom: 10px;
            font-size: 1.2em;
        }

        a {
            color: #007BFF;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s ease-in-out;
        }

        a:hover {
            text-decoration: underline;
            color: #0056b3;
        }

        footer {
      position: fixed;
      width: 100%;
      height: 50px;
      background-color: #333;
      color: white;
      text-align: center;
      padding: 10px 10px 0px 10px;

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
    <header>
        
    </header>

    <div class="container">
        <p><b>Name: </b><?php echo $_SESSION['username']; ?></p>
        
        <p><b>Email: </b><?php echo $_SESSION['email']; ?></p>
        
        <!-- Display user details -->
        <p><b>Gender: </b><?php echo $_SESSION['gender']; ?></p>
        <p><b>Qualification: </b> <?php echo $_SESSION['qualification']; ?></p>
        <p><b>Nationality: </b><?php echo $_SESSION['nationality']; ?></p>
        <!-- Add an "Edit Profile" link -->
        <a href="profileup.php">Edit Profile</a>
    </div>

   <footer>
      <div class="container">
        <p>&copy; 2024 Guidify. All rights reserved.</p>
      </div>
    </footer>
</body>
</html>