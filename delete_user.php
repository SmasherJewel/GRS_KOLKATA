
<?php
// Get the question ID from the query parameter
if (isset($_GET['id'])) {
    $userId = $_GET['id'];

    // Perform database update to set status as 1 (approved)
    // Replace this with your actual database connection and update query
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "grs";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Update status to 1 for the given question ID
    $sql = "DELETE FROM user_registration WHERE id = $userId";

    if ($conn->query($sql) === TRUE) {
        header("Location: view_user.php");
        exit();
    } else {
        echo "Error updating User: " . $conn->error;
    }

    $conn->close();
} else {
    echo "User ID not provided.";
}
?>