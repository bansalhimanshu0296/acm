<?php
include 'init.php';
logged_in_redirect();

if(isset($_GET['success'])=== true && empty($_GET['success'])===true)
{
	?>
	<h2>Thanks, we have activated your account</h2>
	<?php
}
else if(isset($_GET['email'], $_GET['email_code'])=== true)
{
	$email= trim($_GET['email']);
	$email_code=trim($_GET['email_code']);
	$t=email_exists($email);
	echo $t;
	if ($t=== false)
	{
	
		$errors[]='Oops, something went wrong and we could not find that email address';

	}
	else if(activate($email, $email_code)=== false)
	{
		$errors[]='we have problems activating your account';
	}
	if(empty($errors)=== false)
	{
		?>
		<h2> Oops</h2>
		<?php
		echo output_errors($errors);
	}
	else
	{
	
		header('Location: activate.php?success');
		
		exit();
	}
}
else

{
	header('Location:index.php');
	exit();
}

?>