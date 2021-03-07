<?php
//registering user
	session_start();
	$_SESSION ['message'] ='';
	$dbc = new mysqli('localhost', 'BruceWayne', 'Iambatman', 'userdata');
	
	if ($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		if($_POST['password'] == $_POST['password2'])
		{
			$username = $_POST['Name'];
			$email = $_POST['Email'];
			$password = $_POST['password'];
			$type = $_POST['Type'];
			
			
			$sql = "INSERT INTO userdata (Name, Email, Password, Type)
			VALUES ('$username', '$email', '$password', '$type')";
			
			if($dbc->query($sql) === true)
			{
				$_SESSION['message'] = 'Registration complete';
			}
		}
	}
?>

<!DOCKTYPE html>
<html>

<head>
	<title> Register member</title>
	
	<style>
	
	body { background-color: white;}
	
	.center
	{
		text-align:center;
	}
	
	ul /* Navigation bar */
	{
		list-style-type: none;
		margin: 0;
		padding: 0;
		overflow: hidden;
		background-color: #76b900;
	}
	li
	{
		float: left;
	}
	
	li a
	{
		font-family: arial;
		display: block;
		color: black;
		text-align: enter;
		padding: 16px 20px;
		text-decoration: none;
	}

	li a:hover:not(.active)
	{
		opacity: 0.5;
		Background-color:black;
		color: #76b900;
	}
	
	.active
	{
	background-color: black;
	color: #76b900;
	}
	
	#button
	{
		background-color: white;
		color: #76b900;
		padding: 5px;
	}
	
	#form
	{
		text-align:center;
		border: solid gray 2px;
		width: 30%;
		margin: 50px auto;
		background: #76b900;
	}
	
	</style>
</head>

<body>
	<ul>
		<li><a href="adprofile.php">Profile</a></li>
		<li><a class="active" href="register.php">Register member</a></li>
		<li><a href="regcert.php">Certificates</a></li>
		<li><a href="delete.php">Delete</a></li>
		<li><a href="updatead.php">Update</a></li>
		<li><a href="logout.php">Logout</a></li>
	</ul>
	
	<div class="center">
	
	<h2> Register Member </h2>
	
	<form method="post" id="form" action="register.php">
		<p>
			<label>Username <br></label>
			<input type="text" name="Name" required />
		</p>
		
		<p>
			<label> Email <br></label>
			<input type="email" name="Email" required />
		</p>
		
		<p>
			<label> Type(professional/normal) <br></label>
			<input type="text" name="Type" />
		</p>
		
		<p>
			<label> Password <br></label>
			<input type="password" name="password" required />
		</p>
		
		<p>
			<label> Confirm Password <br></label>
			<input type="password" name="password2" required />
		</p>
		
		<button type="submit" id="button" name="register"> Confirm </button>
	</form>
</div>
</body>
</html>