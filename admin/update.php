<?php
	include('db.php');
	$id=$_GET['id'];
	
	$username=$_POST['username'];
	$email=$_POST['email'];
	$username=$_POST['username'];
	

	
	mysqli_query($conn,"update `users` set username='$username', email='$email' , username='$username' where id='$id'");
	header('location:home.php');
?>