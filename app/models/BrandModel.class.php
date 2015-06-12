<?php if(!defined('ROOT_PATH'))die('No direct script access allowed');
/**
 * 品牌模型类
 */

class BrandModel extends Model {

	public function insertData($table,$data)
	{
		$add = $this->insert($table,$data);
		return $add;
	}

	public function get_list($table,$condition = null,$limit=null)
	{
		$sql = "select * from ".$this->table($table);
		if($condition !='')
		{
			$query = '';
			foreach ($condition as $k => $v) {
				# code...
				$query .= $k." = '".$v."',";
			}
			$sql .=" where ";
			$sql .=substr($query, 0,-1);
		}
		if($limit !='')
		{
			$sql .=" limit ".$limit[0].",".$limit[1];
		}
		$result = $this->db->getAll($sql);
		return $result;
		
	}

	public function get_count()
	{
		$sql = "select count(*) from ".$this->table('brand');
		return $this->db->getone($sql);
	}

	public function get_one_info($id)
	{
		$sql = "select * from ".$this->table('brand')." where `brand_id`=".$id;
		$result = $this->db->getRow($sql);
		return $result;
	}
}