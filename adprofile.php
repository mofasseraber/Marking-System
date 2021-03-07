<?php
//create session of admin profile
session_start();

if ( $_SESSION['logged_in'] != 1 ) 
{
  $_SESSION['message'] = "You must log in before viewing your profile page!";   
}
else 
{
    $name = $_SESSION['Name'];
}

?>

<!DOCKTYPE html>
<html>

<head>
	<title> Profile </title>
	
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
	
	</style>
</head>

<body>
	<ul>
		<li><a class="active" href="adprofile.php">Profile</a></li>
		<li><a href="register.php">Register member</a></li>
		<li><a href="regcert.php">Certificates</a></li>
		<li><a href="delete.php">Delete</a></li>
		<li><a href="updatead.php">Update</a></li>
		<li><a href="logout.php">Logout</a></li>
	</ul>
	
	<div class="center">
	<h2> WELCOME <h2>
	<h2> Admin </h2>
	</div>
</body>

</html>