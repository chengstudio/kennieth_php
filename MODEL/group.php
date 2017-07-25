<?php 
	namespace MODEL;     //模型层

	use COMMON\core;     //核心类 
	use COMMON\tools;    //工具类
	use DB\database;     //数据库类

	class group{
		static function test(){
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
			database::de64_fileds($datas,["group_name","group_address"]);

			tools::pp($datas);

		}
	}

?>