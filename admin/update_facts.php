<?php
$msg = "";
$row = "";
include 'function.inc.php';
include 'connection.inc.php';

   $select_single_data = "SELECT * FROM `facts` WHERE 1";
    $result = mysqli_query($connection, $select_single_data);
   // if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        

?>
<?php include "header.php"; ?>

        <body class="hold-transition sidebar-mini">
            <?php
            include 'navbar.php';
            include 'aside.php';
            ?>
            <div class="content-wrapper">
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1>Update Facts Info</h1>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                    <li class="breadcrumb-item active">Facts Info</li>
                                </ol>
                            </div>
                        </div>
                    </div><!-- /.container-fluid -->
                </section>
                <?php 

if (isset($_POST['Submit'])) {
    $quality = $_POST['quality'];
    $workers = $_POST['workers'];
    $experience = $_POST['experience'];
    $customers = $_POST['customers'];
    
    $update_query = "UPDATE `facts` SET `quality`='$quality',`workers`='$workers',`experience`='$experience',`customers`='$customers' WHERE `id`='1'";
        $result = mysqli_query($connection, $update_query);
   
   
        if ($result > 0) {
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success</strong> Facts Info Successfully Updated into the Database
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';

             echo "<script> window.location.replace('update_facts.php');</script>";
        } else {
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Alert!</strong> Something went wrong please try again!!!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
        }
}
?>
                <section class="content card ">
                    <div class="col-12">
                        <div class="card-body">
                            <form method="POST">
                                <div class="container">
                                    <div class="row">

                                        <div class="mb-3 col-sm-6">
                                            <label class="form-label">Update Quality no</label>
                                            <input type="text" name="quality" value="<?php echo $row['quality']; ?>" class="form-control">
                                        </div>
                                       <div class="mb-3 col-sm-6">
                                            <label class="form-label">Update Workers no</label>
                                            <input type="text" name="workers" value="<?php echo $row['workers']; ?>" class="form-control">
                                        </div>
                                       <div class="mb-3 col-sm-6">
                                            <label class="form-label">Update Experience no</label>
                                            <input type="text" name="experience" value="<?php echo $row['experience']; ?>" class="form-control">
                                        </div>
                                        <div class="mb-3 col-sm-6">
                                            <label class="form-label">Update Customers no</label>
                                            <input type="text" name="customers" value="<?php echo $row['customers']; ?>" class="form-control">
                                        </div>                                    
                                                                               
                                        <div class="form-group col-sm-7">
                                        <button type="submit" name="Submit" class="btn btn-primary centre">Submit</button>
                                        <h3><?php echo $msg; ?></h3>
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div>
                        </div>
                </section>
            </div>
            

            <?php include 'footer.php'; ?>
            <?php // include '../navfootersider/foot.php'; ?>
        </body>

        </html>

<script src="ckeditor/ckeditor.js"></script>
<script type="text/javascript">
    // Initialize CKEditor
    //CKEDITOR.inline( 'short_desc' );

    CKEDITOR.replace('address', {

        width: "100%",
        height: "200px"

    });
</script>