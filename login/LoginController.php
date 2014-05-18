<?php
	header("Content-Type:text/html;charset=utf-8");
	//接收数据
	$username=$_POST['username'];
	$password=md5($_POST['password']);
	$module=$_POST['module'];
	//保留用户名
	session_start();
	$_SESSION['username']=$username;
	

	//不同module对应不同的操作
	
	if($module=="login"){
		//连接数据库并存入数据
		$con=mysql_connect("localhost","root","");
		mysql_select_db("tieba",$con);
		$receive=mysql_query("select password from user where username=\"$username\"");
		$pwd=mysql_fetch_row($receive);
		//判断用户名密码是否正确，1表示正确
		if($password==$pwd[0]){
			$state=1;
		}else{
			$state=0;
		}
		mysql_close($con);
		echo $state;
	}	


	if($module=="register"){
		$con=mysql_connect("localhost","root","");
		mysql_select_db("tieba",$con);
		$check=mysql_query("select password from user where username=\"$username\"");
		$pwd=mysql_fetch_row($check);
		//检查该用户是否存在，存在不能注册
		if(!$pwd){
		$receive=mysql_query("insert into user (username,password) values (\"$username\",\"$password\")");
		}
		if($receive){
			$state=1;
		}else{
			$state=0;
		}
		mysql_close($con);
		echo $state;
	}

	if($module=="check"){
		$con=mysql_connect("localhost","root","");
		mysql_select_db("tieba",$con);
		$receive=mysql_query("select * from user where username=\"$username\"");
		$verify=mysql_fetch_row($receive);
		//验证用户是否已经注册
		if($verify){
			$state=1;
		}else{
			$state=0;
		}
		mysql_close($con);
		echo $state;
	}


?>