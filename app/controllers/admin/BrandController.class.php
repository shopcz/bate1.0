<?php if(!defined('ROOT_PATH'))die('No direct script access allowed');
/**
 * 品牌控制器
 */

class BrandController extends BaseController {

	public function indexAction()
	{
		$brand = M('Brand');
		$total = $brand->get_count();
		$pagesize = 8;
		$current = isset($_REQUEST['page']) ? $_REQUEST['page'] : 1;
		$offset = ($current - 1) * $pagesize;
		
		$limit = array($offset,$pagesize);
		$list_brand = $brand->get_list('brand','',$limit);
		$this->library('Page');
		$page = new page($total,$pagesize,$current,'index.php',array("p"=>"admin","c"=>"brand","a"=>"index"));
		$pageBar = $page->showPage();
	
		$this->put('list',$list_brand);
		$this->put('pageBar',$pageBar);
		$this->display('brand_list.html');
	}

	public function addAction()
	{
		if(!isset($_POST) && !is_array($_POST) || empty($_POST))
		{
			$this->display('brand_add.html');
		}else{
			
			$this->library('Upload');
			$upload = new Upload(UPLOAD_PATH."brand/");
			$logo = $upload->up($_FILES['brand_logo']);

			$data['logo'] = 'public/uploads/brand/'.$logo;
			$data['brand_name'] = trim($_POST['brand_name']);
			$data['url'] = trim($_POST['site_url']);
		    $data['brand_desc'] = trim($_POST['brand_desc']);
		    $data['sort_order'] = trim($_POST['sort_order']);
			$data['is_show'] = $_POST['is_show'];

			$this->helper("input");
			$data = deepspecialchars($data);

			if($data['brand_name'] =='')
			{
				$this->_jump("index.php?p=admin&c=brand&a=add","品牌名称不能为空请重新填写",2);
			}
			$brand = M('Brand');

			if($brand->insertData('brand',$data))
			{
				$this->_jump('index.php?p=admin&c=brand&a=index','添加成功','2');
			}else{
				$this->_jump('index.php?p=admin&c=brand&a=add','添加失败','3');
			}

		}

	}

	public function delAction()
	{
		$id = $_GET['id'] + 0;
		$brand = M("Brand");
		if($brand->delete('brand',array('brand_id'=>$id)))
		{
			$this->_jump("index.php?p=admin&c=brand&a=index","品牌删除成功",2);
		}else{
			$this->_jump("index.php?p=admin&c=brand&a=index","品牌删除失败",2);
		}
	}

	public function editAction()
	{
		$brand_id = $_GET['id'];
		$brand = M('Brand');
		$info = $brand->get_one_info($brand_id);
		$this->put('info',$info);
		$this->display('brand_edit.html');
	}

	public function updateAction()
	{
		$id = $_POST['brand_id'] + 0;
		$data['brand_name'] = trim($_POST['brand_name']);
		$data['url'] = trim($_POST['url']);
		$data['brand_desc'] = trim($_POST['brand_desc']);
		$data['sort_order'] = trim($_POST['sort_order']);
		$data['is_show'] =$_POST['is_show'];

		if($_FILES['brand_logo']['name'] !='' && $_FILES['brand_logo']['size'] !='')
		{
			$this->library('Upload');
			$upload = new Upload(UPLOAD_PATH);
			$logo = $upload->up($_FILES['brand_logo']);
			$data['logo'] = 'public/uploads/'.$logo;
		}

		$this->helper("input");
		$data = deepspecialchars($data);

		if($data['brand_name'] =='')
		{
			$this->_jump("index.php?p=admin&c=brand&a=edit&id={$id}","品牌名称不能为空，请重新填写",3);
		}

		$brand = M('Brand');
		if($brand->update('brand',$data,array('brand_id' =>$id)))
		{
			$this->_jump("index.php?p=admin&c=brand&a=index","品牌更新成功",3);
		}else{
			$this->_jump("index.php?p=admin&c=brand&a=edit&id={$id}","品牌更新失败",3);
		}
	}

}