<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-19 20:09:19
         compiled from "D:\web\htcdos\shopcz\app\views\admin\top.html" */ ?>
<?php /*%%SmartyHeaderCode:2790855339aef46de49-24931481%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '43c73291dac0ffe407c54e97c73756b7b56926fa' => 
    array (
      0 => 'D:\\web\\htcdos\\shopcz\\app\\views\\admin\\top.html',
      1 => 1429421796,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2790855339aef46de49-24931481',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55339aef515df4_01312007',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55339aef515df4_01312007')) {function content_55339aef515df4_01312007($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="<?php echo @constant('RESOURCE_PATH');?>
styles/general.css" rel="stylesheet" type="text/css" />
<style type="text/css">
#header-div {
  background: #278296;
  border-bottom: 1px solid #FFF;
}
#logo-div {
  height: 50px;
  float: left;
}
#license-div {
  height: 50px;
  float: left;
  text-align:center;
  vertical-align:middle;
  line-height:50px;
}
#license-div a:visited, #license-div a:link {
  color: #EB8A3D;
}
#license-div a:hover {
  text-decoration: none;
  color: #EB8A3D;
}
#submenu-div {
  height: 50px;
}
#submenu-div ul {
  margin: 0;
  padding: 0;
  list-style-type: none;
}
#submenu-div li {
  float: right;
  padding: 0 10px;
  margin: 3px 0;
  border-left: 1px solid #FFF;
}
#submenu-div a:visited, #submenu-div a:link {
  color: #FFF;
  text-decoration: none;
}
#submenu-div a:hover {
  color: #F5C29A;
}
#loading-div {
  clear: right;
  text-align: right;
  display: block;
}
#menu-div {
  background: #80BDCB;
  font-weight: bold;
  height: 24px;
  line-height:24px;
}
#menu-div ul {
  margin: 0;
  padding: 0;
  list-style-type: none;
}
#menu-div li {
  float: left;
  border-right: 1px solid #192E32;
  border-left:1px solid #BBDDE5;
}
#menu-div a:visited, #menu-div a:link {
  display:block;
  padding: 0 20px;
  text-decoration: none;
  color: #335B64;
  background:#9CCBD6;
}
#menu-div a:hover {
  color: #000;
  background:#80BDCB;
}
#submenu-div a.fix-submenu{ clear:both; margin-left:5px; padding:1px 5px; *padding:3px 5px 5px; background:#DDEEF2; color:#278296; }
#submenu-div a.fix-submenu:hover{ padding:1px 5px; *padding:3px 5px 5px; background:#FFF; color:#278296; }
#menu-div li.fix-spacel{ width:30px; border-left:none; }
#menu-div li.fix-spacer{ border-right:none; }
</style>
</head>
<body>
<div id="header-div">
	<div id="logo-div" style="bgcolor:#000000;">
		<img src="<?php echo @constant('RESOURCE_PATH');?>
images/ecshop_logo.gif" alt="ECSHOP - power for e-commerce" />
	</div>
	<div id="license-div" style="bgcolor:#000000;"></div>
	<div id="submenu-div">
		<ul>
			  <li><a href="index.php?act=about_us" target="main-frame">关于本店</a></li>
			  <li><a href="javascript:web_address();">帮助</a></li>
			  <li><a href="../" target="_blank">查看网店</a></li>
			  <li><a href="message.php?act=list" target="main-frame">管理员留言</a></li>
			  <li><a href="privilege.php?act=modif" target="main-frame">个人设置</a></li>
			  <li><a href="javascript:window.top.frames['main-frame'].document.location.reload();window.top.frames['header-frame'].document.location.reload()">刷新</a></li>
			  <li><a href="#"  onclick="ShowToDoList()">记事本</a></li>
			  <li style="border-left:none;"><a href="index.php?act=first" target="main-frame">开店向导</a></li>
		</ul>
		<div id="send_info" style="padding: 5px 10px 0 0; clear:right;text-align: right; color: #FF9900;width:40%;float: right;">
			<a href="index.php?act=clear_cache" target="main-frame" class="fix-submenu">清除缓存</a>
			<a href="index.php?p=admin&c=public&a=logout" target="_top" class="fix-submenu">退出</a>
		</div>
	</div>
</div>
</body>
</html><?php }} ?>
