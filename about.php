<!DOCTYPE html>
<html>
<head>
	<title>About</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="64x64" href="css/images/logo.png">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Acme&family=Bitter:wght@100;300;400&family=Bree+Serif&family=Handlee&family=Numans&family=Odibee+Sans&family=PT+Serif:wght@400;700&family=Patrick+Hand&family=Simonetta:ital,wght@0,400;0,900;1,400&family=Trade+Winds&family=Volkhov:wght@400;700&display=swap" rel="stylesheet"> 
    <!--Fontawesome CDN-->
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!--Custom styles-->
    <link rel="stylesheet" type="text/css" href="css/styles.css">
        
	<style type = text/css>  
		.container{
			top:0;
			margin-top:0;
			padding-top:0;
		}
		.mcon{
			box-shadow: -2px -2px 5px rgba(0,0,0,0.5),
			3px 3px 6px rgba(0,0,0,0.5);
			margin-top: 2%;
			font-family: 'PT serif';
			background-color: rgba(127,45,25,0.1);
			color:black;
		}
		html,body{
			background-repeat: no-repeat;
			background-position:center;
			background-size: contain;
			background-attachment: fixed;
		}
		ol{
			padding-bottom: 20px;
		}
		ol li{
			padding-right: 10px;
			font-weight:bold;
			font-size: 20px;
			text-shadow: 0.5px 0.5px black;
			text-align: justify;
			padding-bottom: 3px;
		}
		
	</style>	
</head>
<body>
	<nav class="navbar navbar-light" style = "background-color: #5a0533;margin-bottom:2%;box-shadow: 3px 3px 5px;border-bottom:3px solid black;">
		<a class="navbar-brand text-white" style = "font-family:'Acme';font-size:30px" href="https://jkkniu.edu.bd/">JKKNIU</a>
		<a class="navbar-brand text-white" style = "font-family:'Acme';color:'red';" href="index.php"><i class="fas fa-home" aria-hidden="true"></i> Home</a>
	</nav>

	<div class = "col-lg-7 mcon m-auto">
		<h1 style = "color : purple;font-weight:bold;font-size:45px;padding-bottom:0px;padding-top:10px;margin-top:1px;text-decoration:underline dashed;text-shadow:1px 1px 2px black;" align = "center">About</h1>
		<hr color = "black" size = "2px">

		<p align="center" style = "font-weight:bold;text-shadow: 0.5px 0.5px black;font-size:20px;text-align:justify;">&nbsp;
			Exam Registration system is used in the effective dispatch of registration
			form to all of the students. This system adopts a comprehensive approach to
			minimize the manual work and schedule resources, time in a cogent manner. 
			The core of the system is to get the online registration form (with details such as name, 
			reg.no etc.,) filled by the student.


		</p>
		<hr color = "black" size = "2px">

		<h1 style = "color : navy;font-weight:bold;padding-bottom:0px;padding-top:0px;margin-top:0px;text-decoration:underline dotted;text-shadow:1px 1px 2px black;">Motivation</h1>
		<ol>
			<li>Online Exam Registration Portal helps the students in registering their Semester End Examination Subjects Easily without manually registering but instead through online web Portal. </li>
			<li>Wastage of Time, Effort is reduced.</li>
			<li>All the students details regarding the Exam Registration is maintained in a single Database that can be accessed Easily Anywhere & Anytime.</li>
			<li>Loss of Data is minimized as the details is maintained in a Database.</li>
			<li>Students can fill the form anywhere and anytime.</li>
			<li>Being an Online Exam application form submission system, it will reduce the paper work</li>
			<li>It helps in maintaining the Data consistency & Transparency.</li>
			<li>Leads to Easy administration as the admin can easily check the number of students who have registered also admin can Add, Edit or Update & Delete the subjects, & can see the subjects which are already listed.</li>
			<li>Probability of making Errors is less with the use of GUI.</li>
			<li>Useful for Educational institutes where number of students involved is more.</li>
		</ol>
	</div>
	<!-- Scripting -->
	<script src="js/jquery_library.js"></script>
    <script src="js/bootstrap.min.js"></script>

	<?php include 'footer.php'; ?>
</body>
</html>