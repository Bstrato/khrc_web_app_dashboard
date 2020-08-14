<?php 
include 'register_khrc_code.php'; 
?>
    
 <link rel="shortcut icon" type="image/x-icon" href="assets\img\logo.png">
    <link rel="stylesheet" type="text/css" href="assets\css\register.css">
      
      <script src="assets\js\jquery-3.5.1.js"></script>
       <script src="assets\js\registration.js"></script>
     

<html>
<head>
  <title>Register</title>
  <link rel="stylesheet" href="register.css">
</head>
<body>

<form id="register_khrc" method="POST" action="register_khrc.php" class="form-signin">
      <h1>Register</h1>
      <div id="error_msg"></div>
	  <div>
	 	<input type="text" name="username" placeholder="Username" id="username" >
	    <span></span>
	  </div>
	  <div>
	   <input type="password" name="password" placeholder="Password" id="password">
	  </div>
	  <div>
	 	<button type="button" name="register" id="register">Register</button>
	  </div>
	</form>
</body>
</html>

<!--script src="jquery-3.2.1.min.js"></script>
<script src="script.js"></script>
