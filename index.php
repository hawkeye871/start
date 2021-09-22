<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php 
		$is_auth = mt_rand(0,2);
		$user_name = "Andrew";

	 
		if ($is_auth) {
			
	?>
	<div class="user-menu_image">
		<img src="$is_auth" alt="user" width="40" height="40">
	</div>	
	<div>
		<p></p>
	</div>

</body>
</html>
