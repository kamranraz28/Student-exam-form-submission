<?php
    include '../connection.php';
    if(isset($_POST['Update'])){
        $fname = mysqli_real_escape_string($conn,$_POST['fname']);
        $lname = mysqli_real_escape_string($conn,$_POST['lname']);
        $usn = $_SESSION['username'];
        $mail = mysqli_real_escape_string($conn,$_POST['mail']);
        $phone = mysqli_real_escape_string($conn,$_POST['phone']);
        $dob = mysqli_real_escape_string($conn,$_POST['dob']);

        $update = "UPDATE registration SET fname='{$fname}',lname='{$lname}',mail='{$mail}',dob='{$dob}',phone='{$phone}' WHERE username='{$usn}'";
        $sql = mysqli_query($conn, $update);
        if ($sql) {
            $err = "<font color='green' align='center'>Profile Updated Successfully...!</font>";
        } else {
            $err = "<font color='red' align='center'>Error in Updating Profile.!</font>";
        }
    }
    



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Profile</title>
    <link rel="stylesheet" type="text/css" href="update.css">
</head>

<body>
    <div class=" mcontainer">
       
        <form name="register" method="post" class="myform" action="" enctype="multipart/form-data">
            <h1 class="tit">Update Your Profile</h1>
            <?php echo @$err; ?>
            <hr>
            <?php
                $usn = $_SESSION['username'];
                $select = "SELECT * FROM registration WHERE username = '{$usn}'";
                $result = mysqli_query($conn,$select);
                if(mysqli_num_rows($result)>0){
                    while($row=mysqli_fetch_assoc($result)){
            
            ?>
            <table width="100%">
                <tr>
                    <td>
                        <label class="required">First Name</label>
                    </td>

                    <td>

                    </td>

                    <td class="td1">
                        <input type="text" autocomplete="off" name="fname" placeholder="First Name" class="required" value="<?php echo $row['fname']; ?>" />
                    </td>
                </tr>

                <tr>
                    <td>
                        <label class="required">Last Name</label>
                    </td>

                    <td>

                    </td>

                    <td class="td1">
                        <input type="text" name="lname" autocomplete="off" placeholder="Last Name" required value="<?php echo $row['lname']; ?>" />
                    </td>
                </tr>


                <tr>
                    <td>
                        <label>Birth Date</label>
                    </td>
                    <td>

                    </td>
                    <td class="td1">
                        <input type="date" name="dob" autocomplete="off" placeholder="YYYY/MM/DD" value="<?php echo $row['dob']; ?>" />
                    </td>
                </tr>

                <tr>
                    <td>
                        <label class="required">Username</label>
                    </td>
                    <td>

                    </td>
                    <td class="td1">
                        <input type="text" name="username" autocomplete="off" placeholder="Username" readonly value="<?php echo $row['username']; ?>" />
                    </td>
                </tr>

                <tr>
                    <td>
                        <label class="required">Email</label>
                    </td>
                    <td>

                    </td>
                    <td class="td1">
                        <input type="email" name="mail" autocomplete="off" placeholder="student.cse19@gmail.com" value="<?php echo $row['mail']; ?>" />
                    </td>
                </tr>

                <tr>
                    <td>
                        <label>Phone</label>
                    </td>
                    <td>

                    </td>
                    <td class="td1">
                        <input type="phone" autocomplete="off" name="phone" id="phone" placeholder="01722222222" value="<?php echo $row['phone']; ?>" />
                    </td>
                </tr>

                <tr>
                    <td>
                        <label class="required">Department</label>
                    </td>
                    <td>

                    </td>
                    <td class="td1">
                        <input type="text" name="dept" readonly value="<?php echo $row['dept']; ?>" />
                    </td>
                </tr>

                <!-- <tr>
                    <td>
                        <label class="required">Semester</label>
                    </td>
                    <td>

                    </td>
                    <td class="td1">
                        <input type="text" name="sem" value="<?php echo $row['sem']; ?>" readonly />
                    </td>
                </tr> -->
                <?php
                }
            }       
        ?>
                <tr>
                    <td>
                        <input type="submit" name="Update" class="login_btn" value="Update" />
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

</body>

</html>