
<?php
require_once 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Sanitize and validate your form data here
    
    $name = $_POST["name"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $mobile = $_POST["mobile"];
    $dob = $_POST["dob"];
    $sex = $_POST["sex"];
    $nationality = $_POST["nationality"];
    $isWorker = isset($_POST["is_worker"]) ? 1 : 0;
    $category =  $_POST["category"]; // Set default category if not a worker
    $identityDocument = $_FILES["identity_document"]["name"]; // File name
    
    // Prepare and execute an SQL statement to insert data
    $stmt = $conn->prepare("INSERT INTO user_registration (name, email, address, mobile, dob, sex, nationality, is_worker, category, identity_document) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssssiis", $name, $email, $address, $mobile, $dob, $sex, $nationality, $isWorker, $category, $identityDocument);
    
    if ($stmt->execute()) {
        // Move the uploaded file to the "uploads" folder
        $targetDir = "uploads/";
        $targetFile = $targetDir . basename($_FILES["identity_document"]["name"]);
        move_uploaded_file($_FILES["identity_document"]["tmp_name"], $targetFile);
        
        header("Location: login.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }
    
    $stmt->close();
    $conn->close();
} else {
    echo "Form submission is invalid.";
}
?>