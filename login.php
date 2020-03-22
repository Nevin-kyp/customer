<?php 
      
      $username="root";
      $password="";
      $database="data";
       	
   $mysqli = new mysqli("localhost", $username, $password, $database);

   if (isset($_POST['login'])) {
   	     $Username= $_POST['uname'];
   	     $Password=$_POST['pass'];
   	     $UserIp= $_SERVER['REMOTE_ADDR'];
   	       echo "$uname & $pass";
   }


 ?>
<!DOCTYPE html>
<html>
<head>
	<title>face book login</title>

	 <link rel="stylesheet" href="assets/css/bootstrap/bootstrap.min.css">
		  
	      <link rel="stylesheet" href="assets/fontwebawesome/fontawesome-free-5.7.1-web/css/fontawesome.css">
</head>
<body>
<div class="container"  style="margin-top:100px">
	 <div class="row justify-content-center">
	 	    <div class="col-md-6 col-offset-3"  align="center">
	 	    	<!--<form >-->
	 	    		<form action="index.php" method="post">
	 	    		<input class="form-control" name="uname" placeholder="Username"><br>
	 	    		<input class="form-control" type="Password"  name="pass" placeholder="Password.."><br>
	 	    		<input type="submit" value="login" name="login" class="btn btn-primary">.
	 	    		<input type="submit" value="Sign up" class="btn btn-primary">.
	 	    	</form>
	 	    </div>
	 	</div>
	 </div>
</body>
</html>