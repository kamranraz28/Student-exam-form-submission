<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registered Students</title>
    <!-- <script>
        function DeleteUser(id){
            if(confirm("Are You Sure..? You Want To Delete this User...?")){
                window.location.href="delete_user.php?id="+id;
            }
        }
    </script> -->
    <style type = "text/css">
        .mcon{
            font-family:'Acme';
        }
        .mtab{
            font-family:'Acme';
            margin-top: 0%;
        }

        .mybtn{
            background-color: rgba(127,0,128,0.2);
            border: 2px solid black;
            border-radius: 5px;
            color: black;
        }

        .mybtn:hover{
            width: 15%;
            background-color: rgba(0,128,128,0.9);
            cursor: pointer;
            border:3px solid black;
            color: white;
        }
        .font_size{
            text-transform: capitalize;
        }
        table th{
            text-align: center;
        }
        .search_form input['type=submit']{
            cursor: pointer;
            left: 65%;
        }
      
        </style>
    </head>
<body>
    <img id="head" width="150px" style = "font-family:'PT Serif';" left:10 align='left' src = "../css/images/logo.png">
    <br /><br /><br /><br /><br /><br />
    <div style="display:flex;">
        <div>
            <h2 style="color:#ff0000;font-family:'Acme';" class = "page-header mr-5"><u>Students Registered For 1st Year 1st Semester</u></h2>
        </div>
        <div class="search_form" class="input-group">
            <form action="" method="GET">
                <input type="hidden" name="page" value="see_s1"> 
                <input type="text" class="form-control" style="text-align:left;position:absolute;width:20%;left:57%" name="ser" placeholder="Search By Continue Session">
                
               <input type="submit" class="input-group-text" style="cursor:pointer; position: absolute; text-align: right;left: 74%;" value="Searh" name="search">
            </form>
        </div>
    </div>
    <?php
        include '../connection.php';
        @$value = $_GET['ser'];
        //$serach = mysqli_real_escape_string($conn,$_POST['ser']);
        if($value){
            $query1 = "SELECT * FROM registration JOIN sem_reg ON registration.username = sem_reg.username WHERE semester='1' and continue_batch='{$value}'";
    
            $result = mysqli_query($conn,$query1);
            $num_rows = mysqli_num_rows($result);
            if(!$num_rows){
                echo "<h2 style='color:red;color:#ff0000;font-family:Acme;position:relative;top:35px;left:2%;''>No Students Have Registered For 1st Year 1st Semester Exam Yet.</h2>";
            }else{
    ?>
    <div class = "col-lg-12 mcon text-center">
        <table id="mytab1" width = "100%" class="mtab table table-bordered table-hover table-responsive" style = "margin-top:0;">
    	    <tr align = 'center' class = "text-center" style = "background-color:rgba(0,128,128,0.3);color:black;font-size:25px;text-align:center;font-family: 'PT serif';" class="table-info">
                <th style='border:2px solid black'>SL.No</th>
                <th style='border:2px solid black'>Name</th>
                <th style='border:2px solid black'>Username</th>
                <th style='border:2px solid black'>Continue Session</th>
                <th style='border:2px solid black'>Semester</th>
                <th style='border:2px solid black'>Mail - Id</th>
                <th style='border:2px solid black'>Phone</th>
                <!-- <th style='border:2px solid black'>Delete</th> -->
		    </tr>
            <?php
                $i=1;
                while($row = mysqli_fetch_assoc($result)){ ?>
                <tr style='color:black;border-bottom:2px solid black;font-size:18px;border-right:2px solid black;       border-top:2px solid black;border-left:2px solid black;'>
                    <td style='border:2px solid black' align = 'center'><?php echo $i; ?></td>
                    <td class="font_size" style='border:2px solid black' align = 'center'><?php echo $row['fname'].' '.$row['lname']; ?></td>
                    <td style='border:2px solid black' align = 'center'><?php echo $row['username']; ?></td>
                    <td style='border:2px solid black' align = 'center'><?php echo $row['continue_batch']; ?></td> 
                    <td style='border:2px solid black' align = 'center'><?php echo $row['semester']; ?></td> 
                    <td style='border:2px solid black' align = 'center'><?php echo $row['mail']; ?></td>
                    <td style='border:2px solid black' align = 'center'><?php echo $row['phone']; ?></td>
          
                
                    <!-- <td align = 'center' style='border:2px solid black'> <a href="javascript:DeleteUser('<?php echo $row['id']; ?>')" style='color:red'><i class = "fa fa-trash"></i></a> </td>
            -->
                </tr>
               <?php
                $i++;
                
                    }
                }
            
            ?>  
        </table>
        <?php 
        }else{
            $query1 = "SELECT * FROM registration JOIN sem_reg ON registration.username = sem_reg.username WHERE semester='1' order by continue_batch";
            $result = mysqli_query($conn,$query1);
            $num_rows = mysqli_num_rows($result);
            $result = mysqli_query($conn,$query1);
            $num_rows = mysqli_num_rows($result);
            if(!$num_rows){
                echo "<h2 style='color:red;color:#ff0000;font-family:Acme;position:relative;top:35px;left:2%;''>No Students Have Registered For 1st Year 1st Semester Exam Yet.</h2>";
            }else{ ?>
                <table id="mytab1" width = "100%" class="mtab table table-bordered table-hover table-responsive" style = "margin-top:0;">
    	    <tr align = 'center' class = "text-center" style = "background-color:rgba(0,128,128,0.3);color:black;font-size:25px;text-align:center;font-family: 'PT serif';" class="table-info">
                <th style='border:2px solid black'>SL.No</th>
                <th style='border:2px solid black'>Name</th>
                <th style='border:2px solid black'>Username</th>
                <th style='border:2px solid black'>Continue Session</th>
                <th style='border:2px solid black'>Semester</th>
                <th style='border:2px solid black'>Mail - Id</th>
                <th style='border:2px solid black'>Phone</th>
                <!-- <th style='border:2px solid black'>Delete</th> -->
		    </tr>
            <?php
                $i=1;
                while($row = mysqli_fetch_assoc($result)){ ?>
                <tr style='color:black;border-bottom:2px solid black;font-size:18px;border-right:2px solid black;       border-top:2px solid black;border-left:2px solid black;'>
                    <td style='border:2px solid black' align = 'center'><?php echo $i; ?></td>
                    <td class="font_size" style='border:2px solid black' align = 'center'><?php echo $row['fname'].' '.$row['lname']; ?></td>
                    <td style='border:2px solid black' align = 'center'><?php echo $row['username']; ?></td>
                    <td style='border:2px solid black' align = 'center'><?php echo $row['continue_batch']; ?></td> 
                    <td style='border:2px solid black' align = 'center'><?php echo $row['semester']; ?></td> 
                    <td style='border:2px solid black' align = 'center'><?php echo $row['mail']; ?></td>
                    <td style='border:2px solid black' align = 'center'><?php echo $row['phone']; ?></td>
          
                
                    <!-- <td align = 'center' style='border:2px solid black'> <a href="javascript:DeleteUser('<?php echo $row['id']; ?>')" style='color:red'><i class = "fa fa-trash"></i></a> </td> -->
           
                </tr>
               <?php
                $i++;
                
                    }
                }
            ?>  
        </table>
       <?php } ?>

        <!-- <button id = "mbtn-a" class = "mybtn" style = "padding:5px;font-size:20px;">Create Excel</button> -->
    </div>
</body>
</html>