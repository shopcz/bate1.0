<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-12 02:27:52
         compiled from "D:\web\htcdos\shopcz\app\views\home\list.html" */ ?>
<?php /*%%SmartyHeaderCode:325575534afd2b33971-74228516%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cefaaca413757116d72bcbc62c47e6500a68153c' => 
    array (
      0 => 'D:\\web\\htcdos\\shopcz\\app\\views\\home\\list.html',
      1 => 1429586108,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '325575534afd2b33971-74228516',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5534afd343e764_11112663',
  'variables' => 
  array (
    'one' => 0,
    'sub_category' => 0,
    'sub' => 0,
    'goods' => 0,
    'good_list' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5534afd343e764_11112663')) {function content_5534afd343e764_11112663($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>商品列表页</title>
	<link rel="stylesheet" href="<?php echo @constant('RESOURCE_PATH');?>
css/base.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo @constant('RESOURCE_PATH');?>
css/shop_common.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo @constant('RESOURCE_PATH');?>
css/shop_header.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo @constant('RESOURCE_PATH');?>
css/shop_list.css" type="text/css" />
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo @constant('RESOURCE_PATH');?>
js/jquery.js" ><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo @constant('RESOURCE_PATH');?>
js/topNav.js" ><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo @constant('RESOURCE_PATH');?>
js/shop_list.js" ><?php echo '</script'; ?>
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
			<a href="">商品分类</a>&nbsp;›&nbsp;
			<a href="">男装女装</a>&nbsp;›&nbsp;
			<a href="">男装</a>
		</span>
	</div>
	<div class="clear"></div>
	<!-- 面包屑 End -->

	<!-- Header End -->


	<!-- List Body 2013/03/27 -->
	<div class="shop_bd clearfix">
		<div class="shop_bd_list_left clearfix">
			<!-- 左边商品分类 -->
			<div class="shop_bd_list_bk clearfix">
				<div class="title">商品分类</div>
				<div class="contents clearfix">
					<dl class="shop_bd_list_type_links clearfix">
						<dt><strong><?php echo $_smarty_tpl->tpl_vars['one']->value['cat_name'];?>
</strong></dt>
						<dd>
						<?php  $_smarty_tpl->tpl_vars['sub'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sub']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sub_category']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sub']->key => $_smarty_tpl->tpl_vars['sub']->value) {
$_smarty_tpl->tpl_vars['sub']->_loop = true;
?>
							<span><a href="index.php?p=home&c=category&a=index&cat_id=<?php echo $_smarty_tpl->tpl_vars['sub']->value['cat_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['sub']->value['cat_name'];?>
</a></span>
						<?php } ?>
						</dd>
					</dl>
				</div>
			</div>
			<!-- 左边商品分类 End -->

			<!-- 热卖推荐商品 -->
			<div class="shop_bd_list_bk clearfix">
				<div class="title">热卖推荐商品</div>
				<div class="contents clearfix">
					<ul class="clearfix">
						
						<li class="clearfix">
							<div class="goods_name"><a href="">Gap经典弹力纯色长袖T恤|000891347|原价149元</a></div>
							<div class="goods_pic"><span class="goods_price">¥ 279.00 </span><a href=""><img src="<?php echo @constant('RESOURCE_PATH');?>
images/89a6d6466b00ae32d3c826b9ec639084.jpg_small.jpg" /></a></div>
							<div class="goods_xiaoliang">
								<span class="goods_xiaoliang_link"><a href="">去看看</a></span>
								<span class="goods_xiaoliang_nums">已销售<strong>99</strong>笔</span>
							</div>
						</li>

						<li class="clearfix">
							<div class="goods_name"><a href="">Gap经典弹力纯色长袖T恤|000891347|原价149元</a></div>
							<div class="goods_pic"><span class="goods_price">¥ 279.00 </span><a href=""><img src="<?php echo @constant('RESOURCE_PATH');?>
images/89a6d6466b00ae32d3c826b9ec639084.jpg_small.jpg" /></a></div>
							<div class="goods_xiaoliang">
								<span class="goods_xiaoliang_link"><a href="">去看看</a></span>
								<span class="goods_xiaoliang_nums">已销售<strong>99</strong>笔</span>
							</div>
						</li>

						<li class="clearfix">
							<div class="goods_name"><a href="">Gap经典弹力纯色长袖T恤|000891347|原价149元</a></div>
							<div class="goods_pic"><span class="goods_price">¥ 279.00 </span><a href=""><img src="<?php echo @constant('RESOURCE_PATH');?>
images/89a6d6466b00ae32d3c826b9ec639084.jpg_small.jpg" /></a></div>
							<div class="goods_xiaoliang">
								<span class="goods_xiaoliang_link"><a href="">去看看</a></span>
								<span class="goods_xiaoliang_nums">已销售<strong>99</strong>笔</span>
							</div>
						</li>

					</ul>
				</div>
			</div>
			<!-- 热卖推荐商品 -->
			<div class="clear"></div>

			<!-- 浏览过的商品 -->
			<div class="shop_bd_list_bk clearfix">
				<div class="title">浏览过的商品</div>
				<div class="contents clearfix">
					<ul class="clearfix">
						
						<li class="clearfix">
							<div class="goods_name"><a href="">Gap经典弹力纯色长袖T恤|000891347|原价149元</a></div>
							<div class="goods_pic"><span class="goods_price">¥ 279.00 </span><a href=""><img src="<?php echo @constant('RESOURCE_PATH');?>
images/89a6d6466b00ae32d3c826b9ec639084.jpg_small.jpg" /></a></div>
							<div class="goods_xiaoliang">
								<span class="goods_xiaoliang_link"><a href="">去看看</a></span>
								<span class="goods_xiaoliang_nums">已销售<strong>99</strong>笔</span>
							</div>
						</li>

						<li class="clearfix">
							<div class="goods_name"><a href="">Gap经典弹力纯色长袖T恤|000891347|原价149元</a></div>
							<div class="goods_pic"><span class="goods_price">¥ 279.00 </span><a href=""><img src="<?php echo @constant('RESOURCE_PATH');?>
images/89a6d6466b00ae32d3c826b9ec639084.jpg_small.jpg" /></a></div>
							<div class="goods_xiaoliang">
								<span class="goods_xiaoliang_link"><a href="">去看看</a></span>
								<span class="goods_xiaoliang_nums">已销售<strong>99</strong>笔</span>
							</div>
						</li>

						<li class="clearfix">
							<div class="goods_name"><a href="">Gap经典弹力纯色长袖T恤|000891347|原价149元</a></div>
							<div class="goods_pic"><span class="goods_price">¥ 279.00 </span><a href=""><img src="<?php echo @constant('RESOURCE_PATH');?>
images/89a6d6466b00ae32d3c826b9ec639084.jpg_small.jpg" /></a></div>
							<div class="goods_xiaoliang">
								<span class="goods_xiaoliang_link"><a href="">去看看</a></span>
								<span class="goods_xiaoliang_nums">已销售<strong>99</strong>笔</span>
							</div>
						</li>

					</ul>
				</div>
			</div>
			<!-- 浏览过的商品 -->

		</div>

		<div class="shop_bd_list_right clearfix">
			<!-- 条件筛选框 -->
			<div class="module_filter">
				<div class="module_filter_line">
					<dl>
						<dt>尺码：</dt>
						<dd>
							<span><a href="">XXS</a></span>
							<span><a href="">XS</a></span>
							<span><a href="">S</a></span>
							<span><a href="">M</a></span>
							<span><a href="">L</a></span>
							<span><a href="">XL</a></span>
							<span><a href="">XXL</a></span>
							<span><a href="">XXXL</a></span>
							<span><a href="">加大XXXL</a></span>
							<span><a href="">均码</a></span>
						</dd>
					</dl>

					<dl>
						<dt>品牌：</dt>
						<dd>
							<span><a href="">彪马</a></span>
							<span><a href="">安踏</a></span>
							<span><a href="">阿迪达斯</a></span>
							<span><a href="">李宁</a></span>
							<span><a href="">匡威</a></span>
							<span><a href="">耐克</a></span>
							<span><a href="">卡帕</a></span>
							<span><a href="">鸿星尔克</a></span>
							<span><a href="">沃特</a></span>
							<span><a href="">垃圾</a></span>
						</dd>
					</dl>

					<dl>
						<dt>款式：</dt>
						<dd>
							<span><a href="">长袖</a></span>
							<span><a href="">短袖</a></span>
							<span><a href="">无袖</a></span>
							<span><a href="">两件套</a></span>
							<span><a href="">宽松</a></span>
							
						</dd>
					</dl>

					<dl>
						<dt>材质：</dt>
						<dd>
							<span><a href="">纯棉</a></span>
							<span><a href="">真丝</a></span>
							<span><a href="">聚酯</a></span>
							<span><a href="">棉+氨纶</a></span>
							<span><a href="">卡莱</a></span>
							<span><a href="">人造棉</a></span>
							<span><a href="">其它</a></span>
						</dd>
					</dl>


				</div>
				<div class="bottom"></div>
			</div>
			<!-- 条件筛选框 -->

			<!-- 显示菜单 -->
			<div class="sort-bar">
				<div class="bar-l"> 
		            <!-- 查看方式S -->
		            <div class="switch"><span class="selected"><a title="以方格显示" ecvalue="squares" nc_type="display_mode" class="pm" href="javascript:void(0)">大图</a></span><span style="border-left:none;"><a title="以列表显示" ecvalue="list" nc_type="display_mode" class="lm" href="javascript:void(0)">列表</a></span></div>
		            <!-- 查看方式E --> 
		            <!-- 排序方式S -->
		            <ul class="array">
		              <li class="selected"><a title="默认排序" onclick="javascript:dropParam(['key','order'],'','array');" class="nobg" href="javascript:void(0)">默认</a></li>
		              <li><a title="点击按销量从高到低排序" onclick="javascript:replaceParam(['key','order'],['sales','desc'],'array');" href="javascript:void(0)">销量</a></li>
		              <li><a title="点击按人气从高到低排序" onclick="javascript:replaceParam(['key','order'],['click','desc'],'array');" href="javascript:void(0)">人气</a></li>
		              <li><a title="点击按信用从高到低排序" onclick="javascript:replaceParam(['key','order'],['credit','desc'],'array');" href="javascript:void(0)">信用</a></li>
		              <li><a title="点击按价格从高到低排序" onclick="javascript:replaceParam(['key','order'],['price','desc'],'array');" href="javascript:void(0)">价格</a></li>
		            </ul>
		            <!-- 排序方式E --> 
		            <!-- 价格段S -->
		            <div class="prices"> <em>¥</em>
		              <input type="text" value="" class="w30">
		              <em>-</em>
		              <input type="text" value="" class="w30">
		              <input type="submit" value="确认" id="search_by_price">
		            </div>
		            <!-- 价格段E --> 
		          </div>
			</div>
			<div class="clear"></div>
			<!-- 显示菜单 End -->

			<!-- 商品列表 -->
			<div class="shop_bd_list_content clearfix">
				<ul>
				 <?php  $_smarty_tpl->tpl_vars['good_list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['good_list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['goods']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['good_list']->key => $_smarty_tpl->tpl_vars['good_list']->value) {
$_smarty_tpl->tpl_vars['good_list']->_loop = true;
?>
					<li>
						<dl>
							<dt><a href="index.php?p=home&c=goods&a=detail&goods_id=<?php echo $_smarty_tpl->tpl_vars['good_list']->value['goods_name'];?>
"><img src="<?php echo @constant('RESOURCE_PATH');?>
images/21151da3bdefc6d9a7120c991fe59800.jpg_small.jpg" /></a></dt>
							<dd class="title"><a href="index.php?p=home&c=goods&a=detail&goods_id=<?php echo $_smarty_tpl->tpl_vars['good_list']->value['goods_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['good_list']->value['goods_name'];?>
</a></dd>
							<dd class="content">
								<span class="goods_jiage">￥<strong><?php echo $_smarty_tpl->tpl_vars['good_list']->value['shop_price'];?>
</strong></span>
								<span class="goods_chengjiao">最近成交5笔</span>
							</dd>
						</dl>
					</li>
				<?php } ?>
				</ul>
			</div>
			<div class="clear"></div>
			<div class="pagination"> 
				<ul><li><span>首页</span></li>
					<li><span>上一页</span></li>
					<li><span class="currentpage">1</span></li>
					<li><span>下一页</span></li>
					<li><span>末页</span></li>
				</ul> 
			</div>
			<!-- 商品列表 End -->


		</div>
	</div>
	<!-- List Body End -->

	<!-- Footer - wll - 2013/3/24 -->
	<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<!-- Footer End -->
	
</body>
</html><?php }} ?>
