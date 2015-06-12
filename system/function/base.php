<?php

	/**
	 * M函数，实例化Model类
	 */
	function M($model,$data =null)
	{
		$model_path = MODEL_PATH . $model .'Model.class.php';
		$model_name = $model.'Model';
		if(file_exists($model_path))
		{
			$model = new $model_name($data);
			return $model;
		}else{
			if($model =='Model')
			{
				$model = new $model($data);
			}else{
			return '不存在该模型';
			}
		}
		return $model;
	}
	/**
	 * C函数，读取配置文件
	 */

	function C($item)
	{
		$config_file = CONFIG_PATH .'config.php';
		if(file_exists($config_file))
		{
			return $GLOBALS['config'][$item];
		}else{
			return false;
		}
		
	}
	
	/**
	 *  循环使用反斜线引用字符串
	 * @access public
	 * @param mix $value
	 * 
	 * @return mix
	 */
	function addslashes_deep($value)
	{
		if(empty($value))
		{
			return $value;
		}else{
			return is_array($value) ? array_map('addslashes_deep',$value) : addslashes($value);
		}
	}
	
	/**
	 * 给对象批量添加反斜杠
	 * @access public
	 * @param $obj
	 * @return mix
	 */
	function addslashes_deep_obj($obj)
	{
		if(is_object($obj) == true)
		{
			foreach ($$obj as $key => $val) {
				# code...
				$obj->$key = addslashes_deep($val);
			}
		}else{
			$obj = addslashes_deep($obj);
		}
		return $obj;
	}