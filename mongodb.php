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
    <title>mongoDB</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"> <!-- Font Awesome for icons -->
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 20px;
            background-color: #f9f9f9;
            color: #333;
        }

        h1 {
            color: #007BFF;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin-bottom: 20px;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            background-color: #ffffff;
            transition: transform 0.3s ease-in-out;
        }

        li:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        strong {
            color: #007BFF;
            font-size: 1.2em;
        }

        .rating {
            color: #f39c12; /* Orange color for stars */
            font-size: 0.9em; /* Adjust the font size to make stars smaller */
        }

        .duration,
        .level,
        .description,
        .website {
            color: #666;
            margin-top: 8px;
        }

        .level {
            color: #28a745; /* Green color for beginner */
            font-weight: bold;
        }

        .website a {
            color: #007BFF;
            text-decoration: none;
            font-weight: bold;
        }

        .website a:hover {
            text-decoration: underline;
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
.cour{
            display: flex;
        }
        .c1{
            padding: 20px;
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
              <a href="home1.php">Home</a>
              <a href="aboutus.php">About Us</a>
              <a href="contact.php">Contact</a>
              <a href="index.php">Logout</a>
            </div>
          </div>
        </div>
              <?php else: ?>
                
              <?php endif; ?>
            </div>
             </header>


    <h1>MongoDB</h1>

    <ul>
        <li><div class = "cour">
		<div class="c1">
			<img src = "./corsera.jpg" width = "140px" heigth = "140px"/></div>
		<div>

            <strong>Coursera</strong>
            <br>
            <span class="level">Beginner</span>
            <br>
            <span class="duration"><i class="fas fa-clock"></i>15hours</span>
            <br>
            Rating: <span class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></span>
            <br>
            Amount: $42.0
            <br>
            <span class="description">"Introduction to MongoDB" guides you through the foundational skills and knowledge you need to get started with MongoDB. Get an introduction to MongoDB Atlas, the developer data platform, and how to create and deploy an Atlas cluster</span>
            <br>
            <span class="website"><a href="https://www.coursera.org/learn/introduction-to-mongodb/">Learn more</a></span>
        </li>

       
        <li>
<div class = "cour">
		<div class="c1">
			<img src = "./udemy.jpg" width = "140px" heigth = "140px"/></div>
		<div>


<strong>udemy</strong>
            <br>
            <span class="level">Intermediate</span>
            <br>
            <span class="duration"><i class="fas fa-clock"></i>17.5hours</span>
            <br>
            Rating: <span class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star-half-alt"></i></span>
            <br>
            Amount: $37.44
            <br>
            <span class="description">MongoDB is one of the most important NoSQL databases you can work with. It's extremely popular and MongoDB developers are in high demand!</span>
            <br>
            <span class="website"><a href="https://www.udemy.com/course/mongodb-the-complete-developers-guide/?utm_source=adwords&utm_medium=udemyads&utm_campaign=MongoDB_v.PROF_la.EN_cc.INDIA_ti.6804&utm_content=deal4584&utm_term=_._ag_82581749405_._ad_670210231676_._kw_mongodb+training_._de_c_._dm__._pl__._ti_aud-1738475842996%3Akwd-337901812556_._li_9040221_._pd__._&matchtype=b&gad_source=1&gclid=CjwKCAjw17qvBhBrEiwA1rU9w2v9DIVjgBLbeAAgt4Cguytu2NIJxjdpwagwPfdTENcT7iOlonk4OBoCkLEQAvD_BwE&couponCode=LETSLEARNNOWPP">Learn more</a></span>
        </li>

<li><div class = "cour">
		<div class="c1">
			<img src = "./mongdb.jpeg" width = "140px" heigth = "140px"/></div>
		<div>

            <strong>MongoDB University</strong>
            <br>
            <span class="level">Beginner</span>
            <br>
            <span class="duration"><i class="fas fa-clock"></i>12h</span>
            <br>
            Rating: <span class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="fas fa-star-half-alt"></i></span>
            <br>
            Amount: $13.0
            <br>
            <span class="description">MongoDB course guides you through the foundational skills and knowledge you need to get started with MongoDB. This includes connecting to a MongoDB database, how to conduct simple CRUD operations, and key topics such as aggregation, indexing, data modeling, and transactions.</span>
            <br>
            <span class="website"><a href="https://learn.mongodb.com/learning-paths/introduction-to-mongodb">Learn more</a></span>
        </li>


<li><div class = "cour">
		<div class="c1">
			<img src = "./udacity.jpeg" width = "140px" heigth = "140px"/></div>
		<div>

            <strong>udacity</strong>
            <br>
            <span class="level">Beginner</span>
            <br>
            <span class="duration"><i class="fas fa-clock"></i>8weeks</span>
            <br>
            Rating: <span class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></span>
            <br>
            Amount: $5.40
            <br>
            <span class="description">Developing expertise and confidence is essential for you and your organization to be successful with MongoDB. With training designed and led by MongoDB consultants, you and your team will be equipped to build solutions to complex development and operations problems.
</span>
            <br>
            <span class="website"><a href="https://www.udacity.com/course/data-wrangling-with-mongodb--ud032?irclickid=2MsRX9ToYxyPUo80KAwUaS6zUkHyiwTWFzxc0w0&irgwc=1&utm_source=affiliate&utm_medium=&aff=259799&utm_term=&utm_campaign=_gtc_search_&utm_content=&adid=788805">Learn more</a></span>
        </li>


<li><div class = "cour">
		<div class="c1">
			<img src = "./pluralsight.jpg" width = "140px" heigth = "140px"/></div>
		<div>

            <strong>PluralSight</strong>
            <br>
            <span class="level">Beginner</span>
            <br>
            <span class="duration"><i class="fas fa-clock"></i>2hours 28m</span>
            <br>
            Rating: <span class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></span>
            <br>
            Amount: $9.05
            <br>
            <span class="description">MongoDB is a powerful database tool that uses documents to store, retrieve, and manage data via key-value pairs (a lot like JSON)..</span>
            <br>
            <span class="website"><a href="https://www.pluralsight.com/courses/foundations-document-databases-mongodb?clickid=35dQ39TsAxyPTjiVXp0rVUKSUkHyiz3fFzxc0w0&irgwc=1&mpid=2890636&aid=7010a000001xAKZAA2&utm_medium=digital_affiliate&utm_campaign=2890636&utm_source=impactradius">Learn more</a></span>
        </li>

<li><div class = "cour">
		<div class="c1">
			<img src = "./udemy.jpg" width = "140px" heigth = "140px"/></div>
		<div>

            <strong>udemy-MERN stack</strong>
            <br>
            <span class="level">Advanced</span>
            <br>
            <span class="duration"><i class="fas fa-clock"></i>19+hours</span>
            <br>
            Rating: <span class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></span>
            <br>
            Amount: $37.44
            <br>
            <span class="description">This MongoDB online course is a comprehensive introduction for total beginners to learn the difference between relational and document databases before diving into MongoDB essentials like BSON data, MongoDB server & shell, queries, and database structure.</span>
            <br>
            <span class="website"><a href="https://www.udemy.com/course/mern-stack-course-mongodb-express-react-and-nodejs/?ranMID=39197&ranEAID=jU79Zysihs4&ranSiteID=jU79Zysihs4-JDdW8rBykFK0jWRVZLNrQA&LSNPUBID=jU79Zysihs4&utm_source=aff-campaign&utm_medium=udemyads&couponCode=LETSLEARNNOWPP">Learn more</a></span>
        </li>
</ul>
<script>
  function toggleProfileDropdown() {
    var dropdown = document.getElementById('profileDropdown');
    dropdown.classList.toggle('active');
  }
</script>


</body>
</html>




