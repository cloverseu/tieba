<?php
require_once 'indexController.class.php';

//获取所有数据

$model = new GetInfo;
$info = $model->getAll();

?>