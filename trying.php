<?php
include 'heading.php';
include "config.php";  
?>  



<html>
<body>
 <div class="page-wrapper"> <!-- content -->
            <div class="content container-fluid">
                <div class="page-header">
			</div>
					<div class="page-content">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-12">
							<div class="card">
								<div class="page-title">
									<div class="row">
										<div class="col-lg-12 col-md-12 col-sm-12 col-12">
											<div class="Page-title">Student information
											</div>
										</div>
									</div>
								</div>
								<div class="card-body">	
									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-6 col-12">
											 <form class="custom-mt-form">
												<div class="form-group custom-mt-form-group">
													<input type="text">
													<label class="control-label">First Name</label><i class="bar"></i>
												</div>
												<div class="form-group custom-mt-form-group">
													<input type="text">
													<label class="control-label">Last Name</label><i class="bar"></i>
												</div>
												<div class="form-group custom-mt-form-group">
													<input type="text">
													<label class="control-label">Postal Address 1</label><i class="bar"></i>
												</div>
												<div class="form-group custom-mt-form-group">
													<input type="text">
													<label class="control-label">House Address</label><i class="bar"></i>
												</div>
												<div class="form-group custom-mt-form-group">
													<select>
														<option>Male</option>
														<option>Female</option>
													 </select>
													 <label class="control-label">Gender</label><i class="bar"></i>
												</div>
												<div class="form-group custom-mt-form-group">
													 <input class="datetimepicker" type="text"> 
													<label class="control-label">Birth Date</label><i class="bar"></i>
												</div>
												<div class="form-group custom-mt-form-group">
													<input type="text">
													<label class="control-label">Class</label><i class="bar"></i>
												</div>
												<div class="form-group custom-mt-form-group">
													<input type="text">
													<label class="control-label">Religion</label><i class="bar"></i>
												</div>
											</form>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-6 col-12">
											<form class="custom-mt-form">
												<div class="form-group custom-mt-form-group">
													<input type="text">
													<label class="control-label">Middle Name</label><i class="bar"></i>
												</div>
												<div class="form-group custom-mt-form-group">
													 <input class="form-control floating datetimepicker" type="text">
													<label class="control-label">Admission Date</label><i class="bar"></i>
												</div>
												<div class="form-group custom-mt-form-group">
													<input type="text">
													<label class="control-label">Postal Address 2</label><i class="bar"></i>
												</div>
												<div class="form-group custom-mt-form-group">
													<input type="number">
													<label class="control-label">Mobile Number</label><i class="bar"></i>
												</div>
												<div class="form-group custom-mt-form-group">
													<input type="text">
													<label class="control-label">Admission No</label><i class="bar"></i>
												</div>
												<div class="form-group custom-mt-form-group">
													<input type="text">
													<label class="control-label">ID</label><i class="bar"></i>
												</div>
												<div class="form-group custom-mt-form-group">
													<input type="text">
													<label class="control-label">Section</label><i class="bar"></i>
												</div>									
											</form>
										</div>
										
										<div class="page-title w-100 mt-4">
											<div class="row">
												<div class="col-lg-12 col-md-12 col-sm-12 col-12">
													<div class="page-title pl-3">Parents information</div>
												</div>
											</div>
										</div>
										<div class="card-body w-100 p-3">	
											<div class="row">
												<div class="col-lg-6 col-md-6 col-sm-6 col-12">
													 <form class="custom-mt-form">
														<div class="form-group custom-mt-form-group">
															<input type="text">
															<label class="control-label">Father Name</label><i class="bar"></i>
														</div>
														<div class="form-group custom-mt-form-group">
															<input type="text">
															<label class="control-label">Father Occupation</label><i class="bar"></i>
														</div>
														<div class="form-group custom-mt-form-group">
															<input type="number">
															<label class="control-label">Mobile Number</label><i class="bar"></i>
														</div>
														<div class="form-group">
															<textarea id="message" class="form__field" placeholder="Present Address" rows="4"></textarea>
															<label for="message" class="form-label">Present Address</label>
														</div>
													</form>
												</div>
												
												<div class="col-lg-6 col-md-6 col-sm-6 col-12">
													 <form class="custom-mt-form">
														<div class="form-group custom-mt-form-group">
															<input type="text">
															<label class="control-label">Mother Name</label><i class="bar"></i>
														</div>
														<div class="form-group custom-mt-form-group">
															<input type="text">
															<label class="control-label">Mother Occupation</label><i class="bar"></i>
														</div>
														<div class="form-group custom-mt-form-group">
															<input type="text">
															<label class="control-label">Nationality</label><i class="bar"></i>
														</div>
														<div class="form-group">
															<textarea id="message" class="form__field" placeholder="Premanent Address" rows="4"></textarea>
															<label for="message" class="form-label">Premanent Address</label>
														</div>
													</form>
												</div>
											</div>
										</div>
										<div class="col-lg-12 col-md-12 col-sm-12 col-12">
											<form class="custom-mt-form">
												<div class="form-group custom-mt-form-group">
													  <input type="file" name="pic" accept="image/*" style="margin-bottom:10px;">
													<label class="control-label">Student Image</label><i class="bar"></i>
												</div>
											</form>
										</div>
										<div class="col-lg-12 col-md-12 col-sm-12 col-12">
											<form class="custom-mt-form">
												<div class="form-group custom-mt-form-group">
													  <input type="file" name="pic" accept="image/*" style="margin-bottom:10px;">
													<label class="control-label">Parents Image</label><i class="bar"></i>
												</div>
											</form>
										</div>
										<div class="col-lg-12 col-md-12 col-sm-12 col-12">
											<form method = "post" action="insert_model.php" class="custom-mt-form">
												<div class="form-group text-center custom-mt-form-group">
													<button class="btn btn-primary mr-2" type="submit">Submit</button>
													<button class="btn btn-secondary type="reset">Cancel</button>
												</div>
											</form>	
									</div>		
							</div>		
						</div>	
				</div>
			</div>
		</div>
	</div>
</div>

        <div class="sidebar" id="sidebar"> <!-- sidebar -->
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="submenu">
                            <a href="#"><i class="fa fa-user" aria-hidden="true"></i> <span> Students</span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled" style="display: none;">
                                <li><a class="active" href="add-student.html">Add Student</a></li>
                                <li><a href="edit-student.html">Edit Student</a></li>
								<li><a href="about-student.html">About Student</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

						



</body>
</html>