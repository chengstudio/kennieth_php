<?php
    require_once($_SERVER["DOCUMENT_ROOT"]."/CORE/core.php");     //核心类
	require_once($_SERVER["DOCUMENT_ROOT"]."/VIEW/index.php");    //页面对应视图类
	//添加css
	$addcss = [""];   
	//添加js
	$addjs = [""];
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title><?=$page->title?></title>
<?=$page->commoncss($addcss)?>
<?=$page->commonjs($addjs)?>
</head>
<body>
<?php echo $page->pagetest(); ?>
</body>
</html>