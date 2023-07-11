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


													$selectquery = "select * from tblstudents where 1";

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
															<td> <a href="editstudents.php?id=<?php echo $res['id']; ?>" data-toggle="tooltip" data-placement="top" title="Edit / Update"> <i class="fa fa-edit" aria-hidden="true"></i></a></td>
															<td> <a href="delete.php?id=<?php echo $res['id']; ?>" data-toggle="tooltip" data-placement="top" title="Delete"> <i class="fa fa-trash" aria-hidden="true"></i></a> </td>
														</tr>
														<?php	
												
														}

														?>

											
                                                   
													<!---<tr>
<th scope="row" colspan="2" style="text-align: center">Total Marks</th>
<td style="text-align: center"><b><?php $sql = "SELECT SUM(QoneA)FROM tblstudents"; 
$result = $conn->query($sql); 
while($row = mysqli_fetch_array($result)){
	echo " Total : ". $row['SUM(QoneA)'];
}
?></b></td>
</tr>-->
<!--<tr>
<th scope="row" colspan="2" style="text-align: center">Average Marks</th>
<td style="text-align: center"><b><?php $sql = "SELECT AVG(QoneA)FROM tblstudents"; 
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
  </tr>

	<?php
													include 'dbconnection.php';


													$selectquery = "select * from co_add where 1";

													$query = mysqli_query($conn,$selectquery);

													$nums = mysqli_num_rows($query);

													$res = mysqli_fetch_array($query);

													while($res = mysqli_fetch_array($query)){
													?>	
													<tr>
  
  
    <th>Course Outcome</th>
															<td> <input type="text" class="col-sm-5" name= "COQoneA" value="<?php echo $co1=$res['QoneA']; ?><?php $sql="Update co_attainment set course_outcome=$co1 where id='Q1.A'"; $rs = mysqli_query($conn, $sql);?>" readonly></td>
															<td> <input type="text" class="col-sm-5" name= "COQoneB" value="<?php echo $co2=$res['QoneB']; ?><?php $sql="Update co_attainment set course_outcome=$co2 where id='Q1.B'"; $rs = mysqli_query($conn, $sql);?>" readonly></td>
															<td> <input type="text" class="col-sm-5" name= "COQoneC" value="<?php echo $co3=$res['QoneC']; ?><?php $sql="Update co_attainment set course_outcome=$co3 where id='Q1.C'"; $rs = mysqli_query($conn, $sql);?>" readonly></td>
															<td> <input type="text" class="col-sm-5" name= "COQoneD" value="<?php echo $co4=$res['QoneD']; ?><?php $sql="Update co_attainment set course_outcome=$co4 where id='Q1.D'"; $rs = mysqli_query($conn, $sql);?>" readonly></td>
															<td> <input type="text" class="col-sm-5" name= "COQoneE" value="<?php echo $co5=$res['QoneE']; ?><?php $sql="Update co_attainment set course_outcome=$co5 where id='Q1.E'"; $rs = mysqli_query($conn, $sql);?>" readonly></td>
															<td> <input type="text" class="col-sm-5" name= "COQoneF" value="<?php echo $co6=$res['QoneF']; ?><?php $sql="Update co_attainment set course_outcome=$co6 where id='Q1.F'"; $rs = mysqli_query($conn, $sql);?>" readonly></td>
															<td> <input type="text" class="col-sm-5" name= "COQtwoA" value="<?php echo $co7=$res['QtwoA']; ?><?php $sql="Update co_attainment set course_outcome=$co7 where id='Q2.A'"; $rs = mysqli_query($conn, $sql);?>" readonly></td>
															<td> <input type="text" class="col-sm-5" name= "COQtwoB" value="<?php echo $co8=$res['QtwoB']; ?><?php $sql="Update co_attainment set course_outcome=$co8 where id='Q2.B'"; $rs = mysqli_query($conn, $sql);?>" readonly></td>
															<td> <input type="text" class="col-sm-5" name= "COQtwoC" value="<?php echo $co9=$res['QtwoC']; ?><?php $sql="Update co_attainment set course_outcome=$co9 where id='Q2.C'"; $rs = mysqli_query($conn, $sql);?>" readonly></td>
															<td> <input type="text" class="col-sm-5" name= "COQoneD" value="<?php echo $co10=$res['QtwoD']; ?><?php $sql="Update co_attainment set course_outcome=$co10 where id='Q2.D'"; $rs = mysqli_query($conn, $sql);?>" readonly></td>
															<td> <input type="text" class="col-sm-5" name= "COQoneE" value="<?php echo $co11=$res['QtwoE']; ?><?php $sql="Update co_attainment set course_outcome=$co11 where id='Q2.E'"; $rs = mysqli_query($conn, $sql);?>" readonly></td>
  </tr>
  <?php	
												
														}

														?>
  <tr>
    <th>Maximum marks</th>
  <td style="text-align: center">2</td>
     <td style="text-align: center">2</td>
      <td style="text-align: center">2</td>
       <td style="text-align: center">2</td>
        <td style="text-align: center">2</td>
         <td style="text-align: center">2</td>
          <td style="text-align: center">4</td>
           <td style="text-align: center">4</td>
            <td style="text-align: center">4</td>
             <td style="text-align: center">4</td>
              <td style="text-align: center">4</td>
  </tr>
  
  <!--Average Marks-->
    <tr>
    <th>Average marks</th>
  <td>
<input type="text" class="col-sm-7" name="AVQoneA" value="<?php $sql = " SELECT AVG(QoneA)FROM tblstudents";
$result = $conn->query($sql); 
while($row = mysqli_fetch_array($result)){
	echo $avg1=$row['AVG(QoneA)'];
	
}?><?php $sql="Update co_attainment set average_marks=$avg1 where id='Q1.A'"; $rs = mysqli_query($conn, $sql);?>"readonly>	
</td>

<td>
	 <input type="text" class="col-sm-7" name= "AVQoneB" value="<?php $sql = "SELECT AVG(QoneB)FROM tblstudents";
$result = $conn->query($sql); 
while($row = mysqli_fetch_array($result)){
	echo $avg2=$row['AVG(QoneB)'];
}?><?php $sql="Update co_attainment set average_marks=$avg2 where id='Q1.B'"; $rs = mysqli_query($conn, $sql);?>"readonly></td>
      <td>
	  <input type="text" class="col-sm-7" name= "AVQoneC" value="<?php $sql = "SELECT AVG(QoneC)FROM tblstudents"; 
$result = $conn->query($sql); 
while($row = mysqli_fetch_array($result)){
	echo $avg3=$row['AVG(QoneC)'];
}?><?php $sql="Update co_attainment set average_marks=$avg3 where id='Q1.C'"; $rs = mysqli_query($conn, $sql);?>"readonly></td>
       <td>
	   <input type="text" class="col-sm-7" name= "AVQoneD" value="<?php $sql = "SELECT AVG(QoneD)FROM tblstudents"; 
$result = $conn->query($sql); 
while($row = mysqli_fetch_array($result)){
	echo $avg4=$row['AVG(QoneD)'];
}?><?php $sql="Update co_attainment set average_marks=$avg4 where id='Q1.D'"; $rs = mysqli_query($conn, $sql);?>"readonly></td>
        <td>
		 <input type="text" class="col-sm-7" name= "AVQoneE" value="<?php $sql = "SELECT AVG(QoneE)FROM tblstudents"; 
$result = $conn->query($sql); 
while($row = mysqli_fetch_array($result)){
	echo $avg5=$row['AVG(QoneE)'];
}?><?php $sql="Update co_attainment set average_marks=$avg5 where id='Q1.E'"; $rs = mysqli_query($conn, $sql);?>"readonly></td>
         <td> <input type="text" class="col-sm-7" name= "AVQoneF" value="<?php $sql = "SELECT AVG(QoneF)FROM tblstudents"; 
$result = $conn->query($sql); 
while($row = mysqli_fetch_array($result)){
	echo $avg6=$row['AVG(QoneF)'];
}?><?php $sql="Update co_attainment set average_marks=$avg6 where id='Q1.F'"; $rs = mysqli_query($conn, $sql);?>"readonly></td>
          <td>
		   <input type="text" class="col-sm-7" name= "AVQtwoA" value="<?php $sql = "SELECT AVG(QtwoA)FROM tblstudents"; 
$result = $conn->query($sql); 
while($row = mysqli_fetch_array($result)){
	echo $avg7=$row['AVG(QtwoA)'];
}?><?php $sql="Update co_attainment set average_marks=$avg7 where id='Q2.A'"; $rs = mysqli_query($conn, $sql);?>"readonly></td>
           <td> <input type="text" class="col-sm-7" name= "AVQtwoB" value="<?php $sql = "SELECT AVG(QtwoB)FROM tblstudents"; 
$result = $conn->query($sql); 
while($row = mysqli_fetch_array($result)){
	echo $avg8=$row['AVG(QtwoB)'];
}?><?php $sql="Update co_attainment set average_marks=$avg8 where id='Q2.B'"; $rs = mysqli_query($conn, $sql);?>"readonly></td>
            <td> <input type="text" class="col-sm-7" name= "AVQtwoC" value="<?php $sql = "SELECT AVG(QtwoC)FROM tblstudents"; 
$result = $conn->query($sql); 
while($row = mysqli_fetch_array($result)){
	echo $avg9=$row['AVG(QtwoC)'];
}?><?php $sql="Update co_attainment set average_marks=$avg9 where id='Q2.C'"; $rs = mysqli_query($conn, $sql);?>"readonly></td>
             <td> <input type="text" class="col-sm-7" name= "AVQtwoD" value="<?php $sql = "SELECT AVG(QtwoD)FROM tblstudents"; 
$result = $conn->query($sql); 
while($row = mysqli_fetch_array($result)){
	echo $avg10=$row['AVG(QtwoD)'];
}?><?php $sql="Update co_attainment set average_marks=$avg10 where id='Q2.D'"; $rs = mysqli_query($conn, $sql);?>"readonly></td>
              <td> <input type="text" class="col-sm-7" name= "AVQtwoE" value="<?php $sql = "SELECT AVG(QtwoE)FROM tblstudents"; 
$result = $conn->query($sql); 
while($row = mysqli_fetch_array($result)){
	echo $avg11=$row['AVG(QtwoE)'];
}?><?php $sql="Update co_attainment set average_marks=$avg11 where id='Q2.E'"; $rs = mysqli_query($conn, $sql);?>"readonly></td>
  </tr>
  
 
 
 <!-- CO Attainment in %-->
 
    <tr>
    <th>CO Attainment in %</th>
<td> <input type="text" class="col-sm-6" name= "ATQoneA" value="<?php $sql = "SELECT AVG(QoneA)FROM tblstudents"; 
$result = $conn->query($sql); 
while($row = mysqli_fetch_array($result)){
echo $coa1=$row['AVG(QoneA)']/2*100;
		
}?><?php $sql="Update co_attainment set co_att=$coa1 where id='Q1.A'"; $rs = mysqli_query($conn, $sql);?>"readonly>
</td>
<!--Update INTO co_attainment set co_att=$coa where id='Q1.A';-->
     <td> <input type="text" class="col-sm-6" name= "ATQoneB" value="<?php $sql = "SELECT AVG(QoneB)FROM tblstudents"; 
$result = $conn->query($sql); 
while($row = mysqli_fetch_array($result)){
	echo $coa2=$row['AVG(QoneB)']/2*100;
}?><?php $sql="Update co_attainment set co_att=$coa2 where id='Q1.B'"; $rs = mysqli_query($conn, $sql);?>"readonly></td>
      <td> <input type="text" class="col-sm-6" name= "ATQoneC" value="<?php $sql = "SELECT AVG(QoneC)FROM tblstudents"; 
$result = $conn->query($sql); 
while($row = mysqli_fetch_array($result)){
	echo $coa3=$row['AVG(QoneC)']/2*100;
}?><?php $sql="Update co_attainment set co_att=$coa3 where id='Q1.C'"; $rs = mysqli_query($conn, $sql);?>"readonly></td>
       <td> <input type="text" class="col-sm-6" name= "ATQoneD" value="<?php $sql = "SELECT AVG(QoneD)FROM tblstudents"; 
$result = $conn->query($sql); 
while($row = mysqli_fetch_array($result)){
	echo $coa4=$row['AVG(QoneD)']/2*100;
}?><?php $sql="Update co_attainment set co_att=$coa4 where id='Q1.D'"; $rs = mysqli_query($conn, $sql);?>"readonly></td>
        <td> <input type="text" class="col-sm-6" name= "ATQoneE" value="<?php $sql = "SELECT AVG(QoneE)FROM tblstudents"; 
$result = $conn->query($sql); 
while($row = mysqli_fetch_array($result)){
	echo $coa5=$row['AVG(QoneE)']/2*100;
}?><?php $sql="Update co_attainment set co_att=$coa5 where id='Q1.E'"; $rs = mysqli_query($conn, $sql);?>"readonly></td>
         <td> <input type="text" class="col-sm-6" name= "ATQoneF" value="<?php $sql = "SELECT AVG(QoneF)FROM tblstudents"; 
$result = $conn->query($sql); 
while($row = mysqli_fetch_array($result)){
	echo $coa6=$row['AVG(QoneF)']/2*100;
}?><?php $sql="Update co_attainment set co_att=$coa6 where id='Q1.F'"; $rs = mysqli_query($conn, $sql);?>"readonly></td>
          <td> <input type="text" class="col-sm-6" name= "ATQtwoA" value="<?php $sql = "SELECT AVG(QtwoA)FROM tblstudents"; 
$result = $conn->query($sql); 
while($row = mysqli_fetch_array($result)){
	echo $coa7=$row['AVG(QtwoA)']/4*100;
}?><?php $sql="Update co_attainment set co_att=$coa7 where id='Q2.A'"; $rs = mysqli_query($conn, $sql);?>"readonly></td>
           <td> <input type="text" class="col-sm-6" name= "ATQtwoB" value="<?php $sql = "SELECT AVG(QtwoB)FROM tblstudents"; 
$result = $conn->query($sql); 
while($row = mysqli_fetch_array($result)){
	echo $coa8=$row['AVG(QtwoB)']/4*100;
}?><?php $sql="Update co_attainment set co_att=$coa8 where id='Q2.B'"; $rs = mysqli_query($conn, $sql);?>"readonly></td>
            <td> <input type="text" class="col-sm-6" name= "ATQtwoC" value="<?php $sql = "SELECT AVG(QtwoC)FROM tblstudents"; 
$result = $conn->query($sql); 
while($row = mysqli_fetch_array($result)){
	echo $coa9=$row['AVG(QtwoC)']/4*100;
}?><?php $sql="Update co_attainment set co_att=$coa9 where id='Q2.C'"; $rs = mysqli_query($conn, $sql);?>"readonly></td>
             <td> <input type="text" class="col-sm-6" name= "ATQtwoD" value="<?php $sql = "SELECT AVG(QtwoD)FROM tblstudents"; 
$result = $conn->query($sql); 
while($row = mysqli_fetch_array($result)){
	echo $coa10=$row['AVG(QtwoD)']/4*100;
}?><?php $sql="Update co_attainment set co_att=$coa10 where id='Q2.D'"; $rs = mysqli_query($conn, $sql);?>"readonly></td>
              <td> <input type="text" class="col-sm-6" name= "ATQtwoE" value="<?php $sql = "SELECT AVG(QtwoE)FROM tblstudents"; 
$result = $conn->query($sql); 
while($row = mysqli_fetch_array($result)){
	echo $coa11=$row['AVG(QtwoE)']/4*100;
}?><?php $sql="Update co_attainment set co_att=$coa11 where id='Q2.E'"; $rs = mysqli_query($conn, $sql);?>"readonly></td>
  </tr>
</table>

 <table id="example" class="display table table-striped table-bordered" cellspacing="0" width="100%">
  
  <!--Average CO Attainment-->
  
  <tr>
    <th>Average CO Attainment</th>
    <th style="text-align: center">CO 1</th>
        <th style="text-align: center">CO 2</th>
            <th style="text-align: center">CO 3</th>
                <th style="text-align: center">CO 4</th>
                    <th style="text-align: center">CO 5</th>
                        <th style="text-align: center">CO 6</th>
                            <th style="text-align: center">CO 7</th>
                            	<th style="text-align: center">CO 8</th>
  <tr>
														<th>Attainment</th>
														<td><?php $sql = "Select AVG(co_att) from co_attainment where course_outcome=1"; 
															$result = $conn->query($sql); 
															while($row = mysqli_fetch_array($result)){
																echo $row['AVG(co_att)'];
															}?></td>
														<td><?php $sql = "Select AVG(co_att) from co_attainment where course_outcome=2"; 
															$result = $conn->query($sql); 
															while($row = mysqli_fetch_array($result)){
																echo $row['AVG(co_att)'];
															}?></td>
														<td><?php $sql = "Select AVG(co_att) from co_attainment where course_outcome=3"; 
															$result = $conn->query($sql); 
															while($row = mysqli_fetch_array($result)){
																echo $row['AVG(co_att)'];
															}?></td>
														<td><?php $sql = "Select AVG(co_att) from co_attainment where course_outcome=4"; 
															$result = $conn->query($sql); 
															while($row = mysqli_fetch_array($result)){
																echo $row['AVG(co_att)'];
															}?></td>
														<td><?php $sql = "Select AVG(co_att) from co_attainment where course_outcome=5"; 
															$result = $conn->query($sql); 
															while($row = mysqli_fetch_array($result)){
																echo $row['AVG(co_att)'];
															}?></td>
														<td><?php $sql = "Select AVG(co_att) from co_attainment where course_outcome=6"; 
															$result = $conn->query($sql); 
															while($row = mysqli_fetch_array($result)){
																echo $row['AVG(co_att)'];
															}?></td>
														<td><?php $sql = "Select AVG(co_att) from co_attainment where course_outcome=7"; 
															$result = $conn->query($sql); 
															while($row = mysqli_fetch_array($result)){
																echo $row['AVG(co_att)'];
															}?></td>
														<td><?php $sql = "Select AVG(co_att) from co_attainment where course_outcome=8"; 
															$result = $conn->query($sql); 
															while($row = mysqli_fetch_array($result)){
																echo $row['AVG(co_att)'];
															}?></td>
														</tr>
</table>

 <!-- <div class="form-group">
                                                        <div class="col-sm-10">
														<a class="CO analysis" href="test.php">
                                                            <button type="submit" name="submit" class="btn btn-primary">CO analysis</button>
                                                        </div>
                                                    </div> -->
													
													
													<div class="container">
														<div class="vertical-center">
														<a class="Add CO" href="Add_CO.php">
                                                            <button type="submit" name="submit" class="btn btn-primary">Add CO</button>
                                                        </div>
                                                    </div>
													
												
													
													<!--
													 <div class="container">
														<div class="vertical-center">
														<a class="Add CO" href="">
                                                            <button type="submit" name="submit" class="btn btn-primary">Analyze</button>
                                                        </div>
                                                    </div>
													-->
													
													
                                         
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


