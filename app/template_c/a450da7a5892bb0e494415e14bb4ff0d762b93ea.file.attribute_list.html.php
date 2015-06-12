<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-20 15:18:12
         compiled from "D:\web\htcdos\shopcz\app\views\admin\attribute_list.html" */ ?>
<?php /*%%SmartyHeaderCode:178825534a83426f302-34836069%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a450da7a5892bb0e494415e14bb4ff0d762b93ea' => 
    array (
      0 => 'D:\\web\\htcdos\\shopcz\\app\\views\\admin\\attribute_list.html',
      1 => 1429421792,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '178825534a83426f302-34836069',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'goods_type' => 0,
    'typelist' => 0,
    'type_list' => 0,
    'list' => 0,
    'attribute' => 0,
    'pageBar' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5534a83467a678_21131185',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5534a83467a678_21131185')) {function content_5534a83467a678_21131185($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>SHOP 管理中心 - 属性管理 </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="<?php echo @constant('RESOURCE_PATH');?>
styles/general.css" rel="stylesheet" type="text/css" />
<link href="<?php echo @constant('RESOURCE_PATH');?>
styles/main.css" rel="stylesheet" type="text/css" />

<?php echo '<script'; ?>
>
/**
   * 查询商品属性
   */
  function searchAttr(goodsType)
  {
     window.location.href="index.php?p=admin&c=attribute&a=index&goods_type="+goodsType;
  }
<?php echo '</script'; ?>
>

</head>
<body>

<h1>
<span class="action-span"><a href="index.php?p=admin&c=attribute&a=add&goods_type=<?php echo $_smarty_tpl->tpl_vars['goods_type']->value;?>
">添加属性</a></span>
<span class="action-span1"><a href="index.php?act=main">SHOP 管理中心</a> </span><span id="search_id" class="action-span1"> - 商品属性 </span>
<div style="clear:both"></div>
</h1>

<div class="form-div">
  <form action="" name="searchForm">
    <img src="<?php echo @constant('RESOURCE_PATH');?>
images/icon_search.gif" width="26" height="22" border="0" alt="SEARCH">
    按商品类型显示：<select name="goods_type" onchange="searchAttr(this.value)">
    <option value="0">所有商品类型</option>
    	<?php  $_smarty_tpl->tpl_vars['type_list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['type_list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['typelist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['type_list']->key => $_smarty_tpl->tpl_vars['type_list']->value) {
$_smarty_tpl->tpl_vars['type_list']->_loop = true;
?>
    	<option value="<?php echo $_smarty_tpl->tpl_vars['type_list']->value['type_id'];?>
"  <?php if ($_smarty_tpl->tpl_vars['type_list']->value['type_id']==$_smarty_tpl->tpl_vars['goods_type']->value) {?>selected<?php } else {
}?>><?php echo $_smarty_tpl->tpl_vars['type_list']->value['type_name'];?>
</option>
    	<?php } ?>
    </select>
  </form>
</div>

<form method="post" action="attribute.php?act=batch" name="listForm">
<div class="list-div" id="listDiv">

  <table cellpadding="3" cellspacing="1">
    <tbody>
		<tr>
			<th><input onclick="listTable.selectAll(this, &quot;checkboxes[]&quot;)" type="checkbox">编号 </th>
			<th>属性名称</th>
			<th>商品类型</th>
			<th>属性值的录入方式</th>
			<th>可选值列表</th>
			<th>排序</a></th>
			<th>操作</th>
		</tr>
        <?php  $_smarty_tpl->tpl_vars['attribute'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['attribute']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['attribute']->key => $_smarty_tpl->tpl_vars['attribute']->value) {
$_smarty_tpl->tpl_vars['attribute']->_loop = true;
?>
        <tr>
			<td nowrap="true" valign="top"><span><input value="<?php echo $_smarty_tpl->tpl_vars['attribute']->value['attr_id'];?>
" name="checkboxes[]" type="checkbox"><?php echo $_smarty_tpl->tpl_vars['attribute']->value['attr_id'];?>
</span></td>
			<td class="first-cell" nowrap="true" valign="top"><span onclick="listTable.edit(this, 'edit_attr_name', 1)"><?php echo $_smarty_tpl->tpl_vars['attribute']->value['attr_name'];?>
</span></td>
			<td nowrap="true" valign="top"><span><?php echo $_smarty_tpl->tpl_vars['attribute']->value['type_name'];?>
</span></td>
			<td nowrap="true" valign="top"><span><?php if ($_smarty_tpl->tpl_vars['attribute']->value['attr_input_type']==0) {?>手工录入<?php } elseif ($_smarty_tpl->tpl_vars['attribute']->value['attr_input_type']==1) {?>从列表中选择<?php } else { ?> 多行文本框<?php }?></span></td>
			<td valign="top"><span></span></td>
			<td align="right" nowrap="true" valign="top"><span onclick="listTable.edit(this, 'edit_sort_order', 1)">0</span></td>
			<td align="center" nowrap="true" valign="top">
				<a href="index.php?p=admin&c=attribute&a=edit&attr_id=<?php echo $_smarty_tpl->tpl_vars['attribute']->value['attr_id'];?>
" title="编辑"><img src="<?php echo @constant('RESOURCE_PATH');?>
images/icon_edit.gif" border="0" height="16" width="16"></a>
				<a href="index.php?p=admin&c=attribute&a=del&attr_id=<?php echo $_smarty_tpl->tpl_vars['attribute']->value['attr_id'];?>
" onclick="javascript:return confirm("确定要删除该属性值");" title="移除"><img src="<?php echo @constant('RESOURCE_PATH');?>
images/icon_drop.gif" border="0" height="16" width="16"></a>
			</td>
		</tr>
      <?php } ?>


        
      </tbody></table>

  <table cellpadding="4" cellspacing="0">
    <tbody><tr>
      <td style="background-color: rgb(255, 255, 255);"><input type="submit" id="btnSubmit" value="删除" class="button" disabled="true"></td>
      <td align="right" style="background-color: rgb(255, 255, 255);">      <!-- $Id: page.htm 14216 2008-03-10 02:27:21Z testyang $ -->
            <div id="turn-page">
        <?php echo $_smarty_tpl->tpl_vars['pageBar']->value;?>

      </div>
</td>
    </tr>
  </tbody></table>
</div>

</form>

<div id="footer">
	版权所有 &copy; 2012-2013 传智播客 - PHP培训 - </div>
</div>

</body>
</html><?php }} ?>
