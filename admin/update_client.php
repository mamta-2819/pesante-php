<?php
$msg = "";
$row = "";
include 'function.inc.php';
include 'connection.inc.php';
include 'header.php';

if (isset($_GET['edit']) && ($_GET['edit'] != '')) {
    $id = $_GET['edit'];

    $clients = "SELECT * FROM `clients` WHERE id=$id";
    $result = mysqli_query($connection, $clients);
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $id = $row['id'];        

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
                                <h1>Update Client</h1>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                    <li class="breadcrumb-item active">Client</li>
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
                                        
                                        <div class="md-form col-sm-12">
                                            <label data-error="wrong" data-success="right" for="defaultForm-email">Existing Image</label><br>
                                            <img name="img" height="100px" width="100px" src=<?php echo 'data:image/jpeg;base64,' . base64_encode($row['images'])?> class="img-fluid mb-2" alt="Legal Doc" />
                                        </div>
                                        <div class="md-form col-sm-12">
                                            <label data-error="wrong" data-success="right">Choose New Image</label>
                                            <input name="image" type="file" class="form-control validate">
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
        header('location: clients.php');
    }
} else {
    header('location: clients.php');
}
if (isset($_POST['Submit'])) {
    
        $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
        $update_img = "UPDATE `clients` SET `images`='$image' WHERE `id`='$id'";
        $result = mysqli_query($connection, $update_img);
    
        if ($result > 0) {
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success</strong> Your client record successfully updated
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';

            echo "<script>
            setTimeout(function() {
                window.location.replace('clients.php')
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