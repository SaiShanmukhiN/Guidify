<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 50px;
            background:#68a1b8;
        }
        h1 {
            color:#55325d;
            animation: fadeIn 3s ease-in-out; /* Use a fadeIn animation */
        }
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
        p {
            color: #55325d;
        }
        .logo {
            max-width: 200px;
            height: auto;
        }
        .register-button {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            background-color: #3498db;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <h1 style="font-size:150px; color:#503E2C; text-shadow: 0 0 5px #bcd4e6, 0 0 5px #bcd4e6, 0 0 5px #bcd4e6, 0 0 20px #bcd4e6;">GUIDIFY</h1>
    <h2 style="font-size:60px;">Welcome to Online Course Guide!</h2>
    <a href="home2.php" class="register-button">Explore:)</a>
</body>
</html>