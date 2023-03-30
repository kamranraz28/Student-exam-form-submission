<?php
    include '../connection.php';
    $id = $_GET['id'];
    $sql = "DELETE * FROM registration WHERE id = '{$id}'";
    mysqli_query($conn,$sql);
?>