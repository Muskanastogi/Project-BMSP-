<?php
error_reporting(0);
include ("includes/db.php");


if (isset($_POST['submit'])) 
{
$password1=rand(4000,6000);
$username1=$_POST['firstname'];
$middle=$_POST['secondname'];
$la=$_POST['lastname'];

$weight=$_POST['weight'];
$address=$_POST['address1'];
$localaddress=$_POST['address2'];
$email=$_POST['mail'];
$height=$_POST['height'];
$gend=$_POST['gender'];
$dob=$_POST['dob'];
$number=$_POST['no'];
$city=$_POST['city'];
$idd=rand(100,100000);
   


$sql= " INSERT INTO `patientpassword` (`pname`, `ppassword` , `id`) VALUES ('$username1','$password1','$idd')";
mysqli_query($conn,$sql);


$sql2 = "INSERT INTO patientinformation(id,	firstname,secondname,lastname,add1,add2,email,gender,height,weight,dob,contactnumber,city)
VALUES('$idd','$username1','$middle','$la','$address','$localaddress','$email','$gend','$height','$weight','$dob','$number','$city')";
 mysqli_query($conn,$sql2);
    
}
?>;
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Best Medical Service Provider</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">
  <style>
body{
  background-image: url('img/dk.jpeg');
}
     
  </style>
</head>
<body>
<div class="container-fluid mt-3">
  <!--Navbar -->
<nav class="mb-1 navbar navbar-expand-md navbar-dark blue lighten-1 py-3">
    <a class="navbar-brand"href="index.php" style="letter-spacing:2px; font-size:30px;">BMSP</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-555"
      aria-controls="navbarSupportedContent-555" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse px-2" id="navbarSupportedContent-555">
      <ul class="navbar-nav mr-auto ">
        <li class="nav-item active  px-2">
          <a class="nav-link" href="patient.php">Patient
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item px-2">
          <a class="nav-link" href="medical.php">Medical</a>
        </li>
        <li class="nav-item px-2">
          <a class="nav-link" href="doctor.php">Doctor</a>
        </li>
        <li class="nav-item px-2">
            <a class="nav-link" href="#">ContactUs</a>
          </li>
          
       
      </ul>

   
    </div>
  </nav>
  <!--/.Navbar -->
</div>

<!--Popup Modal-->
<!--Popup Modal-->


<!--/Popup Modal-->


<!--/Popup Modal-->


  <!-- Start your project here-->

<div style="padding:0 16px;">
  </div>
  <div class="background" >
  <div class="transbox" style="background-color:">
      <div class="container-fluid mx-5">
 <div class="col-md-12">
      
     <p></p>
       <div class="modal-body m1-1">
 <h1 class="text-center mt-0 text-width-bold">Thanku for Registration</h1>
        <div class="text-center">
          <i class="fas fa-check fa-4x mb-3 animated rotateIn mb-1" style="color :green;"></i>
          <p>Please note your username and password and your unique id it is required farther.</p>
            <?php $name="manish";  ?>
          <p>Username:<br><?php  echo $username1; ?></p>
          <p>Password:<br><?php  echo $password1; ?></p>
          <p>ID:<br><?php  echo $idd; ?></p>
          <h3>Go Ahead to LogIn</h3>
        </div>
      </div>
      </div>

      </div>
    </div>
    </div>
<!-- Central Modal Medium Success -->
<div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Log in</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
<form action="patientlogin.php" method="post">
        <div class="md-form mb-5">
          <i class="fas fa-user-alt prefix grey-text"></i>
          <input type="text" id="defaultForm-email" class="form-control validate" name="name">
          <label data-error="wrong" data-success="right" for="defaultForm-email">Your name</label>
        </div>

        <div class="md-form mb-4">
          <i class="fas fa-lock prefix grey-text"></i>
          <input type="password" id="defaultForm-pass" class="form-control validate" name="password1">
          <label data-error="wrong" data-success="right" for="defaultForm-pass">Your password</label>
        </div>
             <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-default" name="submit">Login</button>
      </div>
</form>
      </div>
     
    </div>
  </div>
</div>


<!-- Central Modal Medium Success-->
<?php  require_once 'footer.php'; ?>
  <!-- /Start your project here-->

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
</body>

</html>
