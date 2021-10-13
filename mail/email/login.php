<?php
include 'init.php';
logged_in_redirect();
if(empty($_POST)=== false)
{
	$username=$_POST['username'];
	$password=$_POST['password'];

	if(empty($username)=== true || empty($password)=== true)
	{
		$errors[]='You need to enter a username and password';

	}
	else if (user_exists($username)=== false)
	{
		$errors[]='Your username doesnot exists';
	}
	else if(user_active($username)=== false)
	{
		$errors[]='You havn\'t activated your account.Please check your mail';

	}
	else

	{
		if(strlen($password)> 32)
		{
			$errors[]='password too long';
		}
		$login = login($username, $password);
		
		if($login === false)
		{
			$errors[]='That username/password combination is incorrect';

		}
		else
		{
			$_SESSION['user_id']=$login;
			
			header('location:index.php');
			exit();
		}
	}
	print_r($errors);
	
}


?>




