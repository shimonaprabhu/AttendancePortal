<?php
require_once 'init.php';
$subject_code=$_GET['subject_code'];

foreach ($_GET['present'] as $student_id) {
	$query = "UPDATE attendance set attended=attended+1 where subject_code='$subject_code' and student_id='$student_id'";
	$result=$sql->prepare($query);
	$result->execute();
	
	}
	$query = "UPDATE subject set classes=classes+1 where code='$subject_code'";
	$result=$sql->prepare($query);
	$result->execute();
	$query2 = "UPDATE attendance,subject set status=truncate((attended/subject.classes)*100,2) where attendance.subject_code=subject.code and subject_code='$subject_code'";
	$result2=$sql->prepare($query2);
	$result2->execute();

header('Location: project.php');
?>

<!-- CREATE TRIGGER status on update
 ON attendance
 FOR EACH ROW
 BEGIN
 UPDATE attendance,subject set status=truncate((attended/subject.classes)*100,2) where attendance.subject_code=subject.code and subject_code='15CS51' 
 END; -->