<?php
    include "../connection.php";
    if(isset($_POST['Add'])){
        $sub_name = mysqli_real_escape_string($conn,$_POST['sname']);
        $sub_code = mysqli_real_escape_string($conn,$_POST['scode']);
        $sub_cre = mysqli_real_escape_string($conn,$_POST['credit']);

        $insert_query = "INSERT INTO add_s3(id,sub_name,sub_code,credit) VALUES('','{$sub_name}','{$sub_code}',{$sub_cre})";

        if(mysqli_query($conn,$insert_query)){
            $err = "<font color='green'>Subject Added Successfully..!</font>"; 
        }else{
            $err = "<font color='red'>Error In Adding Subjects</fonts>";
        }

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
    <!--Custom CSS -->
    <link rel="stylesheet" type="text/css" href="Admin_Styles.css">
    <title>Add Subject | 3rd Sem</title>
</head>

<body>
    <h1 class="mh1" style="color:black;">Add Subject To 3rd Semester</h1>
    <div class="forms" style="width: 60%;"> 
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
                        <input type="text" autocomplete="off" name="sname" placeholder="Subject Name" class="required" required />
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
                        <input type="text" autocomplete="off" name="scode" placeholder="Subject Code" required />
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
                        <select name="credit" class="select1" placeholder="" required>
                            <option name="s0" disabled> Select Sub Credit</option>
                            <option name="s1"> 1.5 </option>
                            <option name="s2"> 3 </option>
                            <option name="s3"> 4.5 </option>
                        </select>
                    </td>
                </tr>

            </table>
            <input type="submit" value="Add Subject" name="Add" class="login_btn" value="Submit" />
            <input type="reset" class="reset_btn" onClick="window.location.href=window.location.href" value="Reset" />
        </form>
    </div>
</body>
</html>