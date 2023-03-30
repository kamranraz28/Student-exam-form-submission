<?php
    error_reporting(0);
    session_start();
    $user = $_SESSION['username'];
    // For 1st semester...................
    include "../connection.php";
    $first_sem = "SELECT * FROM sub_reg WHERE Semester='1' AND role='Regular' AND username='{$user}'";
    $query_first = mysqli_query($conn,$first_sem);
    $count_first_sem = 0;
    if(mysqli_num_rows($query_first)>0){
        while(mysqli_fetch_assoc($query_first)){
            $count_first_sem++;
        }
    }

    // For 2nd semester...................
    include "../connection.php";
    $second_sem = "SELECT * FROM sub_reg WHERE Semester='2' AND role='Regular' AND username='{$user}'";
    $query_second = mysqli_query($conn,$second_sem);
    $count_second_sem = 0;
    if(mysqli_num_rows($query_second)>0){
        while(mysqli_fetch_assoc($query_second)){
            $count_second_sem++;
        }
    }

    // For 3rd semester...................
    include "../connection.php";
    $third_sem = "SELECT * FROM sub_reg WHERE Semester='3' AND role='Regular' AND username='{$user}'";
    $query_third = mysqli_query($conn,$third_sem);
    $count_third_sem = 0;
    if(mysqli_num_rows($query_third)>0){
        while(mysqli_fetch_assoc($query_third)){
            $count_third_sem++;
        }
    }

    // For 4th semester...................
    include "../connection.php";
    $fourth_sem = "SELECT * FROM sub_reg WHERE Semester='4' AND role='Regular' AND username='{$user}'";
    $query_fourth = mysqli_query($conn,$fourth_sem);
    $count_fourth_sem = 0;
    if(mysqli_num_rows($query_fourth)>0){
        while(mysqli_fetch_assoc($query_fourth)){
            $count_fourth_sem++;
        }
    }

    // For 5th semester...................
    include "../connection.php";
    $fifth_sem = "SELECT * FROM sub_reg WHERE Semester='5' AND role='Regular' AND username='{$user}'";
    $query_fifth = mysqli_query($conn,$fifth_sem);
    $count_fifth_sem = 0;
    if(mysqli_num_rows($query_fifth)>0){
        while(mysqli_fetch_assoc($query_fifth)){
            $count_fifth_sem++;
        }
    }


    // For 6th semester...................
    include "../connection.php";
    $six_sem = "SELECT * FROM sub_reg WHERE Semester='6' AND role='Regular' AND username='{$user}'";
    $query_six = mysqli_query($conn,$six_sem);
    $count_six_sem = 0;
    if(mysqli_num_rows($query_six)>0){
        while(mysqli_fetch_assoc($query_six)){
            $count_six_sem++;
        }
    }

    // For 7th semester...................
    include "../connection.php";
    $seventh_sem = "SELECT * FROM sub_reg WHERE Semester='7' AND role='Regular' AND username='{$user}'";
    $query_seven = mysqli_query($conn,$seventh_sem);
    $count_seven_sem = 0;
    if(mysqli_num_rows($query_seven)>0){
        while(mysqli_fetch_assoc($query_seven)){
            $count_seven_sem++;
        }
    }


    // For 8th semester...................
    include "../connection.php";
    $eitgh_sem = "SELECT * FROM sub_reg WHERE Semester='8' AND role='Regular' AND username='{$user}'";
    $query_eight = mysqli_query($conn,$eitgh_sem);
    $count_eight_sem = 0;
    if(mysqli_num_rows($query_eight)>0){
        while(mysqli_fetch_assoc($query_eight)){
            $count_eight_sem++;
        }
    }


    // For Improvement
    include "../connection.php";
    $improve = "SELECT * FROM sub_reg WHERE role='Improve' AND username='{$user}'";
    $query_improve = mysqli_query($conn,$improve);
    $count_improve = 0;
    if(mysqli_num_rows($query_improve)>0){
        while(mysqli_fetch_assoc($query_improve)){
            $count_improve++;
        }
    }

?>