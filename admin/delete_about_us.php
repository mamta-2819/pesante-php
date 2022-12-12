<?php

if(isset($_GET['delete'])){
    include 'connection.inc.php';
$id=$_GET['delete'];
$delete="delete from jag_about_us where id=$id";
$result=mysqli_query($connection,$delete);
if($result)
    {
    header('location:about_us.php');
    }
else
    {
        echo "Some error occurred!!";
    }
}
?>