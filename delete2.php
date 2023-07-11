<?php
include "dbconnection.php";

$id = $_GET['id'];

$deletequery = "delete from tblstudents2 where id=$id";

$query = mysqli_query($conn,$deletequery);

header('location:manage-students2.php');

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