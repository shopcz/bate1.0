<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-19 20:16:55
         compiled from "D:\web\htcdos\shopcz\app\views\admin\goods_list.html" */ ?>
<?php /*%%SmartyHeaderCode:2471555339cb78ee9f0-46556917%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '19b5e20decdb5cfd0558153fcd1cddad0fb5c5cb' => 
    array (
      0 => 'D:\\web\\htcdos\\shopcz\\app\\views\\admin\\goods_list.html',
      1 => 1429421794,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2471555339cb78ee9f0-46556917',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'category' => 0,
    'categorys' => 0,
    'setting' => 0,
    'brand' => 0,
    'brands' => 0,
    'intro_type' => 0,
    'intro_types' => 0,
    'is_onsale' => 0,
    'is_on' => 0,
    'goods' => 0,
    'goods_list' => 0,
    'pageBar' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55339cb82014e3_98941851',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55339cb82014e3_98941851')) {function content_55339cb82014e3_98941851($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title></title>
	<link href="<?php echo @constant('RESOURCE_PATH');?>
styles/general.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo @constant('RESOURCE_PATH');?>
styles/main.css" rel="stylesheet" type="text/css" />
</head>
<body>
<h1>
	<span class="action-span"><a href="index.php?p=admin&c=goods&a=add">添加新商品</a></span>
	<span class="action-span1"><a href="index.php?act=main">SHOP 管理中心</a> </span><span id="search_id" class="action-span1"> - 商品列表 </span>
	<div style="clear:both"></div>
</h1>

<div class="form-div">
  <form action="" name="searchForm" method="get">
    <img src="<?php echo @constant('RESOURCE_PATH');?>
images/icon_search.gif" width="26" height="22" border="0" alt="SEARCH">
        <!-- 分类 -->
       <input type="hidden" name="p" value="admin"/>
       <input type="hidden" name="c" value="goods"/>
       <input type="hidden" name="a" value="index"/>
    <select name="cat_id">
		<option value="0">所有分类</option>
		<?php  $_smarty_tpl->tpl_vars['categorys'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['categorys']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['category']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['categorys']->key => $_smarty_tpl->tpl_vars['categorys']->value) {
$_smarty_tpl->tpl_vars['categorys']->_loop = true;
?>
		<option value="<?php echo $_smarty_tpl->tpl_vars['categorys']->value['cat_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['categorys']->value['cat_id']==$_smarty_tpl->tpl_vars['setting']->value['cat_id']) {?>selected<?php }?>>|<?php echo str_repeat("--",$_smarty_tpl->tpl_vars['categorys']->value['level']);
echo $_smarty_tpl->tpl_vars['categorys']->value['cat_name'];?>
</option>
		<?php } ?>
	</select>
    <!-- 品牌 -->
    <select name="brand_id">
		<option value="0">所有品牌</option>
		<?php  $_smarty_tpl->tpl_vars['brands'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['brands']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['brand']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['brands']->key => $_smarty_tpl->tpl_vars['brands']->value) {
$_smarty_tpl->tpl_vars['brands']->_loop = true;
?>
		<option value="<?php echo $_smarty_tpl->tpl_vars['brands']->value['brand_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['brands']->value['brand_id']==$_smarty_tpl->tpl_vars['setting']->value['brand_id']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['brands']->value['brand_name'];?>
</option>
		<?php } ?>
	</select>
    <!-- 推荐 -->
    <select name="intro_type">
		<?php  $_smarty_tpl->tpl_vars['intro_types'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['intro_types']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['intro_type']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['intro_types']->key => $_smarty_tpl->tpl_vars['intro_types']->value) {
$_smarty_tpl->tpl_vars['intro_types']->_loop = true;
?>
		<option value="<?php echo $_smarty_tpl->tpl_vars['intro_types']->value['value'];?>
" <?php if ($_smarty_tpl->tpl_vars['intro_types']->value['value']==$_smarty_tpl->tpl_vars['setting']->value['intro_type']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['intro_types']->value['name'];?>
</option>
		<?php } ?>
	</select>
         
     <!-- 供货商 -->
    <!-- 上架 -->
     <select name="is_onsale">
     	<?php  $_smarty_tpl->tpl_vars['is_on'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['is_on']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['is_onsale']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['is_on']->key => $_smarty_tpl->tpl_vars['is_on']->value) {
$_smarty_tpl->tpl_vars['is_on']->_loop = true;
?>
     	<option value="<?php echo $_smarty_tpl->tpl_vars['is_on']->value['value'];?>
" <?php if ($_smarty_tpl->tpl_vars['is_on']->value['value']==$_smarty_tpl->tpl_vars['setting']->value['is_onsale']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['is_on']->value['name'];?>
</option>
     	<?php } ?>
	</select>
	<!-- 关键字 -->
		关键字 <input type="text" name="keyword" size="15">
		<input type="submit" value=" 搜索 " class="button">
  </form>
</div>

<form method="post" action="" name="listForm" onsubmit="return confirmSubmit(this)">
  <!-- start goods list -->
	<div class="list-div" id="listDiv">
		<table cellpadding="3" cellspacing="1">
			<tbody>
				<tr>
					<th><input type="checkbox">编号</th>
					<th>商品名称</th>
					<th>货号</th>
					<th>价格</th>
					<th>上架</th>
					<th>精品</th>
					<th>新品</th>
					<th>热销</th>
					<th>库存</th>
					<th>操作</th>
				</tr>
				<?php  $_smarty_tpl->tpl_vars['goods_list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['goods_list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['goods']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['goods_list']->key => $_smarty_tpl->tpl_vars['goods_list']->value) {
$_smarty_tpl->tpl_vars['goods_list']->_loop = true;
?>
				<tr>
					<td><input type="checkbox" name="checkboxes[]" value="<?php echo $_smarty_tpl->tpl_vars['goods_list']->value['goods_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['goods_list']->value['goods_id'];?>
</td>
					<td class="first-cell"><span><?php echo $_smarty_tpl->tpl_vars['goods_list']->value['goods_name'];?>
</span></td>
					<td><span><?php echo $_smarty_tpl->tpl_vars['goods_list']->value['goods_sn'];?>
</span></td>
					<td align="right"><span><?php echo $_smarty_tpl->tpl_vars['goods_list']->value['shop_price'];?>
</span></td>
					<td align="center"><img src="<?php echo @constant('RESOURCE_PATH');?>
images/<?php if ($_smarty_tpl->tpl_vars['goods_list']->value['is_onsale']==1) {?>yes<?php } else { ?>no<?php }?>.gif" onclick=""></td>
					<td align="center"><img src="<?php echo @constant('RESOURCE_PATH');?>
images/<?php if ($_smarty_tpl->tpl_vars['goods_list']->value['is_best']==1) {?>yes<?php } else { ?>no<?php }?>.gif" onclick=""></td>
					<td align="center"><img src="<?php echo @constant('RESOURCE_PATH');?>
images/<?php if ($_smarty_tpl->tpl_vars['goods_list']->value['is_new']==1) {?>yes<?php } else { ?>no<?php }?>.gif" onclick=""></td>
					<td align="center"><img src="<?php echo @constant('RESOURCE_PATH');?>
images/<?php if ($_smarty_tpl->tpl_vars['goods_list']->value['is_hot']==1) {?>yes<?php } else { ?>no<?php }?>.gif" onclick=""></td>
				
					<td align="right"><span onclick=""><?php echo $_smarty_tpl->tpl_vars['goods_list']->value['goods_number'];?>
</span></td>
					<td align="center">
						<a href="index.php?p=admin&c=goods&a=edit&goods_id=<?php echo $_smarty_tpl->tpl_vars['goods_list']->value['goods_id'];?>
" title="编辑"><img src="<?php echo @constant('RESOURCE_PATH');?>
images/icon_edit.gif" width="16" height="16" border="0"></a>
						<a href="index.php?p=admin&c=goods&a=del&goods_id=<?php echo $_smarty_tpl->tpl_vars['goods_list']->value['goods_id'];?>
" onclick="javascript:return confirm('您确实要把该商品放入回收站吗？')" title="回收站"><img src="<?php echo @constant('RESOURCE_PATH');?>
images/icon_trash.gif" width="16" height="16" border="0"></a>         
					</td>
				</tr>
				<?php } ?>
	<!-- start 这段代码没有格式化，只是暂时显示数据用 开发的时候将会删除-->
 
  <!-- end 这段代码没有格式化，只是暂时显示数据用 开发的时候将会删除-->
  </tbody>
 </table>
<!-- end goods list -->

	<!-- 分页 -->
	<table id="page-table" cellspacing="0">
		<tbody>
			<tr>
				<td align="right" nowrap="true" style="background-color: rgb(255, 255, 255);">
					<!-- $Id: page.htm 14216 2008-03-10 02:27:21Z testyang $ -->
					<div id="turn-page">
					<?php echo $_smarty_tpl->tpl_vars['pageBar']->value;?>

						<!-- 总计  <span id="totalRecords">22</span>个记录分为 <span id="totalPages">2</span>页当前第 <span id="pageCurrent">1</span>
						页，每页 <input type="text" size="3" id="pageSize" value="15" onkeypress="return listTable.changePageSize(event)">
						<span id="page-link">
							<a href="javascript:listTable.gotoPageFirst()">第一页</a>
							<a href="javascript:listTable.gotoPagePrev()">上一页</a>
							<a href="javascript:listTable.gotoPageNext()">下一页</a>
							<a href="javascript:listTable.gotoPageLast()">最末页</a>
							<select id="gotoPage" onchange="listTable.gotoPage(this.value)">
							<option value="1">1</option><option value="2">2</option>          </select>
						</span> -->
					</div>
				</td>
			</tr>
		</tbody>
	</table>
</div>

<div>
	<input type="hidden" name="act" value="batch">
	<select name="type" id="selAction" onchange="changeAction()">
		<option value="">请选择...</option>
		<option value="trash">回收站</option>
		<option value="on_sale">上架</option>
		<option value="not_on_sale">下架</option>
		<option value="best">精品</option>
		<option value="not_best">取消精品</option>
		<option value="new">新品</option>
		<option value="not_new">取消新品</option>
		<option value="hot">热销</option>
		<option value="not_hot">取消热销</option>
		<option value="move_to">转移到分类</option>
		<option value="suppliers_move_to">转移到供货商</option>
	</select>

    <input type="hidden" name="extension_code" value="">
    <input type="submit" value=" 确定 " id="btnSubmit" name="btnSubmit" class="button" disabled="true">
</div>
</form>

<div id="footer">
	版权所有 &copy; 2012-2013 传智播客 - PHP培训 - 
</div>

</body>
</html><?php }} ?>
