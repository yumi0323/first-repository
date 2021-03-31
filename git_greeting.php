<?php
date_default_timezone_set('Asia/Tokyo');

$h = date("H");

if ($h < 10) {
	$greeting = "おっはー";
} elseif ($h < 18) {
	$greeting = "こんちゃ";
} else {
	$greeting =  "ばんわー";
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>課題２０</title>
</head>
<body>
<h1>GREETING</h1>
<p><?php echo $greeting; ?></p>
</body>
</html>
