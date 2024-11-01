<?php
session_start();

// Check if the user is logged in
if (empty($_SESSION['username'])) {
    header('location: login.php');
    exit();
}

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['course'])) {
    // Sanitize the input (assuming you have a function for sanitization)
    $courseName = sanitize($_POST['course']);
    
    // Establish a database connection (assuming you already have a database connection)
    $pdo = new PDO('mysql:host=localhost;dbname=your_database_name', 'your_username', 'your_password');

    // Prepare and execute a query to insert the course into favorites for the logged-in user
    $stmt = $pdo->prepare("INSERT INTO favorites (user_id, course_name) VALUES (?, ?)");
    $stmt->execute([$_SESSION['user_id'], $courseName]);

    // Redirect back to the courses page
    header('location: c.php');
    exit();
}
?>
