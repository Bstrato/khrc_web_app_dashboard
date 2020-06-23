<?php
include 'mainheader.php';
include 'conn.php';
$obj = new Database();
$fetch=$obj->query_fetch("select * from khrc");

$table_name="";

if(isset($_POST['search']) && isset($_POST['visit'])){

    
    $table_name=$_POST['visit'];
   
   if(!empty($_POST['visit'])){
       
      try {
       $fetch=$obj->query_fetch("select * from ".$table_name.";");

      }catch (Exception $e) {
         echo 'Caught exception: ',  $e->getMessage(), "\n";
       }
  
   }	
   
  

}

?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="assets\img\favicon.ico">
    <title>Cryptocurrency - Bootstrap 4 Admin Template</title>
    <link rel="stylesheet" type="text/css" href="assets\css\bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets\css\dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="assets\css\font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets\css\select2.min.css">
    <link rel="stylesheet" type="text/css" href="assets\css\bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" type="text/css" href="assets\css\style.css">

    <!--[if lt IE 9]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>




</style>

<!-- Content -->
        <div class="page-wrapper bg-wrapper">
           <div class="content">
				<div class="buy-form">
				 <h4 class="page-title">DTP REPORT</h4>

				 <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
					<div class="row filter-row">
						<div class="col-sm-6 col-md-3">


							<div class="form-group select-focus">
								
								<select class="select" name="visit">
									<option  value="">Select visit</option>
									<option value="khrc"  <?php if($table_name=="khrc") echo "selected"; ?>>Visit 1</option>
									<option  value="khrc2" <?php if($table_name=="khrc2") echo "selected"; ?>>Visit 2</option>
									<option  value="khrc3" <?php if($table_name=="khrc3") echo "selected"; ?>>Visit 3</option>
									<option  value="khrc4" <?php if($table_name=="khrc4") echo "selected"; ?>>Visit 4</option>
									<option  value="khrc5" <?php if($table_name=="khrc5") echo "selected"; ?>>Visit 5</option>
									<option  value="khrc6" <?php if($table_name=="khrc6") echo "selected"; ?>>Visit 6</option>
									<option  value="khrc7" <?php if($table_name=="khrc7") echo "selected"; ?>>Visit 7</option>
									<option  value="khrc8" <?php if($table_name=="khrc8") echo "selected"; ?>>Visit 8</option>
									<option  value="khrc9" <?php if($table_name=="khrc9") echo "selected"; ?>>Visit 9</option>
								</select>
							</div>
						</div>
						
						<div class="col-sm-6 col-md-3" style="margin-top:-1.0rem;">
							<input type="submit" name="search" value="Search" class="btn btn-success btn-block mb-1 mt-3" style="min-height:20px;height:40px;padding:8px;"/>
						</div>
					</div>

				</form>
			<p>

				<div class="row">
						<div class="col-md-12">
							<div class="table-responsive">
								<table class="table table-striped custom-table mb-0 datatable">
									<thead>
										<tr>
											<th>#</th>
											<th style="min-width:100px;">Male</th>
											<th style="min-width:100px;">Female</th>
											<th style="min-width:100px;">Total</th>
											<th style="min-width:100px;">No.from field</th>
											<th style="min-width:100px;">CC. form Received</th>
											<th style="min-width:100px;">Local Data</th>
										</tr>
									</thead>
									<tbody>


																		
											<?php


											 try {


												while($r=mysqli_fetch_array($fetch, MYSQL_ASSOC))
												{
												?>
													<tr>	
														<td><?php echo $r['id'];?></td>
														<td><?php echo $r['male'];?></td>
														<td><?php echo $r['female'];?></td>
														<td><?php echo $r['total'];?></td>
														<td><?php echo $r['no_from_field'];?></td>
														<td><?php echo $r['cc_form_received'];?></td>
														<td><?php echo $r['local_data'];?></td>
													</tr>

											    <?php
											        }


										      }catch (Exception $e) {
                                                      echo "<tr><td colspan='8'>Caught exception: ",  $e->getMessage(), "\n","</tr></td>";
                                               } 										      


										     ?>
										
									</tbody>
								</table>
							</div>
						</div>
					</div>
					
        </p>
    <div class="sidebar-overlay" data-reff=""></div>
   <script src="assets\js\jquery-3.2.1.min.js"></script>
	<script src="assets\js\popper.min.js"></script>
    <script src="assets\js\bootstrap.min.js"></script>
    <script src="assets\js\jquery.dataTables.min.js"></script>
    <script src="assets\js\dataTables.bootstrap4.min.js"></script>
    <script src="assets\js\select2.min.js"></script>
    <script src="assets\js\moment.min.js"></script>
    <script src="assets\js\bootstrap-datetimepicker.min.js"></script>
    <script src="assets\js\jquery.slimscroll.js"></script>
   
</body>

</html>