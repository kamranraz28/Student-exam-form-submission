<?php
    include "connection.php";
    if(isset($_POST['Register'])){

        $file_name = $_FILES['img']['name'];
        $file_tmp = $_FILES['img']['tmp_name'];

        $fname = mysqli_real_escape_string($conn,$_POST['fname']);
        $lname = mysqli_real_escape_string($conn,$_POST['lname']);
        $batch = mysqli_real_escape_string($conn,$_POST['batch']);
        $session = mysqli_real_escape_string($conn,$_POST['session']);
        $registration = mysqli_real_escape_string($conn,$_POST['registration']);
        $roll = mysqli_real_escape_string($conn,$_POST['roll']);
        $dob = mysqli_real_escape_string($conn,$_POST['dob']);
        $gen = mysqli_real_escape_string($conn,$_POST['gen']);
        $username = mysqli_real_escape_string($conn,$_POST['username']);
        $mail = mysqli_real_escape_string($conn,$_POST['mail']);
        $dept = mysqli_real_escape_string($conn,$_POST['dept']);
        $phone = mysqli_real_escape_string($conn,$_POST['phone']);
        $pass = md5($_POST['psswd2']);

  
        $sql = "SELECT * FROM registration username = '$username'";
        if(mysqli_query($conn,$sql)){
            $err = "<font color='red'>Username Already Exists..!</font>";
        }else{
            $insert = "INSERT INTO registration(id,fname,lname,continue_batch,session,registration,roll,dob,gender,username,image,mail,dept,phone,password) values('','{$fname}','{$lname}','{$batch}','{$session}','{$registration}','{$roll}','{$dob}','{$gen}','{$username}','{$file_name}','{$mail}','{$dept}','{$phone}','{$pass}')";

            $data = mysqli_query($conn,$insert);

            mkdir("images/$username");
            move_uploaded_file($file_tmp,"images/$username/".$file_name);

            if($data){
                $err = "<font color='green'>Registered successfully...!!</font>";
            }
        }
    }
?>
<!-- REGISTRATION FORM -->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register Students</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Kajal Bormon">
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="64x64" href="css/images/logo.png">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Acme&family=Bitter:wght@100;300;400&family=Bree+Serif&family=Handlee&family=Numans&family=Odibee+Sans&family=PT+Serif:wght@400;700&family=Patrick+Hand&family=Simonetta:ital,wght@0,400;0,900;1,400&family=Trade+Winds&family=Volkhov:wght@400;700&display=swap" rel="stylesheet"> 
    <!--Fontawesome CDN-->
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!--Custom styles-->
    <link rel="stylesheet" type="text/css" href="css/reg_styles.css">
    <style type="text/css">
        .mh3:hover {
            color: rgb(197, 191, 191);       
        }
        .mnav ul li a:hover {
            color: whitesmoke;
      
        }
    </style>
        <script>
            function matchPassword(){
                var pass1 = document.getElementById("pass1").value;
                var pass2 = document.getElementById("pass2").value;

           
                if(pass1!==pass2){
                    document.getElementById("mgs").innerHTML="Don't match the password";
                    return false;
                }else{  
                    return true;
                }
                if(pass1<5 && pass2<5){
                    document.getElementById("mgs").innerHTML="Password must be greater than 5";
                    return false;
                }else{
                    return true;
                }
                
            }
        
    </script>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar mnav navbar-expand-lg navbar-dark static-top" style="background-color: #5a0533;padding:20px;border-bottom: 2px solid black;box-shadow: 3px 3px 5px black;">
        <div class="container" style="font-family:'PT Serif';font-size:22px;padding-right:0px;margin-right:0%;">
            <a style="margin-left:0%;padding-left:0px" class="navbar-brand" href="https://jkkniu.edu.bd/">
                <h3 class="mh3">JKKNIU</h3>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#"><i class="fa fa-user-plus" aria-hidden="true"></i> Registration
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="index.php"><i class="fa fa-key" aria-hidden="true"></i> Login</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="admin/index.php"><i class="fa fa-lock" aria-hidden="true"></i> Admin</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="help.php"><i class="fa fa-question" aria-hidden="true"></i> Help</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="about.php"><i class="fa fa-info-circle" aria-hidden="true"></i> About</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!--Form-->
    <div class=" mcontainer">
        <form name="register" method="post" class="myform" action="" enctype="multipart/form-data">
            <h1 class="tit">Registration</h1>
            <?php echo @$err; ?>
            <hr class="mhr" color="black" height="15px" />
            <table width="100%">
                <tr>
                    <td>
                        <label class="label required">First Name</label>
                    </td>

                    <td>

                    </td>

                    <td class="td1">
                        <input type="text" autocomplete="off" name="fname" placeholder="First Name" class="required" required />
                    </td>
                </tr>

                <tr>
                    <td>
                        <label class="label required">Last Name</label>
                    </td>

                    <td>

                    </td>

                    <td class="td1">
                        <input type="text" name="lname" autocomplete="off" placeholder="Last Name" required />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Continue Session</label>
                    </td>
                    <td>

                    </td>
                    <td class="td1">
                        <input type="text" name="batch" autocomplete="off" placeholder="2017-18" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Session</label>
                    </td>
                    <td>

                    </td>
                    <td class="td1">
                        <input type="text" name="session" autocomplete="off" placeholder="2017-18" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Registration No.</label>
                    </td>
                    <td>

                    </td>
                    <td class="td1">
                        <input type="number" name="registration" autocomplete="off" placeholder="6725" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Roll No.</label>
                    </td>
                    <td>

                    </td>
                    <td class="td1">
                        <input type="number" name="roll" autocomplete="off" placeholder="18102014" />
                    </td>
                </tr>

                <tr>
                    <td>
                        <label>Birth Date</label>
                    </td>
                    <td>

                    </td>
                    <td class="td1">
                        <input type="date" name="dob" autocomplete="off" placeholder="YYYY/MM/DD" />
                    </td>
                </tr>

                <tr>
                    <td>
                        <label class="label">Gender</label>
                    </td>

                    <td>

                    </td>

                    <td class="td1">
                        <input type="radio" name="gen" value="M" />&nbsp;&nbsp;&nbsp;&nbsp;Male
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="radio" name="gen" value="F" />&nbsp;&nbsp;&nbsp;&nbsp;Female
                    </td>
                </tr>

                <tr>
                    <td>
                        <label class="label required">Username</label>
                    </td>
                    <td>

                    </td>
                    <td class="td1">
                        <input type="text" name="username" autocomplete="off" placeholder="Username" required />
                    </td>
                </tr>

                <tr>
                    <td>
                        <label class="label required">Email</label>
                    </td>
                    <td>

                    </td>
                    <td class="td1">
                        <input type="email" name="mail" autocomplete="off" placeholder="student.csejkkniu@gmail.com" required />
                    </td>
                </tr>

                <tr>
                    <td>
                        <label class="label required">Department</label>
                    </td>
                    <td>

                    </td>
                    <td class="td1">
                        <select name="dept" class="select1" autocomplete="off" placeholder="computer science" required>
                            <option name="s1" selected> Computer Science & Engineering</option>
                            <!-- <option name="s2"> Environmental Science and Engineering</option>
                            <option name="s3"> Electrical and Electronic Engineering </option>
                            <option name="s4"> Statistics </option> -->
                  
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>
                        <label>Phone</label>
                    </td>
                    <td>

                    </td>
                    <td class="td1">
                        <input type="phone" autocomplete="off" name="phone" id="phone" placeholder="01700112233" />
                    </td>
                </tr>

                <tr>
                    <td>
                        <label class="label required">Upload Your Image</label>

                    </td>
                    <td> </td>
                    <td><input class="form-control" type="file" name="img" id="img" /></td>
                </tr>

                <tr>
                    <td>
                        <label class="label required">Password</label>
                    </td>
                    <td>

                    </td>
                    <td class="td1" class="label required">
                        <input type="password" name="psswd" id="pass1" placeholder="Password" required />
                    </td>
                </tr>

                <tr>
                    <td>
                        <label class="label required">Confirm Password</label>
                    </td>
                    <td>

                    </td>
                    <td class="td1" class="label required">
                        <input type="password" name="psswd2" id="pass2" placeholder="Confirm Password" required />
                        <span id="mgs" style="color: red;"></span>
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="submit" onclick="return matchPassword()" name="Register" class="login_btn" value="Submit" />
                    </td>
                    <td>

                    </td>
                    <td class="td1">
                        <input type="reset" onClick="window.location.href=window.location.href" class="reset_btn" value="Reset" />
                    </td>
                </tr>
            </table>
        </form>
    </div>
    <!-- Scripting -->

    <script src="js/jquery_library.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <?php include 'footer.php'; ?>
</body>
</html>