<?php 
	namespace MODEL;     //模型层

	use CORE\core;      //核心类 
	use CORE\tools;     //工具类
	use CORE\Curl;      //CURL类
	use DB\database;    //数据库类

	class group{

		//单例
		static function getInstance(){
			$class = __CLASS__;
			return new $class;
		} 

		/**
		 * 测试模型读取数据库
		 * @return Array 数据库查询结果
		 */
		function test(){
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

			return $datas;
		}

	}

?>