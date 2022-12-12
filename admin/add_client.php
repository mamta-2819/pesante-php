<?php
$msg = "";
$cat = " ";
$status = " ";
include 'function.inc.php';

if (isset($_POST['insert'])) {
      if ($cat != null) {

        if (count($_FILES) > 0) {
            if (is_uploaded_file($_FILES['image']['tmp_name'])) {

                $imgData = addslashes(file_get_contents($_FILES['image']['tmp_name']));
                $sql = "INSERT INTO `clients`(`images`,`status`) VALUES ('$imgData','1')";

                $current_id = mysqli_query($connection, $sql); 
                if ($current_id) {

                    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                      <strong>Success</strong> Client inserted successfully!!
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>';
        
                    echo "<script>
                    setTimeout(function() {
                        window.location.replace('clients.php');
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


$select1 = "SELECT * FROM `clients`";
$result2 = mysqli_query($connection, $select1);

?>

<div class="modal fade" id="add_client" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content" style="background: #040db9;color:#fff">
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold" style="color: #fff;"><u>Add client</u></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body mx-10">
              
                    <div class="form-group">
                        <label class="a-color">Upload Image</label>
                        <input name="image" type="file" class="form-control">
                    </div>
                    </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button name="insert" class="btn btn-default" style="background:#fff;color:black;font-weight:700;">Add Service</button>
                </div>
            </form>
        </div>
    </div>
</div>

