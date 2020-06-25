<?php
$servername="localhost";
$user="root";
$pass="";
$dname="database";
$conn=mysqli_connect($servername,$user,$pass,$dname);
if(!$conn)
{
    die('please check your connection'.mysqli_error());
}

?>
