<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-06-03 09:57:45
         compiled from "D:\web\htcdos\shopcz\app\views\admin\order_list.html" */ ?>
<?php /*%%SmartyHeaderCode:27404556e5f19677610-11415223%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '467e7ead5221e140b7d0228d7f9dea5a9aa5722f' => 
    array (
      0 => 'D:\\web\\htcdos\\shopcz\\app\\views\\admin\\order_list.html',
      1 => 1429421796,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27404556e5f19677610-11415223',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_556e5f19805d75_56305032',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556e5f19805d75_56305032')) {function content_556e5f19805d75_56305032($_smarty_tpl) {?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>ECSHOP 管理中心 - 订单列表 </title>
<meta name="robots" content="noindex, nofollow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="<?php echo @constant('RESOURCE_PATH');?>
styles/general.css" rel="stylesheet" type="text/css" />
<link href="<?php echo @constant('RESOURCE_PATH');?>
styles/main.css" rel="stylesheet" type="text/css" />

</head>
<body>

<h1>
<span class="action-span"><a href="order.php?act=order_query">订单查询</a></span>
<span class="action-span1"><a href="index.php?act=main">ECSHOP 管理中心</a> </span><span id="search_id" class="action-span1"> - 订单列表 </span>
<div style="clear:both"></div>
</h1>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo @constant('RESOURCE_PATH');?>
js/utils.js"><?php echo '</script'; ?>
>

<!-- 订单搜索 -->
<div class="form-div">
  <form action="javascript:searchOrder()" name="searchForm">
    <img src="<?php echo @constant('RESOURCE_PATH');?>
images/icon_search.gif" width="26" height="22" border="0" alt="SEARCH" />
    订单号<input name="order_sn" type="text" id="order_sn" size="15">
    收货人<input name="consignee" type="text" id="consignee" size="15">
    订单状态    <select name="status" id="status">
      <option value="-1">请选择...</option>
      <option value="0" selected>待确认</option><option value="100">待付款</option><option value="101">待发货</option><option value="102">已完成</option><option value="1">付款中</option><option value="2">取消</option><option value="3">无效</option><option value="4">退货</option><option value="6">部分发货</option>    </select>
    <input type="submit" value=" 搜索 " class="button" />
    <a href="order.php?act=list&composite_status=0">待确认</a>
    <a href="order.php?act=list&composite_status=100">待付款</a>
    <a href="order.php?act=list&composite_status=101">待发货</a>
  </form>
</div>

<!-- 订单列表 -->
<form method="post" action="order.php?act=operate" name="listForm" onsubmit="return check()">
  <div class="list-div" id="listDiv">

<table cellpadding="3" cellspacing="1">
  <tr>
    <th>
      <input type="checkbox" /><a href="javascript:listTable.sort('order_sn', 'DESC'); ">订单号</a>    </th>
    <th><a href="">下单时间</a><img src="<?php echo @constant('RESOURCE_PATH');?>
images/sort_desc.gif"></th>
    <th><a href="">收货人</a></th>
    <th><a href="javascript:listTable.sort('total_fee', 'DESC'); ">总金额</a></th>
    <th><a href="javascript:listTable.sort('order_amount', 'DESC'); ">应付金额</a></th>
    <th>订单状态</th>
    <th>操作</th>
  <tr>
    <tr>
    <td valign="top" nowrap="nowrap"><input type="checkbox" name="checkboxes" value="2009061909851" /><a href="order.php?act=info&order_id=19" id="order_0">2009061909851</a></td>
    <td>ecshop<br />06-19 20:00</td>
    <td align="left" valign="top"><a href="mailto:ecshop@ecshop.com"> 刘先生</a> [TEL: 010-25851234] <br />海兴大厦</td>
    <td align="right" valign="top" nowrap="nowrap">￥5577.70元</td>
    <td align="right" valign="top" nowrap="nowrap">￥0.00元</td>
    <td align="center" valign="top" nowrap="nowrap">已确认,已付款,已发货</td>
    <td align="center" valign="top"  nowrap="nowrap">
     <a href="order.php?act=info&order_id=19">查看</a>
         </td>
  </tr>
    <tr>
    <td valign="top" nowrap="nowrap"><input type="checkbox" name="checkboxes" value="2009061510313" /><a href="order.php?act=info&order_id=18" id="order_1">2009061510313<br /><div align="center">（团购）</div></a></td>
    <td>ecshop<br />06-15 22:49</td>
    <td align="left" valign="top"><a href="mailto:ecshop@ecshop.com"> 刘先生</a> [TEL: 010-25851234] <br />海兴大厦</td>
    <td align="right" valign="top" nowrap="nowrap">￥510.00元</td>
    <td align="right" valign="top" nowrap="nowrap">￥0.00元</td>
    <td align="center" valign="top" nowrap="nowrap">已确认,已付款,未发货</td>
    <td align="center" valign="top"  nowrap="nowrap">
     <a href="order.php?act=info&order_id=18">查看</a>
         </td>
  </tr>
    <tr>
    <td valign="top" nowrap="nowrap"><input type="checkbox" name="checkboxes" value="2009061503335" /><a href="order.php?act=info&order_id=17" id="order_2">2009061503335</a></td>
    <td>ecshop<br />06-15 22:39</td>
    <td align="left" valign="top"><a href="mailto:ecshop@ecshop.com"> 刘先生</a> [TEL: 010-25851234] <br />海兴大厦</td>
    <td align="right" valign="top" nowrap="nowrap">￥1910.00元</td>
    <td align="right" valign="top" nowrap="nowrap">￥0.00元</td>
    <td align="center" valign="top" nowrap="nowrap"><font color="red">退货</font>,未付款,未发货</td>
    <td align="center" valign="top"  nowrap="nowrap">
     <a href="order.php?act=info&order_id=17">查看</a>
         </td>
  </tr>
    <tr>
    <td valign="top" nowrap="nowrap"><input type="checkbox" name="checkboxes" value="2009061525429" /><a href="order.php?act=info&order_id=16" id="order_3">2009061525429</a></td>
    <td>ecshop<br />06-15 22:01</td>
    <td align="left" valign="top"><a href="mailto:ecshop@ecshop.com"> 刘先生</a> [TEL: 010-25851234] <br />海兴大厦</td>
    <td align="right" valign="top" nowrap="nowrap">￥3196.30元</td>
    <td align="right" valign="top" nowrap="nowrap">￥0.00元</td>
    <td align="center" valign="top" nowrap="nowrap">已确认,已付款,已发货(部分商品)</td>
    <td align="center" valign="top"  nowrap="nowrap">
     <a href="order.php?act=info&order_id=16">查看</a>
         </td>
  </tr>
    <tr>
    <td valign="top" nowrap="nowrap"><input type="checkbox" name="checkboxes" value="2009061585887" /><a href="order.php?act=info&order_id=15" id="order_4">2009061585887</a></td>
    <td>ecshop<br />06-15 21:42</td>
    <td align="left" valign="top"><a href="mailto:ecshop@ecshop.com"> 刘先生</a> [TEL: 010-25851234] <br />海兴大厦</td>
    <td align="right" valign="top" nowrap="nowrap">￥17054.00元</td>
    <td align="right" valign="top" nowrap="nowrap">￥17054.00元</td>
    <td align="center" valign="top" nowrap="nowrap"><font color="red">退货</font>,未付款,未发货</td>
    <td align="center" valign="top"  nowrap="nowrap">
     <a href="order.php?act=info&order_id=15">查看</a>
         </td>
  </tr>
    <tr>
    <td valign="top" nowrap="nowrap"><input type="checkbox" name="checkboxes" value="2009052224892" /><a href="order.php?act=info&order_id=14" id="order_5">2009052224892</a></td>
    <td>ecshop<br />05-22 23:18</td>
    <td align="left" valign="top"><a href="mailto:ecshop@ecshop.com"> 刘先生</a> [TEL: 010-25851234] <br />海兴大厦</td>
    <td align="right" valign="top" nowrap="nowrap">￥14055.00元</td>
    <td align="right" valign="top" nowrap="nowrap">￥0.00元</td>
    <td align="center" valign="top" nowrap="nowrap">已确认,已付款,已发货</td>
    <td align="center" valign="top"  nowrap="nowrap">
     <a href="order.php?act=info&order_id=14">查看</a>
         </td>
  </tr>
    <tr>
    <td valign="top" nowrap="nowrap"><input type="checkbox" name="checkboxes" value="2009051719232" /><a href="order.php?act=info&order_id=13" id="order_6">2009051719232</a></td>
    <td>ecshop<br />05-18 08:05</td>
    <td align="left" valign="top"><a href="mailto:ecshop@ecshop.com"> 刘先生</a> [TEL: 010-25851234] <br />海兴大厦</td>
    <td align="right" valign="top" nowrap="nowrap">￥975.00元</td>
    <td align="right" valign="top" nowrap="nowrap">￥975.00元</td>
    <td align="center" valign="top" nowrap="nowrap">已确认,未付款,已发货</td>
    <td align="center" valign="top"  nowrap="nowrap">
     <a href="order.php?act=info&order_id=13">查看</a>
         </td>
  </tr>
    <tr>
    <td valign="top" nowrap="nowrap"><input type="checkbox" name="checkboxes" value="2009051712919" /><a href="order.php?act=info&order_id=12" id="order_7">2009051712919</a></td>
    <td>ecshop<br />05-18 08:05</td>
    <td align="left" valign="top"><a href="mailto:ecshop@ecshop.com"> 刘先生</a> [TEL: 010-25851234] <br />海兴大厦</td>
    <td align="right" valign="top" nowrap="nowrap">￥253.00元</td>
    <td align="right" valign="top" nowrap="nowrap">￥253.00元</td>
    <td align="center" valign="top" nowrap="nowrap"><font color="red"> 取消</font>,未付款,未发货</td>
    <td align="center" valign="top"  nowrap="nowrap">
     <a href="order.php?act=info&order_id=12">查看</a>
          <br /><a href="javascript:;" onclick="listTable.remove(12, remove_confirm, 'remove_order')">移除</a>
         </td>
  </tr>
    <tr>
    <td valign="top" nowrap="nowrap"><input type="checkbox" name="checkboxes" value="2009051264945" /><a href="order.php?act=info&order_id=11" id="order_8">2009051264945</a></td>
    <td>匿名用户<br />05-13 08:04</td>
    <td align="left" valign="top"><a href="mailto:linzi@116.com"> 林小姐</a> [TEL: 135474510] <br />中关村海兴大厦</td>
    <td align="right" valign="top" nowrap="nowrap">￥3810.00元</td>
    <td align="right" valign="top" nowrap="nowrap">￥3810.00元</td>
    <td align="center" valign="top" nowrap="nowrap">已确认,未付款,未发货</td>
    <td align="center" valign="top"  nowrap="nowrap">
     <a href="order.php?act=info&order_id=11">查看</a>
         </td>
  </tr>
    <tr>
    <td valign="top" nowrap="nowrap"><input type="checkbox" name="checkboxes" value="2009051268194" /><a href="order.php?act=info&order_id=10" id="order_9">2009051268194<br /><div align="center">（积分兑换）</div></a></td>
    <td>ecshop<br />05-13 07:58</td>
    <td align="left" valign="top"><a href="mailto:ecshop@ecshop.com"> 刘先生</a> [TEL: 010-25851234] <br />海兴大厦</td>
    <td align="right" valign="top" nowrap="nowrap">￥10.00元</td>
    <td align="right" valign="top" nowrap="nowrap">￥0.00元</td>
    <td align="center" valign="top" nowrap="nowrap">已确认,已付款,未发货</td>
    <td align="center" valign="top"  nowrap="nowrap">
     <a href="order.php?act=info&order_id=10">查看</a>
         </td>
  </tr>
    <tr>
    <td valign="top" nowrap="nowrap"><input type="checkbox" name="checkboxes" value="2009051210718" /><a href="order.php?act=info&order_id=9" id="order_10">2009051210718</a></td>
    <td>text<br />05-13 07:55</td>
    <td align="left" valign="top"><a href="mailto:text@ecshop.com"> 叶先生</a> [TEL: 13588104710] <br />通州区旗舰凯旋小区</td>
    <td align="right" valign="top" nowrap="nowrap">￥2015.00元</td>
    <td align="right" valign="top" nowrap="nowrap">￥2015.00元</td>
    <td align="center" valign="top" nowrap="nowrap">未确认,未付款,未发货</td>
    <td align="center" valign="top"  nowrap="nowrap">
     <a href="order.php?act=info&order_id=9">查看</a>
         </td>
  </tr>
    <tr>
    <td valign="top" nowrap="nowrap"><input type="checkbox" name="checkboxes" value="2009051299732" /><a href="order.php?act=info&order_id=8" id="order_11">2009051299732</a></td>
    <td>text<br />05-13 07:50</td>
    <td align="left" valign="top"><a href="mailto:text@ecshop.com"> 叶先生</a> [TEL: 13588104710] <br />通州区旗舰凯旋小区</td>
    <td align="right" valign="top" nowrap="nowrap">￥638.00元</td>
    <td align="right" valign="top" nowrap="nowrap">￥638.00元</td>
    <td align="center" valign="top" nowrap="nowrap">未确认,未付款,未发货</td>
    <td align="center" valign="top"  nowrap="nowrap">
     <a href="order.php?act=info&order_id=8">查看</a>
         </td>
  </tr>
    <tr>
    <td valign="top" nowrap="nowrap"><input type="checkbox" name="checkboxes" value="2009051227085" /><a href="order.php?act=info&order_id=7" id="order_12">2009051227085</a></td>
    <td>text<br />05-13 07:49</td>
    <td align="left" valign="top"><a href="mailto:text@ecshop.com"> 叶先生</a> [TEL: 13588104710] <br />通州区旗舰凯旋小区</td>
    <td align="right" valign="top" nowrap="nowrap">￥2313.00元</td>
    <td align="right" valign="top" nowrap="nowrap">￥1198.10元</td>
    <td align="center" valign="top" nowrap="nowrap">已确认,未付款,未发货</td>
    <td align="center" valign="top"  nowrap="nowrap">
     <a href="order.php?act=info&order_id=7">查看</a>
         </td>
  </tr>
    <tr>
    <td valign="top" nowrap="nowrap"><input type="checkbox" name="checkboxes" value="2009051217221" /><a href="order.php?act=info&order_id=6" id="order_13">2009051217221</a></td>
    <td>text<br />05-13 07:48</td>
    <td align="left" valign="top"><a href="mailto:text@ecshop.com"> 叶先生</a> [TEL: 13588104710] <br />通州区旗舰凯旋小区</td>
    <td align="right" valign="top" nowrap="nowrap">￥35.00元</td>
    <td align="right" valign="top" nowrap="nowrap">￥35.00元</td>
    <td align="center" valign="top" nowrap="nowrap"><font color="red">无效</font>,未付款,未发货</td>
    <td align="center" valign="top"  nowrap="nowrap">
     <a href="order.php?act=info&order_id=6">查看</a>
          <br /><a href="javascript:;" onclick="listTable.remove(6, remove_confirm, 'remove_order')">移除</a>
         </td>
  </tr>
    <tr>
    <td valign="top" nowrap="nowrap"><input type="checkbox" name="checkboxes" value="2009051276258" /><a href="order.php?act=info&order_id=5" id="order_14">2009051276258</a></td>
    <td>ecshop<br />05-13 07:40</td>
    <td align="left" valign="top"><a href="mailto:ecshop@ecshop.com"> 刘先生</a> [TEL: 010-25851234] <br />[中国 北京 北京 海淀区] 中关村海兴大厦</td>
    <td align="right" valign="top" nowrap="nowrap">￥8610.00元</td>
    <td align="right" valign="top" nowrap="nowrap">￥0.00元</td>
    <td align="center" valign="top" nowrap="nowrap">已确认,已付款,配货中</td>
    <td align="center" valign="top"  nowrap="nowrap">
     <a href="order.php?act=info&order_id=5">查看</a>
         </td>
  </tr>
  </table>

<!-- 分页 -->
<table id="page-table" cellspacing="0">
  <tr>
    <td align="right" nowrap="true">
          <!-- $Id: page.htm 14216 2008-03-10 02:27:21Z testyang $ -->
            <div id="turn-page">
        总计  <span id="totalRecords">19</span>
        个记录分为 <span id="totalPages">2</span>
        页当前第 <span id="pageCurrent">1</span>
        页，每页 <input type='text' size='3' id='pageSize' value="15" onkeypress="return listTable.changePageSize(event)" />
        <span id="page-link">
          <a href="javascript:listTable.gotoPageFirst()">第一页</a>
          <a href="javascript:listTable.gotoPagePrev()">上一页</a>
          <a href="javascript:listTable.gotoPageNext()">下一页</a>
          <a href="javascript:listTable.gotoPageLast()">最末页</a>
          <select id="gotoPage" onchange="listTable.gotoPage(this.value)">
            <option value='1'>1</option><option value='2'>2</option>          </select>
        </span>
      </div>
    </td>
  </tr>
</table>

  </div>
  <div>
    <input name="confirm" type="submit" id="btnSubmit" value="确认" class="button" disabled="true" onclick="this.form.target = '_self'" />
    <input name="invalid" type="submit" id="btnSubmit1" value="无效" class="button" disabled="true" onclick="this.form.target = '_self'" />
    <input name="cancel" type="submit" id="btnSubmit2" value="取消" class="button" disabled="true" onclick="this.form.target = '_self'" />
    <input name="remove" type="submit" id="btnSubmit3" value="移除" class="button" disabled="true" onclick="this.form.target = '_self'" />
    <input name="print" type="submit" id="btnSubmit4" value="打印订单" class="button" disabled="true" onclick="this.form.target = '_blank'" />
    <input name="batch" type="hidden" value="1" />
    <input name="order_id" type="hidden" value="" />
  </div>
</form>
<?php echo '<script'; ?>
 language="JavaScript">
listTable.recordCount = 19;
listTable.pageCount = 2;

listTable.filter.order_sn = '';
listTable.filter.consignee = '';
listTable.filter.email = '';
listTable.filter.address = '';
listTable.filter.zipcode = '';
listTable.filter.tel = '';
listTable.filter.mobile = '0';
listTable.filter.country = '0';
listTable.filter.province = '0';
listTable.filter.city = '0';
listTable.filter.district = '0';
listTable.filter.shipping_id = '0';
listTable.filter.pay_id = '0';
listTable.filter.order_status = '-1';
listTable.filter.shipping_status = '-1';
listTable.filter.pay_status = '-1';
listTable.filter.user_id = '0';
listTable.filter.user_name = '';
listTable.filter.composite_status = '-1';
listTable.filter.group_buy_id = '0';
listTable.filter.sort_by = 'add_time';
listTable.filter.sort_order = 'DESC';
listTable.filter.start_time = '';
listTable.filter.end_time = '';
listTable.filter.page = '1';
listTable.filter.page_size = '15';
listTable.filter.record_count = '19';
listTable.filter.page_count = '2';


    onload = function()
    {
        // 开始检查订单
        startCheckOrder();
    }

    /**
     * 搜索订单
     */
    function searchOrder()
    {
        listTable.filter['order_sn'] = Utils.trim(document.forms['searchForm'].elements['order_sn'].value);
        listTable.filter['consignee'] = Utils.trim(document.forms['searchForm'].elements['consignee'].value);
        listTable.filter['composite_status'] = document.forms['searchForm'].elements['status'].value;
        listTable.filter['page'] = 1;
        listTable.loadList();
    }

    function check()
    {
      var snArray = new Array();
      var eles = document.forms['listForm'].elements;
      for (var i=0; i<eles.length; i++)
      {
        if (eles[i].tagName == 'INPUT' && eles[i].type == 'checkbox' && eles[i].checked && eles[i].value != 'on')
        {
          snArray.push(eles[i].value);
        }
      }
      if (snArray.length == 0)
      {
        return false;
      }
      else
      {
        eles['order_id'].value = snArray.toString();
        return true;
      }
    }
    /**
     * 显示订单商品及缩图
     */
    var show_goods_layer = 'order_goods_layer';
    var goods_hash_table = new Object;
    var timer = new Object;

    /**
     * 绑定订单号事件
     *
     * @return void
     */
    function bind_order_event()
    {
        var order_seq = 0;
        while(true)
        {
            var order_sn = Utils.$('order_'+order_seq);
            if (order_sn)
            {
                order_sn.onmouseover = function(e)
                {
                    try
                    {
                        window.clearTimeout(timer);
                    }
                    catch(e)
                    {
                    }
                    var order_id = Utils.request(this.href, 'order_id');
                    show_order_goods(e, order_id, show_goods_layer);
                }
                order_sn.onmouseout = function(e)
                {
                    hide_order_goods(show_goods_layer)
                }
                order_seq++;
            }
            else
            {
                break;
            }
        }
    }
    listTable.listCallback = function(result, txt) 
    {
        if (result.error > 0) 
        {
            alert(result.message);
        }
        else 
        {
            try 
            {
                document.getElementById('listDiv').innerHTML = result.content;
                bind_order_event();
                if (typeof result.filter == "object") 
                {
                    listTable.filter = result.filter;
                }
                listTable.pageCount = result.page_count;
            }
            catch(e)
            {
                alert(e.message);
            }
        }
    }
    /**
     * 浏览器兼容式绑定Onload事件
     *
     */
    if (Browser.isIE)
    {
        window.attachEvent("onload", bind_order_event);
    }
    else
    {
        window.addEventListener("load", bind_order_event, false);
    }

    /**
     * 建立订单商品显示层
     *
     * @return void
     */
    function create_goods_layer(id)
    {
        if (!Utils.$(id))
        {
            var n_div = document.createElement('DIV');
            n_div.id = id;
            n_div.className = 'order-goods';
            document.body.appendChild(n_div);
            Utils.$(id).onmouseover = function()
            {
                window.clearTimeout(window.timer);
            }
            Utils.$(id).onmouseout = function()
            {
                hide_order_goods(id);
            }
        }
        else
        {
            Utils.$(id).style.display = '';
        }
    }

    /**
     * 显示订单商品数据
     *
     * @return void
     */
    function show_order_goods(e, order_id, layer_id)
    {
        create_goods_layer(layer_id);
        $layer_id = Utils.$(layer_id);
        $layer_id.style.top = (Utils.y(e) + 12) + 'px';
        $layer_id.style.left = (Utils.x(e) + 12) + 'px';
        if (typeof(goods_hash_table[order_id]) == 'object')
        {
            response_goods_info(goods_hash_table[order_id]);
        }
        else
        {
            $layer_id.innerHTML = loading;
            Ajax.call('order.php?is_ajax=1&act=get_goods_info&order_id='+order_id, '', response_goods_info , 'POST', 'JSON');
        }
    }

    /**
     * 隐藏订单商品
     *
     * @return void
     */
    function hide_order_goods(layer_id)
    {
        $layer_id = Utils.$(layer_id);
        window.timer = window.setTimeout('$layer_id.style.display = "none"', 500);
    }

    /**
     * 处理订单商品的Callback
     *
     * @return void
     */
    function response_goods_info(result)
    {
        if (result.error > 0)
        {
            alert(result.message);
            hide_order_goods(show_goods_layer);
            return;
        }
        if (typeof(goods_hash_table[result.content[0].order_id]) == 'undefined')
        {
            goods_hash_table[result.content[0].order_id] = result;
        }
        Utils.$(show_goods_layer).innerHTML = result.content[0].str;
    }
<?php echo '</script'; ?>
>


<div id="footer">
共执行 4 个查询，用时 0.018001 秒，Gzip 已禁用，内存占用 0.626 MB<br />
版权所有 &copy; 2005-2012 上海商派网络科技有限公司，并保留所有权利。</div>
<!-- 新订单提示信息 -->
<div id="popMsg">
  <table cellspacing="0" cellpadding="0" width="100%" bgcolor="#cfdef4" border="0">
  <tr>
    <td style="color: #0f2c8c" width="30" height="24"></td>
    <td style="font-weight: normal; color: #1f336b; padding-top: 4px;padding-left: 4px" valign="center" width="100%"> 新订单通知</td>
    <td style="padding-top: 2px;padding-right:2px" valign="center" align="right" width="19"><span title="关闭" style="cursor: hand;cursor:pointer;color:red;font-size:12px;font-weight:bold;margin-right:4px;" onclick="Message.close()" >×</span><!-- <img title=关闭 style="cursor: hand" onclick=closediv() hspace=3 src="msgclose.jpg"> --></td>
  </tr>
  <tr>
    <td style="padding-right: 1px; padding-bottom: 1px" colspan="3" height="70">
    <div id="popMsgContent">
      <p>您有 <strong style="color:#ff0000" id="spanNewOrder">1</strong> 个新订单以及       <strong style="color:#ff0000" id="spanNewPaid">0</strong> 个新付款的订单</p>
      <p align="center" style="word-break:break-all"><a href="order.php?act=list"><span style="color:#ff0000">点击查看新订单</span></a></p>
    </div>
    </td>
  </tr>
  </table>
</div>

<!--
<embed src="<?php echo @constant('RESOURCE_PATH');?>
images/online.wav" width="0" height="0" autostart="false" name="msgBeep" id="msgBeep" enablejavascript="true"/>
-->
<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://active.macromedia.com/flash2/cabs/swflash.cab#version=4,0,0,0" id="msgBeep" width="1" height="1">
  <param name="movie" value="<?php echo @constant('RESOURCE_PATH');?>
images/online.swf">
  <param name="quality" value="high">
  <embed src="<?php echo @constant('RESOURCE_PATH');?>
images/online.swf" name="msgBeep" id="msgBeep" quality="high" width="0" height="0" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?p1_prod_version=shockwaveflash">
  </embed>
</object>

<?php echo '<script'; ?>
 language="JavaScript">
document.onmousemove=function(e)
{
  var obj = Utils.srcElement(e);
  if (typeof(obj.onclick) == 'function' && obj.onclick.toString().indexOf('listTable.edit') != -1)
  {
    obj.title = '点击修改内容';
    obj.style.cssText = 'background: #278296;';
    obj.onmouseout = function(e)
    {
      this.style.cssText = '';
    }
  }
  else if (typeof(obj.href) != 'undefined' && obj.href.indexOf('listTable.sort') != -1)
  {
    obj.title = '点击对列表排序';
  }
}
<!--


var MyTodolist;
function showTodoList(adminid)
{
  if(!MyTodolist)
  {
    var global = $import("../js/global.js","js");
    global.onload = global.onreadystatechange= function()
    {
      if(this.readyState && this.readyState=="loading")return;
      var md5 = $import("js/md5.js","js");
      md5.onload = md5.onreadystatechange= function()
      {
        if(this.readyState && this.readyState=="loading")return;
        var todolist = $import("js/todolist.js","js");
        todolist.onload = todolist.onreadystatechange = function()
        {
          if(this.readyState && this.readyState=="loading")return;
          MyTodolist = new Todolist();
          MyTodolist.show();
        }
      }
    }
  }
  else
  {
    if(MyTodolist.visibility)
    {
      MyTodolist.hide();
    }
    else
    {
      MyTodolist.show();
    }
  }
}

if (Browser.isIE)
{
  onscroll = function()
  {
    //document.getElementById('calculator').style.top = document.body.scrollTop;
    document.getElementById('popMsg').style.top = (document.body.scrollTop + document.body.clientHeight - document.getElementById('popMsg').offsetHeight) + "px";
  }
}

if (document.getElementById("listDiv"))
{
  document.getElementById("listDiv").onmouseover = function(e)
  {
    obj = Utils.srcElement(e);

    if (obj)
    {
      if (obj.parentNode.tagName.toLowerCase() == "tr") row = obj.parentNode;
      else if (obj.parentNode.parentNode.tagName.toLowerCase() == "tr") row = obj.parentNode.parentNode;
      else return;

      for (i = 0; i < row.cells.length; i++)
      {
        if (row.cells[i].tagName != "TH") row.cells[i].style.backgroundColor = '#F4FAFB';
      }
    }

  }

  document.getElementById("listDiv").onmouseout = function(e)
  {
    obj = Utils.srcElement(e);

    if (obj)
    {
      if (obj.parentNode.tagName.toLowerCase() == "tr") row = obj.parentNode;
      else if (obj.parentNode.parentNode.tagName.toLowerCase() == "tr") row = obj.parentNode.parentNode;
      else return;

      for (i = 0; i < row.cells.length; i++)
      {
          if (row.cells[i].tagName != "TH") row.cells[i].style.backgroundColor = '#FFF';
      }
    }
  }

  document.getElementById("listDiv").onclick = function(e)
  {
    var obj = Utils.srcElement(e);

    if (obj.tagName == "INPUT" && obj.type == "checkbox")
    {
      if (!document.forms['listForm'])
      {
        return;
      }
      var nodes = document.forms['listForm'].elements;
      var checked = false;

      for (i = 0; i < nodes.length; i++)
      {
        if (nodes[i].checked)
        {
           checked = true;
           break;
         }
      }

      if(document.getElementById("btnSubmit"))
      {
        document.getElementById("btnSubmit").disabled = !checked;
      }
      for (i = 1; i <= 10; i++)
      {
        if (document.getElementById("btnSubmit" + i))
        {
          document.getElementById("btnSubmit" + i).disabled = !checked;
        }
      }
    }
  }

}

//-->
<?php echo '</script'; ?>
>
</body>
</html><?php }} ?>
