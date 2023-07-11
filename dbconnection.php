<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "obe5";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{
	//echo "connection Successful";
	?>
		<script>
			//alert("Connection Successful");
		</script>	
	<?php
}
else
{
	//echo "Connection Not Established";
	?>
		<script>
			//alert("No Connection");
		</script>
	<?php	
}

?>