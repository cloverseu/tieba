<?php
require_once 'indexController.class.php';
	//添加新数据
	$model = new GetInfo;
	$result = $model->addInfo();
	$info = mysql_fetch_row($result);
	$receive=json_encode($info);
	echo $receive;
	

?>
