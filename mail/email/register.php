<?php
include 'init.php';

logged_in_redirect();


if(empty($_POST) === false)
{
	$required_fields=array('username','password_again','first_name','email');
	foreach ($_POST as $key => $value) {
		if (empty($value) && in_array($key,$required_fields)===true)
		{
			$errors[]='Fields marked with an asterisk are required';
			break 1;

		}
		# code...
	}
	if (empty($errors)=== true)
	{
		if(user_exists($_POST['username'])=== true)
		{
			$errors[]='Sorry, the username \''.$_POST['username'].'\'is already taken';

		}
		if (preg_match("/\\s/", $_POST['username'])===true)
		{
			$errors[]='Your username must not contain any spaces.';
		}
		if (strlen($_POST['password'])<6)
		{
			$errors[]='Your password must be atleast of 6 characters';
		}
		if($_POST['password']!==$_POST['password_again'])
		{
			$errors[]='Your passwords do not match';
		}
		if(filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)=== false)
		{
			$errors[]='A valid email address is required';
		}
		if(email_exists($_POST['email'])=== true)
		{
			$errors[]='Sorry, this email already in use';
		}
	}
}


?>

<h1> Register</h1>

<?php
if (isset($_GET['success']) && empty($_GET['success']))
{
	echo "You have been registered successfully!";
}
else
{
	if(empty($_POST)=== false && empty($errors)=== true)
	{
		$register_data= array('username' => $_POST['username'],
		'password' => md5($_POST['password']),
'first_name' => $_POST['first_name'],
'last_name' => $_POST['last_name'],
'email' => $_POST['email'],
'email_code' => md5($_POST['username']+ microtime()))
;

	
	register_user($register_data);
	header('Location: register.php?success');
	exit();
}
else if(empty($errors)=== false)
echo output_errors($errors);
}


?>

<html>
<head>
</head>
<body>
<form method="post" action="register.php">
        <p><input type="text" name="username" value="" placeholder="Username"></p>
        <p><input type="password" name="password" value="" placeholder="Password"></p>
         <p><input type="password" name="password_again" value="" placeholder="Password again"></p>
       <p><input type="text" name="first_name" value="" placeholder="firstname"></p>
        <p><input type="text" name="last_name" value="" placeholder="Lastname"></p>
       <p><input type="text" name="email" value="" placeholder="Email"></p>
       <p class="submit"><input type="submit" name="commit" value="Register"></p>
      </form>
     <br> <a href="login1.php">Login here</a>
</body>
</html>

