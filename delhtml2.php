<?php
	//setting up variables.
	$servername = "localhost";
	$username = "BruceWayne";
	$password ="Iambatman";
	$dbname = "userdata";
	$name= $_POST['Name'];
	
	//connecting to database
	$dbc = mysqli_connect($servername, $username, $password, $dbname);
	
	if (!$dbc)
	{
		die("not connected:" .mysql_error());
	}
	
	//selecting databse where to delete from
	$sql= " SELECT * FROM html5 WHERE Name='$name'";
	$result = $dbc->query($sql) or die("failed");
	
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	if ($row['Name'] == $name)
	{
		$username = $row['Name'];
		//deleting member record
		$sql2 = "DELETE FROM html5 WHERE Name='$username'";
		if (mysqli_query($dbc, $sql2))
		{
			echo "Record deleted successfully";
			
			header ("location: delhtml.php");
		}
	}
?>