<?php
    session_start();
    @$semester = $_POST['sem'];
    $_SESSION['Semester'] = $semester;
    if($semester=='1'){
        include 'improvement/1st_sem.php';
    }
    if($semester=='2'){
        include 'improvement/2nd_sem.php';
    }
    if($semester=='3'){
        include 'improvement/3rd_sem.php';
    }
    if($semester=='4'){
        include 'improvement/4th_sem.php';
    }
    if($semester=='5'){
        include 'improvement/5th_sem.php';
    }
    if($semester=='6'){
        include 'improvement/6th_sem.php';
    }
    if($semester=='7'){
        include 'improvement/7th_sem.php';
    }
    if($semester=='8'){
        include 'improvement/8th_sem.php';
    }
    //echo $_POST['sem'];
?>