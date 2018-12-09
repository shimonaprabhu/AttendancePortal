<?php 
require_once 'init.php';/*
	$semester=$_GET['semester'];
	$branch=$_GET['branch'];
	$subject_code=$_GET['subject_code'];*/
	/*$id = $_GET['InputUSN'];
    $mailSub = 'Attendance Report';
    $query = "SELECT student_id,subject_code,status from attendance where student_id='$id' and sem='$semester' and branch='$branch' and subject_code='$subject_code'";
	$result=$sql->prepare($query);
	$result->execute();

    $mailMsg = $result;
   require 'PHPMailer-master/PHPMailerAutoload.php';
   $mail = new PHPMailer();
   $mail ->IsSmtp();
   $mail ->SMTPDebug = 0;
   $mail ->SMTPAuth = true;
   $mail ->SMTPSecure = 'ssl';
   $mail ->Host = "smtp.gmail.com";
   $mail ->Port = 465; // or 587
   $mail ->IsHTML(true);
   $mail ->Username = "AttendancePortal123@gmail.com";
   $mail ->Password = "AttendancePortal1*";
   $mail ->SetFrom("AttendancePortal123@gmail.com");
   $mail ->Subject = $mailSub;
   $mail ->Body = $mailMsg;
   $mail ->AddAddress($mailto);

   if(!$mail->Send())
   {
       echo "Mail Not Sent";
   }
   else
   {
       echo "Mail Sent";
   }*/
?>

<div>
	<div class="jumbotron" id="tutor">
	  <h1 class="display-4 text-center">Welcome coordinator</h1>
	  <br>
	  <!-- <h5 class="text-center">Please enter Student's USN</h5>
	  <br> -->
	  <form class="form" action="notifysuccess.php" method="post">
		  <!-- <div class="form-row">
		  <div class="form-group col-md-4" id="format">
		    <label for="InputUSN">USN of Student</label>
		    <input type="text" class="form-control" name="InputUSN" placeholder="USN">
		  </div>
		   </div> -->
		   <div class="form-row">
		  <div class="form-group col-md-4" id="format">
		    <label for="InputID">ID</label>
		    <input type="text" class="form-control" name="InputID" placeholder="ID">
		  </div>
		  <div class="form-group col-md-4">
		    <label for="InputPassword">Password</label>
		    <input type="password" class="form-control" name="InputPassword" placeholder="Password">
		   </div>
		   </div>
		   <div class="form-row">
		  <div class="form-group col-md-4" id="format">
		    <label for="InputUSN">USN of Student</label>
		    <input type="text" class="form-control" name="InputUSN" placeholder="USN">
		  </div>
		   </div>
		  <div id="btngrp">
			  <input type="submit" value="Submit" class="btn bg-secondary justify-content-center" id="btn">
			  <a class="btn bg-secondary" href="project.php" role="button">Home</a>
		  </div><!-- 
		  <input type="hidden" name="semester" value="<?=$semester?>">
		  <input type="hidden" name="branch" value="<?=$branch?>">
		  <input type="hidden" name="subject_code" value="<?=$subject_code?>"> -->
		</form>
	</div>
</div>

</body>
</html>

    