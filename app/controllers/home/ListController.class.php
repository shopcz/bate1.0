<?php if(!defined("ROOT_PATH"))die("No direct script access allowed");
/**
 * 商分类控制器
 */

class ListController extends BaseController {

	public function __construct()
	{
		parent::__construct();
		$this->GoodsModel = M("Goods");
		$this->CategoryModel = M("Category");
	}

	public function indexAction()
	{
		#获取分类ID
		$cat_id = $_GET['cat_id'];

		#获取该类下的所有商品
		$goods = $this->GoodsModel->getGoodsList(array('cat_id'=>$cat_id));

		#面包屑分类
		$category = $this->CategoryModel->getListByParent($cat_id);
		$one = $this->CategoryModel->get_one($cat_id);

		$this->put('goods',$goods);
		$this->put('sub_category',$category);
		$this->put('one',$one);
		$this->display("list.html");
	}
}