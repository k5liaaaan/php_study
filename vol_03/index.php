<?php //var_dump($_POST); ?>

<?php

	if( !empty($_POST['btn_submit']) ) {
		var_dump($_POST);
	}
?>


<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>PHP掲示板vol03</title>
<link rel="stylesheet" text="style/css" href="common.css">

</head>
<body>
<h1>PHP掲示板</h1>
<form method="post">
	<div>
		<label for="view_name">表示名</label>
		<input id="view_name" type="text" name="view_name" value="">
	</div>
	<div>
		<label for="message">メッセージ</label>
		<textarea id="message" name="message"></textarea>
	</div>
	<input type="submit" name="btn_submit" value="書き込む">
</form>
<hr>
<section>
<!-- ここに投稿されたメッセージを表示 -->
</section>
</body>
</html>