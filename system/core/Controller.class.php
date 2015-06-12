<?php if(!defined('ROOT_PATH'))die('No direct script access allowed');
/**
 * 核心控制器
 */

class Controller {

	public $smarty;
	public function __construct()
	{
		$this->_init();
		$this->smarty();
	}

	/**
	 * 页面编码初始化
	 */
	protected function _init()
	{
		header("Content-Type:text/html;charset=utf-8");
	}

	//跳转
	/**
	 * 页面跳转
	 * @param $url string 跳转链接
	 * @param $message string 页面提示信息
	 * @param $wait string 等待时间 默认值为3秒
	 * @return void()
	 */
	protected function _jump($url,$message=null,$wait = null)
	{
		if($wait == 0 || $wait ==null)
		{
			header("location:$url");
		}else{
			include CURR_VIEW_PATH . "message.html";
		}
		exit;//终止程序继续运行
	}
	/**
	 * 加载辅助函数
	 * @param $helper string 辅助函数文件名
	 * @return void();
	 */
	protected function helper($helper)
	{
		include HELPER_PATH . $helper .'_helper.php';
	}

	/**
	 * 加载核心库类文件
	 * @param $library string 类库文件名称
	 * @return void()
	 */
	protected function library($library)
	{
		include LIB_PATH . "{$library}.class.php";
	}

	protected function display($html)
	{
			return $this->smarty->display($html);
			//include CURR_VIEW_PATH . $html;
	}

	/**
    * Smarty模板赋值
    * @package CodeIgniter
    * @author 霏凡
    * @param string $key 
    * @param string $val
    */
	public function put($key,$val)
	{
		$this->smarty->assign($key,$val);
	}

	protected function smarty()
	{
		$this->library('MySmarty');
		$this->smarty = new MySmarty();
	}

	
}