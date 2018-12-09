<?php 
require_once 'init.php';
$id=$_GET['id'];
$semester=$_GET['semester'];
$branch=$_GET['branch'];
$subject_code=$_GET['subject_code'];
/*echo "$id";
echo "$semester";
echo "$branch";*/
$queryclass = "SELECT classes, code from subject where code='$subject_code' and sem='$semester' and branch='$branch'";
$resultclass=$sql->prepare($queryclass);
$resultclass->execute();
$rowclass = $resultclass->fetch();
$class=$rowclass['classes'];
$subcode=$rowclass['code'];
$query = "SELECT student_id,attended from attendance where subject_code='$subject_code' and sem='$semester' and branch='$branch' and tutor_id='$id'";
$result=$sql->prepare($query);
$result->execute();
$rowcount=$result->rowCount();
$row = $result->fetchAll();

for($i=0;$i<count($row)-1;$i++){
$min=$i;
for($j=$i+1;$j<count($row);$j++){
if(intval(substr($row[$j]['student_id'],1))<intval(substr($row[$min]['student_id'],1))){
$min=$j;
}
}
$temp=$row[$i];
$row[$i]=$row[$min];
$row[$min]=$temp;
}
?>
<body>
	<div>
		<div class="jumbotron" id="student">
			<h5 class="text-center"> Number of classes conducted for <?=$subcode;?> : <?=$class;?></h5>
			<table class="table table-boredered table-striped table-condensed">
				<thead>
					<th>USN</th><th>Current Status</th><th></th>
				</thead>
				<tbody>
				<?php foreach ($row as $rows){?>
				<tr>
					<td><?=$rows['student_id'];?></td>
					<td><?=$rows['attended'];?></td>
					<td>
					<form action="attendance.php" method="get">
						<div class="form-check-inline">
  							<input class="form-check-input" type="checkbox" value="<?=$row['student_id'];?>" id="present" name="present[]">
  							<label class="form-check-label" for="present">Present
  							</label>
						</div>
						<!-- 
						<div class="form-check-inline">
  							<input class="form-check-input" type="checkbox" value="absent" id="absent" name="<?=$row['student_id'];?>">
  							<label class="form-check-label" for="absent">Absent
  							</label>
						</div> -->
					</td>
				</tr>
				<?php }?>
				</tbody>
			</table>
			<div id="btngrp">
				<a class="btn bg-secondary" href="project.php" role="button">Home</a>
			  <input type="submit" value="Submit" class="btn bg-secondary justify-content-center" id="btn">
						<input type="hidden" name="subject_code" value="<?=$subcode;?>">
			  </form>
		  </div>
		</div>
	</div>
</body>
</html>
