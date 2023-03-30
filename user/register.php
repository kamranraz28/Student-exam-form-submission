<?php
    include '../connection.php';
    // Regular Registration For Examination
    if(isset($_POST['submit'])){
        $sem = $_POST['sem'];
        $user = $_SESSION['username'];
        //1st Semester
        if($sem=='1'){
            $select1 = "SELECT * FROM sem_reg WHERE semester='1' AND username='{$user}'";
            $search_query = mysqli_query($conn,$select1);
            if(mysqli_num_rows($search_query)>0){
                $err = "<font color='red'>Semester Already Registered...!!</font>"; 
            }else{
                $sql1="INSERT INTO sem_reg(username,semester) VALUES('{$user}',{$sem});";
                $query = mysqli_query($conn,$sql1);
                $select = "SELECT * FROM add_s1";
                $res = mysqli_query($conn,$select) or die("query Failed..!".mysqli_error());
                if(mysqli_num_rows($res)>0){
                    while($row = mysqli_fetch_assoc($res)){
                        $sub_name = $row['sub_name'];
                        $sub_code = $row['sub_code'];
                        $credit = $row['credit'];
                        $sql = "INSERT INTO sub_reg(username,semester,sub_name,sub_code,credit,role) VALUES('{$user}',{$sem},'{$sub_name}','{$sub_code}',{$credit},'Regular');";                                              
                        $query1 = mysqli_query($conn,$sql);
                        if($query && $query1){
                            $err = "<font color='green'>Semester Registered successfully...!!</font>"; 
                        }else{
                            $err = "<font color='red'>Semester Registered Unsuccessfully...!!</font>"; 
                        }
            
                    }
                }
            }       
        }
        // 2nd semester

        if($sem=='2'){
            $select1 = "SELECT * FROM sem_reg WHERE semester='2' AND username='{$user}'";
            $search_query = mysqli_query($conn,$select1);
            if(mysqli_num_rows($search_query)>0){
                $err = "<font color='red'>Semester Already Registered...!!</font>"; 
            }else{
                $sql1="INSERT INTO sem_reg(username,semester) VALUES('{$user}',{$sem});";
                $query = mysqli_query($conn,$sql1);
                $select = "SELECT * FROM add_s2";
                $res = mysqli_query($conn,$select) or die("query Failed..!".mysqli_error());
                if(mysqli_num_rows($res)>0){
                    while($row = mysqli_fetch_assoc($res)){
                        $sub_name = $row['sub_name'];
                        $sub_code = $row['sub_code'];
                        $credit = $row['credit'];
                        $sql = "INSERT INTO sub_reg(username,semester,sub_name,sub_code,credit,role) VALUES('{$user}',{$sem},'{$sub_name}','{$sub_code}',{$credit},'Regular');";                                              
                        $query1 = mysqli_query($conn,$sql);
                        if($query && $query1){
                            $err = "<font color='green'>Semester Registered successfully...!!</font>"; 
                        }else{
                            $err = "<font color='red'>Semester Registered Unsuccessfully...!!</font>"; 
                        }
            
                    }
                }
            }       
        }
        //3rd semester
        if($sem=='3'){
            $select1 = "SELECT * FROM sem_reg WHERE semester='3' AND username='{$user}'";
            $search_query = mysqli_query($conn,$select1);
            if(mysqli_num_rows($search_query)>0){
                $err = "<font color='red'>Semester Already Registered...!!</font>"; 
            }else{
                $sql1="INSERT INTO sem_reg(username,semester) VALUES('{$user}',{$sem});";
                $query = mysqli_query($conn,$sql1);
                $select = "SELECT * FROM add_s3";
                $res = mysqli_query($conn,$select) or die("query Failed..!".mysqli_error());
                if(mysqli_num_rows($res)>0){
                    while($row = mysqli_fetch_assoc($res)){
                        $sub_name = $row['sub_name'];
                        $sub_code = $row['sub_code'];
                        $credit = $row['credit'];
                        $sql = "INSERT INTO sub_reg(username,semester,sub_name,sub_code,credit,role) VALUES('{$user}',{$sem},'{$sub_name}','{$sub_code}',{$credit},'Regular');";                                              
                        $query1 = mysqli_query($conn,$sql);
                        if($query && $query1){
                            $err = "<font color='green'>Semester Registered successfully...!!</font>"; 
                        }else{
                            $err = "<font color='red'>Semester Registered Unsuccessfully...!!</font>"; 
                        }
            
                    }
                }
            }       
        }
        //4th semester
        if($sem=='4'){
            $select1 = "SELECT * FROM sem_reg WHERE semester='4' AND username='{$user}'";
            $search_query = mysqli_query($conn,$select1);
            if(mysqli_num_rows($search_query)>0){
                $err = "<font color='red'>Semester Already Registered...!!</font>"; 
            }else{
                $sql1="INSERT INTO sem_reg(username,semester) VALUES('{$user}',{$sem});";
                $query = mysqli_query($conn,$sql1);
                $select = "SELECT * FROM add_s4";
                $res = mysqli_query($conn,$select) or die("query Failed..!".mysqli_error());
                if(mysqli_num_rows($res)>0){
                    while($row = mysqli_fetch_assoc($res)){
                        $sub_name = $row['sub_name'];
                        $sub_code = $row['sub_code'];
                        $credit = $row['credit'];
                        $sql = "INSERT INTO sub_reg(username,semester,sub_name,sub_code,credit,role) VALUES('{$user}',{$sem},'{$sub_name}','{$sub_code}',{$credit},'Regular');";                                              
                        $query1 = mysqli_query($conn,$sql);
                        if($query && $query1){
                            $err = "<font color='green'>Semester Registered successfully...!!</font>"; 
                        }else{
                            $err = "<font color='red'>Semester Registered Unsuccessfully...!!</font>"; 
                        }
            
                    }
                }
            }       
        }
        //5th semester
        if($sem=='5'){
            $select1 = "SELECT * FROM sem_reg WHERE semester='5' AND username='{$user}'";
            $search_query = mysqli_query($conn,$select1);
            if(mysqli_num_rows($search_query)>0){
                $err = "<font color='red'>Semester Already Registered...!!</font>"; 
            }else{
                $sql1="INSERT INTO sem_reg(username,semester) VALUES('{$user}',{$sem});";
                $query = mysqli_query($conn,$sql1);
                $select = "SELECT * FROM add_s5";
                $res = mysqli_query($conn,$select) or die("query Failed..!".mysqli_error());
                if(mysqli_num_rows($res)>0){
                    while($row = mysqli_fetch_assoc($res)){
                        $sub_name = $row['sub_name'];
                        $sub_code = $row['sub_code'];
                        $credit = $row['credit'];
                        $sql = "INSERT INTO sub_reg(username,semester,sub_name,sub_code,credit,role) VALUES('{$user}',{$sem},'{$sub_name}','{$sub_code}',{$credit},'Regular');";                                              
                        $query1 = mysqli_query($conn,$sql);
                        if($query && $query1){
                            $err = "<font color='green'>Semester Registered successfully...!!</font>"; 
                        }else{
                            $err = "<font color='red'>Semester Registered Unsuccessfully...!!</font>"; 
                        }
            
                    }
                }
            }       
        }
        //6th Semester
        if($sem=='6'){
            $select1 = "SELECT * FROM sem_reg WHERE semester='6' AND username='{$user}'";
            $search_query = mysqli_query($conn,$select1);
            if(mysqli_num_rows($search_query)>0){
                $err = "<font color='red'>Semester Already Registered...!!</font>"; 
            }else{
                $sql1="INSERT INTO sem_reg(username,semester) VALUES('{$user}',{$sem});";
                $query = mysqli_query($conn,$sql1);
                $select = "SELECT * FROM add_s6";
                $res = mysqli_query($conn,$select) or die("query Failed..!".mysqli_error());
                if(mysqli_num_rows($res)>0){
                    while($row = mysqli_fetch_assoc($res)){
                        $sub_name = $row['sub_name'];
                        $sub_code = $row['sub_code'];
                        $credit = $row['credit'];
                        $sql = "INSERT INTO sub_reg(username,semester,sub_name,sub_code,credit,role) VALUES('{$user}',{$sem},'{$sub_name}','{$sub_code}',{$credit},'Regular');";                                              
                        $query1 = mysqli_query($conn,$sql);
                        if($query && $query1){
                            $err = "<font color='green'>Semester Registered successfully...!!</font>"; 
                        }else{
                            $err = "<font color='red'>Semester Registered Unsuccessfully...!!</font>"; 
                        }
            
                    }
                }
            }       
        }
        //7th semester
        if($sem=='7'){
            $select1 = "SELECT * FROM sem_reg WHERE semester='7' AND username='{$user}'";
            $search_query = mysqli_query($conn,$select1);
            if(mysqli_num_rows($search_query)>0){
                $err = "<font color='red'>Semester Already Registered...!!</font>"; 
            }else{
                $sql1="INSERT INTO sem_reg(username,semester) VALUES('{$user}',{$sem});";
                $query = mysqli_query($conn,$sql1);
                $select = "SELECT * FROM add_s7";
                $res = mysqli_query($conn,$select) or die("query Failed..!".mysqli_error());
                if(mysqli_num_rows($res)>0){
                    while($row = mysqli_fetch_assoc($res)){
                        $sub_name = $row['sub_name'];
                        $sub_code = $row['sub_code'];
                        $credit = $row['credit'];
                        $sql = "INSERT INTO sub_reg(username,semester,sub_name,sub_code,credit,role) VALUES('{$user}',{$sem},'{$sub_name}','{$sub_code}',{$credit},'Regular');";                                              
                        $query1 = mysqli_query($conn,$sql);
                        if($query && $query1){
                            $err = "<font color='green'>Semester Registered successfully...!!</font>"; 
                        }else{
                            $err = "<font color='red'>Semester Registered Unsuccessfully...!!</font>"; 
                        }
            
                    }
                }
            }       
        }
        //8th semester
        if($sem=='8'){
            $select1 = "SELECT * FROM sem_reg WHERE semester='8' AND username='{$user}'";
            $search_query = mysqli_query($conn,$select1);
            if(mysqli_num_rows($search_query)>0){
                $err = "<font color='red'>Semester Already Registered...!!</font>"; 
            }else{
                $sql1="INSERT INTO sem_reg(username,semester) VALUES('{$user}',{$sem});";
                $query = mysqli_query($conn,$sql1);
                $select = "SELECT * FROM add_s8";
                $res = mysqli_query($conn,$select) or die("query Failed..!".mysqli_error());
                if(mysqli_num_rows($res)>0){
                    while($row = mysqli_fetch_assoc($res)){
                        $sub_name = $row['sub_name'];
                        $sub_code = $row['sub_code'];
                        $credit = $row['credit'];
                        $sql = "INSERT INTO sub_reg(username,semester,sub_name,sub_code,credit,role) VALUES('{$user}',{$sem},'{$sub_name}','{$sub_code}',{$credit},'Regular');";                                              
                        $query1 = mysqli_query($conn,$sql);
                        if($query && $query1){
                            $err = "<font color='green'>Semester Registered successfully...!!</font>"; 
                        }else{
                            $err = "<font color='red'>Semester Registered Unsuccessfully...!!</font>"; 
                        }
            
                    }
                }
            }       
        }
        
    }


?>
<!-- End Code for register -->
<!-- REGISTRATION FORM -->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register Exam</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Kajal Bormon">
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="64x64" href="../css/images/logo.png">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Acme&family=Bitter:wght@100;300;400&family=Bree+Serif&family=Handlee&family=Numans&family=Odibee+Sans&family=PT+Serif:wght@400;700&family=Patrick+Hand&family=Simonetta:ital,wght@0,400;0,900;1,400&family=Trade+Winds&family=Volkhov:wght@400;700&display=swap" rel="stylesheet"> 
    <!--Fontawesome CDN-->
    <link rel="stylesheet" href="../css/fontawesome/css/fontawesome.min.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!--Custom styles-->
    <link rel="stylesheet" type="text/css" href="../css/reg_styles.css">
    <style type="text/css">
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
    </style>
</head>
<body>

    <!--Form-->
    <div class=" mcontainer">
       
        <form name="register" method="post" class="myform" action="" enctype="multipart/form-data">
            <h1 class="tit">Register Semester</h1>
            <span><?php echo @$err; ?></span>
          
            <table width="100%">
                <td class="td1">
                        <select name="sem" autocomplete="off" class="select12" placeholder="" required>
                            <option name="s1"> 1 </option>
                            <option name="s2"> 2 </option>
                            <option name="s3"> 3 </option>
                            <option name="s4"> 4 </option>
                            <option name="s5"> 5 </option>
                            <option name="s6"> 6 </option>
                            <option name="s7"> 7 </option>
                            <option name="s8"> 8 </option>
                        </select>
                    </td> 
                <tr>
                    <td>
                        <input type="submit" name="submit" class="login_btn" value="Regular" />
                    </td>
                    <td>

                    </td>
                </tr>
            </table>
        </form>  
    </div>
</body>
</html>