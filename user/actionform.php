<?php
    include '../connection.php';
    session_start();
    if(isset($_POST['submit'])){
        $sem = $_POST['sem'];
        $user = $_SESSION['username'];
        //1st Semester
        if($sem=='1'){
            $select = "SELECT * FROM add_s1";
            $res = mysqli_query($conn,$select) or die("query Failed..!".mysqli_error());
            if(mysqli_num_rows($res)>0){
                while($row = mysqli_fetch_assoc($res)){
                    $sub_name = $row['sub_name'];
                    $sub_code = $row['sub_code'];
                    $credit = $row['credit'];
                    $sql = "INSERT INTO sub_reg(username,semester,sub_name,sub_code,credit,role) VALUES('{$user}',{$sem},'{$sub_name}','{$sub_code}',{$credit},'regular')";
                    if(mysqli_query($conn,$sql)){
                        $err = "<font color='green'>Semester Registered successfully...!!</font>"; 
                    }else{
                        $err = "<font color='red'>Semester Registered Unsuccessfully...!!</font>"; 
                    }
                    header("location:http://localhost/exam_form/user/dashboard.php?page=register");
                }
            }
               
        }
        // 2nd semester

        if($sem=='2'){
            $select = "SELECT * FROM add_s2";
            $res = mysqli_query($conn,$select) or die("query Failed..!".mysqli_error());
            if(mysqli_num_rows($res)>0){
                while($row = mysqli_fetch_assoc($res)){
                    $sub_name = $row['sub_name'];
                    $sub_code = $row['sub_code'];
                    $credit = $row['credit'];
                    $sql = "INSERT INTO sub_reg(username,semester,sub_name,sub_code,credit,role) VALUES('{$user}',{$sem},'{$sub_name}','{$sub_code}',{$credit},'regular')";
                    if(mysqli_query($conn,$sql)){
                        $err = "<font color='green'>Semester Registered successfully...!!</font>"; 
                    }else{
                        $err = "<font color='red'>Semester Registered Unsuccessfully...!!</font>"; 
                    }
                    header("location:http://localhost/exam_form/user/dashboard.php?page=register");
                }
            }
               
        }
        //3rd semester
        if($sem=='3'){
            $select = "SELECT * FROM add_s3";
            $res = mysqli_query($conn,$select) or die("query Failed..!".mysqli_error());
            if(mysqli_num_rows($res)>0){
                while($row = mysqli_fetch_assoc($res)){
                    $sub_name = $row['sub_name'];
                    $sub_code = $row['sub_code'];
                    $credit = $row['credit'];
                    $sql = "INSERT INTO sub_reg(username,semester,sub_name,sub_code,credit,role) VALUES('{$user}',{$sem},'{$sub_name}','{$sub_code}',{$credit},'regular')";
                    if(mysqli_query($conn,$sql)){
                        $err = "<font color='green'>Semester Registered successfully...!!</font>"; 
                    }else{
                        $err = "<font color='red'>Semester Registered Unsuccessfully...!!</font>"; 
                    }
                    header("location:http://localhost/exam_form/user/dashboard.php?page=register");
                }
            }
               
        }
        //4th semester
        if($sem=='4'){
            $select = "SELECT * FROM add_s4";
            $res = mysqli_query($conn,$select) or die("query Failed..!".mysqli_error());
            if(mysqli_num_rows($res)>0){
                while($row = mysqli_fetch_assoc($res)){
                    $sub_name = $row['sub_name'];
                    $sub_code = $row['sub_code'];
                    $credit = $row['credit'];
                    $sql = "INSERT INTO sub_reg(username,semester,sub_name,sub_code,credit,role) VALUES('{$user}',{$sem},'{$sub_name}','{$sub_code}',{$credit},'regular')";
                    if(mysqli_query($conn,$sql)){
                        $err = "<font color='green'>Semester Registered successfully...!!</font>"; 
                    }else{
                        $err = "<font color='red'>Semester Registered Unsuccessfully...!!</font>"; 
                    }
                    header("location:http://localhost/exam_form/user/dashboard.php?page=register");
                }
            }
               
        }
        //5th semester
        if($sem=='5'){
            $select = "SELECT * FROM add_s5";
            $res = mysqli_query($conn,$select) or die("query Failed..!".mysqli_error());
            if(mysqli_num_rows($res)>0){
                while($row = mysqli_fetch_assoc($res)){
                    $sub_name = $row['sub_name'];
                    $sub_code = $row['sub_code'];
                    $credit = $row['credit'];
                    $sql = "INSERT INTO sub_reg(username,semester,sub_name,sub_code,credit,role) VALUES('{$user}',{$sem},'{$sub_name}','{$sub_code}',{$credit},'regular')";
                    if(mysqli_query($conn,$sql)){
                        $err = "<font color='green'>Semester Registered successfully...!!</font>"; 
                    }else{
                        $err = "<font color='red'>Semester Registered Unsuccessfully...!!</font>"; 
                    }
                    header("location:http://localhost/exam_form/user/dashboard.php?page=register");
                }
            }
               
        }
        if($sem=='6'){
            $select = "SELECT * FROM add_s6";
            $res = mysqli_query($conn,$select) or die("query Failed..!".mysqli_error());
            if(mysqli_num_rows($res)>0){
                while($row = mysqli_fetch_assoc($res)){
                    $sub_name = $row['sub_name'];
                    $sub_code = $row['sub_code'];
                    $credit = $row['credit'];
                    $sql = "INSERT INTO sub_reg(username,semester,sub_name,sub_code,credit,role) VALUES('{$user}',{$sem},'{$sub_name}','{$sub_code}',{$credit},'regular')";
                    if(mysqli_query($conn,$sql)){
                        $err = "<font color='green'>Semester Registered successfully...!!</font>"; 
                    }else{
                        $err = "<font color='red'>Semester Registered Unsuccessfully...!!</font>"; 
                    }
                    header("location:http://localhost/exam_form/user/dashboard.php?page=register");
                }
            }
               
        }
        //7th semester
        if($sem=='7'){
            $select = "SELECT * FROM add_s7";
            $res = mysqli_query($conn,$select) or die("query Failed..!".mysqli_error());
            if(mysqli_num_rows($res)>0){
                while($row = mysqli_fetch_assoc($res)){
                    $sub_name = $row['sub_name'];
                    $sub_code = $row['sub_code'];
                    $credit = $row['credit'];
                    $sql = "INSERT INTO sub_reg(username,semester,sub_name,sub_code,credit,role) VALUES('{$user}',{$sem},'{$sub_name}','{$sub_code}',{$credit},'regular')";
                    if(mysqli_query($conn,$sql)){
                        $err = "<font color='green'>Semester Registered successfully...!!</font>"; 
                    }else{
                        $err = "<font color='red'>Semester Registered Unsuccessfully...!!</font>"; 
                    }
                    header("location:http://localhost/exam_form/user/dashboard.php?page=register");
                }
            }
               
        }
        if($sem=='8'){
            $select = "SELECT * FROM add_s8";
            $res = mysqli_query($conn,$select) or die("query Failed..!".mysqli_error());
            if(mysqli_num_rows($res)>0){
                while($row = mysqli_fetch_assoc($res)){
                    $sub_name = $row['sub_name'];
                    $sub_code = $row['sub_code'];
                    $credit = $row['credit'];
                    $sql = "INSERT INTO sub_reg(username,semester,sub_name,sub_code,credit,role) VALUES('{$user}',{$sem},'{$sub_name}','{$sub_code}',{$credit},'regular')";
                    if(mysqli_query($conn,$sql)){
                        $err = "<font color='green'>Semester Registered successfully...!!</font>"; 
                    }else{
                        $err = "<font color='red'>Semester Registered Unsuccessfully...!!</font>"; 
                    }
                    header("location:http://localhost/exam_form/user/dashboard.php?page=register");
                }
            }
               
        }
        
    }
?>