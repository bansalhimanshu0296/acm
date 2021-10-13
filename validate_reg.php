<?php
	if(isset($_POST['name'])&&!empty($_POST['name'])&&isset($_POST['email'])&&!empty($_POST['email'])&&isset($_POST['cn'])&&!empty($_POST['cn'])&&isset($_POST['branch'])&&!empty($_POST['branch'])&&isset($_POST['year'])&&!empty($_POST['year']))
	{
		$host='localhost';
		$user_name='juithost';
		$pass='#ripkutta123';
		$contactno=$_POST['cn'];
		$year=$_POST['year'];
		$branch=$_POST['branch'];
		$database_name='juithost_acm';
		$name=$_POST['name'];
		$emailid=$_POST['email'];
		$message=$_POST['message'];
		if(strlen($contactno)==10)
		{
		$interest=$_POST['interest'];
		if(@mysql_connect($host,$user_name,$pass)&& mysql_select_db($database_name))
		{
			$query="INSERT INTO `juithost_acm`.`register`VALUES(NULL,'$name','$emailid','$contactno','$branch','$year','$interest','$message')";
			mysql_query($query);
			
		}
		}
		else{
			$GLOBALS['regerror'] = "enter a valid Contact Number";
		}
		
	}
?>
