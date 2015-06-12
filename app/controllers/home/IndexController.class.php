<?php if(!defined('ROOT_PATH'))die("No direct script access allowed");

class IndexController extends BaseController {

	public function __construct()
	{
		parent::__construct();
		$this->CategoryModel = M("Category");
		$this->GoodsModel = M("Goods");
	}

	public function indexAction()
	{
		//echo "这是一个测试页面";
		#获取页面分类列表
		$category = $this->CategoryModel->HomeCategoryList();
	
		#获得推荐列表
		$best =$this->GoodsModel->getBestList("is_best");
		#获取热门商品列表
		$hot =$this->GoodsModel->getBestList("is_hot");
		#获取最新商品列表
		$new =$this->GoodsModel->getBestList("is_new");

		$this->put("category",$category);
		$this->put("best",$best);
		$this->put("hot",$hot);
		$this->put("new",$new);
		$this->display("index.html");

	}
}