<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
if($_SERVER['HTTP_HOST']=='localhost')
{
    $connection=mysqli_connect('localhost','root',"","pesante");
}
else
{
    $connection=mysqli_connect('localhost','shreejagannathdh_db_new',"Shreejagannath_1234","shreejagannathdh_db_new");
}
?>