<?php
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

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">首页</a></li>
        <li class="dropdown">
        	<a class="dropdown-toggle" data-toggle="dropdown" href="#">配置
        		<span class="caret"></span>
        	</a>
        	<ul class="dropdown-menu">
        		<li><a href="#">配置1</a></li>
        		<li><a href="#">配置2</a></li>
        		<li><a href="#">配置3</a></li>
        	</ul>
        </li>
        <li><a href="#">设置</a></li>
        <li><a href="#">帮助</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron">
    <h1>Bootstrap Tutorial</h1> 
    <p>Bootstrap is the most popular HTML, CSS, and JS framework for developing
    responsive, mobile-first projects on the web.</p> 
</div>



</body>
</html>