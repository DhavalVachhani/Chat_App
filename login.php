
<?php
session_start();
	if(isset($_SESSION['userName']))
	{
		header('location:myhome.php');
	}

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
</head>

<body>

<h3><?php  if(isset($_GET['msg'])) echo 'Wrong email or password'; ?></h3>

<form action="process.php" method="post">

	<div id="div">
		
	
	<table border="2" cellspacing="0" cellpadding="5">
	
			<tr>
				<th>Name</th>
				<td><input type="text" id="txtName" name="txtName"></td>	
			</tr>
			
			
			<tr>
				<th>Password</th>
				<td><input type="password" id="txtPassword" name="txtPassword"></td>	
			</tr>
			
			<tr>
			
				<td colspan="2" align="center"><input type="submit" id="btnLogin" name="btnLogin" value="LogIn"></td>
			
			</tr>
			
	</table>
	
		</div>
		
	
</form>
	
</body>

</html>