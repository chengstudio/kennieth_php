<?php 
	namespace MODEL;     //模型层

	use CORE\core;      //核心类 
	use CORE\tools;     //工具类
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
		public function test(){
			$database = $GLOBALS["db"];

			$datas = $database->select("group_db",
										[
											"id",
											"group_name",
											"group_address"
										],[
											"id[!]"=>1
										]
			);
			database::de64_fields($datas,["group_name","group_address"]);

			return $datas;
		}

	}

?>