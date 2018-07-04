<?php 
	include('../functions.php');

	if (!isAdmin()) {
		$_SESSION['msg'] = "You must log in first";
		header('location: ../login.php');
	}

?>
<html>

<head>
	<title>Admin Page</title>
	<link rel="stylesheet" type="text/css" href="../style.css">
	
	<style>
	
	.header {
		background: #003366;
	}
	button[name=register_btn] {
		background: #003366;
	} 
   
 
	</style>
</head>
<body>
<div id="content">
	<div class="header">
		<h2>Admin - Home Page</h2>
	</div>
	<div class="content">
		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

		
		<div class="profile_info">
			<img src="../images/admin_profile.png"  >

			<div>
				<?php  if (isset($_SESSION['user'])) : ?>
					<strong><?php echo $_SESSION['user']['username']; ?></strong>
                    <div>
					<small>
						<i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
						<br>
						<a href="home.php?logout='1'" style="color: red;">logout</a>
					
					</small>
					</div>
					
			<?php

/*

VIEW.PHP

Displays all data from 'players' table

*/




// display data in table

echo "<p><b>View All Users</b> " ;

?>
<div>

	</div>
	<br>
	<div>
		<table border="1">
			<thead>
				<th>Id</th>
				<th>Username</th>
				<th>email</th>
				<th>User Policy</th>
				<th>User type</th>
				
				<th></th>
			</thead>
			<tbody>
				<?php
				$db = mysqli_connect('localhost', 'root', '', 'wiseinsurance');
                $view_users_query="select * from users";
                $result=mysqli_query($db,$view_users_query) or die(mysql_error());
					
			
					while($row=mysqli_fetch_array($result)){
						?>
						<tr>
							<td><?php echo $row['id']; ?></td>
							<td><?php echo $row['username']; ?></td>
							<td><?php echo $row['email']; ?></td>
							<td><?php echo $row['user_type']; ?></td>
							<td><?php echo $row['user_policy']; ?></td>
							<td>
								<a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
								<a href="delete.php?id=<?php echo $row['username']; ?>">Delete</a>
							</td>
						</tr>
						<?php
					}
				?>
			</tbody>
		</table>
	</div>
<p><a href="create_user.php">Add a new record</a></p>

				<?php endif ?>
			</div>
		</div>



	</div>
	</div>
		
</body>
</html>