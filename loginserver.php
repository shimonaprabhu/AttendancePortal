<?php 
/*session_start()*/
require_once 'init.php';
?>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
		if(!empty($_POST['InputEmail']) || !empty($_POST['InputPassword']))
		    {
		    	
				if($_POST['logtype']=='tutor'){
					if($_POST['inputOption']=='submit'){
		    	$ID=$_POST['InputID'];
        		$password=$_POST['InputPassword'];
		    	$branch=$_POST['InputBranch'];
		    	$semester=$_POST['InputSemester'];
		    	$subcode=$_POST['InputSubjectCode'];

		    	$query = "select * from tutor where id='$ID' && password='$password'";
				$result=$sql->prepare($query);
				$result->execute();
				$rowcount=$result->rowCount();

		    	$query2 = "select * from attendance where tutor_id='$ID' && subject_code='$subcode' && branch='$branch' &&sem='$semester'";
				$result2=$sql->prepare($query2);
				$result2->execute();
				$rowcount2=$result2->rowCount();

				if($rowcount == 1 && $rowcount2>=1) {
	         		/*session_register("username");
	         		$_SESSION['login_user'] = $email;*/
	         		header("Location: tutoraccess.php?id=$ID&semester=$semester&branch=$branch&subject_code=$subcode");
	      		}
	      		else {
	      			header("Location: loginfail.php");
	      		}
	      	}
	      	elseif($_POST['inputOption']=='view'){
		    	$ID=$_POST['InputID'];
        		$password=$_POST['InputPassword'];
		    	$branch=$_POST['InputBranch'];
		    	$semester=$_POST['InputSemester'];
		    	$subcode=$_POST['InputSubjectCode'];
		    	$query = "select * from tutor where id='$ID' && password='$password'";
				$result=$sql->prepare($query);
				$result->execute();
				$rowcount=$result->rowCount();
		    	$query2 = "select * from attendance where tutor_id='$ID' && subject_code='$subcode' && branch='$branch' &&sem='$semester'";
				$result2=$sql->prepare($query2);
				$result2->execute();
				$rowcount2=$result2->rowCount();
				if($rowcount == 1 && $rowcount2>=1) {
	         		/*session_register("username");
	         		$_SESSION['login_user'] = $email;*/
	         		header("Location: tutoraccessStat.php?id=$ID&semester=$semester&branch=$branch&subject_code=$subcode");
	      		}
	      		else {
	      			header("Location: loginfail.php");
	      		}
	      	}
	      	/*elseif($_POST['inputOption']=='send'){
		    	$ID=$_POST['InputID'];
        		$password=$_POST['InputPassword'];
		    	$branch=$_POST['InputBranch'];
		    	$semester=$_POST['InputSemester'];
		    	$subcode=$_POST['InputSubjectCode'];
		    	$query = "select * from tutor where id='$ID' && password='$password'";
				$result=$sql->prepare($query);
				$result->execute();
				$rowcount=$result->rowCount();
		    	$query2 = "select * from attendance where tutor_id='$ID' && subject_code='$subcode' && branch='$branch' &&sem='$semester'";
				$result2=$sql->prepare($query2);
				$result2->execute();
				$rowcount2=$result2->rowCount();
				if($rowcount == 1&& $rowcount2>=1) {
	         		session_register("username");
	         		$_SESSION['login_user'] = $email;
	         		header("Location: tutoraccessNotify.php?id=$ID&semester=$semester&branch=$branch&subject_code=$subcode");
	      		}
	      		else {
	      			header("Location: loginfail.php");
	      		}
	      	}*/
	      	}
		    
		    elseif ($_POST['logtype']=='student') {
		    	$USN=$_POST['InputUSN'];
        		$password=$_POST['InputPassword'];
		    	$branch=$_POST['InputBranch'];
		    	$semester=$_POST['InputSemester'];

		    	$query = "select * from student where id='$USN' && password='$password' && branch='$branch' && sem='$semester'";
				$result=$sql->prepare($query);
				$result->execute();
				$rowcount=$result->rowCount();
				if($rowcount == 1) {
	         		/*session_register("username");
	         		$_SESSION['login_user'] = $email;*/
	         		header("Location: studentaccess.php?id=$USN&semester=$semester&branch=$branch");
	      		}
	      		else {
	      			header("Location: loginfail.php");
	      		}
		    }
		    
     }
 }

?>

