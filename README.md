# University Registration System

This is a simple web application for managing course registrations at a university.

## Setup Instructions

### 1. Setting up the Database

1.1. Open PHPMyAdmin or any MySQL database management tool.

1.2. Create a new database named `university_registration`.

1.3. Create two tables within the `university_registration` database:

#### Table: courses
- Columns:
    - course_id (INT, Primary Key)
    - course_name (VARCHAR)
    - description (TEXT)
    - max_capacity (INT)

#### Table: students
- Columns:
    - student_id (INT, Primary Key, Auto Increment)
    - name (VARCHAR)
    - email (VARCHAR)

1.4. Populate the `courses` table with sample data if desired.

### 2. Running the PHP Scripts

2.1. Clone or download the project repository to your local machine.

2.2. Place the PHP files (`index.php`, `member.php`, `register.php`, `contact.php`, `view_courses.php`) in your web server's document root directory.

2.3. Make sure your web server (e.g., Apache, Nginx) and MySQL server are running.

2.4. Open your web browser and navigate to the URL corresponding to your local server setup (e.g., `http://localhost/`).

2.5. You should now be able to access the home page (`index.php`) and navigate to other pages from the navigation menu.

### 3. Additional Notes

- Ensure that PHP is properly configured on your web server and that the necessary PHP modules (e.g., PDO) are enabled.

- Modify the database connection settings in the PHP files if your database setup differs from the default configuration.

- Remember to handle form submissions and database operations securely to prevent SQL injection and other security vulnerabilities.

- Feel free to customize the design and functionality of the web application according to your requirements.
