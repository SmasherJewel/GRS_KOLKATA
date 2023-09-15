
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $workNeeded = $_POST["work_needed"];
    $details = $_POST["details"];
    $priority = $_POST["priority"];
    $complaintDateTime = date("Y-m-d H:i:s");

    // Handle file upload
    $targetDir = "uploads/";
    $uploadedFile = $_FILES["attachment"]["name"];
    $targetFilePath = $targetDir . basename($uploadedFile);
    move_uploaded_file($_FILES["attachment"]["tmp_name"], $targetFilePath);

    // Perform database insert operation
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

    // Insert complaint into database
    $sql = "INSERT INTO complaints (work_needed, details, attachment, priority, status, complaint_datetime) VALUES ('$workNeeded', '$details', '$targetFilePath', '$priority', 0, '$complaintDateTime')";

    if ($conn->query($sql) === TRUE) {
        header("Location: Dashboard.php");
        exit();
    } else {
        echo "Error registering complaint: " . $conn->error;
    }

    $conn->close();
}
?>