<?php
//updating member information by members
session_start();
	
	//setting up variables.
	$servername = "localhost";
	$username = "BruceWayne";
	$password ="Iambatman";
	$dbname = "userdata";
	$editemail = $_POST['email'];
	$editaddress = $_POST['address'];
	$editnumber = $_POST['number'];
	$name = $_SESSION['Name'];

	//connecting to the database.
	$dbc = mysqli_connect($servername, $username, $password, $dbname);
	
	if (!$dbc)
	{
		die("not connected:" .mysql_error());
	}

	//updating info in database.
	if (!empty($editemail))
	{
		$query = "UPDATE userdata SET Email='$editemail' WHERE Name = '$name'";
		$result = mysqli_query($dbc, $query);
	}
	
	if (!empty($editaddress))
	{
	$query2 = "UPDATE userdata SET Adress='$editaddress' WHERE Name = '$name'";
	$result = mysqli_query($dbc, $query2);
	}
	
	if (!empty($editnumber))
	{
	$query3 = "UPDATE userdata SET Number='$editnumber' WHERE Name = '$name'";
	$result = mysqli_query($dbc, $query3);
	}
	
	if ((mysqli_query($dbc, $query))||(mysqli_query($dbc, $query))||(mysqli_query($dbc, $query)))
		{
			echo "Record updated successfully";
			
			header ("location: update.php");
		}
	else
	{
		header ("location: update.php");
	}
?>