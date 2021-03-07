<?php
//loggin in user
session_start();

	$username = $_POST["Name"];
	$password = $_POST["Password"];
	
	$dbc = mysqli_connect('localhost', 'BruceWayne', 'Iambatman', 'userdata');
	
	$sql = "SELECT * FROM userdata where Name='$username' and Password='$password'";
	$result = $dbc->query($sql) or die("failed");
	
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	
	//verifying the user by comparing name and password with the database record
	if ($row['Name'] == $username && $row['Password'] == $password)
	{
		$_SESSION['Email'] = $row['Email'];
		$_SESSION['Name'] = $row['Name'];
		$_SESSION['Adress'] = $row['Adress'];
		$_SESSION['Number'] = $row['Number'];
		$_SESSION['Type'] = $row['Type'];

		$_SESSION['logged_in'] = true;
			
		header ("location: profile.php");
	}
	else
	{
		echo "failed";
		header ("location: error.php");
	}

?>