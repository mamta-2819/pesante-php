<?php
$msg = "";
$row = "";
include 'function.inc.php';
include 'connection.inc.php';
include 'header.php';

if (isset($_GET['edit']) && ($_GET['edit'] != '')) {
    $id = $_GET['edit'];

    $select_single_data = "SELECT * FROM `services` WHERE id=$id";
    $result = mysqli_query($connection, $select_single_data);
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $id = $row['id'];
        $name = $row['name'];

?>

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
                                <h1>Update Service</h1>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                    <li class="breadcrumb-item active">Service</li>
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

                                        <div class="mb-3 col-sm-12">
                                            <label class="form-label">Name</label>
                                            <input type="text" name="name" value="<?php echo $row['name']; ?>" class="form-control" aria-describedby="emailHelp">

                                        </div>
                                        <div class="md-form col-sm-12">
                                            <label data-error="wrong" data-success="right" for="defaultForm-email">Existing Image</label><br>
                                            <img name="img" height="100px" width="100px" src="<?php echo 'data:image/jpeg;base64,' . base64_encode($row['image']) . '"'?> class="img-fluid mb-2" alt="Legal Doc" />
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

    } else {
        header('location: services.php');
    }
} else {
    header('location: services.php');
}
if (isset($_POST['Submit'])) {
    $name = simplename($_POST['name']);
    $description = simplename($_POST['description']);
//     echo "<pre>";
// print_r($_FILES);
    if (!empty($_FILES['image']['tmp_name'])) {
        $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
        $update_img = "UPDATE `services` SET `name`='$name',`description`='$description',`image`='$image' WHERE `id`='$id'";
        $result = mysqli_query($connection, $update_img);
    }
    else {
        // $images = addslashes(file_get_contents($_FILES['img1']['tmp_name']));
        $update_img = "UPDATE `services` SET `name`='$name',`description`='$description' WHERE `id`='$id'";
        $result = mysqli_query($connection, $update_img);
    }
   
        if ($result > 0) {
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success</strong> Your service record Successfully Updated
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';

            echo "<script>
            setTimeout(function() {
                window.location.replace('services.php')
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