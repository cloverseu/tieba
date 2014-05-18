<?php
	//连接数据库
	require_once '../config.php';
	header("Content-Type:text/html;charset=utf-8");
	header("Cache-Control:no-cache");
	

	//存入写入的数据

	//获取数据并存入数据库,并取出当前这条数据
	class GetInfo{
	public function addInfo(){	
	$title=$_POST['title'];
	$content=$_POST['content'];
	session_start();
	$username=$_SESSION['username'];
	// 创建sql语句,存入数据
	$sql = "insert into content (username,title,content,time) values (\"$username\",\"$title\",\"$content\",now())";
	$check = mysql_query($sql);
	//数据成功存入后取出该条数据
	if($check){
		$num = mysql_query("select LAST_INSERT_ID()");
		$row = mysql_fetch_row($num);
		$info = mysql_query("select * from content where tid=$row[0]");
		return $info;
	}
	mysql_close($con);
	}

	//获取所有数据
	public function getAll(){
		$sql = "select * from content";
		$result = mysql_query($sql);
		return $result;
		
		mysql_close($con);
	}
	
    }




?>