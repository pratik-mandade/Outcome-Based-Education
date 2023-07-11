<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
error_reporting(0);
//$conn = mysqli_connect('localhost', 'root', '','obe5');
include "dbconnection.php";
// get the post records
if(isset($_POST['submit'])){
    $f_name = $_POST['fname'];
    $En_no = $_POST['Enno'];
	$s_class = $_POST['class'];
    $QoneA = $_POST['QoneA'];
	$QoneB = $_POST['QoneB'];
	$QoneC = $_POST['QoneC'];
	$QoneD = $_POST['QoneD'];
	$QoneE = $_POST['QoneE'];
	$QoneF = $_POST['QoneF'];
	$QtwoA = $_POST['QtwoA'];
	$QtwoB = $_POST['QtwoB'];
	$QtwoC = $_POST['QoneC'];
	$QtwoD = $_POST['QtwoD'];
	$QtwoE = $_POST['QtwoE'];


// database insert SQL code
$sql = "INSERT INTO `tblstudents2` (`f_name`, `En_no`, `s_class`, `QoneA`, `QoneB`, `QoneC`,`QoneD`, `QoneE`, `QoneF`,`QtwoA`, `QtwoB`, `QtwoC`,`QtwoD`, `QtwoE`) VALUES ('$f_name', '$En_no','$s_class','$QoneA','$QoneB','$QoneC','$QoneD','$QoneE','$QoneF','$QtwoA','$QtwoB','$QtwoC','$QtwoD','$QtwoE')";

// insert in database 
$rs = mysqli_query($conn, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}
}
?>
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
                                    <h2 class="title">Student Marks Filling</h2>
                                
                                </div>
                                
                                <!-- /.col-md-6 text-right -->
                            </div>
                            <!-- /.row -->
                            <div class="row breadcrumb-div">
                                <div class="col-md-6">
                                    <ul class="breadcrumb">
                                        <li><a href="dashboard.php"><i class="fa fa-home"></i> Home</a></li>
                                
                                        <li class="active">Student Marks Filling</li>
                                    </ul>
                                </div>
                             
                            </div>
                            <!-- /.row -->
                        </div>
                        <div class="container-fluid">
                           
                        <div class="row">
                                    <div class="col-md-12">
                                        <div class="panel">
                                            <div class="panel-heading">
                                                <div class="panel-title">
                                                    <h5>Fill the Student info</h5>
                                                </div>
                                            </div>
                                            <div class="panel-body">

                                                <form class="container-fluid" method="POST">
													
<div class="form-group">
<label for="default" class="col-sm-2 control-label">Full Name</label>
<div class="col-sm-10">
<input type="text" name="fname" class="form-control" id="fullanme" required="required" autocomplete="off">
</div>
</div>

<div class="form-group">
<label for="default" class="col-sm-2 control-label">Enrollment No.</label>
<div class="col-sm-10">
<input type="text" name="Enno" class="form-control" id="Enrollment" maxlength="10" required="required" autocomplete="off">
</div>
</div>

<div class="form-group">
<label for="default" class="col-sm-2 control-label">Class</label>
<div class="col-sm-10">
<input type="text" name="class" class="form-control" id="S_Class" maxlength="10" required="required" autocomplete="off">
</div>
</div>



<script>
var loadFile = function(event) {
	var image = document.getElementById('output');
	image.src = URL.createObjectURL(event.target.files[0]);
};
</script>

<h6>Marks Entry :-</h6>
<style>
  .container {
  display: flex;
    flex-direction: row;
}
  </style>
<div class="container">
    <div id="right">Q1.A<input type="text" name="QoneA" class="col-sm-2" value=" "></div>
    <div id="left">Q1.B<input type="text"  name="QoneB" class="col-sm-2" value=" "></div>
    <div id="left">Q1.C<input type="text" name="QoneC" class="col-sm-2" value=" "></div>
    <div id="left">Q1.D<input type="text" name="QoneD" class="col-sm-2" value=" "></div>
    <div id="left">Q1.E<input type="text" name="QoneE" class="col-sm-2" value=" "></div>
    <div id="left">Q1.F<input type="text" name="QoneF" class="col-sm-2" value=" "></div>
	
    </div>
        
    <div class="container">
    <div id="right">Q2.A<input type="text" name="QtwoA" class="col-sm-2" value=" "></div>
    <div id="left">Q2.B<input type="text" name="QtwoB" class="col-sm-2" value=""></div>
    <div id="left">Q2.C<input type="text" name="QtwoC" class="col-sm-2" value=" "></div>
    <div id="left">Q2.D<input type="text" name="QtwoD" class="col-sm-2" value=""></div>
    <div id="left">Q2.E<input type="text" name="QtwoE" class="col-sm-2" value=" "></div>
		
    </div>

 
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <div class="col-sm-offset-2 col-sm-10">
                                                            <button type="submit" name="submit" class="btn btn-primary">Add</button>
                                                        </div>
                                                    </div>
													
													<div class="container">
														<div class="vertical-center">
														<a class="Add CO" href="manage-students2.php">
                                                            <button type="button" name="button" class="btn btn-primary">View Record</button>
                                                        </div>
                                                    </div>
										
                                                </form>

                                            </div>
                                        </div>
                                    </div>
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