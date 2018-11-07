<?php 
require_once 'init.php';
?>
<div>
	<div class="jumbotron" id="student">
	  <h1 class="display-4 text-center">Welcome student</h1>
	  <br>
	  <h5 class="text-center">Please enter your login details</h5>
	  <br>
	  <form class="form" action="loginserver.php" method="post">
		  <div class="form-row">
		  <div class="form-group col-md-4" id="format">
		    <label for="InputUSN">USN</label>
		    <input type="text" class="form-control" name="InputUSN" placeholder="USN">
		  </div>
		  <div class="form-group col-md-4">
		    <label for="InputPassword">Password</label>
		    <input type="password" class="form-control" name="InputPassword" placeholder="Password">
		   </div>
		   </div>
		   <div class="form-row">
		   <div class="form-group col-md-4" id="format">
		    <label for="InputBranch">Branch</label>
		    <input type="text" class="form-control" name="InputBranch" placeholder="Branch">
		   </div>
		   <div class="form-group col-md-4">
		    <label for="InputSemester">Semester</label>
		    <input type="text" class="form-control" name="InputSemester" placeholder="Semester">
		   </div>
		   </div>
		   <br>
		  <div id="btngrp">
			  <input type="submit" value="Submit" class="btn bg-secondary justify-content-center" id="btn">
			  <a class="btn bg-secondary" href="project.php" role="button">Home</a>
		  </div>

		  <input type="hidden" name="logtype" value="student">
		</form>
	</div>
</div>

</body>
</html>
