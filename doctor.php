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
        <li class="nav-item   px-2">
          <a class="nav-link" href="patient.php">Patient
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item px-2">
          <a class="nav-link" href="medical.php">Medical</a>
        </li>
        <li class="nav-item active px-2">
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
<form action="doctorlogin.php" method="post">
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
      </div>>
    </div>
  </div>
</div>
 

<!--/Popup Modal-->



  <!-- Start your project here-->

<div style="padding:0 16px;">
  </div>
  <div class="background " >
  <div class="transbox py-5" style="background-color:;">
  <div class="container-fluid">
      <div class="col-md-12">
          <!--Section: Contact v.2-->
<section class="mb-4">

<!--Section heading-->
<h2 class="h1-responsive font-weight-bold text-center my-4">Register</h2>
<!--Section description-->


<div class="row">

    <!--Grid column-->
    <div class="col-md-12 mb-md-0 mb-5">
        <form id="contact-form" name="contact-form" action="doctorregistration.php" method="POST">

            <!--Grid row-->
            <div class="row">

                <!--Grid column-->
                <div class="col-md-3">
                    <div class="md-form mb-0">
                        <input type="text" id="firstname" name="name" class="form-control">
                        <label for="firstname" class="" style="color:black">Your First Name</label>
                        
                    </div>
                </div>
                <!--Grid column-->

                <!--Grid column-->
              
                <div class="col-md-3">
                    <div class="md-form mb-0">
                        <input type="text" id="lastname" name="lastname" class="form-control">
                        <label for="lastname" class="">Your Last Name</label>
                    </div>
                </div>
                <!--Grid column-->
                <div class="col-md-3">
                    <div class="md-form mb-0">
                        <input type="text" id="address1" name="address1" class="form-control">
                        <label for="address1" class="">Address Line 1</label>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="md-form mb-0">
                        <input type="text" id="address2" name="address2" class="form-control">
                        <label for="address2" class="">Address Line 2</label>
                    </div>
                </div>
            </div>
            <!--Grid row-->

            <!--Grid row-->
            <div class="row">
                <div class="col-md-3">

                    <div class="md-form">
                        <input type="text" id="Firm" name="firm" rows="2" class="form-control md-textarea">
                        <label for="Firm">Your Firm Name</label>
                    </div>

                </div>
                 <div class="col-md-3 px-3">

                    <div class="md-form">
                        <input type="text" id="Licence" name="licence" rows="2" class="form-control md-textarea">
                        <label for="Licence">Licence Number</label>
                    </div>
</div>
 <div class="col-md-3">

<div class="md-form">
    <input type="text" id="Email" name="email" rows="2" class="form-control md-textarea">
    <label for="Email">Your Email</label>
</div>

</div>
            <div class="col-md-3">

<div class="md-form">
    <input type="text" id="Number" name="number" rows="2" class="form-control md-textarea">
    <label for="Number">Your Contact Number</label>
</div>

</div>
            </div>
               
            
               
               
           
            <div class="row">

<div class="col-md-3">

<div class="md-form">
    <input type="text" id="Number" name="pfee" rows="2" class="form-control md-textarea">
    <label for="Number">Fee Patient</label>
</div>

</div>
<div class="col-md-3">

<br>

<select class="custom-select custom-select-sm mt-2 " name="special">
  <option selected style="color:black;">Specilization</option>
  <option value="Allergist">Allergist</option>
  <option value="Physiologist">Physiologist</option>
  <option value="Orthopedic">Orthopedic</option>
  <option value="Geneticist">Geneticist</option>
  <option value="radiologist">radiologist</option>
  <option value="Oncologist">Oncologist</option>
  <option value="Psychiatrist">Psychiatrist</option>
</select>

</div>
<div class="col-md-3">

<br>

<select class="custom-select custom-select-sm mt-2 " name="city">
  <option selected style="color:black;">Select City</option>
  <option value="Aligarh">Aligarh</option>
  <option value="Mathura">Mathura</option>
  <option value="Hathras">Hathras</option>
  <option value="Delhi">Delhi</option>
  <option value="Kanpur">Kanpur</option>
</select>

</div>
<div class="col-md-3">

<br>

<select class="custom-select custom-select-sm mt-2 " name="sch">
  <option selected style="color:black;">Select Scheduling</option>
  <option value="Sunday">Sunday</option>
  <option value="Monday">Monday</option>
  <option value="Tuesday">Tuesday</option>
  <option value="Wednesday">Wednesday</option>
  <option value="Thursday">Thursday</option>
  <option value="Thursday">Friday</option>
  <option value="Thursday">Saturday</option>
</select>

</div>
            </div>
            <!--Grid row-->
          <div class="row">

<div class="col-md-3">

<div class="md-form">
  <input placeholder="" type="time" id="input_starttime" class="form-control timepicker" name="from">
  <label for="input_starttime">from</label>
</div>

</div>
<div class="col-md-3">

<div class="md-form">
  <input placeholder="" type="time" id="input_starttime" class="form-control timepicker" name="to">
  <label for="input_starttime">To</label>
</div>

</div>


            </div>
        <div class="text-center text-md-left">
            <input type="submit" class="btn btn-primary" name="submit"  value="Reigster" >
        </div>
        </form>
<br>
        <div class="status"></div>
    </div>
    <!--Grid column-->

    

</div>

</section>
<!--Section: Contact v.2-->
</div>
</div>
</div><br>
<!-- Central Modal Medium Success -->
<div class="modal fade" id="centralModalSuccess" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-notify modal-primary" role="document">
    <!--Content-->
    <div class="modal-content">
      <!--Header-->
      <div class="modal-header">
        <p class="heading lead">Registration Success</p>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="white-text">&times;</span>
        </button>
      </div>

      <!--Body-->
      <div class="modal-body">
        <div class="text-center">
          <i class="fas fa-check fa-4x mb-3 animated rotateIn"></i>
          <p>Please note your username and password and your unique id it is required farther.</p>
            <?php $name="manish";  ?>
          <p>Username:<?php  echo $name; ?></p>
          <p>Password:<?php  echo $name; ?></p>
          <p>ID:<?php  echo $name; ?></p>
          <h3>Go Ahead to LogIn</h3>
        </div>
      </div>

      <!--Footer-->
      <div class="modal-footer justify-content-center">
        <a type="button" class="btn btn-success" data-dismiss="modal">Ok<i class="far fa-gem ml-1 white-text"></i></a>
        <a type="button" class="btn btn-outline-success waves-effect" data-dismiss="modal">Cancel</a>
      </div>
    </div>
    <!--/.Content-->
  </div>
</div>
<!-- Central Modal Medium Success-->

<!-- Button trigger modal -->

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
