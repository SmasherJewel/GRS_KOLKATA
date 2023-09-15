<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 

if (isset($_SESSION['category'])) 
{
    $cat=$_SESSION['category'];
    
    // Use the $studentId for personalized content or actions
}
?>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
<div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <!-- SidebarSearch Form -->
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item menu-open">
            <a href="Dashboard.php" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Dashboard</p>
                <i class="right fas fa-angle-left"></i>              
            </a> 
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="my_profile.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>My Profile</p>
                </a>
              </li>
               
         
              <?php if($cat=='admin') : ?>
                       <li class="nav-item">
                <a href="view_complain.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Work Assignment</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="view_user.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>User Management</p>
                </a>
              </li>
              <?php elseif($cat=='customer') : ?>
                      <li class="nav-item">
                <a href="add_complain.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lodge a Complain</p>
                </a>
              </li>
              <?php else : ?>
                      <li class="nav-item">
                <a href="service_record.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Service Record</p>
                </a>
              </li>  
              <?php endif; ?>
                           
            </ul>
          </li>
        
        </ul>
      </nav>  
      <!-- /.sidebar-menu -->
    </div>
     </aside>