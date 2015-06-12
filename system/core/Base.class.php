<?php
/**
 * 核心框架类
 */

class Framework {
	//启动方法
	public static function run()
	{
		self::init();
		self::autoload();
		self::dispatch();
	}

	//初始化
	private static function init()
	{
		//定义路径
		define('DS',DIRECTORY_SEPARATOR);
		#根目录
		define('ROOT_PATH',getcwd() . DS);
		#应用目录
		define('APP_PATH', ROOT_PATH . 'app' . DS);
		#框架目录
		define('FRAMEWORK_PATH', ROOT_PATH . 'system' . DS);
		#公共目录
		define('PUBLIC_PATH', ROOT_PATH . 'public' . DS);
		#模型控制器目录
		define('MODEL_PATH', APP_PATH . 'models' . DS);
		#视图 模板目录
		define('VIEW_PATH' , APP_PATH . 'views' . DS);
		#控制器目录
		define('CONTROLLER_PATH' , APP_PATH . 'controllers' . DS);
		#配置文件目录
		define('CONFIG_PATH', APP_PATH . 'config' . DS);
		#框架核心类目录
		define('CORE_PATH' , FRAMEWORK_PATH . 'core'. DS);
		#数据类目录
		define('DB_PATH' , FRAMEWORK_PATH .'db'. DS);
		#辅助函数类目录
		define('HELPER_PATH',FRAMEWORK_PATH .'helpers'. DS);
		#基础库类目录
		define('LIB_PATH', FRAMEWORK_PATH .'libraries'. DS);
		#公共方法目录
		define('FUNC_PATH', FRAMEWORK_PATH .'function'. DS);
		#定义公共上传目录
		define('UPLOAD_PATH',PUBLIC_PATH . 'uploads' . DS);


		#确定平台，控制器，调用方法
		define('PLATFORM', isset($_REQUEST['p']) ? $_REQUEST['p'] : 'home');
		define('CONTROLLER' , isset($_REQUEST['c']) ? ucfirst($_REQUEST['c']) : 'Index');
		define('ACTION' , isset($_REQUEST['a']) ? $_REQUEST['a'] : 'index');

		#定义平台资源目录
		define('RESOURCE_PATH','app/views/'.PLATFORM.'/');

		#定义当前控制器目录和当前视图目录
		define('CURR_CONTROLLER_PATH' , CONTROLLER_PATH . PLATFORM .DS);
		define('CURR_VIEW_PATH', VIEW_PATH . PLATFORM . DS);

		#开启session
		session_start();

		#载入配置文件
		$GLOBALS['config'] = include CONFIG_PATH . 'config.php';
		
		#加载核心控制器
		include CORE_PATH . 'Controller.class.php';
		include DB_PATH . 'Mysql.class.php';
		include DB_PATH . 'Db.interface.php';
		include DB_PATH . 'Pdo_Mysql.class.php';
		include CORE_PATH . 'Model.class.php';

		#加载公共方法
		include FUNC_PATH . 'base.php';
		include FUNC_PATH . 'common.php';




	} 

	//路由分发
	private static function dispatch()
	{	
		$controller_name = CONTROLLER . "Controller"; //GoodsController
		$action_name = ACTION . "Action"; // addAction
		$controller = new $controller_name();
		$controller->$action_name(); 
	}

	//自动加载
	private static function autoload()
	{
		spl_autoload_register(array(__CLASS__, 'load'));
	}

	private static function load($classname)
	{	
		if(substr($classname, -10) == 'Controller')
		{
			include CURR_CONTROLLER_PATH ."{$classname}.class.php";
		}elseif (substr($classname, -5) == 'Model') {
			include MODEL_PATH . "{$classname}.class.php";
		}else
		{
			//
		}
	}


}