<?php if(!defined('ROOT_PATH'))die('No direct script access allowed');

/**
 * Smarty模板引擎,初始化Smarty
 */
require_once LIB_PATH .'Smarty/Smarty.class.php';

class MySmarty extends Smarty {
	
	public function __construct()
	{
		parent::__construct();
		$this->template_dir = CURR_VIEW_PATH;//定义模板目录，为当前模板目录
		$this->compile_dir = APP_PATH . 'template_c' .DS;//定义编译目录
		$this->cache_dir = APP_PATH . 'cache' .DS;//定义缓存目录
		$this->caching = false;//是否开启缓存
		$this->debugging = false;//是否开启BUG
		$this->left_delimiter = "{#";//设置左定界符
		$this->right_delimiter = "#}";//设置右定界符
	}
}