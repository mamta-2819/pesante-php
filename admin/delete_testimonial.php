<?php
include 'connection.inc.php';

if(isset($_GET['delete']))
 {   
$id=$_GET['delete'];
$delete="delete from testimonials where id=$id";
$result=mysqli_query($connection,$delete);
if($result)
    {
    header('location:testimonials.php');
    }
else
    {
        echo "Some error occurred";
    }
}
?>