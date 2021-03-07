
<! DOCKTYPE html>
<html>

<head>

	<title> Update </title>

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
	#form
	{
	border: solid gray 1px;
	width: 20%;
	border-radius: 5px;
	margin: 100px auto;
	background: white;
	padding: 2px;
	text-align: center;
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
	
	</style>
</head>

<body>

	<ul>
		<li><a href="profile.php">Profile</a></li>
		<li><a class="active" href="update.php">Update</a></li>
		<li><a href="result.php">Certificates</a></li>
		<li><a href="logout.php">Logout</a></li>
	</ul>
	
	<div id="form">
	<form name="form" method="POST" action="update2.php">
		
		<p>
			<label> Email: <br></label>
			<input type="email" name="email" /> 
		</p>
		
		<p>
			<label> Address: <br></label>
			<input type="text" name="address" /> 
		</p>
		
		<p>
			<label> Phone number: <br></label>
			<input type="text" name="number" /> 
		</p>
		
		<p>
			<button type="submit" id="button" value="submit" /> update </button>
		</p>
		
	</form>
	</div>
</body>
</html>