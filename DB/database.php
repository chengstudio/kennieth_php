<?php 
	namespace DB;				//数据库层

	use DB\Medoo\Medoo;

	require_once("Medoo.php");

	class database{
		function __construct(){
			$this->create();
		}

		static function getInstance(){
			$class = __CLASS__;
			return new $class;
		} 

		private function create(){
			$GLOBALS["db"] = new Medoo([
				'database_type' => 'mysql',
				'database_name' => 'gfr',
				'server' => '127.0.0.1',
				'username' => 'root',
				'password' => '',
				'charset' => 'utf8'
			]);
		}

		//转换数组base64
		static function de64_fileds(&$datas,$fileds){
			foreach ($datas as $key => $value) {
				foreach ($fileds as $key2 => $value2) {
					if(isset($value[$value2])){
						$datas[$key][$value2] = base64_decode($value[$value2]);
					}		
				}
			}
		}
	}


?>