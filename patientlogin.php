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

$checksql = mysqli_query($conn,"SELECT * FROM patientpassword WHERE pname='$user' AND ppassword='$pass'")
or die("Failed to connect database". mysqli_connect_error());
$count = mysqli_fetch_array($checksql);
if ($count['pname']== $user && $count['ppassword']== $pass) {
	header("Location:patientportal.php");
} else 
{
		header("Location:patient.php");
	
}
?>