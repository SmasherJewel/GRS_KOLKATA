<?php
session_start();

// Ensure the user is logged in
if (!isset($_SESSION['user_id'])) {
    // Redirect to login page or handle unauthorized access
    header("Location: login.php");
    exit();
}

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "grs";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Fetch user data based on userID from the session
    $userID = $_SESSION['user_id'];
    $stmt = $conn->prepare("SELECT * FROM user_registration WHERE ID = :userID");
    $stmt->bindParam(':userID', $userID, PDO::PARAM_INT);
    $stmt->execute();
    $userData = $stmt->fetch(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
    // Handle the error gracefully, e.g., show a generic error message
}

// Close the database connection
$conn = null;
?>

<!DOCTYPE html>
<html lang="en">
<?php require 'header.php'?>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <?php require 'header-nav.php' ?>
        <?php require 'left-menu.php' ?>

        <div class="content-wrapper">
            <div class="content-header"></div>
            <!-- Main content -->
            <section class="content">
          
    <div class="container">
        <div class="profile-form">
            <h2 class="form-title">User Profile</h2>
            <form>
                <div class="form-group">
                    <label for="name" class="label">Name:</label>
                    <input type="text" class="form-control" id="name" name="name" value="<?php echo $userData['name']; ?>" readonly>
                </div>

                <!-- Include other form fields and pre-fill them with user data -->

                <div class="form-group">
                    <label class="label">Are you a worker?</label>
                    <input type="checkbox" id="is_worker" name="is_worker" <?php if ($userData['is_worker']) echo 'checked'; ?> disabled>
                </div>

                <div class="form-group" id="category_group">
                    <label for="category" class="label">Category:</label>
                    <input type="text" class="form-control" id="category" name="category" value="<?php echo $userData['category']; ?>" readonly>
                </div>

                <div class="form-group" id="category_group">
                    <label for="category" class="label">Email:</label>
                    <input type="text" class="form-control" id="email" name="email" value="<?php echo $userData['email']; ?>" readonly>
                </div>

                <div class="form-group" id="category_group">
                    <label for="category" class="label">Phone Number:</label>
                    <input type="text" class="form-control" id="mobile" name="mobile" value="<?php echo $userData['mobile']; ?>" readonly>
                </div>

                <div class="form-group" id="category_group">
                    <label for="category" class="label">Address:</label>
                    <input type="text" class="form-control" id="address" name="address" value="<?php echo $userData['address']; ?>" readonly>
                </div>

                <div class="form-group" id="category_group">
                    <label for="category" class="label">D.O.B:</label>
                    <input type="text" class="form-control" id="dob" name="dob" value="<?php echo $userData['dob']; ?>" readonly>
                </div>

                <div class="form-group" id="category_group">
                    <label for="category" class="label">sex:</label>
                    <input type="text" class="form-control" id="sex" name="sex" value="<?php echo $userData['sex']; ?>" readonly>
                </div>

                <div class="form-group" id="category_group">
                    <label for="category" class="label">Nationlity:</label>
                    <input type="text" class="form-control" id="Nationlity" name="mobile" value="<?php echo $userData['nationality']; ?>" readonly>
                </div>
                
            </form>
        </div>
    </div>
</section>
</div>
</div>
    <?php require 'footer.php'; ?>
</body>
</html>