
<?php
// Get the question ID from the query parameter
if (isset($_GET['id'])) {
    $complaintsId = $_GET['id'];

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
    $sql = "UPDATE complaints SET status = 1 WHERE id = $complaintsId";

    if ($conn->query($sql) === TRUE) {
        header("Location: view_complain.php");
        exit();
    } else {
        echo "Error updating complain: " . $conn->error;
    }

    $conn->close();
} else {
    echo "Complain ID not provided.";
}
?>