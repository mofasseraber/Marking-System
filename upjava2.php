<?php
//updating java certificate for user
	session_start();
	//setting up variables.
	$servername = "localhost";
	$username = "BruceWayne";
	$password ="Iambatman";
	$dbname = "userdata";
	$name= $_POST['Name'];
	$dbc = mysqli_connect($servername, $username, $password, $dbname);
	
	if (!$dbc)
	{
		die("not connected:" .mysql_error());
	}
	
	$sql= " SELECT * FROM javascript WHERE Name='$name'";
	$result = $dbc->query($sql) or die("failed");
	
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	if ($row['Name'] == $name)
	{
		$_SESSION['Name'] = $row['Name'];
		
		header("location: upjava3.php");
	}
?>