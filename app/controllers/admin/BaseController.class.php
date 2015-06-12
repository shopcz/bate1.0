<?php if(!defined('ROOT_PATH'))die('No direct script access allowed');
/**
 * 后台核心控制器
 */

class BaseController extends Controller {

	public function __construct()
	{
		parent::__construct();
		/*@session_start();*/
		$this->checkLogin();
	}

	public function checkLogin()
	{
		if(!isset($_SESSION['admin_id']))
		{
			$this->_jump("index.php?p=admin&c=public&a=login","请登录后再操作",3);
		}
	}
}