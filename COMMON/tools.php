<?php 
	namespace COMMON;

	class tools{
		//格式化数据工具
		static function print_p($obj){
			echo "<pre>";
			print_r($obj);
			echo "</pre>";
		}
	}

?>