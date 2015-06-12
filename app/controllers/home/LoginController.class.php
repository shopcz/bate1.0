<?php if(!defined("ROOT_PATH"))die("No direct script access allowed");
/**
 * 登陆控制器
 */

class LoginController extends Controller 
{
	#构造函数，实例化Member模型
	public function __construct()
	{
		parent::__construct();
		$this->MemberModel = M("Member");
	}

	/**
	 * 登陆页面
	 */
	public function indexAction()
	{
		$this->display("login.html");
	}

	/**
	 * 验证码生成
	 *
	 */ 
	public function captchaAction()
	{
		$this->library("Captcha");

		$code = new Captcha(4,110,30,12);
		$code->generateCode();
		$_SESSION["code"] = $code->getCode();
	}

	#登陆验证
	public function checkAction()
	{
		$code   = $_POST['code'];
		$username = trim($_POST['username']);
		$password = trim(md5($_POST['password']));
		if(!isset($code) && ($code != $_SESSION['code']))
		{

			$this->_jump("index.php?p=home&c=login&a=index","验证码有误",3);
		}

		if($info = $this->MemberModel->check($username,$password))
		{
			
			$_SESSION['member_info'] = $info;
			
			unset($_SESSION['code']);
			$this->_jump("index.php?p=home&c=member&a=index","登陆成功",3);
			
		}else{
			$this->_jump("index.php?p=home&c=login&a=index","登陆失败",3);
		}
	}

	#退出
	public function logoutAction()
	{
		unset($_SESSION['member_info']);
		session_destroy();
		$this->_jump("index.php?p=home&c=login&a=index","退出成功",2);
	}

	#用户注册
	public function registerAction()
	{
		if(isset($_POST['act']) && $_POST['act'] == 'register')
		{
			#接收数据
			$data['member_name'] = trim($_POST['member_name']);
			$data['member_pass'] = trim($_POST['member_pass']);
			$data['re_member_pass'] = trim($_POST['re_member_pass']);
			$data['email']          = trim($_POST['email']);
			$data['code']		    = trim($_POST['code']);

			$username = $this->MemberModel->checkUser($data['member_name']);

			#判断输入密码是否相等
			if($data['member_pass'] != $data['re_member_pass'])
			{
				$msg['msg'] = "两次输入密码不一致";
				$msg['error'] =1;
				tojson($msg);
			}elseif($data['code'] !=$_SESSION['code'])
			{
				$msg['msg'] = "验证码输入不正确";
				$msg['error'] =1;
				tojson($msg);
			}elseif($data['member_name'] == $username['member_name'])
			{
				$msg['msg'] = "用户名已注册";
				$msg['error'] = 1;
				tojson($msg);
			}

			#转义数据
			$this->helper('input');
			$data = addslashes_deep($data);
			$data = deepspecialchars($data);

			$condition['member_name'] = $data['member_name'];
			$condition['member_pass'] = md5($data['member_pass']);
			$condition['email']       = $data['email'];

			#写入数据库
			if($member_id = $this->MemberModel->insert("members",$condition))
			{
				$msg['error'] =0;
				$member['member_id'] = $member_id;
				$member['member_name'] = $condition['member_name'];
				$member['email'] = $condition['email'];
				$_SESSION['member_info'] = $member;
				tojson($msg);
			}
			
			
		}else{
			$this->display("register.html");
		}
	}


}