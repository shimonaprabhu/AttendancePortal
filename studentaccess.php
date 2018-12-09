<?php 
require_once 'init.php';
$id=$_GET['id'];
$semester=$_GET['semester'];
$branch=$_GET['branch'];
/*echo "$id";
echo "$semester";
echo "$branch";*/

$query = "SELECT student_id,subject_code,status,attended from attendance where student_id='$id' and sem='$semester' and branch='$branch'";
$result=$sql->prepare($query);
$result->execute();

/*$rowcount=$result->rowCount();
echo "$rowcount";*/
?>
	<div>
		<div class="jumbotron" id="student">
		<h5 class="text-center"> Attendance statistics</h5>
			<table class="table table-boredered table-striped table-condensed">
				<thead>
					<th>USN</th><th>Subject Code</th><th>Attendance</th>
				</thead>
				<tbody>
				<?php while($row = $result->fetch()):?>
				<tr>
					<td><?=$row['student_id'];?></td>
					<td><?=$row['subject_code'];?></td>
					<?php 
					$subject_code=$row['subject_code'];
					$query2 = "SELECT classes from subject where code='$subject_code' and sem='$semester' and branch='$branch'";
					$result2=$sql->prepare($query2);
					$result2->execute();
					$row2 = $result2->fetch();
					?>
					<td><?=$row['status'];?>% (<?=$row['attended'];?>/<?=$row2['classes'];?>)</td>
				</tr>
				<?php endwhile;?>
				</tbody>
			</table>
			<div id="btngrpNoRet">
			  <a class="btn bg-secondary" href="project.php" role="button">Home</a>
		  </div>
		</div>
	</div>
</body>
</html>


