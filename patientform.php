<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Patient Portal</title>
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
      <?php
    include "includes/db.php";

if(isset($_POST['pid']))
{
    $pid=$_POST['pid'];
    
  
    if (isset($_POST['view']))

       { 
    $sql="select * from patientappointment where pid='$pid'";
    $run=mysqli_query($conn , $sql);
        if(mysqli_num_rows($run) > 0){
                         
                          while($row=mysqli_fetch_array($run)){
                              
                              $patient_name=$row['pname'];
                              $patient_id=$row['pid'];
                              
                              $gender=$row['pgender'];
                              $pbg=$row['pbloodg'];
                              $pbmi=$row['pbmi'];
                              $page=$row['page'];
                       
                              
                              
}
        }
       
    }       }
    else{header("patientform.php");}
   
    
    
    
    ?>
    
    <?php
    error_reporting(0);
        include "includes/db.php";
    if (isset($_POST['save']))

       { 
        
     
                             $patientname=$_POST['name'];
                              $patientid=$_POST['pid'];
                              $bloodgroup=$_POST['bg'];
                              $gen=$_POST['gender'];
                            $bmi=$_POST['bmi'];
                            $age=$_POST['age'];
                              $comp=$_POST['comp'];
                              $height=$_POST['height'];
                                $weight=$_POST['weight'];
                                $temperature=$_POST['temperature'];
         $pulse=$_POST['pulse'];
         $bp=$_POST['bp'];
        $painsource=$_POST['pains'];
        $dressing=$_POST['dressing'];
        $rnote=$_POST['referralnote'];
        $priscription=$_POST['priscription'];
        $date=$_POST['date'];
        $time=$_POST['time'];
        
        
        
        
        $sql="insert into checkup(pname,pid,pbloodg,pgender,pbmi,page,pcom,pheight,pweight,pt,pulse,pbp,psource,pdressing,prnotes,pres,date,time) values('$patientname','$patientid','$bloodgroup','$gen','$bmi','$age','$comp',' $height','$weight','$temperature','$pulse','$bp','$painsource', '$dressing','$rnote','$priscription','$date','$time')";
        $run=mysqli_query($conn,$sql);
}
   
    
  ?>
     

  <!-- Start your project here-->
  <div class="container-fluid mt-5">
  <div class="card">
  <div class="card-header">
    Patient Form
  </div>
  <div class="card-body">
        <TD ALIGN ="left" ROWSPAN=2 COLSPAN =6><h1>Patient/Appointment Form</h1 ><img src="img/images.png" alt="Doctor" height=100 width=100></TD>
    
  </div>
</div>

  </div><br>
  <div class="container-fluid">
      <div class="col-md-12">
          <!--Section: Contact v.2-->
<section class="mb-4">



<div class="row">

    <!--Grid column-->
    <div class="col-md-12 mb-md-0 mb-5">
        <form id="contact-form" name="contact-form" action="" method="POST">

            <!--Grid row-->
            <div class="row">

                <!--Grid column-->
                <div class="col-md-4">
                    <div class="md-form mb-0">
                        <input type="text" id="Name" name="name" class="form-control" value="<?php echo $patient_name; ?>">
                        <label for="Name" class="" style="color:black">Name</label>
                        
                    </div>
                </div>
                <!--Grid column-->

                <!--Grid column-->
              
                <div class="col-md-4">
                    <div class="md-form mb-0">
                        <input type="text" id="Patient Id" name="pid" class="form-control" value="<?php echo $patient_id; ?>">
                        <label for="Patient Id" class="">Patient Id</label>
                    </div>
                </div>
                <!--Grid column-->
                <div class="col-md-4">
                    <div class="md-form mb-0">
                        <input type="text" id="Blood Group" name="bg" class="form-control" value="<?php echo $pbg; ?>">
                        <label for="Blood Group" class="">Blood Group</label>
                    </div>
                </div>
              
            </div>
  
            <!--Grid row-->

            <!--Grid row-->
            <div class="row">
            <div class="col-md-4">
                    <div class="md-form mb-0">
                        <input type="text" id="Gender" name="gender" class="form-control" value="<?php echo $gender; ?>">
                        <label for="Gender" class="">Gender</label>
                    </div>
                </div>
                <div class="col-md-4">

                    <div class="md-form">
                        <input type="text" id="BMI" name="bmi" rows="2" class="form-control md-textarea" value="<?php echo $pbmi; ?>">
                        <label for="BMI">BMI</label>
                    </div>

                </div>
                 <div class="col-md-4 px-3">

                    <div class="md-form">
                        <input type="text" id="Age" name="age" rows="2" class="form-control md-textarea" value="<?php echo $page; ?>">
                        <label for="Age">Age</label>
                    </div>
</div>
 

</div>
<div class="row">
            <div class="col-md-4">
                    <div class="md-form mb-0">
                        <input type="text" id="Complaints" name="comp" class="form-control">
                        <label for="Complaints" class="">Complaints</label>
                    </div>
                </div>
                <div class="col-md-4">

                    <div class="md-form">
                        <input type="text" id="Height" name="height" rows="2" class="form-control md-textarea">
                        <label for="Height">Height</label>
                    </div>

                </div>
                 <div class="col-md-4 px-3">

                    <div class="md-form">
                        <input type="text" id="Weight" name="weight" rows="2" class="form-control md-textarea">
                        <label for="Weight">Weight</label>
                    </div>
</div>
 

</div>
<div class="row">
            <div class="col-md-4">
                    <div class="md-form mb-0">
                        <input type="text" id="Temperature" name="temperature" class="form-control">
                        <label for="Temperature" class="">Temperature</label>
                    </div>
                </div>
                <div class="col-md-4">

                    <div class="md-form">
                        <input type="text" id="Pulse" name="pulse" rows="2" class="form-control md-textarea">
                        <label for="Pulse">Pulse</label>
                    </div>

                </div>
                 <div class="col-md-4 px-3">

                    <div class="md-form">
                        <input type="text" id="BP" name="bp" rows="2" class="form-control md-textarea">
                        <label for="BP">BP</label>
                    </div>
</div>
 

</div>
<div class="row">
            <div class="col-md-4">
                    <div class="md-form mb-0">
                        <input type="text" id="Pain Source" name="pains" class="form-control">
                        <label for="Pain Source" class="">Pain Source</label>
                    </div>
                </div>
                <div class="col-md-4">

                    <div class="md-form">
                        <input type="text" id="Dressing" name="dressing" rows="2" class="form-control md-textarea">
                        <label for="Dressing">Dressing, IV Fluids, Counselling</label>
                    </div>

                </div>
                 <div class="col-md-4 px-3">

                    <div class="md-form">
                        <input type="text" id="Referral Note" name="referralnote" rows="2" class="form-control md-textarea">
                        <label for="Referral Note">Investigations/Referral Note</label>
                    </div>
</div>
 

</div>
<div class="row">
<div class="col-md-4 ">

<div class="md-form">
    <input type="text" id="Priscription" name="priscription" rows="2" class="form-control md-textarea">
    <label for="Priscription">Priscription</label>
</div>
</div>
<div class="col-md-4">
<div class="md-form">
  <input placeholder="Selected date" type="Date" id="date-picker-example" class="form-control datepicker" name="date">
  <label for="date-picker-example">Date</label>
</div> 
</div> 
<div class="col-md-4">
<div class="md-form">
  <input placeholder="Selected date" type="Time" id="date-picker-example" class="form-control datepicker" name="time">
  <label for="date-picker-example">Time</label>
</div> 
</div>  
</div>
<div class="row">
    <div class="col-md-6">
<div class="text-center">
<button type="submit" class="btn btn-outline-primary btn-rounded waves-effect"style="border-radius:30px;" name="save">Apply</button>       
</div>
</div>
<div class="col-md-6">
<div class="text-center">
<button type="submit" class="btn btn-outline-primary btn-rounded waves-effect"style="border-radius:30px;" name="view">View</button>       
</div>
</div>
    
            </div>
        </form>
    </div>

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