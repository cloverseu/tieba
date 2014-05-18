<html>
	<head>
		<title>留言</title>
			<meta http-equiv="content-type" content="text/html;charset=utf-8"/>	
			<script type="text/javascript" src="../public/index.js"></script>
	</head>

	<?php
	require_once 'RemarkController.php';
	$tid=$_GET['tid'];
	?>

	<body>
	<div name="content">
			<ul>
				<?php while($value = mysql_fetch_array($content)){?>
				<li>
					<div><h3><?php echo htmlspecialchars($value['title'])?></h3></div>
					<div><?php echo htmlspecialchars($value['content'])?></div>
					<div>---<?php echo htmlspecialchars($value['username'])?> 发布于<?php echo date($value['time'])?></div>
				<hr>
				</li>
				<?php }?>
				<?php while($rmk = mysql_fetch_array($remark)){?>
				<li>
					<div><?php echo htmlspecialchars($rmk['remark'])?></div>
					<div>---<?php echo htmlspecialchars($rmk['remarker'])?>
					评论于<?php echo htmlspecialchars($rmk['time'])?> <?php echo date($value['time'])?></div>
				<hr>
				</li>
				<?php }?>
				<div id="remark"></div>

			<ul/>
		</div>

		<div id="postremark">
		<label>内容<label><br>
		<textarea cols="50" rows="20" id="content"></textarea></br>
		<button onclick="Postrmk('<?php echo $tid;?>')">提交</button>
		</div>
	</body>
</html>