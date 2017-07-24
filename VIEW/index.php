<?php
	namespace VIEW;   												//视图层
	require_once($_SERVER["DOCUMENT_ROOT"]."/VIEW/page.php");       //引入PAGE页面基类页面

	use COMMON\core;				//核心类
	use COMMON\tools;               //工具类
	use COMMON\Curl;	            //CURL工具类
	use MODEL\group;      			//模型类 
	use SERVICE\service_test;       //服务类
	use VIEW\page;

	class index extends page{

		function __construct(){
			parent::__construct();  //调用父类构造
			//$this->curl_sample();
		}

		static function getInstance(){
			$class = __CLASS__;
			return new $class;
		} 
		
		function pagetest(){

			group::test();

		}

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

		//ajax调用
		static function ajaxtest(){
			echo "123";
		}

	}
	$page = index::getInstance(); 
?>