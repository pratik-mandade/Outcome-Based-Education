<?php
include "dbconnection.php";
//$conn = mysqli_connect($servername,$username,$password,$dbname);
//error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Admin Manage Students</title>
        <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="css/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="css/lobipanel/lobipanel.min.css" media="screen" >
        <link rel="stylesheet" href="css/prism/prism.css" media="screen" > <!-- USED FOR DEMO HELP - YOU CAN REMOVE IT -->
        <link rel="stylesheet" type="text/css" href="js/DataTables/datatables.min.css"/>
        <link rel="stylesheet" href="css/main.css" media="screen" >
        <script src="js/modernizr/modernizr.min.js"></script>
          <style>
        .errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
        </style>
    </head>
    <body class="top-navbar-fixed">
        <div class="main-wrapper">

            <!-- ========== TOP NAVBAR ========== -->
   <?php include('includes/topbar.php');?> 
            <!-- ========== WRAPPER FOR BOTH SIDEBARS & MAIN CONTENT ========== -->
            <div class="content-wrapper">
                <div class="content-container">
<?php include('includes/leftbar.php');?>  

                    <div class="main-page">
                        <div class="container-fluid">
                            <div class="row page-title-div">
                                <div class="col-md-6">
                                    <h2 class="title">Manage Students</h2>
                                
                                </div>
                                
                                <!-- /.col-md-6 text-right -->
                            </div>
                            <!-- /.row -->
                            <div class="row breadcrumb-div">
                                <div class="col-md-6">
                                    <ul class="breadcrumb">
            							<li><a href="dashboard.php"><i class="fa fa-home"></i> Home</a></li>
                                        <li> Students</li>
            							<li class="active">Manage Students</li>
            						</ul>
                                </div>
                             
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.container-fluid -->

                        <section class="section">
                            <div class="container-fluid">

                             

                                <div class="row">
                                    <div class="col-md-12">

                                        <div class="panel">
                                            <div class="panel-heading">
                                                <div class="panel-title">
                                                    <h5>View Students Info</h5>
                                                </div>
                                            </div>

                                            <div class="panel-body p-20">

                                                <table id="example" class="display table table-striped table-bordered" cellspacing="0" width="100%">
                                                    <thead>
                                                        <tr>
                                                            <th>SR.NO</th>
                                                            <th>Student Name</th>
                                                            <th>Enrollment No.</th>
															<th>Class</th>
                                                 
															<th>Q1.A</th>
                                                            <th>Q1.B</th>
                                                            <th>Q1.C</th>
															<th>Q1.D</th>
                                                            <th>Q1.E</th>
                                                            <th>Q1.F</th>
												
															<th>Q2.A</th>
                                                            <th>Q2.B</th>
                                                            <th>Q2.C</th>
															<th>Q2.D</th>
                                                            <th>Q2.E</th>
															<th>Edit</th>
                                                            <th>Delete</th>
														
                                                        </tr>
                                                    </thead>
													<tbody>
													<?php
													include 'dbconnection.php';

													$selectquery = "select * from register ";

													$query = mysqli_query($conn,$selectquery);

													$nums = mysqli_num_rows($query);

													$res = mysqli_fetch_array($query);

													while($res = mysqli_fetch_array($query)){
													?>	
														
														<tr>
															<td><?php echo $res['id']; ?></td>
															<td><?php echo $res['f_name']; ?></td>
															<td><?php echo $res['En_no']; ?></td>
															<td><?php echo $res['Class']; ?></td>
															<td><?php echo $res['QoneA']; ?></td>
															<td><?php echo $res['QoneB']; ?></td>
															<td><?php echo $res['QoneC']; ?></td>
															<td><?php echo $res['QoneD']; ?></td>
															<td><?php echo $res['QoneE']; ?></td>
															<td><?php echo $res['QoneF']; ?></td>
															<td><?php echo $res['QtwoA']; ?></td>
															<td><?php echo $res['QtwoB']; ?></td>
															<td><?php echo $res['QtwoC']; ?></td>
															<td><?php echo $res['QtwoD']; ?></td>
															<td><?php echo $res['QtwoE']; ?></td>
															<td> <a href="editstudents.php?id=<?php echo $res['id']; ?>" data-toggle="tooltip" data-placement="top" title="Edit / Update"> <i class="fa fa-edit" aria-hidden="true"></i></td>
															<td><i class="fa fa-trash" aria-hidden="true"></i></a></td>
														</tr>
												<?php	
												
													}

													?>
<tr>
<th scope="row" colspan="2" style="text-align: center">Total Marks</th>
<td style="text-align: center"><b><?php $sql = "SELECT SUM(QoneA)FROM register"; 
$result = $conn->query($sql); 
while($row = mysqli_fetch_array($result)){
	echo " Total : ". $row['SUM(QoneA)'];
}
?></b></td>
</tr>

<tr>
<th scope="row" colspan="2" style="text-align: center">Average Marks</th>
<td style="text-align: center"><b><?php $sql = "SELECT AVG(QoneA)FROM register"; 
$result = $conn->query($sql); 
while($row = mysqli_fetch_array($result)){
	echo " Average : ". $row['AVG(QoneA)'];
}
?></b></td>
                                                        </tr>
											
                                                   
													</tbody>
                                                    
                                                </table>
 <div class="form-group">
                                                        <div class="col-sm-10">
														<a class="CO analysis" href="CO_Analysis.php">
                                                            <button type="submit" name="submit" class="btn btn-primary">CO Analysis</button>
                                                        </div>
                                                    </div>

                                         
                                                <!-- /.col-md-12 -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.col-md-6 -->

                                                               
                                                </div>
                                                <!-- /.col-md-12 -->
                                            </div>
                                        </div>
                                        <!-- /.panel -->
                                    </div>
                                    <!-- /.col-md-6 -->	

                                </div>
                                <!-- /.row -->

                            </div>
                            <!-- /.container-fluid -->
                        </section>
                        <!-- /.section -->

                    </div>
                    <!-- /.main-page -->

                    

                </div>
                <!-- /.content-container -->
            </div>
            <!-- /.content-wrapper -->

        </div>
        <!-- /.main-wrapper -->

        <!-- ========== COMMON JS FILES ========== -->
        <script src="js/jquery/jquery-2.2.4.min.js"></script>
        <script src="js/bootstrap/bootstrap.min.js"></script>
        <script src="js/pace/pace.min.js"></script>
        <script src="js/lobipanel/lobipanel.min.js"></script>
        <script src="js/iscroll/iscroll.js"></script>

        <!-- ========== PAGE JS FILES ========== -->
        <script src="js/prism/prism.js"></script>
        <script src="js/DataTables/datatables.min.js"></script>

        <!-- ========== THEME JS ========== -->
        <script src="js/main.js"></script>
        <script>
            $(function($) {
                $('#example').DataTable();

                $('#example2').DataTable( {
                    "scrollY":        "300px",
                    "scrollCollapse": true,
                    "paging":         false
                } );

                $('#example3').DataTable();
            });
        </script>
    </body>
</html>