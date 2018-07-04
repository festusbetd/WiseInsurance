<?php
  include("db.php");  
	$id =$_REQUEST['id'];
	
	// sending query
	mysqli_query($conn,"DELETE FROM `users` WHERE `id` = '{$id}' ")
	or die(mysql_error());  	
	
	header("Location: home.php");
?>