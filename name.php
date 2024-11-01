<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px;
        }

        .profile-container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .profile-info {
            text-align: center;
        }

        .profile-info h2 {
            color: #333;
        }

        .profile-info p {
            color: #666;
        }

        .logout-btn {
            display: block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #333;
            color: #fff;
            text-align: center;
            text-decoration: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .logout-btn:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
    <header>
        <h1>User Profile</h1>
    </header>

    <div class="profile-container">
        <div class="profile-info">
            <h2><?php echo $username; ?></h2>
            <p>Email: <?php echo $email; ?></p>
        </div>

        <a href="#" class="logout-btn">Logout</a>
    </div>
</body>
</html>
