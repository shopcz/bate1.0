<?php if(!defined('ROOT_PATH'))die('No direct script access allowed');

class AdminModel extends Model {
	/**
	 * 利用管理员名称和密码验证合法性
	 * @param $username string 用户名
	 * @param $password string 密码
	 * @return bool
	 */
	public function check($username,$password)
	{
		$escape_name = $this->db->escapeString($username);
		$escape_pass = $this->db->escapeString($password);
		$sql = "select `admin_id`,`admin_name` from ".$this->table('admin')." where `admin_name`=$escape_name and `password` = md5($escape_pass)";

		return $this->db->getRow($sql);

	}
}