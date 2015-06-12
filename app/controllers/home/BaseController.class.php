<?php if(!defined("ROOT_PATH"))die("No direct script access allowed");

class BaseController extends Controller {

	public function __construct()
	{
		parent::__construct();
		$this->CategoryModel = M("Category");
		$this->layout();
	}

	public function layout()
	{
		#获取页面分类列表
		$category = $this->CategoryModel->HomeCategoryList();
		$this->put("category",$category);
	}
}