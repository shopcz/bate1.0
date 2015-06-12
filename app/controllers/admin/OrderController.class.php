<?php if(!defined('ROOT_PATH'))die("No direct script access allowed");
/**
 * 商品订单控制器
 */

class OrderController extends BaseController {

	public function indexAction()
	{
		$this->display('order_list.html');
	}
}