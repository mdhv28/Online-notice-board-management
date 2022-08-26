<?php 
include('connection.php');
session_start();
 ?>
<html>
	<head>
		 <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <title>VVCE ISE NOTICE BOARD</title>
		<script src="js/jquery_library.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</head>
	<body>
		<style>
		.dropdown{
			display:none;
			position:absolute;
			top:16.5em;
		}
		.outDrop:hover .dropdown{
			display:flex;
			flex-direction:column;
		}
		</style>

		 <div style="text-align: center">
    <span style="float:left">
    <img width="200" height="200" src="images/CollegeLogo.png">
    </span>
    <span style="float:right">
        <img width="200" height="180" src="images/DeptLogo.png">
        </span>
    <span>
        <font color="green" size="4">
            "Vidyavardhaka Sangha(R)"
            <br>
            <b>VIDYAVARDHAKA COLLEGE OF ENGINEERING</b>
            <br>
            "Gokulam III Stage, Mysuru - 5700 02"
            <br>
            <h2>Department Of Information Science and Engineering</h2>
            <h2>NOTICE BOARD</h2>
            
        </font>
    </span>
    </div>
    <div class="w3-bar w3-light-grey">
	
	<div class="outDrop"> 
		<a class="w3-bar-item w3-button">Login</a>
		<div class="dropdown w3-light-grey">
		<a href="index.php?option=HodLogin" class="w3-bar-item w3-button">HOD</a>
		<a href="index.php?option=StudentLogin" class="w3-bar-item w3-button">Student</a>
		</div>
	</div>


	
      
        <a href="index.php?option=Events" class="w3-bar-item w3-button">Events</a>
        <a href="index.php?option=feestructure" class="w3-bar-item w3-button">Fee Structure</a>
        <a href="index.php?option=scholarship" class="w3-bar-item w3-button">Scholarships</a>
        <a href="index.php?option=facultydetails" class="w3-bar-item w3-button">Faculty Details</a>
		<a href="index.php?option=timetable" class="w3-bar-item w3-button">TimeTable</a>
        
      </div>	
	<div class="container">
	<div class="row">
	<!-- container -->
		<div >
		<?php 
		@$opt=$_GET['option'];
		
		if($opt!="")
		{
			if($opt=="about")
			{
			include('about.php');
			}
			else if($opt=="Events")
			{
			include('notification.php');
			}
			
			else if($opt=="feestructure")
			{
			include('feestructure.php');
			}
			else if($opt=="facultydetails")
			{
			include('facultydetails.php');
			}
			else if($opt=="scholarship")
			{
			include('scholarship.php');
			}
			
			else if($opt=="StudentLogin")
			{
			include('login.php');
			}
			else if($opt=="HodLogin")
			{
			include('Hodlogin.php');
			}
			else if($opt=="timetable")
			{
			include('timetable.php');
			}
			else if($opt=="display_image")
			{
			include('display_image.php');
			}
		}
		else
		{
			include('notification.php');
		}
	?>
	</div>
	</div>
</div>



	</body>
</html>