<?php
include 'log.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="assets\img\logo.png">
    <title>KHRC-EPIMAL</title>
    <link rel="stylesheet" type="text/css" href="assets\css\bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets\css\font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets\css\style.css">
    
    <script src="assets\js\jquery-3.5.1.js"></script>
    <script src="assets\js\jquery.dataTables.min.js"></script>
    <!--[if lt IE 9]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
	<div id= "login" class="main-wrapper account-wrapper bg-wrapper">
        <div class="account-page">
			<div class="account-center">
				<div class="account-box">
                    <form  method="POST" action="login_v1.php" class="form-signin">
						<div class="account-logo">
                            <a href="index.html"><img src="assets\img\logo.png" alt="Logo"></a>
                        </div>
                        <div id="username" class="form-group">
                            <label>Username</label>
                            <input type="text" autofocus="" class="form-control" name="username" id="username2">
                        </div>
                        <div id="password" class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password" id="password2">
                        </div>
                        <div class="form-group text-center">
                            <a href="#">Forgot your password?</a>
                        </div>
                        <div id= "login_btn" class="form-group text-center">
                            <button type="submit" class="btn btn-primary account-btn" name="signin_btn" Value="Login">Login</button>
                        </div>
                        <div class="text-center register-link">
                         <a href="#">Create Account</a>
                        </div>
                    </form>
                </div>
			</div>
        </div>
    </div>
    <div class="sidebar-overlay" data-reff=""></div>




<script>
$(document). ready(function(){
    
    $("#login_btn"). click(function(e){

        var valid = select.checkValidity();

           if(valid){

            var username = $("#username").val();
            var password = $("#password").val();
        }
        e.preventDefault();

        "ajax":({

            type: "POST",
            url: "login_code.php",
            data: {username: username, password: password},

            success: function(data){

            alert("success")

            },
            error: function(data){
            alert("There were errors while doing the operation")
                }
        });
    }

     });

</script>
</body>
</html>