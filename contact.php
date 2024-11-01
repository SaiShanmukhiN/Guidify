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
  <title>Contact us</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <style> 
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: sans-serif;
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



    .contact {
      min-height: 100vh;
      background-color: #e8f0fe;
      padding: 50px;
      text-align: center;
    }

    .container {
      max-width: 800px;
      margin: 0 auto;
    }

    .container h2 {
      font-size: 36px;
      margin-bottom: 40px;
      color: #333;
    }

    .contact-wrapper {
      display: flex;
      justify-content: space-between;
      flex-wrap: wrap;
    }

    .contact-form,
    .contact-info {
      flex: 1;
      min-width: 48%;
    }

    .contact-form {
      text-align: left;
    }

    .contact-form h3 {
      font-size: 24px;
      margin-bottom: 20px;
      color: #333;
    }

    .form-group {
      margin-bottom: 20px;
    }

    input,
    textarea {
      width: 100%;
      padding: 12px;
      border-radius: 8px;
      border: none;
      background-color: #f8f9fa;
      color: #333;
    }

    input:focus,
    textarea:focus {
      outline: none;
      box-shadow: 0 0 8px #bbb;
    }

    button {
      display: inline-block;
      padding: 12px 24px;
      background-color: #4caf50;
      color: #fff;
      border: none;
      cursor: pointer;
      transition: 0.3s ease;
    }

    button:hover {
      background-color: #45a049;
    }

    .contact-info {
      text-align: left;
      margin-left: auto; /* Move to the right */
    }

    .contact-info h3 {
      font-size: 24px;
      margin-bottom: 20px;
      color: #333;
    }

    .contact-info p {
      margin-bottom: 10px;
      color: #333;
    }

    .contact-info i {
      color: #4caf50;
      margin-right: 10px;
    }

    @media screen and (max-width: 768px) {
      .container {
        padding: 20px;
      }

      .contact-form,
      .contact-info {
        min-width: 100%;
      }
    }
  </style>
</head>
<body><header>
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
</header>

<section class="contact">
  <div class="container">
    <h2>Contact Us</h2>
    <div class="contact-wrapper">
      <div class="contact-form">
        <h3>Send us a message</h3>
        <form >
          <div class="form-group">
            <input type="text" name="name" placeholder="Your Name">
          </div>
          <div class="form-group">
            <input type="email" name="email" placeholder="Your Email">
          </div>
          <div class="form-group">
            <textarea name="message" placeholder="Your Message"></textarea>
          </div>
          <button type="submit">Send Message</button>
        </form>
      </div>
      <div class="contact-info">
        <h3 align="center">Contact Information</h3>
        <p align="center"><i class="fas fa-phone"></i>+91 6305777290</p>
        <p align="center"><i class="fas fa-envelope"></i> guidify@2024.com</p>
        <p align="right"><i class="fas fa-map-marker-alt"></i> SRIT Rotarypuram Village,
 Anantapur District - 515701, AP</p>
      </div>
    </div>
  </div>
</section>
<script>
  function toggleProfileDropdown() {
    var dropdown = document.getElementById('profileDropdown');
    dropdown.classList.toggle('active');
  }
</script>


</body>
</html>
