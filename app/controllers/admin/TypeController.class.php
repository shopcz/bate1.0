<?php if(!defined('ROOT_PATH'))die('No direct script access allowed');
/**
 * 商品类型控制器
 */

class TypeController extends BaseController {

	public function __construct()
	{
		parent::__construct();
		$this->typeModel = M('Type');
		$this->attrModel = M('Attribute');
	}

	public function indexAction()
	{
		
		
		#分页实现
		$total = $this->typeModel->get_count();
		$pagesize = 5;
		$current = isset($_REQUEST['page']) ? $_REQUEST['page'] : 1;
		$offset = ($current -1) * $pagesize;
		$limit=array($offset,$pagesize);

		$list = $this->typeModel->get_list('',$limit);

		

		$this->library('Page');
		$page = new Page($total,$pagesize,$current,'index.php',array("p"=>"admin","c"=>"type","a"=>"index"));
		$pageBar = $page->showPage();

		$this->put('list',$list);
		$this->put('pageBar',$pageBar);
		$this->display('goods_type_list.html');
	}

	#添加
	public function addAction()
	{
		if(empty($_POST))
		{
			$this->display('goods_type_add.html');
		}else{
			$data['type_name'] = trim($_POST['cat_name']);

			$this->helper("input");
			$data = deepspecialchars($data);
			if($data['type_name'] =='')
			{
				$this->_jump("index.php?p=admin&c=type&a=index","商品类型不能为空",2);
			}
		
			if($this->typeModel->insert('goods_type',$data))
			{
				$this->_jump("index.php?p=admin&c=type&a=index","商品类型添加成功",3);
			}else{
				$this->_jump("index.php?p=admin&c=type&a=index","商品类型添加失败",2);
			}
		}
	}

	#删除
	public function delAction()
	{
		$id = $_GET['type_id'] + 0;

		if($this->typeModel->delete('goods_type',array('type_id'=>$id)))
		{
			$this->_jump("index.php?p=admin&c=type&a=index","商品类型删除成功",3);
		}else{
			$this->_jump("index.php?p=admin&c=type&a=index","商品类型删除失败",3);
		}
	}

	#编辑
	public function editAction()
	{
		$id = $_GET['type_id'] + 0;

		$type_info = $this->typeModel->get_one($id);
		$this->put('type',$type_info);
		$this->display('goods_type_edit.html');
	}

	#更新
	public function saveAction()
	{
		$type_id = $_POST['type_id'];
		$data['type_name'] = trim($_POST['cat_name']);


		$this->helper("input");
		$data = deepspecialchars($data);

		if($this->typeModel->update('goods_type',$data,array('type_id'=>$type_id)))
		{
			$this->_jump("index.php?p=admin&c=type&a=index","商品类型更新成功",2);
		}else{
			$this->_jump("index.php?p=admin&c=type&a=edit&type_id={$type_id}","商品类型更新失败",3);
		}
	}
}