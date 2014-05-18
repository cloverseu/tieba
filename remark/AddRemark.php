<?php
require_once 'RemarkController.class.php';
	//添加新的评论
	$model = new Getremark;
	$result = $model->addremark();
	$info = mysql_fetch_row($result);
	$receive=json_encode($info);
	echo $receive;
	

?>
