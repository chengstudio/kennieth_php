<?php
	namespace COMMON;
	use DB\database;

	//composer依赖工具的autoload
	require_once($_SERVER["DOCUMENT_ROOT"]."/COMMON/vendor/autoload.php");
	
	class core{

		function __construct(){
			$this->class_load();
			$this->database_load();
		}

		//自动加载
		private function class_load(){
			spl_autoload_register(function($class) {
			  $class = str_replace('\\', '/', $class);
			  include $class.".php";
			}, false);
		}	

		//数据库加载
		private function database_load(){
			$database = new database;
		}

	}
	$core = new core;

?>