<?php
include('session_admin.php');
include('connection.php');
$department_number = mysql_fetch_array(mysql_query(("SELECT COUNT(department_id) FROM department;"), $connection));
$doctor_number = mysql_fetch_array(mysql_query(("SELECT COUNT(id) FROM doctor;"), $connection));
$accountant_number = mysql_fetch_array(mysql_query(("SELECT COUNT(id) FROM accountant;"), $connection));
$laboratorist_number = mysql_fetch_array(mysql_query(("SELECT COUNT(id) FROM laboratorist;"), $connection));
//$pharmacist_number = mysql_fetch_array(mysql_query(("SELECT COUNT(id) FROM pharmacist;"), $connection));
$receptionist_number = mysql_fetch_array(mysql_query(("SELECT COUNT(id) FROM reception;"), $connection));
$patient_number = mysql_fetch_array(mysql_query(("SELECT COUNT(id) FROM patient_information;"), $connection));
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <!--<link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png" />-->
    <link rel="icon" type="image/png" href="./assets/img/logo.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Admin Dashboard</title>
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
                        <a href="./adminDashboard.php">
                            <i class="material-icons">dashboard</i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a href="./adminDepartment/adminDepartment.php">
                            <i class="fa fa-hospital-o" style="font-size:28px"></i>
                            <p>Department</p>
                        </a>
                    </li>
                    <li>
                        <a href="./adminDoctor/adminDoctor.php">
                            <i class="fa fa-user-md" style="font-size:28px"></i>
                            <p>Doctor</p>
                        </a>
                    </li>
                    <li>
                        <a href="./adminReceptionist/adminReceptionist.php">
                            <i class="fa fa-handshake-o" style="font-size:28px"></i>
                            <p>Receptionist</p>
                        </a>
                    </li>
                    <!--<li>
                        <a href="./nurse.html">
                            <i class="fa fa-plus-square" style="font-size: 28px"></i>
                            <p>Nurse</p>
                        </a>
                    </li>
                    <li>
                        <a href="./pharmacist.html">
                            <i class="fa fa-medkit" style="font-size: 28px"></i>
                            <p>Pharmacist</p>
                        </a>
                    </li>-->
                    <li>
                        <a href="./adminLaboratorist/adminLaboratorist.php">
                            <i class="fa fa-flask" style="font-size: 28px"></i>
                            <p>Laboratorist</p>
                        </a>
                    </li>
                    <li>
                        <a href="./adminAccountant/adminAccountant.php">
                            <i class="fa fa-money" style="font-size: 28px"></i>
                            <p>Accountant</p>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-desktop" style="font-size: 28px"></i>
                            Monitor Hospital
                            <img src="./assets/img/dropDown.png" style="width: 18px; padding-left: 10px">
                        </a>
                        <ul class="dropdown-menu" style="width: 100%">
                            <li>
                                <a href="./viewAppointment.html">
                                    <i class="fa fa-calendar" style="font-size: 28px"></i>
                                    <p>View Appointment</p>
                                </a>
                            </li>
                            <li>
                                <a href="./viewPayment.html">
                                    <i class="fa fa-money" style="font-size: 28px"></i>
                                    <p>View Payment</p>
                                </a>
                            </li>
                            <li>
                                <a href="./viewBloodBank.html">
                                    <i class="fa fa-tint" style="font-size: 28px"></i>
                                    <p>View Blood Bank</p>
                                </a>
                            </li>
                            <li>
                                <a href="./viewMedicine.html">
                                    <i class="fa fa-medkit" style="font-size: 28px"></i>
                                    <p>View Medicine</p>
                                </a>
                            </li>
                            <li>
                                <a href="./viewOperation.html">
                                    <i class="fa fa-tasks" style="font-size: 28px"></i>
                                    <p>View Operation</p>
                                </a>
                            </li>
                            <li>
                                <a href="./viewBirthReport.html">
                                    <i class="fa fa-plus-circle" style="font-size: 28px"></i>
                                    <p>View Birth Report</p>
                                </a>
                            </li>
                            <li>
                                <a href="./viewDeathReport.html">
                                    <i class="fa fa-minus-circle" style="font-size: 28px"></i>
                                    <p>View Death Report</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-cog" style="font-size: 28px"></i>
                            <p>Settings<img src="./assets/img/dropdown.png" style="width: 18px; padding-left: 10px"></p>
                        </a>
                        <ul class="dropdown-menu" style="width: 100%">
                            <li>
                                <a href="./adminSettings/manageNoticeboard.php">
                                    <i class="fa fa-tag" style="font-size: 28px"></i>
                                    <p>Manage Noticeboard</p>
                                </a>
                            </li>
                            <li>
                                <a href="systemSettings.html">
                                    <i class="fa fa-wrench" style="font-size: 28px"></i>
                                    <p>System Settings</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="./admin_profile.html">
                            <i class="material-icons">person</i>
                            <p>Profile</p>
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
                        <a class="navbar-brand" href="#" style="font-weight: bold"> Admin Dashboard </a>
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
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="purple">
                                    <i class="fa fa-hospital-o" style="font-size:28px"></i>
                                </div>
                                <div class="card-content">
                                    <h5 class="title">Department</h5>
                                    <p></p>
                                    <p class="category"><?php echo "$department_number[0]"; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="orange">
                                    <i class="fa fa-user-md" style="font-size:28px"></i>
                                </div>
                                <div class="card-content">
                                    <h5 class="title">Doctor</h5>
                                    <p></p>
                                    <p class="category"><?php echo "$doctor_number[0]"; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="green">
                                    <i class="fa fa-wheelchair" style="font-size:28px"></i>
                                </div>
                                <div class="card-content">
                                    <h5 class="title">Patient</h5>
                                    <p></p>
                                    <p class="category"><?php echo "$patient_number[0]"; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="blue">
                                    <i class="fa fa-handshake-o" style="font-size:28px"></i>
                                </div>
                                <div class="card-content">
                                    <h5 class="title">Receptionist</h5>
                                    <p></p>
                                    <p class="category"><?php echo "$receptionist_number[0]"; ?></p>
                                </div>
                            </div>
                        </div>
                        <!--<div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="red">
                                    <i class="fa fa-medkit" style="font-size: 28px"></i>
                                </div>
                                <div class="card-content">
                                    <h5 class="title">Pharmacist</h5>
                                    <p></p>
                                    <p class="category">10</p>
                                </div>
                            </div>
                        </div>-->
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="red">
                                    <i class="fa fa-flask" style="font-size: 28px"></i>
                                </div>
                                <div class="card-content">
                                    <h5 class="title">Laboratorist</h5>
                                    <p></p>
                                    <p class="category"><?php echo "$laboratorist_number[0]"; ?></p>
                                </div>
                            </div>
                        </div>
                        <!--<div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="blue">
                                    <i class="fa fa-money" style="font-size: 28px"></i>
                                </div>
                                <div class="card-content">
                                    <h5 class="title">Accountant</h5>
                                    <p></p>
                                    <p class="category"><?php echo "$accountant_number[0]"; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>-->
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
