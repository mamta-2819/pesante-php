<?php
include 'connection.inc.php';
include 'header.php';

if (isset($_SESSION['username']) && ($_SESSION['username'] != '')) 
{
  $img = "SELECT * FROM `services` WHERE 1";
  $imageresult = mysqli_query($connection, $img);

?>
  

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
                <h1>Services</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Services</li>
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
                    <h3 class="card-title">Services</h3>
                  </div>
                  <!-- /.card-header -->
                  <?php include 'add_service.php';
                        include 'update_legal.php';
                  // include 'update.php';
                  ?> 
               
                  <div class="card-body">
                  <a href="" class="btn btn-success text-center" data-toggle="modal" data-target="#add_service">Add New Service</a>
                  <div class="table-responsive ">
                    <table id="example1" class="table table-bordered table-striped">

                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Title</th>
                          <th>Images</th>
                          <th>Description</th>
                          <th>Update</th>
                          <th>Delete</th>
                         </tr>
                      </thead>

                      <tbody>

                        <?php
                          $cnt=1;
                        while ($rowimage = mysqli_fetch_array($imageresult)) 
                        {
                        ?>
                            <tr>
                              <td><?php echo $cnt; ?></td>
                              <td><?php echo $rowimage['name']; ?></td>
                              <td><img height="100px" width="100px" <?php echo ' src="data:image/jpeg;base64,' . base64_encode($rowimage['image']) . '"' ?> class="img-fluid mb-2" alt="service" /></td>
                              <td><?php echo $rowimage['description']; ?></td>
                              <td><a href="update_service.php?edit=<?php echo $rowimage['id']; ?>" class="btn btn-warning">Update</a>
                              <td> <a href="delete_service.php?delete=<?php echo $rowimage['id']; ?>" class="btn btn-danger">Delete</a>
                            </tr>
                        <?php 
                        $cnt++;
                        }  ?>
                      </tbody>
                      <tfoot>
                      <tr>
                          <th>ID</th>
                          <th>Title</th>
                          <th>Images</th>
                          <th>Description</th>
                          <th>Update</th>
                          <th>Delete</th>
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

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables -->
    <script src="plugins/datatables/jquery.dataTables.js"></script>
    <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
    <script src="plugins/ekko-lightbox/ekko-lightbox.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
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
      <script>
    $(function() {
      $(document).on('click', '[data-toggle="lightbox"]', function(event) {
        event.preventDefault();
        $(this).ekkoLightbox({
          alwaysShowClose: true
        });
      });

      $('.filter-container').filterizr({
        gutterPixels: 3
      });
      $('.btn[data-filter]').on('click', function() {
        $('.btn[data-filter]').removeClass('active');
        $(this).addClass('active');
      });
    })
  </script>
  </body>

  </html>
<?php
} else {
  header('location:./AdminLogin/super_Admin.php');
}
?>