<?php if(!defined('ROOT_PATH'))die('No direct script access allowed');
/**
 * Session处理类
 */

class Session {
	private $db;
	/**
	 * 构造函数
	 */
	public function __construct()
	{
		ini_set('session.save_handler', 'user');
		session_set_save_handler(
			array($this,sess_begin), 
			array($this,sess_end), 
			array($this,sess_read), 
			array($this,sess_write), 
			array($this,sess_delete), 
			array($this,sess_gc));
		session_start();
	}

	public function sess_begin($sess_name,$sess_path)
	{
		$config = $GLOBALS['config']['database']['mysql'];
		$this->db = Mysql::getOneInstance($config);
	} 

	public function sess_end()
	{

	}

	public function sess_read($sess_id)
	{
		$sql = "select `session_data` from `session` where `session_id`='$sess_id'";
		$this->db->getRow($sql);
	}

	public function sess_write($sess_id,$sess_data)
	{
		$sql = "REPLACE INTO `session` VALUES('$sess_id','$sess_data',unix_timestamp())";
		$this->db->exec($sql);
	}

	public function sess_delete($sess_id)
	{
		$sql = "delete from `session` where `session_id`='$sess_id'";
		$this->db->exec($sql);
	}

	public function sess_gc($maxlifetime)
	{
		$sql = "delete from `session` where write_time < unix_timestamp()-$maxlifetime";
		$this->db->exec($sql);
	}
}