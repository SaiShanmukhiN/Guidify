<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML,CSS,Javascript</title>
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

    <h1>HTML,CSS,Javascript</h1>

    <ul>
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

            <span class="description">HTML is a markup language foundation for all your web pages. Learn front-end development for free through this course to gain fundamental knowledge of HTML and kick-start your Front End Development career.s
</span>
            <br>
            <span class="website"><a href="https://www.mygreatlearning.com/academy/learn-for-free/courses/front-end-development-html" target="_blank">Learn more</a></span>
</div>
</div>
        </li>



        <li>
<div class = "cour">
		<div class="c1">
			<img src = "./udemy.jpg" width = "140px" heigth = "140px"/></div>
		<div>

            <strong>Udemy</strong>
            <br>
            <span class="level">Beginner</span>
            <br>
            <span class="duration"><i class="fas fa-clock"></i> 2+ hours</span>
            <br>
            Rating: <span class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i>(4.2)</span>
            <br>
            <span class="description">Learn HTML for beginners step by step, with projects included</span>
            <br>
            <span class="website"><a href="https://www.udemy.com/course/hmtl5-training/" target="_blank">Learn more</a></span>
</div>
</div>
        </li>

<li>
<div class = "cour">
		<div class="c1">
			<img src = "./codeacademy.jpg" width = "140px" heigth = "140px"/></div>
		<div>

<strong>Codeacademy</strong>
            <br>
            <span class="level">Intermediate</span>
            <br>
            <span class="duration"><i class="fas fa-clock"></i> 13 hours</span>
<br>
           Rating: <span class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i>(4.4)</span>
            

            <br>
            <span class="description">Learn how to implement elegant transitions, create new layouts and serve users with dynamic needs.</span>
            <br>
            <span class="website"><a href="https://www.codecademy.com/learn/learn-intermediate-css" target="_blank">Learn more</a></span>
</div>
</div>
        </li>



<li>
<div class = "cour">
		<div class="c1">
			<img src = "./corsera.jpg" width = "140px" heigth = "140px"/></div>
		<div>

            <strong>Coursera(HTML, CSS, and Javascript for Web Developers)</strong>
            <br>
            <span class="level">Intermediate</span>
            <br>
            <span class="duration"><i class="fas fa-clock"></i> 3 weeks </span>
            <br>
            Rating: <span class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i>(4.7)</span>
            <br>
            <span class="description">In this course, we will learn the basic tools that every web page coder needs to know. We will start from the ground up by learning how to implement modern web pages with HTML and CSS. We will then advance to learning how to code our pages such that its components rearrange and resize themselves automatically based on the size of the user’s screen. </span>
            <br>
            <span class="website"><a href="https://www.coursera.org/learn/html-css-javascript-for-web-developers" target="_blank">Learn more</a></span>
</div>
</div>
        </li>



<li>
<div class = "cour">
		<div class="c1">
			<img src = "./educative.jpg" width = "140px" heigth = "140px"/></div>
		<div>

            <strong>educative(Learn HTML, CSS, and JavaScript from Scratch)</strong>
            <br>
            <span class="level">Beginner</span>
            <br>
            <span class="duration"><i class="fas fa-clock"></i> 10 hours</span>
            <br>
            <span class="description">
Learn to code and create your own web pages using HTML, CSS, and JavaScript in this interactive web development course for beginners.
</span>
            <br>
            <span class="website"><a href="https://www.educative.io/courses/learn-html-css-javascript-from-scratch" target="_blank">Learn more</a></span>
        </div>
</div>
</li>

   

         




        <!-- Add more courses as needed -->
    </ul>

</body>
