<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Registration Form</h1>
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
            <h2>Registration Form</h2>
            <!-- Add registration form here -->
            <form action="register_process.php" method="post">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required><br><br>
                
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required><br><br>
                
                <label for="courses">Select Course:</label>
                <select id="courses" name="courses" required>
                    <option value="course1">Course 1</option>
                    <option value="course2">Course 2</option>
                    <!-- Add options dynamically from database -->
                </select><br><br>
                
                <input type="submit" value="Register">
            </form>
        </section>
    </main>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> University Registration System. All rights reserved.</p>
    </footer>
</body>
</html>
