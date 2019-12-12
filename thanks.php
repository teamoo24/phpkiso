<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
</head>
<body>
	<?php
		# check.phpでhiddenで宣言した変数を受け取る
		$nickname = $_POST['nickname'];
		$email = $_POST['email'];
		$goiken = $_POST['goiken'];

		# 受け取ったPOST変数を使う
		print $nickname;
		print '様<br>';
		print 'ご意見ありがとうございました。<br>';
		print '頂いたご意見『'.$goiken.'』<br>';
		print $email.'にメールを送りましたのでご確認ください。';

	?>
</body>
</html>