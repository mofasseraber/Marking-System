<! DOCKTYPE html>

<html>

<head>

	<title> Member login </title>

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
	
	#form
	{
		text-align:center;
		border: solid gray 2px;
		width: 30%;
		margin: 50px auto;
		background: #76b900;
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
		<li><a href="index.php">Admin</a></li>
		<li><a class="active" href="memlogin.php">Member</a></li>
	</ul>
	
	<div id="form">
		<form name="form" method="post" action="login.php">
		
		<p>
			<label> Username: </label>
			<input type="text" id ="user "name="Name" required /> 
		</p>
		
		<p>
			<label> Password: </label>
			<input type="password" id="pass" name="Password" required />
		</p>
		
		<p>
			<button type="submit" id="button" value="login" /> Login </button>
		</p>
		
		</form>
	</div>

</body>

</html>