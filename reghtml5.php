<?php
//registering html5 certificate for user
	session_start();
	$_SESSION ['message'] ='';
	$dbc = new mysqli('localhost', 'BruceWayne', 'Iambatman', 'userdata');
	
	if ($_SERVER['REQUEST_METHOD'] == 'POST')
	{

			$username = $_POST['Name'];
			$mcq = $_POST['MCQ'];
			$sub1 = $_POST['Subjective1'];
			$sub2 = $_POST['Subjective2'];
			
			
			$sql = "INSERT INTO html5 (Name, MCQ, Subjective1, Subjective2)
			VALUES ('$username', '$mcq', '$sub1', '$sub2')";
			
			if($dbc->query($sql) === true)
			{
				$_SESSION['message'] = 'Certificate added.';
			}

	}
?>

<!DOCKTYPE html>
<html>

<head>
	<title> Register Certificate</title>
	
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
		<li><a href="register.php">Register member</a></li>
		<li><a class="active" href="regcert.php">Certificates</a></li>
		<li><a href="delete.php">Delete</a></li>
		<li><a href="updatead.php">Update</a></li>
		<li><a href="logout.php">Logout</a></li>
	</ul>
	
	<div class="center">
	
	<h2> Register HTML5 Certificate </h2>
	
	<form method="post" id="form" action="reghtml5.php">
		<p>
			<label>Username <br></label>
			<input type="text" name="Name" required />
		</p>
		
		<p>
			<label> MCQ <br></label>
			<input type="text" name="MCQ" required />
		</p>
		
		<p>
			<label> Subjective1 <br></label>
			<input type="text" name="Subjective1" />
		</p>
		
		<p>
			<label> Subjective2 <br></label>
			<input type="text" name="Subjective2" required />
		</p>
		
		<button type="submit" id="button" name="register"> Confirm </button>
	</form>
</div>
</body>
</html>