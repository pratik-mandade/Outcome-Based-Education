
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
                                    <h2 class="title">Curriculum Mapping</h2>
                                
                                </div>
                                
                                <!-- /.col-md-6 text-right -->
                            </div>
                            <!-- /.row -->
                            <div class="row breadcrumb-div">
                                <div class="col-md-6">
                                    <ul class="breadcrumb">
                                        <li><a href="dashboard.php"><i class="fa fa-home"></i> Home</a></li>
                                
                                        <li class="active">Curriculum Mapping</li>
                                    </ul>
                                </div>
                             
                            </div>
                            <!-- /.row -->
                        </div>
<div class= "scroll"> 
 <table id="example" class="display table table-striped table-bordered" cellspacing="0" width="100%">
  <tr>
    <th>Courses</th>
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
  </tr>
 		 <tr>
    <td>Courses</td>
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
 	 </tr>
	 <?php
										// database connection code
										// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

										//$conn = mysqli_connect('localhost', 'root', '','obe5');
										include "dbconnection.php";
										error_reporting(0);
										
										
										// get the post records
										if(isset($_POST['submit'])){
											
											$idupdate = $_GET['id'];
											
										
											$po1 = $_POST['po1'];
											$po2 = $_POST['po2'];
											$po3 = $_POST['po3'];
											$po4 = $_POST['po4'];
											$po5 = $_POST['po5'];
											$po6 = $_POST['po6'];
											$po7 = $_POST['po7'];
											$pso1 = $_POST['pso1'];
											$pso2 = $_POST['pso2'];
											$pso3 = $_POST['pso3'];
											

										
										
										$query = " UPDATE `curriculum_mapping` SET `po1`='$po1',`po2`='$po2',`po3`='$po3',`po4`='$po4',`po5`='$po5',`po6`='$po6',`po7`='$po7',`pso1`='$pso1',`pso2`='$pso2',`pso3`='$pso3' WHERE id=2";
										
										// insert in database 
										$rs = mysqli_query($conn, $query);

										if($rs)
										{
											echo "Contact Records Updated";
										}
										}
										?>
	 
	 
	  <form class="container-fluid" method="POST">    
      <tr>
    <td>Branch</td>
    <td><input type="text" id="" name="po1"size="1"></td>
     <td><input type="text" id="" name="po2"size="1"></td>
      <td><input type="text" id="" name="po3"size="1"></td>
       <td><input type="text" id="" name="po4"size="1"></td>
        <td><input type="text" id="" name="po5"size="1"></td>
         <td><input type="text" id="" name="po6"size="1"></td>
          <td><input type="text" id="" name="po7"size="1"></td>
           <td><input type="text" id="" name="pso1"size="1"></td>
            <td><input type="text" id="" name="pso2"size="1"></td>
             <td><input type="text" id="" name="pso3"size="1"></td>
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
														<a class="Next" href="Course_Mapping.php">
                                                            <button type="button" name="Next" class="btn btn-primary">Next</button>
                                                        </div>
                                                    </div>
													</div>
													</form>
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