<?php
include 'connection.inc.php';

if(isset($_GET['delete']))
{
$id=$_GET['delete'];
$delete="delete from clients where id=$id";
$result=mysqli_query($connection,$delete);
if($result)
    {
    header('location:clients.php');
    }
else
    {
        echo "Some error occurred!!";
    }
}
?>