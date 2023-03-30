<?php
    include '../connection.php';
    session_start();
    if(isset($_POST['Login'])){
        $user = $_POST['email'];
        $pass = $_POST['pass'];
        $sq = "SELECT * FROM admin WHERE admin_user='$user' AND password = '$pass'";
        $res = mysqli_query($conn,$sq);
        if(mysqli_num_rows($res)>0){
            while($row = mysqli_fetch_assoc($res)){
                $_SESSION['user'] = $row['admin_user'];
                $_SESSION['password'] = $row['password'];
                header("location:{$hostname}/admin/dashboard.php");
            }
        }else{
            $mgs = "Invalid Username or Password";
        }
    }
    if(isset($_SESSION['user'])){
        header("location:{$hostname}/admin/dashboard.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="64x64" href="../css/images/logo.png">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Acme&family=Bitter:wght@100;300;400&family=Bree+Serif&family=Handlee&family=Numans&family=Odibee+Sans&family=PT+Serif:wght@400;700&family=Patrick+Hand&family=Simonetta:ital,wght@0,400;0,900;1,400&family=Trade+Winds&family=Volkhov:wght@400;700&display=swap" rel="stylesheet"> 
    <!--Fontawesome CDN-->
    <link rel="stylesheet" href="../css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="../css/fontawesome/css/all.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!--Custom CSS -->
    <link rel="stylesheet" type="text/css" href="Admin_Styles.css">
    <title>Admin Login..!</title>
    <style>
        .label1{
            color: red;
        }

    </style>
</head>
<body>
    <nav class="navbar navbar-light" style="background-color: #5a0533;margin-bottom:2%;border-bottom: 2px solid black;box-shadow: 3px 3px 5px black;">
        <a class="mh3 navbar-brand text-white" style="font-family:'Acme';font-size:30px" href="https://jkkniu.edu.bd/">JKKNIU</a>
        <a class="navbar-brand text-white" style="font-family:'Acme';color:'red';" href="../index.php"><i class="fas fa-home" aria-hidden="true"></i> Home</a>
    </nav>
    <h1 class="mh1">ADMIN Login</h1>
    <div class="forms">
        <form class="myform" method="POST">
            <div class="form-group">
                <p class="label1"><?php echo @$mgs; ?></p>
            </div>
            <div class="input-group form-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                </div>
                <input type="email" class="form-group form-control form-control-feedback" autocomplete="off" name="email" placeholder="Admin-Username" />
            </div>
            <div class="input-group form-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                </div>
                <input type="password" class="form-group form-control" name="pass" required placeholder="Password" />
            </div>
            <input name="Login" type="submit" value="Login" class="login_btn">
            <input name="reset" type="reset" value="Reset" class="reset_btn">
        </form>
    </div>
    <!-- Scripting -->
    <script src="../js/jquery_library.js"></script>
    <script src="../js/bootstrap.min.js"></script>

    <?php include '../footer.php'; ?>
</body>
</html>