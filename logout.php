<?php
/* Log out process, unsets and destroys session variables */
session_start();
session_unset();
session_destroy(); 
?>
<!DOCTYPE html>
<html>
<head>
	<title>logout</title>
	
	<style>
		.center
			{
				text-align:center;
			}
		#button
			{
			background-color: white;
			color: #76b900;
			padding: 5px;
			}
	</style>
</head>

<body>
	<div class="center">
          <h1>See you next time!</h1>
              
          <p><?= 'You have been logged out!'; ?></p>
          
          <a href="index.php"><button id="button" />Home</button></a>

	</div>
</body>
</html>
