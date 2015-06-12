<?php if(!defined("ROOT_PATH"))die("No direct script access allowed");
/**
 * 用户模型类
 */

class MemberModel extends Model
{
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * 根据用户名和密码查询数据
	 * @param $username string 用户名
	 * @param $password string 密码
	 * @return array() 用户信息的关联数组
	 */
	public function check($username,$password)
	{
		$escapename = $this->db->escapeString($username);
		$escapepass = $this->db->escapeString($password);
		$sql = "select member_id,member_name,email from ".$this->table("members")." where member_name = ".$escapename." and member_pass=".$escapepass;
		return $this->db->getRow($sql);
	}

	public function checkUser($username)
	{
		$escapename = $this->db->escapeString($username);
		$sql = "select member_name from ".$this->table("members")." where member_name =".$escapename;
		return $this->db->getRow($sql);
	}

	/**
	 * 根据用户ID获取用户信息
	 * @param $member_id string 用户id
	 * @return array()
	 */
	public function getUserInfo($member_id)
	{
		$sql = "select * from ".$this->table("members")." where member_id=".$member_id;
		return $this->db->getRow($sql);
	}


}