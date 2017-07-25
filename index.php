<?php
    require_once($_SERVER["DOCUMENT_ROOT"]."/CORE/core.php");
	require_once($_SERVER["DOCUMENT_ROOT"]."/VIEW/index.php");
	$page->pagetest();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?=$page->title?></title>
	<?php $page->commoncss($addcss);//css?>
</head>
<body>

</body>
<?php $page->commonjs($addjs);//js?>
</html>