<?php
	namespace VIEW;   //视图层

	use COMMON\tools;
	use COMMON\core;
	use MODEL\group;      			
	use SERVICE\service_test;
	use MODEL\Curl;	

	class index extends page{

		function __construct(){
			parent::__construct();  //调用父类构造
			//$this->curl_sample();
		}

		static function getInstance(){
			return new index;
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