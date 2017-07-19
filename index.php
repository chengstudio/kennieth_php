<?php
    require_once($_SERVER["DOCUMENT_ROOT"]."/COMMON/core.php");
	require_once($_SERVER["DOCUMENT_ROOT"]."/VIEW/index.php");
	$page->pagetest();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<?php
		$addcss = [];		           //添加css 
		$page->commoncss($addcss);     //css
	?>
</head>
<body>

</body>
<?php 
	$addjs = [];		       		   //添加js
	$page->commonjs($addjs);           //js
?>
</html>