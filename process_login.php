
<?php
// Assuming you have a MySQL database connection established
require_once 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $enteredEmail = $_POST["username"];
    $enteredpassword = $_POST["password"];

    // Sanitize user inputs to prevent SQL injection (replace with proper sanitization methods)
    $enteredEmail = mysqli_real_escape_string($conn, $enteredEmail);
    $enteredpassword = mysqli_real_escape_string($conn, $enteredpassword);

    // Query to check if the entered email and mobile combination exists in the database
    $query = "SELECT * FROM user_registration WHERE email='$enteredEmail' AND password='$enteredpassword' AND status=1";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) === 1) {
        // Successful login
        $user = mysqli_fetch_assoc($result);
        session_start();

        // Set user ID and category in the session
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['category'] = $user['category'];
        //echo "Login successful. Welcome, " . $user['email'] . "!";
        header("Location: Dashboard.php");
        exit();

    } else 
    {
        // Invalid credentials
        echo "Invalid username or password. Please try again.";
    }

    // Close the database connection
    mysqli_close($conn);
}
?>