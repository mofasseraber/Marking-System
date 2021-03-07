<?php
//changing member information by admin

	session_start();
	$_SESSION ['message'] ='';
	$dbc = new mysqli('localhost', 'BruceWayne', 'Iambatman', 'userdata');
	
	$name = $_SESSION['Name'];
	$username = $_POST['Name'];
	$password = $_POST['Password'];
	$type = $_POST['Type'];
	
		if (!empty($password))
		{
		$query2 = "UPDATE userdata SET Password='$password' WHERE Name = '$name'";
		$result = mysqli_query($dbc, $query2);
		}
		
		if (!empty($type))
		{
		$query3 = "UPDATE userdata SET Type='$type' WHERE Name = '$name'";
		$result = mysqli_query($dbc, $query3);
		}
				
		if (!empty($username))
		{
			$query = "UPDATE userdata SET Name='$username' WHERE Name = '$name'";
			$result = mysqli_query($dbc, $query);
		}
		
		
		if ((mysqli_query($dbc, $query))||(mysqli_query($dbc, $query2))||(mysqli_query($dbc, $query3)))
			{
				echo "Record updated successfully";
				
				header ("location: upmem.php");
			}
		else
		{
			header ("location: upmem.php");
		}
	
?>
