<?php if(!defined('ROOT_PATH'))die("No direct script access allowed");
/**
 * 商品控制器类
 */

class GoodsController extends BaseController {

	public function __construct()
	{
		parent::__construct();
		$this->GoodsModel = M("Goods");
		$this->brandModel = M("Brand");
		$this->categoryMode = M("Category");
		$this->typeModel = M("Type");
		
	}
	public function indexAction()
	{	
		$condition =array();

		empty($_REQUEST['cat_id']) ? null: $condition['cat_id'] = $_REQUEST['cat_id'];
		empty($_REQUEST['brand_id']) ? null : $condition['brand_id'] = $_REQUEST['brand_id'];
		isset($_REQUEST['is_onsale']) ? $condition['is_onsale'] = $_REQUEST['is_onsale'] : null;
		empty($_REQUEST['intro_type']) ? null : $condition[$_REQUEST['intro_type']] = 1;
		$like = isset($_REQUEST['keyword']) && !empty($_REQUEST['keyword']) ? $_REQUEST['keyword'] : '';
		


		if(isset($_REQUEST['intro_type']) && $_REQUEST['intro_type'] == 'all_type')
		{
			unset($condition[$_REQUEST['intro_type']]);
			$condition['is_best'] = 1;
			$condition['is_new'] = 1;
			$condition['is_hot'] = 1;
		}
		if(isset($_REQUEST['is_onsale']) && $_REQUEST['is_onsale']== 'all'){unset($condition['is_onsale']);}

		#分页开始
	
		$total = $this->GoodsModel->getCountByCondition($condition,$like);
		$pagesize = 12;
		$current = isset($_GET['page']) ? $_GET['page'] : 1;
		$offset = ($current -1)*$pagesize;
		$limit = array($offset,$pagesize);
		
		if(isset($_GET['cat_id']))
		{
			$param = $_GET;
			unset($_GET['page']);
		    $setting = $_GET;
		}else{
			$param = $_GET;
			unset($param['page']);
			$setting = array(
					'cat_id' => '0',
					'brand_id'=>'0',
					'intro_type'=>'0',
					'is_onsale'=>'all',
					);
		}
	

		$this->library("Page");
		$page = new Page($total,$pagesize,$current,"index.php",$param);
		$pageBar = $page->showPage();
		#获取品牌列表
		$brands = $this->brandModel->get_list('brand');
		#获取分类列表
		$categorys = $this->categoryMode->get_list();
		#获取商品类型列表
		$types = $this->typeModel->get_list();

		#获取商品列表
		$goods = $this->GoodsModel->getGoodsList($condition,$limit,$like);
		
		$intro_type = array(
			array('name'=>'全部','value'=>'0'),
			array('name'=>'精品','value'=>'is_best'),
			array('name'=>'新品','value'=>'is_new'),
			array('name'=>'热销','value'=>'is_hot'),
			array('name'=>'特价','value'=>'is_promote'),
			array('name'=>'全部推荐','value'=>'all_type'),
			);

		$is_onsale = array(
		  	array('name' =>'全部' ,'value'=>'all' ),
		  	array('name' =>'上架' ,'value'=>'1' ),
		  	array('name' =>'下架' ,'value'=>'0' )
		  	);
		$this->put("brand",$brands);
		$this->put("category",$categorys);
		$this->put("type",$types);
		$this->put("goods",$goods);
		$this->put('intro_type',$intro_type);
		$this->put('is_onsale',$is_onsale);
		$this->put("setting",$setting);
		$this->put("pageBar",$pageBar);
		$this->display('goods_list.html');
	}

	public function addAction()
	{
		#获取商品分类
		
		$c_list   = $this->categoryMode->get_list();
		#获取商品品牌
		
		$b_list = $this->brandModel->get_list("brand");
		#获取商品类型列表,依据商品类型获取商品属性菜单

		$t_list = $this->typeModel->get_list();

		#数组赋值到模板
		$this->put("c_list",$c_list);
		$this->put("b_list",$b_list);
		$this->put("t_list",$t_list);
		$this->display("goods_add.html");
	}

	public function updateAction()
	{
		#接收表单数据
		$data['goods_name'] = trim($_REQUEST['goods_name']);
		$data['goods_sn'] = trim($_POST['goods_sn']);
		$data['goods_desc'] = trim($_POST['goods_desc']);
		$data['cat_id'] = intval($_POST['cat_id']);
		$data['type_id'] = intval($_POST['type_id']);
		$data['brand_id'] = intval($_POST['brand_id']);
		$data['shop_price'] = trim($_POST['shop_price']);
		$data['market_price'] = trim($_POST['market_price']);

		$img_desc = $_POST['img_desc'];

		$data['is_promote'] = isset($_POST['is_promote']) ?  $_POST['is_promote'] : 0;
		$data['is_hot'] = isset($_POST['is_best']) ? $_POST['is_best'] : 0;
		$data['is_new'] = isset($_POST['is_new']) ? $_POST['is_new'] : 0;
		$data['is_hot'] = isset($_POST['is_hot']) ? $_POST['is_hot'] : 0;
		$data['is_onsale'] = isset($_POST['is_onsale']) ? $_POST['is_onsale'] : 0;
		$data['goods_number'] = $_POST['goods_number'];
		$data['promote_start_time'] = strtotime($_POST['promote_start_time']);
		$data['promote_end_time'] = strtotime($_POST['promote_end_time']);
		$data['add_time'] = strtotime(date("Y-m-d H:i:s"));
		$auto_thumb  = $_POST['auto_thumb'];

		#判断商品名称或者商品本店售价是否为空
		if($data['goods_name'] == '')
		{
			$this->_jump("index.php?p=admin&c=goods&a=add","商品名称不能为空",3);
		}elseif($data['shop_price'] == '')
		{
			$this->_jump("index.php?p=admin&c=goods&a=add","商品的本店售价不为空",2);
		}

		#判断是否上传图片
		if($_FILES['goods_img']['tmp_name'] != '')
		{
			$this->library('Upload');
			$upload = new Upload(UPLOAD_PATH."goods/");
			$goods_img = $upload->up($_FILES['goods_img']);
			$data['goods_img'] = "public/uploads/goods/".$goods_img;

			#判断是否自动生成缩略图
			if(isset($auto_thumb) && $auto_thumb === '1')
			{
				$this->library("Image");
				$image = new Image();
				$from_image = UPLOAD_PATH ."goods/".$goods_img;
				$thumb = $image -> thumbnail($from_image,'160','121',UPLOAD_PATH ."goods/");
			 	$data["goods_thumb"] = "public/uploads/goods/".$thumb;
			}else{
				if($_FILES['goods_thumb']['tmp_name'] != '')
				{
					$goods_thumb = $upload->up($_FILES['goods_thumb']);
					$data['goods_thumb'] = "public/uploads/goods/".$goods_thumb;
				}else{
					$data['goods_thumb'] = "";
				}
			}
		}

		if($_FILES['img_url']['tmp_name']!='')
		{
			$this->library('Upload');
			$uploads = new Upload(UPLOAD_PATH.'goods/gallery/');
			$img_url = $uploads->multiUp($_FILES['img_url']);

			$imgs = array();
			foreach($img_url as $v){
				$imgs[] = "public/uploads/goods/gallery/".$v;
			}
			$img['img_url'] = $imgs;
			#批量生成略缩图
			$this->library('Image');
			$thumb_url = new Image();
			foreach($img_url as $v)
			{
				$from_images = UPLOAD_PATH ."goods/gallery/".$v;
				$thumb_urls =$thumb_url->thumbnail($from_images,'51','50',UPLOAD_PATH ."goods/gallery/thumb/");
				$thumb_uri[] = "public/uploads/goods/gallery/thumb/".$thumb_urls;
			}

			$img['thumb_url'] = $thumb_uri;

			$img['img_desc'] = $img_desc;

		}

		#数据验证及处理
		$this->helper("input");
		$data = addslashes_deep($data);
		$data = deepspecialchars($data);

		if($goods_id = $this->GoodsModel->insert("Goods",$data))
		{
			$attr_ids =isset($_POST['attr_id_list'])  ? $_POST['attr_id_list'] : array();
			$attr_value = isset($_POST['attr_value_list']) ? $_POST['attr_value_list']  :  array( );
			$attr_price =  isset($_POST['attr_price_list']) ? $_POST['attr_price_list'] :  array();

			//循环插入
			$emptyModel = M("Model");
			foreach($attr_ids as $k=>$v)
			{
				$list['goods_id'] = $goods_id;
				$list['attr_id'] = $v;
				$list['attr_value'] = $attr_value[$k];
				$list['attr_price'] = $attr_price[$k] + 0;
				$emptyModel->insert("goods_attr",$list);
			}
		
			$emptyModel = M("Model");

			#循环写入相册数据表
			foreach($img as $k=>$v)
			{
				foreach($v as $k1=>$v1)
				{
					$lists[$k1][$k]=$v1;
					$lists[$k1]['goods_id'] =$goods_id;
				}
			}
			foreach($lists as $v)
			{
				$emptyModel->insert("gallery",$v);
			}

		
			$this->_jump("index.php?p=admin&c=goods&a=index","商品添加成功",2);
		}else{
			$this->_jump("index.php?p=admin&c=goods&a=add","商品添加失败",3);
		}

	}

	/**
	 * 删除商品
	 */
	public function delAction()
	{
		$goods_id = $_GET['goods_id'];
		if($this->GoodsModel->delete("goods",array('goods_id' =>$goods_id)))
		{
			$emptyModel = M("Model");
			$emptyModel->delete("goods_attr",array("goods_id"=>$goods_id));
			$this->_jump("index.php?p=admin&c=goods&a=index","商品删除成功",3);
		}else{
			$this->_jump("index.php?p=admin&c=goods&a=index","商品删除失败",3);
		}
	}

	public function editAction()
	{
		$id = $_GET['goods_id'] +0;
		$goods_info = $this->GoodsModel->getGoodsById($id);
		$goods_type = $goods_info['type_id'];
		#获取品牌列表
		$brands = $this->brandModel->get_list('brand');
		#获取分类列表
		$categorys = $this->categoryMode->get_list();
		#获取商品类型列表
		$types = $this->typeModel->get_list();
		#获取商品的相册
		$photo = $this->GoodsModel->getPhotosById($id);

		$this->put("brands",$brands);
		$this->put("categorys",$categorys);
		$this->put("types",$types);
		$this->put("goods",$goods_info);
		$this->put('goods_attr_html',$this->build_attr_html($goods_type, $id));
		$this->put('photo',$photo);
		$this->display('goods_edit.html');
	}

	/**
	 * 保存商品
	 * @access public
	 */
	public function saveAction()
	{
		$goods_id = intval($_POST['goods_id']);
		#手机表单数据
		$data['goods_name'] = trim($_REQUEST['goods_name']);
		$data['goods_sn'] = trim($_POST['goods_sn']);
		$data['goods_desc'] = trim($_POST['goods_desc']);
		$data['cat_id'] = intval($_POST['cat_id']);
		$data['type_id'] = intval($_POST['type_id']);
		$data['brand_id'] = intval($_POST['brand_id']);
		$data['shop_price'] = trim($_POST['shop_price']);
		$data['market_price'] = trim($_POST['market_price']);

		$data['is_promote'] = isset($_POST['is_promote']) ?  $_POST['is_promote'] : 0;
		$data['is_hot'] = isset($_POST['is_best']) ? $_POST['is_best'] : 0;
		$data['is_new'] = isset($_POST['is_new']) ? $_POST['is_new'] : 0;
		$data['is_hot'] = isset($_POST['is_hot']) ? $_POST['is_hot'] : 0;
		$data['is_onsale'] = isset($_POST['is_onsale']) ? $_POST['is_onsale'] : 0;
		$data['goods_number'] = $_POST['goods_number'];
		$data['promote_start_time'] = strtotime($_POST['promote_start_time']);
		$data['promote_end_time'] = strtotime($_POST['promote_end_time']);
		$data['add_time'] = strtotime(date("Y-m-d H:i:s"));
		$auto_thumb  = $_POST['auto_thumb'];

		$img_desc = $_POST['img_desc'];
		#判断商品名称或者商品本店售价是否为空
		if($data['goods_name'] == '')
		{
			$this->_jump("index.php?p=admin&c=goods&a=add","商品名称不能为空",3);
		}elseif($data['shop_price'] == '')
		{
			$this->_jump("index.php?p=admin&c=goods&a=add","商品的本店售价不为空",2);
		}

		#判断是否上传图片
		if($_FILES['goods_img']['tmp_name'] != '')
		{
			$this->library('Upload');
			$upload = new Upload(UPLOAD_PATH."goods/");
			$goods_img = $upload->up($_FILES['goods_img']);
			$data['goods_img'] = "public/uploads/goods/".$goods_img;

			#判断是否自动生成缩略图
			if(isset($auto_thumb) && $auto_thumb === '1')
			{
				$this->library("Image");
				$image = new Image();
				$from_image = UPLOAD_PATH ."goods/".$goods_img;
				$thumb = $image -> thumbnail($from_image,'160','121',UPLOAD_PATH ."goods/".date("Ymd").DS);
			 	$data["goods_thumb"] = "public/uploads/goods/".$thumb;
			}else{
				if($_FILES['goods_thumb']['tmp_name'] != '')
				{
					$goods_thumb = $upload->up($_FILES['goods_thumb']);
					$data['goods_thumb'] = "public/uploads/goods/".$goods_thumb;
				}else{
					$data['goods_thumb'] = "";
				}
			}
		}

		if($_FILES['img_url']['tmp_name']!='')
		{
			$this->library('Upload');
			$uploads = new Upload(UPLOAD_PATH.'goods/gallery/');
			$img_url = $uploads->multiUp($_FILES['img_url']);

			$imgs = array();
			foreach($img_url as $v){
				$imgs[] = "public/uploads/goods/gallery/".$v;
			}
			$img['img_url'] = $imgs;
			#批量生成略缩图
			$this->library('Image');
			$thumb_url = new Image();
			foreach($img_url as $v)
			{
				$from_images = UPLOAD_PATH ."goods/gallery/".$v;
				$thumb_urls =$thumb_url->thumbnail($from_images,'51','50',UPLOAD_PATH ."goods/gallery/thumb/");
				$thumb_uri[] = "public/uploads/goods/gallery/thumb/".$thumb_urls;
			}

			$img['thumb_url'] = $thumb_uri;

			$img['img_desc'] = $img_desc;

		}


		if($this->GoodsModel->update("goods",$data,array("goods_id"=>$goods_id)))
		{
			$attr_ids =isset($_POST['attr_id_list'])  ? $_POST['attr_id_list'] : array();
			$attr_value = isset($_POST['attr_value_list']) ? $_POST['attr_value_list']  :  array( );
			$attr_price =  isset($_POST['attr_price_list']) ? $_POST['attr_price_list'] :  array();
			//循环插入
			$emptyModel = M("Model");
			$emptyModel->delete("goods_attr",array("goods_id"=>$goods_id));
			foreach($attr_ids as $k => $v)
			{
				$list['goods_id'] = $goods_id;
	
				$list['attr_id'] = $v;
				$list['attr_value'] = $attr_value[$k];
				$list['attr_price'] = $attr_price[$k] + 0;
				$emptyModel->insert("goods_attr",$list);
			}

				#循环写入相册数据表
			foreach($img as $k=>$v)
			{
				foreach($v as $k1=>$v1)
				{
					$lists[$k1][$k]=$v1;
					$lists[$k1]['goods_id'] =$goods_id;
				}
			}
			foreach($lists as $v)
			{
				$emptyModel->insert("gallery",$v);
			}
			     $this->_jump("index.php?p=admin&c=goods&a=index","商品更新成功",3);
			
		}else{
				$this->_jump("index.php?p=admin&c=goods&a=edit&goods_id={$goods_id}","商品更新失败",2);
			 }
		

	}	

	/**
	 * 删除相册
	 */

	public function dropimageAction()
	{
		$img_id = $_GET['img_id'];
		$result = $this->GoodsModel->delete("gallery",array('img_id'=>$img_id));
		make_json_result($img_id);
	}

	/**
	 * 获取商品属性列表
	 * @param $goods_id string 商品ID
	 * @param $goods_type string 商品类型ID
	 * @return json 
	 */

	public function getAttrListAction()
	{
		$goods_id = empty($_GET['goods_id']) ? 0 : intval($_GET['goods_id']);
		$goods_type = empty($_GET['goods_type']) ? 0 : intval($_GET['goods_type']);
		$content = $this->build_attr_html($goods_type, $goods_id=0);
		make_json_result($content);

	}

	/**
 * 生成商品属性相关html代码
 *
 * @access  public
 * @param   int     $cat_id    商品分类ID
 * @param   int     $goods_id  商品I
 * @return  string
 */
	function build_attr_html($cat_id, $goods_id = 0)
	{
    $attr = $this->GoodsModel->get_attr_list($cat_id, $goods_id);

    $html = '<table width="100%" id="attrTable">';
    $spec = 0;

    foreach ($attr AS $key => $val)
    {
        $html .= "<tr><td class='label'>";
        if ($val['attr_type'] == 1 || $val['attr_type'] == 2)
        {
            $html .= ($spec != $val['attr_id']) ?
                "<a href='javascript:;' onclick='addSpec(this)'>[+]</a>" :
                "<a href='javascript:;' onclick='removeSpec(this)'>[-]</a>";
            $spec = $val['attr_id'];
        }

        $html .= "$val[attr_name]</td><td><input type='hidden' name='attr_id_list[]' value='$val[attr_id]' />";

        if ($val['attr_input_type'] == 0)
        {
            $html .= '<input name="attr_value_list[]" type="text" value="' .htmlspecialchars($val['attr_value']). '" size="40" /> ';
        }
        elseif ($val['attr_input_type'] == 2)
        {
            $html .= '<textarea name="attr_value_list[]" rows="3" cols="40">' .htmlspecialchars($val['attr_value']). '</textarea>';
        }
        else
        {
            $html .= '<select name="attr_value_list[]">';
            $html .= '<option value="">请选择...</option>';

            $attr_values = explode("\n", $val['attr_values']);
           
            foreach ($attr_values AS $opt)
            {
                $opt    = trim(htmlspecialchars($opt));

                $html   .= ($val['attr_value'] != $opt) ?
                    '<option value="' . $opt . '">' . $opt . '</option>' :
                    '<option value="' . $opt . '" selected="selected">' . $opt . '</option>';
            }
            $html .= '</select> ';
        }

        $html .= ($val['attr_type'] == 1 || $val['attr_type'] == 2) ?
            '属性价格'.' <input type="text" name="attr_price_list[]" value="' . $val['attr_price'] . '" size="5" maxlength="10" />' :
            ' <input type="hidden" name="attr_price_list[]" value="0" />';

        $html .= '</td></tr>';
    }

    $html .= '</table>';

    return $html;
	}


	
}