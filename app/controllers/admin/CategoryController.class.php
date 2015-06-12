<?php if(!defined('ROOT_PATH'))die('No direct script access allowed');

/**
 * 商品分类控制器
 */

class CategoryController extends BaseController {

	/**
	 * 获取商品分类列表
	 * @access public 
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();
		$this->cat = M('Category');
		$this->attributeModel = M("Attribute");
		$this->typeModel = M("Type");
	}
	public function indexAction()
	{
		
		$cat_list = $this->cat->get_list();
		$this->put('cat_list',$cat_list);
		$this->display('cat_list.html');
	}


	/**
	 * 添加商品分类
	 */
	public function addAction()
	{
		if(empty($_POST))
		{
		
			$list = $this->cat->get_list();
			#获得商品属性列表
			$attr_list = $this->attributeModel->get_attr_list();
			#获取商品类型列表
		   	$type_list = $this->typeModel->get_type_list();
			$this->put("type_list",$type_list);
		   	$this->put("attr_list",$attr_list);

			$this->put('list',$list);			
			$this->display('cat_add.html');
		}else{
			
			#接收数据
			$data['cat_name'] = trim($_POST['cat_name']);
			$data['parent_id'] = trim($_POST['parent_id']);
			$data['measure_unit'] = trim($_POST['measure_unit']);
			$data['sort_order'] = trim($_POST['sort_order']);
			$data['cat_desc'] = trim($_POST['cat_desc']);
			$data['is_show'] = $_POST['is_show'];
			$data['filter_attr'] = implode(",",$_POST['filter_attr']);

			$this->helper("input");
		    $data = deepspecialchars($data);
			#判断是否为空
			if($data['cat_name'] =='')
			{
				$this->_jump("index.php?p=admin&c=category&a=add",'分类名称不为空',2);
			}
			#写入数据

			// var_dump($category);
			if($this->cat->insert('category',$data))
			{
				$this->_jump("index.php?p=admin&c=category&a=index","分类添加成功",3);
			}else{
				$this->_jump("index.php?p=admin&c=category&a=add","分类添加失败",3);
			}
			

		}
	}


	/**
	 * 删除操作，通过GET方式获取到分类ID cat_id
	 * 执行基础模型中的delete()方法删除指定分类信息
	 */
	public function delAction()
	{
		#通过浏览器地址栏，以GET方式获取分类ID
		$cat_id = $_GET['cat_id'] + 0;
		
		#通过substree方法，获取当前分类的所有子类的数组，然后通过count函数统计子分类个数。当子分类个数大于1，则表示
		#该分类存在多个子分类。
		if(count($this->cat->subtree($cat_id)) > 1){
			$this->_jump("index.php?p=admin&c=category&a=index","该分类存在多个下级分类，青县删除下级分类!",3);			
		}

		#判断删除是否执行成功，然后跳转到相关页面。
		if($this->cat->delete('category',array('cat_id'=>$cat_id)))
		{
			$this->_jump("index.php?p=admin&c=category&a=index","分类删除成功",2);
		}else{
			$this->_jump("index.php?p=admin&c=category&a=index","分类删除失败",3);
		}

	}

	/**
	 * 编辑方法 编辑分类信息
	 */
	public function editAction()
	{
		$cat_id = $_GET['cat_id'] + 0;
		
		#通过分类ID获取单条分类的全部信息
		$cat_info = $this->cat->get_one($cat_id);
		
		#通过上一步获取到的fileter_attr字段中的attr_id，通过","分割,生成一个attr_id的数组
		if(!empty($cat_info['filter_attr']))
		{
			$filter_attr = explode(",", $cat_info['filter_attr']);
		}else{
			$filter_attr = '';
		}

		#通过上一步获取到的attr_id数组，查询cz_attribute表中的attr_id,attr_name,type_id字段 根据type_id和attr_id排序升序
		$type_attr_list = $this->attributeModel->getAttrById($filter_attr);
	   
	    #获取所有的分类
		$category = $this->cat->get_list();

		#获得商品属性列表
		$attr_list = $this->attributeModel->get_attr_list();
		#获取商品类型列表
		$type_list = $this->typeModel->get_type_list();

		#渲染模板
		$this->put("type_list",$type_list);
		$this->put("attr_list",$attr_list);
		$this->put("type_attr",$type_attr_list);

		$this->put('category_list',$category);
		$this->put('cat_info',$cat_info);
		$this->put('filter_attr',$filter_attr);
		$this->display('cat_edit.html');
	}

	public function saveAction()
	{
		#接收数据
		$data['cat_name'] = trim($_POST['cat_name']);
		$data['parent_id'] = trim($_POST['parent_id']);
		$data['measure_unit'] = trim($_POST['measure_unit']);
		$data['sort_order'] = trim($_POST['sort_order']);
		$data['cat_desc'] = trim($_POST['cat_desc']);
		$data['is_show'] = $_POST['is_show'];
		$cat_id= $_POST["cat_id"];

		$this->helper("input");
		$data = deepspecialchars($data);
		$data['filter_attr'] = implode(",",$_POST['filter_attr']);
		#判断是否为空
		if($data['cat_name'] =='')
		{
			$this->_jump("index.php?p=admin&c=category&a=add",'分类名称不为空',2);
		}


		#写入数据，实例化Category模型

		#获取子分类
		$ids = $this->cat->subtree($cat_id);

		#判断当前上级分类是否在二级分类数组中
		if(in_array($data['parent_id'],$ids))
		{
			$this->_jump("index.php?p=admin&c=category&a=edit&cat_id={$cat_id}","上级分类不能为自身或下级分类，请重新选择上级分类",3);
		}
		if($this->cat->update("category",$data,array("cat_id"=>$cat_id)))
		{
			$this->_jump("index.php?p=admin&c=category&a=index","分类更新成功",3);
		}else{
			$this->_jump("index.php?p=admin&c=category&a=edit&cat_id={$cat_id}","分类更新失败",3);
		}
	}

	public function moveAction()
	{

	}
}