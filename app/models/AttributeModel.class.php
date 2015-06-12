<?php if(!defined('ROOT_PATH'))die("No direct script access alloewed");
/**
 * 商品属性控制器
 */

class AttributeModel extends Model {

	/**
	 * 通过商品类型Id查询商品属性
	 * @param string $id 商品类型ID
	 * @param string $limit 
	 * @return array() 关联数组
	 */
	public function getListById($id,$limit)
	{
		if($id == '0')
		{
			$sql = "select a.*,g.type_name from ".$this->table('attribute')." as a left join ".$this->table('goods_type')." as g on a.`type_id`=g.`type_id`";
		}else{
			$sql = "select a.*,g.type_name from ".$this->table('attribute')." as a left join ".$this->table('goods_type')." as g on a.`type_id`=g.`type_id`"." where a.`type_id`=$id";
		}
			$sql .=" limit ".$limit[0].",".$limit[1];
			$result = $this->db->getAll($sql);
			return $result;
	}

	/**
	 * 后台获取属性列表
	 */

	public function get_attr_list()
	{
		$sql = "select a.attr_id,a.attr_name,a.type_id from ".$this->table("attribute")." as a ,";
		$sql .= $this->table("goods_type")." as c where a.type_id = c.type_id order by a.type_id asc,a.attr_id asc";
		$arr = $this->db->getAll($sql);
		$list = array();
		foreach($arr as $val)
		{
			$list[$val['type_id']][] = array($val['attr_id']=>$val['attr_name']);
		}

		return $list;
	}
	/**
	 * 查询当前商品类型的属性记录集总数
	 */

	public function getCountById($id)
	{
		if($id ==0)
		{
			$sql = "select count(*) from ".$this->table('attribute');
		}else{
			$sql = "select count(*) from ".$this->table('attribute')." where `type_id`=".$id;
		}

		return $this->db->getone($sql);
	}

	/**
	 * 根据属性ID   attr_id获取单条记录的信息
	 */

	public function getOneByid($id)
	{
		$sql = "select * from ".$this->table("attribute")." where `attr_id`=".$id;
		return $this->db->getRow($sql);
	}

	/**
	 * 通过多个属性ID获取对应的记录集
	 * @param $attr_id array()  属性ID数组
	 * @return $arr array() 返回一个包含属性ID (attr_id)、属性名称(attr_name),商品类型ID(type_id)
	 */
	public function getAttrByID($attr_id)
	{
		$list = array();
		if(is_array($attr_id) && !empty($attr_id))
		{
			foreach($attr_id as $k=>$val)
			{
				$sql = "select attr_id,attr_name,type_id from ".$this->table("attribute")." where `attr_id`=".$val;
				$rs[]  = $this->db->getRow($sql);
			}
			$list = $rs;
			return $list;
		}else{

			return false;

		}
		
	}
} 