<?php
    include '../../connection.php';
    session_start();
    $sem = $_SESSION['Semester'];
    $user = $_SESSION['username'];
    if(isset($_POST['Submit'])){
        $sublist = $_POST['sublist'];
        $insert_sem = "INSERT INTO sem_reg(username,semester,role) VALUES('{$user}','{$sem}','Improve')";
        $insert_run = mysqli_query($conn,$insert_sem);
        $select = "SELECT * FROM add_s2";
        $sql = mysqli_query($conn,$select);
        if(mysqli_num_rows($sql)>0){
            while($row=mysqli_fetch_assoc($sql)){
                foreach($sublist as $showlist){  
                    if($row['sub_name']==$showlist){
                        $code = $row['sub_code'];
                        $credit = $row['credit'];
                        $insert_hard = "INSERT INTO sub_reg(username,Semester,sub_name,sub_code,credit,role) VALUES('{$user}','{$sem}','{$showlist}','{$code}','{$credit}','Improve')";
                        $hard_sql = mysqli_query($conn,$insert_hard);
                    }
                }
            }
        }
        if($insert_run && $hard_sql){
            $_SESSION['status_mgs'] = "<div style='color: green; text-align: center;'>Improve Registered Successfully</div>";
        }else{
            $_SESSION['status_mgs'] = "<div style='color: red; text-align: center;'>Improve Not Registered Successfully</div>";
        }
        header("Location:http://localhost/exam_form/user/improve.php");
    }
?>