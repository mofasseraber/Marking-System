<?php

session_start();

if ( $_SESSION['logged_in'] != 1 ) 
{
  $_SESSION['message'] = "You must log in before viewing your profile page!";   
}
else 
{
    $email = $_SESSION['Email'];
    $name = $_SESSION['Name'];
	$adress = $_SESSION['Adress'];
	$number = $_SESSION['Number'];
	$type = $_SESSION['Type'];

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
		<li><a class="active" href="profile.php">Profile</a></li>
		<li><a href="update.php">Update</a></li>
		<li><a href="result.php">Certificates</a></li>
		<li><a href="logout.php">Logout</a></li>
		
	</ul>
	<div class="center">
	<h1> WELCOME </h1> 
	<h2><?= "$name" ?></h2>
	<p>Email: <?= "$email"?></p>
	<p>Adress: <?= "$adress" ?></p>
	<p>Phone Number: <?= "$number" ?></p>
	<p>Membership Type: <?= "$type" ?></p>
	
	</div>
</body>

<html>