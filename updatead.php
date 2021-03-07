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
	
	.link
	{
		color: #76b900;
	}
	</style>
</head>

<body>
	<ul>
		<li><a href="adprofile.php">Profile</a></li>
		<li><a href="register.php">Register member</a></li>
		<li><a href="regcert.php">Certificates</a></li>
		<li><a href="delete.php">Delete</a></li>
		<li><a class="active" href="updatead.php">Update</a></li>
		<li><a href="logout.php">Logout</a></li>
	</ul>
	
	<div class="center">
	<h2> <a class="link" href="upmem.php"> Update Member </a> </h2>
	<h2> <a class="link" href="uphtml.php"> Update html5 Certificate </a> </h2>
	<h2> <a class="link" href="upjava.php"> Update Javascript Certificate </a> </h2>
	<h2> <a class="link" href="upphp.php"> Update Php Certificate </a> </h2>
	<div>
	
</body>

</html>