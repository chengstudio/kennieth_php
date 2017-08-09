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

<div class=".container-fluid">
		
	<nav class="navbar navbar-default">
		<div class=".container-fluid">
			<div class=".navbar-header">
				<a class="navbar-brand" href="#">KENNY-PHP</a>
			</div>
			<div>
				<ul class="nav navbar-nav">
					<li><a href="#">HOME</a></li>
				</ul>
			</div>
		</div>
	</nav>

</div>
	
	

<?=$page->commonjs($addjs)?>
</body>
</html>