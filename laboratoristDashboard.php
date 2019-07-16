<?php
include('session_laboratorist.php');
include('connection.php');
$query = "SELECT * FROM noticeboard ORDER BY id DESC LIMIT 1";
$result = mysql_query($query, $connection);
while ($row = mysql_fetch_array($result)) {
    $noticeboard = $row["noticeboard"];
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <!--<link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png" />-->
    <link rel="icon" type="image/png" href="./assets/img/logo.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Laboratorist Dashboard</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="./assets/css/material-dashboard.css?v=1.2.0" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-color="green" data-image="./assets/img/doctor.jpg">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="logo">
                <a href="#">
                    <img src="./assets/img/logo.png" style="width: 50px; padding-left: 10px; padding-right: 10px">
                    <span style="color: red; font-weight: 520; font-size: 17px">e</span><span style="color: black; font-weight: 520; font-size: 17.5px">Hospital</span>
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="active">
                        <a href="./laboratoristDashboard.php">
                            <i class="material-icons">dashboard</i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a href="./laboratorist/testQueue.php">
                            <i class="material-icons">assignment</i>
                            <p>Test Queue</p>
                        </a>
                    </li>
                    <li>
                        <a href="./logout.php">
                            <i class="fa fa-sign-out" style="font-size: 28px"></i>
                            <p>Log Out</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <nav class="navbar navbar-transparent navbar-absolute">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#" style="font-weight: bold"> Laboratorist Dashboard </a>
                    </div>

                </div>
            </nav>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="blue">
                                    <h4 class="title">Welcome to Hospital Management System</h4>
                                    <p class="category">EZ Solution</p>
                                </div>
                                <div class="card-content">
                                    </br>
                                    </br>
                                    <p>
                                        Our Hospital Management System software is excellent software that provides the benefits of streamlined operations, enhanced adminstration & control.It is a very flexible and easy to use.It is designed and developed to deliver real benefits to hospitals and clinics.The Hospital Management System is custom built in order to meet the specific requirement of all hospitals across the globe.All the modules and features have been particularly built to just fit in to your requirements.This software helps you to manage all section of the hospital like reception, lab, InPatient management, OutPatient management, laboratory management.
                                    </p>
                                    </br>
                                    <p>
                                        Please choose the required option from the sidebar menu links.
                                    </p>
                                    </br>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-7">
                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <h4 class="title"><i class="fa fa-tag" style="font-size: 20px; margin-right: 5px"></i>Admin Noticeboard</h4>
                                </div>
                                <div class="card-content">
                                    <p>
                                        <?php  echo "$noticeboard"; ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <footer class="footer">
                <div class="container-fluid">
                    <p class="copyright pull-right">
                        &copy;
                        <script type="text/javascript">
                            document.write(new Date().getFullYear());
                        </script>
                        <a href="#">EZ Solution</a>, Hospital Management System
                    </p>
                </div>
            </footer>
        </div>
    </div>
</body>

<!--   Core JS Files   -->
<script src="./assets/js/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="./assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="./assets/js/material.min.js" type="text/javascript"></script>
<!--  PerfectScrollbar Library -->
<script src="./assets/js/perfect-scrollbar.jquery.min.js"></script>
<!-- Material Dashboard javascript methods -->
<script src="./assets/js/material-dashboard.js?v=1.2.0"></script>

</html>