<?php
    include "../../connection.php";

    $id = $_GET['id'];
    $del_query = "DELETE FROM add_s3 WHERE id = '{$id}'";
    $sql = mysqli_query($conn,$del_query) or die("Delete query Failed....!!!!");

    header("Location:http://localhost/exam_form/admin/dashboard.php?page=disp_s3");

?>