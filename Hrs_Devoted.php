
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
                                    <h2 class="title">Hrs Devoted</h2>
                                
                                </div>
                                
                                <!-- /.col-md-6 text-right -->
                            </div>
                            <!-- /.row -->
                            <div class="row breadcrumb-div">
                                <div class="col-md-6">
                                    <ul class="breadcrumb">
                                        <li><a href="dashboard.php"><i class="fa fa-home"></i> Home</a></li>
                                
                                        <li class="active">Hrs Devoted</li>
                                    </ul>
                                </div>
                             
                            </div>
                            <!-- /.row -->
                        </div>
						<form class="container-fluid" method="POST">
 <table id="example" class="display table table-striped table-bordered" cellspacing="0" width="100%">
 <tr>
    <th></th>
    <th>Course Outcomes (COs)</th>
    <th>PO1</th>
    <th>PO2</th>
    <th>PO3</th>
    <th>PO4</th>
    <th>PO5</th>
    <th>PO6</th>   
    <th>PO7</th>
    <th>PSO1</th>
    <th>PSO2</th>
    <th>PSO3</th>
    <th>Hrs</th>
  </tr>
  
  <tr>
    <td></td>
    <td></td>
    <td>Basic and discipline specific knowledge</td>
    <td>Problem analysis</td>
    <td>Design/development os solutions</td>
    <td>Enginnering tools, Experimentation and testing</td>
    <td>Engineering practises for society,sustainability and environment</td>
    <td>Project management</td>
    <td>Life long learning</td>
    <td>PSO1</td>
    <td>PSO2</td>
    <td>PSO3</td>
    <td>Hrs Allocation</td>
  </tr>
  
  <tr>
    <td>-</td>
    <td></td>
    <td><?php include 'dbconnection.php';
	 $sql = "SELECT po1 from curriculum_mapping where id=2";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
echo $row["po1"]; }}?></td>
    
	
<td><?php include 'dbconnection.php';
	 $sql = "SELECT po2 from curriculum_mapping where id=2";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
echo $row["po2"]; }}?></td>
    
	<td><?php include 'dbconnection.php';
	 $sql = "SELECT po3 from curriculum_mapping where id=2";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
echo $row["po3"]; }}?></td>
    
	<td><?php include 'dbconnection.php';
	 $sql = "SELECT po4 from curriculum_mapping where id=2";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
echo $row["po4"]; }}?></td>
    
	<td><?php include 'dbconnection.php';
	 $sql = "SELECT po5 from curriculum_mapping where id=2";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
echo $row["po5"]; }}?></td>
    
	<td><?php include 'dbconnection.php';
	 $sql = "SELECT po6 from curriculum_mapping where id=2";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
echo $row["po6"]; }}?></td>
    
	<td><?php include 'dbconnection.php';
	 $sql = "SELECT po7 from curriculum_mapping where id=2";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
echo $row["po7"]; }}?></td>
    
	<td><?php include 'dbconnection.php';
	 $sql = "SELECT pso1 from curriculum_mapping where id=2";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
echo $row["pso1"]; }}?></td>
    
	<td><?php include 'dbconnection.php';
	 $sql = "SELECT pso2 from curriculum_mapping where id=2";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
echo $row["pso2"]; }}?></td>
    
	<td><?php include 'dbconnection.php';
	 $sql = "SELECT po3 from curriculum_mapping where id=2";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
echo $row["po3"]; }}?></td>
    
	<td></td>
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
    <td>X</td>
         <td></td>
           <td></td>
             <td></td>
               <td>X</td>
                 <td></td>
                   <td>X</td>
                     <td></td>
                       <td></td>
                         <td></td>
    <td>8</td>
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
     <td>X</td>
         <td></td>
           <td></td>
             <td></td>
               <td></td>
                 <td></td>
                   <td>X</td>
                     <td></td>
                       <td></td>
                         <td></td>
    <td>14</td>
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
     <td>X</td>
         <td>X</td>
           <td></td>
             <td>X</td>
               <td></td>
                 <td>X</td>
                   <td>X</td>
                     <td>X</td>
                       <td>X</td>
                         <td></td>
    <td>26</td>
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
   <td>X</td>
         <td>X</td>
           <td></td>
             <td>X</td>
               <td></td>
                 <td>X</td>
                   <td>X</td>
                     <td>X</td>
                       <td>X</td>
                         <td></td>
    <td>20</td>
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
    <td>X</td>
         <td>X</td>
           <td></td>
             <td>X</td>
               <td></td>
                 <td>X</td>
                   <td>X</td>
                     <td>X</td>
                       <td></td>
                         <td></td>
    <td>12</td>
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
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>0</td>
  </tr>
  
      <tr>
    <td></td>
    <td>Total Hrs Devoted</td>
    <td>80</td>
    <td>58</td>
    <td>0</td>
    <td>58</td>
    <td>8</td>
    <td>58</td>
    <td>80</td>
    <td>58</td>
    <td>46</td>
    <td>0</td>
    <td>80</td>
  </tr>
  
      <tr>
    <td></td>
    <td>Percentage %</td>
    <td>100.00</td>
    <td>72.50</td>
    <td></td>
    <td>72.50</td>
    <td>10.00</td>
    <td>72.50</td>
    <td>100.00</td>
    <td>72.50</td>
    <td>57.50</td>
    <td></td>
  </tr>
</table>
				<div class="container">
														<div class="vertical-center">
														<a class="Next" href="Course_POs_PSO.php">
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