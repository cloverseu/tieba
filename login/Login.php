<html>
	<head>
		<title>用户登录</title>
			<meta http-equiv="content-type" content="text/html;charset=utf-8"/>	
			<script type="text/javascript" src="../public/login.js"></script>		
	</head>
	<body>
		<center>
		<h1>欢迎您登录贴吧</h1>
		用户名:<input id="username" type="text" Onchange="Check()"></br>
		密码：<input id="password" type="password"></br>
		<button Onclick="Register()">注册</button>
		<button Onclick="Login()">登录</button>
		<div id="check"></div>
		</center>
	</body>
</html>
