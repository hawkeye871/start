<?php 
	if ($_POST['captcha']!=250) {
		header('location:form.php');
		exit;
	}
	if ($_POST['subj'] == "1") {
		$subj = "Вопрос по обучению";
	}elseif ($_POST['subj'] == "2") {
		$subj = "Личный вопрос";
	}elseif ($_POST['subj'] == "3") {
		$subj = "Другое";
	}
	else{
		$subj = "Вопрос по обучению";
	}
	$to = "radchenko.a@ztmc.zp.ua";
	$from = trim($_POST['email']);

	$msg = htmlspecialchars($_POST['msg']);
	$msg = urldecode($msg);
	$msg = trim($msg);

	$headers = "From: $from" . "\r\n" .
	"Reply-To: $from" . "\r\n" .
	"X-Mailer: PHP/" . phpversion();




	if (mail($to, $subj, $msg, $headers)) {
		echo "$msg snt";
	}
 ?>