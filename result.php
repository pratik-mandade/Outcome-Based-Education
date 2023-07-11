
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
                                    <h2 class="title">Result</h2>
                                
                                </div>
                                
                                <!-- /.col-md-6 text-right -->
                            </div>
                            <!-- /.row -->
                            <div class="row breadcrumb-div">
                                <div class="col-md-6">
                                    <ul class="breadcrumb">
                                        <li><a href="dashboard.php"><i class="fa fa-home"></i> Home</a></li>
                                
                                        <li class="active">Result</li>
                                    </ul>
                                </div>
                             
                            </div>
                            <!-- /.row -->
                        </div>
 <table id="example" class="display table table-striped table-bordered" cellspacing="0" width="100%">

  <tr>
    <th>No</th>
    <th>Course Outcomes</th>
    <th>No. of hours devoted in curriculum</th>
  </tr>
  <tr>
    <td>1</td>
    <td>Follow safety practises when undertaking electrical works</td>
    <td>8</td>
  </tr>
  <tr>
    <td>2</td>
    <td>Prepare maintenance schedules of electrical equipment</td>
    <td>14</td>
  </tr>
   <tr>
    <td>3</td>
    <td>Maintain rotating electrical machines</td>
    <td>26</td>
  </tr>
   <tr>
    <td>4</td>
    <td>Maintain single phase and three phase tranformers</td>
    <td>20</td>
  </tr>
   <tr>
    <td>5</td>
    <td>Maintain insulation systems of electrical equipment</td>
    <td>12</td>
  </tr>
   <tr>
    <td>6</td>
    <td></td>
    <td>0</td>
  </tr>
   <tr>
    <td></td>
    <td>Total Hours</td>
    <td>80</td>
  </tr>
</table>

<h1>CO PO mapping</h1>

 <table id="example" class="display table table-striped table-bordered" cellspacing="0" width="100%">

<tr>
<th></th>
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
<td></td>
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

<tr>
<td>Course Mapping</td>
<td>X</td>
<td>X</td>
<td></td>
<td>X</td>
<td>X</td>
<td>X</td>
<td>X</td>
<td>X</td>
<td>X</td>
<td></td>
</tr>

<tr>
<td>CO1</td>
<td>3</td>
<td>-</td>
<td>-</td>
<td>-</td>
<td>1</td>
<td>-</td>
<td>3</td>
<td>-</td>
<td>-</td>
<td>-</td>
</tr>

<tr>
<td>CO2</td>
<td>3</td>
         <td>-</td>
           <td>-</td>
             <td>-</td>
               <td>-</td>
                 <td>-</td>
                   <td>3</td>
                     <td>-</td>
                       <td>-</td>
                         <td>-</td>
</tr>

<tr>
<td>CO3</td>
 <td>3</td>
         <td>3</td>
           <td>-</td>
             <td>3</td>
               <td>-</td>
                 <td>3</td>
                   <td>3</td>
                     <td>3</td>
                       <td>3</td>
                         <td>-</td>
</tr>

<tr>
<td>CO4</td>
<td>3</td>
         <td>3</td>
           <td>-</td>
             <td>3</td>
               <td>-</td>
                 <td>3</td>
                   <td>3</td>
                     <td>3</td>
                       <td>3</td>
                         <td>-</td>
</tr>

<tr>
<td>CO5</td>
<td>3</td>
         <td>3</td>
           <td>-</td>
             <td>3</td>
               <td>-</td>
                 <td>3</td>
                   <td>3</td>
                     <td>3</td>
                       <td>-</td>
                         <td>-</td>
</tr>

<tr>
<td>CO6</td>
 <td>-</td>
    <td>-</td>
    <td>-</td>
    <td>-</td>
    <td>-</td>
    <td>-</td>
    <td>-</td>
    <td>-</td>
    <td>-</td>
        <td>-</td>
</tr>

<tr>
<td>Total Hrs Devoted</td>
 <td>80</td>
    <td>58</td>
    <td>0</td>
    <td>58</td>
    <td>8</td>
    <td>58</td>
    <td>80</td>
    <td>58</td>
    <td>46</td>
    <td>0</td>
</tr>

<tr>
<td>Total hr of curriculum</td>
 <td>80</td>
  <td>80</td>
   <td>80</td>
    <td>80</td>
     <td>80</td>
      <td>80</td>
       <td>80</td>
        <td>80</td>
         <td>80</td>
          <td>80</td>
</tr>

<tr>
<td>Percentage</td>
 <td>100.00</td>
    <td>72.50</td>
    <td></td>
    <td>72.50</td>
    <td>10.00</td>
    <td>72.50</td>
    <td>100.00</td>
    <td>72.50</td>
    <td>57.50</td>
    <td></td>
</tr>

<tr>
<td>Mapping strength of PO</td>
<td>3</td>
    <td>3</td>
    <td>-</td>
    <td>3</td>
    <td>1</td>
    <td>3</td>
	<td>3</td>
    <td>3</td>
    <td>3</td>
    <td>-</td>
</tr>
</table>

						
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