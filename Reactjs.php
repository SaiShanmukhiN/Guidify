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

    <h1>React.js</React></h1>

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
            		<span class="duration"><i class="fas fa-clock"></i> 3 hrs 36 min</span>
            		<br>
            	Rating: <span class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
            		<br>
            		Amount: ₹499
            		<br>
            		<span class="description">Learn React JS from scratch with hands-on practice assignments and projects.
</span>
            		<br>
            		<span class="website"><a href="https://www.udemy.com/course/react-js-basics-to-advanced/?utm_source=adwords&utm_medium=udemyads&utm_campaign=WebDevelopment_v.PROF_la.EN_cc.INDIA_ti.8322_Exp&utm_content=deal4584&utm_term=_._ag_82381207618_._ad_533094292056_._kw__._de_c_._dm__._pl__._ti_dsa-774930032289_._li_9040221_._pd__._&matchtype=&gad_source=1&gclid=Cj0KCQjwncWvBhD_ARIsAEb2HW-aAM_jpzDhxyNSHaZ5UnutbI7sf2VYk1yV475fwhPY6DFpz1MarqEaAjhQEALw_wcB&couponCode=IND21PM" target="_blank">Learn more</a></span>
        
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
                    <span class="duration"><i class="fas fa-clock"></i> 26 hrs</span>
                    <br>
                    Rating: <span class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></span>
                    <br>
                    Amount: $79
                    <br>
                    <span class="description">Vestibulum euismod lacus nec semper efficitur. Quisque ut elit eget dolor varius aliquet.</span>
                    <br>
                    <span class="website"><a href="https://www.coursera.org/learn/advanced-react" target="_blank">Learn more</a></span>
                
                </div>
            </div>
        </li>

        <li>
            <div class="cour">
                <div class="c1">
                    <img src = "./edureka.jpg" width = "140px" heigth = "140px"/></div>
                <div>
                <div>
                    <strong>Edureka </strong>
                    <br>
                    <span class="level">Beginner</span>
                    <br>
                    <span class="duration"><i class="fas fa-clock"></i> 3 months</span>
                    <br>
                    Rating: <span class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
                    <br>
                    Amount: $190 
                    <br>
                    <span class="description">Donec tincidunt justo in diam tristique, id scelerisque lacus fringilla. Sed efficitur feugiat odio, eget hendrerit arcu consequat vel.</span>
                    <br>
                    <span class="website"><a href="https://www.edureka.co/reactjs-redux-certification-training?utm_source=Google-Search&utm_medium=cpc&utm_campaign=ET-IND-React-JS-Search-WebDevelopementCluster&utm_term=React+JS+training&gad_source=1&gclid=Cj0KCQjw-r-vBhC-ARIsAGgUO2CXai_MgHbYgoWIcAbC-Vu6pEv-K76Ednay5b5fg3W2Xulx9ieU2-saAggcEALw_wcB">Learn more</a></span>
                
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