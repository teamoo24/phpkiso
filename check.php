<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
</head>
<body>
	<?php
		# phpでは$を使って変数宣言
		$nickname = $_POST['nickname'];
		$email = $_POST['email'];
		$goiken = $_POST['goiken'];
		# if文 (普通のif文のように使えば良い)
		# if(true or false) {	
		# } else {
		# }
		if($nickname == '') {
			print'ニックネームが入力されていません<br>';
		} else {
			print 'ようこそ';
			print $nickname;
			print '様';
			print '<br>';
		}
		if($email == '') {
			print'メールアドレスが設定されていません<br>';
		} else {
			print 'メールアドレス : ';
			print $email;
			print '<br>';
		}
		if($goiken == '') {
			print'ご意見が登録されていません。';
		} else {
			print 'ご意見『';
			print $goiken;
			print '』<br>';
		}
	?>
</body>
</html>