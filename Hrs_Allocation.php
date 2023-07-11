
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>OBE Admin| Student Marks Filling< </title>
        <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="css/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="css/lobipanel/lobipanel.min.css" media="screen" >
        <link rel="stylesheet" href="css/prism/prism.css" media="screen" >
        <link rel="stylesheet" href="css/select2/select2.min.css" >
        <link rel="stylesheet" href="css/main.css" media="screen" >
        <script src="js/modernizr/modernizr.min.js"></script>
    </head>
    <body class="top-navbar-fixed">
	
        <div class="main-wrapper">

            <!-- ========== TOP NAVBAR ========== -->
  <?php include('includes/topbar.php');?> 
            <!-- ========== WRAPPER FOR BOTH SIDEBARS & MAIN CONTENT ========== -->
            <div class="content-wrapper">
                <div class="content-container">

                    <!-- ========== LEFT SIDEBAR ========== -->
                   <?php include('includes/leftbar.php');?>  
                    <!-- /.left-sidebar -->

                    <div class="main-page">

                     <div class="container-fluid">
                            <div class="row page-title-div">
                                <div class="col-md-6">
                                    <h2 class="title">Hrs Allocation</h2>
                                
                                </div>
                                
                                <!-- /.col-md-6 text-right -->
                            </div>
                            <!-- /.row -->
                            <div class="row breadcrumb-div">
                                <div class="col-md-6">
                                    <ul class="breadcrumb">
                                        <li><a href="dashboard.php"><i class="fa fa-home"></i> Home</a></li>
                                
                                        <li class="active">Hrs Allocation</li>
                                    </ul>
                                </div>
                             
                            </div>
                            <!-- /.row -->
                        </div>
						<form class="container-fluid" method="POST">
 <table id="example" class="display table table-striped table-bordered" cellspacing="0" width="100%">

  <tr>
    <th></th>
    <th>Course Outcomes</th>
    <th>PO's</th>   
        <th>Theory Hrs</th> 
            <th>Practical Hrs</th> 
  </tr>
 		
        <tr>
<td>1</td>
<td><?php include 'dbconnection.php';
	 $sql = "SELECT co1 from cos where id=2";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
echo $row["co1"]; }}?></td>
<td>PO1,PO5,PO7...</td>
<td><input type="text" id="" name="" value="6" readonly></td>
<td><input type="text" id="" name="" value="2" readonly></td>
 	 </tr>
     
      <tr>
<td>2</td>
<td><?php include 'dbconnection.php';
	 $sql = "SELECT co2 from cos where id=2";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
echo $row["co2"]; }}?></td>
<td>PO1,PO7...</td>
<td><input type="text" id="" name="" value="10" readonly></td>
<td><input type="text" id="" name="" value="4" readonly></td>
 	 </tr>
     
<tr>
<td>3</td>
<td><?php include 'dbconnection.php';
	 $sql = "SELECT co3 from cos where id=2";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
echo $row["co3"]; }}?></td>
<td>PO1,PO2,PO4,PO6,PO7,PSO1,PSO2...</td>
<td><input type="text" id="" name=""value="12" readonly></td>
<td><input type="text" id="" name="" value="14" readonly></td>
 </tr>
 
             <tr>
<td>4</td>
<td><?php include 'dbconnection.php';
	 $sql = "SELECT co4 from cos where id=2";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
echo $row["co4"]; }}?></td>
<td>PO1,PO2,PO4,PO6,PO7,PSO1,PSO2...</td>
<td><input type="text" id="" name="" value="12" readonly></td>
<td><input type="text" id="" name="" value="8" readonly></td>
 </tr>

             <tr>
<td>5</td>
<td><?php include 'dbconnection.php';
	 $sql = "SELECT co5 from cos where id=2";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
echo $row["co5"]; }}?></td>
<td>PO1,PO2,PO4,PO6,PO7,PSO1...</td>
<td><input type="text" id="" name="" value="8" readonly></td>
<td><input type="text" id="" name="" value="4" readonly></td>
 </tr>       
 
              <tr>
<td>6</td>
<td><?php include 'dbconnection.php';
	 $sql = "SELECT co6 from cos where id=2";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
echo $row["co6"]; }}?></td>
<td>PO1,PO2,PO4,PO6,PO7,PSO1...</td>
<td><input type="text" id="" name=""></td>
<td><input type="text" id="" name=""></td>
 </tr>
 
              <tr>
<td></td>
<td></td>
<td>Total</td>
<td>48</td>
<td>32</td>
 </tr>
 
              <tr>
<td></td>
<td></td>
<td>Total Sessions</td>
<td>80</td>

 </tr>
</table>
<div class="container">
														<div class="vertical-center">
														<a class="Next" href="Hrs_Devoted.php">
                                                            <button type="button" name="Next" class="btn btn-primary">Next</button>
                                                        </div>
                                                    </div>
													</form>
						
                                    <!-- /.col-md-12 -->
                                </div>
                    </div>
                </div>
                <!-- /.content-container -->
            </div>
            <!-- /.content-wrapper -->
        </div>
        <!-- /.main-wrapper -->
        <script src="js/jquery/jquery-2.2.4.min.js"></script>
        <script src="js/bootstrap/bootstrap.min.js"></script>
        <script src="js/pace/pace.min.js"></script>
        <script src="js/lobipanel/lobipanel.min.js"></script>
        <script src="js/iscroll/iscroll.js"></script>
        <script src="js/prism/prism.js"></script>
        <script src="js/select2/select2.min.js"></script>
        <script src="js/main.js"></script>
	
        <script>
            $(function($) {
                $(".js-states").select2();
                $(".js-states-limit").select2({
                    maximumSelectionLength: 2
                });
                $(".js-states-hide").select2({
                    minimumResultsForSearch: Infinity
                });
            });
        </script>
    </body>
</html>