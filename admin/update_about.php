<?php
$msg = "";
$row = "";
include 'function.inc.php';
include 'connection.inc.php';

if (isset($_GET['edit']) && ($_GET['edit'] != '')) {
    $id = $_GET['edit'];

    $select_single_data = "SELECT * FROM `jag_about` WHERE id=$id";
    $result = mysqli_query($connection, $select_single_data);
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $id = $row['id'];
        $name = $row['title'];
        //$status = $row['c_status'];

?>


        <!doctype html>
        <html lang="en">
        <!doctype html>
        <html lang="en">

        <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Shree Jagannathdham Temple</title>
  <link rel="icon" href="./dist/img/favicon.ico">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- Exta css by dev -->
  <link rel="stylesheet" href="extra.css">
</head>

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
                                <h1>Update Temple Feature</h1>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                    <li class="breadcrumb-item active">Temple Feature</li>
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
                                            <label for="exampleInputEmail1" class="form-label">Title</label>
                                            <input type="text" name="name" value="<?php echo $row['title']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                                        </div>
                                        <div class="md-form col-sm-12">
                                            <label data-error="wrong" data-success="right" for="defaultForm-email">Existing Image</label><br>
                                            <img name="img" height="100px" width="100px" <?php echo ' src="data:image/jpeg;base64,' . base64_encode($row['images']) . '"' ?> class="img-fluid mb-2" alt="Legal Doc" />
                                            <!-- <input  type="file" id="defaultForm-email" class="form-control validate" placeholder="Enter Caregorie Name"> -->

                                        </div>
                                        <div class="md-form col-sm-12">
                                            <label data-error="wrong" data-success="right" for="defaultForm-email">Image</label>
                                            <input name="img1" type="file" id="defaultForm-email" class="form-control validate" placeholder="Enter Caregorie Name">

                                        </div>
                                        <div class="form-group col-sm-12">
                                            <label for="exampleFormControlSelect1">Description</label>
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
        header('location: about.php');
    }
} else {
    header('location: about.php');
}
if (isset($_POST['Submit'])) {
    $name = simplename($_POST['name']);
    $description = simplename($_POST['description']);
//     echo "<pre>";
// print_r($_FILES);
    if (!empty($_FILES['img1']['tmp_name'])) {
        $images = addslashes(file_get_contents($_FILES['img1']['tmp_name']));
        $update_img = "UPDATE `jag_about` SET `title`='$name',`description`='$description',`images`='$images' WHERE `id`='$id'";
        $result = mysqli_query($connection, $update_img);
    }
    else {
        // $images = addslashes(file_get_contents($_FILES['img1']['tmp_name']));
        $update_img = "UPDATE `jag_about` SET `title`='$name',`description`='$description' WHERE `id`='$id'";
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
                window.location.replace('about.php')
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