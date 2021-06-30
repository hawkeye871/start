<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

	<?php 
		
		

			$arr = ['banana', 'apple', 'strawberry'];
			$arr2 = [];
			$arr3 = [];
			$j = 0;
			sort($arr);

			for($i = count($arr)-1; $i>=0;$i--){
				$arr2[$j]=$arr[$i];
				$j++;
			}
			echo "<pre>";
			print_r($arr);
			echo "</pre>";


			echo "<pre>";
			print_r($arr2);
			echo "</pre>";
					 
		
		?>

		



	
</body>
</html>



dominionvin@gmail.com
