## 此框架实际上是一系列的约定以便于在遵守约定的过程中提升开发效率

### 基本特点

 - 借鉴了部分 PRADO框架 与 ASP.NET WEBFORM 的思想
 - 每个前台PHP页面对应一个后台PAGE类，这个与 ASP.NET WEBFORM 和 JSF BACKBEAN 有点类似
 - 每个前台PHP页面对应一个JS脚本模块(jquery自动函数)
 - 每个页面均加载一个JQUERY的AJAXSETUP配置，与后台PAGE类对应，以简化AJAX调用后台类方法的过程，这个借鉴了 ASP.NET JQUERY 框架[webmethod]特性的远程调用方法的模式
 
### 命名空间结构
```
 根--\
     CORE         核心空间
     CORE\core    核心类
     CORE\tools   工具类
     
     DB           数据空间
     DB\database  数据库类
     DB\Medoo     第三方数据库HELPER
     
     MODEL        业务逻辑空间
     MODEL\*      业务逻辑类
     
     SERVICE      服务空间
     SERVICE\*    服务对接类，服务公开类
     
     VIEW         视图空间
     VIEW\page    视图基类
```

### 目录结构
```
 根--|
     |------CORE|
     |          |-core.php 核心类，autoload，数据库连接，等等
     |          |-tools.php 工具类
     |          |-其他第三方工具类
     |
     |--------DB|-database.php 数据库类
     |          |-Medoo.php    第三方数据库HELPER
     |
     |-----MODEL|-业务逻辑类
     |
     |---SERVICE|-对外提供服务或接入第三方服务类
     |
     |------VIEW|-页面后台类
     |          |-page.php 后台类基类
     |
     |------PAGE|-[js目录] javascript脚本
     |          |-[css目录] 样式表单
     |
     |所有PHP页面
```

### AJAX调用PHP后台方法示例 - ajax调用后台类的ajaxtest2方法直接echo出结果
```html
   //页面--------------

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
   </body>
   </html>

   //页面--------------
```
```javascript
//JS-------------

$(function(){
	ajax_test();
});

function ajax_test(){
	$.ajax({
	 	dataType: 'html',
	 	data: {method: 'ajaxtest2'},
	}).done(function(doc) {
		$('body').append("AJAX方法调用：<br>"+doc);
	});
}

//JS-------------
```
```php
//页面后台类------------

<?php
	namespace VIEW;   						//视图层
   
        require_once($_SERVER["DOCUMENT_ROOT"]."/CORE/core.php");       //引入核心类页面
	require_once($_SERVER["DOCUMENT_ROOT"]."/VIEW/page.php");       //引入PAGE页面基类页面

	use CORE\core;				                        //核心类
	use CORE\tools;                                                 //工具类
	use CORE\Curl;	                                                //CURL工具类
	use MODEL\group;      			                        //模型类 
	use SERVICE\service_test;                                       //服务类
	use VIEW\page;                                                  //页面基类

	class index extends page{

		public $title;				                //页面标题

		function __construct(){
			parent::__construct();                          //调用父类构造
			$this->title = "测试页面";
		}

		//单例
		static function getInstance(){
			$class = __CLASS__;
			return new $class;
		}

		/**
		 * ajax调用测试
		 * @return
		 */
		static function ajaxtest2(){
			$group = group::getInstance();
			echo json_encode($group->test());
		}

	}
	$page = index::getInstance(); 		       	   
?>

//页面后台类-------------
```

### 第三方数据HELPER使用方法
- [Medoo的主页](https://medoo.in/)
- [Medoo的GITHUB](https://github.com/catfan/Medoo)
