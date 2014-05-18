<html>
	<head>
			
		<title>贴吧</title>
			<meta http-equiv="content-type" content="text/html;charset=utf-8"/>	
			<script type="text/javascript" src="../public/index.js"></script>		
	</head>

	<?php
		session_start();
		$username=$_SESSION['username'];
		require_once 'IndexController.php';
	?>

	<body>

		<div>welcome,<?php echo $username?></div>
		
		<div >
			<input type="text" id="search">
			<button Onclick="Search()">搜索</button>
		</div>


		<div name="content">
			<ul>
					
				<?php while($value = mysql_fetch_array($info)){?>
				<li>
					<div><a href="../remark/remark.php?tid=<?php echo htmlspecialchars($value['tid'])?>" target="_blank"><?php echo htmlspecialchars($value['title'])?></a></div>
					<div><?php echo htmlspecialchars($value['username'])?></div>
					<div><?php echo date($value['time'])?></div>
					<hr>
				</li>
				<?php }?>
				<div id="add"></div>	
			<ul/>
		</div>

		<div id="remark"></div>

		<div id="postmes">
		<label>标题</label>
		<input type="text" id="title"></br>
		<label>内容<label><br>
		<textarea cols="50" rows="20" id="content"></textarea></br>
		<button onclick="Postmes()">提交</button>
		</div>
	</body>
</html>