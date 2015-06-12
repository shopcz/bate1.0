<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-20 02:06:37
         compiled from "D:\web\htcdos\shopcz\app\views\admin\goods_edit.html" */ ?>
<?php /*%%SmartyHeaderCode:56635533cdbb4cf0d3-64172823%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a1ff5406132e318779d62f9fb35b03573445b207' => 
    array (
      0 => 'D:\\web\\htcdos\\shopcz\\app\\views\\admin\\goods_edit.html',
      1 => 1429466789,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '56635533cdbb4cf0d3-64172823',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5533cdbc45dfd5_08222215',
  'variables' => 
  array (
    'goods' => 0,
    'categorys' => 0,
    'category' => 0,
    'brands' => 0,
    'brand' => 0,
    'types' => 0,
    'type' => 0,
    'goods_attr_html' => 0,
    'photo' => 0,
    'gallery' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5533cdbc45dfd5_08222215')) {function content_5533cdbc45dfd5_08222215($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\web\\htcdos\\shopcz\\system\\libraries\\Smarty\\plugins\\modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title></title>
	<link href="<?php echo @constant('RESOURCE_PATH');?>
styles/general.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo @constant('RESOURCE_PATH');?>
styles/main.css" rel="stylesheet" type="text/css" />
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo @constant('RESOURCE_PATH');?>
js/transport.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo @constant('RESOURCE_PATH');?>
js/common.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo @constant('RESOURCE_PATH');?>
js/utils.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo @constant('RESOURCE_PATH');?>
js/selectzone.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo @constant('RESOURCE_PATH');?>
js/colorselector.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="public/js/calendar.php?lang="><?php echo '</script'; ?>
>
	<link href="public/js/calendar/calendar.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1>
	<span class="action-span"><a href="index.php?p=admin&c=goods&a=index">商品列表</a></span>
	<span class="action-span1"><a href="index.php?act=main">SHOP 管理中心 </a> </span><span id="search_id" class="action-span1"> - 编辑商品信息 </span>
	<div style="clear:both"></div>
</h1>

<div class="tab-div">
    <!-- tab bar -->
    <div id="tabbar-div">
      <p>
        <span class="tab-front" id="general-tab">通用信息</span>
		<span class="tab-back" id="detail-tab">详细描述</span>
		<span class="tab-back" id="mix-tab">其他信息</span>
		<span class="tab-back" id="properties-tab">商品属性</span>
		<span class="tab-back" id="gallery-tab">商品相册</span>
      </p>
    </div>

    <!-- tab body -->
    <div id="tabbody-div">
      <form enctype="multipart/form-data" action="index.php?p=admin&c=goods&a=save" method="post" name="theForm"> 
        <input type="hidden" name="MAX_FILE_SIZE" value="2097152">
		 
		 <!-- 通用信息 -->
        <table width="90%" id="general-table" align="center" style="display: table;">
			<tbody>
				<tr>
					<td class="label">商品名称：</td>
					<td><input type="text" name="goods_name" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_name'];?>
" size="30"><span class="require-field">*</span></td>
				</tr>
				<tr>
					<td class="label">商品货号： </td>
					<td><input type="text" name="goods_sn" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_sn'];?>
" size="20" onblur="checkGoodsSn(this.value,'32')"><span id="goods_sn_notice"></span><br>
					<span class="notice-span" style="display:block" id="noticeGoodsSN">如果您不输入商品货号，系统将自动生成一个唯一的货号。</span></td>
			</tr>
			<tr>
				<td class="label">商品分类：</td>
				<td>
					<select name="cat_id" onchange="hideCatDiv()">
						<option value="0">请选择...</option>
						<?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categorys']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['category']->value['cat_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['category']->value['cat_id']==$_smarty_tpl->tpl_vars['goods']->value['cat_id']) {?>selected<?php }?>><?php echo str_repeat("--",$_smarty_tpl->tpl_vars['category']->value['level']);?>
|<?php echo $_smarty_tpl->tpl_vars['category']->value['cat_name'];?>
</option>
						<?php } ?>
					</select>
                 </td>
			</tr>
			<tr>
				<td class="label">商品品牌：</td>
				<td>
					<select name="brand_id" onchange="hideBrandDiv()">
						<option value="0">请选择...</option>
						<?php  $_smarty_tpl->tpl_vars['brand'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['brand']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['brands']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['brand']->key => $_smarty_tpl->tpl_vars['brand']->value) {
$_smarty_tpl->tpl_vars['brand']->_loop = true;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['brand']->value['brand_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['brand']->value['brand_id']==$_smarty_tpl->tpl_vars['goods']->value['brand_id']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['brand']->value['brand_name'];?>
</option>
						<?php } ?>
					</select>
				</td>
			</tr>
            <tr>
				<td class="label">本店售价：</td>
				<td><input type="text" name="shop_price" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['shop_price'];?>
" size="20" onblur="priceSetted()">
			
				<span class="require-field">*</span></td>
			</tr>
		<!-- 	<tr>
            <td class="label">会员价格：</td>
            <td><input type="text" name="user_price" value="" size="20" onblur="priceSetted()"></td>
          </tr> -->

          <tr>
            <td class="label">市场售价：</td>
            <td><input type="text" name="market_price" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['market_price'];?>
" size="20">
              <input type="button" value="取整数" onclick="integral_market_price()">
            </td>
          </tr>
    
          <tr>
            <td class="label"><label for="is_promote"><input type="checkbox" id="is_promote" name="is_promote" value="1" checked="checked" onclick="handlePromote(this.checked);"> 促销价：</label></td>
            <td id="promote_3"><input type="text" id="promote_1" name="promote_price" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['promote_price'];?>
" size="20"></td>
          </tr>
            <tr id="promote_4">
            <td class="label" id="promote_5">促销日期：</td>
            <td id="promote_6">
              <input name="promote_start_time" type="text" id="promote_start_date" size="12" value="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['goods']->value['promote_start_time'],"%Y-%m-%d");?>
" readonly="readonly"><input name="selbtn1" type="button" id="selbtn1" onclick="return showCalendar('promote_start_date', '%Y-%m-%d', false, false, 'selbtn1');" value="选择" class="button"> - <input name="promote_end_time" type="text" id="promote_end_date" size="12" value="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['goods']->value['promote_end_time'],"%Y-%m-%d");?>
" readonly="readonly"><input name="selbtn2" type="button" id="selbtn2" onclick="return showCalendar('promote_end_date', '%Y-%m-%d', false, false, 'selbtn2');" value="选择" class="button">
            </td>
          </tr>
         
          <tr>
            <td class="label">上传商品图片：</td>
            <td>
              <input type="file" name="goods_img" size="35">
                              <a href="goods.php?act=show_image&amp;img_url=<?php echo @constant('RESOURCE_PATH');
echo @constant('RESOURCE_PATH');?>
images/200905/goods_img/32_G_1242110760868.jpg" target="_blank"><img src="<?php echo @constant('RESOURCE_PATH');?>
images/yes.gif" border="0"></a>
                            <br><input type="text" size="40" value="商品图片外部URL" style="color:#aaa;" onfocus="if (this.value == '商品图片外部URL'){this.value='http://';this.style.color='#000';}" name="goods_img_url">
            </td>
          </tr>
          <tr id="auto_thumb_1">
            <td class="label"> 上传商品缩略图：</td>
            <td id="auto_thumb_3">
              <input type="file" name="goods_thumb" size="35" disabled="">
                              <a href="goods.php?act=show_image&amp;img_url=<?php echo @constant('RESOURCE_PATH');?>
images/200905/thumb_img/32_thumb_G_1242110760196.jpg" target="_blank"><img src="<?php echo @constant('RESOURCE_PATH');?>
images/yes.gif" border="0"></a>
                            <br><input type="text" size="40" value="商品缩略图外部URL" style="color:#aaa;" onfocus="if (this.value == '商品缩略图外部URL'){this.value='http://';this.style.color='#000';}" name="goods_thumb_url" disabled="">
                            <br><label for="auto_thumb"><input type="checkbox" id="auto_thumb" name="auto_thumb" checked="true" value="1" onclick="handleAutoThumb(this.checked)">自动生成商品缩略图</label>            </td>
          </tr>
        </tbody></table>

        <!-- 详细描述 -->
        <table width="90%" id="detail-table" style="display: none;">
          <tbody><tr>
            <td><textarea name="goods_desc" style="display:none;"><?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_desc'];?>
</textarea>
            <input type="hidden" id="goods_desc___Config" value="" style="display:none"><iframe id="goods_desc___Frame" src="<?php echo @constant('RESOURCE_PATH');?>
fckeditor/editor/fckeditor.html?InstanceName=goods_desc&Toolbar=Normal" width="100%" height="320" frameborder="0" scrolling="no" style="margin: 0px; padding: 0px; border: 0px; background-color: transparent; background-image: none; width: 100%; height: 320px;"></iframe></td>
          </tr>
        </tbody></table>

        <!-- 其他信息 -->
        <table width="90%" id="mix-table" style="display: none;" align="center">
                    <tbody><!-- <tr>
            <td class="label">商品重量：</td>
            <td><input type="text" name="goods_weight" value="" size="20"> <select name="weight_unit"><option value="1">千克</option><option value="0.001" selected="">克</option></select></td>
          </tr> -->
                              <tr>
            <td class="label"><a href="javascript:showNotice('noticeStorage');" title="点击此处查看提示信息"><img src="<?php echo @constant('RESOURCE_PATH');?>
images/notice.gif" width="16" height="16" border="0" alt="点击此处查看提示信息"></a> 商品库存数量：</td>
<!--            <td><input type="text" name="goods_number" value="4" size="20" readonly="readonly" /><br />-->
            <td><input type="text" name="goods_number" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_number'];?>
" size="20"><br>
            <span class="notice-span" style="display:block" id="noticeStorage">库存在商品为虚货或商品存在货品时为不可编辑状态，库存数值取决于其虚货数量或货品数量</span></td>
          </tr>
          <tr>
            <td class="label">库存警告数量：</td>
            <td><input type="text" name="warn_number" value="1" size="20"></td>
          </tr>
                    <tr>
            <td class="label">加入推荐：</td>
            <td><input type="checkbox" name="is_best" value="1" <?php if ($_smarty_tpl->tpl_vars['goods']->value['is_best']==1) {?>checked<?php }?>>精品 <input type="checkbox" name="is_new" value="1" <?php if ($_smarty_tpl->tpl_vars['goods']->value['is_new']==1) {?>checked<?php }?>>新品 <input type="checkbox" name="is_hot" value="1" <?php if ($_smarty_tpl->tpl_vars['goods']->value['is_hot']==1) {?>checked<?php }?>>热销</td>
          </tr>
          <tr id="alone_sale_1">
            <td class="label" id="alone_sale_2">上架：</td>
            <td id="alone_sale_3"><input type="checkbox" name="is_onsale" value="1" <?php if ($_smarty_tpl->tpl_vars['goods']->value['is_onsale']==1) {?>checked<?php }?>> 打勾表示允许销售，否则不允许销售。</td>
          </tr>
         <!--  <tr>
            <td class="label">能作为普通商品销售：</td>
            <td><input type="checkbox" name="is_alone_sale" value="1" checked="checked"> 打勾表示能作为普通商品销售，否则只能作为配件或赠品销售。</td>
          </tr> -->
          <!-- <tr>
            <td class="label">是否为免运费商品</td>
            <td><input type="checkbox" name="is_shipping" value="1"> 打勾表示此商品不会产生运费花销，否则按照正常运费计算。</td>
          </tr>
          <tr>
            <td class="label">商品关键词：</td>
            <td><input type="text" name="keywords" value="2008年10月 GSM,850,900,1800,1900 黑色" size="40"> 用空格分隔</td>
          </tr> -->
          <tr>
            <td class="label">商品简单描述：</td>
            <td><textarea name="goods_brief" cols="40" rows="3"><?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_brief'];?>
</textarea></td>
          </tr>
       <!--    <tr>
            <td class="label">
            <a href="javascript:showNotice('noticeSellerNote');" title="点击此处查看提示信息"><img src="<?php echo @constant('RESOURCE_PATH');?>
images/notice.gif" width="16" height="16" border="0" alt="点击此处查看提示信息"></a> 商家备注： </td>
            <td><textarea name="seller_note" cols="40" rows="3"></textarea><br>
            <span class="notice-span" style="display:block" id="noticeSellerNote">仅供商家自己看的信息</span></td>
          </tr> -->
        </tbody></table>

        <!-- 商品属性 -->
         <table width="90%" id="properties-table" style="display: none;" align="center">
			<tbody>
				<tr>
					<td class="label">商品类型：</td>
					<td>
						<select name="type_id" onchange="getAttrList(<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_id'];?>
)">
							<option value="0">请选择商品类型</option>
							<?php  $_smarty_tpl->tpl_vars['type'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['type']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['types']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['type']->key => $_smarty_tpl->tpl_vars['type']->value) {
$_smarty_tpl->tpl_vars['type']->_loop = true;
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['type']->value['type_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['type']->value['type_id']==$_smarty_tpl->tpl_vars['goods']->value['type_id']) {?>selected="true"<?php }?>><?php echo $_smarty_tpl->tpl_vars['type']->value['type_name'];?>
</option>
							<?php } ?>       
						</select><br>
						<span class="notice-span" style="display:block" id="noticeGoodsType">请选择商品的所属类型，进而完善此商品的属性</span>
					</td>
				</tr>
				 <tr>
            <td id="tbody-goodsAttr" colspan="2" style="padding:0"><?php echo $_smarty_tpl->tpl_vars['goods_attr_html']->value;?>
</td>
          </tr>
        </tbody>
	</table>
        
        <!-- 商品相册 -->
        <table width="90%" id="gallery-table" style="display: none;" align="center">
          <tbody><tr>
            <td>
        <?php  $_smarty_tpl->tpl_vars['gallery'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['gallery']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['photo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['gallery']->key => $_smarty_tpl->tpl_vars['gallery']->value) {
$_smarty_tpl->tpl_vars['gallery']->_loop = true;
?>
				<div id="gallery_<?php echo $_smarty_tpl->tpl_vars['gallery']->value['img_id'];?>
" style="float:left; text-align:center; border: 1px solid #DADADA; margin: 4px; padding:2px;">
                <a href="javascript:;" onclick="if (confirm('您确实要删除该图片吗？')) dropImg('<?php echo $_smarty_tpl->tpl_vars['gallery']->value['img_id'];?>
')">[-]</a><br>
                <a href="" target="_blank">
                <img src="<?php echo $_smarty_tpl->tpl_vars['gallery']->value['thumb_url'];?>
" width="100" height="100" border="0">
                </a><br>
                <input type="text" value="" size="15" name="old_img_desc[41]">
        </div>
        <?php } ?>


                          </td>
          </tr>
          <tr><td>&nbsp;</td></tr>
          <tr>
            <td>
              <a href="javascript:;" onclick="addImg(this)">[+]</a>
              图片描述 <input type="text" name="img_desc[]" size="20">
              上传文件 <input type="file" name="img_url[]">
              <input type="text" size="40" value="或者输入外部图片链接地址" style="color:#aaa;" onfocus="if (this.value == '或者输入外部图片链接地址'){this.value='http://';this.style.color='#000';}" name="img_file[]">
            </td>
          </tr>
        </tbody></table>

        <div class="button-div">
         <input type="hidden" name="goods_id" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_id'];?>
">
                    <input type="submit" value=" 确定 " class="button">
          <input type="reset" value=" 重置 " class="button">
        </div>
        <input type="hidden" name="act" value="update">
      </form>
    </div>
</div>


<div id="footer">
	版权所有 &copy; 2012-2013 传智播客 - PHP培训 - 
</div>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo @constant('RESOURCE_PATH');?>
js/tab.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
	function addImg(obj){
      var src  = obj.parentNode.parentNode;
      var idx  = rowindex(src);
      var tbl  = document.getElementById('gallery-table');
      var row  = tbl.insertRow(idx + 1);
      var cell = row.insertCell(-1);
      cell.innerHTML = src.cells[0].innerHTML.replace(/(.*)(addImg)(.*)(\[)(\+)/i, "$1removeImg$3$4-");
  	}

    function removeImg(obj){
      var row = rowindex(obj.parentNode.parentNode);
      var tbl = document.getElementById('gallery-table');
      tbl.deleteRow(row);
  	}

   	function dropImg(imgId){
    	Ajax.call('index.php?p=admin&c=goods&a=dropimage&is_ajax=1', "img_id="+imgId, dropImgResponse, "GET", "JSON");
  	}

  	function dropImgResponse(result){
      if (result.error == 0){
          document.getElementById('gallery_' + result.content).style.display = 'none';
      }
  	}

<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">
 onload = function()
  {

      handlePromote(document.forms['theForm'].elements['is_promote'].checked);

      if (document.forms['theForm'].elements['auto_thumb'])
      {
          handleAutoThumb(document.forms['theForm'].elements['auto_thumb'].checked);
      }

      document.forms['theForm'].reset();
  }
   function handlePromote(checked)
  {
      document.forms['theForm'].elements['promote_price'].disabled = !checked;
      document.forms['theForm'].elements['selbtn1'].disabled = !checked;
      document.forms['theForm'].elements['selbtn2'].disabled = !checked;
  }

  function handleAutoThumb(checked)
  {
      document.forms['theForm'].elements['goods_thumb'].disabled = checked;
      document.forms['theForm'].elements['goods_thumb_url'].disabled = checked;
  }
  
  function integral_market_price()
  {
    document.forms['theForm'].elements['market_price'].value = parseInt(document.forms['theForm'].elements['market_price'].value);
  }

  /**
   * 根据商品类型ID获取商品属性列表
   */

  function getAttrList(goodsId)
  {
      var selGoodsType = document.forms['theForm'].elements['type_id'];

      if (selGoodsType != undefined)
      {
          var goodsType = selGoodsType.options[selGoodsType.selectedIndex].value;

          Ajax.call('index.php?p=admin&c=goods&a=getattrlist&is_ajax=1&', 'goods_id=' + goodsId + "&goods_type=" + goodsType, setAttrList, "GET", "JSON");
      }
  }

  function setAttrList(result, text_result)
  {
    document.getElementById('tbody-goodsAttr').innerHTML = result.content;
  }
<?php echo '</script'; ?>
>

</body>
</html><?php }} ?>
