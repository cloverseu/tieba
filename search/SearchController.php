<?php
	require_once 'SearchController.class.php';
	// 获取关键字并查询结果
	$keys = $_GET['keys'];
	$info = new SearchInfo;
	$keyinfo = $info->GetInfo($keys);
	

?>