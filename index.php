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
	
	<div class="container">
		<div class="row">
			<div class=".col-xs-12">

				<nav class="navbar navbar-default" role="navigation">
					<div class="container-fluid">
				    <div class="navbar-header">
				        <a class="navbar-brand" href="#"><b>KENNY-PHP</b></a>
				    </div>
				    <div>
				        <ul class="nav navbar-nav">
				            <li>
				            	<a href="#" style="margin-top:5px;margin-right:-10px;">
				            		<span class="glyphicon glyphicon-home"></span>
				            	</a>
				            </li>
				            <li>
				            	<a href="#" class="dropdown-toggle" data-toggle="dropdown"  style="padding-top:20px;">
				            		<span class="glyphicon glyphicon-cog"></span>
				            		<span class="badge pull-right alert-danger" style="margin-top:-10px;margin-left:-2px">3</span>
				            	</a>
				            	<ul class="dropdown-menu">
				                    <li><a href="#">jmeter</a></li>
				                    <li><a href="#">EJB</a></li>
				                    <li><a href="#">Jasper Report</a></li>
				                    <li class="divider"></li>
				                    <li><a href="#">分离的链接</a></li>
				                    <li class="divider"></li>
				                    <li><a href="#">另一个分离的链接</a></li>
				                </ul>
				            </li>
				            <li class="dropdown">
				                <a href="#" class="dropdown-toggle" data-toggle="dropdown"  style="padding-top:20px;">
				                	 <span class="glyphicon glyphicon-fire"></span>  
				                	 <span class="badge pull-right" style="margin-top:-10px;margin-left:-2px">3</span>
				                </a>
				                <ul class="dropdown-menu">
				                    <li><a href="#">jmeter</a></li>
				                    <li><a href="#">EJB</a></li>
				                    <li><a href="#">Jasper Report</a></li>
				                    <li class="divider"></li>
				                    <li><a href="#">分离的链接</a></li>
				                    <li class="divider"></li>
				                    <li><a href="#">另一个分离的链接</a></li>
				                </ul>
				            </li>
				        </ul>
				    </div>
				    </div>
				</nav>

			</div>
		</div>
	</div>

<?=$page->commonjs($addjs)?>
</body>
</html>