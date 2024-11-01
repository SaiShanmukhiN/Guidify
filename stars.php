<?php
// Database connection
$servername = "your_database_host";
$username = "your_username";
$password = "your_password";
$dbname = "your_database_name";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch courses from the database
$sql = "SELECT * FROM courses";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Courses</title>
</head>
<body>

    <h1>Online Courses</h1>

    <?php
    // Display courses
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<div>";
            echo "<h2>" . $row["name"] . "</h2>";
            echo "<p>Website: <a href='" . $row["link"] . "' target='_blank'>" . $row["link"] . "</a></p>";
            echo "<p>Rating: " . $row["rating"] . "</p>";
            echo "<p>Duration: " . $row["duration"] . " hours</p>";
            echo "<p>Cost: $" . $row["cost"] . "</p>";
            echo "</div>";
        }
    } else {
        echo "<p>No courses found</p>";
    }

    // Close the database connection
    $conn->close();
    ?>

</body>
</html>
