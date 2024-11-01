<?php
session_start();

// Check if the user is logged in
if (empty($_SESSION['username'])) {
    header('location: login.php');
    exit();
}

// Establish a database connection (assuming you already have a database connection)
$pdo = new PDO('mysql:host=localhost;dbname=your_database_name', 'your_username', 'your_password');

// Prepare and execute a query to fetch the favorite courses for the logged-in user
$stmt = $pdo->prepare("SELECT course_name FROM favorites WHERE user_id = ?");
$stmt->execute([$_SESSION['user_id']]);
$favoriteCourses = $stmt->fetchAll(PDO::FETCH_COLUMN);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css" />
    <title>User Profile - Guidify</title>
    <!-- Include necessary CSS -->
</head>
<body>
    <!-- Your header code here -->

    <div class="container">
        <p>Name: <?php echo $_SESSION['username']; ?></p>
        <p>Email: <?php echo $_SESSION['email']; ?></p>
        <!-- Display other user details -->
        
        <h2>Favorite Courses:</h2>
        <ul>
            <?php foreach ($favoriteCourses as $course): ?>
                <li><?php echo $course; ?></li>
            <?php endforeach; ?>
        </ul>

        <a href="profileup.php">Edit Profile</a>
    </div>

    <!-- Your footer code here -->
</body>
</html>
