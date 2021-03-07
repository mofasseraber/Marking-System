<?php
//loggin in for admin
session_start();

	$username = $_POST["Name"];
	$password = $_POST["Password"];
	
	$dbc = mysqli_connect('localhost', 'BruceWayne', 'Iambatman', 'userdata');
	
	$sql = "SELECT * FROM admin where Name='$username' and Password='$password'";
	$result = $dbc->query($sql) or die("failed");
	
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	
	//checking if admin has put correct information or not
	if ($row['Name'] == $username && $row['Password'] == $password)
	{
		$_SESSION['Name'] = $row['Name'];
		$_SESSION['Password'] = $row['Password'];
		$_SESSION['logged_in'] = true;
			
		header ("location: adprofile.php");
	}
	else
	{
		echo "failed";
		header ("location: error.php");
	}

?>