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
<html>
<head>
    <title>About Us</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, intial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
   <style>
 body {
    
    justify-content: center;
    background-color: #e8f0fe;
    align-items: center;
    height: 100vh;
    margin: 0;
}


.content {
    text-align: center;
}

.centered {
    max-width: 600px; /* Adjust as needed */
}

.image-container {
    margin-bottom: 20px;
}

.header-title {
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
      overflow: hidden;
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
             <h1 style="font-size:35px"></h1>
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
          </header>

    <header>
        <h1 style="font-size:50px;" align="center"> About Us</h1>
    </header>
    <section>
        <div class="content">

<div class="image-container">
<img src = "./Main_bg.jpg" width = "300px" heigth = "300px"/>
</div>
            <h2 style="font-size:40px;">Welcome to Guidify – Your Gateway to Academic Success!</h2>
            <p style="font-size:20px;" align="center">               At Guidify, we believe that every student's educational journey is unique, and we're here to empower you with the tools you need to navigate it 
                seamlessly.Our mission is to provide comprehensive course roadmaps, ensuring that you have a clear and structured path towards your academic goals.
                Passionate about education, our team at Guidify is driven by the vision of making learning accessible and enjoyable for all. We understand the 
                challenges students face, and that's why we've created a platform that goes beyond textbooks, offering curated roadmaps that simplify complex subjects.
                What sets us apart? Guidify is not just a website; it's a community dedicated to supporting you in your pursuit of knowledge. Our commitment extends
                beyond academics, fostering a culture of collaboration and growth. We believe in the potential of every student and are here to guide you every step 
of the way.Join us on this exciting educational journey. Let Guidify be your compass, guiding you towards success in your studies and beyond. Together, 
                let's unlock the doors to a brighter future. </p>
        </div>
        
    </section>




</body>
</html>