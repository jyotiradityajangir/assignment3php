<?php
// PHP code to fetch courses from the database and display them
// Include database connection code here if necessary
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Courses</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Available Courses</h1>
    </header>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="register.php">Register</a></li>
            <li><a href="view_courses.php">View Courses</a></li>
            <li><a href="contact.php">Contact Us</a></li>
        </ul>
    </nav>
    <main>
        <section>
            <h2>Course List</h2>
            <!-- PHP code to fetch and display course list -->
            <?php
            // Example code to fetch and display courses
            ?>
            <ul>
                <li>Course 1</li>
                <li>Course 2</li>
                <!-- Add courses dynamically from database -->
            </ul>
        </section>
    </main>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> University Registration System. All rights reserved.</p>
    </footer>
</body>
</html>
