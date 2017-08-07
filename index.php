<?php
	require_once($_SERVER["DOCUMENT_ROOT"]."/VIEW/index.php");    //页面对应视图类
	$addcss = [""];   //添加css   	
	$addjs = [""];   //添加js
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title><?=$page->title?></title>
<?=$page->commoncss($addcss)?>
</head>
<body>





<?=$page->commonjs($addjs)?>
</body>
</html>