<?php if(!defined('ROOT_PATH'))die("No direct script access allowed");
/**
 * 商品类型控制器
 */

class TypeModel extends Model {

	public function get_list($condition =null,$limit=null)
	{
		$sql = "select t.*,count(attr_name) as count from ".$this->table('goods_type')." as t left join ".$this->table("attribute")." as a ";
		$sql .="on t.type_id = a.type_id group by t.type_id";
		if($condition !='')
		{
			$query='';
			foreach ($condition as $k => $v) {
				# code...
				$query .= "`".$k."` = '".$v."'".",";
			}
			$sql .=" where ";
			$sql .= substr($query, 0,-1);
		} 

		if($limit !='')
		{
			$sql .=" limit ".$limit[0].",".$limit[1];
		}

		return $this->db->getAll($sql);
	}

	public function get_type_list()
	{
		$sql = "select type_id,type_name from ".$this->table("goods_type");
		return $this->db->getAll($sql);
	}
	public function get_count()
	{
		$sql = "select count(*) from ".$this->table('goods_type');
		return $this->db->getOne($sql);
	}

	public function get_one($id)
	{
		$sql = "select * from ".$this->table('goods_type')." where `type_id`=".$id;
		return $this->db->getrow($sql);
	}


}