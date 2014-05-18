<?php
require_once '../config.php';
	//获取所有发布内容
	$tid = $_GET['tid'];
	$content = mysql_query("select * from content where tid=$tid");

	//获取评论的内容
	$remark = mysql_query("select * from remark where tid=$tid");

?>	