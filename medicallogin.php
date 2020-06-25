<?php
session_start();
include "includes/db.php";
if (isset($_POST['submit'])) {
$user = $_POST['name'];
$pass = $_POST['password1'];
}

$patientsession=$_SESSION['name']=$_POST['name'];;
$user= stripcslashes($user);
$pass= stripcslashes($pass);
$user= mysqli_real_escape_string($conn,$user);
$pass= mysqli_real_escape_string($conn,$pass);

$checksql = mysqli_query($conn,"SELECT * FROM medicalpassword WHERE name='$user' AND mpassword='$pass'")
or die("Failed to connect database". mysqli_connect_error());
$count = mysqli_fetch_array($checksql);
if ($count['name']== $user && $count['mpassword']== $pass) {
	header("Location:medicalportal.php");
} else 
{
		header("Location:medical.php");
	
}
?>