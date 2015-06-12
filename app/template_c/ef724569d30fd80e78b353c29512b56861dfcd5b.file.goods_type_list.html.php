<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-20 15:18:09
         compiled from "D:\web\htcdos\shopcz\app\views\admin\goods_type_list.html" */ ?>
<?php /*%%SmartyHeaderCode:213815534a8317641f1-55397303%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ef724569d30fd80e78b353c29512b56861dfcd5b' => 
    array (
      0 => 'D:\\web\\htcdos\\shopcz\\app\\views\\admin\\goods_type_list.html',
      1 => 1429421794,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '213815534a8317641f1-55397303',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list' => 0,
    'type_list' => 0,
    'pageBar' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5534a8319f0816_14653384',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5534a8319f0816_14653384')) {function content_5534a8319f0816_14653384($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>SHOP 管理中心 - 类型管理 </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="<?php echo @constant('RESOURCE_PATH');?>
styles/general.css" rel="stylesheet" type="text/css" />
<link href="<?php echo @constant('RESOURCE_PATH');?>
styles/main.css" rel="stylesheet" type="text/css" />
</head>
<body>

<h1>
<span class="action-span"><a href="index.php?p=admin&c=type&a=add">新建商品类型</a></span>
<span class="action-span1"><a href="index.php?act=main">SHOP 管理中心</a> </span><span id="search_id" class="action-span1"> - 商品类型 </span>
<div style="clear:both"></div>
</h1>

<form method="post" action="" name="listForm">
<!-- start goods type list -->
<div class="list-div" id="listDiv">

	<table width="100%" cellpadding="3" cellspacing="1" id="listTable">
		<tbody>
			<tr>
				<th>商品类型名称</th>
				<th>属性数</th>
				<th>状态</th>
				<th>操作</th>
			</tr>
      <?php  $_smarty_tpl->tpl_vars['type_list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['type_list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['type_list']->key => $_smarty_tpl->tpl_vars['type_list']->value) {
$_smarty_tpl->tpl_vars['type_list']->_loop = true;
?>
			<tr>
				<td class="first-cell"><span onclick="javascript:listTable.edit(this, 'edit_type_name', 1)"><?php echo $_smarty_tpl->tpl_vars['type_list']->value['type_name'];?>
</span></td>
				<td align="right"><?php echo $_smarty_tpl->tpl_vars['type_list']->value['count'];?>
</td>
				<td align="center"><img src="<?php echo @constant('RESOURCE_PATH');?>
images/yes.gif"></td>
				<td align="center">
				  <a href="index.php?p=admin&c=attribute&a=index&goods_type=<?php echo $_smarty_tpl->tpl_vars['type_list']->value['type_id'];?>
" title="属性列表">属性列表</a> |
				  <a href="index.php?p=admin&c=type&a=edit&type_id=<?php echo $_smarty_tpl->tpl_vars['type_list']->value['type_id'];?>
" title="编辑">编辑</a> |
				  <a href="index.php?p=admin&c=type&a=del&type_id=<?php echo $_smarty_tpl->tpl_vars['type_list']->value['type_id'];?>
" onclick="javascript:return confirm('删除商品类型将会清除该类型下的所有属性。\n您确定要删除选定的商品类型吗？');" title="移除">移除</a>
				</td>
			</tr>
      <?php } ?>
   

      <tr>
      <td align="right" nowrap="true" colspan="6" style="background-color: rgb(255, 255, 255);">
            <!-- $Id: page.htm 14216 2008-03-10 02:27:21Z testyang $ -->
            <div id="turn-page">
        <?php echo $_smarty_tpl->tpl_vars['pageBar']->value;?>

      </div>
      </td>
    </tr>
  </tbody></table>

</div>
<!-- end goods type list -->
</form>

<div id="footer">
	版权所有 &copy; 2012-2013 传智播客 - PHP培训 - </div>
</div>

</body>
</html><?php }} ?>
