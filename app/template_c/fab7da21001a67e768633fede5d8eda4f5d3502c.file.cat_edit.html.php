<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-27 15:45:57
         compiled from "D:\web\htcdos\shopcz\app\views\admin\cat_edit.html" */ ?>
<?php /*%%SmartyHeaderCode:32465553de935be1170-87786402%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fab7da21001a67e768633fede5d8eda4f5d3502c' => 
    array (
      0 => 'D:\\web\\htcdos\\shopcz\\app\\views\\admin\\cat_edit.html',
      1 => 1429421793,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32465553de935be1170-87786402',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cat_info' => 0,
    'category_list' => 0,
    'category' => 0,
    'attr_list' => 0,
    'att_cat_id' => 0,
    'val' => 0,
    'item' => 0,
    'i' => 0,
    'attr_val' => 0,
    'attr_id' => 0,
    'type_list' => 0,
    'types' => 0,
    'type_attr' => 0,
    'type_attr_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_553de9362c13e8_11199805',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553de9362c13e8_11199805')) {function content_553de9362c13e8_11199805($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>SHOP 管理中心 - 添加分类 </title>
<meta name="robots" content="noindex, nofollow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="<?php echo @constant('RESOURCE_PATH');?>
styles/general.css" rel="stylesheet" type="text/css" />
<link href="<?php echo @constant('RESOURCE_PATH');?>
styles/main.css" rel="stylesheet" type="text/css" />
</head>
<body>

<h1>
<span class="action-span"><a href="index.php?p=admin&c=category&a=index">商品分类</a></span>
<span class="action-span1"><a href="index.php?act=main">SHOP 管理中心</a> </span><span id="search_id" class="action-span1"> - 添加分类 </span>
<div style="clear:both"></div>
</h1>
<!-- start add new category form -->
<div class="main-div">
  <form action="index.php?p=admin&c=category&a=save" method="post" name="theForm" enctype="multipart/form-data" onsubmit="return validate()">
	 <table width="100%" id="general-table">
		<tbody>
			<tr>
				<td class="label">分类名称:</td>
				<td><input type="text" name="cat_name" maxlength="20" value="<?php echo $_smarty_tpl->tpl_vars['cat_info']->value['cat_name'];?>
" size="27"> <font color="red">*</font></td>
			</tr>
			<tr>
				<td class="label">上级分类:</td>
				<td>
					<select name="parent_id">
						<option value="0">顶级分类</option>
						<?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['category_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['category']->value['cat_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['category']->value['cat_id']==$_smarty_tpl->tpl_vars['cat_info']->value['parent_id']) {?>selected<?php } else {
}?>>|<?php echo str_repeat('-',$_smarty_tpl->tpl_vars['category']->value['level']);
echo $_smarty_tpl->tpl_vars['category']->value['cat_name'];?>
</option>
						<?php } ?>         
					</select>
				</td>
			</tr>

			<tr id="measure_unit">
				<td class="label">数量单位:</td>
				<td><input type="text" name="measure_unit" value="<?php echo $_smarty_tpl->tpl_vars['cat_info']->value['measure_unit'];?>
" size="12"></td>
			</tr>
			<tr>
				<td class="label">排序:</td>
				<td><input type="text" name="sort_order" value="<?php echo $_smarty_tpl->tpl_vars['cat_info']->value['sort_order'];?>
" size="15"></td>
			</tr>

			<tr>
				<td class="label">是否显示:</td>
				<td><input type="radio" name="is_show" value="1" <?php if ($_smarty_tpl->tpl_vars['cat_info']->value['is_show']==1) {?>checked<?php } else {
}?>> 是<input type="radio" name="is_show" value="0" <?php if ($_smarty_tpl->tpl_vars['cat_info']->value['is_show']==0) {?>checked<?php } else {
}?>> 否  </td>
			</tr>
			<tr>
				<td class="label">筛选属性:</td>
				<td>
          <?php echo '<script'; ?>
 type="text/javascript">
          var arr = new Array();
          var sel_filter_attr = "请选择筛选属性";
           <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_smarty_tpl->tpl_vars['att_cat_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['attr_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
 $_smarty_tpl->tpl_vars['att_cat_id']->value = $_smarty_tpl->tpl_vars['val']->key;
?>
            arr[<?php echo $_smarty_tpl->tpl_vars['att_cat_id']->value;?>
] = new Array();
            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['val']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
              <?php  $_smarty_tpl->tpl_vars['attr_val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['attr_val']->_loop = false;
 $_smarty_tpl->tpl_vars['attr_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['item']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['attr_val']->key => $_smarty_tpl->tpl_vars['attr_val']->value) {
$_smarty_tpl->tpl_vars['attr_val']->_loop = true;
 $_smarty_tpl->tpl_vars['attr_id']->value = $_smarty_tpl->tpl_vars['attr_val']->key;
?>
                arr[<?php echo $_smarty_tpl->tpl_vars['att_cat_id']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
] = ["<?php echo $_smarty_tpl->tpl_vars['attr_val']->value;?>
", <?php echo $_smarty_tpl->tpl_vars['attr_id']->value;?>
];
              <?php } ?>
            <?php } ?>
          <?php } ?>
          function changeCat(obj)
          {
            var key = obj.value;
            var sel = window.ActiveXObject ? obj.parentNode.childNodes[4] : obj.parentNode.childNodes[5];
            sel.length = 0;
            sel.options[0] = new Option(sel_filter_attr, 0);
            if (arr[key] == undefined)
            {
              return;
            }
            for (var i= 0; i < arr[key].length ;i++ )
            {
              sel.options[i+1] = new Option(arr[key][i][0], arr[key][i][1]);
            }

          }

          <?php echo '</script'; ?>
>

         
          <table width="100%" id="tbody-attr" align="center">
                       
                        <tbody>
<!--             <tr>
              <td>
                                    <a href="javascript:;" onclick="addFilterAttr(this)">[+]</a>
                                  <select onchange="changeCat(this)"><option value="0">请选择商品类型</option><?php  $_smarty_tpl->tpl_vars['types'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['types']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['type_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['types']->key => $_smarty_tpl->tpl_vars['types']->value) {
$_smarty_tpl->tpl_vars['types']->_loop = true;
?>
                                  <option value="<?php echo $_smarty_tpl->tpl_vars['types']->value['type_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['types']->value['type_name'];?>
</option>
                                  <?php } ?></select>&nbsp;&nbsp;
                 <select name="filter_attr[]"><option value="0">请选择筛选属性</option></select><br>
              </td>
            </tr> -->
            <?php  $_smarty_tpl->tpl_vars['type_attr_list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['type_attr_list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['type_attr']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['type_attr_list']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['type_attr_list']->key => $_smarty_tpl->tpl_vars['type_attr_list']->value) {
$_smarty_tpl->tpl_vars['type_attr_list']->_loop = true;
 $_smarty_tpl->tpl_vars['type_attr_list']->index++;
?>
             <tr>
              <td>
              					 <?php if ($_smarty_tpl->tpl_vars['type_attr_list']->index==0) {?>
                                    <a href="javascript:;" onclick="addFilterAttr(this)">[+]</a>
                                 <?php } else { ?>
                                	 <a href="javascript:;" onclick="removeFilterAttr(this)">[-]</a>
                                 <?php }?>
                                  <select onchange="changeCat(this)"><option value="0">请选择商品类型</option>
                                  <?php  $_smarty_tpl->tpl_vars['types'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['types']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['type_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['types']->key => $_smarty_tpl->tpl_vars['types']->value) {
$_smarty_tpl->tpl_vars['types']->_loop = true;
?>
                                  <option value="<?php echo $_smarty_tpl->tpl_vars['types']->value['type_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['type_attr_list']->value['type_id']==$_smarty_tpl->tpl_vars['types']->value['type_id']) {?>selected =true<?php }?>><?php echo $_smarty_tpl->tpl_vars['types']->value['type_name'];?>
</option>
                                  <?php } ?></select>&nbsp;&nbsp;
                 <select name="filter_attr[]"><option value="0">请选择筛选属性</option>
                 	<option value="<?php echo $_smarty_tpl->tpl_vars['type_attr_list']->value['attr_id'];?>
" selected="true"><?php echo $_smarty_tpl->tpl_vars['type_attr_list']->value['attr_name'];?>
</option>
                 </select><br>

              </td>
            </tr>
            <?php } ?>
                        
                        
                        
                      </tbody></table>

          <span class="notice-span" style="display:block" id="noticeFilterAttr">筛选属性可在前分类页面筛选商品</span>
        </td>
			</tr>
      <tr>
        <td class="label">分类描述:</td>
        <td>
          <textarea name="cat_desc" rows="6" cols="48"><?php echo $_smarty_tpl->tpl_vars['cat_info']->value['cat_desc'];?>
</textarea>
        </td>
      </tr>
      </tbody></table>
      <div class="button-div">
        <input type="submit" value=" 确定 ">
        <input type="reset" value=" 重置 ">
      </div>
    <input type="hidden" name="cat_id" value="<?php echo $_smarty_tpl->tpl_vars['cat_info']->value['cat_id'];?>
">
  </form>
</div>



<div id="footer">
	版权所有 &copy; 2012-2013 传智播客 - PHP培训 - 
</div>

</div>
<?php echo '<script'; ?>
 language="JavaScript">
<!--
// 这里把JS用到的所有语言都赋值到这里
var process_request = "正在处理您的请求...";
var todolist_caption = "记事本";
var todolist_autosave = "自动保存";
var todolist_save = "保存";
var todolist_clear = "清除";
var todolist_confirm_save = "是否将更改保存到记事本？";
var todolist_confirm_clear = "是否清空内容？";
var catname_empty = "分类名称不能为空!";
var unit_empyt = "数量单位不能为空!";
var is_leafcat = "您选定的分类是一个末级分类。\r\n新分类的上级分类不能是一个末级分类";
var not_leafcat = "您选定的分类不是一个末级分类。\r\n商品的分类转移只能在末级分类之间才可以操作。";
var filter_attr_not_repeated = "筛选属性不可重复";
var filter_attr_not_selected = "请选择筛选属性";
//-->
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo @constant('RESOURCE_PATH');?>
js/utils.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo @constant('RESOURCE_PATH');?>
js/validator.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 language="javascript">


<!--
document.forms['theForm'].elements['cat_name'].focus();
/**
 * 检查表单输入的数据
 */
function validate()
{
  validator = new Validator("theForm");
  validator.required("cat_name",      catname_empty);
  if (parseInt(document.forms['theForm'].elements['grade'].value) >10 || parseInt(document.forms['theForm'].elements['grade'].value) < 0)
  {
    validator.addErrorMsg('价格分级数量只能是0-10之内的整数');
  }
  return validator.passed();
}


/**
 * 新增一个筛选属性
 */
function addFilterAttr(obj)
{
  var src = obj.parentNode.parentNode;
  var tbl = document.getElementById('tbody-attr');

  var validator  = new Validator('theForm');
  var filterAttr = document.getElementsByName("filter_attr[]");

  if (filterAttr[filterAttr.length-1].selectedIndex == 0)
  {
    validator.addErrorMsg(filter_attr_not_selected);
  }
  
  for (i = 0; i < filterAttr.length; i++)
  {
    for (j = i + 1; j <filterAttr.length; j++)
    {
      if (filterAttr.item(i).value == filterAttr.item(j).value)
      {
        validator.addErrorMsg(filter_attr_not_repeated);
      } 
    } 
  }

  if (!validator.passed())
  {
    return false;
  }

  var row  = tbl.insertRow(tbl.rows.length);
  var cell = row.insertCell(-1);
  cell.innerHTML = src.cells[0].innerHTML.replace(/(.*)(addFilterAttr)(.*)(\[)(\+)/i, "$1removeFilterAttr$3$4-");
  filterAttr[filterAttr.length-1].selectedIndex = 0;
}

/**
 * 删除一个筛选属性
 */
function removeFilterAttr(obj)
{
  var row = rowindex(obj.parentNode.parentNode);
  var tbl = document.getElementById('tbody-attr');

  tbl.deleteRow(row);
}
//-->


<?php echo '</script'; ?>
>
</body>
</html><?php }} ?>
