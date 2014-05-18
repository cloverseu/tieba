<?php
//数据库连接
$con = mysql_connect("localhost","root","");
if(!$con){
	die('Error:'.mysql_error());
}
  mysql_select_db("tieba",$con);
?>