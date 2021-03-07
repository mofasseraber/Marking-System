<?php
//updating java certificate of users
	session_start();
	$_SESSION ['message'] ='';
	$dbc = new mysqli('localhost', 'BruceWayne', 'Iambatman', 'userdata');
	
	$name = $_SESSION['Name'];
	$username = $_POST['Name'];
	$mcq = $_POST['MCQ'];
	$sub1 = $_POST['Sub1'];
	$sub2 = $_POST['Sub2'];
			
		
		
		if (!empty($mcq))
		{
		$query2 = "UPDATE javascript SET MCQ='$mcq' WHERE Name = '$name'";
		$result = mysqli_query($dbc, $query2);
		}
		
		if (!empty($sub1))
		{
		$query3 = "UPDATE javascript SET Subjective1='$sub1' WHERE Name = '$name'";
		$result = mysqli_query($dbc, $query3);
		}
		
		if (!empty($sub2))
		{
		$query4 = "UPDATE javascript SET Subjective2='$sub2' WHERE Name = '$name'";
		$result = mysqli_query($dbc, $query4);
		}
		
		if (!empty($username))
		{
			$query = "UPDATE javascript SET Name='$username' WHERE Name = '$name'";
			$result = mysqli_query($dbc, $query);
		}
		
		if ((mysqli_query($dbc, $query))||(mysqli_query($dbc, $query2))||(mysqli_query($dbc, $query3))||(mysqli_query($dbc, $query4)))
			{
				echo "Record updated successfully";
				
				header ("location: upjava.php");
			}
		else
		{
			header ("location: upjava3.php");
		}
	
?>