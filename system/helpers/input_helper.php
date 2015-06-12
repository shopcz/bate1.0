<?php

#批量转义
function deepspecialchars($data)
{
	if(empty($data))
	{
		return $data;
	}

	//比较
	return is_array($data) ? array_map('deepspecialchars', $data) : htmlspecialchars($data);

}