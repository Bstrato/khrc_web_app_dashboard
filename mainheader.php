<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="assets\img\logo.png">
    <title>KHRC-EPIMAL</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets\css\bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets\css\font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets\css\fullcalendar.min.css">
    <link rel="stylesheet" type="text/css" href="assets\css\dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="assets\css\select2.min.css">
    <link rel="stylesheet" type="text/css" href="assets\css\bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" type="text/css" href="assets\plugins\morris\morris.css">
    <link rel="stylesheet" type="text/css" href="assets\css\style.css">
    <!--[if lt IE 9]>
        <script src="assets/js/html5shiv.min.js"></script>
        <script src="assets/js/respond.min.js"></script>
    <![endif]-->

</head>

<body>
     <!-- Header start -->
        <div class="header">
            <div class="header-left">
                <a href="index.php" class="logo"></a>
            </div>
            <div class="page-title-box float-left">
            </div>
            <a id="mobile_btn" class="mobile_btn float-left" href="#sidebar"><i class="fa fa-bars" aria-hidden="true"></i></a>
            <ul class="nav user-menu float-right">
                <li class="nav-item dropdown d-none d-sm-block">
                  
                    <div class="dropdown-menu notifications">
                        <div class="topnav-dropdown-header">
                            <span>Notifications</span>
                        </div>
                        <div class="drop-scroll">
                            <ul class="notification-list">
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="media">
                                            <span class="avatar">
                                                <img alt="John Doe" src="assets\img\user.jpg" class="img-fluid rounded-circle">
                                            </span>
                                            <div class="media-body">
                                                <p class="noti-details"><span class="noti-title">John Doe</span> is now following you </p>
                                                <p class="noti-time"><span class="notification-time">4 mins ago</span></p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="media">
                                            <span class="avatar">T</span>
                                            <div class="media-body">
                                                <p class="noti-details"><span class="noti-title">Tarah Shropshire</span> sent you a message.</p>
                                                <p class="noti-time"><span class="notification-time">6 mins ago</span></p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="media">
                                            <span class="avatar">L</span>
                                            <div class="media-body">
                                                <p class="noti-details"><span class="noti-title">Misty Tison</span> like your photo.</p>
                                                <p class="noti-time"><span class="notification-time">8 mins ago</span></p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="media">
                                            <span class="avatar">G</span>
                                            <div class="media-body">
                                                <p class="noti-details"><span class="noti-title">Rolland Webber</span> booking appoinment for meeting.</p>
                                                <p class="noti-time"><span class="notification-time">12 mins ago</span></p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                
                            </ul>
                        </div>
                       
                    </div>
                </li>
                
                <li class="nav-item dropdown has-arrow">
                    <a href="#" class="dropdown-toggle nav-link user-link" data-toggle="dropdown">
                        <span class="user-img"><img class="rounded-circle" src="assets\img\user.jpg" width="40" alt="Admin">
                            <span class="status online"></span></span>
                        <span>Admin</span>
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="profile.html">My Profile</a>
                        <a class="dropdown-item" href="edit-profile.html">Edit Profile</a>
                        <a class="dropdown-item" href="settings.html">Settings</a>
                        <a class="dropdown-item" href="registerform.php">Create Account</a>
                        <a class="dropdown-item" href="user_login.php">Logout</a>
                    </div>
                </li>
            </ul>
            <div class="dropdown mobile-user-menu float-right"> 

                <!-- mobile menu -->
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="profile.html">My Profile</a>
                    <a class="dropdown-item" href="edit-profile.html">Edit Profile</a>
                    <a class="dropdown-item" href="settings.html">Settings</a>
                    <a class="dropdown-item" href="registerform.php">Create Account</a>
                    <a class="dropdown-item" href="login.html">Logout</a>
                </div>
            </div>
        </div>
        

         <!-- sidebar -->
        <div class="sidebar" id="sidebar"> 

            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="menu-title">Main</li>
                        <li class="active">
                            <a href="dashboard.php"><i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard</a>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fa fa-flag-o" aria-hidden="true"></i> <span> EXPOSED</span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled" style="display: none;">
                                <li><a href="dtp.php">DTP</a></li>
                                <li><a href="catchup.php">CATCH UP</a></li>
                                <li><a href="enhance.php">ENHANCE</a></li>
                                <li><a href="hospitalization.php">HOSPITALIZATION</a></li>
                                <li><a href="listing.php">LISTINGS</a></li>
                                                                
                            </ul>
                        <li class="submenu">
                            <a href="#"><i class="fa fa-flag-o" aria-hidden="true"></i> <span> UNEXPOSED</span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled" style="display: none;">
                                <li><a href="dtp.php">DTP</a></li>
                                <li><a href="#">CATCH UP</a></li>
                                <li><a href="#">ENHANCE</a></li>
                                <li><a href="#">HOSPITALIZATION</a></li>
                                <li><a href="listing.php">LISTINGS</a></li>
                                                               
                            </ul>
                            <a href="settings.html"><i class="fa fa-cog" aria-hidden="true"></i> Settings</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="sidebar-overlay" data-reff=""></div>
     <script type="text/javascript" src="assets\js\jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="assets\js\popper.min.js"></script>
    <script type="text/javascript" src="assets\js\bootstrap.min.js"></script>
    <script type="text/javascript" src="assets\js\jquery.slimscroll.js"></script>
    <script type="text/javascript" src="assets\js\select2.min.js"></script>
    <script type="text/javascript" src="assets\js\moment.min.js"></script>
    <script type="text/javascript" src="assets\js\bootstrap-datetimepicker.min.js"></script>
    <script type="text/javascript" src="assets\plugins\morris\morris.min.js"></script>
    <script type="text/javascript" src="assets\plugins\raphael\raphael-min.js"></script>
    <script type="text/javascript" src="assets\js\fullcalendar.min.js"></script>
    <script type="text/javascript" src="assets\js\jquery.fullcalendar.js"></script>
    <script type="text/javascript" src="assets\js\chart.js"></script>
    <script type="text/javascript" src="assets\js\app.js"></script>


</body>

</html>