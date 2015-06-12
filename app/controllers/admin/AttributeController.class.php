<?php if(!defined('ROOT_PATH'))die("No direct script access allowed");
/**
 * 商品类型属性控制器
 */

class AttributeController extends BaseController {

	public function __construct()
	{
		parent::__construct();
		$this->attrModel = M("Attribute");
		$this->typeModel = M("Type");
	}

	public function indexAction()
	{
		if(isset($_GET['goods_type']))
		{
			$goods_type = $_GET['goods_type'];

		}else{
			$goods_type = 0;
		}

		$total = $this->attrModel->getCountById($goods_type);
		$pagesize = 12;
		$current = isset($_REQUEST['page']) ? $_REQUEST['page'] : 1;
		$offset = ($current -1) * $pagesize;
		$limit=array($offset,$pagesize);

		$list = $this->attrModel->getListById($goods_type,$limit);
		
		$this->library('Page');
		$page = new Page($total,$pagesize,$current,'index.php',array("p"=>"admin","c"=>"attribute","a"=>"index",'goods_type'=>$goods_type));
		$pageBar = $page->showPage();

		$typelist = $this->typeModel->get_list();

		$this->put('list',$list);
		$this->put('pageBar',$pageBar);
		$this->put('goods_type',$goods_type);
		$this->put("typelist",$typelist);
		$this->display("attribute_list.html");
	}

	public function addAction()
	{
		
		if(!empty($_POST) && ($_POST['act'] =='insert'))
		{
			$attr = array(
				'attr_name' => $_POST['attr_name'],
				'type_id'   => $_POST['type_id'],
				'attr_type'  => $_POST['attr_type'],
				'attr_input_type' => $_POST['attr_input_type'],
			);

			if(isset($_POST['attr_value']))
			{
				$attr['attr_values']  = $_POST['attr_values'];
			}

			if($attr['attr_name'] == '' || $attr['type_id'] == '')
			{
				$this->_jump("index.php?p=admin&c=attribute&a=index&goods_type={$_POST['goods_type']}","属性名称或类型ID不能为空",2);
			}
			$this->helper("input");
			$attr = deepspecialchars($attr);
			
			
			if($this->attrModel->insert("attribute",$attr))
			{
				$this->_jump("index.php?p=admin&c=attribute&a=index&goods_type={$_POST['goods_type']}","商品属性添加成功",2);
			}else{
				$this->_jump("index.php?p=admin&c=attribute&a=add&goods_type={$_POST['goods_type']}","商品属性添加失败",2);
			}
			
		}else{
			$goods_type = $_GET['goods_type'];
			
			#获得所有商品类型列表

			$type_list = $this->typeModel->get_list();

			$this->put("type",$type_list);
			$this->put('goods_type',$goods_type);
			$this->display("attribute_add.html");
		}
	}

	public function editAction()
	{
		$attr_id = $_GET['attr_id'];
		$attr_one = $this->attrModel->getOneById($attr_id);
		

		$type_list = $this->typeModel->get_list();
		
		$this->put("type_list",$type_list);
		$this->put("attr_info",$attr_one);
		$this->display("attribute_edit.html");
	}

	public function saveAction()
	{
		$attr_id = $_POST['attr_id'];

			$attr = array(
				'attr_name' => $_POST['attr_name'],
				'type_id'   => $_POST['type_id'],
				'attr_type'  => $_POST['attr_type'],
				'attr_input_type' => $_POST['attr_input_type'],
			);
			if(isset($_POST['attr_value']))
			{
				$attr['attr_values']  = $_POST['attr_values'];
			}

			if($attr['attr_name'] == '' || $attr['type_id'] == '')
			{
				$this->_jump("index.php?p=admin&c=attribute&a=add&goods_type={$_POST['goods_type']}","属性名称或类型ID不能为空",2);
			}
			$this->helper("input");
			$attr = deepspecialchars($attr);
			
			
			if($this->attrModel->update("attribute",$attr,array("attr_id"=>$attr_id)))
			{
				$this->_jump("index.php?p=admin&c=attribute&a=index&goods_type={$_POST['goods_type']}","商品属性更新成功",2);
			}else{
				$this->_jump("index.php?p=admin&c=attribute&a=edit&attr_id={$attr_id}","商品属性更新失败",2);
			}
	}


	/**
	 * 商品属性值删除
	 * @param string $attr_id 属性ID
	 * @return bool 返回布尔值
	 */

	public function delAction()
	{
		$id = $_GET['attr_id'];

		if($this->attrModel->delete("attribute",array("attr_id"=>$id)))
		{
			$this->_jump("index.php?p=admin&c=attribute&=index","商品属性删除成功",3);
		}else{
			$this->_jump("index.php?p=admin&c=attribute&=index","商品属性删除失败",3);
		}
	}
}