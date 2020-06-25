<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Doctor Portal</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">
</head>

<body>

  <!-- Start your project here-->
  <div class="container-fluid mt-3">
  <div class="card">
  <div class="card-header">
    Doctor Portal
  </div>
  <div class="card-body">
        <TD ALIGN ="left" ROWSPAN=2 COLSPAN =6><h1>Doctor/Doctor CheckUp Desk</h1 ><img src="img/images.png" alt="Doctor" height=100 width=100></TD>
    
  </div>
</div>

  </div><br>
  <div class="container-fluid">
      <div class="col-md-12  ">
          <!--Navbar -->
<nav class="mb-1 navbar navbar-expand-lg navbar-dark blue lighten-1 ">
  <a class="navbar-brand" href="#" style="letter-spacing:1px; ">Doctor Desk</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-555"
    aria-controls="navbarSupportedContent-555" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent-555">
    <ul class="navbar-nav mr-auto   px-5">
      <li class="nav-item  px-5">
        <a class="nav-link" href="index.php">Home
          <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item px-5">
        <a class="nav-link" href="checkpatient.php">ChechPatient</a>
      </li>
      <li class="nav-item active px-5">
        <a class="nav-link" href="uncheckpatient.php">UncheckPatient</a>
      </li>
      <li class="nav-item px-5">
        <a class="nav-link" href="patientform.php">PatientForm</a>
      </li>
      <li class="nav-item px-5">
        <a class="nav-link" href="about.php">AboutUs</a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto nav-flex-icons">
      <li class="nav-item avatar">
        <a class="nav-link p-0" href="#">
          <img src="https://mdbootstrap.com/img/Photos/Avatars/avatar-5.jpg" class="rounded-circle z-depth-0"
            alt="avatar image" height="35">
        </a>
      </li>
    </ul>
  </div>
</nav>
<!--/.Navbar -->
</div>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Sno</th>
        <th scope="col">Name</th>
      <th scope="col">Patient Id</th>
      <th scope="col">Bloo Group</th>
      <th scope="col">gender</th>
      <th scope="col">age</th>
       
    </tr>
  </thead>
  <tbody>
    <tr>
        <?php
        include "includes/db.php";
              $query="select  * from patientappointment limit 0,5";
                      $run=mysqli_query($conn , $query);
                      if(mysqli_num_rows($run) > 0){
                          $no=0;
                          while($row=mysqli_fetch_array($run)){
                            
                            
                              $no=$no+1;
        
        
        
        ?>
      <th scope="row"><?php echo $no   ?></th>
      <td><?php echo $row['pname'];?></td>
      <td><?php echo $row['pid'];?></td>
      <td><?php echo $row['pbloodg'];?></td>
        <td><?php echo $row['pgender'];?></td>
        <td><?php echo $row['page'];?></td>
        
        
    </tr>
   <?php 
                        }
                      
                      }
                    else{
                          echo "no data found";
                      }
                      ?>
  </tbody>
</table>

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