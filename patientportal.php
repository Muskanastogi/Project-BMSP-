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
  <?php
    include "includes/db.php";
error_reporting(0);
if(isset($_POST['pid']))
{
    $pid=$_POST['pid'];
    
  
    if (isset($_POST['view']))

       { 
    $sql="select * from patientinformation where id='$pid'";
    $run=mysqli_query($conn , $sql);
        if(mysqli_num_rows($run) > 0){
                         
                          while($row=mysqli_fetch_array($run)){
                              
                              $patient_name=$row['firstname'];
                              $patient_id=$row['id'];
                              
                              $gender=$row['gender'];
                       
                        
                              
}
        }
       
       }
}
    else{
           }
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
                              $city=$_POST['slct1'];
                              $special=$_POST['slct2'];
                                $dateapp=$_POST['date'];
                                $timeapp=$_POST['time'];
        
        
        
        $sql="insert into patientappointment(pid,pname,pbloodg,pgender,pbmi,page,dcity,dspecialization,appdate,apptime) values('$patientid','$patientname','$bloodgroup','$gen','$bmi',' $age','$city',' $special',' $dateapp','$timeapp')";
        $run=mysqli_query($conn,$sql);
        if($run>0)
        {
            
        }
    }
       

    ?>
<body>

  <!-- Start your project here-->
  <div class="container-fluid mt-5">
  <div class="card">
  <div class="card-header">
    Patient Portal
  </div>
  <div class="card-body">
        <TD ALIGN ="left" ROWSPAN=2 COLSPAN =6><h1>Patient/Appointment Portal</h1 ><img src="img/images.png" alt="Doctor" height=100 width=100></TD>
    
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
                        <input type="text" id="Name" name="name" class="form-control" value="<?php  echo $patient_name;  ?>">
                        <label for="Name" class="" style="color:black">Name</label>
                        
                    </div>
                </div>
                <!--Grid column-->

                <!--Grid column-->
              
                <div class="col-md-4">
                    <div class="md-form mb-0">
                        <input type="text" id="Patient Id" name="pid" class="form-control" value="<?php  echo $patient_id;  ?>">
                        <label for="Patient Id" class="">Patient Id</label>
                    </div>
                </div>
                <!--Grid column-->
                <div class="col-md-4">
                    <div class="md-form mb-0">
                        <input type="text" id="Blood Group" name="bg" class="form-control">
                        <label for="Blood Group" class="">Blood Group</label>
                    </div>
                </div>
              
            </div>
  
            <!--Grid row-->

            <!--Grid row-->
            <div class="row">
            <div class="col-md-4">
                    <div class="md-form mb-0">
                        <input type="text" id="Gender" name="gender" class="form-control" value="<?php  echo $gend;  ?>">
                        <label for="Gender" class="">Gender</label>
                    </div>
                </div>
                <div class="col-md-4">

                    <div class="md-form">
                        <input type="text" id="BMI" name="bmi" rows="2" class="form-control md-textarea">
                        <label for="BMI">BMI</label>
                    </div>

                </div>
                 <div class="col-md-4 px-3">

                    <div class="md-form">
                        <input type="text" id="Age" name="age" rows="2" class="form-control md-textarea">
                        <label for="Age">Age</label>
                    </div>
</div>
 
<div class="text-left text-width-bold">
              <h2>Doctors Available</h2>
</div>            </div>


<br>
<div class="container-fluid">
<div class="row">


<div class="col-md-6">

<br>

<select class="custom-select custom-select-sm mt-2 " name="slct1" id="slct1"onchange="populate(this.id,'slct2')">
  <option selected style="color:black;">Select City</option>
  <option value="Aligarh">Aligarh</option>
  <option value="Mathura">Mathura</option>
  <option value="Hathras">Hathras</option>
  <option value="Delhi">Delhi</option>
  <option value="Kanpur">Kanpur</option>
  <option value="Agra">Agra</option>
  <option value="Azamgarh">Azamgarh</option>
</select>

</div>
<div class="col-md-6">

<br>

<select class="custom-select custom-select-sm mt-2 " name="slct2" id="slct2">
  <option selected>Specilization</option>
  
</select>

</div>
</div><br>
<div class="text-left text-width-bold">
              <h4>Appointment Date Time</h4>
</div> 
<div class="row">
<div class="col-md-6">
<div class="md-form">
  <input placeholder="Selected date" type="Date" id="date-picker-example" class="form-control datepicker" name="date">
  <label for="date-picker-example">Date</label>
</div> 
</div> 
<div class="col-md-6">
<div class="md-form">
  <input placeholder="Selected date" type="Time" id="date-picker-example" class="form-control datepicker" name="time">
  <label for="date-picker-example">Time</label>
</div> 
</div> 

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
            </div>
        </form>
    </div>
<script type="text/javascript">
function populate(s1,s2){
	var s1 = document.getElementById(s1);
	var s2 = document.getElementById(s2);
	s2.innerHTML = "";
	if(s1.value == "Agra"){
		var optionArray = ["|","allergist|Dr.Reena Sing ,Allergist","radiologist|Dr.Reena Sing ,Radiologist","physiologist|Dr.Reena Sing ,.Physiologist"];
	} else if(s1.value == "Aligarh"){
		var optionArray = ["|","orthopedic surgeon|Dr.Reena Sing ,Orthopedic Surgeon","medical geneticist|Dr.Reena Sing ,Medical Geneticist","charger|Dr.Reena Sing ,Charger"];
	} else if(s1.value == "Hathras"){
		var optionArray = ["|","rheumatologist|Dr.Reena Sing ,Rheumatologist","Psychiatrist|Dr.Reena Sing ,Psychiatrist","Oncologist|Dr.Reena Sing ,Oncologist","Psychiatrist|Dr.Reena Sing ,Psychiatrist"];
	}else if(s1.value == "Delhi"){
		var optionArray = ["|","Immunologist|Dr.Suresh ,Immunologist","Psychiatrist|Dr.Suresh , Psychiatrist","Oncologist|Dr.Suresh ,Oncologist","Psychiatrist|Dr.Suresh ,Psychiatrist"];
	}else if(s1.value == "Azamgarh"){
		var optionArray = ["|","rheumatologist|Dr.Kunal ,Rheumatologist","Psychiatrist| Dr.Kunal ,Psychiatrist","Oncologist|Dr.Kunal ,Oncologist","Psychiatrist|Dr.Kunal ,Psychiatrist"];
	}else if(s1.value == "Mathura"){
		var optionArray = ["|","rheumatologist|Dr.Kunal ,Rheumatologist","Psychiatrist|Dr.Kunal ,Psychiatrist","Oncologist|Dr.Kunal ,Oncologist","Psychiatrist|Psychiatrist"];
	}else if(s1.value == "Kanpur"){
		var optionArray = ["|","rheumatologist|Dr.Kunal ,Rheumatologist","Psychiatrist|Dr.Kunal ,Psychiatrist","Oncologist|Dr.Kunal ,Oncologist","Psychiatrist|Psychiatrist"];
	}
	for(var option in optionArray){
		var pair = optionArray[option].split("|");
		var newOption = document.createElement("option");
		newOption.value = pair[0];
		newOption.innerHTML = pair[1];
		s2.options.add(newOption);
	}
}





</script>

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