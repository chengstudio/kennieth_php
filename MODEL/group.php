<?php 
	namespace MODEL;
	use COMMON\core;
	use COMMON\tools;
	use DB\database;

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