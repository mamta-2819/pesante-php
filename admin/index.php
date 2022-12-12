
<?php
include './connection.inc.php';
if(isset($_SESSION['username']) && ($_SESSION['username']!='')){
// echo "hello";


?>


<?php include "header.php"; ?>
<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
    <?php
    include 'navbar.php';
    include 'aside.php'
    ?>
    <!-- /.navbar -->


    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
              </ol>
            </div>
            <!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <?php include 'section.php'; ?>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <?php include 'footer.php'; ?>

    </div>
  <!-- ./wrapper -->



<?php 
}
else
{
  header('location:super_Admin.php');
}
?> 