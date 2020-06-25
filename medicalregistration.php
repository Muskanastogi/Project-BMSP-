<?php

include ("includes/db.php");



    
if (isset($_POST['submit']))
{
$usernamedr= $_POST['name'];
$la= $_POST['lastname'];
$address=$_POST['address1'];
$localaddress=$_POST['address2'];
$firm=$_POST['firm'];
$licence=$_POST['licence'];
$to = $_POST['email'];
$number=$_POST['number'];
$city= $_POST['city'];
}
$subject = "your user name and password for BMSPY";
$passworddr = uniqid();
$idd =rand(100,100000);

$txt= "
<html>
<head>
<title>HTML email</title>
</head>
<body>
<p>This email contains HTML Tags!</p>
<table>
<tr>
<th>username:-</th>
<td>$usernamedr</td>

</tr>
<tr>
<th>Password:-</th>
<td>$passworddr</td>
</tr>
</table>
</body>
</html>
";
$headers="MIME-Version: 1.0"."\r\n";
$headers="From:rastogi.mus91999@gmail.com" . "\r\n";
$headers .="Content-type:text/html;charset=UTF_8"."\r\n";
 mail($to,$subject,$txt,$headers);

if(!$conn)
{
	die("Failed to connect". mysqli_connect_error());
} 
else
{
	
	$sql= " INSERT INTO `medicalpassword` (`mid`,`name`, `mpassword`) VALUES ('$idd','$usernamedr','$passworddr')";
mysqli_query($conn,$sql );

}

$lll = "INSERT INTO medicalinformation(mid,firstname,lastname,add1,add2,firmno,license,email,connumber,city)
 VALUES('$idd','$usernamedr','$la','$address','$localaddress','$firm','$licence','$to','$number','$city')";


    mysqli_query($conn,$lll);

?>

   


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
            
          <p>Username:<br><?php  echo $usernamedr; ?></p>
          <p>Password:<br><?php  echo $passworddr; ?></p>
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
        <div class="md-form mb-5">
          <i class="fas fa-user-alt prefix grey-text"></i>
          <input type="email" id="defaultForm-email" class="form-control validate">
          <label data-error="wrong" data-success="right" for="defaultForm-email">Your name</label>
        </div>

        <div class="md-form mb-4">
          <i class="fas fa-lock prefix grey-text"></i>
          <input type="password" id="defaultForm-pass" class="form-control validate">
          <label data-error="wrong" data-success="right" for="defaultForm-pass">Your password</label>
        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-default">Login</button>
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
