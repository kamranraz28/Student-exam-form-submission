<?php
    include 'connection.php';
    session_start();
    if(isset($_POST['Login'])){
        $username = mysqli_real_escape_string($conn,$_POST['username']);
        $pass = md5($_POST['Password']);

        if($username == "" || $pass == ""){
            $err = "<font color='red' align='center'>Enter a Valid Username & Password</font>";
        }else{
            $sql = "SELECT * FROM registration WHERE username = '{$username}' AND password = '{$pass}'";
            $query = mysqli_query($conn,$sql);
            $result = mysqli_num_rows($query);
            if($result){
                $_SESSION['username'] = $_POST['username'];
                header("location:http://localhost/exam_form/user/dashboard.php");
            }else{
                $err = "<font color='red'>Invalid login details</font>" . mysqli_error($conn);
            }
        }
    }
    if(isset($_SESSION['username'])){
        header("location: http://localhost/exam_form/user/dashboard.php");
    }
   

?>

<!-- HOME | LOGIIN PAGE -->
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="64x64" href="css/images/logo.png">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Acme&family=Bitter:wght@100;300;400&family=Bree+Serif&family=Handlee&family=Numans&family=Odibee+Sans&family=PT+Serif:wght@400;700&family=Patrick+Hand&family=Simonetta:ital,wght@0,400;0,900;1,400&family=Trade+Winds&family=Volkhov:wght@400;700&display=swap" rel="stylesheet"> 
    <!--Fontawesome CDN-->
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!--Custom styles-->
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    
    <style type=text/css> 
        .container{
            top:0;
            margin-top:0; 
            padding-top:0; 
        } 
        input{ 
            caret-color:red; 
        }
    </style> 
</head> 
<body>
    <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark static-top" style="background-color: #5a0533; border-bottom:1px solid black;box-shadow: 3px 3px 5px;">
            <div class="container" style = "font-family:'PT Serif';font-size:22px;padding-right:0px;margin-right:0%;">
                <a class="navbar-brand" href="https://jkkniu.edu.bd/">
                    <h3 style = "font-family:'Bitter';" ><img src="css/images/logo.png" width="70" style = "border-radius:50%;border:1px black;" height="70" alt="JKKNIU"/> <span class = "mh3">JKKNIU</span><br /><p style = "margin-left:6%;font-size:12px;margin-top:0;position:absolute;top:60px">Trishal,Mymensingh<br />Estd. 2006</p></h3>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse mnav" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#"><i class="fa fa-key" aria-hidden="true" ></i> Login
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                
                        <li class="nav-item">
                            <a class="nav-link" href="register.php"><i class="fa fa-user-plus" aria-hidden="true"></i> Register</a>
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
                
        <div class="container">
	        <div class="d-flex justify-content-center h-100">
		        <div class="card mcon" id = "card">
			        <div class="card-header" id = "card-header">
				        <h3 align="center" style = "color:#000">Sign - In</h3>
			        </div>
			        <div class="card-body">
				        <form action="" method="post">
                            <p align='center'><b><?php echo @$err; ?></b></p> 
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                </div>
                                <input type="text" autocapitalize="characters" autocomplete="off" class="form-control a" name="username" placeholder="Username">
                            </div> 
                        
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                                </div>
                                <input type="password" class="form-control" name="Password" placeholder="Password">
                            </div>
                            <div class="row justify-content-center">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <input type="submit" value="Login" style = "color:white" name="Login" class="login_btn">
                                    </div>
                                </div>
                            </div>
        				</form>
			        </div>
		            <div class="card-footer" id = "card-footer">
				        <div class="d-flex justify-content-center">
					        <a href="register.php" style="text-decoration:none; color:black;">New User.? Register Here</a>
				        </div>
			        </div>
		        </div>
	        </div>
        </div>
        <!-- Scripting -->
        <script src="js/jquery_library.js"></script>
        <script src="js/bootstrap.min.js"></script>

        <?php include 'footer.php'; ?>
    </body>
</html>