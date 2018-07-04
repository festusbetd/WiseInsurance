<?php
	include('db.php');
	$id=$_GET['id'];
	$query=mysqli_query($conn,"select * from `users` where id='$id'");
	$row=mysqli_fetch_array($query);
?>
<html>
<head>
<title>Edit Commands</title>
</head>
<body>
	<h2>Edit</h2>
	<form method="POST" action="update.php?id=<?php echo $id; ?>">
		<label>Username:</label><input type="text" value="<?php echo $row['username']; ?>" name="username">
		<label>Email:</label><input type="text" value="<?php echo $row['email']; ?>" name="email">
			<label>User Type:</label><input type="text" value="<?php echo $row['user_type']; ?>" name="user_type">
			
		<input type="submit" name="submit">
		<a href="home.php">Back</a>
	</form>
</body>
</html>