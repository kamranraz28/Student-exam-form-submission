<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admission Ticket</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="64x64" href="../css/images/logo.png">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Acme&family=Bitter:wght@100;300;400&family=Bree+Serif&family=Handlee&family=Numans&family=Odibee+Sans&family=PT+Serif:wght@400;700&family=Patrick+Hand&family=Simonetta:ital,wght@0,400;0,900;1,400&family=Trade+Winds&family=Volkhov:wght@400;700&display=swap" rel="stylesheet"> 
    <!--Fontawesome CDN-->
    <link rel="stylesheet" href="../css/fontawesome/css/fontawesome.min.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!--Custom styles-->
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<style type="text/css">
    .mh1 {
        font-family: 'Bitter';
        margin-top: 2%;
        margin-bottom: 5%;
        font-size: 40px;
        margin-bottom: auto;
        text-decoration: underline;
        text-decoration-color: rgb(2, 66, 85);
        text-decoration-style: dashed;
        text-align: center;
        text-shadow: 1px 1px 2px rgba(252, 164, 133, 0.6);
    }
    table tr td{
        text-align: center;
    }
</style>

<body>
    <h1 class="mh1">Subjects Registered</h1>
    <div class="container" style="margin-top: 5%;">
        <table id="example" class="table responsive table-striped table-bordered table-hover">
            <thead>
                <tr class="center" style="color:black;font-size:22px;text-align:center;font-family: 'PT serif';">
                    <th>Sl No.</th>
                    <th>Subject Name</th>
                    <th>Subject Code</th>
                    <th>Credits</th>
                    <th>Semester</th>
                    <th>Role</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include '../connection.php';
                    $user = $_SESSION['username'];
                    $i=1;
                    $select = "SELECT * FROM sub_reg WHERE username='{$user}'";
                    $result = mysqli_query($conn,$select) or die("query Failed".mysqli_error());
                    if(mysqli_num_rows($result)>0){
                        while($row=mysqli_fetch_assoc($result)){
                ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $row['sub_name']; ?></td>
                    <td><?php echo $row['sub_code']; ?></td>
                    <td><?php echo $row['credit']; ?></td>
                    <td><?php echo $row['Semester']; ?></td>
                    <td><?php echo $row['role']; ?></td>
                </tr>
                <?php
                            $i++;
                        }
                        
                    }
                    
                ?>
            </tbody>

        </table>
    </div>

</body>
 <!-- Scripting -->
    <script src="../js/jquery_library.js"></script>
    <script src="../js/bootstrap.min.js"></script>

</html>