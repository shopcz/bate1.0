<?php if(!defined('ROOT_PATH'))die("No direct script access allowed");
/**
 * 商品分类模型类
 */

class CategoryModel extends Model {

	public function get_list()
	{
		$sql = "select  * from ".$this->table('category');
		$category = $this->db->getAll($sql);
		return $this->tree($category);
	}

	/**
	 * 分类树
	 * @param $arr array() 分类列 ，多维数组
	 * @param $pid string 分类ID
	 * @param $level string 分级
	 * @return $tree array()；
	 */
	public function tree($arr,$pid=0,$level=0)
	{
		static $tree = array();
		foreach($arr as $v)
		{
			if($v['parent_id'] == $pid)
			{
				$v['level'] = $level;
				$tree[] = $v;
				$this->tree($arr,$v['cat_id'],$level+1);
			}
		}
		return $tree;

	}

	/**
	 * 依据分类ID筛选出它本身和下级分类
	 * @param string 分类ID
	 * @return array 关联数组
	 */
	public function subtree($cat_id)
	{
		$ids = array();
		$sql = "select * from ".$this->table('category');
		$category_list = $this->db->getAll($sql);
	   $list = $this->tree($category_list,$cat_id);
	   foreach($list as $v)
	   {
	   		$ids[] =$v['cat_id'];
	   }

	   		$ids[] = $cat_id;
	   	return $ids;
	}

	/**
	 * 编辑分类
	 * @param string $id 分类ID
	 * @return array 对应ID的相关分类信息的关联数组
	 */
	public function get_one($id)
	{
		$sql = "select * from ".$this->table('category')." where `cat_id`=".$id;
		$result = $this->db->getRow($sql);
		return $result;
	}

	/**
	 *  递归分类，嵌套多层分类
	 * @param $arr  array()分类列表的二维数组
	 * @param  $pid string 分类ID
	 * @return void();
	 */

	public function getSubTreeList($arr,$pid=0)
	{
		$list = array();
	    	foreach ($arr as  $v) {
	    		# code...
	    		if($v['parent_id'] == $pid){
	    			$v['chlid'] =$this->getSubTreeList($arr,$v['cat_id']);
	    			$list [] = $v; 
	    		}
	    	}
	    	return $list;
	}

	public function HomeCategoryList()
	{
		$sql = "select  * from ".$this->table("category");
		$rs = $this->db->getAll($sql);

		return $this->getSubTreeList($rs);
	}

	public function getListByParent($id)
	{
		$sql = "select cat_id,cat_name from ".$this->table("category")." where parent_id=".$id;
		return $this->db->getAll($sql);
	}

}