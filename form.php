


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<title>Document</title>
</head>
<body>
	<form action="temp.php" method="POST">
		<select name="subj">
			<option value="" disabled selected>Тема письма</option>
			<option value="1">Вопрос по обучению</option>
			<option value="2">Личный вопрос</option>
			<option value="3">Другое</option>
		</select>
	<input type="email" name="email" placeholder="type your email">
	<textarea name="msg" maxlength="150" placeholder="type your message"></textarea>
	<img src="./content/captcha.jpg" alt="">
	<input type="number" name="captcha" maxlength="3" placeholder="resolve captcha">
	<input type="submit" value="send">
	</form>
</body>
</html>