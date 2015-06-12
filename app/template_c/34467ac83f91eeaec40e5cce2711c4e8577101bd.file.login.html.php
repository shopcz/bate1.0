<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-19 20:09:10
         compiled from "D:\web\htcdos\shopcz\app\views\admin\login.html" */ ?>
<?php /*%%SmartyHeaderCode:938655339ae637d962-89107503%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '34467ac83f91eeaec40e5cce2711c4e8577101bd' => 
    array (
      0 => 'D:\\web\\htcdos\\shopcz\\app\\views\\admin\\login.html',
      1 => 1429421795,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '938655339ae637d962-89107503',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55339ae6473b15_24710059',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55339ae6473b15_24710059')) {function content_55339ae6473b15_24710059($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="<?php echo @constant('RESOURCE_PATH');?>
styles/general.css" rel="stylesheet" type="text/css" />
<link href="<?php echo @constant('RESOURCE_PATH');?>
styles/main.css" rel="stylesheet" type="text/css" />
<style type="text/css">
body {
  color: white;
}
</style>

</head>
<body style="background: #278296">
<form method="post" action="index.php?p=admin&c=public&a=check" name='theForm'>
  <table cellspacing="0" cellpadding="0" style="margin-top: 100px" align="center">
  <tr>
    <td><img src="<?php echo @constant('RESOURCE_PATH');?>
images/login.png" width="178" height="256" border="0" alt="ECSHOP" /></td>
    <td style="padding-left: 50px">
      <table>
      <tr>
        <td>管理员姓名：</td>
        <td><input type="text" name="username" /></td>
      </tr>
      <tr>
        <td>管理员密码：</td>
        <td><input type="password" name="password" /></td>
      </tr>
      <tr>
        <td>验证码：</td>
        <td><input type="text" name="captcha" class="capital" /></td>
      </tr>
      <tr>
  <td colspan="2" align="right"><img src="index.php?p=admin&c=public&a=captcha" width="145" height="30" alt="CAPTCHA" border="1" onclick= this.src="index.php?p=admin&c=public&a=captcha&"+Math.random() style="cursor: pointer;" title="看不清？点击更换另一个验证码。" />
      </td>
      </tr>
      <tr><td colspan="2"><input type="checkbox" value="1" name="remember" id="remember" /><label for="remember">请保存我这次的登录信息</label></td></tr>
      <tr><td>&nbsp;</td><td><input type="submit" value="进入管理中心" class="button" /></td></tr>
      <tr>
        <td colspan="2" align="right">&raquo; <a href="../" style="color:white">返回首页</a> &raquo; <a href="get_password.php?act=forget_pwd" style="color:white">你忘记了密码吗？</a></td>
      </tr>
      </table>
    </td>
  </tr>
  </table>
  <input type="hidden" name="act" value="signin" />
</form>

</body><?php }} ?>
