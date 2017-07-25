<?php 
	namespace DB;				//数据库层

	use DB\Medoo\Medoo;         //数据库工具类

	require_once("Medoo.php");  //数据库工具类页面

	class database{
		function __construct(){
			$this->create();
		}

		/**
		 * 单例
		 * @return Object 单例对象
		 */
		static function getInstance(){
			$class = __CLASS__;
			return new $class;
		} 

		/**
		 * 创建全局数据库实例
		 * @return
		 */
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

		/**
		 * 转换数组base64
		 * @param  Array &$datas 数组引用
		 * @param  Array $fields 转换字段
		 * @return 
		 */
		static function de64_fields(&$datas,$fields){
			foreach ($datas as $key => $value) {
				foreach ($fields as $key2 => $value2) {
					if(isset($value[$value2])){
						$datas[$key][$value2] = base64_decode($value[$value2]);
					}		
				}
			}
		}
	}


?>