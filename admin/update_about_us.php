<?php
$msg = "";
$row = "";
include 'function.inc.php';
include 'connection.inc.php';

   $about = "SELECT * FROM `abouts` WHERE 1";
    $result = mysqli_query($connection, $about);
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
                                <h1>Update About Info</h1>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                    <li class="breadcrumb-item active">About Info</li>
                                </ol>
                            </div>
                        </div>
                    </div><!-- /.container-fluid -->
                </section>
    
    <?php 
    if(isset($_POST['Submit'])) {
        $description = $_POST['description'];

        if(!empty($_FILES['image']['tmp_name'])) {
        $images = addslashes(file_get_contents($_FILES['image']['tmp_name']));
        $update_img = "UPDATE `abouts` SET `images`='$images',`massage`='$description'WHERE 1";
        // UPDATE `abouts` SET `massage`='$description',`images`='$images' WHERE `id`= '1' ";
        $result = mysqli_query($connection, $update_img);
        }
        else {        
        $update_img = "UPDATE `abouts` SET `massage`='$description' WHERE `id`='1'";
        $result = mysqli_query($connection, $update_img);
        }
   
        if ($result > 0) {
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success</strong> Your Data Successfully Updated.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';            
          echo "<script> window.location.replace('update_about_us.php');</script>";
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

                                        <div class="md-form col-sm-12">
                                            <label data-error="wrong" data-success="right">Existing Image</label><br>
                                            <img name="img" height="100px" width="100px" src=<?php echo 'data:image/jpeg;base64,' . base64_encode($row['images']) ?> class="img-fluid mb-2" alt="about image" />
                                        </div>

                                        <div class="md-form col-sm-12">
                                            <label data-error="wrong" data-success="right">Choose New Image</label>
                                            <input name="image" type="file" class="form-control" accept="image/*">
                                        </div>
                                        <div class="form-group col-sm-12">
                                            <label>Description</label>
                                            <textarea name="description" class="form-control"><?php echo $row['massage']; ?></textarea>
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

    CKEDITOR.replace('description', {

        width: "100%",
        height: "200px"

    });
</script>