<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-27 15:47:58
         compiled from "D:\web\htcdos\shopcz\app\views\home\member_info.html" */ ?>
<?php /*%%SmartyHeaderCode:3520553de9aee3a615-61140174%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b080bab9f53bd25989fc84c29ecb3ad7b02bea6a' => 
    array (
      0 => 'D:\\web\\htcdos\\shopcz\\app\\views\\home\\member_info.html',
      1 => 1429586279,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3520553de9aee3a615-61140174',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'member_info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_553de9af1cebb6_02922783',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553de9af1cebb6_02922783')) {function content_553de9af1cebb6_02922783($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>修改个人资料</title>
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
				<div class="title"><h3>基本信息</h3></div>
				<div class="clear"></div>
				<dic class="shop_home_form">
					<form action="index.php?p=home&c=member&a=update" name="" class="shop_form" method="post">
						<ul>
							<li><label>用户名称：</label><?php echo $_smarty_tpl->tpl_vars['member_info']->value['member_name'];?>
</li>
							<li><label>电子邮件：</label><?php echo $_smarty_tpl->tpl_vars['member_info']->value['email'];?>
</li>
							<li><label>真实姓名：</label><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['member_info']->value['realname'];?>
" class="truename form-text" name="realname"/></li>
							<li><label>性别:</label>
								<input type="radio" class="mr5" name="sex" value="0" <?php if ($_smarty_tpl->tpl_vars['member_info']->value['sex']==0) {?> checked="true" <?php }?>/>保密
								<input type="radio" class="ml10 mr5" name="sex" value="1" <?php if ($_smarty_tpl->tpl_vars['member_info']->value['sex']==1) {?> checked="true" <?php }?>//>男
								<input type="radio" class="ml10 mr5" name="sex" value="2" <?php if ($_smarty_tpl->tpl_vars['member_info']->value['sex']==2) {?> checked="true" <?php }?>//>女
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
