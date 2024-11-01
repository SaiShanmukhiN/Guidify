<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Information</title>
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
    </style>
</head>
<body>

    <h1>Course Information</h1>

    <ul>
        <li>
	<div class = "cour">
		<div class="c1">
			<img src = "./Main_bg.jpg" width = "140px" heigth = "140px"/></div>
		<div>
			<strong>Course 1</strong>
            		<br>
            		<span class="level">Beginner</span>
            		<br>
            		<span class="duration"><i class="fas fa-clock"></i> 10 weeks</span>
            		<br>
            	Rating: <span class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
            		<br>
            		Amount: $99.99
            		<br>
            		<span class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis bibendum urna vitae libero commodo.</span>
            		<br>
            		<span class="website"><a href="https://example.com/course1" target="_blank">Learn more</a></span>
        
        </div> 
		
	
	</div>       

</li>

        <li>
            <div class="cour">
                <div class="c1">
                    <img src = "./Main_bg.jpg" width = "140px" heigth = "140px"/></div>
                <div>
                <div>
                    <strong>Course 2</strong>
                    <br>
                    <span class="level">Intermediate</span>
                    <br>
                    <span class="duration"><i class="fas fa-clock"></i> 8 weeks</span>
                    <br>
                    Rating: <span class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></span>
                    <br>
                    Amount: $79.99
                    <br>
                    <span class="description">Vestibulum euismod lacus nec semper efficitur. Quisque ut elit eget dolor varius aliquet.</span>
                    <br>
                    <span class="website"><a href="https://www.geeksforgeeks.org/python-programming-language/?ref=home-articlecards" target="_blank">Learn more</a></span>
                
                </div>
            </div>
        </li>

        <li>
            <div class="cour">
                <div class="c1">
                    <img src = "./Main_bg.jpg" width = "140px" heigth = "140px"/></div>
                <div>
                <div>
                    <strong>Course 3</strong>
                    <br>
                    <span class="level">Advanced</span>
                    <br>
                    <span class="duration"><i class="fas fa-clock"></i> 12 weeks</span>
                    <br>
                    Rating: <span class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
                    <br>
                    Amount: $129.99
                    <br>
                    <span class="description">Donec tincidunt justo in diam tristique, id scelerisque lacus fringilla. Sed efficitur feugiat odio, eget hendrerit arcu consequat vel.</span>
                    <br>
                    <span class="website"><a href="https://example.com/course3" target="_blank">Learn more</a></span>
                
                </div>
            </div>
        </li>
        <!-- Add more courses as needed -->
    </ul>

</body>
</html>