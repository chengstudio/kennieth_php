<?php
	require_once($_SERVER["DOCUMENT_ROOT"]."/PRESENTER/index.php");    //页面对应视图类
	$addcss = [""];   //添加css   	
	$addjs = [""];   //添加js
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta charset="utf-8">
<title><?=$page->title?></title>
<?=$page->commoncss($addcss)?>
</head>
<body>

<div class="header">
	
	<div class="top">

		<div class="logo">
			<span class="sh-menu glyphicon glyphicon-align-justify"></span>
			KENNY-PHP
		</div>

		<div class="dropdown">
			<button type="button" class="ms-btn btn btn-default dropdown-toggle" data-toggle="dropdown"> 
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
		</div>

		<div class="dropdown">
			<button type="button" class="ms-btn btn btn-default dropdown-toggle" data-toggle="dropdown"> 
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
		</div>

		<div class="dropdown">
			<button type="button" class="ms-btn btn btn-default dropdown-toggle" data-toggle="dropdown"> 
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
		</div>
	</div>

</div>


<div class="content container-fluid">
	
    <div class="row affix-row">
	    <div class="col-md-2 affix-sidebar">
			<div class="sidebar-nav">
				<div class="navbar navbar-default" role="navigation">
				    <div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						</button>
						<span class="visible-xs navbar-brand">菜单</span>
				    </div>
				    <div class="navbar-collapse collapse sidebar-navbar-collapse">
				        <ul class="nav navbar-nav" id="sidenav01">
					        <li>
					          <a href="#" data-toggle="collapse" data-target="#toggleDemo" data-parent="#sidenav01" class="collapsed">
					          <span class="glyphicon glyphicon-cloud"></span> Submenu 1 <span class="caret pull-right"></span>
					          </a>
					          <div class="collapse" id="toggleDemo" style="height: 0px;">
					            <ul class="nav nav-list">
					              <li><a href="#">Submenu1.1</a></li>
					              <li><a href="#">Submenu1.2</a></li>
					              <li><a href="#">Submenu1.3</a></li>
					            </ul>
					          </div>
					        </li>
					        <li>
					          <a href="#" data-toggle="collapse" data-target="#toggleDemo2" data-parent="#sidenav01" class="collapsed">
					          <span class="glyphicon glyphicon-inbox"></span> Submenu 2 <span class="caret pull-right"></span>
					          </a>
					          <div class="collapse" id="toggleDemo2" style="height: 0px;">
					            <ul class="nav nav-list">
					              <li><a href="#">Submenu2.1</a></li>
					              <li><a href="#">Submenu2.2</a></li>
					              <li><a href="#">Submenu2.3</a></li>
					            </ul>
					          </div>
					        </li>
					        <li><a href="#"><span class="glyphicon glyphicon-lock"></span> Normalmenu</a></li>
					        <li><a href="#"><span class="glyphicon glyphicon-calendar"></span> WithBadges <span class="badge alert-danger pull-right">42</span></a></li>
					        <li><a href=""><span class="glyphicon glyphicon-cog"></span> PreferencesMenu</a></li>
				      	</ul>
				    </div><!--/.nav-collapse -->
				</div>
	  		</div>
	    </div>

	    <div class="col-md-10 affix-content">
			<div class="row">
				<div class="col_1 col-md-3">
					<div class="col_1_content">
					</div>
				</div>
				<div class="col_1 col-md-3">
					<div class="col_1_content">
					</div>
				</div>
				<div class="col_1 col-md-3">
					<div class="col_1_content">
					</div>
				</div>
				<div class="col_1 col-md-3">
					<div class="col_1_content">
					</div>
				</div>
			</div>
		</div>
	</div>

</div>


<?=$page->commonjs($addjs)?>
</body>
</html>
<?php
	//$page->dbtest();
?>
