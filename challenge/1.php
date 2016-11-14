<html>
	<head>
		<title>Challenge 1</title>
	</head>
	<body>
		<form action="" method="POST">
			<h3>Name:</h3>
			<input type="text" name="name">
			<input type="submit" value="Submit Name">
		</form>
		<!--Starting the PHP programming -->
		<?php 
		/* retriving the data*/
		$name = $_POST['name'];
		/*Printing the name*/
		echo "<h3>Hello $name</h3>";
		?>
	</body>
</html>