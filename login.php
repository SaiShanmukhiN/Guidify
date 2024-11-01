<?php include('server.php') ?>

<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title> 
  <link rel="stylesheet" href="style2.css" />
  <style>
  * {
  margin: 0px;
  padding: 0px;
}
body {
  font-size: 120%;
  background: #F8F8FF;
}

.header {
  width: 30%;
  margin: 50px auto 0px;
  color: white;
  background: #5F9EA0;
  text-align: center;
  border: 1px solid #B0C4DE;
  border-bottom: none;
  border-radius: 10px 10px 0px 0px;
  padding: 20px;
}
form, .content {
  width: 30%;
  margin: 0px auto;
  padding: 20px;
  border: 1px solid #B0C4DE;
  background: white;
  border-radius: 0px 0px 10px 10px;
}
.input-group {
  margin: 10px 0px 10px 0px;
}
.input-group label {
  display: block;
  text-align: left;
  margin: 3px;
}
.input-group input {
  height: 30px;
  width: 93%;
  padding: 5px 10px;
  font-size: 16px;
  border-radius: 5px;
  border: 1px solid gray;
}
.btn {
  padding: 10px;
  width: 94%;
  font-size: 15px;
  color: white;
  background: #5F9EA0;
  border: none;
  border-radius: 5px;
}
.error {
  width: 92%; 
  margin: 0px auto; 
  padding: 10px; 
  border: 1px solid #a94442; 
  color: #a94442; 
  background: #f2dede; 
  border-radius: 5px; 
  text-align: left;
}
.success {
  color: #3c763d; 
  background: #dff0d8; 
  border: 1px solid #3c763d;
  margin-bottom: 20px;
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
          <div class="user-buttons">
            <button id="login-btn">Login</button>
            <button id="register-btn">Register</button>
          </div>
        </div>
        <nav>
          <ul align="left">
            <li class="active" style="font-size:20px"><a href="#">Home</a></li>
            <li style="font-size:20px"><a href="#">Courses</a></li>
            <li style="font-size:20px"><a href="#">About Us</a></li>
            <li style="font-size:20px"><a href="#">Contact</a></li>
          </ul>
        </nav>
      </div>
    </header>
    <!-- More sections for testimonials, upcoming courses, etc. -->
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>

  <?php
  // After successful login, redirect to welcome.php
  if (isset($_SESSION['username'])) {
    header('location: home1.php');
  }
  ?>
  <footer>
      <div class="container">
        <p>&copy; 2024 Guidify. All rights reserved.</p>
      </div>
    </footer>

</body>
</html> 