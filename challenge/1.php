<html>
	<head>
		<title>Challenge 1</title>
	</head>
	<body>
		<form action="" method="POST">
			<h2>Please write your name</h2>
			<input type="text" name="name">
			<input type="submit" value="Submit Name">
		</form>
		<!--Starting the PHP program-->
		<?php 
			
			/*Retrivining the data*/
			$name = $_POST['name'];

			/* Priniting the name*/
			echo "<h3>Hello $name</h3";
		?>
	</body>
</html>