<?php
	namespace VIEW;   												//视图层
	require_once($_SERVER["DOCUMENT_ROOT"]."/VIEW/page.php");       //引入PAGE页面基类页面

	use CORE\core;				//核心类
	use CORE\tools;               //工具类
	use CORE\Curl;	            //CURL工具类
	use MODEL\group;      			//模型类 
	use SERVICE\service_test;       //服务类
	use VIEW\page;                  //页面基类

	class index extends page{

		public $title;

		function __construct(){
			parent::__construct();  //调用父类构造
			$title = "测试页面";
		}

		//单例
		static function getInstance(){
			$class = __CLASS__;
			return new $class;
		} 
		
		function pagetest(){

			echo "PHP_FUNC:".__FUNCTION__."<br>";
			//group::test();		    //调用模型层业务类
			//$this->curl_sample()      //调用核心层工具类

		}

		/**
		 * 测试CURL工具类
		 * 
		 */
		function curl_sample(){

			$agentid='WHlXMG0yaHBwd009';		                //默认是pc端的帐号,实例时可以另外填写其它的
			$securitycode='ee47ef1e7ca08f0a75756b8a9d597e88';	//默认是pc端的帐号

			$param = ["cid"=>1];
			$sign=md5($securitycode.'||'.json_encode($param));
			
			$curl = new Curl();
			$curl->post('http://www.cctrip.cc/api/api_p.php?act=get_codedata_byid',[
				'signature'=>$sign,
				'agentid'=>$agentid,
				'param'=>json_encode($param)
			]);

			$datas = json_decode($curl->response,true);

			tools::pp($datas);

		}

		/**
		 * ajax调用测试
		 * @return
		 */
		static function ajaxtest(){
			echo "AJAX_FUNC:".__FUNCTION__."<br>";
		}

	}
	$page = index::getInstance(); 
	$addcss = [];		           //添加css 
	$addjs = [];		       	   //添加js
?>