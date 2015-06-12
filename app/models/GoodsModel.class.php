<?php if(!defined("ROOT_PATH"))die("No direct script access allowed");

class GoodsModel extends Model {


	/**
	 * 获取属性列表
	 * @param   int     $cat_id     商品分类ID
	 * @param   int     $goods_id   商品ID
	 * @return  array   商品属性关联数组
	 */
	function get_attr_list($cat_id, $goods_id = 0)
	{
	    if (empty($cat_id))
	    {
	        return array();
	    }

	    // 查询
	    $sql = "SELECT a.attr_id, a.attr_name, a.attr_input_type, a.attr_type, a.attr_values,v.attr_value, v.attr_price ".
	            "FROM " .$this->table('attribute'). " AS a ".
	            "LEFT JOIN " .$this->table('goods_attr'). " AS v ".
	            "ON v.attr_id = a.attr_id AND v.goods_id = '$goods_id' ".
	            "WHERE a.type_id = " . intval($cat_id) ." OR a.type_id = 0 ".
	            "ORDER BY a.sort_order, a.attr_type, a.attr_id, v.attr_price, v.goods_attr_id";

	    $row = $this->db->getAll($sql);
	   
	   return $row;
	}

	/**
	 * 获取商品列表
	 */
	public function getGoodsList($where='',$limit=null,$like=null)
	{
		$sql = "select goods_id,goods_name,goods_sn,shop_price,is_onsale,is_best,is_new,is_hot,goods_number,brand_id,cat_id from ".$this->table("goods");
		if(!empty($where) && is_array($where))
		{	
			$query = '';
			$sql .=  " where ";
			foreach($where as $k=>$v)
			{
				$query .="`".$k."` = '".$v."'"." and ";
			}

			$sql .=substr($query,0,-4);

		}
		if(!empty($like) && !empty($where))
		{
			$sql .= " and `goods_name` like '%".$like."%'";
		}elseif(!empty($like) && empty($where)){
			$sql .= " where `goods_name` like '%".$like."%'";
		}else{
			$sql .='';
		}
		$sql .= " order by `goods_id` desc ";
		if(is_array($limit) && !empty($limit))
		{
			$sql .= " limit ".$limit[0].",".$limit[1];
		}
		
		$result = $this->db->getAll($sql);

		return $result;
	}

	/**
	 * 根据商品条件获取商品数量
	 */
	public function getCountByCondition($where=null,$like=null)
	{
		$sql = "select count(*) as count from ".$this->table("goods");
		if(!empty($where) && is_array($where))
		{
			$query ='';
			$sql .=" where ";
			foreach($where as $k=>$v)
			{
				$query .= "`".$k."` = '".$v."'"." and ";
			}
			$sql .= substr($query,0,-4);
		}

		if(!empty($like) && !empty($where))
		{
			$sql .= " and `goods_name` like '%".$like."%'";
		}elseif(!empty($like) && empty($where)){
			$sql .= " where `goods_name` like '%".$like."%'";
		}else{
			$sql .='';
		}
		$result = $this->db->getone($sql);
		return $result;
	}

	/**
	 * 根据商品ID获取单条商品信息
	 */

	public function getGoodsByid($id)
	{
		$sql = "select * from ".$this->table("goods")."where `goods_id`=".$id;
		return $this->db->getRow($sql);
	}

	/**
	 * 获得推荐商品列表
	 */
	public function getBestList($str)
	{
		$sql = "select  goods_id,goods_name,goods_thumb,shop_price  from ".$this->table("goods");
		$sql .= " where ".$str." =1 order by goods_id desc";
		$sql .= " limit 4";
		$rs = $this->db->getAll($sql);
		return $rs;
	}

	/**
	 * 根据商品ID获取指定相册图集
	 * @param string $goods_id
	 * @return array()
	 */

	public function getPhotosById($goods_id)
	{
		$sql = "select img_id,img_url,thumb_url,img_desc from ".$this->table("gallery");
		$sql .= " where goods_id =".$goods_id." order by img_id desc";
		return $this->db->getAll($sql);
	}

}