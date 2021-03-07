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
	
	//selecting table
	$sql= " SELECT * FROM userdata WHERE Name='$name'";
	$result = $dbc->query($sql) or die("failed");
	
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	if ($row['Name'] == $name)
	{
		$username = $row['Name'];
		
		//deleting record from selected table
		$sql2 = "DELETE FROM userdata WHERE Name='$username'";
		if (mysqli_query($dbc, $sql2))
		{
			echo "Record deleted successfully";
			
			header ("location: delmem.php");
		}
	}
?>