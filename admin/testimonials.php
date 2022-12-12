<?php
include 'connection.inc.php';

if (isset($_SESSION['username']) && ($_SESSION['username'] != '')) {
  $select = "SELECT * FROM `testimonials` WHERE 1";
  $result = mysqli_query($connection, $select);
} else {
  header('location:./AdminLogin/super_Admin.php');
}



?>
<?php include "header.php"; ?>
<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Navbar -->
    <?php
    include 'navbar.php';
    include 'aside.php';
    ?>
    <!-- end navbar -->
    <!-- Main Sidebar Container -->




    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Testimonials</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Testimonials</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-12">
            <div class="card">

              <!-- /.card -->

              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Testimonials</h3>
                </div>
                <!-- /.card-header -->
            
                <div class="card-body">
                <div class="table-responsive ">
                  <table id="example1" class="table table-bordered table-striped">

                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Message</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>

                    <tbody>

                      <?php
                        $cnt=1;
                      if (mysqli_num_rows($result) > 0) {
                        while ($rows = mysqli_fetch_array($result)) {
                          $id = $rows['id'];
                          $status = $rows['status'];
                      ?>                      
                          <tr>
                            <td><?php echo $cnt; ?></td>
                            <td><?php echo $rows['name']; ?></td>
                            <td><img height="100px" width="100px" <?php echo ' src="data:image/jpeg;base64,' . base64_encode($rows['images']) . '"' ?> class="img-fluid mb-2" alt="Testimonial Image" /></td>
                            <td><?php echo $rows['massage']; ?></td>
                            <td><?php echo ($status=='1'?'<a href="approve_testimonial.php?id='.$id.'&status='.$status.'" class="btn btn-success">Approved</a>':'<a href="approve_testimonial.php?id='.$id.'&status='.$status.'" class="btn btn-success">pending</a>'); ?></td>
                            <td> <a href="delete_testimonial.php?delete=<?php echo $id; ?>" class="btn btn-danger">Delete</a>
                          

                          </tr>
                      <?php }
                      } 
                      $cnt++; ?>
                    </tbody>
                    <tfoot>
                      <tr>
                      <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Designation</th>
                        <th>Image</th>
                        <th>Message</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                      </tr>
                    </tfoot>
                  </table>
                </div>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <?php include 'footer.php';   ?>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  
  <!-- page script -->
  <script>
    $(function() {
      $("#example1").DataTable();
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
      });
    });
  </script>
</body>

</html>