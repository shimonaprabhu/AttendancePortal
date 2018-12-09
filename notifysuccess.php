<?php 
require_once 'init.php';
/*	$semester=$_POST['semester'];
	$branch=$_POST['branch'];
	$subject_code=$_POST['subject_code'];
	$id = $_POST['InputUSN'];*/
	$tid=$_POST['InputID'];
	$password=$_POST['InputPassword'];
	$id = $_POST['InputUSN'];
    $mailSub = 'Attendance Report';
    
    /*$query = "SELECT student_id,subject_code,status from attendance where student_id='$id' and sem='$semester' and branch='$branch' and subject_code='$subject_code'";*/
    $query = "SELECT student_id,subject_code,status,attended,branch,sem from attendance where student_id='$id'";
	$result=$sql->prepare($query);
	$result->execute();
	$message='';
	
	while ($row = $result->fetch())
	{
		$subject_code=$row['subject_code'];
		$branch=$row['branch'];
		$semester=$row['sem'];
		$attended=$row['attended'];
		$query2 = "SELECT classes from subject where code='$subject_code' and sem='$semester' and branch='$branch'";
		$result2=$sql->prepare($query2);
		$result2->execute();
		$row2 = $result2->fetch();
		$classes=$row2['classes'];
		$message=$message.'Attendance for Subject '.$row['subject_code'].' is '.$row['status'].'%'.'('.$attended.'/'.$classes.')'.'<br>';
					}
	
	$mailMsg = $message;
	$query2="SELECT email from student where id='$id'";
	
	$result2=$sql->prepare($query2);
	$result2->execute();
    
    $mailto='';
    while ($row2 = $result2->fetch())
    {
		$mailto=$row2['email'];
	}

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
   $mail ->Password = "attendanceportal1*";
   $mail ->SetFrom("AttendancePortal123@gmail.com");
   $mail ->Subject = $mailSub;
   $mail ->Body = $mailMsg;
   $mail ->AddAddress($mailto);
   if(!$mail->Send())
   {
   	?>
       <div>
		<div class="jumbotron" id="messageDisp">
		<h5 class="text-center">Mail has not been sent!</h5>
			<div id="btngrpNoRet">
			  <a class="btn bg-secondary" href="project.php" role="button">Home</a>
		  </div>
		</div>
	</div>
</body>
</html>

<?php
   }
   else
   {
       ?>
       <div>
		<div class="jumbotron" id="messageDisp">
		<h5 class="text-center">Mail has been sent!</h5>
			<div id="btngrpNoRet">
			  <a class="btn bg-secondary" href="project.php" role="button">Home</a>
		  </div>
		</div>
	</div>
</body>
</html>
<?php
   }
?>