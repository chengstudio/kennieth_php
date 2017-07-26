//核心类
class core {
	constructor(){
		//预置ajax参数
		$.ajaxSetup({
		  url: "/VIEW"+location.pathname,
		  type: "post",
		  async : true
		});
	}
}

class table {
	create(th,tr){
		str = "<table>";
		str += "<thead>";
		str += "<tr>";
		for(t in th){
			str += "<th>";
			str += t;
			str += "</th>";
		}
		str += "</tr>";
		str += "</thead>";
		str += "<tbody>";
		for(tt in tr){
			
		}
		str += "</tbody>";
		str += "</table>";

		return str;
	}
}
t = new table;
c = new core;



