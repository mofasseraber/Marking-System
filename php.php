<?php
//showing the PHP certifate of user
session_start();

	$username = $_SESSION["Name"];

	
	$dbc = mysqli_connect('localhost', 'BruceWayne', 'Iambatman', 'userdata');
	
	$sql = "SELECT * FROM php where Name='$username' ";
	$result = $dbc->query($sql) or die("failed");
	
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	
	if ($row['Name'] == $username)
	{
		$mcq = $row["MCQ"];
		$sub1 = $row["Subjective1"];
		$sub2 = $row["Subjective2"];
		$total = $mcq + $sub1 + $sub2;
	}
?>

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
	
	
	</style>
</head>

<body>
	<ul>
		<li><a href="profile.php">Profile</a></li>
		<li><a href="update.php">Update</a></li>
		<li><a class="active" href="result.php">Certificates</a></li>
		<li><a href="logout.php">Logout</a></li>
	</ul>
	<h2> PHP Certificate </h2>
	<p> MCQ:<?= "$mcq" ?></p>
	<p> Subjective1: <?= "$sub1" ?></p>
	<p> Subjective2: <?= "$sub2" ?></p>
	<p> Total: <?= "$total" ?></p>
	<?php 
	if ($total >= 80)
	{
		echo "Disticntion";
	}
	else if ($total >= 60)
	{
		echo "Merit";
	}
	else if ($total >= 50)
	{
		echo "Pass";
	}
	else if ($total < 50)
	{
		echo "Not satisfactory";
	}
	?>
</body>

</html>