<?php
$omikuji = array("鏡","くし","ハンカチ");
$todays = rand(0, count($omikuji)-1);
$result = $omikuji[$todays];
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>課題２０</title>
</head>
<body>
<h1>今日の名言</h1>
<p>今日のあなたのラッキーアイテムは、<span>【<?php echo $result; ?>】</span>です！</p>
<p>今日も一日がんばりましょう！</p>
</body>
</html>
