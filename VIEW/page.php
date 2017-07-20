<?php
namespace VIEW;  //视图层

//页面基类
class page{	
	
	function __construct(){
		//判断是否ajax调用
		if(isset($_POST['act'])){call_user_func(array("SYSTEM\\VIEW\\".$this->pagename(),$_POST['act']),'');}
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
			"UI/js/jquery.min.js",					          //jquery
			"UI/js/jquery-ui/jquery-ui.min.js",               //jquery-ui
			"UI/js/common.js?t=".time(),					  //公共JS
			"UI/js/moment.js",								  //时间操作
			"UI/js/".$this::pagename().".js?t=".time(),       //页面JS
		);
		//额外添加
		$js = array_merge($js,$add);
		//遍历JS文件
		$jsstr = "\n";
		foreach ($js as $key => $value) {
			$jsstr .= "<script language='javascript' src='".$value."'></script>\n";
		}

		echo $jsstr;
	}

	//公共css
	function commoncss($add=[]){
		//修改此数组加入更多公共CSS
		$css = array(			
			"UI/js/jquery-ui/jquery-ui.min.css",		       //jquery-ui
			"UI/style/".$this::pagename().".css?t=".time(),    //页面CSS
			"UI/style/common.css"						       //jquery样式定制
		);
		//额外添加
		$css = array_merge($css,$add);
		//遍历CSS文件
		$cssstr = "\n";
		foreach ($css as $key => $value) {
			$cssstr .= "<link href='".$value."' rel='stylesheet' type='text/css' />\n";
		}

		echo $cssstr;		
	}
	
}
	
?>