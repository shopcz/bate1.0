<?php  if(!defined('ROOT_PATH'))die('No direct scrpt access allowed');
/**
 * 后台管理中心控制器
 */

class ManageController extends BaseController {

	public function indexAction()
	{
		$this->display('index.html');
	}

	public function topAction()
	{
		$this->display('top.html');
	}

	public function menuAction()
	{
		$this->display('menu.html');
	}

	public function dragAction()
	{
		$this->display('drag.html');
	}

	public function mainAction()
	{
		$this->display('main.html');
	}
}