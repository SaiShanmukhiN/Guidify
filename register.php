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

</head>
</style>
<body>
<header>
      <div class="container">
        <div style="display: flex; width: 100%; justify-content: space-between">
          <h1 style="font-size:35px">Guidify</h1>
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
  <div class="header">
  	<h2>Register</h2>
  </div>
	
   <form method="post" action="register.php">
    <?php include('errors.php'); ?>
    <div class="input-group">
      <label>Username</label>
      <input type="text" name="username" value="<?php echo $username; ?>">
    </div>
    <div class="input-group">
      <label>Email</label>
      <input type="email" name="email" value="<?php echo $email; ?>">
    </div>
    <div class="input-group">
      <label>Password</label>
      <input type="password" name="password_1" id="password_1" oninput="validatePassword()">
    </div>
    <div class="input-group">
      <label>Confirm password</label>
      <input type="password" name="password_2" id="password_2" oninput="validatePassword()">
    </div>
    <span id="password_error" style="color: red;"></span>
    <div class="input-group">
      <button type="submit" class="btn" name="reg_user">Register</button>
    </div>
    <p>
      Already a member? <a href="login.php">Sign in</a>
    </p>
  </form>
  <script>
    function validatePassword() {
      var password1Input = document.getElementById('password_1');
      var password2Input = document.getElementById('password_2');
      var password1Value = password1Input.value;
      var password2Value = password2Input.value;
      var errorContainer = document.getElementById('password_error');

      if (password1Value.length < 8) {
        errorContainer.textContent = 'Password must be at least 8 characters long';
      } else if (password1Value !== password2Value) {
        errorContainer.textContent = '';
      } else {
        errorContainer.textContent = '';
      }
    }
  </script>
</body>
</html>
<footer>
      <div class="container">
        <p>&copy; 2024 Guidify. All rights reserved.</p>
      </div>
    </footer>

</body>
</html>