<?php
/*
需求：
1，设计一个数据库操作类，以实现数据库相关的“所有操作”
2，可以创建数据库对象的同时并执行连接。；
	2.1，可以在建立连接的同时设定所要连接的数据库和所要使用的连接编码；
	2.2，还可以单独设置所要连接的数据库；
	2.3，还可以单独设置所要使用的连接编码；
3，可以断开连接；
4，可以返回多行多列数据（实际是二维数组）；
5，可以返回一行多列数据（实际是一维数组）；
6，可以返回一行一列数据（实际是一个标量数据）；
7，可以执行非数据返回语句（返回成功与否）；
8，尽量设计为单例模式
*/
class Mysql{
	private $host;
	private $uname;
	private $upswd;
	private $port;
	private $charset;
	private $dbname;
	private $link;	//用于存储一个连接资源

	private static $instance; //用于存储唯一的对象

	public static function GetOneInstance($config){
		//if( !isset(self::$instance)){//改用以下判断更严谨
		if( self::$instance instanceof self === false) {
			self::$instance = new self($config);
		}
		return self::$instance;
	}

	/**
	 * 禁止克隆
	 */
	private function __clone(){}

	/**
	 * 构造函数 初始化数据
	 * @param $config string 数据库配置信息
	 * @return void()
	 */
	private function __construct($config){
		$this->host = $config['host'];
		$this->uname = $config['user'];
		$this->upswd = $config['pass'];
		$this->port = $config['port'];
		$this->charset = $config['charset'];
		$this->dbname = $config['dbname'];


		$this->connect();	//建立连接

		$this->setCharset($this->charset);	//设定连接编码

		$this->selectDB($this->dbname);	//选择数据库

	}

	#链接数据库
	private function connect(){
		$this->link = @mysql_connect("{$this->host}:{$this->port}", $this->uname, $this->upswd) or die("数据库连接失败:");
	}

	#关闭当前链接
	public function disconnect(){
		mysql_close($this->link);
	}

	#设置编码
	public function setCharset($charset){
		$this->query("set names $charset");//mysql_set_charset($charset, $this->link);
	}

	#选择数据库
	public function selectDB($db){
		$this->query("use $db");//mysql_select_db($db, $this->link);
	}

	/**
	 * 获取所有的记录
	 * @access public
	 * @param $sql string 执行的sql语句
	 * @return $list 所有记录组成的二维数组
	 */
	function  getAll($sql){	//应该理解为：select语句
		$result = $this->query($sql);
		if($result === false){
			return false;
		}
		$list = array();
		while($rec = mysql_fetch_assoc( $result )){
			$list[] = $rec;	//$rec是一个数组，其中存储了一行数据
							//这里，一次次将数据组放入$arr这个数组
							//结果$arr就是一个二维数组
		}
		mysql_free_result( $result );//调用系统函数清理“资源”（结果集）
		return $list;	//
	}
	
	/**
	 * 获取一条记录
	 * @access public
	 * @param $sql string 查询的sql语句
	 * @return array 关联数组
	 */
	function  getRow($sql){	//应该理解为：select语句
		$result = $this->query($sql);
		if($result === false){
			return false;
		}
		$rec = mysql_fetch_assoc( $result );
		mysql_free_result( $result );//调用系统函数清理“资源”（结果集）
		return $rec;
	}

	/**
	 * 获取第一条记录的第一个字段
	 * @access public
	 * @param $sql string 查询的sql语句
	 * @return 返回一个该字段的值
	 */
	function  getOne($sql){	//应该理解为：select语句
		$result = $this->query($sql);
		if($result === false){
			return false;
		}
		$re = mysql_fetch_row( $result );	//会有2种下标：索引和关联下标
		mysql_free_result( $result );//调用系统函数清理“资源”（结果集）
		return $re[0];

	}
	//7，可以执行非数据返回语句（返回成功与否）；
	function  exec($sql){	//应该理解为：增删改语句
		$result = $this->query($sql);
		return $result;
	}

	/**
	 * 执行查询
	 *
	 * @param string $sql
	 * @return mixed
	 */
	public function query($sql){	//执行任何mysql语句，包括增删改查
		$result = mysql_query($sql,$this->link);//原始语句：如果失败，返回false，
									//如果成功：返回true（对于增删改）或返回结果集（对于查询语句）
		if($result === false){
			echo "<br />语句执行失败，请参考：" . mysql_error();
			echo "<br />失败的语句为：" . $sql;
			return false;	//也可以使用die()来直接终止代码执行，也是常见的。
		}
		else{
			return $result;
		}
	}

	/**
	 * 获取上一步insert操作产生的id
	 */
	public function getInsertId(){
		return mysql_insert_id($this->link);
	}


	/**
	 * 数据转义
	 * @param $data
	 * @return string 转义完成的数据，并使用引号包裹
	 */
	public function escapeString($data) {
		return "'" . mysql_real_escape_string($data, $this->link) . "'";
	}
}
