<?php
require_once '../config.php';
header("Content-Type:text/html;charset=utf-8");
header("Cache-Control:no-cache");


//获取关键字并查询结果
class SearchInfo{
	public function Getinfo($keys){
	$receive = mysql_query("select * from content where title like '%$keys%'");
	return $receive;
	mysql_close($con);}
}
?>
