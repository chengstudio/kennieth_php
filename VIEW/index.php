<?php
namespace VIEW;   //视图层

use COMMON\tools;
use COMMON\core;
use MODEL\group;      			
use SERVICE\service_test;		

class index extends page{

	function __construct(){
		parent::__construct();  //调用父类构造
	}
	
	function pagetest(){

		group::test();

	}

	//ajax调用
	static function ajaxtest(){
		echo "123";
	}

}
$page = new index; 
?>