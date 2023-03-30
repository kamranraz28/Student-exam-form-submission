<?php
    include 'count_subject.php';
    include "../connection.php";
    session_start();
    $user = $_SESSION['username'];
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
    <link rel="stylesheet" type="text/css" href="../css/reg_styles.css">
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
        /* Improve CSS */
        .mh3:hover {
            color: rgb(197, 191, 191);       
        }
        .mnav ul li a:hover {
            color: whitesmoke;
        }
        .mcontainer{
            width: 45%;
        }
        button{
            width: 100%;
            margin-top: 8%;
            margin-bottom: 4%;
            font-family: 'Bree Serif';
            cursor: pointer;
            box-sizing: border-box;
            border: 2px solid black;
            background-color: ;
            padding-left: 5px;
            height: 50px;
            font-size: 24px;
            color: black;
            border-radius: 5px;
        }
        input[type="submit"] {
            width: 100%;
            margin-top: 8%;
            margin-bottom: 4%;
            font-family: 'Bree Serif';
            cursor: pointer;
            box-sizing: border-box;
            border: 2px solid black;
            background-color: ;
            padding-left: 5px;
            height: 50px;
            font-size: 24px;
            color: black;
            border-radius: 5px;
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
        <div class="mcontainer">
       
       <form name="register" method="post" class="myform" action="improve2.php" enctype="multipart/form-data">
           <h1 class="tit">Register Semester</h1>
           <span><?php echo $_SESSION['status_mgs']; unset($_SESSION['status_mgs']); ?></span>
         
           <table width="100%">
               <td class="td1">
                       <select name="sem" autocomplete="off" class="select12" placeholder="" required>
                           <option name="s1" value="1"> 1 </option>
                           <option name="s2" value="2"> 2 </option>
                           <option name="s3" value="3"> 3 </option>
                           <option name="s4" value="4"> 4 </option>
                           <option name="s5" value="5"> 5 </option>
                           <option name="s6" value="6"> 6 </option>
                           <option name="s7" value="7"> 7 </option>
                           <option name="s8" value="8"> 8 </option>
                       </select>
                   </td> 
               <tr>
                   <td>
                       <input type="submit" name="improve" class="login_btn" value="improve/Fail" />
                   </td>
                   <td>
                   </td>
               </tr>
           </table>
       </form>  
   </div>
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