<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-27 15:46:06
         compiled from "D:\web\htcdos\shopcz\app\views\admin\brand_edit.html" */ ?>
<?php /*%%SmartyHeaderCode:23862553de93eb7d881-32836776%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2094a04f9a3d0d33507b4032e95c2772f5370d63' => 
    array (
      0 => 'D:\\web\\htcdos\\shopcz\\app\\views\\admin\\brand_edit.html',
      1 => 1429421792,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23862553de93eb7d881-32836776',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_553de93ed36f73_76825597',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553de93ed36f73_76825597')) {function content_553de93ed36f73_76825597($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
<span class="action-span"><a href="index.php?p=admin&c=brand&a=index">商品品牌</a></span>
<span class="action-span1"><a href="index.php?act=main">SHOP 管理中心</a> </span><span id="search_id" class="action-span1"> - 编辑品牌信息 </span>
<div style="clear:both"></div>
</h1>

<div class="main-div">
<form method="post" action="index.php?p=admin&c=brand&a=update" name="theForm" enctype="multipart/form-data" onsubmit="">
<table cellspacing="1" cellpadding="3" width="100%">
  <tbody><tr>
    <td class="label">品牌名称</td>
    <td><input type="text" name="brand_name" maxlength="60" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['brand_name'];?>
"><span class="require-field">*</span></td>
  </tr>
  <tr>
    <td class="label">品牌网址</td>
    <td><input type="text" name="url" maxlength="60" size="40" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['url'];?>
"></td>
  </tr>
  <tr>
    <td class="label"><a href="javascript:showNotice('warn_brandlogo');" title="点击此处查看提示信息">
        <img src="<?php echo @constant('RESOURCE_PATH');?>
images/notice.gif" width="16" height="16" border="0" alt="点击此处查看提示信息"></a>品牌LOGO</td>
    <td><input type="file" name="brand_logo" id="logo" size="45">    <br>
		<?php echo '<?php'; ?>
  if(empty($brand_info['brand_logo'])) :<?php echo '?>'; ?>

		<span class="notice-span" style="display:block" id="warn_brandlogo">请上传图片，做为品牌的LOGO！</span>
		<?php echo '<?php'; ?>
 else :<?php echo '?>'; ?>

		<span class="notice-span" style="display:block" id="warn_brandlogo">你已经上传过图片。再次上传时将覆盖原图片！</span>
		<?php echo '<?php'; ?>
 endif;<?php echo '?>'; ?>

    </td>
  </tr>
  <tr>
    <td class="label">品牌描述</td>
    <td><textarea name="brand_desc" cols="60" rows="4"><?php echo $_smarty_tpl->tpl_vars['info']->value['brand_desc'];?>
</textarea></td>
  </tr>
  <tr>
    <td class="label">排序</td>
    <td><input type="text" name="sort_order" maxlength="40" size="15" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['sort_order'];?>
"></td>
  </tr>
  <tr>
    <td class="label">是否显示</td>
    <td>
		<input type="radio" name="is_show" value="1" <?php if ($_smarty_tpl->tpl_vars['info']->value['is_show']==1) {?>checked<?php } else {
}?>> 是        
		<input type="radio" name="is_show" value="0" <?php if ($_smarty_tpl->tpl_vars['info']->value['is_show']==0) {?>checked<?php } else {
}?>> 否        (当品牌下还没有商品的时候，首页及分类页的品牌区将不会显示该品牌。)
    </td>
  </tr>
  <tr>
    <td colspan="2" align="center"><br>
      <input type="submit" class="button" value=" 确定 ">
      <input type="reset" class="button" value=" 重置 ">
      <input type="hidden" name="act" value="update">
	  <input type="hidden" name="brand_id" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['brand_id'];?>
">
    </td>
  </tr>
</tbody></table>
</form>
</div>


<div id="footer">
	版权所有 &copy; 2012-2013 传智播客 - PHP培训 - </div>
</div>

</body>
</html><?php }} ?>
