<?php
$msg = "";
$row = "";
include 'function.inc.php';
include 'connection.inc.php';

   $select_single_data = "SELECT * FROM `site_infos` WHERE id='1'";
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
                                <h1>Update Site Info</h1>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                    <li class="breadcrumb-item active">Site Info</li>
                                </ol>
                            </div>
                        </div>
                    </div><!-- /.container-fluid -->
                </section>
                <?php 

if (isset($_POST['Submit'])) {
    $phone1 = $_POST['phone1'];
    $phone2 = $_POST['phone2'];
    $email = $_POST['email'];
    $facebook = $_POST['facebook'];
    $instagram = $_POST['instagram'];
    $whatsapp = $_POST['whatsapp'];
    $twitter = $_POST['twitter'];
    $youtube = $_POST['youtube'];
    $address = $_POST['address'];
    
        // $images = addslashes(file_get_contents($_FILES['img1']['tmp_name']));
        $update_query = "UPDATE `site_infos` SET `phone`='$phone1',`phone2`='$phone2',`email`='$email',`facebook`='$facebook',`instagram`='$instagram',`whatsapp`='$whatsapp',`twitter`='$twitter',`youtube`='$youtube',`address`='$address' WHERE `id`='1'";
        $result = mysqli_query($connection, $update_query);
   
   
        if ($result > 0) {
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success</strong> Site Info Successfully Updated into the Database
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';

             echo "<script> window.location.replace('update_siteinfo.php');</script>";
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

                                        <div class="mb-3 col-sm-4">
                                            <label class="form-label">Phone 1</label>
                                            <input type="text" name="phone1" value="<?php echo $row['phone']; ?>" class="form-control">
                                        </div>
                                       <div class="mb-3 col-sm-4">
                                            <label class="form-label">Phone 2</label>
                                            <input type="text" name="phone2" value="<?php echo $row['phone2']; ?>" class="form-control">
                                        </div>
                                       <div class="mb-3 col-sm-4">
                                            <label class="form-label">Email</label>
                                            <input type="email" name="email" value="<?php echo $row['email']; ?>" class="form-control">
                                        </div>
                                        <div class="mb-3 col-sm-4">
                                            <label class="form-label">Facebook</label>
                                            <input type="text" name="facebook" value="<?php echo $row['facebook']; ?>" class="form-control">
                                        </div>
                                        <div class="mb-3 col-sm-4">
                                            <label class="form-label">Instagram</label>
                                            <input type="text" name="instagram" value="<?php echo $row['instagram']; ?>" class="form-control">
                                        </div>
                                        <div class="mb-3 col-sm-4">
                                            <label class="form-label">Whatsapp</label>
                                            <input type="text" name="whatsapp" value="<?php echo $row['whatsapp']; ?>" class="form-control">
                                        </div>
                                        <div class="mb-3 col-sm-4">
                                            <label class="form-label">Twitter</label>
                                            <input type="text" name="twitter" value="<?php echo $row['twitter']; ?>" class="form-control">
                                        </div>
                                        <div class="mb-3 col-sm-4">
                                            <label class="form-label">Youtube</label>
                                            <input type="text" name="youtube" value="<?php echo $row['youtube']; ?>" class="form-control">
                                        </div>
                                        <div class="form-group col-sm-12">
                                            <label class="form-label">Address</label>
                                            <textarea name="address" class="form-control"><?php echo $row['address']; ?></textarea>
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