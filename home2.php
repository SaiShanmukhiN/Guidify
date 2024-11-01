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
            <h1>Guidify</h1>
            <nav>
                <ul menu="menu">
                    <li class="active"><a href="home1.php">Home</a></li>
                    
                    <li><a href="aboutus.php">About Us</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
                
            </nav>
            <div class="user-buttons">
         
                <a href="register.php"><button id="register-btn">Register</button></a>
            </div>
        </div>
    </header>

    <section class="hero">
        <div class="container">
            <h2>Welcome to Guidify</h2>
            <p>Your guided learning platform for personal and professional development.</p>
            <a href="index.php" class="cta-button">Explore Courses</a>
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

</body>
</html>
