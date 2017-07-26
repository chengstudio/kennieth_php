## 此框架实际上是一系列的约定以便于在遵守约定的过程中提升开发效率

### 基本特点

 - 借鉴了部分 PRADO框架 与 ASP.NET WEBFORM 的思想
 - 每个前台PHP页面对应一个后台PAGE类，这个与 ASP.NET WEBFORM 和 JSF BACKBEAN 有点类似
 - 每个前台PHP页面对应一个JS脚本模块(jquery自动函数)
 - 每个页面均加载一个JQUERY的AJAXSETUP配置，与后台PAGE类对应，以简化AJAX调用后台类方法的过程，这个借鉴了 ASP.NET JQUERY 框架[webmethod]特性的远程调用方法的模式

### 目录结构
```
 根--|
     |------CORE|
     |          |-core.php 核心类，autoload，数据库连接，等等
     |          |-tools.php 工具类
     |          |-其他第三方工具类
     |
     |--------DB|-database.php 数据库类
     |          |-Medoo.php    第三方数据库HELPER
     |
     |-----MODEL|-业务逻辑类
     |
     |---SERVICE|-对外提供服务或接入第三方服务类
     |
     |------VIEW|-页面后台类
     |          |-page.php 后台类基类
     |
     |------PAGE|-[js目录] javascript脚本
     |          |-[css目录] 样式表单
     |
     |所有PHP页面
```
