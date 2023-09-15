<?php
session_start();

if (isset($_SESSION['category'])) 
{
    $cat=$_SESSION['category'];
    
    // Use the $studentId for personalized content or actions
}


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "grs";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Query to fetch all questions from the database
    $stmt = $conn->prepare("SELECT * FROM complaints WHERE work_needed = :cat AND status IN(1,2)");
    $stmt->bindParam(':cat', $cat, PDO::PARAM_STR);
    $stmt->execute();
    $user = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>

<!-- Your HTML code for the page goes here -->
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

                    <!-- DataTable to display the questions -->
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Service Record</h5>
                            <table id="questionTable" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>SL NO</th>
                                        <th>DATE ISSUED</th>
                                        <th>Details</th>
                                        <th>Action</th>
                                       
                                        <!-- Add other column headers for additional fields -->
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($user as $user)
                                    { ?>
                                        <tr>
                                            <td><?php echo $user['id']; ?></td>
                                             <td><?php echo $user['complaint_datetime']; ?></td>
                                              
                                              <td><?php echo $user['details']; ?></td>
                                                                                                                
                                        <td>
                                            <?php if ( $user['status'] == 1): ?>
                                                
                                                <a href="complete_complain.php?id=<?php echo $user['id']; ?>" class="btn btn-sm btn-success"
                                                   onclick="return confirm('Are you sure you want to approve this question?');">
                                                    <i class="fas fa-check"></i> Complete
                                                    
                                                </a>
                                            <?php else: ?>
                                                <span class="text-success">Completed</span>
                                            <?php endif; ?>
                                        </td>       
                                        </tr>
                                        <?php } ?>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <?php require 'footer.php'; ?>
        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
     <!-- jQuery -->
    <script src="assets/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="assets/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="assets/plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="assets/plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="assets/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="assets/plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="assets/plugins/moment/moment.min.js"></script>
    <script src="assets/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="assets/plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="assets/dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="assets/dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="assets/dist/js/assets/pages/dashboard.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>
</html>

<!-- Include Font Awesome icons -->