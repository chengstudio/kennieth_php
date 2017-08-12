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

<div class="header">

    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">KENNY-PHP</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-left">
            <li class="dropdown">
				<button type="button" class="btn btn-default navbar-btn dropdown-toggle" data-toggle="dropdown"> 
				 	<span class="glyphicon glyphicon-list">
				 	</span>
				</button>
				<span class="badge alert-danger">12</span>
				<ul class="dropdown-menu">
					<div class="notify-arrow notify-arrow-red"></div>
					<div class="notify-div notify-div-red text-white">待处理订单12个</div>
					<li><a href="#">list1</a></li>
					<li><a href="#">list2</a></li>
					<li><a href="#">list3</a></li>
				</ul>
			</li>
			<li class="dropdown">
				<button type="button" class="btn btn-default navbar-btn dropdown-toggle" data-toggle="dropdown"> 
				 	<span class="glyphicon glyphicon-bell">
				 	</span>
				</button>
				<span class="badge alert-danger">9</span>
				<ul class="dropdown-menu">
					<div class="notify-arrow notify-arrow-red"></div>
					<div class="notify-div notify-div-red text-white">待处理客户留言9个</div>
					<li><a href="#">SET1</a></li>
					<li><a href="#">SET1</a></li>
					<li><a href="#">SET1</a></li>
				</ul>
			</li>
			<li class="dropdown">
				<button type="button" class="btn btn-default navbar-btn dropdown-toggle" data-toggle="dropdown"> 
				 	<span class="glyphicon glyphicon-envelope">
				 	</span>
				</button>
				<span class="badge alert-danger">9</span>
				<ul class="dropdown-menu">
					<div class="notify-arrow notify-arrow-red"></div>
					<div class="notify-div notify-div-red text-white">待处理系统信息9条</div>
					<li><a href="#">SET1</a></li>
					<li><a href="#">SET1</a></li>
					<li><a href="#">SET1</a></li>
					<li><a href="#">SET1</a></li>
				</ul>
			</li>
          </ul>
        </div>
      </div>
    </nav>

</div>

<div class="right">
	
</div>

<?=$page->commonjs($addjs)?>
</body>
</html>
<?php
	//$page->dbtest();
?>
