<?php
										
										include "dbconnection.php";
										error_reporting(0);
										
										
										// get the post records
										if(isset($_POST['submit'])){
											
											$co1 = $_POST['co1'];
											$co2 = $_POST['co2'];
											$co3 = $_POST['co3'];
											$co4 = $_POST['co4'];
											$co5 = $_POST['co5'];
											$co6 = $_POST['co6'];
											

								
										$query = " Update cos set co1='$co1',co2='$co2', co3='$co3', co4='$co4', co5='$co5', co6='$co6' WHERE id=2";
										
										// insert in database 
										$rs = mysqli_query($conn, $query);

										if($rs)
										{
											echo "Contact Records Updated";
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
                                    <h2 class="title">COs</h2>
                                
                                </div>
                                
                                <!-- /.col-md-6 text-right -->
                            </div>
                            <!-- /.row -->
                            <div class="row breadcrumb-div">
                                <div class="col-md-6">
                                    <ul class="breadcrumb">
                                        <li><a href="dashboard.php"><i class="fa fa-home"></i> Home</a></li>
                                
                                        <li class="active">COs</li>
                                    </ul>
                                </div>
                             
                            </div>
                            <!-- /.row -->
                        </div>
   <form class="container-fluid" method="POST">                      
 <table id="example" class="display table table-striped table-bordered" cellspacing="0" width="100%">
  <tr>
    <th>CO's</th>
    <th>Course outcome</th>   
  </tr>
 		 <tr>
    <td>1</td>
    <td><input type="text" id="" name="co1" class="col-sm-10 control-label"></td>
 	 </tr>
      <tr>
    <td>2</td>
    <td><input type="text" id="" name="co2" class="col-sm-10 control-label"></td>
 	 </tr>
      		 <tr>
    <td>3</td>
    <td><input type="text" id="" name="co3" class="col-sm-10 control-label"></td>
 	 </tr>
      		 <tr>
    <td>4</td>
    <td><input type="text" id="" name="co4" class="col-sm-10 control-label"></td>
 	 </tr>
      		 <tr>
    <td>5</td>
    <td><input type="text" id="" name="co5" class="col-sm-10 control-label"></td>
 	 </tr>
      		 <tr>
    <td>6</td>
    <td><input type="text" id="" name="co6" class="col-sm-10 control-label"></td>
 	 </tr>
</table>

													<div class="container">
                                                        <div class="form-group">
                                                        <div class="col-sm-offset-2 col-sm-10">
                                                            <button type="submit" name="submit" class="btn btn-primary">Add</button>
                                                        </div>
                                                    </div>
													
													<div class="container">
														<div class="vertical-center">
														<a class="Next" href="Curriculum_Mapping.php">
                                                            <button type="button" name="Next" class="btn btn-primary">Next</button>
                                                        </div>
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