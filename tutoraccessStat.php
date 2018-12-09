<?php
require_once 'init.php';
$id=$_GET['id'];
$semester=$_GET['semester'];
$branch=$_GET['branch'];
$subject_code=$_GET['subject_code'];

$query= "SELECT student_id,status FROM attendance WHERE subject_code='$subject_code' AND tutor_id='$id' ";
$result=$sql->prepare($query);
$result->execute();
$chart_data="";
/*while($row=$result->fetch()){
echo $row['student_id']."\n";
}*/
while ($row=$result->fetch()) 
{
	$chart_data.="{ usn:'".$row["student_id"]."', status:".$row["status"]."}, ";
}
$chart_data = substr($chart_data, 0, -2);
?>
<head>
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
 	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
 	<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  	<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
</head>
<body>
	<div id="tutor1" class="jumbotron">
		<h6 class="text-center"><?php echo " Statistics for Subject Code ".$subject_code." are "?></h1>
		<div id="graph1">
			
		</div>
	</div>

<script>
	new Morris.Line({
	element: 'graph1',
	data:[<?php echo $chart_data; ?>],
	xkey:'usn',
	ykeys:['status'],
	labels:['status'],
	parseTime:false,
	smooth:true
});
</script>

<<<<<<< HEAD
</body>
=======
</body>

>>>>>>> 6c26e6140596e7d0e406f6ed596479983c0c3a8f
