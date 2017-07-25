//预置ajax参数
$.ajaxSetup({
  url: "/VIEW"+location.pathname,
  type: "post",
  async : true
});

