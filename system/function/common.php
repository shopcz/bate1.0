<?php
/**
 * 公共函数
 */
/**
 * 创建一个json结果
 * @access public
 * @param $content string
 * @param $message string
 * @param $append array()
 * @return void
 */
function make_json_result($content, $message='', $append=array())
{
	make_json_response($content, 0, $message, $append);
}
/**
 *
 * @access  public
 * @param   string      $content
 * @param   integer     $error
 * @param   string      $message
 * @param   array       $append
 * @return  void
 */
function make_json_response($content='', $error="0", $message='', $append=array())
{
	include_once(LIB_PATH . 'Json.class.php');
	$json = new JSON;

	$res = array('error' => $error, 'message' => $message, 'content' => $content);
	if(!empty($append))
	{
		foreach($append as $key => $val)
		{
			$res[$key] = $val;
		}
	}
	$val = $json->encode($res);
	exit($val);
}

/**
 * json错误提示 
 * @access  public
 * @param   string  $msg
 * @return  void
 */
function make_json_error($msg)
{
	make_json_response('', 1, $msg);
}

function tojson($data)
{
	header('Content-Type:application/json; charset=utf-8');
	exit(json_encode($data));
}