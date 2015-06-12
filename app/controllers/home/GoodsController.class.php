<?php if(!defined("ROOT_PATH"))die('No direct script access allowed');
/*
商品控制器
*/

class GoodsController extends BaseController {

	public function __construct()
	{
		parent::__construct();
		$this->goodsModel = M("Goods");
	}

	public function indexAction()
	{
		$this->display("goods.html");
	}

	//商品详情
	public function detailAction()
	{
		#get方式获取商品ID
		$goods_id = $_GET['goods_id'] + 0;

		#依据商品ID查询对应商品信息
		$goods_info = $this->goodsModel->getGoodsById($goods_id);
		#依据商品ID查询对应的相册
		$photo_list = $this->goodsModel->getPhotosById($goods_id);

		$this->put('goods_info',$goods_info);
		$this->put('photo_list',$photo_list);
		$this->display("goods.html");
	}
}