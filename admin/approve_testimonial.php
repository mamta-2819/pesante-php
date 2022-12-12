<?php
include 'function.inc.php';
include 'connection.inc.php';

    $id = $_GET['id'];
    $status = $_GET['status'];
   	if($status=='1')
    	{
    		$update = "UPDATE `testimonials` SET `status`='0' WHERE `id`='$id'";
        }
     else
     	{
    		$update = "UPDATE `testimonials` SET `status`='1' WHERE `id`='$id'";
        }
     $result = mysqli_query($connection, $update);
    if($result)
    {
        header('location: testimonials.php');
    }

    
?>
