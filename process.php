<?php
session_start();

//mysqli_result Object ( [current_field] => 0 [field_count] => 4 [lengths] => [num_rows] => 0 [type] => 0 )

	if(isset($_POST['btnLogin']))
	{
		$name=$_POST['txtName'];
		$password=$_POST['txtPassword'];

		include 'db.php';
	
		$query="select * from user where name='$name' and password='$password' ";

			$result=mysqli_query($conn,$query);
		$data=mysqli_fetch_assoc($result);
		
		var_dump($result);
		
			
		if(mysqli_num_rows($result)==0)
		{
			header('location:login.php?msg');
		}
		else
		{
			$_SESSION['userName']=$name;
			
			header("location:myhome.php");
	
		}
	}

else
{
	header('location:login.php');
}
	
	
	