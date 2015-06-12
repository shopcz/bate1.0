<?php if(!defined('ROOT_PATH'))die('No direct script access allowed');
/**
 * 核心模型类
 */

class Model {

	protected $db;//存储初始化完毕的db对象
	protected $table;//表名
	protected $fields = array();//字段列表
	private $prefix;

	/**
	 * 构造函数
	 */

	public function __construct()
	{
		$this->_initDb();
		
	}

	private function _initDb()
	{
		#载入Mysql
		#实例化数据库操作对象db Database Access Object
		if($GLOBALS['config']['dbtype'] ==1)
		{
			$connect_type = 'mysql';
			$options = $GLOBALS['config']['database'][$connect_type];
		  
			$this->db = Mysql::GetOneInstance($options);
			$this->prefix = $options['prefix'];
		}else{
			$connect_type = 'pdo_mysql';
			$options = $GLOBALS['config']['database'][$connect_type];
			$this->prefix = $options['prefix'];
		    unset($options['prefix']);
			$this->db = Pdo_Mysql::GetOneInstance($options['dsn'],$options['user'],$options['pass'],$options['driver_options']);
			
		}
	
	}

	/**
	 * 删除记录
	 * @access public
	 * @param $condition string关联数组 查询条件
	 */

	public function delete($table,$condition)
	{
		$param ='';
		$sql = "delete from ".$this->table($table);
		$sql.= " where ";
		foreach ($condition as $k => $v) {
			# code...
			$param .= $k." = '".$v."',";
		}
		$sql .=substr($param,0,-1);
		$delete = $this->db->exec($sql);
		return $delete;
	}

	/**
	 * 更新记录
	 * @access public 
	 * @param $condition string关联数组，查询条件
	 * @param $date array() 需要更新的字段数组
	 */
	public function update($table,$data,$condition)
	{	$query = $param ='';
		$sql = "update ".$this->table($table)." set ";
		foreach ($data as $key => $value) {
			# code...
			$query .= $key." = '".$value."',";
		}

		//去掉后面的逗号
		$sql .=substr($query, 0,-1);
		$sql .= " where ";
		foreach ($condition as $k => $v) {
			# code...
			$param .= $k." = '".$v."',";
		}
		$sql .=substr($param,0,-1);
		return $this->db->exec($sql);
		
	}

	/**
	 * 添加数据
	 * @access public
	 * @param $data array() 关联数组
	 * @return (bool)$add
	 */

	 public function insert($table,$data)
	 {
	 	$keys = $values = '';
	 	if(is_array($data)){
	 		foreach($data as $key=>$value)
	 		{
	 			$keys .= $key.",";
	 			$values .="'".$value."',";
	 		}

	 		$keys = substr($keys, 0,-1);
	 		$values = substr($values, 0,-1);
	 	$sql = "insert into ".$this->table($table)." (".$keys.")values(".$values.")";
		 } 
		 $result = $this->db->exec($sql);
		 if($result)
		 {
		 	return $this->db->getInsertId();
		 }else{
		 	return false;
		 }
	}


	/**
	 * 指定表及其前缀
	 * @param $str string 表名
	 * @return string 表名
	 */

	public function table($str)
	{
		return '`' . $this->prefix . $str .'`';
	}

}