
<?php 
	include('functions.php');
	if (!isLoggedIn()) {
		session_start();

		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}
?>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Home Page</h2>
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
			<img src="images/user_profile.png"  >

			<div>
				<?php  if (isset($_SESSION['user'])) : ?>
					<strong><?php echo $_SESSION['user']['username']; ?></strong>

					<small>
						<i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
						<br>
						<a href="index.php?logout='1'" style="color: red;">logout</a>
					</small>

				<?php endif ?>
			</div>
			<div>
			<div>
			
			<?php
$db = mysqli_connect('localhost', 'root', '', 'wiseinsurance');
 $view_users_query="select * from users WHERE username='".$_SESSION['user']['username'] ."'"; 
        $result=mysqli_query($db,$view_users_query) or die(mysql_error());



// display data in table

echo "<p><b>Profile</b> " ;



echo "<table border='1' cellpadding='10'>";

echo "<tr> 
<th>ID</th>
 <th>First Name</th> 
 <th>Last Name</th>
 <th>User Policy</th>  

</tr>";


// loop through results of database query, displaying them in the table
while($row=mysqli_fetch_array($result)) {



// echo out the contents of each row into a table

echo "<tr>";

echo '<td>' . $row['id'] . '</td>';
echo '<td>' . $row['username'] . '</td>';
echo '<td>' . $row['email'] . '</td>';
echo '<td>' . $row['user_policy'] . '</td>';



echo "</tr>";

 

}



// close table>

echo "</table>";

?>
			</div>
			
		</div>
	</div>
</body>
</html>