<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
error_reporting(0);
//$conn = mysqli_connect('localhost', 'root', '','obe5');
include "dbconnection.php";
// get the post records

    
//if(isset($_POST['analize'])){
	
	$id = $_POST['ANQoneA'];
    $course_outcome = $_POST['COQoneA'];
	//$maximum_marks = $_POST['MMQoneA'];
	$average_marks = $_POST['AVQoneA'];
	$co_att = $_POST['ATQoneA'];
	


// database insert SQL code
$sql = "update co_attainment set id='$id', course_outcome='$course_outcome', average_marks='$average_marks', co_att='$co_att' ";
echo $id;
echo $average_marks;
echo $course_outcome;
echo $co_att;
echo "this message must be displayed";
// insert in database 
$rs = mysqli_query($conn, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}
//}
?>





<?php
										// database connection code
										// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

										//$conn = mysqli_connect('localhost', 'root', '','obe5');
										include "dbconnection.php";
										error_reporting(0);
										$ids = $_GET['id'];
										
									
										// get the post records
										
											
											$idupdate = $_GET['id'];
											
										$Que = $_POST['ANQoneA'];
										$average_marks = $_POST['AVQoneA'];
										$co_att = $_POST['ATQoneA'];
											

										// database insert SQL code
										/* $sql = "INSERT INTO `tblstudents` (`f_name`, `En_no`, `QoneA`, `QoneB`, `QoneC`,`QoneD`, `QoneE`, `QoneF`,`QtwoA`, `QtwoB`, `QtwoC`,`QtwoD`, `QtwoE`) VALUES ('$f_name', '$En_no','$QoneA','$QoneB','$QoneC','$QoneD','$QoneE','$QoneF','$QtwoA','$QtwoB','$QtwoC','$QtwoD','$QtwoE')"; */
										
										$query = " update co_attainment set id=$idupdate ,Que='$ANQoneA',average_marks='$AVQoneA',co_att='$ATQoneA', where id=$idupdate ";
										
										// insert in database 
										$rs = mysqli_query($conn, $query);

										if($rs)
										{
											echo "Contact Records Updated";
										}
										
										?>
										
										
										
										
										update co_attainment set average_marks='$avg' ,Que='$ANQoneA',average_marks='$AVQoneA',co_att='$ATQoneA', where id=23