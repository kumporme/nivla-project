



<?php
	session_start();
	if(!$_SESSION['username']){
		header("location: login.php");
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Login Form</title>
		<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.css"/>
		<script type="text/javascript" SRC="assets/jquery-2.0.0.js"></script>
		<script type="text/javascript" SRC="assets/jquery.validate.js"></script>
		
		<style type="text/css">
			
			body{
			background-image:url('assets/img/wall.jpg');
			background-repeat: no-repeat;
			background-attachment:fixed;
			background-size:100% 135%;
		}	
			
		p{
			color: gray;
		}	
			
		h4{
			text-shadow: 1px 3px 5px green;
		}
			
			form.well{
			background-color:black;
			margin:0px auto;
			margin-top:150px;
			margin-right: 0px auto;
			
			/*box shadow*/
			-moz-box-shadow: 5px 5px 5px  	#303030 ;
			-webkit-box-shadow: 5px 5px 5px  	#303030 ;
			box-shadow: 5px 5px 5px  	#303030 ;
			
}

		</style>
	</head>
	<body>
			<form id="form_id" class="well" method="post" action="create_topics.php" target="" style="width:240px;" >
				<input type="text" name='title' id="user"  maxlength="30" required="required" placeholder="Title"/>
				<input type="hidden" name='username' id="user" value="<?php echo $_SESSION['username']; ?>" maxlength="20" placeholder="Title"/>
				<input type="hidden" name='topic_id' id="user"   placeholder="Title"/>
					
				<textarea name='body' placeholder="Body" required="required"></textarea><br/>
			    <input type="submit" name='submit' value="Submit" class="btn btn-primary" id="btn" style="margin-left:150px;"></input><br>
				<a href="home.php">Cancel</a>
			</form>
	</body>
	<?php include 'create_top.php'?>
</html>
			