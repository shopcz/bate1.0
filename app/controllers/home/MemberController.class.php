<?php if(!defined("ROOT_PATH"))die("No direct script access allowed");
/**
 * 用户控制器
 */

class MemberController extends BaseController {

	#构造函数，实例化模型
	public function __construct()
	{
		parent::__construct();
		$this->MemberModel = M("Member");
	}

	/**
	 * 用户基础信息页面
	 */
	public function indexAction()
	{
		#从SESSION中获取member_id
		$member_id = $_SESSION['member_info']['member_id'];
		
		#获取详细的用户信息
		$member_info = $this->MemberModel->getUserInfo($member_id);

		#渲染模板
		$this->put("member_info",$member_info);
		$this->display("member_info.html");
	}

	/**
	 * 更新用户信息
	 */
	public function updateAction()
	{
		#接收POST数据
		$member_id = $_SESSION["member_info"]["member_id"];
		$data["realname"] = trim($_POST["realname"]);
		$data["sex"]	  = $_POST['sex'];

		#引入输入辅助函数
		$this->helper("input");

		#批量添加反斜杠，转义数据
		$data = addslashes_deep($data);
		$data = deepspecialchars($data);

		if($this->MemberModel->update("members",$data,array("member_id"=>$member_id)))
		{
			$this->_jump("index.php?p=home&c=member&a=index","用户信息更新成功",3);
		}else{
			$this->_jump("index.php?p=home&c=member&a=index","用户信息更新失败",2);
		}
	}

	/**
	 * 更新密码
	 */

	public function editpassAction()
	{
		if(isset($_POST['act']) && $_POST['act'] == 'update')
		{
			#销毁act
			unset($_POST['act']);
			#接收数据
			$member_name = $_SESSION['member_info']['member_name'];
			$member_id = $_SESSION['member_info']['member_id'];
			$data['old_member_pass'] = md5(trim($_POST['password']));
			$data['member_pass'] = trim($_POST['new_password']);
			$data['re_member_pass'] = trim($_POST['re_password']);

			#验证原密码是否正确
			if(!$this->MemberModel->check($member_name,$data['old_member_pass']))
			{
				$this->_jump("index.php?p=home&c=member&a=editpass","原密码不正确，请重新输入",3);
			}

			#验证新密码是否输入正确
			if(empty($data['member_pass']) || empty($data['re_member_pass']))
			{
				$this->_jump("index.php?p=home&c=member&a=editpass","新密码为空,请重新输入",3);
			}elseif($data['member_pass'] !=$data['re_member_pass'])
			{
				$this->_jump("index.php?p=home&c=member&a=editpass","密码输入不一致,请重新输入",3);
			}
			
			#转义数据，预防注入
			$this->helper('input');
			$data = addslashes_deep($data);
			$data = deepspecialchars($data);

			$condition['member_pass'] = md5(($data['member_pass']));

			#更新用户数据
			if($this->MemberModel->update("members",$condition,array("member_id"=>$member_id)))
			{
				$this->_jump("index.php?p=home&c=member&a=editpass","用户密码更新成功",3);
			}else{
				$this->_jump("index.php?p=home&c=member&a=editpass","用户密码更新失败",2);
			}

		}else{
			$this->display("password_edit.html");
		}
	}
}