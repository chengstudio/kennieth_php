<?php
namespace VIEW;  //视图层

//页面基类
class page{	
	
	function __construct(){
		//判断是否ajax调用
		if(isset($_POST['method'])){call_user_func(array("VIEW\\".$this->pagename(),$_POST['method']),'');}
	}
	
	//页面名称
	function pagename(){
		$pagename = "";
		$pagename = isset($_SERVER['PHP_SELF']) ? $_SERVER['PHP_SELF'] : (isset($_SERVER['SCRIPT_NAME']) ? $_SERVER['SCRIPT_NAME'] : $_SERVER['ORIG_PATH_INFO']);
		$pagename = str_replace(".php","",str_replace("/","",$pagename));
		$pagename = str_replace("VIEW","",$pagename);

		return $pagename;
	}

	//公共js
	function commonjs($add=[]){
		//修改此数组加入更多公共JS
		$js = array(					
			"PAGE/js/jquery.min.js",					          //jquery
			"PAGE/js/jquery-ui/jquery-ui.min.js",                 //jquery-ui
			"PAGE/js/bootstrap/js/bootstrap.min.js",              //bootstrap
			"PAGE/js/core.js",					                  //公共JS
			"PAGE/js/moment.js",								  //时间操作
			"PAGE/js/".$this::pagename().".js?t=".time(),         //页面JS
		);
		//额外添加
		$js = array_merge($js,$add);
		//遍历JS文件
		$jsstr = "";
		foreach ($js as $key => $value) {
			$jsstr .= "<script language='javascript' src='".$value."'></script>\n";
		}

		return $jsstr;
	}

	//公共css
	function commoncss($add=[]){
		//修改此数组加入更多公共CSS
		$css = array(			
			"PAGE/js/jquery-ui/jquery-ui.min.css",		          //jquery-ui
			"PAGE/js/bootstrap/css/bootstrap.min.css",            //bootstrap
			"PAGE/style/core.css",					              //jquery样式定制
			"PAGE/style/".$this::pagename().".css?t=".time(),     //页面CSS
		);
		//额外添加
		$css = array_merge($css,$add);
		//遍历CSS文件
		$cssstr = "";
		foreach ($css as $key => $value) {
			$cssstr .= "<link href='".$value."' rel='stylesheet' type='text/css' />\n";
		}

		return $cssstr;		
	}
	
}

//------独立函数，替代或增强一些系统的基本操作--------
	
/**
 * ajax返回
 * @param  Array $data 需要返回到数组
 * @return String 经过编码的JSON字符串
 */
function ajaxreturn($data){
	echo json_encode($data);
}

//------独立函数，替代或增强一些系统的基本操作--------

?>