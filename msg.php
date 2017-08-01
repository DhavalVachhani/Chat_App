<?php

session_start();

	if(isset($_GET['x']))
	{

	
		include("db.php");
	if(isset($_GET['uname']))
	{
		$uname=$_GET['uname'];
$msg=$_GET['msg'];
$insertQuery="insert into msg(uname,msg) values('$uname','$msg')";

mysqli_query($conn,$insertQuery);
}

	$getMsgQuery='select * from msg order by id desc';

	$result=mysqli_query($conn,$getMsgQuery);

	while($data=mysqli_fetch_assoc($result))
	{
		echo "<h2>".$data['uname'].":</h2><h4>".$data['msg']."</h4><br>";
	}
		
		}

else
{
	header("location:myhome.php");
}