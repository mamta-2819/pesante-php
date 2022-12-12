<?php
include 'connection.inc.php';
include 'header.php';

if (isset($_SESSION['username']) && ($_SESSION['username'] != '')) 
{
  $img = "SELECT * FROM `clients` WHERE 1";
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
                <h1>Clients</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Clients</li>
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
                    <h3 class="card-title">Clients</h3>
                  </div>
                  <!-- /.card-header -->
                  <?php include 'add_client.php';
                        include 'update_legal.php';
                  // include 'update.php';
                  ?> 
               
                  <div class="card-body">
                  <a href="" class="btn btn-success text-center" data-toggle="modal" data-target="#add_client">Add New Client</a>
                  <div class="table-responsive ">
                    <table id="example1" class="table table-bordered table-striped">

                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Images</th>
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
                              <td><img height="100px" width="100px" <?php echo ' src="data:image/jpeg;base64,' . base64_encode($rowimage['images']) . '"' ?> class="img-fluid mb-2" alt="client" /></td>
                              <td><a href="update_client.php?edit=<?php echo $rowimage['id']; ?>" class="btn btn-warning">Update</a>
                              <td> <a href="delete_client.php?delete=<?php echo $rowimage['id']; ?>" class="btn btn-danger">Delete</a>
                            </tr>
                        <?php 
                        $cnt++;
                        }  ?>
                      </tbody>
                      <tfoot>
                      <tr>
                          <th>ID</th>
                          <th>Images</th>
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

    
  </body>

  </html>
<?php
} else {
  header('location:./AdminLogin/super_Admin.php');
}
?>