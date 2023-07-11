
<?php
include_once 'dbconnection.php';
if(isset($_POST['submit']))
{    
     $co = $_POST['co'];
     $avg = $_POST['avg'];
     $co_att = $_POST['co_att'];
     $sql = "INSERT INTO test1 (co,avg,co_att)
     VALUES ('$co','$avg','$co_att')";
     if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Admin Manage Students Marks</title>
        <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="css/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="css/lobipanel/lobipanel.min.css" media="screen" >
        <link rel="stylesheet" href="css/prism/prism.css" media="screen" > <!-- USED FOR DEMO HELP - YOU CAN REMOVE IT -->
        <link rel="stylesheet" type="text/css" href="js/DataTables/datatables.min.css"/>
        <link rel="stylesheet" href="css/main.css" media="screen" >
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" crossorigin="anonymous"></script>
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
                                    <h2 class="title">Manage Students Marks</h2>
                                
                                </div>
                                
                                <!-- /.col-md-6 text-right -->
                            </div>
                            <!-- /.row -->
                            <div class="row breadcrumb-div">
                                <div class="col-md-6">
                                    <ul class="breadcrumb">
            							<li><a href="dashboard.php"><i class="fa fa-home"></i> Home</a></li>
                                        <li> Students</li>
            							<li class="active">Manage Students Marks</li>
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
                                                 
															<th>QoneA</th>
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


													$selectquery = "select * from tblstudents2 where 1";

													$query = mysqli_query($conn,$selectquery);

													$nums = mysqli_num_rows($query);

													$res = mysqli_fetch_array($query);

													while($res = mysqli_fetch_array($query)){
													?>	
														
														<tr>
															<td><?php echo $res['id']; ?></td>
															<td><?php echo $res['f_name']; ?></td>
															<td><?php echo $res['En_no']; ?></td>
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
															<td> <a href="editstudents2.php?id=<?php echo $res['id']; ?>" data-toggle="tooltip" data-placement="top" title="Edit / Update"> <i class="fa fa-edit" aria-hidden="true"></i></a></td>
															<td> <a href="delete2.php?id=<?php echo $res['id']; ?>" data-toggle="tooltip" data-placement="top" title="Delete"> <i class="fa fa-trash" aria-hidden="true"></i></a> </td>
														</tr>
														<?php	
												
														}

														?>

											
                                                   
													<!---<tr>
<th scope="row" colspan="2" style="text-align: center">Total Marks</th>
<td style="text-align: center"><b><?php $sql = "SELECT SUM(QoneA)FROM tblstudents2"; 
$result = $conn->query($sql); 
while($row = mysqli_fetch_array($result)){
	echo " Total : ". $row['SUM(QoneA)'];
}
?></b></td>
</tr>-->
<!--<tr>
<th scope="row" colspan="2" style="text-align: center">Average Marks</th>
<td style="text-align: center"><b><?php $sql = "SELECT AVG(QoneA)FROM tblstudents2"; 
$result = $conn->query($sql); 
while($row = mysqli_fetch_array($result)){
	echo " Average : ". $row['AVG(QoneA)'];
}
?></b></td>
</tr>-->
											
                                                   
													</tbody>
                                                    
                                                </table>
												
												<table id="example" class="display table table-striped table-bordered" cellspacing="0" width="100%">
  <tr>
    <th>Analysis</th>
    <th><input type="text" class="col-sm-7" name= "ANQoneA" value="Q1.A"readonly>
	 <!--Update INTO co_attainment set course_outcome=$res['QoneA'] where id='Q1.A'--></th>
	
	
    <th><input type="text" class="col-sm-7" name= "ANQoneB" value="Q1.B"readonly></th>
    <th><input type="text" class="col-sm-7" name= "ANQoneC" value="Q1.C"readonly></th>
    <th><input type="text" class="col-sm-7" name= "ANQoneD" value="Q1.D"readonly></th>
    <th><input type="text" class="col-sm-7" name= "ANQoneE" value="Q1.E"readonly></th>
	<th><input type="text" class="col-sm-7" name= "ANQoneF" value="Q1.F"readonly></th>
    <th><input type="text" class="col-sm-7" name= "ANQtwoA" value="Q2.A"readonly></th>
    <th><input type="text" class="col-sm-7" name= "ANQtwoB" value="Q2.B"readonly></th>
    <th><input type="text" class="col-sm-7" name= "ANQtwoC" value="Q2.C"readonly></th>
    <th><input type="text" class="col-sm-7" name= "ANQtwoD" value="Q2.D"readonly></th>
    <th><input type="text" class="col-sm-7" name= "ANQtwoE" value="Q2.E"readonly></th>
  </tr>

	<?php
													include 'dbconnection.php';


													$selectquery = "select * from co_add2 where 1";

													$query = mysqli_query($conn,$selectquery);

													$nums = mysqli_num_rows($query);

													$res = mysqli_fetch_array($query);

													while($res = mysqli_fetch_array($query)){
													?>	
													<tr>
  
  
															<th>Course Outcome</th>
															<td> <input type="text" class="col-sm-5" name= "co" value="<?php echo $res['QoneA']; ?>" readonly></td>
															 <!--Update INTO co_attainment set course_outcome=$res['QoneA'] where id='Q1.A'; -->
															<td> <input type="text" class="col-sm-5" name= "COQoneB" value="<?php echo $res['QoneB']; ?>" readonly></td>
															<td> <input type="text" class="col-sm-5" name= "COQoneC" value="<?php echo $res['QoneC']; ?>" readonly></td>
															<td> <input type="text" class="col-sm-5" name= "COQoneD" value="<?php echo $res['QoneD']; ?>" readonly></td>
															<td> <input type="text" class="col-sm-5" name= "COQoneE" value="<?php echo $res['QoneE']; ?>" readonly></td>
															<td> <input type="text" class="col-sm-5" name= "COQoneF" value="<?php echo $res['QoneF']; ?>" readonly></td>
															<td> <input type="text" class="col-sm-5" name= "COQtwoA" value="<?php echo $res['QtwoA']; ?>" readonly></td>
															<td> <input type="text" class="col-sm-5" name= "COQtwoB" value="<?php echo $res['QtwoB']; ?>" readonly></td>
															<td> <input type="text" class="col-sm-5" name= "COQtwoC" value="<?php echo $res['QtwoC']; ?>" readonly></td>
															<td> <input type="text" class="col-sm-5" name= "COQoneD" value="<?php echo $res['QtwoD']; ?>" readonly></td>
															<td> <input type="text" class="col-sm-5" name= "COQoneE" value="<?php echo $res['QtwoE']; ?>" readonly></td>
 
  </tr>
  <?php	
												
														}

														?>
														

  <tr>
    <th>Maximum marks</th>
  <td> <input type="text" class="col-sm-5" name= "MMQoneA" value="2"readonly></td>
  <!--update into co_attainment set maximum_marks=$res['QoneA'] where id='Q1.A';-->
     <td> <input type="text" class="col-sm-5" name= "MMQoneB" value="2"readonly></td>
      <td> <input type="text" class="col-sm-5" name= "MMQoneC" value="2"readonly></td>
       <td> <input type="text" class="col-sm-5" name= "MMQoneD" value="2"readonly></td>
        <td> <input type="text" class="col-sm-5" name= "MMQoneE" value="2"readonly></td>
         <td> <input type="text" class="col-sm-5" name= "MMQoneF" value="2"readonly></td>
          <td> <input type="text" class="col-sm-5" name= "MMQtwoA" value="4"readonly></td>
           <td> <input type="text" class="col-sm-5" name= "MMQtwoB" value="4"readonly></td>
            <td> <input type="text" class="col-sm-5" name= "MMQtwoC" value="4"readonly></td>
             <td> <input type="text" class="col-sm-5" name= "MMQoneD" value="4"readonly></td>
              <td> <input type="text" class="col-sm-5" name= "MMQoneE" value="4"readonly></td>
  </tr>
    <tr>
    <th>Average marks</th>
  <td>
<input type="text" class="col-sm-7" name="avg" value="<?php $sql = "SELECT AVG(QoneA)FROM tblstudents2"; 
$result = $conn->query($sql); 
while($row = mysqli_fetch_array($result)){
	echo $avg=$row['AVG(QoneA)'];
	
}?>"readonly>	
</td>

<td>
	 <input type="text" class="col-sm-7" name= "AVQoneB" value="<?php $sql = "SELECT AVG(QoneB)FROM tblstudents2"; 
$result = $conn->query($sql); 
while($row = mysqli_fetch_array($result)){
	echo $row['AVG(QoneB)'];
}?>"readonly></td>
      <td>
	  <input type="text" class="col-sm-7" name= "AVQoneC" value="<?php $sql = "SELECT AVG(QoneC)FROM tblstudents2"; 
$result = $conn->query($sql); 
while($row = mysqli_fetch_array($result)){
	echo $row['AVG(QoneC)'];
}?>"readonly></td>
       <td>
	   <input type="text" class="col-sm-7" name= "AVQoneD" value="<?php $sql = "SELECT AVG(QoneD)FROM tblstudents2"; 
$result = $conn->query($sql); 
while($row = mysqli_fetch_array($result)){
	echo $row['AVG(QoneD)'];
}?>"readonly></td>
        <td>
		 <input type="text" class="col-sm-7" name= "AVQoneE" value="<?php $sql = "SELECT AVG(QoneE)FROM tblstudents2"; 
$result = $conn->query($sql); 
while($row = mysqli_fetch_array($result)){
	echo $row['AVG(QoneE)'];
}?>"readonly></td>
         <td> <input type="text" class="col-sm-7" name= "AVQoneF" value="<?php $sql = "SELECT AVG(QoneF)FROM tblstudents2"; 
$result = $conn->query($sql); 
while($row = mysqli_fetch_array($result)){
	echo $row['AVG(QoneF)'];
}?>"readonly></td>
          <td>
		   <input type="text" class="col-sm-7" name= "AVQtwoA" value="<?php $sql = "SELECT AVG(QtwoA)FROM tblstudents2"; 
$result = $conn->query($sql); 
while($row = mysqli_fetch_array($result)){
	echo $row['AVG(QtwoA)'];
}?>"readonly></td>
           <td> <input type="text" class="col-sm-7" name= "AVQtwoB" value="<?php $sql = "SELECT AVG(QtwoB)FROM tblstudents2"; 
$result = $conn->query($sql); 
while($row = mysqli_fetch_array($result)){
	echo $row['AVG(QtwoB)'];
}?>"readonly></td>
            <td> <input type="text" class="col-sm-7" name= "AVQtwoC" value="<?php $sql = "SELECT AVG(QtwoC)FROM tblstudents2"; 
$result = $conn->query($sql); 
while($row = mysqli_fetch_array($result)){
	echo $row['AVG(QtwoC)'];
}?>"readonly></td>
             <td> <input type="text" class="col-sm-7" name= "AVQtwoD" value="<?php $sql = "SELECT AVG(QtwoD)FROM tblstudents2"; 
$result = $conn->query($sql); 
while($row = mysqli_fetch_array($result)){
	echo $row['AVG(QtwoD)'];
}?>"readonly></td>
              <td> <input type="text" class="col-sm-7" name= "AVQtwoE" value="<?php $sql = "SELECT AVG(QtwoE)FROM tblstudents2"; 
$result = $conn->query($sql); 
while($row = mysqli_fetch_array($result)){
	echo $row['AVG(QtwoE)'];
}?>"readonly></td>
  </tr>
  
  
    <tr>
    <th>CO Attainment in %</th>
<td> <input type="text" class="col-sm-6" name= "co_att" value="<?php $sql = "SELECT AVG(QoneA)FROM tblstudents2"; 
$result = $conn->query($sql); 
while($row = mysqli_fetch_array($result)){
	$coa=$row['AVG(QoneA)']/2*100;
	echo $coa;
	
}?>"readonly>
</td>
<!--Update INTO co_attainment set co_att=$coa where id='Q1.A';-->
     <td> <input type="text" class="col-sm-6" name= "ATQoneB" value="<?php $sql = "SELECT AVG(QoneB)FROM tblstudents2"; 
$result = $conn->query($sql); 
while($row = mysqli_fetch_array($result)){
	echo $row['AVG(QoneB)']/2*100;
}?>"readonly></td>
      <td> <input type="text" class="col-sm-6" name= "ATQoneC" value="<?php $sql = "SELECT AVG(QoneC)FROM tblstudents2"; 
$result = $conn->query($sql); 
while($row = mysqli_fetch_array($result)){
	echo $row['AVG(QoneC)']/2*100;
}?>"readonly></td>
       <td> <input type="text" class="col-sm-6" name= "ATQoneD" value="<?php $sql = "SELECT AVG(QoneD)FROM tblstudents2"; 
$result = $conn->query($sql); 
while($row = mysqli_fetch_array($result)){
	echo $row['AVG(QoneD)']/2*100;
}?>"readonly></td>
        <td> <input type="text" class="col-sm-6" name= "ATQoneE" value="<?php $sql = "SELECT AVG(QoneE)FROM tblstudents2"; 
$result = $conn->query($sql); 
while($row = mysqli_fetch_array($result)){
	echo $row['AVG(QoneE)']/2*100;
}?>"readonly></td>
         <td> <input type="text" class="col-sm-6" name= "ATQoneF" value="<?php $sql = "SELECT AVG(QoneF)FROM tblstudents2"; 
$result = $conn->query($sql); 
while($row = mysqli_fetch_array($result)){
	echo $row['AVG(QoneF)']/2*100;
}?>"readonly></td>
          <td> <input type="text" class="col-sm-6" name= "ATQtwoA" value="<?php $sql = "SELECT AVG(QtwoA)FROM tblstudents2"; 
$result = $conn->query($sql); 
while($row = mysqli_fetch_array($result)){
	echo $row['AVG(QtwoA)']/4*100;
}?>"readonly></td>
           <td> <input type="text" class="col-sm-6" name= "ATQtwoB" value="<?php $sql = "SELECT AVG(QtwoB)FROM tblstudents2"; 
$result = $conn->query($sql); 
while($row = mysqli_fetch_array($result)){
	echo $row['AVG(QtwoB)']/4*100;
}?>"readonly></td>
            <td> <input type="text" class="col-sm-6" name= "ATQtwoC" value="<?php $sql = "SELECT AVG(QtwoC)FROM tblstudents2"; 
$result = $conn->query($sql); 
while($row = mysqli_fetch_array($result)){
	echo $row['AVG(QtwoC)']/4*100;
}?>"readonly></td>
             <td> <input type="text" class="col-sm-6" name= "ATQtwoD" value="<?php $sql = "SELECT AVG(QtwoD)FROM tblstudents2"; 
$result = $conn->query($sql); 
while($row = mysqli_fetch_array($result)){
	echo $row['AVG(QtwoD)']/4*100;
}?>"readonly></td>
              <td> <input type="text" class="col-sm-6" name= "ATQtwoE" value="<?php $sql = "SELECT AVG(QtwoE)FROM tblstudents2"; 
$result = $conn->query($sql); 
while($row = mysqli_fetch_array($result)){
	echo $row['AVG(QtwoE)']/4*100;
}?>"readonly></td>
  </tr>
</table>

 <table id="example" class="display table table-striped table-bordered" cellspacing="0" width="100%">
  <tr>
    <th>Average CO Attainment</th>
    <th>CO 1</th>
        <th>CO 2</th>
            <th>CO 3</th>
                <th>CO 4</th>
                    <th>CO 5</th>
                        <th>CO 6</th>
                            <th>CO 7</th>
                            	<th>CO 8</th>
  </tr>
 

													<tr>
  
  
															<th>Attainment</th>
															<td></td>
															 <!--Update INTO co_attainment set course_outcome=$res['QoneA'] where id='Q1.A'; -->
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															
 
  </tr>

														
</table>
			
													<div class="container">
														<div class="vertical-center">
														<a class="Add CO" href="Add_CO2.php">
                                                            <button type="submit" name="co" class="btn btn-primary">Add CO</button>
                                                        </div>
                                                    </div>
													
													<!--<div class="container">
														<div class="vertical-center">
														<a class="import" href="Import.php">
                                                            <button type="submit" name="data" class="btn btn-primary">Import Data</button>
                                                        </div>
                                                    </div>-->
													
											
													
                                         
                                                <!-- /.col-md-12 -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.col-md-6 -->
		<div class="">
														<div class="">
                                                            <button type="submit" name="submit" class="">Submit</button>
                                                        </div>
                                                    </div>

                                                               
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


