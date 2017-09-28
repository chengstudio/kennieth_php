//核心类
class core {
	constructor(){
		//预置ajax参数
		$.ajaxSetup({
		  url: "/PRESENTER"+location.pathname,
		  type: "post",
		  async : true
		});
	}
}



