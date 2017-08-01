<?php
session_start();
	
	if(!isset($_SESSION['userName']))
	{
		header('location:login.php');
	}

?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Chat</title>

<style>
	
	div
	{
		color: aqua;
	
}

	html
	{
		color: coral;
		background:rgba(98,90,91,1.00);
	
	}
	

	h2 {
  display: inline-block;
  margin-right: 10px;
  width: 100px;
color:coral;
  
}
	h4{
  display: inline-block;
  width: 200px;
	color: chartreuse;
 
}
	
	</style>

<script type="application/javascript">

	
	function z()
	{
		
	
		var uname=document.getElementById('uname').innerHTML;
		
		var msg=document.getElementById('txtArea').value;
		if(uname=='' || msg=='')
			{
				alert("Field Cannot be Empty");
			}
		else{
				
	var req=new XMLHttpRequest();
	
	req.onreadystatechange=function()
	{
		if(req.readyState==4 && req.status==200)
			{
				document.getElementById('chatlogs').innerHTML=req.responseText;
			}
	}
	
		
		req.open('get',"msg.php?uname="+uname+"&msg="+msg+"&x",true);
		req.send();
				
			document.getElementById('txtArea').value='';
	
		}
	}
	
	
	
	function x()
	{
		
		
	var req=new XMLHttpRequest();
	
	req.onreadystatechange=function()
	{
		if(req.readyState==4 && req.status==200)
			{
				document.getElementById('chatlogs').innerHTML=req.responseText;
			}
	}
	
		
		req.open('get',"msg.php?refresh=ok&x",true);
		req.send();
				
			
	
		}
	
	
	
	setInterval(x,1000);
	
	
	</script>


</head >

<body>


<h1 align="center" id="uname"><?php 
			
			if(isset($_SESSION['userName']))
			{
				echo $_SESSION['userName'];
			}
	
	?> 
  </h1>
  
<h3 align="right"><a href="signout.php?signout">LogOut</a></h3>
<h3>Message</h3>
<textarea name="txtArea" id="txtArea" cols="50" rows="5"></textarea>

<br>

<button onClick="z()" style="font-size: 20px;padding: 5px 10px;border-radius: 8px;	position: relative;
		left: 140px;top:25px" ></bu>Send</button>


<br>
<br>
<br>
<br>
		<h1 align="center">Chats</h1>
		
<div  id="chatlogs" align="center">
		
</div>


</body>
</html>