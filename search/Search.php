<html>
	<head>
			
		<title>贴吧</title>
			<meta http-equiv="content-type" content="text/html;charset=utf-8"/>	
			<script type="text/javascript" src="index.js"></script>		
	</head>

	<?php
		require_once 'SearchController.php';
	?>

	<body>
		


		<div name="content">
			<ul>
				<?php while($value = mysql_fetch_array($keyinfo)){?>
				<li>
					<div><a href="../remark/Remark.php?tid=<?php echo htmlspecialchars($value['tid'])?>"><?php echo htmlspecialchars($value['title'])?></a></div>
					<div><?php echo htmlspecialchars($value['username'])?></div>
					<div><?php echo date($value['time'])?></div>
				</li>
				<hr>
				<?php }?>
			<ul/>
		</div>

	</body>
</html>