<?php 
session_start();
include('../connection.php');
$admin= $_SESSION['admin'];
if($admin=="")
{
header('location:login.php');
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <title>Admin Dashboard</title>
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
	.anchorstyle>a{
		margin: 20px 0px 0px 0px;
		padding: 8px 16px;
		text-decoration:none;
		color:#333333
	 }
    </style>	

  </head>

  <body style="margin-bottom:10px">

    <div style="text-align: center">
        <span style="float:left">
        <img width="200" height="200" src="CollegeLogo.png">
        </span>
        <span style="float:right">
            <img width="200" height="180" src="DeptLogo.png">
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
        <div style="display:flex;flex-direction: row;width:100%;margin:0px;justify-content: space-between;">
		<div class="anchorstyle" style="width: 20%;display: flex; flex-direction: column;font-size:14px;color:#333333;">
			<div class="image" style="text-align: center;">
        	    		<img src="img_avatar3.png" class="w3-circle" alt="Alps" width=150 height="150" class="center" style="margin-left: 0px">
			</div>
			
            	    	<a href="index.php?page=notification" style="margin-top: 20px">Event Management</a>
						<a href="index.php?page=eventlogs" style="margin-top: 20px">Event Logs</a>
            	    	<a href="index.php?page=display_fee" style="margin-top: 20px">Fee Structure</a>
	            	<a href="index.php?page=display_scholarship" style="margin-top: 20px">Scholarship Eligibility</a>
        	    	<a href="index.php?page=display_faculty" style="margin-top: 20px">Faculty Details</a>
					<a href="index.php?page=timetable" style="margin-top: 20px">TimeTable</a>
	            	<a href="index.php?page=display_notice" style="margin-top: 20px">Manage Notification</a>
					<a href="index.php?page=manage_users" style="margin-top: 20px">Manage Students</a>
					
	            	<a href="index.php?page=update_password" style="margin-top: 20px">Update Password</a>
        	    	<a href="logout.php" style="margin-top: 20px">Logout</a>
            		
        	</div>
	
	

        
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" style="margin:0px">
 	
          <!-- container-->
		  <?php 
		@$page=  $_GET['page'];
		  if($page!="")
		  {
		  	if($page=="manage_users")
			{
				include('display_users.php');
			
			}
			if($page=="update_user")
			{
				include('update_user.php');
			
			}
			
			if($page=="update_password")
			{
				include('update_password.php');
			
			}
			
			if($page=="notification")
			{
				include('display_notification.php');
			
			}
			
			if($page=="update_event")
			{
				include('update_event.php');
			
			}
			
			
			
			if($page=="add_event")
			{
				include('add_event.php');
			
			}
			if($page=="display_fee")
			{
				include('display_fee.php');
			
			}
			if($page=="add_fee")
			{
				include('add_fee.php');
			
			}
			if($page=="update_fee")
			{
				include('update_fee.php');
			
			}
			if($page=="display_faculty")
			{
				include('display_faculty.php');
			
			}
			if($page=="add_faculty")
			{
				include('add_faculty.php');
			
			}
			if($page=="update_faculty")
			{
				include('update_faculty.php');
			
			}
			if($page=="display_scholarship")
			{
				include('display_scholarship.php');
			
			}
			if($page=="add_scholarship")
			{
				include('add_scholarship.php');
			
			}
			if($page=="update_scholarship")
			{
				include('update_scholarship.php');
			
			}
			if($page=="add_user")
			{
				include('add_user.php');
			
			}
			if($page=="display_notice")
			{
				include('display_notice.php');
			
			}
			if($page=="add_notice")
			{
				include('add_notice.php');
			
			}
			if($page=="update_notice")
			{
				include('update_notice.php');
			
			}
			if($page=="eventlogs")
			{
				include('eventLogs.php');
			
			}
			if($page=="timetable")
			{
				include('timetable.php');
			
			}
			if($page=="add_timetable")
			{
				include('add_timetable.php');
			
			}
			if($page=="update_timetable")
			{
				include('update_timetable.php');
			
			}
			if($page=="display_image")
			{
				include('display_image.php');
			
			}
		  }
		  
		  else
		  {
			include('display_notification.php');
		  ?>
		  <!-- container end-->
		  
		</div>  
		
		  
		  
		  
		
          
		  <?php } ?>
		  

         
        </div>
      </div>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
