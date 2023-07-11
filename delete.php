<?php
include "dbconnection.php";

$id = $_GET['id'];

$deletequery = "delete from tblstudents where id=$id";

$query = mysqli_query($conn,$deletequery);

header('location:manage-students.php');

if($query){
	?>
		<script>
			alert("Deleted Sucessfully");
		</script>	
	<?php
}else{
	?>
		<script>
			alert("Not Deleted");
		</script>	
	<?php
}

?>