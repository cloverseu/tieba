		//创建AJAX
		function getXmlHttp(){
		if (window.XMLHttpRequest)
		  {// code for IE7+, Firefox, Chrome, Opera, Safari
		  xmlhttp=new XMLHttpRequest();
		  }
		else
		  {// code for IE6, IE5
		  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		  }
		  return xmlhttp;
	};	

	

//获取用户名与密码
	function Login(){
		var username = document.getElementById('username').value;
		var password = document.getElementById('password').value;
		var module = "login";
		var url="LoginController.php";

		var data="username="+username+"&password="+password+"&module="+module;
		var ajax=getXmlHttp();
		
		if(ajax){
			ajax.open("POST",url,true);
			ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
			ajax.onreadystatechange=function(){
				if(ajax.readyState==4){
					var status=ajax.responseText;
					if(status==1){
					alert("welcome");
					window.open('../index/Index.php')
				}else{
					alert("error");
				}
				}
			}
		}
		ajax.send(data);
	}

	//注册信息
	function Register(){
		var username = document.getElementById('username').value;
		var password = document.getElementById('password').value;
		var module = "register";
		var url="LoginController.php";

		var data="username="+username+"&password="+password+"&module="+module;
		var ajax=getXmlHttp();
		
		if(ajax){
			ajax.open("POST",url,true);
			ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
			ajax.onreadystatechange=function(){
				if(ajax.readyState==4){
					var status=ajax.responseText;
					if(status==1){
					alert("success");
					window.open('Index.php');
				}else{
					alert("该用户已经存在");
				}
				}
			}
		}
		ajax.send(data);
	}

	//验证用户是否已经注册
	function Check(){
		var username = document.getElementById('username').value;
		var password = "0";
		var module = "check";
		var url="LoginController.php";

		var data="username="+username+"&password="+password+"&module="+module;
		var ajax=getXmlHttp();
		
		if(ajax){
			ajax.open("POST",url,true);
			ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
			ajax.onreadystatechange=function(){
				if(ajax.readyState==4){
					var status=ajax.responseText;
					if(status==1){
					document.getElementById('check').innerHTML="该用户已经注册，您可以直接登录";
				}else{
					document.getElementById('check').innerHTML="该用户未注册，您需要注册";
				}
				}
			}
		}
		ajax.send(data);

	}

