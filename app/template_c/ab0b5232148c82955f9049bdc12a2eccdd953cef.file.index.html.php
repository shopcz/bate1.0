<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-21 23:27:36
         compiled from "D:\web\htcdos\shopcz\app\views\home\index.html" */ ?>
<?php /*%%SmartyHeaderCode:546055336c185aaeb2-68476331%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab0b5232148c82955f9049bdc12a2eccdd953cef' => 
    array (
      0 => 'D:\\web\\htcdos\\shopcz\\app\\views\\home\\index.html',
      1 => 1429586050,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '546055336c185aaeb2-68476331',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55336c1967e175_55643919',
  'variables' => 
  array (
    'category' => 0,
    'k' => 0,
    'c' => 0,
    'c1' => 0,
    'c2' => 0,
    'best' => 0,
    'is_best' => 0,
    'hot' => 0,
    'is_hot' => 0,
    'new' => 0,
    'is_new' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55336c1967e175_55643919')) {function content_55336c1967e175_55643919($_smarty_tpl) {?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
    <title>ShopCZ-首页</title>
    <link rel="stylesheet" href="<?php echo @constant('RESOURCE_PATH');?>
css/base.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo @constant('RESOURCE_PATH');?>
css/shop_common.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo @constant('RESOURCE_PATH');?>
css/shop_header.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo @constant('RESOURCE_PATH');?>
css/shop_home.css" type="text/css" />
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
js/focus.js" ><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo @constant('RESOURCE_PATH');?>
js/shop_home_tab.js" ><?php echo '</script'; ?>
>
</head>
<body>
    <!-- Header  -wll-2013/03/24 -->
    <!-- Header  -wll-2013/03/24 -->
    <div class="shop_hd">
        <!-- Header TopNav -->
        <div class="shop_hd_topNav">
            <div class="shop_hd_topNav_all">
                <!-- Header TopNav Left -->
                <div class="shop_hd_topNav_all_left">
                        <?php if (isset($_SESSION['member_info'])) {?>
                    <p>您好&nbsp;<?php echo $_SESSION['member_info']['member_name'];?>
，欢迎来到<b><a href="/">ShopCZ商城</a></b>[<a href="index.php?p=home&c=login&a=logout">退出</a>]</p>
                    <?php } else { ?>
                    <p>您好，欢迎来到<b><a href="/">ShopCZ商城</a></b>[<a href="index.php?p=home&c=login&a=index">登录</a>][<a href="index.php?p=home&c=login&a=register">注册</a>]</p>
                    <?php }?>
                </div>
                <!-- Header TopNav Left End -->

                <!-- Header TopNav Right -->
                <div class="shop_hd_topNav_all_right">
                    <ul class="topNav_quick_menu">

                        <li>
                            <div class="topNav_menu">
                                <a href="#" class="topNavHover">我的商城<i></i></a>
                                <div class="topNav_menu_bd" style="display:none;" >
                                    <ul>
                                      <li><a title="已买到的商品" target="_top" href="#">已买到的商品</a></li>
                                      <li><a title="个人主页" target="_top" href="#">个人主页</a></li>
                                      <li><a title="我的好友" target="_top" href="#">我的好友</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                                                <li>
                            <div class="topNav_menu">
                                <a href="#" class="topNavHover">卖家中心<i></i></a>
                                <div class="topNav_menu_bd" style="display:none;">
                                    <ul>
                                      <li><a title="已售出的商品" target="_top" href="#">已售出的商品</a></li>
                                      <li><a title="销售中的商品" target="_top" href="#">销售中的商品</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="topNav_menu">
                                <a href="#" class="topNavHover">购物车<b>0</b>种商品<i></i></a>
                                <div class="topNav_menu_bd" style="display:none;">
                                    <!--
                                    <ul>
                                      <li><a title="已售出的商品" target="_top" href="#">已售出的商品</a></li>
                                      <li><a title="销售中的商品" target="_top" href="#">销售中的商品</a></li>
                                    </ul>
                                    -->
                                    <p>还没有商品，赶快去挑选！</p>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="topNav_menu">
                                <a href="#" class="topNavHover">我的收藏<i></i></a>
                                <div class="topNav_menu_bd" style="display:none;">
                                    <ul>
                                      <li><a title="收藏的商品" target="_top" href="#">收藏的商品</a></li>
                                      <li><a title="收藏的店铺" target="_top" href="#">收藏的店铺</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="topNav_menu">
                                <a href="#">站内消息</a>
                            </div>
                        </li>

                    </ul>
                </div>
                <!-- Header TopNav Right End -->
            </div>
            <div class="clear"></div>
        </div>
        <div class="clear"></div>
        <!-- Header TopNav End -->

        <!-- TopHeader Center -->
        <div class="shop_hd_header">
            <div class="shop_hd_header_logo"><h1 class="logo"><a href="/"><img src="<?php echo @constant('RESOURCE_PATH');?>
images/logo.png" alt="ShopCZ" /></a><span>ShopCZ</span></h1></div>
            <div class="shop_hd_header_search">
                            <ul class="shop_hd_header_search_tab">
                    <li id="search" class="current">商品</li>
                    <li id="shop_search">店铺</li>
                </ul>
                            <div class="clear"></div>
                <div class="search_form">
                    <form method="post" action="index.php">
                        <div class="search_formstyle">
                            <input type="text" class="search_form_text" name="search_content" value="搜索其实很简单！" />
                            <input type="submit" class="search_form_sub" name="secrch_submit" value="" title="搜索" />
                        </div>
                    </form>
                </div>
                            <div class="clear"></div>
                <div class="search_tag">
                    <a href="">李宁</a>
                    <a href="">耐克</a>
                    <a href="">Kappa</a>
                    <a href="">双肩包</a>
                    <a href="">手提包</a>
                </div>

            </div>
        </div>
        <div class="clear"></div>
        <!-- TopHeader Center End -->

        <!-- Header Menu -->
        <div class="shop_hd_menu">
            <!-- 所有商品菜单 -->
                        
            <div class="shop_hd_menu_all_category shop_hd_menu_hover"><!-- 首页去掉 id="shop_hd_menu_all_category" 加上clsss shop_hd_menu_hover -->
                <div class="shop_hd_menu_all_category_title"><h2 title="所有商品分类"><a href="javascript:void(0);">所有商品分类</a></h2><i></i></div>
                <div id="shop_hd_menu_all_category_hd" class="shop_hd_menu_all_category_hd">
                    <ul class="shop_hd_menu_all_category_hd_menu clearfix">
                        <!-- 单个菜单项 -->
                        <?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['category']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['c']->key;
?>
                        <?php if ($_smarty_tpl->tpl_vars['k']->value<=8) {?>
                        <li id="cat_<?php echo $_smarty_tpl->tpl_vars['c']->value['cat_id'];?>
" class="">
                            <h3><a href="index.php?p=home&c=list&a=index&cat_id=<?php echo $_smarty_tpl->tpl_vars['c']->value['cat_id'];?>
" title="男女服装"><?php echo $_smarty_tpl->tpl_vars['c']->value['cat_name'];?>
</a></h3>
                            <div id="cat_<?php echo $_smarty_tpl->tpl_vars['c']->value['cat_id'];?>
_menu" class="cat_menu clearfix" style="">
                            <?php  $_smarty_tpl->tpl_vars['c1'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c1']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['c']->value['chlid']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c1']->key => $_smarty_tpl->tpl_vars['c1']->value) {
$_smarty_tpl->tpl_vars['c1']->_loop = true;
?>
                                <dl class="clearfix">
                                    <dt><a href="index.php?p=home&c=list&a=index&cat_id=<?php echo $_smarty_tpl->tpl_vars['c']->value['cat_id'];?>
" href=""><?php echo $_smarty_tpl->tpl_vars['c1']->value['cat_name'];?>
</a></dt>
                                    <dd>
                                    <?php  $_smarty_tpl->tpl_vars['c2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c2']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['c1']->value['chlid']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c2']->key => $_smarty_tpl->tpl_vars['c2']->value) {
$_smarty_tpl->tpl_vars['c2']->_loop = true;
?>
                                        <a href="index.php?p=home&c=list&a=index&cat_id=<?php echo $_smarty_tpl->tpl_vars['c']->value['cat_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['c2']->value['cat_name'];?>
</a>
                                    <?php } ?>
                                    </dd>
                                </dl> 
                        <?php } ?>                                                        
                                <dl class="clearfix">
                            </div>
                        </li>
                        <?php }?>
                        <?php } ?>
                        
                        <!-- 单个菜单项 End -->
                        
                    </ul>
                </div>
            </div>
            <!-- 所有商品菜单 END -->

            <!-- 普通导航菜单 -->
            <ul class="shop_hd_menu_nav">
                <li class="current_link"><a href=""><span>首页</span></a></li>
                <li class="link"><a href=""><span>团购</span></a></li>
                <li class="link"><a href=""><span>品牌</span></a></li>
                <li class="link"><a href=""><span>优惠卷</span></a></li>
                <li class="link"><a href=""><span>积分中心</span></a></li>
                <li class="link"><a href=""><span>运动专场</span></a></li>
                <li class="link"><a href=""><span>微商城</span></a></li>
            </ul>
            <!-- 普通导航菜单 End -->
        </div>
        <!-- Header Menu End -->
        </div>
	
	<div class="clear"></div>
	<!-- Header End -->
	

	<!-- Body -wll-2013/03/24 -->
	<div class="shop_bd clearfix">
            <!-- 第一块区域  -->
            <div class="shop_bd_top clearfix">
                <div class="shop_bd_top_left"></div>
                <div class="shop_bd_top_center">
                    <!-- 图片切换  begin  -->
                    <div class="xifan_sub_box">
                      <div id="p-select" class="sub_nav"><div class="sub_no" id="xifan_bd1lfsj"> <ul></ul></div></div>
                      <div id="xifan_bd1lfimg">
                        <div>
                          <dl class=""></dl>
                          <dl class="">
                            <dt><a href="http://www.zztuku.com" title="" target="_blank"><img src="<?php echo @constant('RESOURCE_PATH');?>
images/e2dfe57add8fff66ed0964b1effd39b9.jpg" alt="2011城市主题公园亲子游"></a></dt>
                            <dd><h2><a href="http://www.zztuku.com" target="_blank">2011城市主题公园亲子游</a></h2></dd>
                          </dl>
                          <dl class="">
                            <dt><a href="http://www.zztuku.com" title="" target="_blank"><img src="<?php echo @constant('RESOURCE_PATH');?>
images/e50b5d398e3b890f08e14defbc71a94d.jpg" alt="潜入城市周边清幽之地"></a></dt>
                            <dd><h2><a href="http://www.zztuku.com" target="_blank">潜入城市周边清幽之地</a></h2></dd>
                          </dl>
                          <dl class="">
                            <dt><a href="http://www.zztuku.com" title="" target="_blank"><img src="<?php echo @constant('RESOURCE_PATH');?>
images/196b173f15685a2019ab3396cd1851a4.jpg" alt="盘点中国最美雪山"></a></dt>
                            <dd><h2><a href="http://www.zztuku.com" target="_blank">盘点中国最美雪山</a></h2></dd>
                          </dl>
                          <dl class="">
                            <dt><a href="http://www.zztuku.com" title="" target="_blank"><img src="<?php echo @constant('RESOURCE_PATH');?>
images/e81345cbc3d8a7e11f9a0e09df68221d.jpg" alt="2011西安世园会攻略"></a></dt>
                            <dd><h2><a href="http://www.zztuku.com" target="_blank">2011西安世园会攻略</a></h2></dd>
                          </dl>
                          <dl class="">
                            <dt><a href="http://www.zztuku.com" title="" target="_blank"><img src="<?php echo @constant('RESOURCE_PATH');?>
images/65662b58848da87812ba371c7ff6c1ad.jpg" alt="五月乐享懒人天堂塞班岛"></a></dt>
                            <dd><h2><a href="http://www.zztuku.com" target="_blank">五月乐享懒人天堂塞班岛</a></h2></dd>
                          </dl>

                                  <dl class="">
                            <dt><a href="http://www.zztuku.com" title="" target="_blank"><img src="<?php echo @constant('RESOURCE_PATH');?>
images/e50b5d398e3b890f08e14defbc71a94d.jpg" alt="潜入城市周边清幽之地"></a></dt>
                            <dd><h2><a href="http://www.zztuku.com" target="_blank">潜入城市周边清幽之地</a></h2></dd>
                          </dl>
                          <dl class="">
                            <dt><a href="http://www.zztuku.com" title="" target="_blank"><img src="<?php echo @constant('RESOURCE_PATH');?>
images/196b173f15685a2019ab3396cd1851a4.jpg" alt="盘点中国最美雪山"></a></dt>
                            <dd><h2><a href="http://www.zztuku.com" target="_blank">盘点中国最美雪山</a></h2></dd>
                          </dl>
                          <dl class="">
                            <dt><a href="http://www.zztuku.com" title="" target="_blank"><img src="<?php echo @constant('RESOURCE_PATH');?>
images/e81345cbc3d8a7e11f9a0e09df68221d.jpg" alt="2011西安世园会攻略"></a></dt>
                            <dd><h2><a href="http://www.zztuku.com" target="_blank">2011西安世园会攻略</a></h2></dd>
                          </dl>
                          <dl class="">
                            <dt><a href="http://www.zztuku.com" title="" target="_blank"><img src="<?php echo @constant('RESOURCE_PATH');?>
images/65662b58848da87812ba371c7ff6c1ad.jpg" alt="五月乐享懒人天堂塞班岛"></a></dt>
                            <dd><h2><a href="http://www.zztuku.com" target="_blank">五月乐享懒人天堂塞班岛</a></h2></dd>
                          </dl>
                        </div>
                      </div>
                    </div>
                    <?php echo '<script'; ?>
 type="text/javascript">movec();<?php echo '</script'; ?>
> 
                    <!-- 图片切换  end --> 
                    <div class="clear"></div>
                    <div class="shop_bd_top_center_hot"><img src="<?php echo @constant('RESOURCE_PATH');?>
images/index.guanggao.png" /></div>
                </div>
                
                <!-- 右侧 -->
                <div class="shop_bd_top_right clearfix">
                    <div class="shop_bd_top_right_quickLink">
                        <a href="" class="login" title="会员登录"><i></i>会员登录</a>
                        <a href="" class="register" title="免费注册"><i></i>免费注册</a>
                        <a href="" class="join" title="商家开店" ><i></i>帮助中心</a>
                    </div>
                    
                    <div class="shop_bd_top_right-style1 nc-home-news">
                        <ul class="tabs-nav">
                            <li><a href="javascript:void(0);" class="hover">商城广告</a></li>
                            <li><a href="javascript:void(0);">关于我们</a></li>
                        </ul>
                        <div class="clear"></div>
                        <div class="tabs-panel">
                            <ul class="list-style01">
                                <li><a title="如何申请开店" href="article-15.html">如何申请开店</a><span>(2011-01-11)</span></li>
                                <li><a title="商城商品推荐" href="article-14.html">商城商品推荐</a><span>(2011-01-11)</span></li>
                                <li><a title="如何发货" href="article-13.html">如何发货</a><span>(2011-01-11)</span></li>
                                <li><a title="查看售出商品" href="article-12.html">查看售出商品</a><span>(2011-01-11)</span></li>
                                <li><a title="如何管理店铺" href="article-11.html">如何管理店铺</a><span>(2011-01-11)</span></li>
                                <li><a title="如何申请开店" href="article-15.html">如何申请开店</a><span>(2011-01-11)</span></li>
                                <li><a title="商城商品推荐" href="article-14.html">商城商品推荐</a><span>(2011-01-11)</span></li>
                                <li><a title="如何发货" href="article-13.html">如何发货</a><span>(2011-01-11)</span></li>
                                <li><a title="查看售出商品" href="article-12.html">查看售出商品</a><span>(2011-01-11)</span></li>
                                <li><a title="如何管理店铺" href="article-11.html">如何管理店铺</a><span>(2011-01-11)</span></li>
                                
                                
                            </ul>
                        </div>
                    </div>
                    
                    
                </div>
                <!-- 右侧 End -->
            </div>
            <div class="clear"></div>
            <!-- 第一块区域 End -->
            
            <!-- 第二块区域 -->
            <div class="shop_bd_2 clearfix">
                <!-- 特别推荐 -->
                <div class="shop_bd_tuijian">
                    <ul class="tuijian_tabs">
                        <li class="hover"  onmouseover="easytabs('1', '1');" onfocus="easytabs('1', '1');" onclick="return false;" id="tuijian_content_btn_1"><a href="javascript:void(0);">特别推荐</a></li>
                        <li onmouseover="easytabs('1', '2');" onfocus="easytabs('1', '2');" onclick="return false;" id="tuijian_content_btn_2" ><a href="javascript:void(0);">热门商品</a></li>
                        <li onmouseover="easytabs('1', '3');" onfocus="easytabs('1', '3');" onclick="return false;" id="tuijian_content_btn_3"><a href="javascript:void(0);">新品上架</a></li>
                    </ul>
                    <div class="tuijian_content">
                        <div id="tuijian_content_1" class="tuijian_shangpin" style="display: block;">
                            <ul>
                            <?php  $_smarty_tpl->tpl_vars['is_best'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['is_best']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['best']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['is_best']->key => $_smarty_tpl->tpl_vars['is_best']->value) {
$_smarty_tpl->tpl_vars['is_best']->_loop = true;
?>
                                <li>
                                    <dl>
                                        <dt><a href="index.php?p=home&c=goods&a=detail&goods_id=<?php echo $_smarty_tpl->tpl_vars['is_best']->value['goods_id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['is_best']->value['goods_thumb'];?>
" /></a></dt>
                                        <dd><a href="index.php?p=home&c=goods&a=detail&goods_id=<?php echo $_smarty_tpl->tpl_vars['is_best']->value['goods_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['is_best']->value['goods_name'];?>
</a></dd>
                                        <dd> 商城价：<em><?php echo $_smarty_tpl->tpl_vars['is_best']->value['shop_price'];?>
</em>元</dd>
                                    </dl>
                                </li>
                              <?php } ?>
                                
                            </ul>
                        </div>
                        
                        <div id="tuijian_content_2" class="tuijian_shangpin">
                            <ul>
                               <?php  $_smarty_tpl->tpl_vars['is_hot'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['is_hot']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['hot']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['is_hot']->key => $_smarty_tpl->tpl_vars['is_hot']->value) {
$_smarty_tpl->tpl_vars['is_hot']->_loop = true;
?>
                                <li>
                                    <dl>
                                        <dt><a href="index.php?p=home&c=goods&a=detail&goods_id=<?php echo $_smarty_tpl->tpl_vars['is_hot']->value['goods_id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['is_hot']->value['goods_thumb'];?>
" /></a></dt>
                                        <dd><a href="index.php?p=home&c=goods&a=detail&goods_id=<?php echo $_smarty_tpl->tpl_vars['is_hot']->value['goods_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['is_hot']->value['goods_name'];?>
</a></dd>
                                        <dd> 商城价：<em><?php echo $_smarty_tpl->tpl_vars['is_hot']->value['shop_price'];?>
</em>元</dd>
                                    </dl>
                                </li>
                                <?php } ?>
                                
                            </ul>
                        </div>
                        <div id="tuijian_content_3" class="tuijian_shangpin tuijian_content">
                            <ul>
                            <?php  $_smarty_tpl->tpl_vars['is_new'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['is_new']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['new']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['is_new']->key => $_smarty_tpl->tpl_vars['is_new']->value) {
$_smarty_tpl->tpl_vars['is_new']->_loop = true;
?>
                                <li>
                                    <dl>
                                        <dt><a href="index.php?p=home&c=goods&a=detail&goods_id={$is_new.goods_id#}"><img src="<?php echo $_smarty_tpl->tpl_vars['is_new']->value['goods_thumb'];?>
" /></a></dt>
                                        <dd><a href="index.php?p=home&c=goods&a=detail&goods_id={$is_new.goods_id#}"><?php echo $_smarty_tpl->tpl_vars['is_new']->value['goods_name'];?>
</a></dd>
                                        <dd> 商城价：<em><?php echo $_smarty_tpl->tpl_vars['is_new']->value['shop_price'];?>
</em>元</dd>
                                    </dl>
                                </li>
                                <?php } ?>
                                
                            </ul>
                        </div>
                        
                    </div>

                </div>
                <!-- 特别推荐 End -->
                
                <!-- 首发 -->
                <div class="shop_bd_shoufa"><img src="<?php echo @constant('RESOURCE_PATH');?>
images/shoufa.jpg" /></div>
                <!-- 首发 End -->
                
            </div>
            <div class="clear"></div>
            <!-- 第二块区域 End -->
            
            <!-- 第三块区域 男女服饰 -->
            <div class="shop_bd_home_block clearfix">
                
                <!-- 左边 -->
                <div class="shop_bd_home_block_left">
                    <div class="shop_bd_home_block_left_logo block_nvzhuang_logo"></div>
                    <div class="shop_hd_home_block_left_class clearfix">
                        <dl class="clearfix">
                            <dt>女装</dt>
                            <dd>
                                <a href="">棉衣</a>
                                <a href="">毛呢大衣</a>
                                <a href="">风衣</a>
                                <a href="">打底衫</a>
                                <a href="">情侣装</a>
                                <a href="">毛呢短裤</a>
                                <a href="">牛仔裤</a>
                                <a href="">加绒打...</a>
                                <a href="">小脚裤</a>
                                <a href="">半身裙</a>
                            </dd>
                        </dl>
                        
                        <dl class="clearfix">
                            <dt>男装</dt>
                            <dd>
                                <a href="">羽绒服</a>
                                <a href="">卫衣</a>
                                <a href="">长袖T桖</a>
                                <a href="">长袖衬衫</a>
                                <a href="">风衣</a>
                                <a href="">休闲西装</a>
                                <a href="">棉衣</a>
                                <a href="">休闲长裤</a>
                                <a href="">内衣内裤</a>
                            </dd>
                        </dl>
                        
                    </div>
                    <div class="shop_bd_home_block_left_pic">
                        <a href=""><img src="<?php echo @constant('RESOURCE_PATH');?>
images/web-1-13_53bfbfc958cb55a435545033bd075bf3.png"/></a>
                    </div>
                </div>
                <!-- 左边 End -->
                
                <!-- 中间 -->
                <div class="shop_bd_home_block_center">
                    <ul class="tabs-nav">
                        <li><a href="javascript:void(0);">男女服饰</a></li>
                    </ul>
                    <div class="tabs-panel">
                        <ul>
                            <li>
                                <dl>
                                    <dt><a href=""><img src="<?php echo @constant('RESOURCE_PATH');?>
images/04fb225ea46bd1346f330400eedb7ef2.jpg_small.jpg" /></a></dt>
                                    <dd><a href="">正品都市时尚女装假两件优雅针织衫</a></dd>
                                    <dd>商城价：<em>182.00</em>元</dd>
                                </dl>
                            </li>
                            
                            <li>
                                <dl>
                                    <dt><a href=""><img src="<?php echo @constant('RESOURCE_PATH');?>
images/04fb225ea46bd1346f330400eedb7ef2.jpg_small.jpg" /></a></dt>
                                    <dd><a href="">正品都市时尚女装假两件优雅针织衫</a></dd>
                                    <dd>商城价：<em>182.00</em>元</dd>
                                </dl>
                            </li>
                            
                            <li>
                                <dl>
                                    <dt><a href=""><img src="<?php echo @constant('RESOURCE_PATH');?>
images/04fb225ea46bd1346f330400eedb7ef2.jpg_small.jpg" /></a></dt>
                                    <dd><a href="">正品都市时尚女装假两件优雅针织衫</a></dd>
                                    <dd>商城价：<em>182.00</em>元</dd>
                                </dl>
                            </li>
                            
                            <li>
                                <dl>
                                    <dt><a href=""><img src="<?php echo @constant('RESOURCE_PATH');?>
images/04fb225ea46bd1346f330400eedb7ef2.jpg_small.jpg" /></a></dt>
                                    <dd><a href="">正品都市时尚女装假两件优雅针织衫</a></dd>
                                    <dd>商城价：<em>182.00</em>元</dd>
                                </dl>
                            </li>
                            
                            <li>
                                <dl>
                                    <dt><a href=""><img src="<?php echo @constant('RESOURCE_PATH');?>
images/04fb225ea46bd1346f330400eedb7ef2.jpg_small.jpg" /></a></dt>
                                    <dd><a href="">正品都市时尚女装假两件优雅针织衫</a></dd>
                                    <dd>商城价：<em>182.00</em>元</dd>
                                </dl>
                            </li>
                            
                            <li>
                                <dl>
                                    <dt><a href=""><img src="<?php echo @constant('RESOURCE_PATH');?>
images/04fb225ea46bd1346f330400eedb7ef2.jpg_small.jpg" /></a></dt>
                                    <dd><a href="">正品都市时尚女装假两件优雅针织衫</a></dd>
                                    <dd>商城价：<em>182.00</em>元</dd>
                                </dl>
                            </li>
                            
                        </ul>
                    </div>
                </div>
                <!-- 中间 End -->
                
                <!-- 右边商品排行 -->
                <div class="shop_bd_home_block_right">
                    <div class="title"><h3>商品排行</h3></div>
                    <ol class="saletop-list">
                        <li class="top clearfix">
                            <dl>
                                <dt class="goods-name">
                                    <a href="">正品都市时尚女装假两件优雅针</a>
                                </dt>
                                <dd class="nokey">1</dd>
                                <dd class="goods-pic">
                                    <a href=""><span class="thumb size60"><img src="<?php echo @constant('RESOURCE_PATH');?>
images/3f81874d594894d19150843c42fb1f8e.jpg_small.jpg" /></span></a>
                                </dd>
                                <dd class="goods-price"><em>398.00</em></dd>
                            </dl>
                        </li>
                        <li class="top clearfix">
                            <dl>
                                <dt class="goods-name">
                                    <a href="">正品都市时尚女装假两件优雅针</a>
                                </dt>
                                <dd class="nokey">2</dd>
                                <dd class="goods-pic">
                                    <a href=""><span class="thumb size60"><img src="<?php echo @constant('RESOURCE_PATH');?>
images/3f81874d594894d19150843c42fb1f8e.jpg_small.jpg" /></span></a>
                                </dd>
                                <dd class="goods-price"><em>398.00</em></dd>
                            </dl>
                        </li>
                        <li class="top clearfix">
                            <dl>
                                <dt class="goods-name">
                                    <a href="">正品都市时尚女装假两件优雅针</a>
                                </dt>
                                <dd class="nokey">3</dd>
                                <dd class="goods-pic">
                                    <a href=""><span class="thumb size60"><img src="<?php echo @constant('RESOURCE_PATH');?>
images/3f81874d594894d19150843c42fb1f8e.jpg_small.jpg" /></span></a>
                                </dd>
                                <dd class="goods-price"><em>398.00</em></dd>
                            </dl>
                        </li>
                        
                        <li class="normal">
                            <i>4</i>
                            <a href="">2011秋冬新款韩版大码毛领毛呢外套呢子大衣【演示数据】</a>
                        </li>
                        <li class="normal">
                            <i>5</i>
                            <a href="">2011秋冬新款韩版大码毛领毛呢外套呢子大衣【演示数据】</a>
                        </li>
                        <li class="normal">
                            <i>6</i>
                            <a href="">2011秋冬新款韩版大码毛领毛呢外套呢子大衣【演示数据】</a>
                        </li>
                        <li class="normal">
                            <i>7</i>
                            <a href="">2011秋冬新款韩版大码毛领毛呢外套呢子大衣【演示数据】</a>
                        </li>
                        
                    </ol>
                    <div class="saletop-list_adv_pic"><a href=""><img src="<?php echo @constant('RESOURCE_PATH');?>
images/web-3-38_ff9bd2d724f7138cec1b1937000f4feb.jpg" /></a></div>
                </div>
                <!-- 右边商品排行 -->
                
                <!-- 品牌展示 -->
                <div class="shop_bd_home_block_bottom">
                    <ul class="">
                        <li><a href=""><img src="<?php echo @constant('RESOURCE_PATH');?>
images/354b80528d2fbeefbab33c563532517e.gif" /></a></li>
                        <li><a href=""><img src="<?php echo @constant('RESOURCE_PATH');?>
images/1d2dfbead590510046a6522551db8139.gif" /></a></li>
                        <li><a href=""><img src="<?php echo @constant('RESOURCE_PATH');?>
images/26247430b09daa1b441b46008bfb6e6e.gif" /></a></li>
                        <li><a href=""><img src="<?php echo @constant('RESOURCE_PATH');?>
images/a0ac8c6d2d3dc1470d5876923182a8e2.gif" /></a></li>
                        <li><a href=""><img src="<?php echo @constant('RESOURCE_PATH');?>
images/9c5dee77a6ecdafd9e152fed8c6a4e90.gif" /></a></li>
                        <li><a href=""><img src="<?php echo @constant('RESOURCE_PATH');?>
images/b175883eba95e793affb1b1ebbbf85a5.gif" /></a></li>
                        <li><a href=""><img src="<?php echo @constant('RESOURCE_PATH');?>
images/6e61a1c953e5bc8c5f1ffdac36862245.gif" /></a></li>
                        <li><a href=""><img src="<?php echo @constant('RESOURCE_PATH');?>
images/209abd835cd2ce2208f2dc42ba10efb4.gif" /></a></li>
                    </ul>
                </div>
                <!-- 品牌展示 End -->
                
            </div>
            <div clas="clear"></div>
            <!-- 第三块区域 End -->
            
            <!-- 第四块区域 男女服饰 -->
            <div class="shop_bd_home_block clearfix">
                
                <!-- 左边 -->
                <div class="shop_bd_home_block_left">
                    <div class="shop_bd_home_block_left_logo block_nvzhuang_logo"></div>
                    <div class="shop_hd_home_block_left_class clearfix">
                        <dl class="clearfix">
                            <dt>女装</dt>
                            <dd>
                                <a href="">棉衣</a>
                                <a href="">毛呢大衣</a>
                                <a href="">风衣</a>
                                <a href="">打底衫</a>
                                <a href="">情侣装</a>
                                <a href="">毛呢短裤</a>
                                <a href="">牛仔裤</a>
                                <a href="">加绒打...</a>
                                <a href="">小脚裤</a>
                                <a href="">半身裙</a>
                            </dd>
                        </dl>
                        
                        <dl class="clearfix">
                            <dt>男装</dt>
                            <dd>
                                <a href="">羽绒服</a>
                                <a href="">卫衣</a>
                                <a href="">长袖T桖</a>
                                <a href="">长袖衬衫</a>
                                <a href="">风衣</a>
                                <a href="">休闲西装</a>
                                <a href="">棉衣</a>
                                <a href="">休闲长裤</a>
                                <a href="">内衣内裤</a>
                            </dd>
                        </dl>
                        
                    </div>
                    <div class="shop_bd_home_block_left_pic">
                        <a href=""><img src="<?php echo @constant('RESOURCE_PATH');?>
images/web-1-13_53bfbfc958cb55a435545033bd075bf3.png"/></a>
                    </div>
                </div>
                <!-- 左边 End -->
                
                <!-- 中间 -->
                <div class="shop_bd_home_block_center">
                    <ul class="tabs-nav">
                        <li><a href="javascript:void(0);">男女服饰</a></li>
                    </ul>
                    <div class="tabs-panel">
                        <ul>
                            <li>
                                <dl>
                                    <dt><a href=""><img src="<?php echo @constant('RESOURCE_PATH');?>
images/04fb225ea46bd1346f330400eedb7ef2.jpg_small.jpg" /></a></dt>
                                    <dd><a href="">正品都市时尚女装假两件优雅针织衫</a></dd>
                                    <dd>商城价：<em>182.00</em>元</dd>
                                </dl>
                            </li>
                            
                            <li>
                                <dl>
                                    <dt><a href=""><img src="<?php echo @constant('RESOURCE_PATH');?>
images/04fb225ea46bd1346f330400eedb7ef2.jpg_small.jpg" /></a></dt>
                                    <dd><a href="">正品都市时尚女装假两件优雅针织衫</a></dd>
                                    <dd>商城价：<em>182.00</em>元</dd>
                                </dl>
                            </li>
                            
                            <li>
                                <dl>
                                    <dt><a href=""><img src="<?php echo @constant('RESOURCE_PATH');?>
images/04fb225ea46bd1346f330400eedb7ef2.jpg_small.jpg" /></a></dt>
                                    <dd><a href="">正品都市时尚女装假两件优雅针织衫</a></dd>
                                    <dd>商城价：<em>182.00</em>元</dd>
                                </dl>
                            </li>
                            
                            <li>
                                <dl>
                                    <dt><a href=""><img src="<?php echo @constant('RESOURCE_PATH');?>
images/04fb225ea46bd1346f330400eedb7ef2.jpg_small.jpg" /></a></dt>
                                    <dd><a href="">正品都市时尚女装假两件优雅针织衫</a></dd>
                                    <dd>商城价：<em>182.00</em>元</dd>
                                </dl>
                            </li>
                            
                            <li>
                                <dl>
                                    <dt><a href=""><img src="<?php echo @constant('RESOURCE_PATH');?>
images/04fb225ea46bd1346f330400eedb7ef2.jpg_small.jpg" /></a></dt>
                                    <dd><a href="">正品都市时尚女装假两件优雅针织衫</a></dd>
                                    <dd>商城价：<em>182.00</em>元</dd>
                                </dl>
                            </li>
                            
                            <li>
                                <dl>
                                    <dt><a href=""><img src="<?php echo @constant('RESOURCE_PATH');?>
images/04fb225ea46bd1346f330400eedb7ef2.jpg_small.jpg" /></a></dt>
                                    <dd><a href="">正品都市时尚女装假两件优雅针织衫</a></dd>
                                    <dd>商城价：<em>182.00</em>元</dd>
                                </dl>
                            </li>
                            
                        </ul>
                    </div>
                </div>
                <!-- 中间 End -->
                
                <!-- 右边商品排行 -->
                <div class="shop_bd_home_block_right">
                    <div class="title"><h3>商品排行</h3></div>
                    <ol class="saletop-list">
                        <li class="top clearfix">
                            <dl>
                                <dt class="goods-name">
                                    <a href="">正品都市时尚女装假两件优雅针</a>
                                </dt>
                                <dd class="nokey">1</dd>
                                <dd class="goods-pic">
                                    <a href=""><span class="thumb size60"><img src="<?php echo @constant('RESOURCE_PATH');?>
images/3f81874d594894d19150843c42fb1f8e.jpg_small.jpg" /></span></a>
                                </dd>
                                <dd class="goods-price"><em>398.00</em></dd>
                            </dl>
                        </li>
                        <li class="top clearfix">
                            <dl>
                                <dt class="goods-name">
                                    <a href="">正品都市时尚女装假两件优雅针</a>
                                </dt>
                                <dd class="nokey">2</dd>
                                <dd class="goods-pic">
                                    <a href=""><span class="thumb size60"><img src="<?php echo @constant('RESOURCE_PATH');?>
images/3f81874d594894d19150843c42fb1f8e.jpg_small.jpg" /></span></a>
                                </dd>
                                <dd class="goods-price"><em>398.00</em></dd>
                            </dl>
                        </li>
                        <li class="top clearfix">
                            <dl>
                                <dt class="goods-name">
                                    <a href="">正品都市时尚女装假两件优雅针</a>
                                </dt>
                                <dd class="nokey">3</dd>
                                <dd class="goods-pic">
                                    <a href=""><span class="thumb size60"><img src="<?php echo @constant('RESOURCE_PATH');?>
images/3f81874d594894d19150843c42fb1f8e.jpg_small.jpg" /></span></a>
                                </dd>
                                <dd class="goods-price"><em>398.00</em></dd>
                            </dl>
                        </li>
                        
                        <li class="normal">
                            <i>4</i>
                            <a href="">2011秋冬新款韩版大码毛领毛呢外套呢子大衣【演示数据】</a>
                        </li>
                        <li class="normal">
                            <i>5</i>
                            <a href="">2011秋冬新款韩版大码毛领毛呢外套呢子大衣【演示数据】</a>
                        </li>
                        <li class="normal">
                            <i>6</i>
                            <a href="">2011秋冬新款韩版大码毛领毛呢外套呢子大衣【演示数据】</a>
                        </li>
                        <li class="normal">
                            <i>7</i>
                            <a href="">2011秋冬新款韩版大码毛领毛呢外套呢子大衣【演示数据】</a>
                        </li>
                        
                    </ol>
                    <div class="saletop-list_adv_pic"><a href=""><img src="<?php echo @constant('RESOURCE_PATH');?>
images/web-3-38_ff9bd2d724f7138cec1b1937000f4feb.jpg" /></a></div>
                </div>
                <!-- 右边商品排行 -->
                
                <!-- 品牌展示 -->
                <div class="shop_bd_home_block_bottom">
                    <ul class="">
                        <li><a href=""><img src="<?php echo @constant('RESOURCE_PATH');?>
images/354b80528d2fbeefbab33c563532517e.gif" /></a></li>
                        <li><a href=""><img src="<?php echo @constant('RESOURCE_PATH');?>
images/1d2dfbead590510046a6522551db8139.gif" /></a></li>
                        <li><a href=""><img src="<?php echo @constant('RESOURCE_PATH');?>
images/26247430b09daa1b441b46008bfb6e6e.gif" /></a></li>
                        <li><a href=""><img src="<?php echo @constant('RESOURCE_PATH');?>
images/a0ac8c6d2d3dc1470d5876923182a8e2.gif" /></a></li>
                        <li><a href=""><img src="<?php echo @constant('RESOURCE_PATH');?>
images/9c5dee77a6ecdafd9e152fed8c6a4e90.gif" /></a></li>
                        <li><a href=""><img src="<?php echo @constant('RESOURCE_PATH');?>
images/b175883eba95e793affb1b1ebbbf85a5.gif" /></a></li>
                        <li><a href=""><img src="<?php echo @constant('RESOURCE_PATH');?>
images/6e61a1c953e5bc8c5f1ffdac36862245.gif" /></a></li>
                        <li><a href=""><img src="<?php echo @constant('RESOURCE_PATH');?>
images/209abd835cd2ce2208f2dc42ba10efb4.gif" /></a></li>
                    </ul>
                </div>
                <!-- 品牌展示 End -->
                
            </div>
            <div clas="clear"></div>
            <!-- 第四块区域 End -->
            
            <!-- 第五块区域 男女服饰 -->
            <div class="shop_bd_home_block clearfix">
                
                <!-- 左边 -->
                <div class="shop_bd_home_block_left">
                    <div class="shop_bd_home_block_left_logo block_nvzhuang_logo"></div>
                    <div class="shop_hd_home_block_left_class clearfix">
                        <dl class="clearfix">
                            <dt>女装</dt>
                            <dd>
                                <a href="">棉衣</a>
                                <a href="">毛呢大衣</a>
                                <a href="">风衣</a>
                                <a href="">打底衫</a>
                                <a href="">情侣装</a>
                                <a href="">毛呢短裤</a>
                                <a href="">牛仔裤</a>
                                <a href="">加绒打...</a>
                                <a href="">小脚裤</a>
                                <a href="">半身裙</a>
                            </dd>
                        </dl>
                        
                        <dl class="clearfix">
                            <dt>男装</dt>
                            <dd>
                                <a href="">羽绒服</a>
                                <a href="">卫衣</a>
                                <a href="">长袖T桖</a>
                                <a href="">长袖衬衫</a>
                                <a href="">风衣</a>
                                <a href="">休闲西装</a>
                                <a href="">棉衣</a>
                                <a href="">休闲长裤</a>
                                <a href="">内衣内裤</a>
                            </dd>
                        </dl>
                        
                    </div>
                    <div class="shop_bd_home_block_left_pic">
                        <a href=""><img src="<?php echo @constant('RESOURCE_PATH');?>
images/web-1-13_53bfbfc958cb55a435545033bd075bf3.png"/></a>
                    </div>
                </div>
                <!-- 左边 End -->
                
                <!-- 中间 -->
                <div class="shop_bd_home_block_center">
                    <ul class="tabs-nav">
                        <li><a href="javascript:void(0);">男女服饰</a></li>
                    </ul>
                    <div class="tabs-panel">
                        <ul>
                            <li>
                                <dl>
                                    <dt><a href=""><img src="<?php echo @constant('RESOURCE_PATH');?>
images/04fb225ea46bd1346f330400eedb7ef2.jpg_small.jpg" /></a></dt>
                                    <dd><a href="">正品都市时尚女装假两件优雅针织衫</a></dd>
                                    <dd>商城价：<em>182.00</em>元</dd>
                                </dl>
                            </li>
                            
                            <li>
                                <dl>
                                    <dt><a href=""><img src="<?php echo @constant('RESOURCE_PATH');?>
images/04fb225ea46bd1346f330400eedb7ef2.jpg_small.jpg" /></a></dt>
                                    <dd><a href="">正品都市时尚女装假两件优雅针织衫</a></dd>
                                    <dd>商城价：<em>182.00</em>元</dd>
                                </dl>
                            </li>
                            
                            <li>
                                <dl>
                                    <dt><a href=""><img src="<?php echo @constant('RESOURCE_PATH');?>
images/04fb225ea46bd1346f330400eedb7ef2.jpg_small.jpg" /></a></dt>
                                    <dd><a href="">正品都市时尚女装假两件优雅针织衫</a></dd>
                                    <dd>商城价：<em>182.00</em>元</dd>
                                </dl>
                            </li>
                            
                            <li>
                                <dl>
                                    <dt><a href=""><img src="<?php echo @constant('RESOURCE_PATH');?>
images/04fb225ea46bd1346f330400eedb7ef2.jpg_small.jpg" /></a></dt>
                                    <dd><a href="">正品都市时尚女装假两件优雅针织衫</a></dd>
                                    <dd>商城价：<em>182.00</em>元</dd>
                                </dl>
                            </li>
                            
                            <li>
                                <dl>
                                    <dt><a href=""><img src="<?php echo @constant('RESOURCE_PATH');?>
images/04fb225ea46bd1346f330400eedb7ef2.jpg_small.jpg" /></a></dt>
                                    <dd><a href="">正品都市时尚女装假两件优雅针织衫</a></dd>
                                    <dd>商城价：<em>182.00</em>元</dd>
                                </dl>
                            </li>
                            
                            <li>
                                <dl>
                                    <dt><a href=""><img src="<?php echo @constant('RESOURCE_PATH');?>
images/04fb225ea46bd1346f330400eedb7ef2.jpg_small.jpg" /></a></dt>
                                    <dd><a href="">正品都市时尚女装假两件优雅针织衫</a></dd>
                                    <dd>商城价：<em>182.00</em>元</dd>
                                </dl>
                            </li>
                            
                        </ul>
                    </div>
                </div>
                <!-- 中间 End -->
                
                <!-- 右边商品排行 -->
                <div class="shop_bd_home_block_right">
                    <div class="title"><h3>商品排行</h3></div>
                    <ol class="saletop-list">
                        <li class="top clearfix">
                            <dl>
                                <dt class="goods-name">
                                    <a href="">正品都市时尚女装假两件优雅针</a>
                                </dt>
                                <dd class="nokey">1</dd>
                                <dd class="goods-pic">
                                    <a href=""><span class="thumb size60"><img src="<?php echo @constant('RESOURCE_PATH');?>
images/3f81874d594894d19150843c42fb1f8e.jpg_small.jpg" /></span></a>
                                </dd>
                                <dd class="goods-price"><em>398.00</em></dd>
                            </dl>
                        </li>
                        <li class="top clearfix">
                            <dl>
                                <dt class="goods-name">
                                    <a href="">正品都市时尚女装假两件优雅针</a>
                                </dt>
                                <dd class="nokey">2</dd>
                                <dd class="goods-pic">
                                    <a href=""><span class="thumb size60"><img src="<?php echo @constant('RESOURCE_PATH');?>
images/3f81874d594894d19150843c42fb1f8e.jpg_small.jpg" /></span></a>
                                </dd>
                                <dd class="goods-price"><em>398.00</em></dd>
                            </dl>
                        </li>
                        <li class="top clearfix">
                            <dl>
                                <dt class="goods-name">
                                    <a href="">正品都市时尚女装假两件优雅针</a>
                                </dt>
                                <dd class="nokey">3</dd>
                                <dd class="goods-pic">
                                    <a href=""><span class="thumb size60"><img src="<?php echo @constant('RESOURCE_PATH');?>
images/3f81874d594894d19150843c42fb1f8e.jpg_small.jpg" /></span></a>
                                </dd>
                                <dd class="goods-price"><em>398.00</em></dd>
                            </dl>
                        </li>
                        
                        <li class="normal">
                            <i>4</i>
                            <a href="">2011秋冬新款韩版大码毛领毛呢外套呢子大衣【演示数据】</a>
                        </li>
                        <li class="normal">
                            <i>5</i>
                            <a href="">2011秋冬新款韩版大码毛领毛呢外套呢子大衣【演示数据】</a>
                        </li>
                        <li class="normal">
                            <i>6</i>
                            <a href="">2011秋冬新款韩版大码毛领毛呢外套呢子大衣【演示数据】</a>
                        </li>
                        <li class="normal">
                            <i>7</i>
                            <a href="">2011秋冬新款韩版大码毛领毛呢外套呢子大衣【演示数据】</a>
                        </li>
                        
                    </ol>
                    <div class="saletop-list_adv_pic"><a href=""><img src="<?php echo @constant('RESOURCE_PATH');?>
images/web-3-38_ff9bd2d724f7138cec1b1937000f4feb.jpg" /></a></div>
                </div>
                <!-- 右边商品排行 -->
                
                <!-- 品牌展示 -->
                <div class="shop_bd_home_block_bottom">
                    <ul class="">
                        <li><a href=""><img src="<?php echo @constant('RESOURCE_PATH');?>
images/354b80528d2fbeefbab33c563532517e.gif" /></a></li>
                        <li><a href=""><img src="<?php echo @constant('RESOURCE_PATH');?>
images/1d2dfbead590510046a6522551db8139.gif" /></a></li>
                        <li><a href=""><img src="<?php echo @constant('RESOURCE_PATH');?>
images/26247430b09daa1b441b46008bfb6e6e.gif" /></a></li>
                        <li><a href=""><img src="<?php echo @constant('RESOURCE_PATH');?>
images/a0ac8c6d2d3dc1470d5876923182a8e2.gif" /></a></li>
                        <li><a href=""><img src="<?php echo @constant('RESOURCE_PATH');?>
images/9c5dee77a6ecdafd9e152fed8c6a4e90.gif" /></a></li>
                        <li><a href=""><img src="<?php echo @constant('RESOURCE_PATH');?>
images/b175883eba95e793affb1b1ebbbf85a5.gif" /></a></li>
                        <li><a href=""><img src="<?php echo @constant('RESOURCE_PATH');?>
images/6e61a1c953e5bc8c5f1ffdac36862245.gif" /></a></li>
                        <li><a href=""><img src="<?php echo @constant('RESOURCE_PATH');?>
images/209abd835cd2ce2208f2dc42ba10efb4.gif" /></a></li>
                    </ul>
                </div>
                <!-- 品牌展示 End -->
                
            </div>
            <div clas="clear"></div>
            <!-- 第五块区域 End -->
            
            <div class="faq">
                <dl>
                    <dt>帮助中心</dt>
                    <dd><a href=""><span>积分兑换说明</span></a></dd>
                    <dd><a href=""><span>积分明细</span></a></dd>
                    <dd><a href=""><span>查看已购买商</span></a></dd>
                    <dd><a href=""><span>我要买</span></a></dd>
                    <dd><a href=""><span>忘记密码</span></a></dd>
                </dl>
                
                <dl>
                    <dt>店主之家</dt>
                    <dd><a href=""><span>如何申请开店</span></a></dd>
                    <dd><a href=""><span>商城商品推荐</span></a></dd>
                    <dd><a href=""><span>如何发货</span></a></dd>
                    <dd><a href=""><span>查看已售商品</span></a></dd>
                    <dd><a href=""><span>如何管理店铺</span></a></dd>
                </dl>
                
                <dl>
                    <dt>支付方式</dt>
                    <dd><a href=""><span>公司转账</span></a></dd>
                    <dd><a href=""><span>邮局汇款</span></a></dd>
                    <dd><a href=""><span>分期付款</span></a></dd>
                    <dd><a href=""><span>在线支付</span></a></dd>
                    <dd><a href=""><span>如何注册支付</span></a></dd>
                </dl>
                
                <dl>
                    <dt>售后服务</dt>
                    <dd><a href=""><span>退款申请</span></a></dd>
                    <dd><a href=""><span>返修/退换货</span></a></dd>
                    <dd><a href=""><span>退换货流程</span></a></dd>
                    <dd><a href=""><span>退换货政策</span></a></dd>
                    <dd><a href=""><span>联系卖家</span></a></dd>
                </dl>
                
                <dl>
                    <dt>客服中心</dt>
                    <dd><a href=""><span>修改收货地址</span></a></dd>
                    <dd><a href=""><span>商品发布</span></a></dd>
                    <dd><a href=""><span>会员修改个人</span></a></dd>
                    <dd><a href=""><span>会员修改密码</span></a></dd>
                    
                </dl>
                
                <dl>
                    <dt>关于我们</dt>
                    <dd><a href=""><span>合作及洽谈</span></a></dd>
                    <dd><a href=""><span>招聘英才</span></a></dd>
                    <dd><a href=""><span>联系我们</span></a></dd>
                    <dd><a href=""><span>关于Shop</span></a></dd>
                </dl>
                
                
            </div>
            <div class="clear"></div>
	</div>
	<!-- Body End -->

	<!-- Footer - wll - 2013/3/24 -->
	<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<!-- Footer End -->
</body>
</html><?php }} ?>
