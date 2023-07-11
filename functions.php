    <?php
	error_reporting(0);
	include 'dbconnection.php';

     if(isset($_POST["Import"])){
        
        $filename=$_FILES["file"]["tmp_name"];    
         if($_FILES["file"]["size"] > 0)
         {
            $file = fopen($filename, "r");
			
              while (($getData = fgetcsv($file, 10000, ",")) !== FALSE)
               {
                 $sql = "INSERT into tblstudents ('f_name','En_no','s_class','QoneA','QoneB','QoneC','QoneD','QoneE','QoneF','QtwoA','QtwoB','QtwoC','QtwoD','QtwoE') 
                       values ('".$getData[0]."','".$getData[1]."','".$getData[2]."','".$getData[3]."','".$getData[4]."','".$getData[5]."','".$getData[6]."','".$getData[7]."','".$getData[8]."','".$getData[9]."','".$getData[10]."','".$getData[11]."','".$getData[12]."','".$getData[13]."','".$getData[14]."','".$getData[15]."')";
                       $result = mysqli_query($conn, $sql);
            if(!isset($result))
            {
              echo "<script type=\"text/javascript\">
                  alert(\"Invalid File:Please Upload CSV File.\");
                  window.location = \"index.php\"
                  </script>";    
            }
            else {
                echo "<script type=\"text/javascript\">
                alert(\"CSV File has been successfully Imported.\");
                window.location = \"index.php\"
              </script>";
            }
               }
          
               fclose($file);

         }
      }  
function get_all_records(){
        $con = getdb();
        $Sql = "SELECT * FROM tblstudents";
        $result = mysqli_query($conn, $Sql);  
        if (mysqli_num_rows($result) > 0) {
         echo "<div class='table-responsive'><table id='id' class='table table-striped table-bordered'>
                 <thead><tr><th>id</th>
                              <th>f_name</th>
                              <th>En_no</th>
                              <th>Class</th>
                              <th>QoneA</th>
							  <th>QoneB</th>
							  <th>QoneC</th>
							  <th>QoneD</th>
							  <th>QoneE</th>
							  <th>QoneF</th>
							  <th>QtwoA</th>
							  <th>QtwoB</th>
							  <th>QtwoC</th>
							  <th>QtwoD</th>
						      <th>QtwoE</th>
							  
								 
							   
                            </tr></thead><tbody>";
         while($row = mysqli_fetch_assoc($result)) {
             echo "<tr><td>" . $row['id']."</td>
                       <td>" . $row['f_name']."</td>
                       <td>" . $row['En_no']."</td>
                       <td>" . $row['Class']."</td>
					   <td>" . $row['QoneA']."</td>
					   <td>" . $row['QoneB']."</td>
					   <td>" . $row['QoneC']."</td>
					   <td>" . $row['QoneD']."</td>
				       <td>" . $row['QoneE']."</td>
					   <td>" . $row['QoneF']."</td>
					   <td>" . $row['QtwoA']."</td>
				       <td>" . $row['QtwoB']."</td>
					   <td>" . $row['QtwoC']."</td>
					   <td>" . $row['QtwoD']."</td>
				       <td>" . $row['QtwoE']."</td>
                       
					   
					   </tr>";        
         }
        
         echo "</tbody></table></div>";
         
    } else {
         echo "No Records Found..";
    }
    }
	     if(isset($_POST["Export"])){
         
          header('Content-Type: text/csv; charset=utf-8');  
          header('Content-Disposition: attachment; filename=data.csv');  
          $output = fopen("php://output", "w");  
		 
          fputcsv($output, array(id,f_name,En_no,QoneA,QoneB,QoneC,QoneD,QoneE,QoneF,QtwoA,QtwoB,QtwoC,QtwoD,QtwoE,total));  
          $query = "SELECT * from tblstudents ORDER BY id DESC";  
          $result = mysqli_query($conn, $query);  
          while($row = mysqli_fetch_assoc($result))  
          {  
               fputcsv($output, $row);  
          }  
          fclose($output);  
     }  	  
	      
     ?>