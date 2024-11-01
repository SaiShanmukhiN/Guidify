<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEB DEVELOPMENT</title>
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
            margin:0px 20px 20px 40px;
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
            font-size: 1em; /* Adjust the font size to make stars smaller */
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

        .cour{
            display: flex;
        }
        .c1{
            padding: 20px;
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

    <h1>Jquery</React></h1>

    <ul>
        <li>
	<div class = "cour">
		<div class="c1">
			<img src = "./udemy.jpg" width = "140px" heigth = "140px"/></div>
		<div>
			<strong>Udemy</strong>
            		<br>
            		<span class="level">Beginner</span>
            		<br>
            		<span class="duration"><i class="fas fa-clock"></i> 16 hrs 42 min</span>
            		<br>
            	Rating: <span class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
            		<br>
            		Amount: ₹499
            		<br>
            		<span class="description">Use jQuery to create stunning animations, provide fast feedback forms, handle all user events and perform Ajax calls.</span>
            		<br>
            		<span class="website"><a href="https://www.udemy.com/course/jquery-tutorial/?utm_source=adwords&utm_medium=udemyads&utm_campaign=DSA_Catchall_la.EN_cc.INDIA&utm_content=deal4584&utm_term=_._ag_82569850245_._ad_533220805577_._kw__._de_c_._dm__._pl__._ti_dsa-406594358574_._li_9040221_._pd__._&matchtype=&gad_source=1&gclid=Cj0KCQjwncWvBhD_ARIsAEb2HW_T4p7tbUmNlATLuaIrbUm5629pHoMiLfgHk3qIJ-1LujkAtRjPj_4aAvdKEALw_wcB&couponCode=IND21PM" target="_blank">Learn more</a></span>
        
        </div> 
		
	
	</div>       

</li>

        <li>
            <div class="cour">
                <div class="c1">
                    <img src = "./corsera.jpg" width = "140px" heigth = "140px"/></div>
                <div>
                <div>
                <strong>Coursera</strong>
                    <br>
                    <span class="level">Intermediate</span>
                    <br>
                    <span class="duration"><i class="fas fa-clock"></i> 40 hrs</span>
                    <br>
                    Rating: <span class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></span>
                    <br>
                    Amount: ₹6545
                    <br>
                    <span class="description">In this course, we'll look at the JavaScript language, and how it supports the Object-Oriented pattern, with a focus on the unique aspect of how JavaScript approaches OO. We'll explore a brief introduction to the jQuery library, which is widely used to do in-browser manipulation of the Document Object Model (DOM) and event handling</span>
                    <br>
                    <span class="website"><a href="https://www.coursera.org/learn/javascript-jquery-json" target="_blank">Learn more</a></span>
                </div>
            </div>
        </li>

        <li>
            <div class="cour">
                <div class="c1">
                    <img src = "./mammoth.jpg" width = "140px" heigth = "140px"/></div>
                <div>
                <div>
                    <strong>Mammoth Interactive</strong>
                    <br>
                    <span class="level">Intermediate</span>
                    <br>
                    <span class="duration"><i class="fas fa-clock"></i> 6 months</span>
                    <br>
                    Rating: <span class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
                    <br>
                    Amount: ₹4050
                    <br>
                    <span class="description">Have you ever wanted to learn to code. This course will show you the basics of coding jQuery in 1 hour!
</span>
                    <br>
                    <span class="website"><a href="https://training.mammothinteractive.com/p/one-hour-jquery">Learn more</a></span>
                
                </div>
            </div>
        </li>
        <!-- Add more courses as needed -->
    </ul>
<script>
  function toggleProfileDropdown() {
    var dropdown = document.getElementById('profileDropdown');
    dropdown.classList.toggle('active');
  }
</script>

</body>
</html>