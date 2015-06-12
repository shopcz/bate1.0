<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-27 15:48:04
         compiled from "D:\web\htcdos\shopcz\app\views\home\password_edit.html" */ ?>
<?php /*%%SmartyHeaderCode:20917553de9b4a38513-86999143%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2d2591f0466009cb6f32ab329c06f8729a2c1282' => 
    array (
      0 => 'D:\\web\\htcdos\\shopcz\\app\\views\\home\\password_edit.html',
      1 => 1429586314,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20917553de9b4a38513-86999143',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_553de9b4bd27f3_47573715',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553de9b4bd27f3_47573715')) {function content_553de9b4bd27f3_47573715($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>修改密码</title>
	<link rel="stylesheet" href="<?php echo @constant('RESOURCE_PATH');?>
css/base.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo @constant('RESOURCE_PATH');?>
css/shop_common.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo @constant('RESOURCE_PATH');?>
css/shop_header.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo @constant('RESOURCE_PATH');?>
css/shop_manager.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo @constant('RESOURCE_PATH');?>
css/shop_form.css" type="text/css" />
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo @constant('RESOURCE_PATH');?>
js/jquery.js" ><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo @constant('RESOURCE_PATH');?>
js/topNav.js" ><?php echo '</script'; ?>
>
</head>
<body>
		<!-- Header  -wll-2013/03/24 -->
<?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<div class="clear"></div>
	<!-- 面包屑 注意首页没有 -->
	<div class="shop_hd_breadcrumb">
		<strong>当前位置：</strong>
		<span>
			<a href="">首页</a>&nbsp;›&nbsp;
			<a href="">我的商城</a>&nbsp;›&nbsp;
			<a href="">已买到商品</a>
		</span>
	</div>
	<div class="clear"></div>
	<!-- 面包屑 End -->

	<!-- Header End -->	

	<!-- 我的个人中心 -->
	<div class="shop_member_bd clearfix">
		<!-- 左边导航 -->
		<div class="shop_member_bd_left clearfix">
			
			<div class="shop_member_bd_left_pic">
				<a href="javascript:void(0);"><img src="<?php echo @constant('RESOURCE_PATH');?>
images/avatar.png" /></a>
			</div>
			<div class="clear"></div>

			<dl>
				<dt>我的交易</dt>
				<dd><span><a href="">已购买商品</a></span></dd>
				<dd><span><a href="">我的收藏</a></span></dd>
				<dd><span><a href="">评价管理</a></span></dd>
			</dl>

			<dl>
				<dt>我的账户</dt>
				<dd><span><a href="index.php?p=home&c=member&a=index">个人资料</a></span></dd>
				<dd><span><a href="index.php?p=home&c=member&a=editpass">密码修改</a></span></dd>
				<dd><span><a href="index.php?p=home&c=member&a=address">收货地址</a></span></dd>
			</dl>

		</div>
		<!-- 左边导航 End -->
		
		<!-- 右边购物列表 -->
		<div class="shop_member_bd_right clearfix">
			
			<div class="shop_meber_bd_good_lists clearfix">
				<div class="title"><h3>修改密码</h3></div>
				<div class="clear"></div>
				<dic class="shop_home_form">
					<form action="index.php?p=home&c=member&a=editpass" name="" class="shop_form" method="post">
						<ul>
							<li class="bn"><label>原密码：</label><input type="password" name="password" class="truename form-text" /></li>
							<li class="bn"><label>新密码：</label><input type="password"  name="new_password" class="truename form-text" /></li>
							<li class="bn"><label>重复新密码：</label><input type="password" name="re_password" class="truename form-text" />
							<input type="hidden" name="act" value="update">
							</li>
							<li class="bn"><label>&nbsp;</label><input type="submit" class="form-submit" value="保存修改" /></li>
						</ul>
					</form>
				</div>
			</div>
		</div>
		<!-- 右边购物列表 End -->

	</div>
	<!-- 我的个人中心 End -->

	<!-- Footer - wll - 2013/3/24 -->
	<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<!-- Footer End -->
</body>
</html><?php }} ?>
