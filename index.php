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
        <li class="nav-item  px-2">
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
      <button type="button" class="btn btn-info btn-rounded ml-auto"style="border-radius:30px;"data-toggle="modal" data-target="#modalLoginForm">Login</button>
   
    </div>
  </nav>
  <!--/.Navbar -->
</div>

<!--Popup Modal-->
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


<!--/Popup Modal-->
<div style="padding:0 16px;">
  </div>
  <div class="background">
  <div class="transbox">
  <marquee><h1>Best Medical Services Provider</h1></marquee>
  <form action="doctorlogin.php" class="hello" method="post">
  <div class="imgcontainer">
    <img src="img/bk.png" style="border=3px solid blackalt" class="avatar" action="sendmail.php" >
  </div>
  <div class="container">
    <label for="email"><b>Username</b></label><br><br>
    <input type="text" placeholder="Username" name="name" required><br>
	<label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password1" required>
    <button type="submit" class="registerbtn" name="submit" style="align=center;">login</button>
  </div>
</form>
</div>
</div>
<br>
<?php  require_once'footer.php'; ?>

  <!-- Start your project here-->
  
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
