<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-20 15:29:40
         compiled from "D:\web\htcdos\shopcz\app\views\admin\attribute_edit.html" */ ?>
<?php /*%%SmartyHeaderCode:88015534a836bb6c55-10413602%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd2b77ac947d09c1fcc877dc443310bab5ed03bd7' => 
    array (
      0 => 'D:\\web\\htcdos\\shopcz\\app\\views\\admin\\attribute_edit.html',
      1 => 1429514977,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '88015534a836bb6c55-10413602',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5534a836f29a21_06320015',
  'variables' => 
  array (
    'attr_info' => 0,
    'type_list' => 0,
    'type' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5534a836f29a21_06320015')) {function content_5534a836f29a21_06320015($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>SHOP 管理中心 - 属性管理 </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="<?php echo @constant('RESOURCE_PATH');?>
styles/general.css" rel="stylesheet" type="text/css" />
<link href="<?php echo @constant('RESOURCE_PATH');?>
styles/main.css" rel="stylesheet" type="text/css" />
</head>
<body>

<h1>
<span class="action-span"><a href="index.php?p=admin&c=attribute&a=index">商品属性</a></span>
<span class="action-span1"><a href="index.php?act=main">SHOP 管理中心</a> </span><span id="search_id" class="action-span1"> - 编辑属性 </span>
<div style="clear:both"></div>
</h1>

<div class="main-div">
  <form action="index.php?p=admin&c=attribute&a=save" method="post" name="theForm" onsubmit="return validate();">
  <table width="100%" id="general-table">
      <tbody><tr>
        <td class="label">属性名称：</td>
        <td>
          <input type="text" name="attr_name" value="<?php echo $_smarty_tpl->tpl_vars['attr_info']->value['attr_name'];?>
" size="30">
          <span class="require-field">*</span>        </td>
      </tr>
      <tr>
        <td class="label">所属商品类型：</td>
        <td>
          <select name="type_id" onchange="onChangeGoodsType(this.value)">
          <option value="0">请选择...</option>
            <?php  $_smarty_tpl->tpl_vars['type'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['type']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['type_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['type']->key => $_smarty_tpl->tpl_vars['type']->value) {
$_smarty_tpl->tpl_vars['type']->_loop = true;
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['type']->value['type_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['attr_info']->value['type_id']==$_smarty_tpl->tpl_vars['type']->value['type_id']) {?>selected<?php } else {
}?>><?php echo $_smarty_tpl->tpl_vars['type']->value['type_name'];?>
</option>
            <?php } ?>
            </select> <span class="require-field">*</span>        </td>
            
      </tr>
      <tr id="attrGroups" style="display: none;">
        <td class="label">属性分组：</td>
        <td>
          <select name="attr_group">
                    </select>
        </td>
      </tr>
      <tr>
        <td class="label"><a href="javascript:showNotice('noticeAttrType');" title="点击此处查看提示信息"><img src="<?php echo @constant('RESOURCE_PATH');?>
images/notice.gif" width="16" height="16" border="0" alt="点击此处查看提示信息"></a>属性是否可选</td>
        <td>
          <input type="radio" name="attr_type" value="0" checked="true" <?php if ($_smarty_tpl->tpl_vars['attr_info']->value['attr_type']==0) {?>checked<?php }?>> 唯一属性          <input type="radio" name="attr_type" value="1" <?php if ($_smarty_tpl->tpl_vars['attr_info']->value['attr_type']==1) {?>checked<?php }?>> 单选属性          <input type="radio" name="attr_type" value="2" <?php if ($_smarty_tpl->tpl_vars['attr_info']->value['attr_type']==2) {?>checked<?php }?>> 复选属性          <br><span class="notice-span" style="display:block" id="noticeAttrType">选择"单选/复选属性"时，可以对商品该属性设置多个值，同时还能对不同属性值指定不同的价格加价，用户购买商品时需要选定具体的属性值。选择"唯一属性"时，商品的该属性值只能设置一个值，用户只能查看该值。</span>
        </td>
      </tr>
      <tr>
        <td class="label">该属性值的录入方式：</td>
        <td>
          <input type="radio" name="attr_input_type" value="0" checked="true" onclick="radioClicked(0)" <?php if ($_smarty_tpl->tpl_vars['attr_info']->value['attr_input_type']==0) {?>checked<?php }?>>
          手工录入          <input type="radio" name="attr_input_type" value="1" onclick="radioClicked(1)" <?php if ($_smarty_tpl->tpl_vars['attr_info']->value['attr_input_type']==1) {?>checked<?php }?>>
          从下面的列表中选择（一行代表一个可选值）          <input type="radio" name="attr_input_type" value="2" onclick="radioClicked(1)" <?php if ($_smarty_tpl->tpl_vars['attr_info']->value['attr_input_type']==2) {?>checked<?php }?>>
          多行文本框        </td>
      </tr>
      <tr>
        <td class="label">可选值列表：</td>
        <td>
          <textarea name="attr_values" cols="30" rows="5" disabled=""><?php echo $_smarty_tpl->tpl_vars['attr_info']->value['attr_values'];?>
</textarea>
        </td>
      </tr>
      <tr>
        <td colspan="2">
        <div class="button-div">
          <input type="submit" value=" 确定 " class="button">
          <input type="reset" value=" 重置 " class="button">
        </div>
        </td>
      </tr>
      </tbody></table>
    <input type="hidden" name="act" value="update">
    <input type="hidden" name="attr_id" value="<?php echo $_smarty_tpl->tpl_vars['attr_info']->value['attr_id'];?>
">
     <input type="hidden" name="goods_type" value="<?php echo $_smarty_tpl->tpl_vars['attr_info']->value['type_id'];?>
">
  </form>
</div>

<div id="footer">
	版权所有 &copy; 2012-2013 传智播客 - PHP培训 - </div>
</div>
<?php echo '<script'; ?>
 type="text/javascript">

onload = function()
{
  radioClicked(<?php echo $_smarty_tpl->tpl_vars['attr_info']->value['attr_input_type'];?>
);
}
/**
 * 点击类型按钮时切换选项的禁用状态
 */
function radioClicked(n)
{
  document.forms['theForm'].elements["attr_values"].disabled = n > 0 ? false : true;
}


<?php echo '</script'; ?>
>
</body>
</html><?php }} ?>
