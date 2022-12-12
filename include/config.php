<?php
if($_SERVER['HTTP_HOST']=='localhost')
{
    $conn = mysqli_connect('localhost','root','','pesante');
}
else
{
    $conn = mysqli_connect();
}
?>