
<?php
    include '../vendor/autoload.php';
    include "../../connection.php";
    session_start();
    $user = $_SESSION["username"];
  
    $select_std = "SELECT * FROM registration WHERE username='{$user}'";
    $std_query = mysqli_query($conn,$select_std);
    $row = mysqli_fetch_assoc($std_query);
    // Second table
    $data = array();
    $select_sub = "SELECT * FROM sub_reg WHERE Semester='7' AND role= 'Regular' AND username='{$user}'";
    $sql_sub = mysqli_query($conn,$select_sub);
        if(mysqli_num_rows($sql_sub)>0){
            while($row1=mysqli_fetch_assoc($sql_sub)){
                $data .= '<tr>'
                        .'<td>'.$row1["sub_code"].'</td>.'
                        .'<td>'. $row1["sub_name"].'</td></tr>';
            }
        }
    $mpdf= new \Mpdf\Mpdf();
$html='
<!-- Student DASHBOARD -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Kajal Bormon">
    <!--Fontawesome CDN-->
    <link rel="stylesheet" href="../css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="../css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
    <style>

    /* 1st semester */
    .forms {
      width: 80%;
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
      text-align: left;
      padding: 8px;
      color: black;
 
      text-transform: capitalize;
      text-shadow: rgb(240, 240, 12);
      font-size: 20px;
    }
    table td{
      padding: 5px;
      font-size: 14px;
      color: black;
 
    }
 
    body {
      background-color: whitesmoke;
    }
    .info_center{
        position: absoulute;
    }
    .info_ad_center{
        text-align: center;
        line-height: 0.2;    
    }
    .info_ad_center img{
        left:10%;
    }

    .profile_img img{
        position: relative;
        top: 10%;
        right: 14%;
    }
    </style>
</head>

<body>
    <!-- Admit Card -->

    <div class="">
        <form class="" method="POST" action="">
            <div class="info_center">
                <div class="info_ad_center">
                    <h2>Jatiya Kabi Kazi Nazrul Islam University</h1>
                    <h4>Trishal,Mymensing-2200</h4>
                    <h4>Admit Card</h4>
                </div>
                <div class="profile_img">
                    <img heigh="110" width="90" src="../../images/'.$row["username"].'/'.$row["image"].'" alt="">
                </div>
            </div>
            <div>
    
                <table width="100%">
                    <tr>
                        <td>Exam Name: Bsc Engineering</td>
                    </tr>
                    <tr>
                        <td>Student Name: '.$row["fname"].' '.$row["lname"].'</td>
                        <td>Registration No.: '.$row["registration"].'</td>
                        <td>Session: '.$row["session"].'</td>
                    </tr>
                    <tr>
                        <td>Roll No.: '.$row["roll"].'</td>
                        <td>Date: '.date("d-m-Y").'</td>
                    </tr>
                </table>    
            </div>
            
            <table width="100%">
                <tr>
                    <th style="font-size:16px;"> Course Code</th>
                    <th style="font-size:16px;"> Subject Name</th>
                </tr>
                '.$data.'                
            </table>
        </form>
        <div class="controler" style="font-size: 14px; font-weight:normal;">
            <div style="margin-left:450px;">-----------------------------</div>
            <div style="margin-left:450px; margin-top: 10px; margin-bottom:10px;">Exam Controler</div>
            <div style="margin-left:420px;">Jatiya Kabi Kazi Nazrul Islam University</div>
        </div>
        <hr class="hr-black" style="background-color: #000000;">
        <div style="font-size: 10px;font-weight:normal;">
            N.B: Students Must be Known to Exam time and signatured at attendence Page
        </div>

    </div>
    <!-- End Admit Card -->  
</body>
</html>';


$mpdf->WriteHTML($html);
$mpdf->output();   
?>