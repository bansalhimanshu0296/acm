<?php

include 'connect.php';

if (isset($_GET['success']) && empty($_GET['success']))
{
	echo "Done!!!";
}
else 
{

		if( empty($_POST)=== false && empty($errors) === true)
{
$quote=""; 



if( isset($_POST['quote']))
{
    $quote=$_POST['quote'];
}

	$insert=mysql_query("INSERT INTO valentine VALUES(NULL,'$quote')");


header('Location: valentine.php?success');
exit();


}
else if(empty($errors)=== false)
$err= output_errors($errors);


}


?>

<html>
<title>
Quotes

</title>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="bootstrap.css" type="text/css">
<link rel="stylesheet" href="bootstrap.min.css" type="text/css">
<body>
<nav class="navbar navbar-default ">
  <div class="container-fluid">
    <div class="navbar-header">
      
    </div>
   
    <ul class="nav navbar-nav navbar-right">
      
      <li><a href="hug.php"><span></span>Hug</a></li>
      <li><a href="chocolate.php"><span></span>chocolate</a></li>
      <li><a href="promise.php"><span></span>promise</a></li>
      <li><a href="kiss.php"><span></span>kiss</a></li>
      <li><a href="propose.php"><span></span>propose</a></li>
      <li><a href="valentine.php"><span></span>valentine</a></li>
      <li><a href="teddy.php"><span></span>teddy</a></li>
      
      
    </ul>
  </div>
</nav>
<form action="valentine.php" method="POST">
  
    <center><textarea type="text" rows="7" name="quote" placeholder="valentine quote" required="required"></textarea><br><br>
    <input type="submit" value="Submit"></center>
  
</form>

</body>

</html>