
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Users</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Users</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Acme&family=Bitter:wght@100;300;400&family=Bree+Serif&family=Handlee&family=Numans&family=Odibee+Sans&family=PT+Serif:wght@400;700&family=Patrick+Hand&family=Simonetta:ital,wght@0,400;0,900;1,400&family=Trade+Winds&family=Volkhov:wght@400;700&display=swap" rel="stylesheet"> 
    <!--Fontawesome CDN-->
    <link rel="stylesheet" href="../css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="../css/fontawesome/css/all.css"> 
    <style type="text/css">
        .mcon {
            margin-top: auto;
            padding: 0;
        }
        .mtab {
            margin-top: auto;
            margin-left: auto;
            padding: 0;
            font-family: 'Acme';
        }

        .mybtn {
            background-color: #999999;
            border: 1px solid black;
            color: black;
        }

        .mybtn:hover {
            width: 20%;
            background-color: #888;
            cursor: pointer;
            border: 3px solid black;
            color: black;
        }

        table th {
            text-align: center;
        }
        .mtab th,td{
            padding: 10px 20px;
            border:2px solid black;
            text-align: center;
        }
    </style>
</head>

<body>
<img id="head" width="160px" height="180px" style="font-family:'PT Serif';" left:10 align='left' src="../css/images/logo.png">
<br /><br /><br /><br /><br /><br /><br>
<h2 style="color:#ff0000;font-family:'Acme';" class="page-header">3rd Year 2nd Semester Subjects</h2>

<div class="col-lg-10 mcon text-center">
    <table id="mytab1" width="100%" class="mtab table table-bordered table-hover table-responsive">
    <tr align='center' style="background-color:rgba(128,0,128,0.3);color:black;font-size:25px;font-family: 'PT serif';" class="table-info">
        <th>SL.No</th>
        <th>Subject Name</th>
        <th>Subject Code</th>
        <th>Credits</th>
        <th>Update</th>
        <th>Delete</th>
    </tr>
    <?php
        include "../connection.php";
        $sql = "SELECT * FROM add_s6";
        $res = mysqli_query($conn,$sql);
        $i=1;
        if(mysqli_num_rows($res)>0){
            while($row = mysqli_fetch_assoc($res)){           
    ?>
    <tr style='color:black;border-bottom:2px solid black;font-size:18px;border-right:2px solid black;border-top:2px solid black;border-left:2px solid black;'>
        <td style='border:2px solid black' align = 'center'><?php echo $i; ?></td>
        <td style='border:2px solid black' align = 'center'><?php echo $row['sub_name']; ?></td>
        <td style='border:2px solid black' align = 'center'><?php echo $row['sub_code']; ?></td>
        <td style='border:2px solid black' align = 'center'><?php echo $row['credit']; ?></td>
        <td align='center' style='border:2px solid black'> <a href="update/update_6th.php?id=<?php echo $row['id']; ?>" style='color:green'><i class="fas fa-pencil-alt"></i></a> </td>
        <td align='center' style='border:2px solid black'> <a href="javascript:DeleteUser('<?php echo $row['id']; ?>')" style='color:red'><i class="fas fa-trash"></i></a> </td>
    </tr>
    <?php
          $i++;  
            }
        } 
    ?>
    </table>
</div>
        <!-- Delete Subject Code -->
        <script>
            function DeleteUser(id){
                if(confirm("You are Sure..? You want to delete this subjecet..??")){
                    window.location.href="delete/delete_6th.php?id=" +id;
                }
            }
        </script>


</body>
</html>