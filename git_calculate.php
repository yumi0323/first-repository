<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>課題２０</title>
</head>
<body>
<h1>出力結果</h1>
<?php
for ($i = 1; $i <= 50; $i++) {
	echo $i;
	if (($i % 3) == 0) {
		echo 'プロサー';
	}
	echo '<br>';
}
?>
<h1>出力結果</h1>
</body>
</html>

