<?php
    include "../connection.php";
    session_start();
    $user = $_SESSION['username'];
    if(!isset($_SESSION['username'])){
        header("location:http://localhost/exam_form/");
    }
    $query = "SELECT * FROM registration WHERE username = '{$user}'";
    $fetch_query = mysqli_query($conn,$query) or die("Query Failed...".myslqli_error());
    if(mysqli_num_rows($fetch_query)>0){
        while($row=mysqli_fetch_assoc($fetch_query)){

?>
<!-- Student DASHBOARD -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Kajal Bormon">
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="64x64" href="../css/images/logo.png">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Acme&family=Bitter:wght@100;300;400&family=Bree+Serif&family=Handlee&family=Numans&family=Odibee+Sans&family=PT+Serif:wght@400;700&family=Patrick+Hand&family=Simonetta:ital,wght@0,400;0,900;1,400&family=Trade+Winds&family=Volkhov:wght@400;700&display=swap" rel="stylesheet"> 
    <!--Fontawesome CDN-->
    <link rel="stylesheet" href="../css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="../css//fontawesome/css/all.min.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!--Custom styles-->
    <link rel="stylesheet" href="../css/dashboard.css">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <style>
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
            font-family: 'Acme';
            font-size: 18px;
            margin-bottom: 5%;
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
            border-radius: 50%;
            justify-content: center;
            margin-left: 15%;
            margin-top: auto;
            margin-bottom: 5%;
            border: 1px dashed #000000;
            background-color: white;
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
            font-size: 18px;
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
    /* 1st semester */
    .mylink a:hover {
      text-decoration: none;
      color: white;
    }
    .forms {
      width: fit-content;
      height: fit-content;
      margin-left: auto;
      margin-right: auto;
      display: block;
      box-shadow: -2px -2px 9px rgba(0, 0, 0, 0.5),
        5px 5px 9px rgba(0, 0, 0, 0.5);
      padding: 0;
      border: 1px solid silver;
      border-radius: 3px;
      background-color: rgb(82, 66, 85, 0.2);
      justify-content: flex-start;
    }

    .myform {
      padding: 20px;
      border-radius: 8px;

    }
    table th {
      text-align: center;
      padding: 8px;
      color: rgb(4, 71, 32);
      font-family: 'Bitter';
      text-transform: capitalize;
      text-shadow: rgb(240, 240, 12);
      font-size: 26px;
    }
    table td{
      text-align: center;
      padding: 5px;
      font-size: 22px;
      color: black;
      font-family: 'Bitter';
    }
    .myh1 {
      text-align: center;
      font-size: 30px;
      text-decoration: none;
      padding-bottom: 15px;
      text-shadow: rgba(0, 0, 0, 0.1);
      font-family: 'PT Serif';
      font-weight: bold;
    }
    .geekmark {
      height: 20px;
      width: 20px;
      background-color: green;
    }
    body {
      background-color: whitesmoke;
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
    <nav class="navbar navbar-inverse navbar-fixed-top" style="position:fixed;top:0;left:0;padding:8px;border:none;background-color:#5a0533;border-bottom:1px solid black;box-shadow: 3px 3px 5px black;">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <a class="navbar-brand text-white" style="font-family:'Acme';font-size:30px;color: white;padding-right: 750px; text-transform:capitalize;" href="#">Welcome, <?php echo $row['fname'].' '.$row['lname']; ?> </a>

            </div>
            <ul class="nav navbar-nav navbar-right collapsed text-white" id="navbar">
                <li>
                    <a class="mnav11" style="color:white;font-family:'Acme';font-size:25px;" href="../logout.php?logout"><i class="fas fa-sign-out-alt" aria-hidden="true"></i> Logout</a>
                </li>
            </ul>
    </nav>
    <div class="wrapper">
        <div class="sidebar col -l2 -s4">
            <ul>
                <div>
                    <img src="../images/<?php echo $user; ?>/<?php echo $row['image']; ?>" width="100" height="100" alt="not found" />
                </div>
                <?php
        }
    }
                ?>
                <li><a href="dashboard.php"><i class="fas fa-clipboard"></i>Dashboard</a></li>
                <li><a href="dashboard.php?page=update_profile"><i class="fas fa-user-edit"></i> Update Profile</a></li>
                <li><a href="registered_exm.php"><i class="fas fa-pen"></i>Register Exam</a></li>
                <li><a href="dashboard.php?page=subjects_reg"><i class="far fa-file"></i> Registered Subjects</a></li>
            </ul>
        </div>
        <div class="col-sm-12 col-sm-offset-12 col-md-10 col-md-offset-2 main">
        <?php
            $select = "SELECT * FROM sub_reg WHERE Semester='7' AND role='Regular' AND username='{$user}'";
            $sql = mysqli_query($conn,$select);
            $i=1;
            $num_rows = mysqli_num_rows($sql);
            if(!$num_rows){
            echo "<div style='color: red; font-weight: bold; font-size: 30px;'>You have not Registered for 7th Semester...!!</div>";
            }else{   
        ?>
            <h1 class="myh1">4th Year 1st Semester Computer Science & Engineering Subjects</h1>
            <div class="forms">
                <form class="myform" method="POST" action="">
                <table width="100%">
                    <tr>
                    <th>SI NO.</th>
                    <th> Subject name</th>
                    <th> Subject Code</th>
                    <th> Credits </th>
                    </tr>
                    <?php while ($row = mysqli_fetch_array($sql)){ ?>
                    <tr style='color:black;font-size:18px;'>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $row['sub_name'];?></td>
                        <td align = 'center'><?php echo $row['sub_code'];?> </td>
                        <td align = 'center'><?php echo $row['credit']; ?></td>
                    </tr>
                    <?php 
                    $i++;
                    } 
                    ?>
                </table>
                </form>
                <?php } ?>
            </div>
            <br>
            <div class="admit_btn" style="margin-left: 66%;">
                <a href="download/download_7th.php"><button class="btn btn-danger"><i class="fas fa-download"></i> Admit Download</button></a>
            </div>

   
            <!-- container-->
              <!-- Scripting -->
      <script src="../js/jquery_library.js"></script>
      <script src="../js/bootstrap.min.js"></script>
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