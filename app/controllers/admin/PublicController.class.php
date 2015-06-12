<?php if(!defined('ROOT_PATH'))die('No direct script access allowed');
/**
 * 公共控制器
 * 用于处理公共方法
 */

class PublicController extends Controller {


	public function indexAction()
	{
		$this->_jump('index.php?p=admin&c=public&a=login');
	}

	public function loginAction()
	{
		$this->display('login.html');
	}

	public function captchaAction(){
		$this->library('Captcha');
		$code = new Captcha();
		$code->generateCode();
		$_SESSION['code'] = $code->getCode();

	}

	/**
	 * 登陆验证
	 * @access public
	 * @return void
	 */
	public function checkAction()
	{
		$code = $_POST['captcha'];
		$username = $_POST['username'];
		$password = $_POST['password'];

		if(!empty($code) && $code = $_SESSION['code'])
		{
			$admin = M('Admin');
		}else{
			$this->_jump('index.php?p=admin&c=public&a=login','验证码有误',3);
		}
		if($info = $admin->check($username,$password)){
				$_SESSION['admin_info'] = $info;
				$_SESSION['admin_id'] = $info['admin_id'];
			$this->_jump("index.php?p=admin&c=manage&a=index");
		}else{
			$this->_jump("index.php?p=admin&c=public&a=login","登陆失败,请重新登陆",'3');
		}


	}

	public function logoutAction()
	{
		unset($_SESSION['admin_id']);
		unset($_SESSION['admin_info']);
		session_destroy();
		header("location:index.php?p=admin&c=public&a=login");
	}
}