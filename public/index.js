		//创建ajax
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


		//添加新的信息
		function Postmes(){
			var title=document.getElementById('title').value;
			var content=document.getElementById('content').value;
			var module="addInfo";
			var ajax=getXmlHttp();

			if(ajax){
				var url="AddInfo.php";
				var data="title="+title+"&content="+content+"&module="+module;
				ajax.open("post",url,true);
				ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
				ajax.onreadystatechange=function(){
				if(ajax.readyState==4 && ajax.status==200)
				    {	
				    	var info=ajax.responseText;
				    	var info_obj=eval("("+info+")");
				    	var str="<li><div><a href=\"remark.php?tid="+info_obj[0]+"\">"+info_obj[1]+"</a></div>"+"<div>"+info_obj[4]+"</div>"+"<div>"+info_obj[3]+"</div></li><hr>";
				    	//创建新节点并插入数据
				    	var thediv=document.getElementById("add");
				    	var newnode=document.createElement('div');
				    	newnode.innerHTML=str;
				    	thediv.appendChild(newnode);

				    }
				   } 
				ajax.send(data);	
			}

		}

		//查询信息
		function Search(){
			var keys=document.getElementById('search').value;
			var myajax=getXmlHttp();
			var data="keys="+keys;
			var url="../search/SearchController.php";
			myajax.open("POST",url,true);
			myajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
			myajax.onreadystatechange=function(){
				if(myajax.readyState==4 && myajax.status==200){
					window.open("../search/Search.php?keys="+keys);
				}

			}
			myajax.send(data);
		}

		//添加新的评论
		function Postrmk(obj){
			var remark=document.getElementById('content').value;
			var module="addInfo";
			var ajax=getXmlHttp();
			var	tid=obj;

			if(ajax){
				var url="AddRemark.php";
				var data="remark="+remark+"&tid="+tid;
				ajax.open("post",url,true);
				ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
				ajax.onreadystatechange=function(){
				if(ajax.readyState==4 && ajax.status==200)
				    {	
				    	var info=ajax.responseText;
				    	var info_obj=eval("("+info+")");
				    	//创建新节点
				    	var str="<li><div>"+info_obj[1]+"<div>"+"---"+info_obj[2]+" 评论于"+info_obj[3]+"</div></li><hr>";
				    	var thediv=document.getElementById("remark");
				    	var newnode=document.createElement('div');
				    	newnode.innerHTML=str;
				    	thediv.appendChild(newnode);
				    }
				   } 
				ajax.send(data);	
			}

		}
