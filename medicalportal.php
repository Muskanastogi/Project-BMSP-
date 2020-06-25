<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Medical Portal</title>
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
  <div class="container-fluid mt-5">
  <div class="card">
  <div class="card-header">
    Medical Portal
  </div>
  <div class="card-body">
        <TD ALIGN ="left" ROWSPAN=2 COLSPAN =6><h1>Medical/Discription Portal</h1 ><img src="img/images.png" alt="Doctor" height=100 width=100></TD>
    
  </div>
</div>

  </div><br>
 <table class="table">
  <thead>
    <tr>
      <th scope="col">Sno</th>
        <th scope="col">Name</th>
      <th scope="col">Patient Id</th>
      <th scope="col">Bloo Group</th>
      <th scope="col">gender</th>
      <th scope="col">age</th>
        <th scope="col">Dressing</th>
        <th scope="col">Priscription</th>
    </tr>
  </thead>
  <tbody>
    <tr>
        <?php
        include "includes/db.php";
              $query="select  * from checkup ";
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
        <td><?php echo $row['pdressing'];?></td>
        <td><?php echo $row['pres'];?></td>
        
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