<?php 
require_once 'init.php';
/*$query = "insert into admin(id,email,password) values (1,'shimona','shimona')";
$sql->query($query);*/
?>

<div>
	<div class="jumbotron" id="main">
	  <h1 class="display-4 text-center">Welcome</h1>
	  <br>
	  <h5 class="text-center">Select your preferred login</h5>
	  <br>
	  <div class="row justify-content-center">
	  	<div class="col-lg-8">
		  <a class="btn bg-secondary btn-lg btn-block" href="tutor.php" role="button">I am a tutor</a>
		</div>
	  </div>
	  <div class="row justify-content-center">
	  	<div class="col-lg-8">
		  <a class="btn bg-secondary btn-lg btn-block" href="student.php" role="button">I am a student</a>
		</div>
	  </div>
	  <div class="row justify-content-center">
	  	<div class="col-lg-8">
		  <a class="btn bg-secondary btn-lg btn-block" href="tutoraccessNotify.php" role="button">I am a class coordinator</a>
		</div>
	  </div>
	</div>
	
</div>
</body>
</html>