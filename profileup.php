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

    // Redirect back to the profile page after updating
    header('location: profile.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile - Guidify</title>
    <link rel="stylesheet" href="style2.css" />
    <style>
body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    margin: 20px;
    background-color: #f9f9f9;
    color: #333;
}

.container {
    max-width: 800px;
    margin: 0 auto;
}

header {
    text-align: center;
    margin-bottom: 20px;
}


form {
    margin-bottom: 20px;
}

label {
    display: block;
    margin-bottom: 5px;
}

select {
    width: 100%;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 5px;
    margin-bottom: 15px;
}

button {
    padding: 10px;
    background-color: #007BFF;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

button:hover {
    background-color: #0056b3;
}

a {
    color: #007BFF;
    text-decoration: none;
    font-weight: bold;
}

a:hover {
    text-decoration: underline;
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
          <h1 align="left" style="font-size:35px">Guidify</h1>
          
        </div>
        <nav>
          <ul align="left">
            <li class="active" style="font-size:20px"><a href="#">Home</a></li>
           
            <li style="font-size:20px"><a href="aboutus.php">About Us</a></li>
            <li style="font-size:20px"><a href="contact.php">Contact</a></li>
          </ul>
        </nav>
      </div>
    </header>
    

    <div class="container">
        <form method="post" action="profileup.php">
            <label for="gender">Gender:</label>
            <input type="radio" name="gender" value="Male" <?php echo ($_SESSION['gender'] == 'male') ? 'checked' : ''; ?>> Male
            <input type="radio" name="gender" value="Female" <?php echo ($_SESSION['gender'] == 'female') ? 'checked' : ''; ?>> Female
            <input type="radio" name="gender" value="other" <?php echo ($_SESSION['gender'] == 'other') ? 'checked' : ''; ?>> Other
             <label for="qualification">Qualification:</label>
            <select name="qualification">
                <option value="Intermediate" <?php echo ($_SESSION['qualification'] == 'intermediate') ? 'selected' : ''; ?>>Intermediate</option>
                <option value="Diploma" <?php echo ($_SESSION['qualification'] == 'diploma') ? 'selected' : ''; ?>>Diploma</option>
                <option value="Undergraduate" <?php echo ($_SESSION['qualification'] == 'undergraduate') ? 'selected' : ''; ?>>Undergraduate</option>
                <option value="Postgraduate" <?php echo ($_SESSION['qualification'] == 'postgraduate') ? 'selected' : ''; ?>>Postgraduate</option>
                                <!-- Add more options as needed -->
            </select>
            <label for="nationality">Nationality:</label>
            <select name="nationality">
                <option value="India" <?php echo ($_SESSION['nationality'] == 'india') ? 'selected' : ''; ?>>India</option>
                <option value="others" <?php echo ($_SESSION['nationality'] == 'others') ? 'selected' : ''; ?>>Others</option>
                
                <!-- Add more options as needed -->
            </select>
            <button type="submit" name="update_profile">Update Profile</button>
        </form>
        <!-- Add a "Back to Profile" link -->
        <a href="profile.php">Back to Profile</a>
    </div>
    <footer>
      <div class="container">
        <p>&copy; 2024 Guidify. All rights reserved.</p>
      </div>
    </footer>
</body>
</html>
