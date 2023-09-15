
<?php
$servername = "localhost";
$username = "id21113257_root"; // Replace with your XAMPP MySQL username
$password = "Raj@2002";     // Replace with your XAMPP MySQL password
$dbname = "id21113257_grs";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>