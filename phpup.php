<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
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
.cour{
            display: flex;
        }
        .c1{
            padding: 20px;
        }

    </style>
</head>
<body>

    <h1>PHP</h1>

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
            <span class="duration"><i class="fas fa-clock"></i> 2 hours</span>
            <br>
Rating: <span class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i>(4.9)</span>
            <br>

            <span class="description">PDO provides a data-access abstraction layer in PHP, which means that, regardless of what database you're using, you write the same functions to issue queries and fetch data.  It's that simple! However, you still need to set a database-specific PDO driver in your php.ini to access the correct database server.</span>
            <br>
            <span class="website"><a href="https://www.udemy.com/course/php7-beginners-guide-to-database-pdo/" target="_blank">Learn more</a></span>
</div>
</div>
        </li>



        <li>
<div class = "cour">
		<div class="c1">
			<img src = "./simplilearn.jpg" width = "140px" heigth = "140px"/></div>
		<div>

            <strong>Simplilearn(Introduction to PHP Basics)</strong>
            <br>
            <span class="level">Beginner</span>
            <br>
            <span class="duration"><i class="fas fa-clock"></i>7 hours</span>
            <br>
            Rating: <span class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i>(4.5)</span>
            <br>
            <span class="description">Interested in computer languages and eager to try web development? Want to make your own dynamic websites but not sure where to begin? Our easy-to-follow PHP course is here to help! PHP, or Hypertext Preprocessor, is a user-friendly but powerful language for creating websites. Our PHP free course is perfect for beginners starting from zero and for professionals looking to improve their skills.s</span>
            <br>
            <span class="website"><a href="https://www.simplilearn.com/learn-php-basics-free-course-skillup" target="_blank">Learn more</a></span>
</div>
</div>
        </li>

<li>
<div class = "cour">
		<div class="c1">
			<img src = "./greatlearning.jpg" width = "140px" heigth = "140px"/></div>
		<div>

<strong>Great Learning</strong>
            <br>
            <span class="level">Beginner</span>
            <br>
            <span class="duration"><i class="fas fa-clock"></i> 2 hours</span>
<br>
           Rating: <span class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i>(4.5)</span>
            

            <br>
            <span class="description">Enroll in our free PHP course to learn how to code with this popular server-side scripting language. Learn PHP basic concepts like variables, data types, control statements, loops, and functions through hands-on implementations.</span>
            <br>
            <span class="website"><a href="https://www.mygreatlearning.com/academy/learn-for-free/courses/php" target="_blank">Learn more</a></span>
</div>
</div>
        </li>



<li>
<div class = "cour">
		<div class="c1">
			<img src = "./freecodecamp.jpg" width = "140px" heigth = "140px"/></div>
		<div>

            <strong>Free code camp</strong>
            <br>
            <span class="level">Intermediate</span>
            <br>
            <span class="duration"><i class="fas fa-clock"></i> 4+ hours </span>
            <br>
       <span class="views">3.7M views</span>
<br>
            <span class="description">Learn the PHP programming language in this full course / tutorial. The course is designed for new programmers, and will introduce common programming topics using the PHP language.</span>
            <br>
            <span class="website"><a href="https://www.youtube.com/watch?v=OK_JCtrrv-c&t=17s" target="_blank">Learn more</a></span>
</div>
</div>
        </li>



        <!-- Add more courses as needed -->
    </ul>

</body>
