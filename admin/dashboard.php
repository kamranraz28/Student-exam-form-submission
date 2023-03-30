<?php
  include "../connection.php";
  session_start();
  if(!isset($_SESSION['user'])){
    header("location:{$hostname}/admin/");
  }
  include "count.php";
?>

<!-- Dashboard.php -->
<!-- ADMIN DASHBOARD -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Admin Dashboard.!</title>
    <!--Custom Favicon -->
    <link rel="icon" type="image/png" sizes="64x64" href="../css/images/logo.png">
    <!--Fontawesome-->
    <link rel="stylesheet" href="../css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="../css/fontawesome/css/all.css">
   <!-- Bootstrap core CSS -->
   <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../css/dashboard.css" rel="stylesheet">
   
    <style>
        .card {
            background-color: #a3f7bf;
            border: 4px solid black;
        }

        .card-title {
            color: #4a47a3;
        }

        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 220, 2);
            transition: 0.7s;
        }

        .label1 {
            color: black;
            font-weight: bold;
            width: 100%;
            color: darkred;
            font-size: 35px;
            font-family: 'Della Respira';
        }

        .hov a:hover {
            color: red;
        }

        .card:hover {
            box-shadow: 7px 8px 16px 5px rgba(0, 0, 33, 2);
        }

        body {
            background-color: #f3f5f9;
        }

        .wrapper {
            display: flex;
            margin-top: 3%;
            position: relative;
        }

        .wrapper .sidebar {
            width: 200px;
            height: 100%;
            background: #5a0533;
            padding: 30px 0px;
            border: 2px solid black;
            position: fixed;
            overflow-x: scroll;
            margin-bottom: 5%;
            font-family: 'Acme';
            font-size: 18px;
        }
        .wrapper .sidebar h2 {
            color: #fff;
            text-transform: uppercase;
            text-align: center;
            margin-bottom: 30px;
        }
        .wrapper .sidebar ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }
        .wrapper .sidebar ul li {
            padding: 15px;
            border-bottom: 1px solid #bdb8d7;
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
            border-top: 1px solid rgba(255, 255, 255, 0.05);
        }

        .wrapper .sidebar img {
            justify-content: center;
            margin-left: 15%;
            margin-top: auto;
            margin-bottom: 5%;
            border: 1px dashed #000000;
        }
        .wrapper .sidebar ul li a {
            color: #fff;
            text-decoration: none;
            display: block;
        }
        .wrapper .sidebar ul li a .fas {
            width: 25px;
        }

        .wrapper .sidebar ul li:hover {
            background-color: #ad1457;
            text-decoration: none;
        }

        .wrapper .sidebar ul li:hover a {
            color: #fff;
        }
        .wrapper .main_content {
            width: 100%;
            margin-left: 2%;
            margin-bottom: 3%;
        }

        .wrapper .main_content .header {
            padding: 20px;
            font-size: 25px;
            background: #5a0533;
            border-bottom: 1px solid #e0e4e8;
            color: #fff;
            border: 2px solid black;
        }
        .wrapper .main_content .info {
            margin: 20px;
            color: #717171;
            line-height: 25px;
        }

        .wrapper .main_content .info div {
            margin-bottom: 20px;
        }
        .wrapper .sidenav {
            height: 100%;
            width: 200px;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #111;
        }
        .dropdown-btn {
            padding-left: 0;
            text-decoration: none;
            color: #fff;
            display: block;
            border: none;
            background: none;
            width: 100%;
            text-align: left;
            cursor: pointer;
            outline: none;
        }
        .dropdown-btn:hover {
            color: #f1f1f1;
        }
        .main {
            margin-left: 200px;
            font-size: 20px;       
            padding: 0px 10px;
        }
        .active {
            background-color: #ad1457;
            color: white;
        }
        .dropdown-container {
            display: none;
            background-color: #5a0533;
            padding-left: 8px;
        }
        .fa-caret-down {
            float: right;
            padding-right: 8px;
            padding-top: auto;
        }
        @media screen and (max-height: 450px) {
            .sidenav {
                padding-top: 15px;
            }

            .sidenav a {
                font-size: 18px;
            }
        }
        .dropdown-btn .fas {
            width: 25px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-inverse navbar-fixed-top" style="padding:8px;border:none;background-color:#5a0533;border-bottom:1px solid black;box-shadow: 3px 3px 5px black;">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <a class="navbar-brand text-white" style="font-family:'Acme';font-size:30px;color: white;" href="">Welcome, Admin</a>

            </div>
            <ul class="nav navbar-nav navbar-right collapsed hide-on-med-and-down text-white hide-on-med" id="navbar">
                <li>
                    <a class="mnav11" style="color:white;font-family:'Acme';font-size:25px;" href="../logout.php"><i class="fas fa-sign-out-alt" aria-hidden="true"></i> Logout</a>
                </li>
            </ul>
    </nav>

    <div class="wrapper">
        <div class="sidebar col -l2 -s6">
            <ul>
                <div>
                    <img class="img1" src="../css/images/logo.png" width="100" height="100" alt="not found" />
                </div>
                <li><a href="dashboard.php"><i class="fas fa-clipboard"></i>Dashboard</a></li>
                <li>
                <div class="mdbtn">
                        <button class="dropdown-btn"><i class="fas fa-users"></i> See Students<i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-container">
                            <ul>
                                <li class="p-1"><a href="dashboard.php?page=see_s1">Semester 1 Students</a></li>
                                <li class="p-1"><a href="dashboard.php?page=see_s2">Semester 2 Students</a></li>
                                <li class="p-1"><a href="dashboard.php?page=see_s3">Semester 3 Students</a></li>
                                <li class="p-1"><a href="dashboard.php?page=see_s4">Semester 4 Students</a></li>
                                <li class="p-1"><a href="dashboard.php?page=see_s5">Semester 5 Students</a></li>
                                <li class="p-1"><a href="dashboard.php?page=see_s6">Semester 6 Students</a></li>
                                <li class="p-1"><a href="dashboard.php?page=see_s7">Semester 7 Students</a></li>
                                <li class="p-1"><a href="dashboard.php?page=see_s8">Semester 8 Students</a></li>
                                <li class="p-1"><a href="dashboard.php?page=improve_student">Improvement Students</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="mdbtn">
                        <button class="dropdown-btn"><i class="fas fa-plus"></i>Add Subject<i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-container">
                            <ul>
                                <li class="p-1"><a href="dashboard.php?page=add_s1">Semester 1</a></li>
                                <li class="p-1"><a href="dashboard.php?page=add_s2">Semester 2</a></li>
                                <li class="p-1"><a href="dashboard.php?page=add_s3">Semester 3</a></li>
                                <li class="p-1"><a href="dashboard.php?page=add_s4">Semester 4</a></li>
                                <li class="p-1"><a href="dashboard.php?page=add_s5">Semester 5</a></li>
                                <li class="p-1"><a href="dashboard.php?page=add_s6">Semester 6</a></li>
                                <li class="p-1"><a href="dashboard.php?page=add_s7">Semester 7</a></li>
                                <li class="p-1"><a href="dashboard.php?page=add_s8">Semester 8</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="col-sm-12 col-sm-offset-12 col-md-10 col-md-offset-2 main">
            <!-- container-->
            <!-- Add Students -->
            <?php 
                @$page = $_GET['page'];
                if($page!=""){
                    if($page=="add_s1"){
                        include "add_sem/add_s1.php";
                    }
                    if($page=="add_s2"){
                        include "add_sem/add_s2.php";
                    }
                    if($page=="add_s3"){
                        include "add_sem/add_s3.php";
                    }
                    if($page=="add_s4"){
                        include "add_sem/add_s4.php";
                    }
                    if($page=="add_s5"){
                        include "add_sem/add_s5.php";
                    }
                    if($page=="add_s6"){
                        include "add_sem/add_s6.php";
                    }
                    if($page=="add_s7"){
                        include "add_sem/add_s7.php";
                    }
                    if($page=="add_s8"){
                        include "add_sem/add_s8.php";
                    }
                    if($page=="students"){
                        include "see_students.php";
                    }
                    // Show Students
                    if($page=="disp_s1"){
                        include "dis_sem/disp_s1.php";
                    }
                    if($page=="disp_s2"){
                        include "dis_sem/disp_s2.php";
                    }
                    if($page=="disp_s3"){
                        include "dis_sem/disp_s3.php";
                    }
                    if($page=="disp_s4"){
                        include "dis_sem/disp_s4.php";
                    }
                    if($page=="disp_s5"){
                        include "dis_sem/disp_s5.php";
                    }
                    if($page=="disp_s6"){
                        include "dis_sem/disp_s6.php";
                    }
                    if($page=="disp_s7"){
                        include "dis_sem/disp_s7.php";
                    }
                    if($page=="disp_s8"){
                        include "dis_sem/disp_s8.php";
                    }
                    if($page=='improve'){
                        include 'dis_sem/improve.php';
                    }
                    //See Students........................
                    if($page=='see_s1'){
                        include 'see_students/see_s1.php';
                    }
                    if($page=='see_s2'){
                        include 'see_students/see_s2.php';
                    }
                    if($page=='see_s3'){
                        include 'see_students/see_s3.php';
                    }
                    if($page=='see_s4'){
                        include 'see_students/see_s4.php';
                    }
                    if($page=='see_s5'){
                        include 'see_students/see_s5.php';
                    }
                    if($page=='see_s6'){
                        include 'see_students/see_s6.php';
                    }
                    if($page=='see_s7'){
                        include 'see_students/see_s7.php';
                    }
                    if($page=='see_s8'){
                        include 'see_students/see_s8.php';
                    }
                    if($page=='improve_student'){
                        include 'see_students/improve_student.php';
                    }
   
                }else{
            
            
            ?>
                <!-- container end-->

                <div class="main_content">
                    <div>
                        <h1 class="page-header label1" style="font-family: 'Bree serif', serif;">Dashboard</h1>
                        <section class="section">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                        <a class="dashboard-stat11" href="dashboard.php?page=disp_s1">
                                            <span class="number"><?php echo "$count_first_sem"; ?></span>
                                            <span class="name">Subjects Listed<br />For 1st sem</span>
                                            <span class="bg-icon"><i class="fa fa-bars"></i></span>
                                        </a>
                                        <!-- /.dashboard-stat -->
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <a class="dashboard-stat" href="dashboard.php?page=disp_s2">
                                            <span class="number"><?php echo "$count_second_sem"; ?></span>
                                            <span class="name">Subjects Listed<br />For 2nd sem</span>
                                            <span class="bg-icon"><i class="fa fa-bars"></i></span>
                                        </a>
                                        <!-- /.dashboard-stat -->
                                    </div>
                                    <!-- /.col-lg-3 col-md-3 col-sm-6 col-xs-12 -->

                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <a class="dashboard-stat11" href="dashboard.php?page=disp_s3">
                                            <span class="number"><?php echo "$count_third_sem"; ?></span>
                                            <span class="name">Subjects Listed<br />For 3rd sem</span>
                                            <span class="bg-icon"><i class="fa fa-bars"></i></span>
                                        </a>
                                        <!-- /.dashboard-stat -->
                                    </div>
                                    <!-- /.col-lg-3 col-md-3 col-sm-6 col-xs-12 -->

                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <a class="dashboard-stat" href="dashboard.php?page=disp_s4">
                                            <span class="number"><?php echo "$count_fourth_sem"; ?></span>
                                            <span class="name">Subjects Listed<br />For 4th sem</span>
                                            <span class="bg-icon"><i class="fa fa-bars"></i></span>
                                        </a>
                                        <!-- /.dashboard-stat -->
                                    </div>
                                    <!-- /.col-lg-3 col-md-3 col-sm-6 col-xs-12 -->



                                </div>
                                <!-- /.row -->
                                <div class="row" style="margin-top:3%;">

                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <a class="dashboard-stat" href="dashboard.php?page=disp_s5">
                                            <span class="number"><?php echo "$count_fifth_sem"; ?></span>
                                            <span class="name">Subjects Listed<br />For 5th sem</span>
                                            <span class="bg-icon"><i class="fa fa-bars"></i></span>
                                        </a>
                                        <!-- /.dashboard-stat -->
                                    </div>


                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <a class="dashboard-stat11" href="dashboard.php?page=disp_s6">
                                            <span class="number"><?php echo "$count_six_sem"; ?></span>
                                            <span class="name">Subjects Listed<br />For 6th sem</span>
                                            <span class="bg-icon"><i class="fa fa-bars"></i></span>
                                        </a>
                                        <!-- /.dashboard-stat -->
                                    </div>


                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 ">
                                        <a class="dashboard-stat" href="dashboard.php?page=disp_s7">
                                            <span class="number"><?php echo "$count_seven_sem"; ?></span>
                                            <span class="name">Subjects Listed<br />For 7th sem</span>
                                            <span class="bg-icon"><i class="fa fa-bars"></i></span>
                                        </a>
                                        <!-- /.dashboard-stat -->
                                    </div>


                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <a class="dashboard-stat11" href="dashboard.php?page=disp_s8">
                                            <span class="number"><?php echo "$count_eight_sem"; ?></span>
                                            <span class="name">Subjects Listed<br />For 8th sem</span>
                                            <span class="bg-icon"><i class="fa fa-bars"></i></span>
                                        </a>
                                        <!-- /.dashboard-stat -->
                                    </div>
                                </div>

                                <!-- /.container-fluid -->

                                <div class="row" style="margin-top:3%;">

                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <a class="dashboard-stat1" href="dashboard.php?page=improve">
                                            <span class="number counter"><?php echo "$count_improve"; ?></span>
                                            <span class="name">Students Registered<br />For Improve Exam</span>
                                            <span class="bg-icon"><i class="fa fa-users"></i></span>
                                        </a>
                                        <!-- /.dashboard-stat -->
                                    </div>                      
                                </div>
                            </div>
                    </div>
                </div>
                <?php } ?>
                <script>

                    var dropdown = document.getElementsByClassName("dropdown-btn");
                    var i;

                    for (i = 0; i < dropdown.length; i++) {
                        dropdown[i].addEventListener("click", function() {
                            this.classList.toggle("active");
                            var dropdownContent = this.nextElementSibling;
                            if (dropdownContent.style.display === "block") {
                                dropdownContent.style.display = "none";
                            } else {
                                dropdownContent.style.display = "block";
                            }
                        });
                    }
                </script>      
</body>
</html>