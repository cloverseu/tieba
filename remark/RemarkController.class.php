<?php
	//连接数据库
	require_once '../config.php';
	header("Content-Type:text/html;charset=utf-8");
	header("Cache-Control:no-cache");
	

	//获取数据并存入数据库,并取出当前这条数据
	class GetRemark{
	public function addremark(){	
	$remark=$_POST['remark'];
	$tid=$_POST['tid'];
	session_start();
	$remarker=$_SESSION['username'];
	// 创建sql语句,存入数据
	$sql = "insert into remark (remarker,remark,time,tid) values (\"$remarker\",\"$remark\",now(),\"$tid\")";
	$check = mysql_query($sql);
	//取出该数据
	if($check){
		$num = mysql_query("select LAST_INSERT_ID()");
		$row = mysql_fetch_row($num);
		$info = mysql_query("select * from remark where uid=$row[0]");
		return $info;
	}
	mysql_close($con);
	}

	
	
    }

?>