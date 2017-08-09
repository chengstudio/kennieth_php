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
					<li><a href="#">HOT</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							CONFIG
							<span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
							<li><a href="#">SET1</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<button type="button" class="btn btn-default navbar-btn dropdown-toggle" data-toggle="dropdown"> 
						 	<span class="glyphicon glyphicon-cog">
						 	</span>
						</button>
						<span class="badge alert-danger">99</span>
						<ul class="dropdown-menu">
							<li><a href="#">SET1</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<button type="button" class="btn btn-default navbar-btn dropdown-toggle" data-toggle="dropdown"> 
						 	<span class="glyphicon glyphicon-heart">
						 	</span>
						</button>
						<span class="badge alert-danger">99</span>
						<ul class="dropdown-menu">
							<li><a href="#">SET1</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<button type="button" class="btn btn-default navbar-btn dropdown-toggle" data-toggle="dropdown"> 
						 	<span class="glyphicon glyphicon-user">
						 	</span>
						</button>
						<span class="badge alert-danger">99</span>
						<ul class="dropdown-menu">
							<li><a href="#">SET1</a></li>
						</ul>
					</li>
				</ul>
			</div>
			<div> 
				 
			</div> 
		</div>
	</nav>

</div>
	
	

<?=$page->commonjs($addjs)?>
</body>
</html>