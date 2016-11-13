<html>
	
	<head>
		<h1>This lesson is about functions that cotain pramiters</h1>
	</head>
	<body>
		<?php  
			function simpleFunction($number1, $number2) {
				$total = $number1 + $number2;

				echo "sum of the two numbers is : $total";
			}

			simpleFunction(20.4, 3)


		?>
	</body>
</html>