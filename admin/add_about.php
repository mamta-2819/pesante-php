<?php
$msg = "";
$cat = " ";
$status = " ";
include 'function.inc.php';


if (isset($_POST['insert'])) {
  $title = simplename($_POST['title']);
  $description = simplename($_POST['description']);
      if ($cat != null) {

        if (count($_FILES) > 0) {
            if (is_uploaded_file($_FILES['Image']['tmp_name'])) {

                $imgData = addslashes(file_get_contents($_FILES['Image']['tmp_name']));
                //$imageProperties = getimageSize($_FILES['Image']['tmp_name']);

                $sql = "INSERT INTO `jag_about`(`title`,`description`,`images`) VALUES ('$title','$description','$imgData')";

                $current_id = mysqli_query($connection, $sql); 
                if (isset($current_id)) {
                    // header("Location: listImages.php");
                }
                if ($current_id) {

                    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                      <strong>Success</strong> Features Info is successfully inserted!!
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>';
        
                    echo "<script>
                    setTimeout(function() {
                        window.location.replace('about.php');
        
                      }, 1000);
        
                </script>";
                } else {
                    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Alert!</strong>  '.$connection->error.'
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>';
                }
            }
        }
    }
}
// $selectid="SELECT * FROM `catagries_images` WHERE 1";



$select1 = "SELECT * FROM `jag_about`";
$result2 = mysqli_query($connection, $select1);


?>

<div class="modal fade" id="add_about" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content" style="background: #e7cb44;">
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold" style="color: #f72000;"><u>Add Temple Features</u></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body mx-10">
                    <!-- <div class="md-form mb-5">
                        <label class="a-color" data-error="wrong" data-success="right" for="defaultForm-email">Gallery Image title</label>
                        <select name="cat" type="text" id="defaultForm-email" class="form-control validate" placeholder="Enter Caregorie Name">
                            <option selected disabled>Choose Categries..</option>
                            <?php

                            if (mysqli_num_rows($result2) > 0) {
                                while ($row = mysqli_fetch_array($result2)) {

                            ?>
                                    <option value="<?php echo $row['id']; ?>"><?php echo $row['title']; ?></option>

                            <?php }
                            } ?>
                        </select>

                    </div> -->

                 <div class="form-group">
                        <label class="a-color" for="exampleFormControlSelect1">Enter Title</label>
                        <input name="title" type="text" class="form-control" id="exampleFormControlSelect1">


                    </div>
                    <div class="form-group">
                        <label class="a-color" for="exampleFormControlSelect1">Upload Image</label>
                        <input name="Image" type="file" class="form-control" id="exampleFormControlSelect1">


                    </div>
                    <div class="form-group">
                        <label class="a-color" for="exampleFormControlSelect1">Enter Description</label>
                        <textarea name="description" class="form-control" id="description" aria-describedby="emailHelp"></textarea>


                    </div>
                    </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button name="insert" class="btn btn-default" style="background:#f75b00;color:black;font-weight:700;">Add temple Features</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="ckeditor/ckeditor.js"></script>
<script type="text/javascript">
    // Initialize CKEditor
    //CKEDITOR.inline( 'short_desc' );

    CKEDITOR.replace('description', {

        width: "100%",
        height: "200px"

    });
</script>