<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-19 20:16:54
         compiled from "D:\web\htcdos\shopcz\app\views\admin\cat_list.html" */ ?>
<?php /*%%SmartyHeaderCode:2210655339cb6427ac5-53766559%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '16ba7b9492503f88482876f04f3106ab20e05f8d' => 
    array (
      0 => 'D:\\web\\htcdos\\shopcz\\app\\views\\admin\\cat_list.html',
      1 => 1429421793,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2210655339cb6427ac5-53766559',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cat_list' => 0,
    'category' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55339cb694c278_89481607',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55339cb694c278_89481607')) {function content_55339cb694c278_89481607($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>SHOP 管理中心 - 商品分类 </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="<?php echo @constant('RESOURCE_PATH');?>
styles/general.css" rel="stylesheet" type="text/css" />
<link href="<?php echo @constant('RESOURCE_PATH');?>
styles/main.css" rel="stylesheet" type="text/css" />
</head>
<body>

<h1>
<span class="action-span"><a href="index.php?p=admin&c=category&a=add">添加分类</a></span>
<span class="action-span1"><a href="index.php?p=admin&c=index&a=index">SHOP 管理中心</a> </span><span id="search_id" class="action-span1"> - 商品分类 </span>
<div style="clear:both"></div>
</h1>

<form method="post" action="" name="listForm">
<!-- start ad position list -->
	<div class="list-div" id="listDiv">
		<table width="100%" cellspacing="1" cellpadding="2" id="list-table">
			<tbody>
				<tr>
					<th>分类名称</th>
					<th>商品数量</th>
					<th>数量单位</th>
					<th>是否显示</th>
					<th>排序</th>
					<th>操作</th>
				</tr>

        <?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cat_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
?>
				<tr align="center" class="<?php echo $_smarty_tpl->tpl_vars['category']->value['level'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['category']->value['level'];?>
_<?php echo $_smarty_tpl->tpl_vars['category']->value['cat_id'];?>
">
					<td align="left" class="first-cell">
          <?php echo str_repeat("&nbsp;&nbsp;",$_smarty_tpl->tpl_vars['category']->value['level']);?>

						<img src="<?php echo @constant('RESOURCE_PATH');?>
images/menu_minus.gif" id="icon_<?php echo $_smarty_tpl->tpl_vars['category']->value['level'];?>
_<?php echo $_smarty_tpl->tpl_vars['category']->value['cat_id'];?>
" width="9" height="9" border="0" style="margin-left:0em" onclick="rowClicked(this)">
						<span><a href="goods.php?act=list&amp;cat_id=1"><?php echo $_smarty_tpl->tpl_vars['category']->value['cat_name'];?>
</a></span>
					 </td>
					<td width="10%">0</td>
					<td width="10%"><span onclick="listTable.edit(this, 'edit_measure_unit', 1)" title="点击修改内容" style=""><?php echo $_smarty_tpl->tpl_vars['category']->value['measure_unit'];?>
</span></td>
					<td width="10%"><?php if ($_smarty_tpl->tpl_vars['category']->value['is_show']==1) {?><img src="<?php echo @constant('RESOURCE_PATH');?>
images/yes.gif" onclick="listTable.toggle(this, 'toggle_is_show', 1)"><?php } else { ?><img src="<?php echo @constant('RESOURCE_PATH');?>
images/no.gif" onclick="listTable.toggle(this, 'toggle_is_show', 1)"><?php }?></td>
					<td width="10%" align="right"><span onclick="listTable.edit(this, 'edit_sort_order', 1)" title="点击修改内容" style=""><?php echo $_smarty_tpl->tpl_vars['category']->value['sort_order'];?>
</span></td>
					<td width="24%" align="center">
						<a href="category.php?act=move&amp;cat_id=1">转移商品</a> |
						<a href="index.php?p=admin&c=category&a=edit&cat_id=<?php echo $_smarty_tpl->tpl_vars['category']->value['cat_id'];?>
">编辑</a> |
						<a href="index.php?p=admin&c=category&a=del&cat_id=<?php echo $_smarty_tpl->tpl_vars['category']->value['cat_id'];?>
" onclick="javascript:return confirm('您确认要删除这条记录吗?')" title="移除">移除</a>
					</td>
				</tr>
        <?php } ?>
	<!--  start 这些代码是显示使用，没有格式化 开发时可删除-->
   
  	<!--  end这些代码是显示使用，没有格式化 开发时可删除-->
	</tbody>
  </table>
</div>
</form>

  </table>
</div>
</form>


<div id="footer">
	版权所有 &copy; 2012-2013 传智播客 - PHP培训 - </div>
</div>
 <?php echo '<script'; ?>
>
	/**
 * 折叠分类列表
 */
var imgPlus = new Image();
imgPlus.src = "<?php echo @constant('RESOURCE_PATH');?>
images/menu_plus.gif";

function rowClicked(obj)
{
  // 当前图像
  img = obj;
  // 取得上二级tr>td>img对象
  obj = obj.parentNode.parentNode;
  // 整个分类列表表格
  var tbl = document.getElementById("list-table");
  // 当前分类级别
  var lvl = parseInt(obj.className);
  // 是否找到元素
  var fnd = false;
  var sub_display = img.src.indexOf('menu_minus.gif') > 0 ? 'none' : 'table-row' ;
  // 遍历所有的分类
  for (i = 0; i < tbl.rows.length; i++)
  {
      var row = tbl.rows[i];
      if (row == obj)
      {
          // 找到当前行
          fnd = true;
          //document.getElementById('result').innerHTML += 'Find row at ' + i +"<br/>";
      }
      else
      {
          if (fnd == true)
          {
              var cur = parseInt(row.className);
              var icon = 'icon_' + row.id;
              if (cur > lvl)
              {
                  row.style.display = sub_display;
                  if (sub_display != 'none')
                  {
                      var iconimg = document.getElementById(icon);
                      iconimg.src = iconimg.src.replace('plus.gif', 'minus.gif');
                  }
              }
              else
              {
                  fnd = false;
                  break;
              }
          }
      }
  }

  for (i = 0; i < obj.cells[0].childNodes.length; i++)
  {
      var imgObj = obj.cells[0].childNodes[i];
      if (imgObj.tagName == "IMG" && imgObj.src != '<?php echo @constant('RESOURCE_PATH');?>
images/menu_arrow.gif')
      {
          imgObj.src = (imgObj.src == imgPlus.src) ? '<?php echo @constant('RESOURCE_PATH');?>
images/menu_minus.gif' : imgPlus.src;
      }
  }
}
<?php echo '</script'; ?>
>
</body>
</html><?php }} ?>
