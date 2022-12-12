<?php
$msg = "";
$row = "";
include 'function.inc.php';
include 'connection.inc.php';

    $select_single_data = "SELECT * FROM `abouts` WHERE `id` = '1'";
    $result = mysqli_query($connection, $select_single_data);
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $id = $row['id'];
        $name = $row['title'];
        //$status = $row['c_status'];

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
                                    <li class="breadcrumb-item active">Update About Info</li>
                                </ol>
                            </div>
                        </div>
                    </div><!-- /.container-fluid -->
                </section>
                <section class="content card ">
                    <div class="col-12">
                        <div class="card-body">
                            <form method="post" enctype="multipart/form-data">
                                <div class="container">
                                    <div class="row">

                                        <!-- <div class="mb-3 col-sm-12">
                                            <label for="exampleInputEmail1" class="form-label">Title</label>
                                            <input type="text" name="name" value="<?php echo $row['name']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                                        </div> -->
                                        <div class="md-form col-sm-12">
                                            <label data-error="wrong" data-success="right">Existing Image</label><br>
                                            <img name="img" height="100px" width="100px" src=<?php echo 'data:image/jpeg;base64,' . base64_encode($row['images']) ?> class="img-fluid mb-2" alt="about image" />
                                        </div>

                                        <div class="md-form col-sm-12">
                                            <label data-error="wrong" data-success="right">Choose New Image</label>
                                            <input name="image" type="file" class="form-control validate">
                                        </div>
                                        <div class="form-group col-sm-12">
                                            <label>Description</label>
                                            <textarea name="description" class="form-control"><?php echo $row['description']; ?></textarea>
                                        </div>
                                        <div class="form-group col-sm-7">
                                        <button type="submit" name="Submit" class="btn btn-primary centre">Submit</button>
                                        <h3><?php echo $msg; ?></h3>
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div>
                </section>
            </div>
            </div>

            <?php include 'footer.php'; ?>
            <?php // include '../navfootersider/foot.php'; ?>
        </body>

        </html>
<?php

    }
    
if (isset($_POST['Submit'])) {
    $name = simplename($_POST['name']);
    $description = simplename($_POST['description']);
//     echo "<pre>";
// print_r($_FILES);
    if (!empty($_FILES['img1']['tmp_name'])) {
        $images = addslashes(file_get_contents($_FILES['img1']['tmp_name']));
        $update_img = "UPDATE `jag_about_us` SET `title`='$name',`description`='$description',`image`='$images' WHERE `id`='$id'";
        $result = mysqli_query($connection, $update_img);
    }
    else {
        // $images = addslashes(file_get_contents($_FILES['img1']['tmp_name']));
        $update_img = "UPDATE `jag_about_us` SET `title`='$name',`description`='$description' WHERE `id`='$id'";
        $result = mysqli_query($connection, $update_img);
    }
   
        if ($result > 0) {
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success</strong> Your Data Successfully Updated into the Database
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';

            echo "<script>
            setTimeout(function() {
                window.location.replace('about_us.php')
              }, 1000);

        </script>";
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

<script src="ckeditor/ckeditor.js"></script>
<script type="text/javascript">
    // Initialize CKEditor
    //CKEDITOR.inline( 'short_desc' );

    CKEDITOR.replace('description', {

        width: "100%",
        height: "200px"

    });
</script>