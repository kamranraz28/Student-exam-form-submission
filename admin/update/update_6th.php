<?php
  include "../../connection.php";
  session_start();
  if(!isset($_SESSION['user'])){
    header("location:{$hostname}/admin/");
  }
?>
<?php
    if(isset($_POST['Update'])){
       $update_id = $_GET['id'];
       $sub_name = mysqli_real_escape_string($conn,$_POST['sname']);
       $sub_code =  mysqli_real_escape_string($conn, $_POST['scode']);
       $credit =  mysqli_real_escape_string($conn, $_POST['credits']);

       $final_update = "UPDATE add_s6 set sub_name = '{$sub_name}',sub_code = '{$sub_code}',credit = '{$credit}' where id = {$update_id}";

       $update_run = mysqli_query($conn,$final_update);
       if ($update_run) {
            $err = "<font color='green' align='center'>Subject Updated Successfully...!</font>";
            header('location:http://localhost/exam_form/admin/dashboard.php?page=disp_s6');
        } else {
            $err = "<font color='red' align='center'>Error in Updating Subject.!</font>";
        }
    }



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
    <title>Update/Edit Subject | 1st Semester</title>
    <!--Custom Favicon -->
    <link rel="icon" type="image/png" sizes="64x64" href="../../css/images/logo.png">
    <!--Fontawesome-->
    <link rel="stylesheet" href="../../css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="../../css/fontawesome/css/all.css">
   <!-- Bootstrap core CSS -->
   <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../../css/dashboard.css" rel="stylesheet">
    <link href="../Admin_Styles.css" rel="stylesheet" type="text/css">
   
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
        /* Form New */
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
                <a class="navbar-brand text-white" style="font-family:'Acme';font-size:30px;color: white;" href="#">Welcome, Admin</a>

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
                    <img class="img1" src="../../css/images/logo.png" width="100" height="100" alt="not found" />
                </div>
                <li><a href="../dashboard.php"><i class="fas fa-clipboard"></i>Dashboard</a></li>
                <li>
                <div class="mdbtn">
                        <button class="dropdown-btn"><i class="fas fa-users"></i> See Students<i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-container">
                            <ul>
                                <li class="p-1"><a href="../dashboard.php?page=see_s1">Semester 1 Students</a></li>
                                <li class="p-1"><a href="../dashboard.php?page=see_s2">Semester 2 Students</a></li>
                                <li class="p-1"><a href="../dashboard.php?page=see_s3">Semester 3 Students</a></li>
                                <li class="p-1"><a href="../dashboard.php?page=see_s4">Semester 4 Students</a></li>
                                <li class="p-1"><a href="../dashboard.php?page=see_s5">Semester 5 Students</a></li>
                                <li class="p-1"><a href="../dashboard.php?page=see_s6">Semester 6 Students</a></li>
                                <li class="p-1"><a href="../dashboard.php?page=see_s7">Semester 7 Students</a></li>
                                <li class="p-1"><a href="../dashboard.php?page=see_s8">Semester 8 Students</a></li>
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
                                <li class="p-1"><a href="../dashboard.php?page=add_s1">Semester 1</a></li>
                                <li class="p-1"><a href="../dashboard.php?page=add_s2">Semester 2</a></li>
                                <li class="p-1"><a href="../dashboard.php?page=add_s3">Semester 3</a></li>
                                <li class="p-1"><a href="../dashboard.php?page=add_s4">Semester 4</a></li>
                                <li class="p-1"><a href="../dashboard.php?page=add_s5">Semester 5</a></li>
                                <li class="p-1"><a href="../dashboard.php?page=add_s6">Semester 6</a></li>
                                <li class="p-1"><a href="../dashboard.php?page=add_s7">Semester 7</a></li>
                                <li class="p-1"><a href="../dashboard.php?page=add_s8">Semester 8</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="col-sm-12 col-sm-offset-12 col-md-10 col-md-offset-2 main">
        <!-- Udating 1st year 1st semester -->
        <h1 class="mh1" style="color:black;">Update/Edit 1st Semester Subject</h1>
        <div class="forms" style="width: 60%;">
            <?php
                $update_id = $_GET['id'];
                $fetch_select = "SELECT * FROM add_s6 WHERE id='$update_id'";
                $fetch_query = mysqli_query($conn,$fetch_select);
                if(mysqli_num_rows($fetch_query)>0){
                    while($row=mysqli_fetch_assoc($fetch_query)){
            
            ?>
            <form class="myform" method="post" style="width: 100%;">
                <p style="font-family:'Bitter';font-size:20px;text-align:center;"><?php echo @$err; ?></p>
                <table width="100%">
                    <tr>
                        <td>
                            <label class="label required">Subject Name</label>
                        </td>

                        <td>
                            :
                        </td>

                        <td class="td1">
                            <input type="text" name="sname" autocomplete="off" placeholder="Subject Name" class="required" value="<?php echo $row['sub_name'] ?>" required />
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label class="label required">Subject Code</label>
                        </td>

                        <td>
                            :
                        </td>

                        <td class="td1">
                            <input type="text" name="scode" autocomplete="off" placeholder="Subject Code" value="<?php echo $row['sub_code'] ?>" required />
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label class="label required">Credits</label>
                        </td>
                        <td>
                            :
                        </td>
                        <td class="td1">
                            <select name="credits" class="select1" placeholder="" required value="<?php echo $row['credit'] ?>">
                                <option name="s1" value="1.5"> 1.5 </option>
                                <option name="s2" value="3"> 3 </option>
                                <option name="s3" value="4.5"> 4.5 </option>
                            </select>
                        </td>
                    </tr>

                </table>
                <input type="submit" value="Update Subject" name="Update" class="login_btn" value="Submit" />
            </form>
            <?php
                 }
                }
            ?>
        </div>


        <!-- End -->


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
        <script src="../../js/jquery_library.js"></script>    
        <script src="../../js/bootstrap.min.js"></script>
</body>
</html>