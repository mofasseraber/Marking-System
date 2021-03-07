<!DOCKTYPE html>
<html>

<head>
	<title> Certificates </title>
	
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
	
	.link
	{
		color: #76b900;
	}
	
	</style>
</head>

<body>
	<ul>
		<li><a href="profile.php">Profile</a></li>
		<li><a href="update.php">Update</a></li>
		<li><a class="active" href="result.php">Certificates</a></li>
		<li><a href="logout.php">Logout</a></li>
	</ul>
	
	<div class="center">
	<h2> <a class="link" href="html5.php"> Html5 Certificate </a> </h2>
	<h2> <a class="link" href="javascript.php"> Javascript Certificate </a> </h2>
	<h2> <a class="link" href="php.php"> Php Certificate </a> </h2>
	<div>
	
</body>

</html>