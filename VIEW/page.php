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
			"PAGE/js/jquery-ui/jquery-ui.min.css",		      //jquery-PAGE
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
	
?>