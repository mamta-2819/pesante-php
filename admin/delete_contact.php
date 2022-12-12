<?php
 include 'connection.inc.php';

if(isset($_GET['delete'])){   
$id=$_GET['delete'];
$delete="delete from contactuses where id=$id";
$result=mysqli_query($connection,$delete);
if($result)
    {
    header('location:contact.php');
    }
else
    {
        echo "Some error occurred";
    }
}
?>