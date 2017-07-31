<?php
	namespace VIEW;   												//视图层
   
    require_once($_SERVER["DOCUMENT_ROOT"]."/CORE/core.php");       //引入核心类页面
	require_once($_SERVER["DOCUMENT_ROOT"]."/VIEW/page.php");       //引入PAGE页面基类页面

	use CORE\core;				    //核心类
	use CORE\tools;                 //工具类
	use CORE\Curl;	                //CURL工具类
	use MODEL\group;      			//模型类 
	use SERVICE\service_test;       //服务类
	use VIEW\page;                  //页面基类

	class index extends page{

		public $title;				//页面标题

		function __construct(){
			parent::__construct();  //调用父类构造
			$this->title = "测试页面";
		}

		//单例
		static function getInstance(){
			$class = __CLASS__;
			return new $class;
		} 
		
		/**
		 * 测试视图方法
		 * @return
		 */
		function pagetest(){
			echo "页面PHP方法调用：<br>";
			$group = group::getInstance();
			$data = $group->test();

			echo($data["codedata"]["title"]."<br><br>");
		}

		/**
		 * 测试CURL工具类
		 * 
		 */
		function curl_sample(){

			
		}

		/**
		 * ajax调用测试
		 * @return
		 */
		static function ajaxtest(){
			$group = group::getInstance();
			$data = $group->test();

			ajaxreturn($data["codedata"]["title"]);
		}

	}
	$page = index::getInstance(); 		       	   
?>