<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-20 15:18:07
         compiled from "D:\web\htcdos\shopcz\app\views\admin\brand_list.html" */ ?>
<?php /*%%SmartyHeaderCode:125405534a82fe169e1-52679278%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e88cc3e5a4aab32b1982b28656135ce4b17679da' => 
    array (
      0 => 'D:\\web\\htcdos\\shopcz\\app\\views\\admin\\brand_list.html',
      1 => 1429421792,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '125405534a82fe169e1-52679278',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list' => 0,
    'brand' => 0,
    'pageBar' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5534a8301a3281_26738115',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5534a8301a3281_26738115')) {function content_5534a8301a3281_26738115($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>SHOP 管理中心 - 品牌管理 </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="<?php echo @constant('RESOURCE_PATH');?>
styles/general.css" rel="stylesheet" type="text/css" />
<link href="<?php echo @constant('RESOURCE_PATH');?>
styles/main.css" rel="stylesheet" type="text/css" />
</head>
<body>

<h1>
<span class="action-span"><a href="index.php?p=admin&c=brand&a=add">添加品牌</a></span>
<span class="action-span1"><a href="index.php?act=main">SHOP 管理中心</a> </span><span id="search_id" class="action-span1"> - 商品品牌 </span>
<div style="clear:both"></div>
</h1>

<div class="form-div">
  <form action="javascript:search_brand()" name="searchForm">
    <img src="<?php echo @constant('RESOURCE_PATH');?>
images/icon_search.gif" width="26" height="22" border="0" alt="SEARCH">
     <input type="text" name="brand_name" size="15">
    <input type="submit" value=" 搜索 " class="button">
  </form>
</div>

<form method="post" action="" name="listForm">
<!-- start brand list -->
<div class="list-div" id="listDiv">

  <table cellpadding="3" cellspacing="1">
    <tbody>
		<tr>
			<th>品牌名称</th>
			<th>品牌网址</th>
			<th>品牌描述</th>
			<th>排序</th>
			<th>是否显示</th>
			<th>操作</th>
		</tr>
<?php  $_smarty_tpl->tpl_vars['brand'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['brand']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['brand']->key => $_smarty_tpl->tpl_vars['brand']->value) {
$_smarty_tpl->tpl_vars['brand']->_loop = true;
?>
   
        <tr>
			<td class="first-cell"><span style="float:right"><a href="<?php echo $_smarty_tpl->tpl_vars['brand']->value['logo'];?>
" target="_brank"><img src="<?php echo @constant('RESOURCE_PATH');?>
images/picflag.gif" width="16" height="16" border="0" alt="品牌LOGO"></a></span>
			<span onclick="javascript:listTable.edit(this, 'edit_brand_name', 1)" title="点击修改内容" style=""><?php echo $_smarty_tpl->tpl_vars['brand']->value['brand_name'];?>
</span>
			</td>
			<td><a href="<?php echo $_smarty_tpl->tpl_vars['brand']->value['url'];?>
" target="_brank"><?php echo $_smarty_tpl->tpl_vars['brand']->value['url'];?>
</a></td>
			<td align="left" ><?php echo $_smarty_tpl->tpl_vars['brand']->value['brand_desc'];?>
</td>
			<td align="right"><span onclick="javascript:listTable.edit(this, 'edit_sort_order', 1)"><?php echo $_smarty_tpl->tpl_vars['brand']->value['sort_order'];?>
</span></td>
			<td align="center"><?php if ($_smarty_tpl->tpl_vars['brand']->value['is_show']==1) {?><img src="<?php echo @constant('RESOURCE_PATH');?>
images/yes.gif"><?php } else { ?><img src="<?php echo @constant('RESOURCE_PATH');?>
images/no.gif"><?php }?></td>
			<td align="center">
				<a href="index.php?p=admin&c=brand&a=edit&id=<?php echo $_smarty_tpl->tpl_vars['brand']->value['brand_id'];?>
" title="编辑">编辑</a> |
				<a href="index.php?p=admin&c=brand&a=del&id=<?php echo $_smarty_tpl->tpl_vars['brand']->value['brand_id'];?>
" onclick="javascript:confirm('你确认要删除选定的商品品牌吗？')" title="编辑">移除</a> 
			</td>
		</tr>
 <?php } ?>
		<!--start，这些都是显示代码，没有格式化，开发时会删除 -->

        

	<!--end，这些都是显示代码，没有格式化，开发时会删除 -->
    <tr>
		<td align="right" nowrap="true" colspan="6">
            <div id="turn-page">
		<?php echo $_smarty_tpl->tpl_vars['pageBar']->value;?>

      </div>
      </td>
    </tr>
  </tbody></table>

<!-- end brand list -->
</div>
</form>


<div id="footer">
	版权所有 &copy; 2012-2013 传智播客 - PHP培训 - </div>
</div>

</body>
</html><?php }} ?>
